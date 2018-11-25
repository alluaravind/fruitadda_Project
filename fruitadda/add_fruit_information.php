<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fruitadda";

$email=$_POST["email"];
$fruit_name=$_POST["fruit_name"];
$quantity=(int)$_POST["quantity"];
$price=(int)$_POST["price"];

$data=array();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO fruit_store (seller_email,fruit_name,quantity,price)
VALUES ('$email', '$fruit_name', $quantity,$price)";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "SELECT * FROM fruit_store where seller_email='$email'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	if($row["quantity"] > 0 && $row["price"] > 0){
		        array_push($data,array('fname'=>$row["fruit_name"],'quantity'=>$row["quantity"],'price'=>$row["price"]));
		    	}
		    }
		} else {
		    array_push($data,0);
		}
		$conn->close();
		echo json_encode($data);

?>