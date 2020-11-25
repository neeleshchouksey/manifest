function checkFnameValidation()
{ 
	/*$('#e_from').html('');*/
	$('#fname').css("border","");
	strRegExp = "[^A-Za-z\ ]";
	var fname = $.trim($('#fname').val());
	this.fname=fname;
	//alert(fname);
	if(fname.length >= 3)
	{
		charpos = fname.search(strRegExp);
		if (charpos >=0)
		{
			$('#fname').css("border","2px solid red");
			$('#fname').attr("placeholder", "First Name should be alphabetic only.");
			err1=1;
			return err1;
		}
		else
		{
			return 0;
		}
		
	}
	else
	{
		$('#fname').css("border","2px solid red");
		$('#fname').attr("placeholder", "First Name should have at least 3 characters.");
		err1=1;
		return err1;
	}
}

function checkEmailValidation()
{
	/*alert("hi");*/
	/*$('#e_email').html('');*/
	$('#mail').css("border","");
	var email = $.trim($('#mail').val());
	//alert(email);
	this.email=email;
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	
	if(email.length <=0)
	{ 		
		$('#mail').css("border","2px solid red");
		$('#mail').attr("placeholder", "Please enter email.");
		err1=1;
		return err1;
	}
	else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
	{
		$('#mail').css("border","2px solid red");
		$('#mail').attr("placeholder", "Please enter a valid email.");
		err1=1;
		return err1;
	}
	else
	{
		return 0;
	}
	
}

function checkPhoneValidation()
{ 
	//alert("hi")
	/*$('#e_phone').html('');*/
	$('#phone').css("border","");
	strRegExp = "[^0-9\]";
	var phone = $.trim($('#phone').val());
	this.phone=phone;
	//alert(phone);
	if(phone.length==0)
	{
		return 0;
	}
	else
	{
		if(phone.length == 10)
		{
			charpos = phone.search(strRegExp);
			if (charpos >=0)
			{
				$('#phone').css("border","2px solid red");
				$('#phone').attr("placeholder", "Invalid phone no.");
				err1=1;
				return err1;
			}
			else
			{
				return 0;
			}
			
		}
		else
		{
			$('#phone').css("border","2px solid red");
			$("#phone").val("");
			$('#phone').attr("placeholder", "Invalid phone no.");
			err1=1;
			return err1;
		}
	}
	
}

/*function checkMessageValidation()
{ 
	$('#msg').css("border","");
	strRegExp = "[^A-Za-z 0-9 .\ ]";
	var msg = $.trim($('#msg').val());
	this.msg=msg;
	if(msg.length <= 10)
	{
		$('#msg').css("border","2px solid red");
		$('#msg').attr("placeholder", "Message should have atleast 10 characters long.");
		err1=1;
		return err1;
	}
	else
		if
	{
		return 0;
	}
}*/

function send_msg()
{
	//alert("hi");
	$("#successmsg").text("");
	var err1=checkFnameValidation();
	var err2=checkEmailValidation();
	var err3=checkPhoneValidation();
	var msg = $.trim($('#msg').val());
	//var phone=1234567890;
	//alert(err1);
	if(err1==0 && err2==0 && err3==0 )
	{
		data ='fname='+fname+'&email='+email+'&phone='+phone+'&msg='+msg;
		//alert(data);
		$.ajax({
			type: "POST",
			async: false,
			url: site_url + "/mi/emailsender",
			data: data,	
				
			success: function(data)
			{
				//alert(data);	
				$("#fname").val("");
				$("#mail").val("");
				$("#phone").val("");
				$("#msg").val("");
				$("#successmsg").text(data);
			}
		});
	}

}
