<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Wel come to Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">
  <div>
      <img src="logo.png" alt="logo">
  </div>

<?php
include("header.php");
include("database.php");
extract($_POST);
if(isset($submit))
{
	$rs=mysql_query("SELECT * from mst_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h1 class='style8' align=center>WELCOME TO ONLINE EXAM</h1>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="images/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF" class="txt"> <a href="sublist.php" class="style4">Subject for Exam</a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="images/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom" class="txt"> <a href="result.php" class="style4">Result </a></td>
  </tr>
</table><footer class="copyright text-center">
    &copy; 2018 - <p>Developed by<a href="#"> Md. Miyad Hasan</a><br>
    B.Sc(Engg.) In Electrical & Electronics Engineering</p>
</footer>';
   
exit;
}
?>
<div class="adlog">
    <h1 class="text-center">Login Form</h1>
    <form name="form1" method="post" action="">
      <div class="container">
              <label><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="loginid" id="loginid2">

              <label><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="pass" id="pass2">

              <input name="submit" type="submit" id="submit" value="Login">

              <span class="errors">
                  <?php
                  if(isset($found))
                  {
                   echo "Invalid Username or Password";
                  }
                  ?>
              </span>
        
              
              <label>
                <input type="checkbox" checked="checked"> Remember me
              </label>
        </div>
        <div align="center" class="txt">
          <span class="style4">New User ? 
            <a href="signup.php">Signup Free</a>
          </span>
        </div>
      <div align="center">
        <p class="style5"><img src="images/topleft.jpg" width="134" height="128">          </p>
      </div>
    </form>
</div>
<footer class="copyright text-center">
    &copy; 2018 - <p>Developed by<a href="profile.php"> Md. Miyad Hasan</a><br>
    B.Sc(Engg.) In Electrical & Electronics Engineering</p>
</footer>
</div>
</body>
</html>
