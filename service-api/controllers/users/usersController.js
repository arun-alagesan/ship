var usersBusiness = require('../../business/users/users');
const bodyParser = require('body-parser');
const usersController = {
    _users : [],
    login : async (req,res) => {
        try{
            userData = req.body;
            console.log(req.body);
            var user = await usersBusiness.getUser(userData.username);
            console.log(user.result[0]);
            if(user.result[0].password == userData.password)
            {
                res.json({status : 'success', data : {authenticated : true, user : {name : user.result[0].name, email : user.result[0].email}}});
            }
            else{
                res.status(401).json({status : 'failure', message : 'wrong user credential'});
            }
        }
        catch (error){
            res.status(500).json({status : 'failure', message : error.message, error : error});
        }
    },
    listusers : async (req,res) => {
        try{
            var users = await usersBusiness.listUsers();
            res.json({status : 'success', data : users});
        }
        catch (error){
            res.status(500).json({status : 'failure', message : error.message, error : error});
        }
    }
}

module.exports = usersController;