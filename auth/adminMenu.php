<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<table class="table">
  <thead>

    <tr>
      <th scope="col">f_name</th>
      <th scope="col">f_price</th>
      <th scope="col">des</th>
      <th scope="col">img</th>
      <th scope="col">category</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        require("../others/dbconn.php");
        $sql = "SELECT * FROM menu";
         $result = mysqli_query($conn, $sql);

         if($result){
            while($rows = mysqli_fetch_assoc($result)){
                ?>
    
    <tr>
      <td scope="col"><?php echo $rows["f_name"] ?></td>
      <td scope="col"><?php echo $rows["f_price"] ?></td>
      <td scope="col"><?php echo $rows["des"] ?></td>
      <td scope="col"><?php echo $rows["img"] ?></td>
      <td scope="col"><?php echo $rows["category"] ?></td>
      <td scope="col"><a href="./update.php?id=<?php echo $rows["email"] ?>"><button type="button" class="btn btn-primary">Add Menu</button></a></td>
      <!-- <td scope="col"><a href="./delete.php?id=<?php echo $rows["email"] ?>"><button type="button" class="btn btn-danger">Delete</button></a></td> -->
      
    </tr>
    <?php              
            }
         }

    ?>
  </tbody>
</table>
<a href="./add.php"><button type="button" class="btn btn-success">Add</button></a>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>