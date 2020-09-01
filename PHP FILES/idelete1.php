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
$I_NO=$_POST["T1"];
// sql to delete a record
$sql = "DELETE FROM Interview13 WHERE I_NO='$I_NO'";

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
