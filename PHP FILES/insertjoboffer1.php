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
$Offr_ID=$_POST["t1"];
$Domain=$_POST["t2"];
$Bond=$_POST["t3"];
$Role=$_POST["t4"];
$Salary=$_POST["t5"];
$Location=$_POST["t6"];



$sql = "insert into Job_Offer13 (Offr_ID,Domain,Bond,Role,Salary,Location)
values ('$Offr_ID','$Domain','$Bond','$Role','$Salary','$Location')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?><br><input type="button" value="back" onclick="history.back()">
 </body>
</html>