<!DOCTYPE html>
<html>
<head>
<br>
<br>
<br>
    <h1><center><font-family:"Times New Roman", Times, serif color=white>Pic Snap</font></center></h1> 
    <title>login</title>
    <link rel="Stylesheet" type="text/css" href="login.css">
</head>
    <body>

   <nav>
    <ul>
    <li><a href="./index.php">Home</a></li>
    <li><a href="#news">News</a></li>
    <li><a href="#contact">Contact</a></li>
    <li style="float:right"  class="active"><a href="./login.php">Login</a></li>
    </ul>
    </nav>
    
<form method="POST" action="reguser.php">
<header>Change Password</header>

<label>Username</label>
<input type="text" name="username">

<label>Email</label>
<input type="email" name="email">

<label>Old Password</label>
<input type="password" name="password">

<label>New Password</label>
<input type="password" name="confpass">

<div class="help">Use upper and lowercase lettes as well</div>
<?php
    if ($_GET['err'] == 1)
    {
        echo "Username or email already taken";
    }
    if ($_GET['err'] == 2)
    {
        echo "Password not strong enough";
    }
    if ($_GET['err'] == 3)
    {
        echo "Username must be atleast 6 characters.";
    }
    if ($_GET['err'] == 4)
    {
        echo "Passwords do not match";
    }
?>
<br></br>
<center><a href="register.php" class="button">Reset Password</a></center>
<br></br>
</form>

</body>
</html> 