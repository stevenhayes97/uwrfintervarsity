<html>
<head>
<link rel="icon" type="image/png" href="favicon.png" />
<link href="DBview.css" rel="stylesheet" type="text/css" />
</head>
<body>
<img id="header" src = "darklogo.png" alt="logo"><br><br><br><br><br><br><br><br><br>
<div class="tabs">
<h1>Database Entry</h1>
<form>
<input id="button2" type="button" value="Home" onclick="window.location.href='index'">
<input id="button2" type="button" value="Database View" onclick="window.location.href='studentdatabaseview'">
<input id="button2" type="button" value="Student Entry" onclick="window.location.href='Entry'">
<input id="button2" type="button" value="Playlist Entry" onclick="window.location.href='Playlistentry'">
<input id="button2" type="button" value="Create Staff Account" onclick="window.location.href='StaffEntry'">
</form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
echo "<div id='entrymsg'>";
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$dorm = $_POST["dorm"];
$roomnum = $_POST["roomnum"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$connect = $_POST["connect"];

$con = mysql_connect("localhost", "id2185582_uwrfiv", "IVDB10");
if (!$con){
die('Could not connect:' .mysql_error());
}
mysql_select_db("id2185582_studentdb", $con);
$select = "INSERT INTO Student(FNAME, LNAME, ROOMNUM, DORM, EMAIL, PHONE, CONNECT)
VALUES('$firstname', '$lastname', '$roomnum', '$dorm', '$email', '$phone', '$connect')";
$data = mysql_query($select);
if(!$data){
			die("SQL error during query" .mysql_error());
		}
		print "You have entered $firstname $lastname $roomnum $dorm $email $phone into the student database.";		   
mysql_close($con); 
echo "<br>";
echo "</div>";
//echo "<form>";
//echo "<input id='button3' type='button' value='Enter Another Student' onclick='window.location.href='Entry''>";
//echo "</form>";
?>
</body>
</html>
