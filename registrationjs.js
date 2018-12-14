function validateform()
{  
    var name=document.regisform.name.value;
	var fname=document.regisform.fname.value;
	var email=document.regisform.email.value;  
    var password=document.regisform.password.value;
	var mobileno=document.regisform.mobileno.value;
	var address=document.regisform.address.value;  
  
    if (name==null || name=="")
	{  
         alert("Name can't be blank");  
         return false;  
    }
	if (fname==null || fname=="")
	{  
         alert("Father Name can't be blank");  
         return false;  
    }
	if (email==null || email=="")
	{  
         alert("email can't be blank");  
         return false;                       
    }
	if(mobileno.length>9 || mobileno.length<=10)
	{
		if(mobileno==null || mobileno=="")
		    alert("Mobile no. can't be blank");
		 alert("Mobile no is less than or greater than 10");
		 return false;    
	}
	else if(password.length<6)
	{  
        alert("Password must be at least 6 characters long.");  
        return false;  
    }
}
function msg()
{  
   var v= confirm("Are u sure?");  
 if(v==true)
 {  
    open("index.html");   
 }  
 else
 {  
   alert("cancel"); 
 
 }
}

