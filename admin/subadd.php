<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Subject</title>
  <link href="../quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
<div>
  <img src="logo.png" alt="logo">
</div>  
<?php
session_start();
include("header.php");
require("../database.php");
?>
<?php
extract($_POST);
echo "<BR>";
if (!isset($_SESSION[alogin]))
{
  echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
  echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
  exit();
}
echo "<BR><h3 class=head1>Subject Add </h3>";

echo "<table width=100%>";
echo "<tr><td align=center></table>";
if($submit=='submit' || strlen($subname)>0 )
{
$rs=mysql_query("select * from mst_subject where sub_name='$subname'");
if (mysql_num_rows($rs)>0)
{
  echo "<br><br><br><div class=head1>Subject is Already Exists</div>";
  exit;
}
mysql_query("insert into mst_subject(sub_name) values ('$subname')",$cn) or die(mysql_error());
echo "<p align=center>Subject  <b> \"$subname \"</b> Added Successfully.</p>";
$submit="";
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.subname.value;
if (mt.length<1) {
alert("Please Enter Subject Name");
document.form1.subname.focus();
return false;
}
return true;
}
</script>


<div class="adlog">
  <form name="form1" method="post" onSubmit="return check();">
    <label><b class="txt">Enter Subject Name </b></label>
    <input type="text" placeholder="Enter Subject" name="subname" id="subname">
    
    <input type="submit" name="submit" value="Add" >
  </form>
</div>  
<footer class="copyright text-center">
    &copy; 2018 - <p>Developed by<a href="../profile.php"> Md. Miyad Hasan</a><br>
    B.Sc(Engg.) In Electrical & Electronics Engineering</p>
</footer>
</div>
<p>&nbsp; </p>
</body>
</html>
  








