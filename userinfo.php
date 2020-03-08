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

$user=$_POST['user'];
$email=$_POST['email'];
$password=$_POST['password'];


$query =" insert into userinfodata(user,email,password) values('$user','$email','$password')";

mysqli_query($con,$query);

header('location:index.php');
?>


