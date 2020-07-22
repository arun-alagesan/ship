const sql = require('mysql');
let config = require('../../config');

const option = {
    host : config.mySql.host || 'localhost',
    user : config.mySql.user || 'seeas_user',
    password : config.mySql.password || 'mumbai@123',
    database : config.mySql.database || 'seeas_mumbai',
}

let mySql = {};



mySql.healthy  = () =>{

    return new Promise((resolve,reject)=>{
        var db = sql.createConnection(option);
        db.connect((err)=>{
            if(err)
            {
                console.log(err);
                return reject ({status: 'Unhealthy', error: err});
            } 
            else
            {
                db.end();
                 return resolve({status: 'Healthy', message : 'Succeeded conncetion to the server'});
            }
         });

    });
}

mySql.connect = () =>{

    return new Promise((resolve,reject)=>{
        var db = sql.createConnection(option);
        var conn = db.getConnetion((err)=>{
            if(err){
                console.log(err);
                conn.end();
                return reject({status : 'failure', message:'unable to connect to server'});
            }
        });   
        return resolve (conn);     
    });

}

mySql.executeQuery =  (queryText) => {
    return new Promise((resolve,reject)=>{
        var db = sql.createConnection(option);
        try{
            db.query(queryText,(err,rows,fields)=>{
                console.log(queryText);
                if(err){
                    var s ={
                        status : 'failure',
                        message : 'unable to execute the query',
                        error : err
                    };
                    db.end();
                    console.log(s);
                    return reject(s);
                }
                else{
                    var s = {
                        status : 'success',
                        result : rows,
                        fields : fields
                    }
                    db.end();
                    //console.log(s);
                    return resolve(s);
                }
            });

        }catch(error){
            console.log(error);
            return reject(error);
        }
    });
}

module.exports = mySql;

