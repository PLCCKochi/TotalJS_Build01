//var fs = require('fs');
//var showdown  = require('showdown'),
//	converter = new showdown.Converter();
//fs.writeFileSync('./data.json',JSON.stringify(data,null,4));

var port = process.env.PORT || 9000;
var fs = require('fs');
var options = {};
options.port = port;
// options.config = { name: 'total.js' };
// options.https = { key: fs.readFileSync('keys/agent2-key.pem'), cert: fs.readFileSync('keys/agent2-cert.pem')};
// options.sleep = 2000;
require('total.js').http('debug', options);
// require('total.js').https('release', options);