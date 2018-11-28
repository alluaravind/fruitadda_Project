<?php
session_start();
	if (!isset($_SESSION['useremail'])) {
		header('location:retailerregistration.php');
	}
	//echo $_SESSION['useremail'];
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
  <script type="text/javascript" src="combination/combination.js"></script>
  <script type="text/javascript" src="jsonformat/formater.js"></script>
  	<style type="text/css">
  		.result_container>.row>div:nth-child(2)>.result>ul>li
  		{
  			margin-top: 2%;
  		}
  		.result_container>.row>div:nth-child(2)>.result>ul>li>span
  		{
  			margin-left: 5%;
  		}
  		.result_container>.row>div:nth-child(2)>.result>ul>li>button
  		{
  			float: right;
  			background-color: #5c85d6;
  		}
  		#sellerdetails{
  			color: red;
  		}
  		body{
  			background-image: url("images/fruitbackground.jpg");
  		}
  		#shop:hover{
  			background-color: #50ABFC;
  			color: white;
  		}
  		
  		#tableshop{
  			padding-top: 2px;
  			background-color: green;
		    color: white;
		    font-size: 20px;
		    padding: 5px 10px;
		    margin: -2px 0;
		    border: none;
		    cursor: pointer;
		    width: 100%;
		    border-radius: 12px;
  		}
  		#shop{
  			padding-top: 2px;
  			background-color: #4DF942;
		    color: white;
		    font-size: 20px;
		    padding: 5px 10px;
		    margin: -2px 0;
		    border: none;
		    cursor: pointer;
		    width: 50%;
		    border-radius: 12px;

  		}
  		#bt1{

    background-color: #4CAF50;
    color: white;
    font-size: 20px;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;

    }
  		#shopname{
  			padding-right: 5px;
  			background-image: url("images/jsontojqueryimage1.jpg");
		    color: black;
		    margin: 20px;
		    padding: 20px;border-radius: 12px;
  		}
  		#back2Top {
    width: 40px;
    line-height: 40px;
    overflow: hidden;
    z-index: 999;
    display: none;
    cursor: pointer;
    -moz-transform: rotate(270deg);
    -webkit-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg);
    position: fixed;
    bottom: 50px;
    right: 0;
    background-color: #DDD;
    color: #555;
    text-align: center;
    font-size: 30px;
    text-decoration: none;
}
#back2Top:hover {
    background-color: #DDF;
    color: #000;
}
  		/*
* Style tweaks
* --------------------------------------------------
*/
html,
body {
    overflow-x: hidden; /* Prevent scroll on narrow devices */
}
body {
    padding-top: 100px;
}
footer {
    padding: 30px 0;
}

/*
 * Custom styles
 */
.navbar-brand {
    font-size: 24px;
}

.navbar-container {
    padding: 20px 0 20px 0;
}

.navbar.navbar-fixed-top.fixed-theme {
    background-color: #222;
    border-color: #080808;
    box-shadow: 0 0 5px rgba(0,0,0,.8);
}

.navbar-brand.fixed-theme {
    font-size: 18px;
}

.navbar-container.fixed-theme {
    padding: 0;
}

.navbar-brand.fixed-theme,
.navbar-container.fixed-theme,
.navbar.navbar-fixed-top.fixed-theme,
.navbar-brand,
.navbar-container{
    transition: 0.8s;
    -webkit-transition:  0.8s;
}
    /*footer {
        position: relative;
        height: 100px;
        width: 100%;
        background-color: #333333;
    }

    p.copyright {
        position: absolute;
        width: 100%;
        color: #fff;
        line-height: 40px;
        font-size: 0.7em;
        text-align: center;
        bottom:0;
    }*/

  	</style>
<script type="text/javascript">
	/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
</script>
<script type="text/javascript">
  		$(document).ready(function(){

/**
 * This object controls the nav bar. Implement the add and remove
 * action over the elements of the nav bar that we want to change.
 *
 * @type {{flagAdd: boolean, elements: string[], add: Function, remove: Function}}
 */
	var myNavBar = {

	    flagAdd: true,

	    elements: [],

	    init: function (elements) {
	        this.elements = elements;
	    },

	    add : function() {
	        if(this.flagAdd) {
	            for(var i=0; i < this.elements.length; i++) {
	                document.getElementById(this.elements[i]).className += " fixed-theme";
	            }
	            this.flagAdd = false;
	        }
	    },

	    remove: function() {
	        for(var i=0; i < this.elements.length; i++) {
	            document.getElementById(this.elements[i]).className =
	                    document.getElementById(this.elements[i]).className.replace( /(?:^|\s)fixed-theme(?!\S)/g , '' );
	        }
	        this.flagAdd = true;
	    }

	};

	/**
	 * Init the object. Pass the object the array of elements
	 * that we want to change when the scroll goes down
	 */
	myNavBar.init(  [
	    "header",
	    "header-container",
	    "brand"
	]);

	/**
	 * Function that manage the direction
	 * of the scroll
	 */
	function offSetManager(){

	    var yOffset = 0;
	    var currYOffSet = window.pageYOffset;

	    if(yOffset < currYOffSet) {
	        myNavBar.add();
	    }
	    else if(currYOffSet == yOffset){
	        myNavBar.remove();
	    }

	}

	/**
	 * bind to the document scroll detection
	 */
	window.onscroll = function(e) {
	    offSetManager();
	}

	/**
	 * We have to do a first detectation of offset because the page
	 * could be load with scroll down set.
	 */
	offSetManager();
	});
</script>
  	<script type="text/javascript" src="javascript/shopperdashboardjavascript.js">
  	   
  	</script>
</head>
<body>

<!-- <nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ol class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ol class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ol>
      </li>
      
    </ol>
    <ol class="nav navbar-nav navbar-right">
      <li>
         <a class="nav-link waves-effect waves-light" id="user_emailid" style="color: white;font-size: 20px;"><?php echo $_SESSION['useremail']; ?> <i class="fa fa-envelope" style="color: white">&nbsp;&nbsp;&nbsp;</i></a>

      </li>
      <li class="nav-item">
                <a class="nav-link waves-effect waves-light" style="color: white;font-size: 20px;">Wallet  &nbsp;0$&nbsp;&nbsp;<img src="images/wallet.png" width="25px" height="20px">&nbsp;&nbsp;</a>
      </li>
      <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="retailerregistration.php?logout='1'" style="color: white;font-size: 20px;">Logout <i class="fa fa-eye"></i></a>
      </li>
    </ol>
  </div>
</nav> -->
 <nav id="header" class="navbar navbar-fixed-top">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="brand" class="navbar-brand" href="shopperdashboard.php" style="color: white">FRUIT ADDA</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ol class="nav navbar-nav">
                        <li class="active"><a href="shopperdashboard.php" style="color: white">Home</a></li>
                        <!-- <li><a href="store.php">About</a></li>
                        <li><a href="#contact">Contact</a></li> -->
                    </ol>
                    <ol class="nav navbar-nav navbar-right">
      <li>
         <a class="nav-link waves-effect waves-light" id="user_emailid" style="color: white;font-size: 20px;"><?php echo $_SESSION['useremail']; ?> <i class="fa fa-envelope" style="color: white">&nbsp;&nbsp;&nbsp;</i></a>

      </li>
      <li class="nav-item">
                <a class="nav-link waves-effect waves-light" style="color: white;font-size: 20px;">Wallet&nbsp;$<img src="images/wallet.png" width="25px" height="20px"></a>
                
      </li>
      <li class="nav-item">
        <h5 id="walletid" style="color: white;font-size: 30px;"></h5>
      </li>
      <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="retailerregistration.php?logout='1'" style="color: white;font-size: 20px;">Logout <i class="fa fa-eye"></i></a>
      </li>
    </ol>
   </div><!-- /.nav-collapse -->
  </div><!-- /.container -->
</nav>
  
	<!--  <h1 id="user_emailid">   <?php echo $_SESSION['useremail']; ?>	    </h1> <br> -->
	<br><br><br><br>

	<!-- <a href="retailerregistration.php?logout='1'">logout</a> -->
	<div class="container result_container">
		<div class="row">
			<div class="col-xs-12 col-sm-3"></div>
			<div class="col-xs-12 col-sm-6">
				<button type="button" id="bt1" class="btn btn-default" onclick="sellersInformation()">Show Retailers</button>
				<div class="result" id="result">
						
				</div>
			</div>
			<div class="col-xs-12 col-sm-3"></div>
		</div>
	</div>
	<a id="back2Top" title="Back to top" href="#">&#10148;</a>
	<!-- <footer>
    <p class="copyright" style="font-size: 20px;">Copyright© 2018</p>
</footer> -->
</body>
</html>