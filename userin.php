<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myuser";

// Create connection
$con=mysqli_connect('localhost','root','');
if($con)
{
    echo "Connect";
}
else{
    echo "No Connection";
}
mysqli_select_db($con,'myuser');
$user=$_POST['user'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comment=$_POST['comment'];

$query="insert into userinfo (user,email,phone,comment) values('$user','$email','$phone','$comment')";
mysqli_query($con,$query);
header('location:index.php');
?>