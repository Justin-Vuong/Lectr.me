<?php
session_start();

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image orssssss fake image
 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {

        $command = "cd uploads && python ../audioEditing.py ". $_FILES["file"]["name"];
        $_SESSION["debugvar"] = $command;
        $output = shell_exec($command);
        
        //$_SESSION["debugvar"] = $output;
        $_SESSION["cut_file"] = "uploads/". $output;
    } else {
        $_SESSION["failed"] = true;
    }

header("Location: index.php");
?>
