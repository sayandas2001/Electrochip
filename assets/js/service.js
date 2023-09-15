$(document).ready(function(){
	var addservicesForm = $("#service");

	var validator = addservicesForm.validate({
		
		rules:{
			title :{ required : true },
			description :{ required : true },
			icon :{ required : true }
		},
		messages:{
			title :{ required : "The Title is required" },
			description :{ required : "The Description is required" },
			icon :{ required : "The Icon is required" }
		}
	});
});