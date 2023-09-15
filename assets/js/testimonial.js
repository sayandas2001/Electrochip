$(document).ready(function(){
	var addtestimonialForm = $("#testimonial");

	var validator = addtestimonialForm.validate({
		
		rules:{
			// title :{ required : true },
			description :{ required : true }
			image :{ required : true }
		},
		messages:{
			// title :{ required : "The Title is required" },
			description :{ required : "The Description is required" }
			image :{ required : "The Image is required" }
		}
	});
});