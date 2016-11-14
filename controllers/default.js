exports.install = function() {
	F.route('/', view_index);
	F.route('/blog',view_blog_index);
};

function view_index() {
	var self = this;
	self.view('index');
}
function view_blog_index() {
	var self = this;
	self.view('blog');
}