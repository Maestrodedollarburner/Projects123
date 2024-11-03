const {
  StatusCodes
} = require("http-status-codes");
const Sherp = require("../models/sherp");
const {
  BadRequestError,
  NotFoundError
} = require("../errors");
const asyncHandler = require('express-async-handler')

const getAllSherps = asyncHandler(async (req, res) => {
  const sherp = await Sherp.find({
  }).sort("createdAt");
  res.status(StatusCodes.OK).json({
    sherp,
    count: sherp.length
  });
})

const createSherp = asyncHandler(async (req, res) => {
  // req.body.initBy = req.user.email;
  const sherp = await Sherp.create(req.body);
  res.status(StatusCodes.CREATED).json({
    sherp
  });
  console.log(sherp)
  // res.send(req.body)
});

const getSherp = asyncHandler(async (req, res) => {
  const {
    user: {
      email
    },
    params: {
      id: sherpId
    },
  } = req;
  const sherp = await Sherp.findOne({
    _id: sherpId,
    initBy: email,
  });
  if (!email) {
    throw new NotFoundError("No Sherp with id found");
  }
  res.status(StatusCodes.OK).json({
    sherp
  });
});

const updateSherp = asyncHandler(async (req, res) => {
  const {
    body: {
      name,
      address,
      meterNum,
      meterRead
    },
    user: {
      userId
    },
    params: {
      id: sherpId
    },
  } = req;
  if (!name || !address || !meterRead || !meterNum) {
    throw new BadRequestError("name, address, meter Number or meter Reading fields cannot be empty");
  }

  const sherp = await Sherp.findOneAndUpdate({
      _id: sherpId,
      initBy: email
    },
    req.body, {
      new: true,
      runValidators: true
    }
  );


  if (!sherp) {
    throw new NotFoundError(`No sherp with id ${sherpId}`);
  }
  res.status(StatusCodes.OK).json({
    sherp
  });
});

const deleteSherp = asyncHandler(async (req, res) => {
  const {
    user: {
      email
    },
    params: {
      id: sherpId
    },
  } = req;
  const sherp = await Sherp.findByIdAndRemove({
    _id: sherpId,
    initBy: email
  })
  if (!sherp) {
    throw new NotFoundError(`No sherp with id ${sherpId}`);
  }
  res.status(StatusCodes.OK).send();
});

module.exports = {
  getAllSherps,
  getSherp,
  createSherp,
  updateSherp,
  deleteSherp,
};