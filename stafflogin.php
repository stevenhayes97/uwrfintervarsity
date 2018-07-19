<?php
     ob_start();
     session_start();
     include_once 'dbconnect.php';

     if ( isset($_SESSION['user'])!="" ) {
      header("Location: studentdatabaseview");
      exit;
     }
     
     $error = false;
     
     if( isset($_POST['btn-login']) ) { 
      
      $email = trim($_POST['email']);
      $email = strip_tags($email);
      $email = htmlspecialchars($email);
      
      $pass = trim($_POST['pass']);
      $pass = strip_tags($pass);
      $pass = htmlspecialchars($pass);
      
      if(empty($email)){
       $error = true;
       $emailError = "Please enter your email address.";
      } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
       $error = true;
       $emailError = "Please enter a valid email address.";
      }
      
      if(empty($pass)){
       $error = true;
       $passError = "Please enter your password.";
      }
      
      if (!$error) {
       
       $password = hash('sha256', $pass);
      
       $res=mysqli_query($conn,"SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
       $row=mysqli_fetch_array($res);
       $count = mysqli_num_rows($res);
       
       if( $count == 1 && $row['userPass']==$password ) {
        $_SESSION['user'] = $row['userId'];
        header("Location: studentdatabaseview");
       } else {
        $errMSG = "Incorrect Credentials, Please try again...";
       }
        
      }
      
     }
    ?>
<!DOCTYPE html>
    <html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>UWRF IV | Staff Log In</title>
<link rel="icon" type="image/png" href="favicon.png" />
<link href="UWRFIV.css" rel="stylesheet" type="text/css">
    </head>
    <body>
<div id="headbg">
<img id="header" src = "lightlogo.png" alt="logo"><br><br><br><br><br><br><br><br><br>
<h1 id ="welcome">Log In</h1><br><br>
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
</div><hr id="style2"><br><br>

    <div class="container">

     <div id="login-form">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="on">
        
         <div class="col-md-12">
            
             <div class="form-group">
                </div>
            
            
                
                <?php
       if ( isset($errMSG) ) {
        
        ?>
        <div class="form-group">
                 <div class="alert alert-danger">
        <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                    </div>
                 </div>
                    <?php
       }
       ?>
                
                <div class="form-group">
                 <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                UWRF Email <br> <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" /> 
                    </div>
                    <span class="text-danger"><?php echo $emailError; ?></span>
                </div>
                
                <div class="form-group">
                 <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <br> Password <br>     <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />
                    </div>
                    <span class="text-danger"><?php echo $passError; ?></span>
                </div><br>
                
       
                
                <div class="form-group">
                 <button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>
                </div>
                
            
              
           
            </div>
       
        </form>
<p>Don't have a account and think you should? Request one <a href="requestlogin">here.</a></p>
        </div> 

    </div>
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
    <?php ob_end_flush(); ?>
