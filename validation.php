<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con , 'userregistration');

$name = $_POST['user'];
$pass = $_POST['Password'];

$s = " select * from userdetail where name = '$name' && password = '$pass' ";

$result = mysqli_query($con , $s);

//num will count the number of rows how many times this name appear in the database. 
$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $name;
	header('location:home.php');
}
else 
{
	header('location.php');
}	


	




?>