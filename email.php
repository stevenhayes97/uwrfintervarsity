<html>
<head>
<title> Email Sent </title>
<link rel="icon" type="image/png" href="favicon.png" />
<link href="UWRFIV.css" rel="stylesheet" type="text/css" />
</head>
<body>
<img id="header" src = "lightlogo.png" alt="logo"><br><br><br><br><br><br><br><br><br>
<h1 id ="welcome">Contact Us</h1><br><br>
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
<br>
<br>
<?php

$name=$_POST["name"];
$email=$_POST["email"];
$msg=$_POST["emailcontent"];

if(empty($name) || empty($email) || empty($msg)){
echo "<p id='thankyoumsg'>";
Print "All fields are required to send email";
echo "</p>";
}
else{
$email_from = $email;
$email_subject = "Email from uwrfIntervarsity.com(Contact Us Form)";
$email_body = "You have recieved a new message from $name at $email_from. Please do not respond directly to this email. \n".
"Here is the message: \n $msg ";
$to ="aaron.leiby@my.uwrf.edu";
mail($to,$email_subject,$email_body);
echo "<p id='thankyoumsg'>";
Print"Email sent. Thank you for contacting UWRF Intervarsity!";
echo "</p>";
echo "<img id='emailthx' src = 'thankyoupic.jpg' alt='Thank you'>";
}
?>
</body>
</html>
