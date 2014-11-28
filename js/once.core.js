var once={
	// get ajax query with parametrs
	get: function(){
		$.getJSON("once.php?c=core&o=get_once_json&id=1&text=Hello+oncebuilder", function(data) {
			// do with response anything you want
			$('body').html(data.response);
		})
		.error(function() { alert("couldn't load: get_once_json"); });
	},
}

$(document).ready(function () {
	once.get();
});