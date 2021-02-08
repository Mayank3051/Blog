
<?php 

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con , 'userregistration');

$title=$_POST['title'];
$des=$_POST['des'];

session_start();

$username=$_SESSION['name'];
$sql="insert into posts(name,title,post)

values('$username','$title','$des')";

$result=$con->query($sql);

header("Location:home.php");

?>