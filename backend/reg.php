<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include("../backend/utils/db.php");
        $username=$_POST["name"];
        $email=$_POST["email"];
        $pass=$_POST["pass"];
        $cpass=$_POST["cpass"];

        if($email){
           $sql="INSERT INTO users (name,email,pass) VALUES ('$username','$email','$pass')" ;
           $result= mysqli_query($conn,$sql);
           if($result){
            header("location:../index.html");
            echo "Registration successfull.";
           }else{
            echo "Registration unsuccessfull.Try again.";
           }
           
           
        }else{
            echo "Email not valid.";
        }
    }
?>