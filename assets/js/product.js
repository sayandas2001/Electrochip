$(document).ready(function(){
	var addproductForm = $("#product");

	var validator = addproductForm.validate({
		
		rules:{
			category_id :{ required : true, selected : true },
			page_slug :{ required : true },
			title :{ required : true },
			description :{ required : true },
			short_description :{ required : true },
			image :{ required : true }
		},
		messages:{
			category_id :{ required : "The Product Category is required", selected : "Please select atleast one option" },
			page_slug :{ required : "The Page Slug is required" },
			title :{ required : "The Title is required" },
			description :{ required : "The Description is required" },
			short_description :{ required : "The Short Description is required" },
			image :{ required : "The Image is required" }
		}
	});
});