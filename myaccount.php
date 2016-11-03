<!DOCTYPE html>
<html>
<!--   <?php
  // session_start();
   // if ($_SESSION['logged_on_user'] == "")
   // header("Location: login.php");
    ?> -->
<title>Pic Snap :D</title>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="Stylesheet">
	<script src="js/bootstrap.min.js"></script>

   <link rel="Stylesheet" type="text/css" href="homepage/home.css">
<link rel="Stylesheet" type="text/css" href="homebar.css">
  <link rel="shortcut icon" url("srcimg/cherry.png")/>
        <br>

<h1><center><font style="font-family:Chopin Script, Arial;" color=black>Matcha</font></center></h1>
<br>
</head>
<body>

<center><nav class="home">
    <ul>
    <li><a href="./homepage/home.php">Home</a></li>
    <li><a href="./gallery.php">Gallery</a></li>
    <li><a href="#contact">Contact</a></li>
     <li class="active"><a href="/../myaccount.php">Account</a></li>
  </ul>
</nav></center>
<br>
<center><section>

<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input id="image1" type="file" class="form-control">           
          <input type="button" class="form-control" value="Upload Photo" onclick="userUpload()">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Jane">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Bishop">
            </div>
          </div>
   <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Example@gmail.com">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">User Profile:</label>
            <div class="col-lg-8">
              <input style="height: 200px" class="form-control" type="text" value="">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="janeuser">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>

<br></br>
<footer>:D</footer>
</section></center>

<script type="text/javascript" src="functions.js"></script>
</body>



</html>