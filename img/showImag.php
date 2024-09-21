<?php 
require_once("../others/dbconn.php");
$sql = "SELECT * FROM images";
$result =mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div>";
        echo "<p>" . htmlspecialchars($row['image']) . "</p>";
        echo '<img src="'. $row["image"].'" width=200px />';
        echo "</div>";
    }
} else {
    echo "No images found!";
}

?>
