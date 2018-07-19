<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 if( !isset($_SESSION['user']) ) {
  header("Location: stafflogin.php");
  exit;
 }
 $res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysqli_fetch_array($res);
?>
<html>
<head>
<link rel="icon" type="image/png" href="favicon.png" />
<link href="DBview.css" rel="stylesheet" type="text/css" />
<title>Student Database</title>
</head>
<body>
<img id="header" src = "darklogo.png" alt="logo"><br><br><br><br><br><br><br><br><br>
<h1>Staff View</h1>
<div class="tabs">
<form>
<input id="button2" type="button" value="Home" onclick="window.location.href='index'">
<input id="button2" type="button" value="Database View" onclick="window.location.href='studentdatabaseview'">
<input id="button2" type="button" value="Student Entry" onclick="window.location.href='Entry'">
<input id="button2" type="button" value="Playlist Entry" onclick="window.location.href='Playlistentry'">
<input id="button2" type="button" value="Create Staff Account" onclick="window.location.href='StaffEntry'">
</form>
</div>
<?php

$con = mysql_connect("localhost", "id2185582_uwrfiv", "IVDB10");
if (!$con){
die('Could not connect:' .mysql_error());
}
mysql_select_db("id2185582_studentdb", $con);
$query ="SELECT * FROM Student ORDER BY DORM";
$result = mysql_query($query);
?>
<table id="dbcontent" border="1">
<tr>
<th>
First Name
</th>
<th>
Last Name
</th>
<th>
Address
</th>
<th>
Email Address
</th>
<th>
Phone Number
</th>
<th>
Connected At
</th>
</tr>
<?php
while($row = mysql_fetch_array($result)){
$ID = $row["ID"];
$FNAME = $row["FNAME"];
$LNAME = $row["LNAME"];
$DORM = $row["DORM"];
$ROOMNUM = $row["ROOMNUM"];
$EMAIL = $row["EMAIL"];
$PHONE = $row["PHONE"];
$CONNECT = $row["CONNECT"];
echo "<tr>";
echo "<td>";
echo $FNAME;
echo "</td>";
echo "<td>";
echo $LNAME;
echo "</td>";
echo "<td>";
print "$ROOMNUM ";
echo $DORM;
echo "</td>";
echo "<td>";
echo $EMAIL;
echo "</td>";
echo "<td>";
echo $PHONE;
echo "</td>";
echo "<td>";
echo $CONNECT;
echo "</td>";
echo "</tr>";
}
mysql_close($con); 


?>
</tr>
</table>
</body>
</html>
