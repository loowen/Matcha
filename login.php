<!DOCTYPE html>
<html >
<head>
<br>
<br>
<br>
    <h1><center><font-family:"Times New Roman", Times, serif color=white>Pic Snap</font></center></h1> 
    <title>login</title>
    <link rel="Stylesheet" type="text/css" href="css/login.css"/>
</head>
    <body>

   <nav>
    <ul>
    <li><a href="./index.php">Home</a></li>
    <li><a href="./gallery.php">Gallery</a></li>
    <li><a href="#contact">Contact</a></li>
    <li style="float:right"  class="active"><a href="./login.php">Login</a></li>
    </ul>
    </nav>
    
<form method="POST" action="loginuser.php">
<header>Login</header>
<label>Username</label>
<input name="username" type="text">
<div class="help">At least 6 characters
</div>
<?php
if($_GET["err"] == 1)
{
    echo"<div class='help' style='color:red;'>";
    echo"   Username or Password is incorrect";
    echo"</div>";
}
?>
<label>Password</label>
<input name="pword" type="password">
<div class="help">Use upper and lowercase letters as well</div>
<button style="float:left; margin-left: 60px" type="submit" name="submit" value="OK" class="button">Login</button>
<!-- <button type="submit" name="submit" value="OK" style="float:left; margin-left: 60px;"><u>Login</u></button> -->
<!-- <button style="float:left; margin-left: 60px";>Login</button> -->
<a href="register.php" class="button" style="float:right; padding: 3px">Register</a>
<br></br>
<a href="Not Used/reset.php">Forgot Password?</a>
</form>

<footer>
     <div id="footer">
 <li><a>Newsdtherdrdehdeh</a></li>
 </div>
</footer>     
    
    
  </body>
</html>