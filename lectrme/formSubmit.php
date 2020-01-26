<?php
session_start();

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image orssssss fake image
 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        shell_exec("cd uploads");
        $command = "python ../audioEditing.py ". $target_file;
        //$_SESSION["debugvar"] = $command;
        $output = shell_exec($command);
        shell_exec("cd ..");
        $_SESSION["debugvar"] = $output;
        $_SESSION["cut_file"] = "uploads/Cut_". $output;
    } else {
        echo "Sorry, there was an error uploading your file.";
        $_SESSION["failed"] = true;
    }

header("Location: index.php");
?>
