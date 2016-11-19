var fs = require('fs');
var showdown  = require('showdown'),
	converter = new showdown.Converter();

var data = require('../data.json');

exports.install = function() {
	F.route('/', view_index);
	F.route('/blog',view_blog_index);
	F.route('/blog/{post}',view_blog_post)
	F.route('/advocates',view_advocate_index);
	F.route('/advocates/{advocate}',view_advocate_details);
	F.route('/services',view_service_index);
	F.route('/services/{service}',view_service_details);
	F.route('/clients',view_client_index);
	F.route('/clients/{client}',view_client_details);
	F.route('/clients/testimonials',view_testimonial_index);
	F.route('/consult',view_consult);
	F.route('/contactus',view_contactus);
};

function view_index() {
	var self = this;
	self.repository.data = data;
	self.repository.page={};
	self.repository.page.title = "Home";
	self.view('index');
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
	self.view('service_index');
}
function view_client_index() {
	var self = this;
	self.repository.data = data;
	self.repository.page={};
	self.repository.page.title = "Our Clients";
	self.view('client_index');
}
function view_testimonial_index(){
	var self = this;
	self.repository.data = data;
	self.repository.page={};
	self.repository.page.title = "Testimonials";
	this.view('testimonial_index');
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