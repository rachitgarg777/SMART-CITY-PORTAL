<html>
<head>
<title>Smart City Project</title>

<link rel="stylesheet" href="stylel.css">
</head>
 <body style="background-image:url(img/bg_about.jpg); background-size: cover;background-repeat:no-repeat">

<div class="hero">
<div class="form-box">
<div class="button-box">
<div id="btn"></div>
<button type="button" class="toggle-btn" onclick="login()">Log In</button>
<button type="button" class="toggle-btn" onclick="register()">Register</button>
</div>
<form id="login" class="input-group" action="register_php_code.php" method="post">
<input type="text" name="Userid" class="input-field" placeholder="User Id" required>
<input type="password" name="password" class="input-field" placeholder="Enter password" required>
<input type="text" name="type" class="input-field" placeholder="Enter user type" required>
<button type="submit" class="submit-btn" name = 'submit'>Log In</button>
</form>
<form id="register" class="input-group" action="user_login_php_code.php" method="post">
<input type="text" name="Name" class="input-field" placeholder="Enter name" required>
<input type="text" name="Userid" class="input-field" placeholder="User Id" required>
<input type="text" name="emailid" class="input-field" placeholder="Email Id" required>
<input type="password" name="password" class="input-field" placeholder="Enter password" required>
<input type="text" name="type" class="input-field" placeholder="Enter user type" required>
<button type="submit" class="submit-btn" >Register</button>
</form>
</div></div>

<script>
var x=document.getElementById("login");
var y=document.getElementById("register");
var z=document.getElementById("btn");
function register()
{x.style.left="-400px"
y.style.left="50px"
z.style.left="110px"
}
function login()
{x.style.left="50px"
y.style.left="450px"
z.style.left="0px"
}
</script>
</body>
</html>
