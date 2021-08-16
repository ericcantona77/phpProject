<?php

include('helperconnection.php');

?>




<html>
  <head>
  <link rel="stylesheet" type="text/css" href="style.css"></link>
  <title>Online Domestic Assistance Provider</title>
  </head>
  <body>


<div id="home">
  <header>
  <img class="i1" src="photos/log.png"/>
  <ul>
    <li><a  href="loginas.php">login as</a></li>
    <li><a  href="helperreg.php">helper registration</a></li>
    <li><a  href="contactus.php">Contact Us</a></li>
    <li><a href="howitworks.php">How It Work</a></li>
    <li><a href="aboutus.php">About</a></li>
    <li><a class="active" href="homepage.php">Home</a></li>
  </ul>

</header>
</div>

<body style="background-color: grey">
<img class="ser1" src="photos/selogo.png"/>
<P style="text-align:center">FILL THE FORM TO REGISTER</P>
<div class="form_2">
  
<form  method="post" action="helperreg.php">
NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' id="eric" name='nam' placeholder="your name" required/>
<br>
<br>
ID NUMBER:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text'  id="card_number"' name='idno' placeholder="xxxx-xxxx-xxxx"required/>
<br>
<br>
GENDER:
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
FEMALE<input type='radio' name='gender' id='genf' value='female' required/>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

MALE:
<input type='radio' name='gender' id='genm' value='male' required/>
<br>
<br>
TELEPHONE NO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='tel' id='phone' name='phoneno' placeholder="telephone number" required />
<br>
<br>

SPECIFICATION:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name='spec' id=spec required>
<option value="-1" id='drop'>--select--</option>
<option value="CLEANING">CLEANING</option>
<option value="COOKING">COOKING</option>
<option value="BABY SITTER">BABY SITTER</option>
<option value="ELDER CARE">ELDER CARE</option>
</select>
<br>
<br>

TIMESLOT:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name='timeslot' id='ts' required>
<option value="-1" id='drop'>--select--</option>
<option value="per day">per day</option>
<option value="per week">per week</option>
<option value="weekndend">weekend</option>
<option value="working days">working days(monday to friday) </option>
<option value="two weeks">two weeks</option>
<option value="month">month</option>
</select>
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
EMAIL ID:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='email' id='email' name='email' required />
<br>
<br>
PASSWORD:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='password' id="oo" name='passw' required />
<br>
<br>

&nbsp;&nbsp;&nbsp;&nbsp;
<center><input type='submit' value='register' name="register"></center>
</form>
</body></html>