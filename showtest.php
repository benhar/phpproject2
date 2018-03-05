<?php
session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Online Quiz - Test List</title>
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
extract($_GET);
$rs1=mysql_query("SELECT * from mst_subject where sub_id=$subid");
$row1=mysql_fetch_array($rs1);
echo "<h1 align=center><font color=black> $row1[1]</font></h1>";
$rs=mysql_query("SELECT * from mst_test where sub_id=$subid");
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h2 class=head1> NO QUESTION FOR THIS SUBJECT </h2>";
	echo '<footer class="copyright text-center">
    &copy; 2018 - <p>Developed by<a href="profile.php"> Md. Miyad Hasan</a><br>
    B.Sc(Engg.) In Electrical & Electronics Engineering</p>
</footer>';
	exit;
}
echo "<h2 class=head1> SELECT EXAM NAME TO GIVE EXAM </h2>";
echo "<table align=center>";

while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=quiz.php?testid=$row[0]&subid=$subid><font size=6>$row[2]</font></a>";
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
