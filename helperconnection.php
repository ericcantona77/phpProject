<?php
session_start();

// initializing variables
$nam   = "";
$idno = "";
$gender="";
$phoneno = "";
$spec="";
$timeslote="";
$area1="";
$area2="";
$area3="";
$email="";
$passw="";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cantona');

// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $nam = mysqli_real_escape_string($db, $_POST['nam']);
  $idno = mysqli_real_escape_string($db, $_POST['idno']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
 $phoneno = mysqli_real_escape_string($db, $_POST['phoneno']);

 $spec = mysqli_real_escape_string($db, $_POST['spec']);
  $timeslote= mysqli_real_escape_string($db, $_POST['timeslot']);

 $area1 = mysqli_real_escape_string($db, $_POST['area1']);
$area2= mysqli_real_escape_string($db, $_POST['area2']);
 $area3 = mysqli_real_escape_string($db, $_POST['area3']);
 $email = mysqli_real_escape_string($db, $_POST['email']);
  $passw = mysqli_real_escape_string($db, $_POST['passw']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (!$nam) { array_push($errors, "name is required"); }
  if (!$idno) { array_push($errors, "id is required"); }
  if (!$gender) { array_push($errors, "gender is required"); }
  if (!$phoneno) { array_push($errors, "phone is required"); }
  if (!$spec) { array_push($errors, "specification is required"); }
  if (!$timeslote) { array_push($errors, "time slot is required"); }
  if (!$area1) { array_push($errors, "area is required"); }
  if (!$area2) { array_push($errors, "area is required"); }
  if (!$area3) { array_push($errors, "area is required"); }
  if (!$email) { array_push($errors, "email is required"); }
  if (!$passw) { array_push($errors, "password is required"); }

  }

  // first check the database to make sure 
   //a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM helpers WHERE email='$email' OR idnumber='$idno' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $helpers = mysqli_fetch_assoc($result);
  
  if ($helpers) { // if user exists
    if ($helpers['email'] === $email) {
      array_push($errors, "email already exists");
    }

    if ($helpers['idnumber'] === $idno) {
      array_push($errors, "idnumber already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$passw= md5($passw);//encrypt the password before saving in the database

  	$query = "INSERT INTO helpers (name,idnumber,gender,telephoneno,specification,timeslot,district,sector,cell,email,password) 
  			  VALUES('$nam','$idno', '$gender','$phoneno','$spec','$timeslote','$area1','$area2','$area3','$email','$passw')";
  	mysqli_query($db, $query);
  	$_SESSION['nam'] = $nam;
  	$_SESSION['success'] = "You are now registered ";
    echo "registered successfully" ;
  	header('You are now registered ');
  }


  
  ?>
