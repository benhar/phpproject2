<!DOCTYPE HTML>
<html>
<head>
<title>New user signup </title>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
   alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
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
?>
<div class="adlog">
  <h1 class="text-center">New User Signup</h1>
    <form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
      <div class="container">
              <label><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="lid">

              <label><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="pass">

              <label><b>Confirm Password</b></label>
              <input type="text" placeholder="Confirm Password" name="cpass" id="cpass">

              <label><b>Name</b></label>
              <input type="text" placeholder="Enter Name" name="name" id="name">

              <label><b>Address</b></label>
              <input type="text" placeholder="Enter Address" name="address" id="address">

              <label><b>City</b></label>
              <input type="text" placeholder="Enter City Name" name="city" id="city">

              <label><b>Contact Number</b></label>
              <input type="text" placeholder="Enter Contact Number" name="phone" id="phone">

              <label><b>E-mail</b></label>
              <input type="text" placeholder="Enter E-mail" name="email" id="email">

              <input type="submit" name="Submit" value="Signup">
        
              
              <label>
                <input type="checkbox" checked="checked"> Remember me
              </label>
        </div>
    </form>
</div>
 <p>&nbsp; </p>
<footer class="copyright text-center">
    &copy; 2018 - <p>Developed by<a href="profile.php"> Md. Miyad Hasan</a><br>
    B.Sc(Engg.) In Electrical & Electronics Engineering</p>
</footer>
</div>

</body>
</html>
