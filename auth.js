const { StatusCodes } = require("http-status-codes");
const User = require("../models/user");
const { BadRequestError, UnauthentiacatedError } = require("../errors");
const bcrypt = require("bcryptjs");
const asyncHandler = require("express-async-handler");
const jwt = require("jsonwebtoken");

//register
const register = asyncHandler(async (req, res) => {
  const user = await User.create({ ...req.body });
  console.log(user)
  const token = user.createJWT();
  res
    .status(StatusCodes.CREATED)
    .json({ user: { email: user.email }, token });
});

//login
const login = asyncHandler(async (req, res) => {
  const { email, password } = req.body;
  if (!email || !password) {
    throw new BadRequestError("please provide email and password");
  }
  const user = await User.findOne({ email });
  if (!user) {
    throw new UnauthentiacatedError("Invalid credentials");
  }
  //compare passwords
  const isPasswordCorrect = await user.comparePassword(password)
  if (!isPasswordCorrect) {
    throw new UnauthentiacatedError("Invalid credentials");
  }
  console.log('signed in')
  const token = user.createJWT();
  res.status(StatusCodes.OK).json({ user: { email: user.email }, token });
});

module.exports = {
  register,
  login,
};
