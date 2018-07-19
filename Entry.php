<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 if( !isset($_SESSION['user']) ) {
  header("Location: stafflogin");
  exit;
 }
?>
<html>
<head>
<title>Enter to Database</title>
<head>
<link rel="icon" type="image/png" href="favicon.png" />
<link href="DBview.css" rel="stylesheet" type="text/css" />
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
<form action ="entry.php" method = "post">
<table id="entryform">
<tr><td>
First Name</td><td><input type="text" name="firstname"></td>
</tr>
<tr>
<td>
Last Name</td><td><input type="text" name="lastname"></td>
</tr>
<tr><td>
Dorm(include the word Hall)</td><td><input type="text" name="dorm"></td>
</tr>
<tr>
<td>
Room Number</td><td><input type="text" name="roomnum"></td>
</tr>
<tr>
<td>
Email</td><td><input type="text" name="email"></td>
</tr>
<tr>
<td>
Phone</td><td><input type="text" name="phone"></td>
</tr>
<tr>
<td>
Connected At</td><td><input type="text" name="connect"></td>
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
