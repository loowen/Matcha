<!DOCTYPE html>
<html>
<head>
<br/>
<br/>
<br/>
    <h1><center><font font-family:"Times New Roman", Times, serif color=white>Pic Snap</font></center></h1> 
    <title>login</title>
    <link rel="Stylesheet" type="text/css" href="homepage/home.css"/>
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
<header>Register</header>

<label>Username</label>
<input type="text" name="username">
<div class="help">At least 6 character</div>

<label>Email</label>
<input type="email" name="email">

<label>Password</label>
<input type="password" name="password">

<label>Confirm Password</label>
<input type="password" name="confpass">

<div class="help">Use upper and lowercase letters as well</div>
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
<button style="float:left; margin-left: 60px">register</button>
</form>

</body>
</html> 