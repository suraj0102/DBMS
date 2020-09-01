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
$D_cut_off=$_POST["t1"];
$C_ID=$_POST["t2"];
$S_Dept=$_POST["t3"];
$Age=$_POST["t4"];
$Skills=$_POST["t5"];



$sql = "insert into Criteria13 (D_cut_off,Skills,Age,S_Dept,C_ID)
values ('$D_cut_off','$Skills','$Age','$S_Dept','$C_ID')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?><br><input type="button" value="back" onclick="history.back()">
 </body>
</html>