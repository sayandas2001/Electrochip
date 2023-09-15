$(document).ready(function(){
	var addtechnical_supportForm = $("#technical_support");

	var validator = addtechnical_supportForm.validate({
		
		rules:{
			title :{ required : true },
			page_slug :{ required : true },
			description :{ required : true },
			short_description :{ required : true },
			image :{ required : true }
		},
		messages:{
			title :{ required : "The Title is required" },
			page_slug :{ required : "The Page Slug is required" },
			description :{ required : "The Description is required" },
			short_description :{ required : "The Short Description is required" },
			image :{ required : "The Image is required" }
		}
	});
});