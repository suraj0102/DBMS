<html>
<body>
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{ 
die("could not connect".mysql_error());
}
mysql_select_db("placement_management");
$Offr_ID=$_POST["t1"];
$var=mysql_query("select * from Job_Offer13 where Offr_ID='$Offr_ID'");
echo "<table border=1>";
echo "<tr>
<th>Offr_ID</th>
<th>Domain</th>
<th>Bond</th>
<th>Role</th>
<th>Salary</th>
<th>Location</th>
</tr>";
while($arr=mysql_fetch_row($var))
{ echo "<tr>
<td>$arr[0]</td>
<td>$arr[1]</td>
<td>$arr[2]</td>
<td>$arr[3]</td>
<td>$arr[4]</td>
<td>$arr[5]</td>
</tr>";}
echo "</table>";
mysql_free_result($var);
mysql_close($con);
?>
<br>
<input type="SUBMIT"/> <input type="button" value="back" onclick="history.back()">
 

</body>
</html>