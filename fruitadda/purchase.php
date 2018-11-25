<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fruitadda";
	$temp_quantity=0;
	$temp_fruitname="";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 	

	$jsondata= json_decode(stripslashes(file_get_contents("php://input")));
	//print_r($jsondata[0]->fname);
	$buyer_email=$jsondata[3]->buyer_email;
	$seller_email=$jsondata[3]->seller_email;
	//print_r($jsondata);
	
	echo "\n";
	for($i=0;$i<3;$i++)
	{
		//echo $jsondata[$i]->fname."  ";
		//echo $jsondata[$i]->fquantity."  ";
		//echo $jsondata[$i]->fprice."  ";
		//echo "\n";
		$temp_fruitname=$jsondata[$i]->fname;
		$sql_select = "SELECT quantity FROM fruit_store where seller_email='$seller_email' and fruit_name='$temp_fruitname'";
		$result = $conn->query($sql_select);
        
		if ($result->num_rows > 0) 
		{
		    // output data of each row
		    while($row = $result->fetch_assoc())
		    {
		        $temp_quantity=$row["quantity"];

		    }
		    $temp_quantity=$temp_quantity-(int)$jsondata[$i]->fquantity;
		    $sql_update="UPDATE fruit_store SET quantity=$temp_quantity WHERE seller_email='$seller_email' and fruit_name='$temp_fruitname'";
		    if($conn->query($sql_update)===TRUE)
		    {
		    	
		    }	
		    else
		    {

		    }	
		} 
		else
		{
		    //echo "0 results";
		}
	}
	$conn->close();
?>