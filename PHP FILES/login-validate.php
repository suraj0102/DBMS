<html>
<body><?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'placement_management');
$username = $_POST['name'];
$password = $_POST['password'];
$s = " select * from login where username = '$username' && password='$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){  
    header('location:home.php');
}
else{
    echo"invalid password or email! Please try again!!!!";
   }
?><br><br>
<input type="button" value="back" onclick="history.back()">
 </body>
</html>