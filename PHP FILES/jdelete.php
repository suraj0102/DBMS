<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "placement_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$Offr_Id=$_POST["T1"];
// sql to delete a record
$sql = "DELETE FROM job_offer13 WHERE Offr_Id='$Offr_Id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
<br>
<input type="button" value="back" onclick="history.back()">
</body>
</html>
