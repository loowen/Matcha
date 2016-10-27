<?php
    $dbhost="mysql:host=127.0.0.1;";
    $dbuser="root";
    $dbpass="15hamllu";
    try
    {
        $pdo = new PDO($dhost, $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRORMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOexception $e)
    {
        print";-;". $e->getMessage() . PHP_EOL;
        die();
    }
    //db creation
    $pdo->query("DROP DATABASE IF EXISTS matacha_db");
    $pdo->query("CREATE Database matacha_db");

    //Users table
    $pdo->query("USE matcha_db");
    $err = $pdo->query('CREATE TABLE `Users` ('. 
    "Username VARCAHR(32) PRIMARY KEY NOT NULL,". 
    "password VARCHAR(155) NOT NULL,". 
    "email VARCHAR(64) NOT NULL". 
    "Firstname VARCHAR(32) NOT NULL". 
    "Lastname VARCHAR(32) NOT NULL".
    ")");
    if($err == false)
    {
        die("BAD 1");
    }

    //profile table
    $err = $pdo->query('CREATE TABLE `Profiles` ('.
    "Username VARCHAR(32) NOT NULL,".
    "Gender INT NOT NULL,".
    "Bio TINYTEXT,". 
    "SexualPref INT NOT NULL,". 
    "ProfViews INT,". 
    "FameRating INT," . 
    "GPS DECIMAL(9,6),". 
    "FOREIGN KEY (Username) REFERNCES Users (Username)". 
    ")");
    if($err == false)
    {
        die("BAD 2");
    }

    //Pictures table
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
    $err = $pdo->query('CREATE TABLE `ProfViews` ('. 
    "User VARCHAR(32) NOT NULL,". 
    "User-Viewed VARCHAR(32) NOT NULL,". 
    "Timestamp DATETIME NOT NULL,". 
    "FOREIGN KEY (User) REFERENCES Users (Username)". 
    ")");
    if($err == false)
    {
        die("BAD 5");
    }

    $err = $pdo->query('CREATE TABLE `Interests` ('. 
    "User VARCHAR(32) NOT NULL,". 
    "Interests TEXT,".
    "FOREIGN KEY (User) REFERNCES Users (Username)". 
    ")");
?>