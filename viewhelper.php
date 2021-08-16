<html>
<head>
<title>
VIEW HELPER
</title>
<link rel="stylesheet" type="text/css" href="style.css"></link>
<script>
function validate()
{
if(document.getElementById('name').value=="")
{
alert("incorrect id no.");
}
if(document.getElementById('paswrd').value=="")
{
alert("Incorrect Name");
}
}
</script>
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
<center><h2>VIEW HELPER</h2></center>
<img align="middle" src="photos/vvvvvvv.png" class="img2">
<div class="form_1">
<form name="form1" >
ID NO:&nbsp;&nbsp; 
<input type='text'  id='name' />
<br>
NAME:&nbsp;&nbsp;&nbsp;
<input type='text' id='paswrd' >
<br>
<br>
<br>
<center><input type='submit' value='VIEW' onClick='validate()' /> </center>
</form>
</div>
</body>
</html>
