require('dotenv').config();
const express = require('express');
const cors = require('cors');
const mydb = require('./db/mysql/server');
const bodyParser = require('body-parser');
const config = require('./config');

const app = express();

app.use(bodyParser.json());
app.use(cors());

//Add routes to the app
var indexRoute = require('./routes/index');
var reportsRoute = require('./routes/reports');
app.use('/',indexRoute);
app.use('/reports',reportsRoute);

//Add routes for users
var usersRoute = require('./routes/users');
app.use('/users',usersRoute);

app.get('/heartbeat',async (req,res)=>{
    try {
        let result = await mydb.healthy();
        res.json(result);
    } catch (error) {
        console.log(error);
        res.json(error)
    }
});

app.get('/testtable',async (req,res)=>{
    try{
        let query = 'select * from login';
        let result = await mydb.executeQuery(query);
        console.log(result);
        res.status(200).json(result);
    }
    catch(err){
        res.json(err);
    }
});

/* app.get('/',(req,res)=>{
    
}) */
let port = config.apiPort || 3000;
app.listen(port,()=>{
    console.log(`Server listning to port ${port} : launch browser with http://localhost:${port}/`);
})

