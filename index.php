<html>
<head>
<link rel="icon" type="image/png" href="favicon.png" />
<link href="UWRFIV.css" rel="stylesheet" type="text/css">
<title>UWRF IV | Home</title>
</head>
<body>
<div id="fixed">
<div id="headerbg">
<img id="header" src = "lightlogo.png" alt="logo"><br><br><br><br><br><br><br><br><br>
</div>
<h1 id ="welcome">Welcome</h1><br><br>
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
</div>
<hr id="style2">
<div id="content">
<br>
<div id="missionst">
<div id="italic">
"Students and Faculty transformed,<br> Campuses renewed,<br> and World Changers developed. "<br><br></div>
<sub>University of Wisconsin River Fall's Intervarsity Chapter Mission Statement<sub>
</div><br>
<div id="slides">
<img class="mySlides" src="pic1.jpg">
<img class="mySlides" src="pic2.jpg">
<img class="mySlides" src="Large Group Band.jpg">
<img class="mySlides" src="pic4.jpg">
</div>
<br><br><br>
<h3> What is Intervaristy? </h3>
<iframe src="https://player.vimeo.com/video/12496920?title=0&byline=0&portrait=0" width="640" height="424" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<br><br>
<p id="staffinfo">
<img id="smlogo" src="favicon.png">
<br>
<div id="staff">
<h3>Staff and Student Leaders</h3>
</div>
<table id="sTable">
<tr>
<th>Name</th>
<th>Role</th>
<th>Email Address</th>
</tr>
<?php
$con = mysql_connect("localhost", "id2185582_uwrfiv", "IVDB10");
if (!$con){
die('Could not connect:' .mysql_error());
}
mysql_select_db("id2185582_studentdb", $con);
$query ="SELECT * FROM Staff";
$result = mysql_query($query);
while($row = mysql_fetch_array($result)){
$name = $row["Name"];
$role = $row["Role"];
$email = $row["Email"];
echo "<tr>";
echo "<td>";
echo $name;
echo "</td>";
echo "<td>";
echo $role;
echo "</td>";
echo "<td>";
echo $email;
echo "</td>";
echo "</tr>";
}
mysql_close($con); 
?>
</table>
</p>
<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 5000);
}
</script>
<br><br><br>

<br>
<div id="verseofday">
Verse of the day(ESV) <br><br>
<script src="https://static6-a.akamaihd.net/votd/votd.write.callback.js"></script>
<script src="https://www.biblegateway.com/votd/get/?format=json&version=ESV&callback=BG.votdWriteCallback"></script>
</div><br><br><br>
<br>
<br>
<footer id="footer">
<br>
<a href="contactus">Contact Us</a> |  <a href="https://intervarsity.org/" target="_blank">www.intervarsity.org</a> | Follow our Chapter on Facebook
<a href="https://facebook.com/groups/185510474888325?ref=content_filter" target ="_blank"><img id="fbimg" src="facebook.png" alt="Like us on Facebook!"></a> | Follow Intervarsity on Facebook <a href="https://www.facebook.com/intervarsityusa/" target ="_blank"><img id="fbimg" src="facebook.png" alt="Like us on Facebook!"></a>
<br>
<br>
<br>
<br>
</footer>
</div>
</body>
</html>
