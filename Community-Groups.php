<html>
<title>UWRF IV | Community Groups </title>
<head>  <link rel="icon" type="image/png" href="favicon.png" />
<link href="UWRFIV.css" rel="stylesheet" type="text/css" /> </head>
<body>
<img id="header" src = "lightlogo.png" alt="logo"><br><br><br><br><br><br><br><br><br>
<h1 id ="welcome">Community Groups</h1><br><br>
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
</div>
<hr id="style2">
<br><br>
<div id="cginfo">
Community Groups are small groups of students that meet throughout the week.<br>  They form the backbone of our ministry as these groups seek to become witnessing communities.<br> Each small group focuses on community, bible study, worship, prayer, and outreach.  
</div>
<p id="sgtable">
<table id="sgtable">
<tr>
<th>Dorm</th>
<th>Leader</th>
<th>Apprentice</th>
<th>Location</th>
<th>Day</th>
<th>Time</th>
</tr>
<?php
$con = mysql_connect("localhost", "id2185582_uwrfiv", "IVDB10");
if (!$con){
die('Could not connect:' .mysql_error());
}
mysql_select_db("id2185582_studentdb", $con);
$query ="SELECT * FROM SmallGroup";
$result = mysql_query($query);
while($row = mysql_fetch_array($result)){
$dorm = $row["Dorm"];
$leader = $row["Leader"];
$apprentice = $row["Apprentice"];
$location = $row["Location"];
$day = $row["Day"];
$time = $row["Time"];
echo "<td>";
echo $dorm;
echo "</td>";
echo "<td>";
echo $leader;
echo "</td>";
echo "<td>";
echo $apprentice;
echo "</td>";
echo "<td>";
echo $location;
echo "</td>";
echo "<td>";
echo $day;
echo "</td>";
echo "<td>";
echo $time;
echo "</td>";
echo "</tr>";
}
mysql_close($con); 
?>
<br><br><br>
</table>
</p><br><br><br><br>
<footer id="footer">
<br>
<a href="contactus">Contact Us</a> |  <a href="https://intervarsity.org/" target="_blank">www.intervarsity.org</a> | Follow our Chapter on Facebook
<a href="https://facebook.com/groups/185510474888325?ref=content_filter" target ="_blank"><img id="fbimg" src="facebook.png" alt="Like us on Facebook!"></a> | Follow Intervarsity on Facebook <a href="https://www.facebook.com/intervarsityusa/" target ="_blank"><img id="fbimg" src="facebook.png" alt="Like us on Facebook!"></a>
<br>
<br>
<br>
<br>
</footer>
</body>
</html>
