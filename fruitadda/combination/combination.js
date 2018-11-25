
function combination_finder(fruits)
{
     var s=0;
     var p =0;
     var arr1 = [];
    var quantityarray = [];
    var pricearray = [];
     var fruitarray=[];
      var fruit=[];
      var quantity = [];
      var price = [];
      var finalobj=[];
      
      // var fruits=[{"fname":"orange","quantity":"25","price":"1"},
      //       {"fname":"pappaya","quantity":"25","price":"1"},
      //             {"fname":"fruita","quantity":"50","price":"1"},
      //             {"fname":"banana","quantity":"2","price":"10"},
      //             {"fname":"sapota","quantity":"50","price":"1"}];
      for(var i=0;i<fruits.length;i++){
        fruit[i] = (fruits[i].fname);
      price[i] = parseInt(fruits[i].price);
      quantity[i] = parseInt(fruits[i].quantity);
      }
      for(var i=0;i<price.length;i++){
        for(var j=i;j<price.length;j++){
            for(var k=j;k<price.length;k++){
                if(price[i] < 100 && price[j] < 100 && price[k] < 100 && i!=j && j!=k && k!=i ){
                  arr1[p] = [[quantity[i],price[i],fruit[i]],
                         [quantity[j],price[j],fruit[j]],
                               [quantity[k],price[k],fruit[k]]];
                 
                  p++;
                  }
              }
          }
      }
      for(var i=0;i<arr1.length;i++){
        for(var j=0;j<3;j++){
              quantityarray[j]=[arr1[i][j][0]];
              pricearray[j]=[arr1[i][j][1]];  
              fruitarray[j]=[arr1[i][j][2]];
          }

          //document.write(quantityarray);
          //document.write("<br>");
          //document.write(pricearray);
          //document.write("<br>");
        combination(quantityarray,pricearray,fruitarray,finalobj,s);
      }
      //arr1=[];
      //fruits="";
    return finalobj;  
}
function combination(forarray,forbody,fruitarray1,finalobj,s){
   var temp1=[];
    var temp2=[];
    var temp3=[];

  for(var i=1;i<=forarray[0];i++){
      for(var j=1;j<=forarray[1];j++){
          for(var k=1;k<=forarray[2];k++){
                if( ((i*forbody[0]) + (j*forbody[1]) + (k*forbody[2])) == 100 && ((i+j+k)==100) ){
                temp1=[fruitarray1[0][0],i,forbody[0][0]];
                temp2=[fruitarray1[1][0],j,forbody[1][0]];
                temp3=[fruitarray1[2][0],k,forbody[2][0]];
                finalobj[s++]=[temp1,temp2,temp3];
              
                }
                 
          }   
           
        }
        
    }
    

}



