<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Administrative Login - Online Exam</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link href="../quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="container">
    <div>
      <img src="logo.png" alt="logo">
    </div>
     <?php
     include("header.php");
     include("../database.php");
     ?>
      <div class="head1">ADMINSTRATIVE LOGIN </div>
      
      <div class="adlog">
          <h1 class=".text-center">Login Form</h1>
          <form name="form1" method="post" action="login.php">
            <div class="container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="loginid" id="loginid">

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="pass" id="pass">

                    <input name="submit" type="submit" id="submit" value="Login">

                    <span class="errors">
                        <?php
                        if(isset($found))
                        {
                         echo "Invalid Username or Password";
                        }
                        ?>
                    </span>
          </form>
        </div> 
  </div>
<footer class="copyright text-center">
    &copy; 2018 - <p>Developed by<a href="../profile.php"> Md. Miyad Hasan</a><br>
    B.Sc(Engg.) In Electrical & Electronics Engineering</p>
</footer>
</body>
</html>
