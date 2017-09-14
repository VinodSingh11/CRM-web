<?php
include 'connection.php';

$name=$_POST['leadname'];
$source=$_POST['source'];
$poc=$_POST['poc'];
$dept1=$_POST['dept'];
$dept2=$_POST['dept1'];
$dept3=$_POST['dept2'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$budget=$_POST['budget'];
$note=$_POST['note'];

echo $dept1;
echo $dept2;
echo $dept3;





$sql = "INSERT INTO lead (name,poc,email,mobile,source,dept1,dept2,dept3,budget,note)
VALUES ('$name','email','$poc','$mobile','$source','$dept1','$dept2','$dept3','$budget','$note')";

if ($conn->query($sql) === TRUE) {
  //header("Location: index.php"); /* Redirect browser */
   die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

