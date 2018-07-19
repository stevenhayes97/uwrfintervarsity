<html>
<head>
<link rel="icon" type="image/png" href="favicon.png" />
<link href="UWRFIV.css" rel="stylesheet" type="text/css" />
<title>
Request sent
</title>
</head>
<body>
<img id="header" src = "lightlogo.png" alt="logo"><br><br><br><br><br><br><br><br><br>
<h1 id ="welcome">Confirmation Page</h1><br><br>
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
Print "All fields are required to send request";
echo "</p>";
}
else{
$email_from = $email;
$email_subject = "Email from uwrfIntervarsity.com: Staff Account Request";
$email_body = "You have received a Staff Account Request from $name at $email_from. Please do not respond directly to this email. \n".
"Here is the message: \n $msg ";
$to ="stevenhayes97@gmail.com";
mail($to,$email_subject,$email_body);
echo "<p id='thankyoumsg'>";
Print"Request sent.";
echo "</p>";
}
?>
</body>
<img id="emailthx" src = "requestimg.jpg" alt="Thank you">
</html>
