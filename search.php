<?php
session_start();

// initializing variables
$spec = "";
$timeslot= "";
$gender="";
$area1="";
$area2="";
$area3="";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cantona');


if (isset($_POST['search'])) {
  // receive all input values from the form
  $spec = mysqli_real_escape_string($db, $_POST['spec']);
  $timeslot= mysqli_real_escape_string($db, $_POST['timeslot']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
 
  $area1 = mysqli_real_escape_string($db, $_POST['area1']);
  $area2 = mysqli_real_escape_string($db, $_POST['area2']);
  $area3 = mysqli_real_escape_string($db, $_POST['area3']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (!$spec) { array_push($errors, "specification is required"); }
  if (!$timeslot) { array_push($errors, "timeslot is required"); }
  if (!$gender) { array_push($errors, "gender is required"); }
 
  if (!$area1) { array_push($errors, "area is required"); }
  if (!$area2) { array_push($errors, "area is required"); }
  if (!$area3) { array_push($errors, "area is required"); }
 

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $query = "SELECT * FROM helpers ;
  $result = mysqli_query($db, $query);

  while($row=mysqli_fetch_array($results)){
   <?php echo "$row['specification']"?>;
    echo "$row['timeslot']";
    echo "$row['gender']";
    echo "$row['district']";
    echo "$row['sector']";
    echo "$row['cell']";
  }
}
