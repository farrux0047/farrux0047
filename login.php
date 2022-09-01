<?php
session_start();
 if(isset($_SESSION['unique_id'])){
  header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>

  <title>Geograflar Faoliyati - Kirish</title>
  <!-- loader-->
  <link href="Admin/assets/css/pace.min.css" rel="stylesheet"/>
  <script src="Admin/assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="yangi/admin/assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="Admin/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
    <!-- Google Fonts -->

  <link href="https://fonts.gstatic.com" rel="preconnect">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->

  <link href="assets/css/style.css" rel="stylesheet">
  
  <link href="Admin/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="Admin/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="Admin/assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper">
   <div class="lds-ring">
</div>
</div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 	<div class="card-title text-uppercase text-center py-3"><h4><i class="ri-gatsby-line
"></i>eograflar <i class="bi bi-facebook"></i>aoliyati <i class="ri-gatsby-line
"></i><i class="ri-edge-line"></i><i class="ri-earth-fill
 "></i> | <i class="ri-globe-line"></i>lamga</h4>
<h5>Xush kelibsiz !</h5></div>
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Kirish</div>
		    <form action="check.php" method="post">
		      <div  style="color:red;">

                                    <?php


if(!empty($_SESSION['xabar']))
{  echo $_SESSION['xabar'];
    unset($_SESSION['xabar']);
}
    ?>
    </div> 
   </div>
   <br>
			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only">Login</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="exampleInputUsername" name="Login" class="form-control input-shadow" placeholder="Loginingizni kiriting" required="">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="sr-only">Parol</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="Password" name="password" class="form-control input-shadow" placeholder="Parolingizni kiriting" required="">
				  <div class="form-control-position">
					  <i class="icon-eye" id="customCheck" for="customCheck"onclick="myFuunction()"></i>
				  </div>
			   </div>
			  </div>
			<div class="form-row">
			 <div class="form-group col-6">
			   
			 </div>
			 <div class="form-group col-6 text-right">
			  <a href="reset-password.html"></a>
			 </div>
			</div>
			 <button type="submit" class="btn btn-light btn-block">Kirish</button>
			  <div class="text-center mt-3">Ijtimoiy tarmoqdagi manzillarimiz</div>
			  
			 <div class="form-row mt-4">
			  <div class="form-group mb-0 col-6">
			   <button type="button" class="btn btn-light btn-block"><i class="bi bi-telegram"></i> Telegram</button>
			 <br>
			 </div>
			 <br>
			 <br>
			 <div class="form-group mb-0 col-6 text-right">
			  <button type="button" class="btn btn-light btn-block"><i class="bi bi-instagram"></i> Instagram</button><br>
			 </div>
			 <br>
			 
			 			  <div class="form-group mb-0 col-6 text-center">
			   <button type="button" class="btn btn-light btn-block"><i class="bi bi-youtube"></i> Youtube</button>
			 </div>
			 
			 	  <div class="form-group mb-0 col-6 text-center">
			   <button type="button" class="btn btn-light btn-block"><i class="bi bi-facebook"></i> Facebook</button>
			 </div>
			 
			</div>
			 
			 </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Siz ro'yxatdan o'tmaganmisiz ? <a href="register.php">Ro'yxatdan o'tish</a></p>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher--
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Fonlar</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Orqa fonlar </p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
	        <script>

                    function myFuunction() {

  var x = document.getElementById("Password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="Admin/assets/js/jquery.min.js"></script>
  <script src="Admin/assets/js/popper.min.js"></script>
  <script src="Admin/assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="Admin/assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="Admin/assets/js/app-script.js"></script>
  
  
  
  
  
    <!-- Vendor JS Files -->

  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  
  
  
</body>
</html>
