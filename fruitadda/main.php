<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://mdbootstrap.com/previews/docs/latest/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://mdbootstrap.com/previews/docs/latest/css/mdb.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  
function combination(forarray,forbody){
    for(var i=0;i<forarray[0];i++){
        for(var j=0;j<forarray[1];j++){
            for(var k=0;k<forarray[2];k++){
                    if( ((i*forbody[0]) + (j*forbody[1]) + (k*forbody[2])) == 100 ){
                        document.writeln(i); document.write("  ");
                        document.write(forbody[0]);
                        document.write("<br>");
                        document.writeln(j); document.write("  ");
                        document.write(forbody[1]);
                        document.write("<br>");
                        document.writeln(k); document.write("  ");
                        document.write(forbody[2]);
                        document.write("<br>");
                        //document.writeln(j,forbody[1]); document.write("<br>");
                        //document.writeln(k,forbody[2]); document.write("<br>");
                    
                    }
                     
                     
            }       
        }
    }

}





  
    </script>
    
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark default-color-dark fixed-top">
	<img src="fruiticon.jpg" width="40px" height="30px">
    <a class="navbar-brand" href="jsontojquery.php">FRUITS ADDA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        
         <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
                <div class="nav-link waves-effect waves-light" id="user_emailid"><?php echo $_SESSION['email']; ?> <i class="fa fa-envelope">&nbsp;&nbsp;&nbsp;</i></div>

            </li>
            <li class="nav-item">
                <div class="nav-link waves-effect waves-light">Wallet 0$&nbsp;<img src="wallet.png" width="25px" height="20px">&nbsp;&nbsp;</div>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="retailerregistration.php?logout='1'">Logout <i class="fa fa-eye"></i></a>
            </li>
            
            
        </ul>
    </div>
</nav>
</header>
</body>