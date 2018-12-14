<?php
  $con = mysqli_connect("localhost","root","") or die(mysql_error());
   $db=mysqli_select_db($con,"bca") or die(mysql_error());
   if(isset($_POST['submit']))
   {
	   $name=$_POST['name'];
	   $fname=$_POST['fname'];
	   $email=$_POST['email'];
	   $password=$_POST['password'];
	   $mobileno=$_POST['mobileno'];
	   $address=$_POST['address'];
       $sql="INSERT INTO regis(name,fname,email,password,mobileno,address)VALUES('$name','$fname','$email','$password','$mobileno','$address')";
	  
	     if(mysqli_query($con,$sql))
	     {
		      
		       echo "<script>alert('Succesfully')</script>";
		       echo("<script>
		             window.location.assign('index.html');	   
			   </script>");
	     }
		 else
		 {
			 echo "<script>alert('Email or Number is already used')</script>";
			 echo("<script>
		             window.location.assign('registration.html')</script>");
			 exit();
		 }
   }
    if(isset($_POST['close']))
   {
	      echo("<script>
		             window.location.assign('index.html');	   
			   </script>");
   }
   
   ?>
	