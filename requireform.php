





<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"></link>
<title>
REQUIRNMENT FORM
</title>
<script>
function validate()
{

dropdown=document.getElementById('spec').value
if(dropdown=="-1")
alert("Select Specification")

dropdown=document.getElementById('time').value
if(dropdown=="-1")
alert("Select Time Slot")

if(document.form1.gender[0].checked==false && document.form1.gender[1].checked==false)
	alert("Select a Gender")

dropdown=document.getElementById('area').value
if(dropdown=="-1")
alert("Select area")
}

</script>
</head>
<body style="background-color: #555555">
<header>


<img class="i1" src="photos/log.png"/>

<ul>

  
  <li><a  href="homepage.php">Home</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>

</header>

<h1>ONLINE DOMESTIC ASSISTANCE PROVIDER</h1>
<h2>REQUIRNMENT FORM</h2>

<img class="ser1" src="photos/ff.png"/>
<div class="form_2">
<form method="post" action="requireform.php">

SPECIFICATION:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name='spec' id=spec>
<option value="-1" id='drop'>--select--</option>
<option value=del>CLEANING</option>
<option value=ncr>COOKING</option>
<option value=ncr>BABY SITTER</option>
<option value=ncr>ELDER CARE</option>
</select>
<br>
<br>

TIMESLOT:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name='time' id='time'>
<option value="-1" id='drop'>--select--</option>
<option value=del>per day</option>
<option value=ncr>per week</option>
<option value=ncr>weekend</option>
<option value=ncr>working days(monday to friday) </option>
<option value=ncr>two weeks</option>
<option value=ncr>month</option>
</select>
<br>
<br>

GENDER:
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
FEMALE<input type='radio' name='gender' id='genf' value='female' >
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

MALE<input type='radio' name='gender' id='genm' value='male'>
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
<option value=huye>huye</option></select>
<br><br>
COMMENT:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='textarea'  id='ne' />
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<input type='submit' value='SEARCH' name='search'/>
</form>
</div>
</body>
</html>
