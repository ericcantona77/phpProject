
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
    <h1>ONLINE DOMESTIC ASSISTANCE PROVIDER</h1>  

<p style="text-align: center;"> LEAVE US MESSAGE</p>
<form >

  <label for="fname">First Name</label>
  <input type="text" id="fname" name="firstname" placeholder="Your name..">

  <label for="lname">Last Name</label>
  <input type="text" id="lname" name="lastname" placeholder="Your last name..">

  <label for="country">district</label>
  <select id="country" name="district">
    <option value="-1" id='drop'>--select--</option>
    <option value="huye">huye</option>
     </select>
     <label for="country">sector</label>
  <select id="country" name="sector">
    <option value="-1" id='drop'>--select--</option>
    <option value="tumba">tumba</option>
    <option value="ngoma">ngoma</option>
     <option value="huye1">huye1</option>
      <option value="huye2">huye2</option>
       <option value="huye3">huye3</option>
  </select>

  <label for="subject">Subject</label>
  <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

  <input type="submit" value="Submit">

</boby></html>