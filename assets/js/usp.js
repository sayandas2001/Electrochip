$(document).ready(function(){
	var adduspForm = $("#usp");

	var validator = adduspForm.validate({
		
		rules:{
			title :{ required : true },
			image :{ required : true }
		},
		messages:{
			title :{ required : "The Title is required" },
			image :{ required : "The Image is required" }
		}
	});
});