<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "placement_management";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$D_cut_off=$_POST["t1"];

$sql = "UPDATE Criteria13 SET D_cut_off='$D_cut_off' where S_Dept='CSE'";
if ($conn->query($sql) === TRUE){
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>