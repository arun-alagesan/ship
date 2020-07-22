var reportsDB = require('../../db/reports/reports');
const reportsBusiness = {
    _reports : [],
    getReports : () => {
        return new Promise((resolve,reject) => {
            try{
            let reports = reportsDB.list(); 
            resolve (reports);
            }
            catch (error){
                reject(error);
            }
        });
    },

    createReport: (report) => {

        _reports.push(report);
    },

    deleteReport : (reportId) => {
        _reports.slice(id);
    }
}

module.exports = reportsBusiness;