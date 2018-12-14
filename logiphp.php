<?php
  $con = mysqli_connect("localhost","root","") or die(mysql_error());
   $db=mysqli_select_db($con,"bca") or die(mysql_error());
   if(isset($_POST['submit']))
   {
	   $email=$_POST['email'];
	   $password=$_POST['password'];
	   $query="select * from regis where email='".$email."' AND password='".$password."' limit 1"; 
	   $result=mysqli_query($con,$query);
	   if(mysqli_num_rows($result)==1)
	   {
		     echo "<script>alert('Your Succesfully Login')</script>";
			 $sql="INSERT INTO login(email,password)VALUES('$email','$password')";
			 mysqli_query($con,$sql);
			 include("notes.html");
			 exit();
	   }
	   else
	   {
		     echo "<script>alert('Incorrect Password and Email')</script>";
			 include("index.html");
			 exit();
	   }
	   
   }
?>