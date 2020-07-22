var config =  require('../../config');
exports.index = (req,res) =>{
    res.json({message :'Service is up and runing', config : config});
}