<?php
session_start();

$name="";
$paswrd="";

$errors = array(); 
$db = mysqli_connect('localhost', 'root', '', 'cantona');




if (isset($_POST['logina'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $paswrd = mysqli_real_escape_string($db, $_POST['paswrd']);
  
    if (!$name) {
        array_push($errors, "username is required");
    }
    if (!$paswrd) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        //$paswrd= md5($paswrd);
        $query = "SELECT * FROM users WHERE name='$name' AND password='$paswrd'";
        $results = mysqli_query($db, $query);
        if ($results) {
          $_SESSION['name'] = '$name';
          $_SESSION['success'] = "You are now logged in";
         header('location: menuadmin.php');
        }
       
    } else {
            array_push($errors, "Wrong email_id/password combination");
        }
  }
  
  







?>