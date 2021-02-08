<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con , 'userregistration');

$name = $_POST['user'];
$pass = $_POST['Password'];

$s = " select * from userdetail where name = '$name' ";

$result = mysqli_query($con , $s);

//num will count the number of rows how many times this name appear in the database. 
$num = mysqli_num_rows($result);

if($num == 1){
	echo"Username Already Taken";
}
else 
{
	$reg="insert into userdetail(name , password) values('$name' , '$pass')";
	mysqli_query($con , $reg);
	echo "Registration successful";

	header('location:demo.php');
}	


	




?>