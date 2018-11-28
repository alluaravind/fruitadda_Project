<?php
session_start();
$email = $_SESSION['email'];
$conn = mysqli_connect('localhost', 'root', '', 'fruitadda');
$sellerpannumber = "";
$sellerstorename="";
$sellerstoredescription="";
$sellerstorelocation="";
if (isset($_POST['update_storename_submit'])) {
  // receive all input values from the form
  $sellerpannumber =  $_POST['sellerpannumber'];
  $sellerstorename =  $_POST['sellerstorename'];
  $sellerstoredescription =  $_POST['sellerstoredescription'];
  $sellerstorelocation =  $_POST['sellerstorelocation'];
 	
  // Finally, register user if there are no errors in the form
  	

  	// $query = "INSERT INTO retailerregistration(storename,storedescription,sellerstorelocation) 
  	// 		 VALUES('$sellerstorename','$sellerstoredescription','$sellerstorelocation') where email='$email' AND pannumber='$sellerpannumber' ";
    // $query = "UPDATE retailerregistration SET storename = '$sellerstorename', storedescription='$sellerstoredescription',storelocation = '$sellerstorelocation' where email='$email' AND pannumber='$sellerpannumber'";
    
    $query = "UPDATE retailerregistration SET storename='$sellerstorename',storelocation='$sellerstorelocation',storedescription='$sellerstoredescription' where email='$email' AND pannumber='$sellerpannumber'";
  	$result = $conn->query($query);
    // if ($result > 0) {
    //     echo "success";
    //     echo $email;
    //     echo $sellerstorelocation;
    //     echo $sellerpannumber;
    // }
  	//$_SESSION['success'] = "You are now logged in";
  	header('location: sellerdashboard.php');
  
}




?>