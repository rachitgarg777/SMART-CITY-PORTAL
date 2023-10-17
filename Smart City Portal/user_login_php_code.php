<?php
$con =mysqli_connect('localhost','root');
if($con){
		echo "you have been registered now";
header('location:main_front_page.php');
}else{
		echo "no connection";
}
mysqli_select_db($con,'smartcity');
$Name=$_POST['Name'];
$Userid=$_POST['Userid'];
$emailid=$_POST['emailid'];
$password=$_POST['password'];
$type=$_POST['type'];

$query="insert into logindetails(name,user_id,email_id,password,user_type)
values('$Name','$Userid','$emailid','$password','$type')";
mysqli_query($con,$query);
?>
