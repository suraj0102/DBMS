<html>
<body><?php
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
$I_NO=$_POST["t1"];
$C_ID=$_POST["t2"];
$I_LOC=$_POST["t3"];
$Rounds=$_POST["t4"];



$sql = "insert into Interview13 (I_NO,I_LOC,Rounds,C_ID)
values ('$I_NO','$I_LOC','$Rounds','$C_ID')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?><br><input type="button" value="back" onclick="history.back()">
 </body>
</html>