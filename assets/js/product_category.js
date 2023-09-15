$(document).ready(function(){
	var addproduct_categoryForm = $("#product_category");

	var validator = addproduct_categoryForm.validate({
		
		rules:{
			product_category_title :{ required : true },
			product_category_description :{ required : true },
			product_category_image :{ required : true }
		},
		messages:{
			product_category_title :{ required : "The Title is required" },
			product_category_description :{ required : "The Description is required" },
			product_category_image :{ required : "The Image is required" }
		}
	});
});