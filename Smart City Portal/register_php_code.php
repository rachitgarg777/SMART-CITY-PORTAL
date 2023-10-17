<?php
session_start();
$con =mysqli_connect('localhost','root');
mysqli_select_db($con,'smartcity');

$userid=$_POST['Userid'];
$password=$_POST['password'];

$type=$_POST['type'];
$result= mysqli_query($con,"SELECT * FROM `logindetails` WHERE user_id='$userid' && password ='$password' && user_type='$type'");

if(mysqli_num_rows($result) == 1)
{   $row = mysqli_fetch_array($result);
 if($row['user_type'] == 'admin'){
         $_SESSION['password'] =  $password;
         header('location:admin_page.php');
}
elseif($row['user_type'] == 'user'){

         $_SESSION['password'] = $password;
         header('location:citizen_page.php');

      }}
else { 
echo <<<HTML
<a href="login.php">User Not Registered        Click here to register</a>
HTML; }

?>