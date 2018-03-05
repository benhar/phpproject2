<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
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
$rs=mysql_query("SELECT * from mst_user where login='$lid'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$query="INSERT INTO mst_user(user_id,login,pass,username,address,city,phone,email) values('','$lid','$pass','$name','$address','$city','$phone','$email')";
$rs=mysql_query($query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Exam</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";


?>
<footer class="copyright text-center">
    &copy; 2018 - <p>Developed by<a href="profile.php"> Md. Miyad Hasan</a><br>
    B.Sc(Engg.) In Electrical & Electronics Engineering</p>
</footer>
</div>
</body>
</html>

