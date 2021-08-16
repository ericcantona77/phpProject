
  <?php
session_start();

// initializing variables
$name   = "";
$emailid = "";
$password="";
$phone = "";
$area1="";
$area2="";
$area3="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cantona');

// REGISTER USER
if (isset($_POST['signup'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $emailid = mysqli_real_escape_string($db, $_POST['emailid']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $area1 = mysqli_real_escape_string($db, $_POST['area1']);
  $area2 = mysqli_real_escape_string($db, $_POST['area2']);
  $area3 = mysqli_real_escape_string($db, $_POST['area3']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (!$name) { array_push($errors, "name is required"); }
  if (!$emailid) { array_push($errors, "email is required"); }
  if (!$password) { array_push($errors, "password is required"); }
  if (!$phone) { array_push($errors, "phone is required"); }
  if (!$area1) { array_push($errors, "area is required"); }
  if (!$area2) { array_push($errors, "area is required"); }
  if (!$area3) { array_push($errors, "area is required"); }


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM seekersignup WHERE name='$name' OR emailid='$emailid' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $seekersignup = mysqli_fetch_assoc($result);
  
  if ($seekersignup) { // if user exists
    if ($seekersignup['name'] === $name) {
      array_push($errors, "name already exists");
    }

    if ($seekersignup['emailid'] === $emailid) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO seekersignup  (name,emailid, password,phone, district,sector,cell) 
  			  VALUES('$name','$emailid', '$password','$phone', '$area1','$area2','$area3')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: seekerlogin.php');
  }
}
// ... 

// LOGIN USER
if (isset($_POST['seekeruser'])) {
    $emailid = mysqli_real_escape_string($db, $_POST['emailid']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (!$emailid) {
        array_push($errors, "email is required");
    }
    if (!$password) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM seekersignup WHERE emailid='$emailid' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['emailid'] = '$emailid';
          $_SESSION['success'] = "You are now logged in";
          header('location: requireform.php');
        }else {
          
            array_push($errors, "Wrong emailid/password combination");
        }
    }
  }
  
  ?>
