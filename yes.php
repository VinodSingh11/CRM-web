<?php
include 'connection.php';

$status=$_GET['status'];
$id=$_GET['id'];






if($status=="OnBoarded")
{
	$name="";
	$email="";
	$mobile="";
	$date=date("Y-M-D");
	$sql = "select * from lead where lead_id='$id'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
		{
    // output data of each row
   	 while($row = $result->fetch_assoc()) {
			$name=$row['name'];
			$email=$row['email'];
			$mobile=$row['mobile'];
			
			}
		//	echo $mobile;
		} 
	else 
		{
		 echo "Error: " . $sql . "<br>" . $conn->error;
		}
$sql1 = "delete from lead where lead_id='$id'";

	if ($conn->query($sql1) === TRUE) 
		{
  			$sql2="INSERT INTO client (name,email,mobile,onboard_date)
					VALUES ('$name','$email','$mobile','$date')";
					if ($conn->query($sql2) === TRUE) 
						{
						
						}
					else 
						{
		 					echo "Error: " . $sql . "<br>" . $conn->error;
						}
		} 
	else 
		{
		 echo "Error: " . $sql . "<br>" . $conn->error;
		}


}
$sql3= "update lead set status='$status' where lead_id='$id'";

	if ($conn->query($sql3) === TRUE) 
	{
  	header("Location: mail.php"); /* Redirect browser */
   	die();
	}
 	else 
	{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

