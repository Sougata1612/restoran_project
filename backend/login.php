<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include("../backend/utils/db.php");
        $username=$_POST["email"];
        $pass=$_POST["pass"];
       
        if($username && $pass){
           $sql="SELECT * FROM users WHERE email='$username' and pass='$pass'" ;
           $result= mysqli_query($conn, $sql);
           if($result){
               echo "<h1>Login successful</h1>";
               header("location:../index.html");
           } else {
               echo "Login unsuccessful: Try again.";
           }
        } else {
            echo "Invalid username and password.";
        }
    }
?>