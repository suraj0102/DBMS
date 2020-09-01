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
$C_ID=$_POST["t1"];
$C_Name=$_POST["t2"];
$C_location=$_POST["t3"];
$Website=$_POST["t4"];
$Package=$_POST["t5"];
$Contact=$_POST["t6"];
$profile=$_POST["t7"];
$Shift=$_POST["t8"];
$C_Cutoff=$_POST["t9"];

$sql = "insert into Company13 (C_ID,C_Name,C_location,Website,Package,Contact,profile,Shift,C_Cutoff)
values ('$C_ID','$C_Name','$C_location','$Website','$Package','$Contact','$profile','$Shift','$C_Cutoff')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?><br><input type="button" value="back" onclick="history.back()">
 </body>
</html>


     