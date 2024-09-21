<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include("../backend/utils/db.php");
        $name=$_POST["name"];
        $email=$_POST["email"];
        $datetime=$_POST["datetime"];
        $nop=$_POST["nop"];
        $sreq=$_POST["sreq"];

        if($email){
           $sql="INSERT INTO book (name,email,datetime,nop,sreq) VALUES ('$name','$email','$datetime','$nop','$sreq')" ;
           $result= mysqli_query($conn,$sql);
           if($result){
           echo "<h1 >Booking success </h1>";
           }else{
            echo "booking unsuccess";
           }

        //else{
        //     echo "email already exist";
        //     echo "<a"
        //    }
           
        }else{
            echo "email not found";
        }
    }
?>