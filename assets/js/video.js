$(document).ready(function(){
	var addcmsForm = $("#video");

	var validator = addcmsForm.validate({
		
		rules:{
			title :{ required : true },
			link :{ required : true }
		},
		messages:{
			title :{ required : "The Title is required" },
			link :{ required : "The Link is required" }
		}
	});
});