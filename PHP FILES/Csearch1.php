<html>
<body>
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{ 
die("could not connect".mysql_error());
}
mysql_select_db("placement_management");
$C_ID=$_POST["t1"];
$var=mysql_query("select * from Company13 where C_ID='$C_ID'");
echo "<table border=1>";
echo "<tr>
<th>C_ID</th>
<th>C_Name</th>
<th>C_location</th>
<th>Website</th>
<th>Package</th>
<th>Contact</th>
<th>profile</th>
<th>Shift</th>
<th>C_Cutoff</th>
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
<br>
<input type="button" value="back" onclick="history.back()">

</form>
</body>
</html>