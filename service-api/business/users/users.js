var usersDB = require('../../db/users/users');
const reportsBusiness = {
    _users : [],
    getUser : (userName) => {
        return new Promise((resolve,reject) => {
            try{
            let user = usersDB.getUser(userName);
            resolve (user);
            }
            catch (error){
                reject(error);
            }
        });
    },

    listUsers : () =>{
        return new Promise((resolve,reject) => {
            try{
            let users = usersDB.list();
            resolve (users);
            }
            catch (error){
                reject(error);
            }
        });

    }
}

module.exports = reportsBusiness;