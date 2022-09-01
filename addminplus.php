<?php
include "Mbbt.php";
include "qoshimcha.php";
$foy=$_SESSION['foy'];
If(!(($_SESSION['daraja'])==3))
{
header("Location:404x.php");
}
$date=date('Y/m/d');



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Geograflar faoliyati - Admin qo'shish</title>
  <!-- loader-->
  <link href="admin/assets/css/pace.min.css" rel="stylesheet"/>
  <script src="admin/assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="admin/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="admin/assets/css/app-style.css" rel="stylesheet"/>
  
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
 <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

	<div class="card card-authentication1 mx-auto my-4">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="admin/assets/images/logo-icon.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Admin qo'shish <i class="ri-vip-crown-line"></i></div>
		    <form action="adche.php" method="post" onsubmit="return signupValidation()">


          <?php if(!empty($_SESSION['admin_yoz'])){echo $_SESSION['admin_yoz']; unset($_SESSION['admin_yoz']);}?>
			  

        <div class="form-group">
			  <label for="exampleInputName" class="">Admin Ismi</label>
			   <div class="position-relative has-icon-right">
			   <div class="input-group has-validation">
			   <span class="input-group-text" id="inputGroupPrepend"><i class="ri-vip-crown-2-line"></i></span>
				  <input type="text" id="exampleInputName" name="name" class="form-control input-shadow" placeholder="Islomjon"  required="">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
				  </div>
			   </div>
			  </div>

        <div class="form-group">
			  <label for="exampleInputName" class="">Admin Familyasi</label>
			   <div class="position-relative has-icon-right">
			   <div class="input-group has-validation">
			   <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-file-person-fill
 "></i></span>
				  <input type="text" id="exampleInputName" name="fam"  class="form-control input-shadow" placeholder="Karimov"  required="">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
  </div>

			  <div class="form-group">
			  <label for="exampleInputEmailId" class="">Admin emaili</label>
			   <div class="position-relative has-icon-right">
			   <div class="input-group has-validation">
			   <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-google"></i></span>
				  <input type="email" id="exampleInputEmailId" name="email" class="form-control input-shadow" placeholder="Admin emaili@gmail.com"  required="">
				  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>
				  </div>
			   </div>
			  </div>
  </div>
        <div class="form-group">
			  <label for="exampleInputName" class="">Admin telefon raqami</label>
			   <div class="position-relative has-icon-right">
			   <div class="input-group has-validation">
			   <span class="input-group-text" id="inputGroupPrepend">+998</span>
				  <input type="number" id="exampleInputName" name="tel" class="form-control input-shadow" placeholder="(90)-123-45-67"  required="">
				  <div class="form-control-position">
					  <i class="bi bi-telephone"></i>
</div>
					</div>
			   </div>
			  </div>
        <div class="form-group">
			  <label for="exampleInputName" class="">Admin Manzili</label>
			   <div class="position-relative has-icon-right">
			   <div class="input-group has-validation">
			   <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-bank2"></i></span>
         <select name="manzil" class="form-control" aria-label="Default select example" required="">
                      <option selected>Hududni tanlang</option>
                      <option value="Andijon">Andijon</option>
                      <option value="Namangan">Namangan</option>
                      <option value="Fargona">Fargona</option>
                      <option value="Toshkent">Toshkent</option>
                      <option value="Sirdaryo">Sirdaryo</option>
                      <option value="Navoiy">Navoiy</option>
                      <option value="Samarqand">Samarqand</option>
                      <option value="Jizzax">Jizzax</option>
                      <option value="Xorazm">Xorazm</option>
                      <option value="Buxoro">Buxoro</option>
                      <option value="Qashqadaryo">Qashqadaryo</option>
                      <option value="Qoraqalpogiston">Qoraqalpogiston</option>
                     

                    </select>
					
				  <div class="form-control-position">
					  <i class="bi bi-geo"></i>
				  </div>
			   </div>
			  </div>  </div>


			  <div class="form-group">
			  <label for="exampleInputName" class="">Admin Jinsi</label>
			   <div class="position-relative has-icon-right">
			   <div class="input-group has-validation">
			   <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-people"></i></span>
         <select name="jinsi" class="form-control" aria-label="Default select example" required="">
                      <option selected>Admin jinsini kiriting</option>
                      <option value="Ayol">Ayol</option>
                      <option value="Erkak">Erkak</option>
                      
                     

                    </select>
	
					<div class="form-control-position">
					  <i class="bi bi-people"></i>
				  </div>
			   </div>
			  </div>  </div>

        <div class="form-group">
			  <label for="exampleInputName" class="">Admin Logini </label>
			  <p id="username-info"></p>
			   <div class="position-relative has-icon-right">
			   <div class="input-group has-validation">
			   <span class="input-group-text" id="inputGroupPrepend"><i class="ri-shield-user-line"></i></span>
				  <input type="text" id="exampleInputName" name="username"  class="form-control input-shadow"  required="" onkeyup="tekshir(this.value)" placeholder="Islomjon">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
  </div>
  <div class="form-group">
			  <label for="exampleInputPassword" class="">Admin paroli </label>
			  <div class="input-group has-validation">
			  <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-shield-lock-fill"></i></span>
			   <div class="position-relative has-icon-right">
			
				  <input type="password" id="Password" name="password" class="form-control input-shadow" placeholder="Parolingizni kiriting" required="">
				  </div>
				  <div class="form-control-position">
					  <i class="icon-eye" id="customCheck" for="customCheck"onclick="myFuunction()"></i>
				  </div>
			   </div>
			  </div>


			



			  <div class="form-group">
			  <label for="exampleInputPassword" class="">Admin parolini takrorlang</label>
			  <div class="input-group has-validation">
			  <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-shield-lock-fill"></i></span>
			   <div class="position-relative has-icon-right">
			
				  <input type="password" id="Password1" name="re-password" class="form-control input-shadow" placeholder="Parolingizni kiriting" required="">
				  </div>
				  <div class="form-control-position">
					  <i class="icon-eye" id="customCheck1" for="customCheck1"onclick="myFunction()"></i>
				  </div>
			   </div>
			  </div>

			   
			  
			 <button type="submit" class="btn btn-light btn-block waves-effect waves-light">Kiritish</button>
			  </form>
			   <div class="text-center mt-3">Ijtimoiy tarmoqdagi manzillarimiz:</div>
			  
			 <div class="form-row mt-4">
			  <div class="form-group mb-0 col-6">
			   <button type="submit" class="btn btn-light btn-block"><i class="bi bi-telegram"></i> Telegram</button>
			 </div>
			 <div class="form-group mb-0 col-6 text-right">
			  <button type="submit" class="btn btn-light btn-block"><i class="bi bi-youtube"></i> Youtube</button>
			 </div>
			 <br>
			 <br>
			 <div class="form-group mb-0 col-6 text-right">
			  <button type="submit" class="btn btn-light btn-block"><i class="bi bi-instagram"></i> Instagram</button>
			 </div>

			</div>
			
			
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Bosh sahifaga qaytmoqchimisiz ? <a href="fadmin.php">|Bosh sahifa</a></p>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Sayt Temasi</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Sayt temasi oddiy ranglarda</p>
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

function tekshir(str1)
{

	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("username-info").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "checkadmina.php?q="+str1, true);
	xhttp.send();

}
</script>

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
<script>
                    function myFunction() {
  var x = document.getElementById("Password1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>







	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="admin/assets/js/jquery.min.js"></script>
  <script src="admin/assets/js/popper.min.js"></script>
  <script src="admin/assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="admin/assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="admin/assets/js/app-script.js"></script>
  
</body>
</html>
