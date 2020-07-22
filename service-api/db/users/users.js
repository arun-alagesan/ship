const db = require('../mysql/server');
let users ={};

users.list = () => {
    let sql = 'select * from login ';
    try{
        let users = db.executeQuery(sql);
        return users;
    }
    catch(error){
        console.log(error)
        throw new Error(error.message);
    }
}

users.getUser = (userName) => {
    let sql = `select * from login where name ='${userName}'`;
    try{
        let user = db.executeQuery(sql);
        return user;
    }
    catch(error){
        console.log(error)
        throw new Error(error.message);
    }
    
}

module.exports = users;