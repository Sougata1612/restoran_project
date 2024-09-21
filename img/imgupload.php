<?php
    require_once("../others/dbconn.php");
?>

<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){
   
    $ProfilePicName = $_FILES['image']['name'];
    $ProfilePicTmpName = $_FILES['image']['tmp_name'];

    $uploadDir = "uploads/";
    $ProfilePicPath = $uploadDir.basename($ProfilePicName);
// img src="uploads/celebrate-thirteen24.png">
   

    if (move_uploaded_file($ProfilePicTmpName, $ProfilePicPath)) {
        $insertQuery = mysqli_query($conn, "INSERT INTO images(image) VALUES ('$ProfilePicPath')");
        if ($insertQuery) {
            echo "File Uploaded Successfully !!";
        }else {
            echo "File not Upload, Try again !!";
        }
    }
}

?>