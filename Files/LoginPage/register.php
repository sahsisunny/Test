<?php
require_once 'common/db_connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <title>xPro | Register</title>
</head>

<body>
     <div class="container">
          <div class="box">
               <div class="left">
                    <img id="sunnyImg" src="assets/sunny.jpg" alt="xPro Industries">
               </div>
               <div class="right">
                    <p class="text2">Register Here</p>
                    <form action="register.php" method="POST">
                         <input class="ifield" type="text" name="name" placeholder="Full Name" required><br>
                         <input class="ifield" type="email" name="email" placeholder="Email" required><br>
                         <input class="ifield" type="text" name="mobile" placeholder="Phone Number" required><br>
                         <input class="ifield" type="password" name="password" placeholder="Password" required><br>
                         <input class="ifield" type="password" name="cpassword" placeholder="Confirm Password" required><br>
                         <input class="btn" type="submit" name="submit" value="Register">
                         <!-- Have an account -->
                         <p class="exttext">Already have an account? <a href="login.php">Login</a></p>

                         <!-- Got to Home page -->
                         <input class="btn" onclick="window.open('index.php', '_self')" type="button" value="Back to Home">
                    </form>
               </div>
          </div>
     </div>

</body>

</html>