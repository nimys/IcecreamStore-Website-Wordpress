$(document).ready(function(){
	$("#frmcontact").validate({
		rules:{
			name:"required",
			email:{
				required: true,
				email: true
			},
			phone:{
				required: true
			}
		},messages:{
			name:"Name Required",
			email:{
				required: "Email Required",
				email: "Not Valid Email"
			},
			phone:{
				required: "Phone Number Required"
			}
		},submitHandler: function(){
			$(".btn").val("Loading");
			 $.post("do/doContact.php", $("#frmcontact").serialize(),function(){
				$("#frmcontact").html('<p class="sucmsg">Thank you for your enquiry. We will be in touch shortly. In the meantime, stay in touch!</p>');
			 });
		}

	});
	});
