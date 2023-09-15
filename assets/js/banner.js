$(document).ready(function(){
	var addbannerForm = $("#banner");

	var validator = addbannerForm.validate({
		
		rules:{
			title :{ required : true, selected : true},
			image :{ required : true }
		},
		messages:{
			title :{ required : "The Section is required", selected : "Please select atleast one option" },
			image :{ required : "The Image is required" }
		}
	});
});