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
			$.post("get_fruit_data.php",
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
			$.post("retailer_get_wallet_money.php",{"email":email},
          			function(data){
              			$("#walletid").text(data);
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
				$.post("add_fruit_data.php",
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
			    row.append($("<td><img id='delete' name='"+email+":"+fruit.fname+"' src='images/deleting.png' width='40' height='40'></td>"));
			    row.append($("<td>" + fruit.fname + "</td>"));
			    row.append($("<td>" + fruit.quantity + "</td>"));
			    row.append($("<td>" + fruit.price + "</td>"));
			    row.append($("<td><img data-toggle='modal' data-target='#myModal' id='update' name='"+index+"' src='images/updating.gif' width='80' height='50'></td>"));

		}       
		function deleteRow(email,fruit_name)
		{
			
			$("tbody").remove();
			$.post("delete_fruit_data.php",
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