<?php
include 'connection.php';

$status=$_GET['status'];
$id=$_GET['id'];







$sql3= "update lead set status='$status' where lead_id='$id'";

	if ($conn->query($sql3) === TRUE) 
	{
  	header("Location: index.php"); /* Redirect browser */
   	die();
	}
 	else 
	{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

