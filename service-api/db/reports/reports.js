var db = require('../mysql/server');
var moment = require('moment');
var mockedData = require('../mock/mock');

var config = require('../../config');

const report = {

    mocked : config.mocked || true,

    list : () =>{
        try{
            if(!this.mocked){
                var reportsList =[];
                var reportCount = mockedData.length;
                if(reportCount > 0){
                    mockedData.forEach((item,i) => {
                        reportsList.push({
                            id : item.id, 
                            type : item.type.description,
                            number : item.number,
                            createdDate : moment(item.createdDate).format('MM/DD/yyyy'),
                            createdBy : item.createdBy,
                            status : item.status.description
                        });
                    });
                }
                return reportsList;
            }
            else{
                let sql = 'select * from reports orderby created desc';
                return db.executeQuery(sql);
            }
        }
        catch(error){
            //add additional logger services
            console.log(error);
            throw error;
        }
    }
}

module.exports = report;