<html>
<head>
<link rel="icon" type="image/png" href="favicon.png" />
</head>
<body>
<?php
ob_start();
$con = mysql_connect("localhost", "id2185582_uwrfiv", "IVDB10");
if (!$con){
die('Could not connect:' .mysql_error());
}
mysql_select_db("id2185582_studentdb", $con);

$user = $_POST["username"];
$pwd = $_POST["password"];

$user = stripslashes($user);
$pwd = stripslashes($pwd);
$user = mysql_real_escape_string($user);
$pwd = mysql_real_escape_string($pwd);
$sql="SELECT * FROM Users WHERE username='$user' and password='$pwd'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1){

$_SESSION['user']= "user";
$_SESSION['pwd']= "pwd";
header("Location:studentdatabaseview.php");
exit();
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
?>
</body>
</html>
