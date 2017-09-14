<?php
include 'connection.php';


$id=$_GET['id'];
$milestone=$_GET['milestone'];






for ($x = 1; $x <=$milestone; $x++) {

$m1=$_POST['milestone_'.$x];
echo $m1;


$sql="INSERT INTO milestone (client_id,milestone)
VALUES ('$id','$m1')";


if ($conn->query($sql) === TRUE) {
  header("Location: client.php"); /* Redirect browser */
  // die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}
}
$conn->close();
?>

