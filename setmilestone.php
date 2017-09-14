<?php
include 'connection.php';

$milestone=$_POST['milestone'];
$id=$_GET['id'];
$mail=$_GET['email'];
$per=$_GET['per'];






$sql = "update client set work_status='$milestone' where client_id='$id'";
if ($conn->query($sql) === TRUE) {
   header("Location: milestonemail?mail='$mail'.php&per='$per'"); /* Redirect browser */
   die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

