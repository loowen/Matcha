   <?php
        session_start();
        $_SESSION['logged_on_user'] = "";
             header("Location: gallery.php");
    ?>