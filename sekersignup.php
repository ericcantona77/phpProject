
<?php
include('seekconnection.php');
?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"></link>
<title>
ODAP- SEEKER SIGNUP PAGE
</title>
<script>
function show()
{
return validate();
}
function validate()
{
var isValid=true;

if(document.getElementById('eric').value=="")
{isValid=false;
alert("Enter Name");}

email=document.getElementById('email').value

at=email.indexOf("@")
dott=email.indexOf(".")

if(at<1 || (dott-at)<2 || email=="")
{isValid=false;
alert("incorrect email")}

if(document.getElementById('oo').value=="")
{isValid=false;
alert("Enter Password");}

num=document.getElementById('phone').value

if(isNaN(num) || num.length!=10 || num=="")
{isValid=false;
alert("wrong telephone no")
}

dropdown=document.getElementById('area').value
if(dropdown=="-1")
{
isValid=false;
alert("select area")
}
return isValid;
}
</script>
</head>
<body style="background-color: #555555">
<div >
<header>
<img class="i1" src="photos/log.png"/>
<ul>
  <li><a  href="homepage.php">Home</a></li>
</ul>
</header>
<h1>ONLINE DOMESTIC ASSISTANCE PROVIDER</h1>
<h2>SEEKER SIGNUP</h2>
<body>
<img class="ser1" src="photos/sss.png"/>
<div class="form_2">
<form method="post" action="sekersignup.php" >
  <?php include("errors.php");?>
 
NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' id="eric" name="name" placeholder="your name" required/>
<br>
<br>
EMAIL ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' id='email' name="emailid" placeholder="your email" required>
<br>
<br>
PASSWORD:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='password' id="oo" name="password" placeholder="your password" required>
<br>
<br>
TELEPHONE NO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' id='phone' name="phone" placeholder="your phone number" required >
<br>
<br>
district: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<select name='area1' id='area' required>
<option value="-1" id='drop'>--select--</option>
<option value=huye>huye</option>

</select>
<br>
<br>
sector: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<select name='area2' id='area' required>
<option value="-1" id='drop'>--select--</option>
<option value="tumba">tumba</option>
<option value="ngoma">ngoma</option>
<option value="huyesec1">huye1</option>
<option value="huye2">huye2</option>
<option value="huye3">huye3</option>

</select><br><br>
cell: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<select name='area3' id='area' required>
<option value="-1" id='drop'>--select--</option>
<option value=huye>huye</option>
<option value=huye>huye</option>
<option value=huye>huye</option>
<option value=huye>huye</option>
<option value=huye>huye</option>

</select>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;
<center><input type='submit' name="signup"></center>


</form>
</body>
</html>
