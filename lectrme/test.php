<?php
$target_directory = "uploads/";
$uploaded_name = $target_directory.basename($_FILES["fileTest"]["name"]);
$upload_status = 1;
$file_type = strtolower(pathinfo($uploaded_name, PATHINFO_EXTENSION));

if (isset($_POST["submittest"])){

}
if ($file_type != "mp3"){
    echo "Only audio files are allowed to be uploaded. ";
    $upload_status = 0;
}
if ($upload_status === 0){
    echo "An error has occurred. ";
} else {
    if(move_uploaded_file($_FILES["fileTest"]["tmp_name"], $uploaded_name)) {
        echo basename($_FILES["fileTest"]["name"]);
        echo "The file ". basename($_FILES["fileTest"]["name"]). " has been uploaded.";
    } else {
        echo "test test :(";
    }
}


if (isset($_POST["button"])){
    shell_exec("python helloworld.py")
}