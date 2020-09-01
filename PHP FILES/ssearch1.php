<html>
<body>
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{ 
die("could not connect".mysql_error());
}
mysql_select_db("placement_management");
$USN=$_POST["t1"];
$var=mysql_query("select * from Student13 where USN='$USN'");
echo "<table border=1>";
echo "<tr>
<th>USN</th>
<th>Name</th>
<th>Dept</th>
<th>DOB</th>
<th>Proj</th>
<th>Sex</th>
<th>Phno</th>
<th>Aggrt</th>
<th>Tech_skills</th>
</tr>";

while($arr=mysql_fetch_row($var))
{ echo "<tr>
<td>$arr[0]</td>
<td>$arr[1]</td>
<td>$arr[2]</td>
<td>$arr[3]</td>
<td>$arr[4]</td>
<td>$arr[5]</td>
<td>$arr[6]</td>
<td>$arr[7]</td>
<td>$arr[8]</td>
</tr>";}
echo "</table>";
mysql_free_result($var);
mysql_close($con);
?>
<form action="StudentDetails.html" method="POST">
<input type="SUBMIT"/>
<input type="button" value="back" onclick="history.back()">
</form>
</body>
</html>