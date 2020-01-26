<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
        <link rel="shortcut icon" href="img/favicon_round.png" type="image/x-icon">
    </head>
    <body>
        <div class="container-fluid">
            <head>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <h1><font color="white"> L E C T R <img class="img_logo" src="img/logo_transparent.png"></font></h1>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </head>
            <body>
            <div class="row">
                <form class="box" action="index.php" method="post" enctype="multipart/form-data">
                    <div class="file_input">
                        <input type="file" name="fileTest" id="fileTest">
                        <h2 class="barcode"><font color="white"> U P L O A D F I L E S </font></h2></input>
                    </div>
                    <br>
                    <input class="buttonTest" type="submit" name="submittest" id="submittest">
                </form>
            </div>
        </div>
    </body>
</html>

<?php
$target_directory = "uploads/";
$uploaded_name = $target_directory.basename($_FILES["fileTest"]["name"]);
$upload_status = 1;
$file_type = strtolower(pathinfo($uploaded_name, PATHINFO_EXTENSION));
$file_size = $_FILES["fileTest"]["size"];

if ($file_size > 400000000){
    echo "File size can't exceed 400 MB.";
    $upload_status = 0;
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
        echo "An error has occurred.";
    }
}
