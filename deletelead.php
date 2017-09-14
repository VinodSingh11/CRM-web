<?php
include 'connection.php';


$id=$_GET['id'];








$sql1 = "delete from lead where lead_id='$id'";


if ($conn->query($sql1) === TRUE) {
   header("Location: index.php"); /* Redirect browser */
   die();
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}


$conn->close();
?>

