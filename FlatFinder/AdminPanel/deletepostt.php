<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = "DELETE FROM tenant WHERE T_ID=$id";
$result = mysqli_query($conn, $result);


//redirecting to the display page (index.php in our case)
header("Location:AdminAdvertise.php");
?>

