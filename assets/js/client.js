$(document).ready(function(){
	var addcmsForm = $("#client");

	var validator = addcmsForm.validate({
		
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