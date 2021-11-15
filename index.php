<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    
</head>
<body>
<!-- Background & animion & navbar & title -->
  <div class="menu-list" id="mob">
		<!-- Logo and navigation menu -->
		<div class="apex" >
			<h1 id="mobLogo">Apex </h1>
			<div id="menus">
				<a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                </svg>Home</a>
                <a href="login.php" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>Login</a>
                <a href="register.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>Register</a>
                <a href="#about"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-info-lg" viewBox="0 0 16 16">
                <path d="m10.277 5.433-4.031.505-.145.67.794.145c.516.123.619.309.505.824L6.101 13.68c-.34 1.578.186 2.32 1.423 2.32.959 0 2.072-.443 2.577-1.052l.155-.732c-.35.31-.866.434-1.206.434-.485 0-.66-.34-.536-.939l1.763-8.278zm.122-3.673a1.76 1.76 0 1 1-3.52 0 1.76 1.76 0 0 1 3.52 0z"/>
                </svg>About</a>
                <a href="#team"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-lightbulb-fill" viewBox="0 0 16 16">
                <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z"/>
                </svg> Team</a>
                <a href="#product"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
              </svg>Product</a>
                <a href="#contact"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                </svg>Contact Us</a>
			</div>
			<!-- Bar icon for navigation -->
            <div >
			<a href="javascript:void(0);" class="icon" onclick="apex()">
            <i onclick="myFunction(this)" class="fa fa-bars " ></i></a>
            </div>
		</div>
	</div>
<!-- Background animtion-->
    <div class="background" id="background">
       <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
      <div class="cube"></div>
    </div>
<!-- header -->

   <header>
<!-- navbar -->
<!-- logo -->
<!-- Desktop navigation -->
    <div id="desktop">
        <h1 id="Logo">Apex</h1>
     <nav>
        <ul>
           <li><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#product">Products</a></li>
            <li><a href="#contact">Contacts</a></li>
            <button class="btn btn-success ml-3" onclick="login()">Login</button>
            <button class="btn btn-success" onclick="register()">Register</button>
           

        </ul>
     </nav>
    </div>
<!-- title & content -->
      <section class="header-content" id="content">
         <h1 class="align-center">Welcome To Apex </h1>
        <p> Welcome to our family. We are a passionated group of people,<br>
           making high quality products designed to make your life easier.</p>
        <button>Know more</button>
        <button>Meet us</button>
      </section>
  </header>
 
  <!-- ======= About Us Section ======= -->
  <section id="about" class="bg-light">
      <div class="container " >

        <div class="d-flex justify-content-center text-primary">
          <h2><u style="text-decoration-color:red">About Us</u></h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Our mission is to enhancing the business growth of our customers with creative Design and Development to deliver market-defining high-quality solutions that create value and reliable competitive advantage for our clients around the world. 
               For us customer satisfaction is given top place. We are very friendly in our dealings to the customers and it helps us retain existing clients and expand customer circle. We always try to improve the quality of our products by exploring innovative ideas. 
   
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Cost Effective</li>
              <li><i class="ri-check-double-line"></i>24*7 service</li>
              <li><i class="ri-check-double-line"></i>Best Team</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Our vision is to develop in a constant manner and grow as a major IT service provider to become a leading performer, in providing quality Web and Software Development solutions in the competitive global marketplace. Our professional, flexible and integrated process reflects in what we do. We always guide our customers to success. We have the ability to accelerate and quickly share the great work or products of your organization or business.
            </p>
         
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="bg-white">
      <div class="container" >

        <div class="d-flex justify-content-center text-primary">
        <h2><u style="text-decoration-color:red">Team</u></h2>
          
        </div>
        <h5 class="d-flex justify-content-center "><u style="text-decoration-color:green; color:red;">Apex Marketing Private Limited</u></h5>

        <div class="row">

          <!-- team 1 -->
          <div class="card bg-light col-lg-3 col-12 mb-2" style="width: 18rem;">
        
            <div class="card-body">
            <h4 class="card-title"><img src="img/avatarm.jpg" class="rounded-circle w-50" alt="Team1">
            Amenda</h4>
            <span>Founder & Chairman</span>
                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter p-2"></i></a>
                  <a href=""><i class="fa fa-facebook p-2"></i></a>
                  <a href=""><i class="fa fa-instagram p-2"></i></a>
                  <a href=""> <i class="fa fa-linkedin p-2"></i> </a>
                </div>
            </div>
          </div>
          <!-- team2 -->
          <div class="card bg-light col-lg-3 col-12 mb-2" style="width: 18rem;">
        
            <div class="card-body">
            <h4 class="card-title"><img src="img/avatarm.jpg" class="rounded-circle w-50" alt="Team1">
            Anna</h4>
            <span>Co-Founder & C.E.O</span>
                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter p-2"></i></a>
                  <a href=""><i class="fa fa-facebook p-2"></i></a>
                  <a href=""><i class="fa fa-instagram p-2"></i></a>
                  <a href=""> <i class="fa fa-linkedin p-2"></i> </a>
                </div>
            </div>
          </div>
          <!-- team 3 -->
           <div class="card bg-light col-lg-3 col-12 mb-2" style="width: 18rem;">
                <div class="card-body">
                    <h4 class="card-title"><img src="img/avatarm.jpg" class="rounded-circle w-50" alt="Team1">
                    Joseph</h4>
                    <span>Marketing Director</span>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <div class="social">
                    <a href=""><i class="fa fa-twitter p-2"></i></a>
                    <a href=""><i class="fa fa-facebook p-2"></i></a>
                    <a href=""><i class="fa fa-instagram p-2"></i></a>
                    <a href=""> <i class="fa fa-linkedin p-2"></i> </a>
                    </div>
                </div>
            </div>
          <!-- team 4 -->
            
            <div class="card bg-light col-lg-3 col-12 mb-2" style="width: 18rem;">
                <div class="card-body">
                    <h4 class="card-title"><img src="img/avatarm.jpg" class="rounded-circle w-50" alt="Team1">
                    Henery</h4>
                    <span>HR Director</span>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <div class="social">
                    <a href=""><i class="fa fa-twitter p-2"></i></a>
                    <a href=""><i class="fa fa-facebook p-2"></i></a>
                    <a href=""><i class="fa fa-instagram p-2"></i></a>
                    <a href=""> <i class="fa fa-linkedin p-2"></i> </a>
                    </div>
                </div>
            </div>
          <!-- end team -->

        </div>

      </div>
    </section><!-- End Team Section -->
    <!-- Start Our product-->
    <section id="product" class="bg-light mt-4 mb-4 pt-2 pb-2">
    <div class="d-flex justify-content-center text-primary">
        <h2><u style="text-decoration-color:red">Products</u></h2>
          
        </div>
        <h5 class="d-flex justify-content-center "><u style="text-decoration-color:green; color:red;">Best quality,Best Price</u></h5>
        <div class="container">
            
        <div class="row">
            <!-- Product1 -->
            <div class="card col-lg-4 col-12 mb-2" style="width: 18rem;">
            <img class="card-img-top" src="img/antichip.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Anti-Radiation chip </h5>
                <p class="card-text">protects against the additional stress on your body which is caused by exposure to e- radiation. 
                Constant exposure to electromagnetic stress from cellphones causes</p>
                <h5 class="card-text text-success">Rs 150.00</h5>
                <form >
                <?php
                $total=150.00;
                $name='anchal';
                $email='a@gmail.com;' ?>

                    <input type='hidden' name='name' id='name' value=<?php echo $name; ?>>
                    <input type='hidden' name='email' id='email' value=<?php echo $email; ?>>
                    <input type='hidden' name='amt' id='amt' value=<?php echo $total;?>>
                    <?php if($total>0){ ?>
                        <input type='button' class="btn btn-danger btn-block" onclick="pay_now()"  value='Buy Now'>
                
                    <?php } ?>
                  </form>
            </div>
            </div>
            <!-- Product2 -->
            <div class="card col-lg-4 col-12 mb-2" style="width: 18rem;">
            <img class="card-img-top" src="img/antiCard1.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Anti-Radiation Card</h5>
                <p class="card-text">Improve the micro-blood circulation., Relieve the stress and fatigue.
                Improve vitality, Effective in killing bacteria.</p>
                <h5 class="card-text text-success">Rs 100.00</h5>
                <form >
                <?php
                $total2=100.00;
                $name='anchal';
                $email='a@gmail.com;' ?>

                    <input type='hidden' name='name2' id='name2' value=<?php echo $name; ?>>
                    <input type='hidden' name='email2' id='email2' value=<?php echo $email; ?>>
                    <input type='hidden' name='amt2' id='amt2' value=<?php echo $total2;?>>
                    <?php if($total>0){ ?>
                        <input type='button' class="btn btn-danger btn-block" onclick="pay_now2()"  value='Buy Now'>
                
                    <?php } ?>
                  </form>
            </div>
            </div>
            <!-- Product3 -->
            <div class="card col-lg-4 col-12 mb-2" style="width: 18rem; ">
            <img class="card-img-top" src="img/magnet.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Magnetic Bracelets </h5>
                <p class="card-text">Magnets in bracelets also known as magnetic therapy helps to improve circulation.</p>
                <h5 class="card-text text-success">Rs 450.00</h5>
                <form >
                <?php
                $total3=450.00;
                $name='anchal';
                $email='a@gmail.com;' ?>

                    <input type='hidden' name='name3' id='name3' value=<?php echo $name; ?>>
                    <input type='hidden' name='email3' id='email3' value=<?php echo $email; ?>>
                    <input type='hidden' name='amt3' id='amt3' value=<?php echo $total3;?>>
                    <?php if($total>0){ ?>
                        <input type='button' class="btn btn-danger btn-block" onclick="pay_now3()"  value='Buy Now'>
                
                    <?php } ?>
                    </form>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End Products -->
    <!-- Start Contacts-->
    <section class="mb-4" id="contact">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center text-primary my-4"><u style="text-decoration-color:red">Contact us </u></h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>
    <div class="container">
    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="text-primary">Your name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="text-primary">Your email</label>
                            <input type="text" id="email" name="email" class="form-control" required>
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="text-primary">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control" required>
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message" class="text-primary">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left m-3 ">
                <a class="btn btn-success w-50" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fa fa-map fa-2x"></i>
                    <p>Varanasi Uttar Pradesh 2211001</p>
                </li>

                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                    <p>+ 91 9999 99 9999</p>
                </li>

                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>contact@apex.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>
    </div>
    </section>
    <!-- End Contacts -->
    <!-- Start Footer -->
    <footer class="bg-light text-center text-white">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a
            class="btn btn-primary btn-floating m-1"
            style="background-color: #3b5998;"
            href="#!"
            role="button"
            ><i class="fa fa-facebook-f"></i
          ></a>

          <!-- Twitter -->
          <a
            class="btn btn-primary btn-floating m-1"
            style="background-color: #55acee;"
            href="#!"
            role="button"
            ><i class="fa fa-twitter"></i
          ></a>

          <!-- Google -->
          <a
            class="btn btn-primary btn-floating m-1"
            style="background-color: #dd4b39;"
            href="#!"
            role="button"
            ><i class="fa fa-google"></i
          ></a>

          <!-- Instagram -->
          <a
            class="btn btn-primary btn-floating m-1"
            style="background-color: #ac2bac;"
            href="#!"
            role="button"
            ><i class="fa fa-instagram"></i
          ></a>

          <!-- Github -->
          <a
            class="btn btn-primary btn-floating m-1"
            style="background-color: #333333;"
            href="#!"
            role="button"
            ><i class="fa fa-github"></i
          ></a>
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white" href="index.php">anchal-binarytech.herokuapp.com</a>
      </div>
      <!--End Copyright -->
    </footer>
  <!-- End Footer -->
  <script>
    function pay_now(){
        var name=jQuery('#name').val();
        var email=jQuery('#email').val();
        var amt=jQuery('#amt').val();
        
         jQuery.ajax({
               type:'post',
               url:'payment.php',
               data:"amt="+amt+"&name="+name+"&email="+email,
               success:function(result){
                   var options = {
                        "key": "rzp_test_6a1wM4TZFK3URO", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "Apex",
                        "description": "Buy Product",
                        "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="thank_you.php";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           
           });
        
        
    }
    //product 2
    function pay_now2(){
        var name=jQuery('#name2').val();
        var email=jQuery('#email2').val();
        var amt=jQuery('#amt2').val();
        
         jQuery.ajax({
               type:'post',
               url:'payment.php',
               data:"amt="+amt2+"&name="+name2+"&email="+email3,
               success:function(result){
                   var options = {
                        "key": "rzp_test_6a1wM4TZFK3URO", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "Apex",
                        "description": "Buy Product",
                        "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="thank_you.php";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           
           });
        
        
    }
    //product 3
    function pay_now3(){
        var name=jQuery('#name3').val();
        var email=jQuery('#email3').val();
        var amt=jQuery('#amt3').val();
        
         jQuery.ajax({
               type:'post',
               url:'payment.php',
               data:"amt="+amt3+"&name="+name3+"&email="+email3,
               success:function(result){
                   var options = {
                        "key": "rzp_test_6a1wM4TZFK3URO", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "Apex",
                        "description": "Buy Product",
                        "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="thank_you.php";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           
           });
        
        
    }
</script>
<script src="js/nav.js"></script>
</body>
</html>