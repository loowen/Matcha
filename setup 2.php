<?php
    $dbhost="mysql:host=127.0.0.1;";
    $dbuser="root";
    $dbpass="15hamllu";
    try
    {
        $pdo = new PDO($dbhost, $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOexception $e)
    {
        print";-;". $e->getMessage() . PHP_EOL;
        die();
    }
    echo "worked";
    //db creation
    $pdo->query("DROP DATABASE IF EXISTS matcha_db");
    $pdo->query("CREATE Database matcha_db");
    echo "Database matcha_db created successfully\n";

    //Users table
    $pdo->query("USE matcha_db");
    $err = $pdo->query('CREATE TABLE `Users` ('. 
    "Username VARCHAR( 32 ) PRIMARY KEY NOT NULL,". 
    "password VARCHAR( 155 ) NOT NULL,". 
    "email VARCHAR( 64 ) NOT NULL,". 
    "Firstname VARCHAR( 32 ) NOT NULL,". 
    "Lastname VARCHAR( 32 ) NOT NULL".
    ")");
    if($err == false)
    {
        die("BAD 1");
    }
    echo"Users created ";
    //profile table
    $pdo->query("USE matcha_db");
    $err = $pdo->query('CREATE TABLE `Profiles` ('.
    "Username VARCHAR( 32 ) NOT NULL,".
    "Age INT NOT NULL,".
    "Gender INT NOT NULL,".
    "Bio TINYTEXT,". 
    "SexualPref INT NOT NULL,". 
    "ProfViews INT,". 
    "FameRating INT," . 
    "GPS DECIMAL(9,6),". 
    "FOREIGN KEY (Username) REFERENCES Users (Username)". 
    ")");
    if($err == false)
    {
        die("BAD 2");
    }
    echo"Profile Created";
    //Pictures table
    $pdo->query("USE matcha_db");
    $err = $pdo->query('CREATE TABLE `Pictures` ('. 
    "PicID VARCHAR(155) PRIMARY KEY NOT NULL,". 
    "Username VARCHAR(32) NOT NULL,".
    "FOREIGN KEY (Username) REFERENCES Users (Username)". 
    ")");
    if ($err == false)
    {
        die("BAD 3");
    }

    //Profile Likes table
    $pdo->query("USE matcha_db");
    $err = $pdo->query('CREATE TABLE `ProfLikes` ('. 
    "UserLiked VARCHAR(32) NOT NULL,". 
    "Liker VARCHAR(32) NOT NULL,".
    "FOREIGN KEY (UserLiked) REFERENCES Users(Username)". 
    ")");
    if($err == false)
    {
        die("BAD 4");
    }
    
    //Profile Views
    $pdo->query("USE matcha_db");
    $err = $pdo->query('CREATE TABLE `ProfViews` ('. 
    "`User` VARCHAR(32) NOT NULL,". 
    "`UserViewed` VARCHAR(32) NOT NULL,". 
    "`Timestamp` DATETIME NOT NULL,". 
    "FOREIGN KEY (User) REFERENCES Users (Username)". 
    ")");
    if($err == false)
    {
        die("BAD 5");
    }
    echo"PROFVIEWS!!!";
    $pdo->query("USE matcha_db");
    $err = $pdo->query('CREATE TABLE `Interests` ('. 
    "`User` VARCHAR(32) NOT NULL,". 
    "`Interests` TEXT,".
    "FOREIGN KEY (User) REFERENCES Users (Username)". 
    ")");
    echo"FINISHED";
?>