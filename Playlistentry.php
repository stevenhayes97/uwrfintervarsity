<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 if( !isset($_SESSION['user']) ) {
  header("Location: stafflogin");
  exit;
 }
 $res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysqli_fetch_array($res);
?>
<html>
<head>
<link rel="icon" type="image/png" href="favicon.png" />
<link href="DBview.css" rel="stylesheet" type="text/css" />
<title>Playlist Entry</title>
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
<p id="entryheader">Setting date example: 05/15/17</p>
<form action ="ple.php" method = "post">
<table id="entryform">
<tr><td>
Song Title</td><td><input type="text" name="title"></td>
</tr>
<tr>
<td>
Artist</td><td><input type="text" name="artist"></td>
</tr>
<tr><td>
Album</td><td><input type="text" name="album"></td>
</tr>
<tr>
<td>
Date Played</td><td><input type="text" name="dateplayed"></td>
</tr>
<tr>
<td>
<br>
<input id="button2" type = "reset"  value = "Reset">
<input id="button2" type = "submit"  value = "Enter to Database">

</td>
</tr>
</table>
</form>
</body>
</html>
