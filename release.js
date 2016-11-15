var fs = require('fs');
var data = {};
var items = fs.readdirSync('./data/')
for (var i=0; i<items.length; i++) {
    data[items[i].substr(0,items[i].length-5)] = require('./data/'+items[i]);
}
fs.writeFileSync('./data.json',JSON.stringify(data,null,4));


var port = process.env.PORT || 9000;
var fs = require('fs');
var options = {};
options.port = port;
// options.config = { name: 'total.js' };
// options.https = { key: fs.readFileSync('keys/agent2-key.pem'), cert: fs.readFileSync('keys/agent2-cert.pem')};
// options.sleep = 2000;
require('total.js').http('release', options);
// require('total.js').https('release', options);