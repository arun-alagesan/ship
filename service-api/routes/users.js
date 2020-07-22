var express = require('express');
var router = express.Router();

var usersController = require('../controllers/users/usersController');


router.get('/',usersController.listusers);

router.post('/login',usersController.login);

module.exports = router;