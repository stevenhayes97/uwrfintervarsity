<html>
<title>UWRF IV | Playlist</title>
<head>
<link rel="icon" type="image/png" href="favicon.png" />
<link href="UWRFIV.css" rel="stylesheet" type="text/css" />
</head>
<body>
<img id="header" src = "lightlogo.png" alt="logo"><br><br><br><br><br><br><br><br><br>
<h1 id ="welcome">Intervarsity Weekly Playlist</h1><br><br>
<div class="tabs">
<form>
<input id="button" type="button" value="Home" onclick="window.location.href='index'">
<input id="button" type="button" value="Events" onclick="window.location.href='events'">
<input id="button" type="button" value="Contact Us" onclick="window.location.href='contactus'">
<input id="button" type="button" value="About Us" onclick="window.location.href='aboutus'">
<input id="button" type="button" value="Pictures" onclick="window.location.href='pictures'">
<input id="button" type="button" value="Playlist" onclick="window.location.href='playlist'">
<input id="button" type="button" value="Community Groups" onclick="window.location.href='Community-Groups'">
<input id="button" type="button" value="Staff Log In" onclick="window.location.href='stafflogin'">
</form>
<hr id="style2"><br>
<div id="bandpic">
<img id="band" src = "band.jpg" alt="Band Playing at Large Group">
</div>
<div id="songtable">
<p>Here is a record of the songs we sing at large group</p>
<table id="sTable">
<tr>
<th>Title</th>
<th>Artist</th>
<th>Album</th>
<th>Date Sung</th>
</tr>
<?php
$con = mysql_connect("localhost", "id2185582_uwrfiv", "IVDB10");
if (!$con){
die('Could not connect:' .mysql_error());
}
mysql_select_db("id2185582_studentdb", $con);
$output = null;
$query ="SELECT * FROM Playlist ORDER BY ID DESC";
$result = mysql_query($query);
while($row = mysql_fetch_array($result)){
$title = $row["Title"];
$artist = $row["Artist"];
$album = $row["Album"];
$datesung = $row["DatePlayed"];
echo "<tr>";
echo "<td>";
echo $title;
echo "</td>";
echo "<td>";
echo $artist;
echo "</td>";
echo "<td>";
echo $album;
echo "</td>";
echo "<td>";
echo $datesung;
echo "</td>";
echo "</tr>";
}
mysql_close($con); 
?>
</table>
</div>
<br>
<br>
<br>
<br>
</div><footer id="footer">
<br>
<a href="contactus">Contact Us</a> |  <a href="https://intervarsity.org/" target="_blank">www.intervarsity.org</a> | Follow our Chapter on Facebook
<a href="https://facebook.com/groups/185510474888325?ref=content_filter" target ="_blank"><img id="fbimg" src="facebook.png" alt="Like us on Facebook!"></a> | Follow Intervarsity on Facebook <a href="https://www.facebook.com/intervarsityusa/" target ="_blank"><img id="fbimg" src="facebook.png" alt="Like us on Facebook!"></a>
<br>
<br>
<br>
<br>
</footer>
</body>
<html>
