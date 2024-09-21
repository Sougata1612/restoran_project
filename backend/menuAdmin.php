<?php
    require_once("../backend/utils/db.php");
?>

<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){
   
    $ProfilePicName= $_FILES['image']['name'];
    $ProfilePicTmpName = $_FILES['image']['tmp_name'];
    $foodname = $_POST["f_name"];
    $foodprice = $_POST["f_price"];
    $des = $_POST["des"];
    $category = $_POST["category"];

    $uploadDir = "../uploads/";
    $ProfilePicPath = $uploadDir.basename($ProfilePicName);
// img src="uploads/celebrate-thirteen24.png">
   

    if (move_uploaded_file($ProfilePicTmpName, $ProfilePicPath)) {
        $insertQuery = mysqli_query($conn, "INSERT INTO menu(f_name,f_price,des,img,category) VALUES ('$foodname','$foodprice','$des','$ProfilePicName','$category')");
        if ($insertQuery) {
            echo "File Uploaded Successfully !!";
        }else {
            echo "File not Upload, Try again !!";
        }
    }
}

?>