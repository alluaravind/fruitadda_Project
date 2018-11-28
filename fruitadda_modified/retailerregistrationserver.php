<?php
session_start();

// initializing variables
$email = "";
$phonenumber = "";
$firstname    = "";
$pannumber = "";
$address = "";
$lastname = "";
$password= "";
$securityanswer="";


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'fruitadda');
echo "aravind";
// REGISTER USER
if (isset($_POST['retailersubmit'])) {
  // receive all input values from the form
  $email =  $_POST['email'];
  $firstname =  $_POST['firstname'];
  $lastname =  $_POST['lastname'];
  $pannumber =  $_POST['pannumber'];
  $phonenumber =  $_POST['phonenumber'];
  $address =  $_POST['address'];
  $password =  $_POST['password'];
  $securityanswer =  $_POST['securityanswer'];
  $wallet=3500;

  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  // $user_check_query = "SELECT * FROM retailerregistration WHERE email='$email' LIMIT 1";
  // $result = mysqli_query($db, $user_check_query);
  // $user = mysqli_fetch_assoc($result);
  
  //if ($user) { // if user exists
    

    if ($user['email'] == $email) {
      echo '<script language="javascript">';
      echo 'alert("Email already exists")';
      echo '</script>';
    }
  //}

  // Finally, register user if there are no errors in the form
  	

  	$query = "INSERT INTO retailerregistration(email,firstname,lastname,pannumber,phonenumber,address,password,securityanswer,wallet) 
  			 VALUES('$email','$firstname','$lastname','$pannumber','$phonenumber','$address','$password','$securityanswer','$wallet')";
         // $query = "UPDATE retailerregistration SET email='$email',firstname='$firstname',lastname='$lastname',pannumber='$pannumber',phonenumber='$phonenumber',address='$address',password='$password',securityanswer='$securityanswer',wallet='$wallet'";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	//$_SESSION['success'] = "You are now logged in";
  	header('location: sellerdashboard.php');
  
}

// ... 
// LOGIN USER
if (isset($_POST['retailerlogin'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  

  
    
    $query = "SELECT * FROM retailerregistration WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      //$_SESSION['success'] = "You are now logged in";
      header('location: sellerdashboard.php');
    }
    else {
      
      echo '<script type="text/javascript">
          window.onload = function () { alert("Wrong username/password combination "); }
      </script>';
      header('location: alert.php');
    }

  
}

?>