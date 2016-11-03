<!DOCTYPE html>
<html>
<!--   <?php
  // session_start();
   // if ($_SESSION['logged_on_user'] == "")
   // header("Location: login.php");
    ?> -->
<title>Pic Snap :D</title>
<head>
  <link rel="Stylesheet" type="text/css" href="css/index.css">
    <link rel="Stylesheet" type="text/css" href="profileprev.css">

  <link rel="shortcut icon" url="cherry.png"/>
        <br>
<h1><center><font style="font-family:Chopin Script, Arial;" color=black>Matcha</font></center></h1> 
  
</head>
<body>
</aside>

<section>

<form method="POST" action="reguser.php">
<center><header>Register</header></center>
<label>Username</label>
<div class="help">At least 6 characters</div>
<input name="username" type="text">
<label>First Name</label>
<input name="username" type="text">
<label>Last Name</label>
<input name="username" type="text">
<label>Age</label>
<input name="username" type="number">
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
<label>Password</label>
<input name="pword" type="password">
<button style="float:right; padding: 3px" type="submit" name="submit" value="OK" class="button">Register</button>
<a href="register.php" class="button" style="float:left; margin-left: 60px">Login</a>
</form>
</section>


    
<!--<nav>
    <ul>
    <li><a class="active" href="#home">Home</a></li>
    <li><a href="./gallery.php">Gallery</a></li>
    <li><a href="#contact">Contact</a></li>
    <li style="float:right"><a href="./logout.php">logout</a></li>
    </ul>
</nav> -->

<br>
</div>

</body>



</html>