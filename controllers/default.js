var request = require('sync-request');
var fs = require('fs');
var showdown  = require('showdown'),
	converter = new showdown.Converter();

var url = "https://public.kochilaw.tk/";

var data = {};

loadContent();

exports.install = function() {
	F.route('/', view_index);
	F.route('/blog',view_blog_index);
	F.route('/blog/{post}',view_blog_post)
	F.route('/advocates',view_advocate_index);
	F.route('/advocates/{advocate}',view_advocate_details);
	F.route('/services',view_service_index);
	F.route('/services/{service}',view_service_details);
	F.route('/clients',view_client_index);
	//F.route('/clients/{client}',view_client_details);
	F.route('/clients/testimonials',view_testimonial);
	F.route('/consult',view_consult);
	F.route('/contactus',view_contactus);
	F.route('/athul/reload',reload);
};

function view_index() {
	var self = this;
	self.repository.data = data;
	self.repository.page={};
	self.repository.page.title = "Home";
	self.view('index',data.home);
}
function view_blog_index() {
	var self = this;
	self.repository.data = data;
	self.repository.page={};
	self.repository.page.title = "Blog";
	self.view('blog_index');
}
function view_advocate_index(){
	var self = this
	self.repository.data = data;
	self.repository.page={};
	self.repository.page.title = "Our Advocates";
	this.view('advocate_index');
}
function view_service_index() {
	var self = this;
	self.repository.data = data;
	self.repository.page={};
	self.repository.page.title = "Our Services";
	self.view('service_index',data.service);
}
function view_client_index() {
	var self = this;
	self.repository.data = data;
	self.repository.page={};
	self.repository.page.title = "Our Clients";
	self.view('client_index');
}
function view_testimonial(){
	var self = this;
	self.repository.data = data;
	self.repository.page={};
	self.repository.page.title = "Testimonials";
	this.view('testimonial');
}
function view_blog_post (post){
	var self = this;
	self.repository.data = data;
	self.repository.page={};
	self.repository.page.title = data.blog[post].title;
	self.repository.entity = post;
	this.view('blog_post');
}
function view_advocate_details (advocate){
	var self = this;
	self.repository.data = data;
	self.repository.page={};
	self.repository.page.title = data.advocate[advocate].name;
	self.repository.entity = advocate;
	this.view('advocate_details',data.advocate[advocate]);
}
function view_service_details (service){
	var self = this;
	self.repository.data = data;
	self.repository.page={};
	self.repository.page.title = data.service[service].title;
	self.repository.entity = service;
	this.view('service_details',data.service[service]);
}
function view_client_details (client){
	var self = this;
	self.repository.data = data;
	self.repository.page={};
	self.repository.page.title = data.client.company;
	self.repository.entity = client;
	this.view('client_details');
}
function view_consult() {
	var self = this;
	self.repository.data = data;
	self.repository.page={};
	self.repository.page.title = "Consult";
	self.view('consult',data.practice);
}
function view_contactus() {
	var self = this;
	self.repository.data = data;
	self.repository.page={};
	self.repository.page.title = "Contact Us";
	self.view('contact');
}
function reload(){
	loadContent();
	var self = this;
	self.repository.data = data;
	self.repository.page={};
	self.repository.page.title = "LoadContent";
	self.view('contact');
}
//LoadContent
function loadContent(){
	var dataindex =  JSON.parse(request('GET', url + "data/index.json").getBody('utf8'));
	//console.log(dataindex);
	for(var i=0; i < dataindex.length; i++){
		console.log(url+'data/'+ dataindex[i] +".json");
		data[dataindex[i]] = JSON.parse(request('GET', url+'data/'+dataindex[i]+".json").getBody('utf8'));
	}
	fs.writeFileSync('data.json1',JSON.stringify(data));
	for(post in data.blog){
		
		data.blog[post].postContentOrd = request('GET', url + 'bulkcontent/blog/' + data.blog[post].post ).getBody('utf8');
		data.blog[post].postExcerptOrd = data.blog[post].postContentOrd.substr(0,250);
		data.blog[post].postExtractOrd = data.blog[post].postContentOrd.substr(0,750);
		data.blog[post].postContentMDd = converter.makeHtml(data.blog[post].postContentOrd);
		data.blog[post].postExcerptMDd = converter.makeHtml(data.blog[post].postExcerptOrd);
		data.blog[post].postExtractMDd = converter.makeHtml(data.blog[post].postExtractOrd);
	}
	for(advocate in data.advocate){
		data.advocate[advocate].proexpContent = converter.makeHtml(request('GET', url + 'bulkcontent/proexp/' + data.advocate[advocate].proexp ).getBody('utf8'));
	}
	for(service in data.service){
		var body = request('GET', url + 'bulkcontent/service/' + data.service[service].info ).getBody('utf8');
		data.service[service].infoContent = converter.makeHtml(body);
		data.service[service].infoExcerpt = converter.makeHtml(body).substr(0,250);
	}
	for(area in data.practice.areas){
		data.practice.areas[area].decalExcerpt = data.practice.areas[area].decal.substr(0,160)+'...';
	}
}
