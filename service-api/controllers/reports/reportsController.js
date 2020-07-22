var reportsBusinees = require('../../business/reports/reports');
const reportsController = {
    _reports : [],
    reports : async (req,res) => {
        try{
            var result = await reportsBusinees.getReports();
            res.json({status : 'success', data : result});
        }
        catch (error){
            res.status(500).json({status : 'failure', message : error.message, error : error});
        }
    },

    createReport: (report) => {

        _reports.push(report);
    },

    deleteReport : (reportId) => {
        _reports.slice(id);
    }
}

module.exports = reportsController;