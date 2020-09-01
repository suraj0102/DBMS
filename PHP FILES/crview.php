<html>
<body>
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{ 
die("could not connect".mysql_error());
}
mysql_select_db("placement_management");
$var=mysql_query("select * from Criteria13 ");
echo "<table border=1>";
echo "<tr>
<th>D_cut_off</th>
<th>Skills</th>
<th>Age</th>
<th>S_Dept</th>
<th>C_ID</th>
</tr>";

while($arr=mysql_fetch_row($var))
{ echo "<tr>
<td>$arr[0]</td>
<td>$arr[1]</td>
<td>$arr[2]</td>
<td>$arr[3]</td>
<td>$arr[4]</td>
</tr>";}
echo "</table>";
mysql_free_result($var);
mysql_close($con);
?>

<input type="button" value="back" onclick="history.back()">
</form>
</body>
</html>