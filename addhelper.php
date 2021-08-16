<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"></link>
<title>
ADD/UPDATE HELPER
</title>
<script>
function show()
{
return validate();
}
function validate()
{
var isValid=true;

if(document.getElementById('name').value=="")
var isValid=false;
alert("UNATTENDED FIELD (NAME OR AGE)")

ann=document.getElementById('an').value

if(isNaN(ann) || ann.length!=12 || ann=="")
var isValid=false;
	alert("wrong adhar no")

num=document.getElementById('phone').value
if(isNaN(num) || num.length!=10 || num=="")
var isValid=false;
	alert("wrong telephone no")

if(document.form1.gender[0].checked==false && document.form1.gender[1].checked==false)
var isValid=false;
	alert("Select a Gender")

if(document.form1.spec[0].checked==false && document.form1.spec[1].checked==false)
var isValid=false;
	alert("Select Specification")

dropdown=document.getElementById('area').value
if(dropdown=="-1")
var isValid=false;
alert("select area")

}
</script>
</head>
<body>
<div >
<header>


<img class="i1" src="photos/log.png"/>

<ul>

  
  <li><a  href="homepage.php">Home</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>

</header>

<h1>ONLINE DOMESTIC ASSISTANCE PROVIDER</h1>
<h2>ADD/UPDATE HELPER DETAILS</h2>

<img class="ser1" src="photos/hhdd.jpg"/>
<div class="form_2">
<form name="form1" action="add_uph_data.html" onsubmit="return show()">

NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text'  id='nese' />
<br>
<br>

ID number.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' id='an'>
<br>
<br>

TELEPHONE NO.<input type='text' id='phone' >
<br>
<br>

GENDER:
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
FEMALE<input type='radio' name='gender' id='genf' value='female' >
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

MALE<input type='radio' name='gender' id='genm' value='male'>
<br>
<br>

AGE:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text'  id='nme' /><BR>
<br>
<br>

SPECIFICATION <br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

CLEANING<input type='checkbox' name='spec' id='s1' value='clean'>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

COOKING<input type='checkbox' name='spec' id='s1' value='cook'>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

BABY SITTER<input type='checkbox' name='spec' id='s1' value='bs'><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

ELDER CARE<input type='checkbox' name='spec' id='s1' value='ER'>
<br>
<br>

DISTRICT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name='area' id='area'>
<option value="-1" id='drop'>--select--</option>
<option value=del>HUYE</option>


</select>
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<input type='submit' value='ADD' onclick='validate()'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='submit' value='UPDATE'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


</form>
</div>
</body>
</html>
