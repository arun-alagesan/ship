var express = require('express');
var router = express.Router();

var reportsController = require('../controllers/reports/reportsController');


router.get('/',reportsController.reports)

module.exports = router;