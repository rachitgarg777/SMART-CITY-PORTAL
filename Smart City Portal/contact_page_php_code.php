<?php
$con =mysqli_connect('localhost','root');
if($con){
		echo "you have been registered now";
header('location:main_front_page.php');
}else{
		echo "no connection";
}
mysqli_select_db($con,'smartcity');
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$subject=$_POST['subject'];

$query="insert into contactdetails(firstname,lastname,email,mobile,comment)
values('$firstname','$lastname','$email','$mobile','$subject')";
mysqli_query($con,$query);
?>
