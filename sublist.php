<?php
session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Online Exam - Quiz List</title>
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
echo "<h2 class=head1> SELECT SUBJECT TO GIVE EXAM</h2>";
$rs=mysql_query("SELECT * from mst_subject");
echo "<table align=center>";
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center><a href=showtest.php?subid=$row[0]><font size=6>$row[1]</font></a>";
}
echo "</table>";
?>
<footer class="copyright text-center">
    &copy; 2018 - <p>Developed by<a href="profile.php"> Md. Miyad Hasan</a><br>
    B.Sc(Engg.) In Electrical & Electronics Engineering</p>
</footer>
</div>
</body>
</html>
