<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
<style>
.sidenav a {
    padding: 6px 6px 6px 32px;
    text-decoration: none;
    font-size: 25px;
    color: black;
    display: block;
}
.sidenav a:hover {
    color: red;
}
.main {
    margin-left: 200px;
}


</style>
</head>
<body>
  <div class="container">
  	
  	<div>
      <img src="logo.png" alt="logo">
    </div>

 <?php
	include("header.php");
	extract($_POST);
	if(isset($submit))
	{
	  include("../database.php");
	  $rs=mysql_query("SELECT * from mst_admin where loginid='$loginid' and pass='$pass'",$cn) or die(mysql_error());
	  if(mysql_num_rows($rs)<1)
	  {
	    echo "<BR><BR><BR><BR><div class=head1> Invalid User Name or Password<div><br><br><br>";
	    echo '<footer class="copyright text-center">
    &copy; 2018 - <p>Developed by<a href="../profile.php"> Md. Miyad Hasan</a><br>
    B.Sc(Engg.) In Electrical & Electronics Engineering</p>
</footer>';
	    exit;
	    
	  }
	  $_SESSION[alogin]="true";
	  
	}
	else if(!isset($_SESSION[alogin]))
	{
	  echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
	    exit;
	}
?>



	<div class=".text-center">
	  <p class="head1">WELCOME TO ADMISTRATIVE AREA </p>
	</div>
<div class="adlog">
	<div class="sidenav">
	  <a href="subadd.php">ADD SUBJECTS</a>
	  <a href="testadd.php">ADD TEST</a>
	  <a href="questionadd.php">ADD QUESTIONS </a>
	</div>
</div>
	
	

<footer class="copyright text-center">
    &copy; 2018 - <p>Developed by<a href="../profile.php"> Md. Miyad Hasan</a><br>
    B.Sc(Engg.) In Electrical & Electronics Engineering</p>
</footer>
</div>
     
</body>
</html> 