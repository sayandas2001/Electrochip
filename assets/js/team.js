$(document).ready(function(){
	var addTeamForm = $("#team");

	var validator = addTeamForm.validate({
		
		rules:{
			title :{ required : true },
			designation :{ required : true },
			image :{ required : true }
		},
		messages:{
			title :{ required : "The Title is required" },
			designation :{ required : "The Designation is required" },
			image :{ required : "The Image is required" }
		}
	});
});