$(document).ready(function(){
	var addapplicationForm = $("#application");

	var validator = addapplicationForm.validate({
		
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