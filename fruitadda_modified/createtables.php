<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fruitadda";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// sql to create table
$sql = "CREATE TABLE retailerregistration (
email VARCHAR(50) primary key,
firstname VARCHAR(30),
lastname VARCHAR(30),
pannumber VARCHAR(15),
phonenumber BIGINT(10),
address VARCHAR(50),
password VARCHAR(20),
securityanswer VARCHAR(20)
)";
$sql1 = "CREATE TABLE shopperregistration (
useremail VARCHAR(50) primary key,
userfirstname VARCHAR(30),
userlastname VARCHAR(30),
userpannumber VARCHAR(15),
userphonenumber BIGINT(10),
useraddress VARCHAR(50),
userpassword VARCHAR(20),
usersecurityanswer VARCHAR(20)
)";
if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE) {
echo "Table  created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>