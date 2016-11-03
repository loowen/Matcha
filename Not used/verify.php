<?php
    include "connect.php";

    $pdo=connect();
    $pdo->query("USE db_camagru");
    $user=$_GET["name"];
    $pwd=$_GET["pword"];
    $code=$_GET["code"];
    $stmt=$pdo->prepare("SELECT `password` FROM `usertable` WHERE username = :username;");
    $stmt->bindParam(':username', $user);
    echo"worker?";
    $stmt->execute();
    $hash=$stmt->fetchAll(PDO::FETCH_COLUMN);
    echo"worked?";
    if($pwd == $hash[0])
    {
        $stmt=$pdo->prepare("UPDATE `usertable` SET active='1' WHERE username = :user;");
        $stmt->bindParam(":user", $user);
        $stmt->execute();
            session_start();
            $_SESSION['logged_on_user'] = $user;
            header("Location: index.php");
    }
?>