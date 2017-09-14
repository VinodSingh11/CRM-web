<?php
include 'connection.php';

$name=$_POST['name'];
$id=$_GET['id'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$billing_addr=$_POST['billing_addr'];
$total=$_POST['total'];
$project_detail=$_POST['project_detail'];
$milestone=$_POST['milestone'];







$sql = "update client set name='$name',email='$email',mobile='$mobile',Billing_addr='$billing_addr',Project_detail='$project_detail',milestone='$milestone',totalpay='$total' where client_id='$id'";


if ($conn->query($sql) === TRUE) {
   header("Location: addmilestone.php?id=$id"); /* Redirect browser */
   die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>

