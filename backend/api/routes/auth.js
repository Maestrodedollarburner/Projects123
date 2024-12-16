const express = require('express')
const { login, register, requestPasswwordReset, resetPassword } = require("../controllers/auth");
const router = express.Router()

router.route('/login').post(login)
router.route('/register').post(register)
router.route('/requestPasswwordReset').post(requestPasswwordReset)
router.route('/resetPassword').post(resetPassword)
module.exports = router