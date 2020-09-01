<html>
<body>
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{ 
die("could not connect".mysql_error());
}
mysql_select_db("placement_management");
$I_NO=$_POST["t1"];
$var=mysql_query("select * from Interview13 where I_NO='$I_NO'");
echo "<table border=1>";
echo "<tr>
<th>I_NO</th>
<th>I_LOC</th>
<th>Rounds</th>
<th>C_ID</th>
</tr>";
while($arr=mysql_fetch_row($var))
{ echo "<tr>
<td>$arr[0]</td>
<td>$arr[1]</td>
<td>$arr[2]</td>
<td>$arr[3]</td>
</tr>";}
echo "</table>";
mysql_free_result($var);
mysql_close($con);
?>
<br>
<input type="SUBMIT"/><input type="button" value="back" onclick="history.back()">
</body>
</html>