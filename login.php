<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login|Apex</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>
<body>
<!-- Background & animion & navbar & title -->
  <div class="menu-list" id="mob">
		<!-- Logo and navigation menu -->
		<div class="apex" >
			<h1 id="mobLogo">Apex </h1>
			<div id="menus" >
				<a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                </svg>Home</a>
                <a href="login.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>Login</a>
                <a href="register.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>Register</a>
                <a href="index.php#about"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-info-lg" viewBox="0 0 16 16">
                <path d="m10.277 5.433-4.031.505-.145.67.794.145c.516.123.619.309.505.824L6.101 13.68c-.34 1.578.186 2.32 1.423 2.32.959 0 2.072-.443 2.577-1.052l.155-.732c-.35.31-.866.434-1.206.434-.485 0-.66-.34-.536-.939l1.763-8.278zm.122-3.673a1.76 1.76 0 1 1-3.52 0 1.76 1.76 0 0 1 3.52 0z"/>
                </svg>About</a>
                <a href="index.php#team"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-lightbulb-fill" viewBox="0 0 16 16">
                <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z"/>
                </svg> Team</a>
                <a href="index.php#product"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
              </svg>Product</a>
                <a href="index.php#contact"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
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
    <div class="background">
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
            <li><a href="index.php#about">About</a></li>
            <li><a href="index.php#team">Team</a></li>
            <li><a href="index.php#product">Products</a></li>
            <li><a href="index.php#contact">Contacts</a></li>
            <button class="btn btn-success ml-3" onclick="login()">Login</button>
            <button class="btn btn-success" onclick="register()">Register</button>
           

        </ul>
     </nav>
    </div>
    
  </header>
  <!--Login -->
  <div id="login" >
       
       <div class="container " style="margin:auto;">
           <div id="login-row" class="row justify-content-center align-items-center">
               <div id="login-column" class="col-md-12">
                   <div id="login-box" class="col-md-12">
                       <form id="login-form" class="form" action="loginaction.php" method="post">
                           <h3 class="text-center text-info">Login</h3>
                           <div class="form-group">
                               <label for="username" class="text-info">Enter Email:</label><br>
                               <input type="text" name="username" id="username"  class="form-control">
                           </div>
                           <div class="form-group">
                               <label for="password" class="text-info">Password:</label><br>
                               <input type="text" name="password" id="password" class="form-control">
                           </div>
                           <div class="form-group">
                               <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                               <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                           </div>
                           <div id="register-link" class="text-right">
                               <a href="register.php" class="text-info">Register here</a>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- end Login -->
   <!-- Start Footer -->
   <footer class="bg-light text-center text-white mt-5">
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
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
        © 2021 Copyright:
        <a class="text-white" href="index.php">anchal-binarytech.herokuapp.com</a>
      </div>
      <!--End Copyright -->
    </footer>
  <!-- End Footer -->
  <script src="js/nav.js"></script>

</body>
</html>