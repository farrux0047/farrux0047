<?php
include "Mbbt.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sahifa / Geograflar faoliyati profil yaratish</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">
<style>
  .logo span {
    font-size: 26px;
    font-weight: 700;
    color: white;
    font-family: "Nunito", sans-serif;
}
  .card-title {
    padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: white;
    font-family: "Poppins", sans-serif;
}
  .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-image:url("assets/img/geografdars.jpg");
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
}
  body {
    font-family: "Open Sans", sans-serif;
    background-image:url("assets/img/geografdars.jpg");
    color: white;
}
</style>
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Geograflar faoliyati</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                <form class="row g-3 needs-validation" action="tekshir.php"  accept="application/" enctype="multipart/form-data" method="post" 
					onsubmit="return signupValidation()">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Ro'yhatdan o'tish <i class="bi bi-journal-medical"> </i> </h5>
                    <p class="text-center small">Sana: <?=
$date = date('Y/m/d');?></p>
                  </div>

                
          
                    <div class="col-12">
                    <?php if(!empty($_SESSION['sinf_yozish'])){echo $_SESSION['sinf_yozish']; unset($_SESSION['sinf_yozish']);}?>
                      <label for="yourName" class="form-label">Ismingiz</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person-fill"></i> </span>
                      <input type="text" name="name" class="form-control" id="yourName" required="" title="Ism"placeholder="Pistonchi">
                      <div class="invalid-feedback">Iltimos ismingizni kiriting!</div>
                    </div>
                    </div>





                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Familyangiz</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person-fill"></i></span>
                      <input type="text" name="fam" class="form-control" id="Fam" required="" title="Familya"placeholder="Palonchiyev">
                      <div class="invalid-feedback">Iltimos Familyangizni kiriting!</div>
                    </div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Emailingiz</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-envelope-fill"></i></span>
                      <input type="email" name="email" class="form-control" id="yourEmail"title="Email" required="" placeholder="emailingiz@gmail.com">
                      <div class="invalid-feedback">Iltimos Emailingizni kiriting!</div>
                    </div>
                    </div>
                    
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Telefon raqamingiz</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">+998</span>
                      <input type="number" name="tel" class="form-control" id="yourEmail"  title="Telefon raqami"required="" placeholder="(90)-123-45-67">
                      <div class="invalid-feedback">Iltimos Telefon raqamingizni kiriting!</div>
                    </div>
</div>

<div class="col-12">
<label class="form-label">Manzil</label>
<div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-geo-alt-fill"></i> </span>
                  <div class="col-sm-10">
                    <select name="manzil" class="form-select" aria-label="Default select example" title="Manzil" required="" placeholder="Andijon">
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
                  </div>
                  </div>
                </div>

                <div class="col-12">
<label class="form-label">Jinsingiz</label>
<div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-people-fill"></i> </span>
                  <div class="col-sm-10">
                    <select name="Jinsi" class="form-select" aria-label="Default select example" title="Jinsingiz" required="">
                      <option selected>Jinsingizni kiriting</option>
                      <option value="Ayol">Ayol</option>
                      <option value="Erkak">Erkak</option>

                     

                    </select>
                  </div>
                  </div>
                </div>
    
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Login</label>
                      <p id="username-info"></p>

                      <div class="input-group has-validation">
                        
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-globe" ></i></span>
                        <input type="text" name="username" class="form-control" title="Login" id="yourUsername" required onkeyup="tekshir(this.value)" placeholder="Login...">
                        <div class="invalid-feedback">Iltimos loginni kiriting.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Parol</label>
                      <p id="username-pwd"></p>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-shield-lock-fill"></i></span>
                      <input type="password" name="password" class="form-control"  title="Parol" id="Password" required onkeyup="tekshirp(this.value)" required="" placeholder="Parolga e'tiborli bo'ling">
                      <div class="invalid-feedback">Iltimos parolni kiriting!</div>
                    </div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Parolni takrorlang</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-shield-lock-fill"></i> </span>
                      <input type="password" name="re-password" class="form-control" title="Parol "id="Password" required onkeyup="tekshirp(this.value)" required="" placeholder="Parolga e'tiborli bo'ling">
                      <div class="invalid-feedback">Iltimos parolni qayta kiriting!</div>
                    </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Profil rasmi</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person-fill"></i> 
                    <input type="file" name="profil" class="form-control" title="Profil rasmi"> 
                    <div class="invalid-feedback">Profil rasmini kiriting!</div>
                    </div></span>
                    </div>
                    
                    <div class="icon">
            <button type="button" class="btn btn-outline-dark">
              <i class="bi bi-eye-fill" id="customCheck" for="customCheck"onclick="myFuunction()"></i></button>
        </div>
                   <!--                           
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>-->
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" formaction="tekshir.php">Kirish</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Siz ro'yhatdan o'tganmizsiz? <a href="login.php">Login</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">Ismoilov Farruxbek</a>
              </div>

            </div>
          </div>
        </div>
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
	xhttp.open("GET", "followers.php?q="+str1, true);
	xhttp.send();

}
</script>
<script>

function tekshirp(str1)
{

	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("username-pwd").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "pwdtekshir.php?p="+str1, true);
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
      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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