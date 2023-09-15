$(document).ready(function(){
	
	var editAmountForm = $("#editAmount");
	
	var validator = editAmountForm.validate({
		
		rules:{
			date_amount :{ required : true },
			base :{ required : true },
			hra :{ required : true },
			medical :{ required : true },
			daily :{ required : true },
			travel :{ required : true },
			other :{ required : true }
		},
		messages:{
			date_amount :{ required : "This field is required" },
			base :{ required : "This field is required" },
			hra :{ required : "This field is required" },
			medical :{ required : "This field is required" },
			daily :{ required : "This field is required" },
			travel :{ required : "This field is required" },
			other :{ required : "This field is required" },			
		}
	});
});