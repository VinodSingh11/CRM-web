<?php
include 'connection.php';


$id=$_GET['id'];
$milestone=0;

$sql = "SELECT * FROM client where client_id='$id'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			 while($row = $result->fetch_assoc()) 
			 {
				
				$milestone=$row['milestone'];
				
		}
		}
$milestone++;





$sql1 = "update client set milestone='$milestone' where client_id='$id'";


if ($conn->query($sql1) === TRUE) {
   header("Location: addmilestone.php?id=$id"); /* Redirect browser */
   die();
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}


$conn->close();
?>

