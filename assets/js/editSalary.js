$(document).ready(function(){
	
	var editSalaryForm = $("#editSalary");
	
	var validator = editSalaryForm.validate({
		
		rules:{
			hra :{ required : true },
			medical :{ required : true },
			daily :{ required : true },
			travel :{ required : true },
			other :{ required : true }
		},
		messages:{
			hra :{ required : "This field is required" },
			medical :{ required : "This field is required" },
			daily :{ required : "This field is required" },
			travel :{ required : "This field is required" },
			other :{ required : "This field is required" },			
		}
	});
});