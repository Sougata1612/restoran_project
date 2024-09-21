<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include("../backend/utils/db.php");
        $name=$_POST["name"];
        $email=$_POST["email"];
        $sub=$_POST["sub"];
        $msg=$_POST["msg"];

        if($email){
           $sql="INSERT INTO contact (name,email,subject,message) VALUES ('$name','$email','$sub','$msg')" ;
           $result= mysqli_query($conn,$sql);
           if($result){
            header("location:../index.html");
           }
           
        }else{
            echo "email not found";
        }
    }
?>