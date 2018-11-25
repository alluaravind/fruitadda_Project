<?php
session_start();

	if (!isset($_SESSION['email'])) {
		
		header('location:retailerregistration.php');
		
	}

	//echo $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="updatestore.js"></script>
	<style type="text/css">
		.fruit_information>.row>div>table img
		{
			cursor: -webkit-grab; cursor: grab;
		}
		.fruit_information
		{
			//background-color:#e8e8e8;
		}
		.add_fruit_information
		{
			margin-top: 2%;
		}
		body{
  			background-image: url("fruitbackground.jpg");
  		}
		
		th{
			font-size: 20px;
			padding-left: 20px;
			padding: 15px;
		}
		td{
			color: white;
			font-size: 30px;
			padding: 15px;
		}
		.whov:hover { background-color: #00695c!important; }
.view {
	background-position: center center;
	background-repeat: no-repeat;
	height: 500px;
}
.secondbase {
    background-color: rgba(255,255,255,.6); 
    margin-top: -90px;
}
#update:hover{
	 background-color: #00695c!important;
}
form p
{
      display:none;
} 
	</style>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		var email;
		$(document).ready(function(){			
			email=$("#user_emailid").text().trim();
			//console.log(email);
			var fruits_from_server="";
			$.post("retailer_get_wallet_money.php",{"email":email},
          			function(data){
              			$("#walletid").text(data);
          			}
          	);
			$.post("get_fruit_information.php",
				    {"email":email},
				    function(data,status){
				    	
				    	
				    	//alert(fruits_from_server[2].fname);
				    	if (data != "[0]") {
				    		//console.log(data);
				    		fruits_from_server=JSON.parse(data);
				    		drawTable(fruits_from_server,email);
				    	}
				    }
		    );
									
			$(document).on("click","#delete",function(){
					var temp=$(this).attr("name");
					console.log(temp.split(":")[0]+" "+temp.split(":")[1]);
					deleteRow(temp.split(":")[0],temp.split(":")[1]);
			});
			$(document).on("click","#update",function(){
					var temp=$(this).attr("name");
					//console.log(temp);
			});
			$("#btn_add").click(function(){
				$("tbody").remove();
				$.post("add_fruit_information.php",
				    {
				      "email":email,
				      "fruit_name":$("#fruit_name").val(),
				      "quantity":$("#quantity").val(),
				      "price":$("#price").val()
				    },
				    function(data,status){
				    	console.log(data);
				    	fruits_from_server=JSON.parse(data);
				    	if (data != "[0]") {
				    		//console.log(fruit_name);
				    		fruits_from_server=JSON.parse(data);
				    		drawTable(fruits_from_server,email);
				    	}
				    }
		    	);
			});
			$(document).on("click","#update",function(){
				var index=$(this).attr("name");
				console.log(index);
				console.log(fruits_from_server[index].fname);
				$("#update_fruit").text(fruits_from_server[index].fname);
				$("#update_quantity").val(fruits_from_server[index].quantity);
				$("#update_price").val(fruits_from_server[index].price);

			});
			$("#update_btn").click(function(){
				 $("tbody").remove();
				 $.post("update_fruit_information.php",
				    {
				      "email":email,
				      "fruit_name":$("#update_fruit").text(),
				      "quantity":$("#update_quantity").val(),
				      "price":$("#update_price").val()
				    },
				    function(data,status){
				    	
				    	if (data != "[0]") {
				    		console.log(data);
				    		fruits_from_server=JSON.parse(data);
				    		drawTable(fruits_from_server,email);
				    	}	
				    }
		    	);
			});
		});
		function drawTable(fruits,email){
			//console.log(fruits.length);
			for (var i = 0; i < fruits.length; i++) {
        			drawRow(fruits[i],email,i);
    		}
		}
		function drawRow(fruit,email,index)
		{
			    //console.log(fruit.fname);
			    fruittable= $("<ul class='list-group'/>");
			    $("#result").append(fruittable);
				var row = $("<tr />");
				var tbody=$("<tbody/>");
				$("#tableone").append(tbody);
			    tbody.append(row); 
			    row.append($("<td><img id='delete' name='"+email+":"+fruit.fname+"' src='deleting.png' width='40' height='40'></td>"));
			    row.append($("<td>" + fruit.fname + "</td>"));
			    row.append($("<td>" + fruit.quantity + "</td>"));
			    row.append($("<td>" + fruit.price + "</td>"));
			    row.append($("<td><img data-toggle='modal' data-target='#myModal' id='update' name='"+index+"' src='updating.gif' width='80' height='50'></td>"));

		}       
		function deleteRow(email,fruit_name)
		{
			
			$("tbody").remove();
			$.post("delete_fruit_information.php",
				    {"email":email,"fruit_name":fruit_name},
				    function(data,status){				    	
				    	//console.log(data);
				    	
				    	if (data != "[0]") {
				    		fruits_from_server=JSON.parse(data);
				    		drawTable(fruits_from_server,email);
				    	}
				    }
				  );
		}
	</script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="jsontojquery.php" style="color: white;font-size: 20px;">Fruit Adda</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="jsontojquery.php">Home</a></li>
      <li class="active"><a href="#"  data-toggle="modal" data-target="#myModal3">Update Store Name</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      		<li>
                <a class="nav-link waves-effect waves-light" id="user_emailid" style="color: white;font-size: 20px;"><?php echo $_SESSION['email']; ?> <i class="fa fa-envelope" style="color: white">&nbsp;&nbsp;&nbsp;</i></a>

            </li>
      		<li class="nav-item">
                <a class="nav-link waves-effect waves-light" style="color: white;font-size: 20px;">Wallet  &nbsp;0$&nbsp;&nbsp;<img src="wallet.png" width="25px" height="20px">&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
        		<h5 id="walletid" style="color: white;font-size: 30px;"></h5>
      		</li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="retailerregistration.php?logout='1'" style="color: white;font-size: 20px;">Logout <i class="fa fa-eye"></i></a>
            </li>
    </ul>
  </div>
</nav>
  

	<!-- <h1 id="user_emailid">   <?php echo $_SESSION['email']; ?>	    </h1> -->

	<!-- <div class="container-fluid">
		<div class="row">
			<div class="col-lg-12" style="font-size: 20px;color: red"><br><br><br>
				<marquee><div id="user_emailid"><?php echo $_SESSION['email']; ?></div></marquee>
					
			</div>
		</div>
	</div> -->
<!-- <h1 id="user_emailid">   <?php echo $_SESSION['email']; ?>	    </h1> -->
<!-- <a href="retailerregistration.php?logout='1'">logout</a>  -->
<!-- <div class="container-fluid">
	<div class="row" >
		<div class="col-lg-10" ></div>
		<div style="background-color: white;font-size: 20px;border-width:1px;
					border-style:solid;border-color:black;" class="col-lg-2">Wallet
		</div>
	</div>

	<div class="row">
		<div class="col-lg-10"></div>
    	<div style="background-color: white;font-size: 60px;color: black;border-width:1px;
					border-style:solid;border-color:black;" class="col-lg-2" id="wallet"> 0$
		</div>
	</div>
</div> -->
<br><br><br><br>
<!--start Modal add information-->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: #800000">Add Fruits</h4>
        </div>
        <div class="modal-body">
           <form >
					<div class="form-group">
  						<label> FruitName:</label>
  						<input type="text" class="form-control" id="fruit_name" style="color: #00539C" required>
  						
					</div>
					<div class="form-group">
  						<label>Quantity:</label>
  						<input type="number" class="form-control" id="quantity" style="color: #00539C" required>
					</div>
					<div class="form-group">
  						<label>Price:</label>
  						<input type="number" class="form-control" id="price" style="color: #00539C" required>
					</div>
					<button type="button" id="btn_add" class="btn btn-default" data-dismiss="modal">Add Fruit</button>
			</form>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <!--End Modal add information-->
<!--start Modal update-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="update_fruit"></h4>
        </div>
        <div class="modal-body">
           <form>
           		<div class="form-group">
           			<label>Qunatity</label>
           			<input type="number" id="update_quantity" class="form-control" style="color: #00539C">           			
           		</div>
           		<div class="form-group">
           			<label>Price</label>
           			<input type="number" id="update_price" class="form-control" style="color: #00539C">           			
           		</div>
           		<button id="update_btn" type="button" class="btn btn-default" data-dismiss="modal">Update</button>
           </form>           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <!--End Modal update-->
  
	<div class="container-fluid fruit_information" style="">
		<div class="row">
			<div class="col-lg-4 col-sm-3"></div>
			<div class="col-lg-6 col-sm-6">
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2" style="background-color: #4CAF50;color: white;font-size: 20px;padding: 10px 20px;
				margin: 8px 0;border: none;cursor: pointer;width: 30%;">Add</button>

				<table  id="tableone">
					<thead>
						<tr style="color: white;">
							<th style="padding-left: 1px;">Delete</th>
							<th>Fruit</th>
							<th style="padding-left: 1px;">Quantity</th>
							<th style="padding-left: 1px;">Price/Unit</th>
							<th style="padding-right: 1px;">Update</th>
						</tr>
					</thead>					
				</table>
			</div>
			<div class="col-xs-12 col-sm-3"></div>
		</div>
	</div>
	<!-- <div class="container add_fruit_information">
		<div class="row">
			<div class="col-xs-12 col-sm-4"></div>		
			<div class="col-xs-12 col-sm-4">
				
			</div>		
			<div class="col-xs-12 col-sm-4"></div>		
		</div>
	</div> -->
	<div id="#result">
		
	</div>
	<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="updateprofile" style="color: #800000">Update Store Name</h4>
        </div>
        <div class="modal-body">
           <form action="updatestorenameanddescrip.php" method="POST">
           		<div class="form-group">
           			<label>Enter Pan Number</label>
           			<input type="text" id="sellerpannumber" name="sellerpannumber" class="form-control" style="color: #00539C" required onkeyup="validation('sellerpannumber')">
                     <p id="error_sellerpannumber" style="color: red">Invalid PAN Number</p>           			
           		</div>
           		<div class="form-group">
           			<label>Enter Store Name</label>
           			<input type="text" id="sellerstorename" name="sellerstorename" class="form-control" style="color: #00539C" required onkeyup="validation('sellerstorename')">
                     <p id="error_sellerstorename" style="color: red">Store Name required</p>           			
           		</div>
           		<div class="form-group">
           			<label>Enter Store Description</label>
           			<input type="text" id="sellerstoredescription" name="sellerstoredescription" class="form-control" style="color: #00539C" onkeyup="validation('sellerstoredescription')">
                     <p id="error_sellerstoredescription" style="color: red">Store Description Required</p>           			
           		</div>
           		<div class="form-group">
           			<label>Enter Store Location</label>
           			<input type="text" id="sellerstorelocation" name="sellerstorelocation" class="form-control" style="color: #00539C"  onkeyup="validation('sellerstorelocation')">
                     <p id="error_sellerstorelocation" style="color: red">Location Required</p>		
           		</div>
           		<button  type="submit" id="update_storename_submit"   name="update_storename_submit" class="btn btn-default" onclick="form_send()" disabled="true" >Update Store</button>
           	<!-- 	<button type="submit"  name = "retailersubmit" class="btn btn-default" id="bt1" class="btn btn-default" onclick="form_send()" disabled="true">Register</button> -->
           </form>           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>
