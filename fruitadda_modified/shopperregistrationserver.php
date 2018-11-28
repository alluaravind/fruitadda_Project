<?php
session_start();

// initializing variables
$useremail = "";
$userphonenumber = "";
$userfirstname    = "";
$userpannumber = "";
$useraddress = "";
$userlastname = "";
$userpassword= "";
$usersecurityanswer="";


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'fruitadda');

// REGISTER USER
if (isset($_POST['shoppersubmit'])) {
  // receive all input values from the form
  $useremail = mysqli_real_escape_string($db, $_POST['useremail']);
  $userfirstname = mysqli_real_escape_string($db, $_POST['userfirstname']);
  $userlastname = mysqli_real_escape_string($db, $_POST['userlastname']);
  $userpannumber = mysqli_real_escape_string($db, $_POST['userpannumber']);
  $userphonenumber = mysqli_real_escape_string($db, $_POST['userphonenumber']);
  $useraddress = mysqli_real_escape_string($db, $_POST['useraddress']);
  $userpassword = mysqli_real_escape_string($db, $_POST['userpassword']);
  $usersecurityanswer = mysqli_real_escape_string($db, $_POST['usersecurityanswer']);
  $wallet=3500;

  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or useremail
  $user_check_query = "SELECT * FROM shopperregistration WHERE useremail='$useremail' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  
    

    if ($user['useremail'] === $useremail) {
      echo '<script language="javascript">';
      echo 'alert("Email already exists")';
      echo '</script>';
    
    }

  // Finally, register user if there are no errors in the form
  	

  	$query = "INSERT INTO shopperregistration 
  			 VALUES('$useremail','$userfirstname','$userlastname','$userpannumber','$userphonenumber','$useraddress','$userpassword','$usersecurityanswer','$wallet')";
  	mysqli_query($db, $query);
  	$_SESSION['useremail'] = $useremail;
  	//$_SESSION['success'] = "You are now logged in";
  	header('location: shopperdashboard.php');
  
}

// ... 
// LOGIN USER
if (isset($_POST['shopperlogin'])) {
  $useremail = mysqli_real_escape_string($db, $_POST['useremail']);
  $userpassword = mysqli_real_escape_string($db, $_POST['userpassword']);

  

  
    
    $query = "SELECT * FROM shopperregistration WHERE useremail='$useremail' AND userpassword='$userpassword'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['useremail'] = $useremail;
      //$_SESSION['success'] = "You are now logged in";
      header('location: shopperdashboard.php');
    }
    else {
      
      echo '<script type="text/javascript">
          window.onload = function () { alert("Wrong username/password combination"); }
      </script>';
      header('location: alert.php');
    }

  
}

?>