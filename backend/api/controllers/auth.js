const {
  StatusCodes
} = require("http-status-codes");
const User = require("../models/user");
const {
  BadRequestError,
  UnauthentiacatedError
} = require("../errors");
const bcrypt = require("bcryptjs");
const asyncHandler = require("express-async-handler");
const jwt = require("jsonwebtoken");

//register
const register = asyncHandler(async (req, res) => {
  const user = await User.create({
    ...req.body
  });
  const token = user.createJWT();
  res
    .status(StatusCodes.CREATED)
    .json({
      user: {
        name: user.username
      },
      token
    });
});

//login
const login = asyncHandler(async (req, res) => {
  const {
    email,
    password
  } = req.body;
  if (!email || !password) {
    throw new BadRequestError("please provide email and password");
  }
  const user = await User.findOne({
    email
  });
  if (!user) {
    throw new UnauthentiacatedError("Invalid credentials");
  }

  //compare passwords
  const isPasswordCorrect = await user.comparePassword(password)
  console.log(password, isPasswordCorrect, user.password)


  if (!isPasswordCorrect) {
    throw new UnauthentiacatedError("Invalid credentials");
  }
  const token = user.createJWT();
  res.status(StatusCodes.OK).json({
    user: {
      email: user.email,
      name: user.fullname
    },
    token
  });
});



const requestPasswwordReset = asyncHandler(async (req, res) => {

  const {
    email
  } = req.body;
  console.log(email)
  try {
    const user = await User.findOne({
      email
    });
    if (!user) return res.status(404).json({
      message: "User doesn't exist"
    });


    const secret = process.env.JWT + user.password;
    const token = jwt.sign({
      id: user._id,
      email: user.email
    }, secret, {
      expiresIn: '24h'
    });
    res.status(StatusCodes.OK).json({
      message: "Password reset link sent",
      userId: user._id,
      token
    });

  } catch (error) {
    res.status(500).json({
      message: 'Something went wrong'
    });
  }
})


const resetPassword = async (req, res, next) => {
  // const {
  //   id,
  //   token
  // } = req.params;
  const {
    id,
    token,
    password
  } = req.body;

  try {
    const user = await User.findOne({
      _id: id
    });
    if (!user) {
      return res.status(400).json({
        message: "User not exists!"
      });
    }

    const secret = process.env.JWT_SECRET;



    // const verify = jwt.verify(token, 'maestro');
    // console.log(verify);
    // if (!verify) {
    //   throw new UnauthentiacatedError("Invalid credentials");

    // }

    const salt = await bcrypt.genSalt(10);
    const encryptedPassword = await bcrypt.hash(password, salt);
    await User.findOneAndUpdate({
      _id: id,
    }, {
      password: encryptedPassword
    }, {
      new: true,
      runValidators: true
    });

    // await user.save();

    res.status(200).json({
      message: 'Password has been reset',
      encr: encryptedPassword,
      password
    });
  } catch (error) {
    console.log(error);
    res.status(500).json({
      message: 'Something went wrong'
    });
  }
};

module.exports = {
  register,
  login,
  requestPasswwordReset,
  resetPassword,
};