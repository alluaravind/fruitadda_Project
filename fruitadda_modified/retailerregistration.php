<?php
  session_start();
  if (isset($_SESSION['email'])) {
    
    header('location:sellerdashboard.php');
    
  }
  if(isset($_GET['logout'])){
    unset($_SESSION['email']);
    session_destroy();
    header('location:retailerregistration.php');
  }
  if (isset($_SESSION['useremail'])) {
    
    header('location:shopperdashboard.php');
    
  }
  if(isset($_GET['logout'])){
    unset($_SESSION['useremail']);
    session_destroy();
    header('location:retailerregistration.php');
  }
  
?>


<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="css/registrationstyle.css">
<!-- <link rel="stylesheet" type="text/css" href="jj.css"> -->
  <script  src="javascript/registration.js"></script>
  <style type="text/css">
     
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }

  </style>

</head>
<body id="myPage" >
<nav class="navbar navbar-default " style="background-color: #f4511e">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="retailerregistration.php" style="color: white;font-size: 40px;">FRUITS ADDA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" style="color: white">ABOUT</a></li>
        
        <li><a href="#portfolio" style="color: white">GALLERY</a></li>
        
        <li><a href="#contact" style="color: white">CONTACT</a></li>

        <li><a href="#retailerregistration" style="color: white" class="btn " data-toggle="modal" data-target="#myModal1">RETAILER SIGNUP/ LOGIN
  </a></li>
        <li><a href="#shopperregistration" style="color: white" class="btn " data-toggle="modal" data-target="#myModal2">SHOPPER SIGNUP/ LOGIN
  </a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-6">
      <h2>About Fruit Adda</h2><br>
      <h4>Fruit is a seed-bearing structure that develops from the ovary of a flowering plant, whereas vegetables are all other plant parts, such as roots, leaves and stems.Fruits and vegetables contain many vitamins and minerals that are good for your health. These include vitamins A (beta-carotene), C and E, magnesium, zinc, phosphorous and folic acid. Folic acid may reduce blood levels of homocysteine, a substance that may be a risk factor for coronary heart disease.</h4><br>
      <p>Fruit is the sweet, fleshy, edible part of a plant. It generally contains seeds. Fruits are usually eaten raw, although some varieties can be cooked. They come in a wide variety of colours, shapes and flavours. Common types of fruits that are readily available include:
      Apples and pears
      Citrus – oranges, grapefruits, mandarins and limes
      Stone fruit – nectarines, apricots, peaches and plums
      Tropical and exotic – bananas and mangoes
      Berries – strawberries, raspberries, blueberries, kiwifruit and passionfruit
      Melons – watermelons, rockmelons and honeydew melons
      Tomatoes and avocados.
</p>
      
    </div>
   <div class="col-sm-6">
      <!--<span class="glyphicon glyphicon-signal logo"></span>-->
     
      <img src="fruitbasket1.jpg" alt="Smiley face" align="right" width="600" height="500"  border-radius: 50%;>
    </div>
  </div>
</div><br>
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Gallery</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/port1.jpg" alt="Paris" width="400" height="300">
        
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/port2.jpg" alt="New York" width="400" height="300">
        
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/port3.jpeg" alt="San Francisco" width="400" height="300">
        
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="fruitbasket1.jpg" width="1500" height="800">
        <h4>"This website is the best. I am so happy with the result!"</h4>
      </div>
      <div class="item">
        <img src="fruitbasket3.jpg" width="1500" height="800">
        <h4>"One word... WOW!!"<br></h4>
      </div>
      <div class="item">
        <img src="fruitbasket2.jpg" width="1500" height="800">
        <h4>"Could I... BE any more happy?"<br></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> <br><br>
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <center>
      <div class="col-sm-12">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Vijayawada, AP</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 7032390280</p>
      <p><span class="glyphicon glyphicon-envelope"></span> alluaravind1313@gmail.com</p>
    </div>
    </center>
    
  </div>
</div>
<div class="container">
  <div class="row">
  
  <!-- Modal -->
  <div class="modal fade login-register-form" id="myModal1" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                                        <strong><h5 style="color: #006E6D">Retailer SignUp/Login</h5></strong>
                                        <ul class="nav nav-tabs">
                                             <li class="active"><a data-toggle="tab" href="#registration-form">Register <span class="glyphicon glyphicon-pencil"></span></a></li>
                                            <li ><a data-toggle="tab" href="#login-form"> Login <span class="glyphicon glyphicon-user"></span></a></li>
                                           
                                        </ul>
        </div>
        <div class="modal-body">
          <div class="tab-content">
              <div id="registration-form" class="tab-pane fade in active">
                        <form action="retailerregistrationserver.php" method="POST">

                              <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right"><b>Email Address<sup style="color: red">*</sup></b></label>
                                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" style="color: #00539C" required onkeyup="validation('email')">
                                <p id="error_email" style="color: red">Invalid Email</p>
                              </div>
                              <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right" ><b>First Name<sup style="color: red">*</sup> </b></label>
                                <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname" style="color: #00539C" required onkeyup="validation('firstname')">
                                <p id="error_firstname" style="color: red">First Name is required</p>
                              </div>
                              <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right"><b>Last Name<sup style="color: red">*</sup></b></label>
                                <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname" style="color: #00539C" required onkeyup="validation('lastname')">
                                  <p id="error_lastname" style="color: red">Last Name is required</p>
                              </div>
                              <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right"><b>PAN Number<sup style="color: red">*</sup></b></label>
                                <input type="text" class="form-control" id="pannumber" placeholder="Enter PAN Number" name="pannumber" style="color: #00539C" required onkeyup="validation('pannumber')">
                                <p id="error_pannumber" style="color: red">Invalid PAN Number</p>
                              </div>
                              <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right"><b>Phone Number<sup style="color: red">*</sup></b></label>
                                <input type="text" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="phonenumber" style="color: #00539C" required onkeyup="validation('phonenumber')">
                                <p id="error_phonenumber" style="color: red">Invalid Phone Number</p>
                              </div>
                              <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right"><b>Address<sup style="color: red">*</sup></b></label>
                                <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" style="color: #00539C" required onkeyup="validation('address')">
                                <p id="error_address" style="color: red">Address required</p>
                              </div>
                              
                              <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right"><b>Password<sup style="color: red">*</sup></b></label>
                                <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" style="color: #00539C" required onkeyup="validation('password')">
                                <p id="error_password" style="color: red">enter valid password</p>
                                <h6 style="color: #00539C">(Password should contain Digits,Alphabet and special character)</h6>
                              </div>
                              <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right" ><b>Confirm Password<sup style="color: red">*</sup></b></label>
                                <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirmpassword" style="color: #00539C"required   onkeyup="validation('confirm_password')" onfocus="cheking()">
                                <p id="error_confirmpassword" style="color: red">confirm password</p>  
                              </div>
                              <div class="input-group">
                                    <label class="w3-container w3-center w3-animate-right"><b>Security Question<sup style="color: red">*</sup></b></label>
                                    <select style="width:70%;" name="wheeler" required="" placeholder="Select Question" id="securityquestion">
                                      <option></option>
                                      <option>Lucky Number</option>
                                      <option>Favourite Actor</option>
                                      <option>Favourite Place</option>
                                      <option>Favourite Animal</option>
                                      
                                    </select>
                              </div>
                              <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right" ><b>Security Answer<sup style="color: red">*</sup></b></label>
                                <input type="text" class="form-control" id="securityanswer" placeholder="Enter Answer" name="securityanswer" style="color: #00539C"required   onkeyup="validation('securityanswer')" onfocus="cheking()">
                                <p id="error_securityanswer" style="color: red">Answer is required</p>  
                              </div>
                              <div class="checkbox">
                                <label><input type="checkbox"> Remember me</label>
                              </div>
                              <button type="submit"  name = "retailersubmit" class="btn btn-default" id="bt1" class="btn btn-default" onclick="form_send()" disabled="true">Register</button>
                        </form>   
              </div>
              <div id="login-form" class="tab-pane fade">      
                <h6 id="wrong"></h6>
                 <form action="retailerregistrationserver.php" method="POST">
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>Email Address<sup style="color: red">*</sup></b></label>
                      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" style="color: #00539C" required>
                    </div>
                    <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right"><b>Password<sup style="color: red">*</sup></b></label>
                                <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" style="color: #00539C" required>
                    </div>
                    <button type="submit" name="retailerlogin" class="btn btn-default" id="loginbt1">Login</button>
                 </form>
              </div>
          </div>
        </div>
       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  <div class="modal fade login-register-form" id="myModal2" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                                        <strong><h5 style="color: #006E6D">Shopper SignUp/Login</h5></strong>
                                        <ul class="nav nav-tabs">
                                             <li class="active"><a data-toggle="tab" href="#userregistration-form">Register <span class="glyphicon glyphicon-pencil"></span></a></li>
                                            <li ><a data-toggle="tab" href="#userlogin-form"> Login <span class="glyphicon glyphicon-user"></span></a></li>
                                           
                                        </ul>
        </div>
        <div class="modal-body">
          <div class="tab-content">
              <div id="userregistration-form" class="tab-pane fade in active">
                        <form action="shopperregistrationserver.php" method="POST">

                              <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right"><b>Email ID<sup style="color: red">*</sup></b></label>
                                <input type="email" class="form-control" id="useremail" placeholder="Enter email" name="useremail" style="color: #00539C" required onkeyup="validation1('useremail')">
                                <p id="error_useremail" style="color: red">Invalid Email</p>
                              </div>
                              <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right" ><b>First Name<sup style="color: red">*</sup> </b></label>
                                <input type="text" class="form-control" id="userfirstname" placeholder="Enter First Name" name="userfirstname" style="color: #00539C" required onkeyup="validation1('userfirstname')">
                                <p id="error_userfirstname" style="color: red">First Name is required</p>
                              </div>
                              <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right"><b>Last Name<sup style="color: red">*</sup></b></label>
                                <input type="text" class="form-control" id="userlastname" placeholder="Enter Last Name" name="userlastname" style="color: #00539C" required
                                 onkeyup="validation1('userlastname')">
                                  <p id="error_userlastname" style="color: red">Last Name is required</p>
                              </div>
                              <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right"><b>PAN Number<sup style="color: red">*</sup></b></label>
                                <input type="text" class="form-control" id="userpannumber" placeholder="Enter PAN Number" name="userpannumber" style="color: #00539C" required 
                                onkeyup="validation1('userpannumber')">
                                <p id="error_userpannumber" style="color: red">Invalid PAN Number</p>
                              </div>
                              <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right"><b>Phone Number<sup style="color: red">*</sup></b></label>
                                <input type="text" class="form-control" id="userphonenumber" placeholder="Enter Phone Number" name="userphonenumber" style="color: #00539C" required onkeyup="validation1('userphonenumber')">
                                <p id="error_userphonenumber" style="color: red">Invalid Phone Number</p>
                              </div>
                              <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right"><b>Address<sup style="color: red">*</sup></b></label>
                                <input type="text" class="form-control" id="useraddress" placeholder="Enter Address" name="useraddress" style="color: #00539C" required onkeyup="validation1('useraddress')">
                                <p id="error_useraddress" style="color: red">Address required</p>
                              </div>
                              
                              <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right"><b>Password<sup style="color: red">*</sup></b></label>
                                <input type="password" class="form-control" id="userpassword" placeholder="Enter Password" name="userpassword" style="color: #00539C" 
                                required onkeyup="validation1('userpassword')">
                                <p id="error_userpassword" style="color: red">Enter valid password</p>
                                <h6 style="color: #00539C">(Password should contain Digits,Alphabet and special character)</h6>
                              </div>
                              <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right" ><b>Confirm Password<sup style="color: red">*</sup></b></label>
                                <input type="password" class="form-control" id="userconfirm_password" placeholder="Confirm Password" name="userconfirm_password" style="color: #00539C"required   onkeyup="validation1('userconfirm_password')" onfocus="cheking()">
                                <p id="error_userconfirm_password" style="color: red">Confirm password</p>  
                              </div>
                              <div class="input-group">
                                    <label class="w3-container w3-center w3-animate-right"><b>Security Question<sup style="color: red">*</sup></b></label>
                                    <select style="width:70%;" name="wheeler" required="" placeholder="Select Question" id="usersecurityquestion">
                                      <option></option>
                                      <option>Lucky Number</option>
                                      <option>Favourite Actor</option>
                                      <option>Favourite Place</option>
                                      <option>Favourite Animal</option>
                                      
                                    </select>
                              </div>
                              <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right" ><b>Security Answer<sup style="color: red">*</sup></b></label>
                                <input type="text" class="form-control" id="usersecurityanswer" placeholder="Enter Answer" name="usersecurityanswer" style="color: #00539C"required  
                                 onkeyup="validation1('usersecurityanswer')" onfocus="cheking1()">
                                <p id="error_usersecurityanswer" style="color: red">Answer is required</p>

                              </div>

                              <div class="checkbox">
                                <label><input type="checkbox"> Remember me</label>
                              </div>
                              <button type="submit" name="shoppersubmit" class="btn btn-default" id="bt11" class="btn btn-default" onclick="form_send1()" disabled="true">Register</button>
                              
                        </form>   
              </div>
              <div id="userlogin-form" class="tab-pane fade">      
                 <form action="shopperregistrationserver.php" method="POST">
                    <div class="form-group">
                      <label class="w3-container w3-center w3-animate-right"><b>Email Address<sup style="color: red">*</sup></b></label>
                      <input type="email" class="form-control" id="useremail" placeholder="Enter Email" name="useremail" style="color: #00539C" required>
                    </div>
                    <div class="form-group">
                                <label class="w3-container w3-center w3-animate-right"><b>Password<sup style="color: red">*</sup></b></label>
                                <input type="password" class="form-control" id="userpassword" placeholder="Enter Password" name="userpassword" style="color: #00539C" required>
                    </div>
                    <button type="submit" name="shopperlogin" class="btn btn-default" id="loginbt1">Login</button>

                 </form>
              </div>
          </div>
        </div>
       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Fruit Adda Made By <a href="https://www.w3schools.com" title="Visit w3schools">Allu Aravind</a></p>
</footer><br><br> 
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
  
  // Slide in elements on scroll
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</div>
</body>
