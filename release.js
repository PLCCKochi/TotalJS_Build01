var fs = require('fs');
var showdown  = require('showdown'),
	converter = new showdown.Converter();

var data = {};
var items = fs.readdirSync('./data/')
for (var i=0; i<items.length; i++) {
	data[items[i].substr(0,items[i].length-5)] = require('./data/'+items[i]);
}
for(post in data.blog){
	data.blog[post].postContentOrd = fs.readFileSync('./bulkcontent/blog/' + data.blog[post].post,'utf8');
	data.blog[post].postExcerptOrd = data.blog[post].postContentOrd.substr(0,250);
	data.blog[post].postExtractOrd = data.blog[post].postContentOrd.substr(0,750);
	data.blog[post].postContentMDd = converter.makeHtml(data.blog[post].postContentOrd);
	data.blog[post].postExcerptMDd = converter.makeHtml(data.blog[post].postExcerptOrd);
	data.blog[post].postExtractMDd = converter.makeHtml(data.blog[post].postExtractOrd);
}
for(advocate in data.advocate){
	data.advocate[advocate].proexpContent = converter.makeHtml(fs.readFileSync('./bulkcontent/proexp/' + data.advocate[advocate].proexp, 'utf8'));
}
fs.writeFileSync('./data.json',JSON.stringify(data,null,4));


var port = process.env.PORT || 9000;
var fs = require('fs');
var options = {};
options.port = port;
// options.config = { name: 'total.js' };
// options.https = { key: fs.readFileSync('keys/agent2-key.pem'), cert: fs.readFileSync('keys/agent2-cert.pem')};
// options.sleep = 2000;
require('total.js').http('debug', options);
// require('total.js').https('release', options);