<?php

$con = mysqli_connect('localhost' ,'root');
if($con) 
	{
		echo"connection successful";
	}
else{
        echo"no connection";
}
 mysqli_select_db($con,'dataofuser');

$firstname=$_POST['first'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];


$query =" insert into userregistration(firstname,surname,email,password,gender) values('$firstname','$surname',$email','$password','$gender')";

mysqli_query($con,$query);

/*header('location:index.php');*/
?>