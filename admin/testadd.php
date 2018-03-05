<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Test</title>
  <link href="../quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
<div>
    <img src="logo.png" alt="logo">
</div>

<?php
session_start();
if (!isset($_SESSION['alogin']))
{
  echo "<br><h2>You are not Logged On Please Login to Access this Page</h2>";
  echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
  exit();
}
?>
<?php
include("header.php");
require("../database.php");

echo "<br><h2><div  class=head1>Add Test</div></h2>";
if($_POST[submit]=='Save' || strlen($_POST['subid'])>0 )
{
extract($_POST);
mysql_query("INSERT INTO mst_test(sub_id,test_name,total_que) values ('$subid','$testname','$totque')",$cn) or die(mysql_error());
echo "<p align=center>Test <b>\"$testname\"</b> Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.testname.value;
if (mt.length<1) {
alert("Please Enter Test Name");
document.form1.testname.focus();
return false;
}
tt=document.form1.totque.value;
if(tt.length<1) {
alert("Please Enter Total Question");
document.form1.totque.value;
return false;
}
return true;
}
</script>
<div class="adlog">
<form name="form1" method="post" onSubmit="return check();">
  <table width="58%"  border="0" align="center">
    <tr>
      <td width="49%" height="32"><div align="left"><strong>Enter Subject ID </strong></div></td>
      <td width="3%" height="5">  
      <td width="48%" height="32">
        <select name="subid">
            <?php
            $rs=mysql_query("Select * from mst_subject order by  sub_name",$cn);
                while($row=mysql_fetch_array($rs))
            {
            if($row[0]==$subid)
            {
            echo "<option value='$row[0]' selected>$row[1]</option>";
            }
            else
            {
            echo "<option value='$row[0]'>$row[1]</option>";
            }
            }
            ?>
        </select>
      <tr>
        <td height="26"><div align="left"><strong> Enter Test Name </strong></div></td>
        <td>&nbsp;</td>
    <td><input name="testname" type="text" id="testname"></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Enter Total Question </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="totque" type="text" id="totque"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add" ></td>
    </tr>
  </table>
</form>
</div>
<p>&nbsp; </p>
<footer class="copyright text-center">
    &copy; 2018 - <p>Developed by<a href="../profile.php"> Md. Miyad Hasan</a><br>
    B.Sc(Engg.) In Electrical & Electronics Engineering</p>
</footer>

</div>


</body>
</html>




