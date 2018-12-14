function gallaryform()
{  
    var email=document.loginform1.email.value;
	var password=document.loginform1.password.value;
	 if (email==null || email=="")
	{  
         alert("Email can't be blank");  
         return false;  
    }
	else if(password.length<6)
	{  
        alert("Password must be at least 6 characters long.");  
        return false;  
    }
}