
<?php
include('userss.php');
?>





<html>
<head>
<title>
ADMIN LOGIN PAGE
</title>
<link rel="stylesheet" type="text/css" href="style.css"></link>
<script>
function show()
{
return validate();
}
function validate()
{
var isValid=true;
if(document.getElementById('name').value=="")
{
isValid=false;
alert("please enter name");
}
if(document.getElementById('paswrd').value=="")
{
isValid=false;
alert("Incorrect Password");
}
return isValid;
}
</script>
<body style="background-color: #555555">
<div >
<header>
<img class="i1" src="photos/log.png"/>
<ul>
  <li><a  href="homepage.php">Home</a></li>
</ul>
</header>
<h1>ONLINE DOMESTIC ASSISTANCE PROVIDER</h1>
<center><h2>ADMIN LOGIN</h2></center>
<img align="middle" src="photos/dddddd.png" class="img2">
<div class="form_1">
<form method="post" action="adminlogin.php">
<?php include("errors.php");?>
NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text'  id='name' name='name' />
<br>
PASSWORD:
<input type='password' id='paswrd' name='paswrd'>
<br>
<br>
<br>
<center><input type='submit' value='LOGIN' name='logina' /> </center>
</form>
</div>
</body>
</html>
