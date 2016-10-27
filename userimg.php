<?php

type="file" accept="image/*" capture="camera" id="camera"


    $name = $_FILES['webcam']['name'];
    $type = $_FILES['webcam']['type'];
    $tmp_name = $_FILES['webcam']['tmp_name'];
    $error = $_FILES['webcam']['error'];
    $size = $_FILES['webcam']['size'];
?>