<html>
<head>
<link rel="icon" type="image/png" href="favicon.png" />
<link href="DBview.css" rel="stylesheet" type="text/css" />
<title>Song Entered</title>
</head>
<body>
<img id="header" src = "darklogo.png" alt="logo"><br><br><br><br><br><br><br><br><br>
<h1>Staff View</h1><br><br><br><br><br><br><br>
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
echo "<div id='entrymsg'>";
$title = $_POST["title"];
$artist = $_POST["artist"];
$album = $_POST["album"];
$dateplayed = $_POST["dateplayed"];

$con = mysql_connect("localhost", "id2185582_uwrfiv", "IVDB10");
if (!$con){
die('Could not connect:' .mysql_error());
}
mysql_select_db("id2185582_studentdb", $con);
$select = "INSERT INTO Playlist(Title, Artist, Album, DatePlayed)
VALUES('$title', '$artist', '$album', '$dateplayed')";
$data = mysql_query($select);
if(!$data){
			die("SQL error during query" .mysql_error());
		}
		print "You have entered $title sung by $artist on the album $album, sung on, $dateplayed, into the database. ";		   
mysql_close($con); 
echo "<br>";
echo "</div>";
//echo "</form>";
?>
</body>
</html>
