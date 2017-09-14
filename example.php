	<?php
$servername = "localhost";
$username = "root";
$password = "root123";
$dbname = "project1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM lead";
$result = $conn->query($sql);
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row['lead_id']; ?></td> 
            <td><?php echo $row['name']; ?></td> 
            <td><?php echo $row['source']; ?></td> 
        </tr>
        <?php
    }
}
?>