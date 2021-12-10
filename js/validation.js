

function checkmail()
{
	var EmailId=document.getElementById("email");
	var atpos = EmailId.value.indexOf("@");
    var dotpos = EmailId.value.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=EmailId.value.length) 
	{
        var show = document.getElementById("eid");
        show.style.display = "block";
		show.innerHTML="Enter valid email-ID!";
		EmailId.focus();
        return false;
   	}
   	else
   	{
   		document.getElementById("eid").style.display = "none";
   	}
	
	return true;
}
function checkmob()
{
	var mob=document.getElementById("mob");
	if((mob.value.length!= 10) || isNaN(mob.value))
	{
		var show = document.getElementById("mobile");
		show.style.display = "block";
		show.innerHTML="Enter valid mobile number!";
		mob.focus();
		return false;
	}
	else
	{
		document.getElementById("mobile").style.display = "none";
	}
	return true;
}

function verifyPassword() {  
	var pw = document.getElementById("password1").value;  
	//check empty password field  
	if(pw == "") {  
	   document.getElementById("message").innerHTML = "**Fill the password please!";  
	   return false;  
	}  
	 
   //minimum password length validation  
	if(pw.length < 8) {  
	   document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
	   return false;  
	}  
	
  //maximum length of password validation  
	if(pw.length > 15) {  
	   document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
	   return false;  
	} else {  
	   alert("Password is correct");  
	}  
  }  

  function matchPassword() {  
	var pw1 = document.getElementById("password1");  
	var pw2 = document.getElementById("passwordd2");  
	if(pw1 != pw2)  
	{   
	  alert("Passwords did not match");  
	} else {  
	  alert("Password created successfully");  
	}  
  }  