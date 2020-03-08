<?php

$con = mysqli_connect('localhost' , 'root');
if($con) 
	{
		echo"connection successful";
	}
else{
        echo"no connection";
}
 mysqli_select_db($con,'dataofuser');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$query = " insert into usermessage(name,email,message) values('$name','$email','$message')";

mysqli_query($con,$query);

/*header('location:index.php');*/
?>
