<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fruitadda";
	$temp_quantity=0;
	$temp_fruitname="";
	$tempquan="";
	$tempprice="";
	$buyer_wallet="";
	$seller_wallet="";
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
	$wallet_sql_shopper = "SELECT wallet from shopperregistration where useremail='$buyer_email'";
	$wallet_res_shopper = $conn->query($wallet_sql_shopper);
	while($row = mysqli_fetch_array($wallet_res_shopper)) 
    {
    	$buyer_wallet = (int)$row['wallet'] - 100;
    }
	$wallet_sql_seller = "SELECT wallet from retailerregistration where email='$seller_email'";
	$wallet_res_seller = $conn->query($wallet_sql_seller);
	while($row = mysqli_fetch_array($wallet_res_seller)) 
    {
    	$seller_wallet = (int)$row['wallet'] + 100;
    }
    $wallet_sql_seller_update = "UPDATE retailerregistration set wallet='$seller_wallet' where email='$seller_email'";
    $wallet_res_seller_update = $conn->query($wallet_sql_seller_update);

    $wallet_sql_buyer_update = "UPDATE shopperregistration set wallet='$buyer_wallet' where useremail='$buyer_email'";
    $wallet_res_buyer_update = $conn->query($wallet_sql_buyer_update);
	for($i=0;$i<3;$i++)
	{
		//echo $jsondata[$i]->fname."  ";
		//echo $jsondata[$i]->fquantity."  ";
		//echo $jsondata[$i]->fprice."  ";
		//echo "\n";
		$temp_fruitname=$jsondata[$i]->fname;
		$tempquan = $jsondata[$i]->fquantity;
		$tempprice = $jsondata[$i]->fprice;
		$sql_select = "SELECT quantity FROM fruit_store where seller_email='$seller_email' and fruit_name='$temp_fruitname'";

		$result = $conn->query($sql_select);
        $sq = "INSERT INTO purchasetable values('$seller_email','$buyer_email','$temp_fruitname','$tempquan','$tempprice','$seller_wallet','$buyer_wallet',now())";
        $res = $conn->query($sq);

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