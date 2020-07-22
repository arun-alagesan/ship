require('dotenv').config();

let  config = {
    apiPort : process.env.API_PORT || 3000,
    mySql : {
        host : process.env.DB_HOST || 'localhost',
        user : process.env.DB_USER || 'seeas_user',
        password : process.env.DB_PASSWORD || 'mumbai@123',
        database : process.env.DB_NAME || 'seeas_mumbai',
        connectionLimit : process.env.DB_CONNECTION_LIMIT || 100
    }
}

module.exports = config;