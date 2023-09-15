$(document).ready(function(){
	var addcmsForm = $("#certifications");

	var validator = addcmsForm.validate({
		
		rules:{
			image :{ required : true }
		},
		messages:{
			image :{ required : "The Image is required" }
		}
	});
});