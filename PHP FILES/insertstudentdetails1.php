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
$USN=$_POST["t1"];
$Name=$_POST["t2"];
$Dept=$_POST["t3"];
$DOB=$_POST["t4"];
$Proj=$_POST["t5"];
$Sex=$_POST["t6"];
$Phno=$_POST["t7"];
$Aggrt=$_POST["t8"];
$Tech_skills=$_POST["t9"];


$sql = "insert into Student13 (USN,Name,Dept,DOB,Proj,Sex,Phno,Aggrt,Tech_skills)
values ('$USN','$Name','$Dept','$DOB','$Proj','$Sex','$Phno','$Aggrt','$Tech_skills')";

if ($conn->query($sql) == TRUE) {
    echo "New record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?><br><input type="button" value="back" onclick="history.back()">
 </body>
</html>