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

$sql = "SELECT email FROM retailerregistration";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{

echo "<center><br><br><br><br>";
echo "<table border = '1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Department</th>"; 
echo "<th>College Name</th>"; 
echo "<th>Phone Number</th>";       
echo "</tr>";
   while($row = mysqli_fetch_assoc($result)) {
       echo "<tr>";
       echo "<td>".$row['id']."</td>";
       echo "<td>".$row['name']."</td>";
       echo "<td>".$row['dept']."</td>"; 
       echo "<td>".$row['col_name']."</td>"; 
       echo "<td>".$row['phn']."</td>";       
       echo "</tr>";
   }
   echo "</table>";
   echo "</center>";
   
} 
else 
{
   echo "0 results";
}
?>
<html>
<head>
</head>
<body>
 <a href="delete.php">click to delete a row </a><br><br>
<a href="update.php">click to update a row </a>
<?php
$conn->close();
?>
</body>
</html>
