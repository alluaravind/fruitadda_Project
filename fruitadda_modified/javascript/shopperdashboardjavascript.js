	var buyer_email;
		var getSellersInformationFromServer="";

    var unorderedlist="";
		var ULtag="";
		var fruittable="";
		var thead="";
		var colrow="";
		var sellers_fruits_from_server="";
    var div_buyer_combination="";
    var ul_buyer_comination="";
    var result_from_combiner_finder="";
    var seller_index="";
  	$(document).ready(function(){
  			buyer_email=$("#user_emailid").text().trim();
			sellersInformation();
		    shopFromStore();
        $.post("get_wallet_money.php",{"email":buyer_email},
          function(data){
              $("#walletid").text(data);
          }
          );
        $(document).on("click","#buy",function(){
          //console.log($(this).attr("name"));
          purchase_combination($(this).attr("name"));
          $.post("get_wallet_money.php",{"email":buyer_email},
          function(data){
              $("#walletid").text(data);
          }
          );
        });
        
  		});
  		function sellersInformation()
  		{
  			$("table").remove();
  			$("ul").remove();
  			getInformationFromDbOfSeller();
  		}
  		function getInformationFromDbOfSeller(){
  			$.post("buyerGet_sellers_information.php",
				    {"email":""},
				    function(data,status){
				    	console.log(data);
				    	getSellersInformationFromServer=JSON.parse(data);
				    	drawList(getSellersInformationFromServer);
				    }
		    );
  		}
		function shopFromStore(){
			$(document).on("click","#shop",function(){
		    	//console.log($(this).attr("name"));
          seller_index=$(this).attr("name");
           //$("ul").remove();
		    	 $("ul").remove();
		    	 $.post("get_fruit_data.php",
				    {"email":getSellersInformationFromServer[$(this).attr("name")].semail},
				    function(data,status){
				    	console.log(data);
              sellers_fruits_from_server="";
				    	sellers_fruits_from_server=JSON.parse(data);
				    	drawTable(sellers_fruits_from_server);
              console.log(JSON.stringify(combination_finder(sellers_fruits_from_server)));
              result_from_combiner_finder=combination_finder(sellers_fruits_from_server)
              drawAllCombinations(result_from_combiner_finder);
				    }
		    	);

		    });
		}
  		function drawList(sellers)
  		{
  			ULtag = $("<ul class='list-group'/>");
  			$("#result").append(ULtag);
  			for(var i=0;i<sellers.length;i++)
  			{
  				drawListItem(sellers[i],i);
  			}
  		}
  		function drawListItem(seller,index)
  		{
  			ULtag.append($("<li class='list-group-item' id='shopname'><h4 id='sellerdetails'>Seller Details</h4><h5>"+seller.sname+"</h5><h5>"+seller.semail+"</h5><h5 >"+seller.shopname+"</h5><button class='btn btn-default' type='button' id='shop' name='"+index+"'>Shop</button><br></li>"));
  			
  		}
  		function drawTable(fruits){
			//console.log(fruits.length);
			// fruittable= $("<table class='table table-striped'/>");
			 fruittable= $("<ul class='list-group'/>");
			// thead=$("<thead/>");
			// colrow=$("<tr>");
			// thead.append(colrow);
			// colrow.append("<td>FruitName</td>");
			// colrow.append("<td>Qunatity</td>");
			// colrow.append("<td>Price</td>");
			// fruittable.append(thead);
			$("#result").append(fruittable);
			for (var i = 0; i < fruits.length; i++) {
        			drawRow(fruits[i],i);
    		}
		}
		function drawRow(fruit,index)
		{
			    //console.log(fruit.fname);
				// var row = $("<tr />");
				// var tbody=$("<tbody/>");
				// fruittable.append(tbody);
			 //    tbody.append(row); 
			 //    //row.append($("<td><img id='delete' name='"+email+":"+fruit.fname+"' src='delete.png' width='10' height='10'></td>"));
			 //    row.append($("<td>" + fruit.fname + "</td>"));
			 //    row.append($("<td>" + fruit.quantity + "</td>"));
			 //    row.append($("<td>" + fruit.price + "</td>"));
			    //row.append($("<td><img data-toggle='modal' data-target='#myModal' id='update' name='"+index+"' src='update.png' width='20' height='20'></td>"));
			    fruittable.append($("<li class='list-group-item' id='shopname'><h4 id='sellerdetails'>Fruit Name</h4><h5>"+fruit.fname+"</h5><h4 id='sellerdetails'>Qunatity</h4><h5>"+fruit.quantity+"</h5><h4 id='sellerdetails'>Price/Unit</h4><h5>"+fruit.price+"</h5><br></li>"));
		}    
      
    function drawAllCombinations(list_of_combinations)
    {

      div_buyer_combination=$("<div/>");
      ul_buyer_comination=$("<ul class='list-group'/>");
      div_buyer_combination.append(ul_buyer_comination);
      $("#result").append(div_buyer_combination);
      for(var item=0;item<list_of_combinations.length;item++)
      {
        //console.log()
        drawCombination(JSON.stringify(list_of_combinations[item]),item);
      } 
    }     
    function drawCombination(single_combination,item_index)
    {
       ul_buyer_comination.append($("<li class='list-group-item'>" + single_combination +"<br><button name='"+item_index+"'type='button' style='float:right' id='buy' class='btn btn-default'>buy</button><br><br></li>"));
    }
    function purchase_combination(index)
    {
      //console.log(JSON.stringify(result_from_combiner_finder[index]));
      //console.log(arrayToJson(result_from_combiner_finder[index]));
      $.ajax({
         type: "POST",
         url: "purchase.php",
         async: true,
         data: arrayToJson(result_from_combiner_finder[index]),
         success: function(data){
            console.log(data);
            
            return true;
         },
         complete: function() {},
         error: function(xhr, textStatus, errorThrown) {
           console.log('ajax loading error...');
           return false;
         }
      });
    }