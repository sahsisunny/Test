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
     <title>xPro | Forgot Password</title>
</head>

<body>
     <div class="container">
          <div class="box">
               <div class="left">
                    <img id="sunnyImg" src="assets/sunny.jpg" alt="xPro Industries">
               </div>
               <div class="right">
                    <p class="text2">Forget Password</p>
                    <form action="forget.php" method="POST">
                         <input class="ifield" type="email" name="email" placeholder="Email" required><br>
                         <input class="ifield" type="text" name="phone" placeholder="Phone Number" required><br>
                         <input class="ifield" type="password" name="password" placeholder="Password" required><br>
                         <input class="ifield" type="password" name="cpassword" placeholder="Confirm Password">

                         <input class="btn" type="submit" name="submit" value="Reset Password">

                         <!-- Not have an account -->
                         <p class="exttext">Not have an account? <a href="register.php">Register</a></p>

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