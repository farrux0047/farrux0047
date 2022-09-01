<?php 
 session_start();
include "Mbbt.php";
$foy=$_SESSION['unique_id'];
$foy2=$_SESSION['foy'];
if(!isset($_SESSION['unique_id'])){
    header("location: 404.php");
  }
$user=mysqli_fetch_array(mysqli_query($conn,"Select *from users where unique_id='$foy'"));
$sql = mysqli_query($conn, "SELECT * FROM profileimg WHERE unique_id ='$foy'");   
if(mysqli_num_rows($sql) > 0){  
   $row = mysqli_fetch_assoc($sql);
   }

   $unique = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
   if(mysqli_num_rows($unique) > 0){
     $logid = mysqli_fetch_assoc($unique);
   }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Geograflar Faoliyati - bosh sahifa</title>
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

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/favicon.png" class="rounded-circle" alt="">
        <span class="d-none d-lg-block">Geograflar Faoliyati</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->
     
    <h3> <a href="https://instagram.com/uygurim" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="https://t.me/hacker_1889_by_farrux" class=""><i class="bi bi-telegram"></i></a>
      <a href="https://instagram.com/uygurim" class="instagram"><i class="bi bi-youtube"></i></a>

    </h3>
    



   
</h4>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>
        <h2> 
        <a href="index2" > <i class="bi bi-house"></i></a>

</h2>
   

        </li><!-- End Messages Nav -->
        
     
      
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <?php
          if ($row ['status'] == 1) {
							echo "<img src='$row[location]' class='rounded-circle' alt=' :('>";
						} else {
							echo "<img src='afs/profile/default-profile.jpg' alt=' :('  class='rounded-circle'>";
						}
            ?>
            <span class="d-none d-md-block dropdown-toggle ps-2"><?=$user['Login'] ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?=$user['Login']." "?></h6>
              <span><?=$user['Ism']." ".$user['fam']?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile.php">
                <i class="bi bi-person"></i>
                <span>Mening profilim</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile.php">
                <i class="bi bi-gear"></i>
                <span>Sozlamalar</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <?php
        $_SESSION['foy']=$user['Id'];
    $_SESSION['daraja']=$user['daraja'];
    if ($user['daraja']==3)
    {
     echo '     
            <li>
              <a class="dropdown-item d-flex align-items-center" href="fadmin.php">
                <i class="bi bi-bank"></i>
                <span>Admin panel</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
';
}
elseif ($user['daraja']==1)
{
  echo '     
  <li>
    <a class="dropdown-item d-flex align-items-center" href="help.php">
      <i class="bi bi-question-circle"></i>
      <span>Yordam</span>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>
';
}?>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php?logout_id=<?php echo $logid['unique_id']; ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Chiqish</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->



  </header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-house"></i>
      <span>Bosh sahifa</span>
    </a>
    
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
    <i class="ri-globe-line"></i><span>Geografiya</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="Dunyoning-tabiiy-geografiyasi.php">
        <i class="ri-globe-line"></i><span>Dunyo tabiiy geografiyasi</span>
        </a>
      </li>
      <li>
        <a href="Orta-osiyo-tabiiy-geografiyasi.php">
        <i class="ri-globe-line"></i><span>O'rta osiyo tabiiy geografiyasi</span>
        </a>
      </li>
      <li>
        <a href="Ozbekiston-tabiiy-geografiyasi.php">
        <i class="ri-globe-line"></i><span>O'zbekiston tabiiy geografiyasi</span>
        </a>
      </li>
      <li>
        <a href="Jahon-iqtsodiy-ijtimoiy-geografiyasi.php">
        <i class="ri-globe-line"></i><span>Jahon iqtsodiy-ijtimoiy geografiyasi</span>
        </a>
      </li>
      <li>
    </ul>
  </li><!-- Geografiya nav bari tugashi -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-globe2"></i><span>Dunyo mamlakatlari</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    <li>
        <a href="map.php">
        <i class="bi bi-globe2"></i><span>Dunyo xaritasi</span>
        </a>
      </li>
      <li>
        <a href="Yevropa.php">
          <i class="bi bi-globe2"></i><span>Yevropa</span>
        </a>
      </li>
      <li>
        <a href="Osiyo.php">
           <i class="bi bi-globe2"></i><span>Osiyo</span>
        </a>
      </li>
      <li>
        <a href="Avstriya.php">
           <i class="bi bi-globe2"></i><span>Avstriya va okeaniya</span>
        </a>
      </li>
      <li>
        <a href="USA.php">
           <i class="bi bi-globe2"></i><span>Shimoliy Amerika</span>
        </a>
      </li>
      <li>
        <a href="USA2.php">
           <i class="bi bi-globe2"></i><span>Janubiy Amerika</span>
        </a>
      </li>
      <li>
        <a href="afrika.php">
           <i class="bi bi-globe2"></i><span>Afrika</span>
        </a>
      </li>
    </ul>
  </li><!-- Dunyo mamlakatlari nav bari tugashi-->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
    <i class="ri-earth-fill"></i><span>Dunyoni o'rganish
      </span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="Dunyoni-organish.php">
          <i class="ri-earth-fill"></i><span>Dunyoni o'rganish</span>
        </a>
      </li>
      <li>
        <a href="Dunyoni-o'zgartirgan-kashfiyotlar.php">
        <i class="ri-earth-fill"></i><span>Dunyoni o'zgartirgan kashfiyotlar</span>
        </a>
      </li>
      <li>
        <a href="Yangi-davr-taqdiqotlari.php">
           <i class="ri-earth-fill"></i><span>Yangi davr taqdiqotlari</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-bar-chart"></i><span>Statistikalar</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="Statistika.php">
        <i class="bi bi-bar-chart"></i><span>Qiziqarli statistikalar</span>
        </a>
</li>
    </ul>
  </li><!-- End Charts Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-youtube"></i><span>Video darsliklar</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="videodars.php">
        <i class="bi bi-youtube"></i><span>Islomjon Abdupattayev Karimov darsliklari</span>
        </a>
      </li>

    </ul>
  </li><!-- End Icons Nav -->




  <li class="nav-item">
   

      <span>___________________________</span>

  
<li class="nav-item">
  <li class="nav-item">
    <a class="nav-link collapsed" href="register.php">
      <i class="bi bi-card-list"></i>
      <span>Ro'yhatdan o'tish</span>
    </a>
<li class="nav-item">

    <a class="nav-link collapsed" href="iportfolio/index.html">

      <i class="ri-customer-service-2-fill"></i>
      <span>Dasturchi bilan boglanish</span>
    </a>
  </li><!-- End Contact Page Nav -->
  </li><!-- End Register Page Nav -->

  <li class="nav-item">

<a class="nav-link collapsed" href="Comingsoon/index.html">

<i class="bi bi-chat-text"></i>
<span>Chatga kirish </span>
      <small>   <p class="fst-mono"> Tez kunda!</p></small>
</a>
</li>
 <li class="nav-item">

 <a href="logout.php?logout_id=<?php echo $logid['unique_id']; ?>"  class="nav-link collapsed">

  <i class="bi bi-box-arrow-right"></i>
  <span>Chiqish</span>
</a>
</li>
</ul>
</aside><!-- End Sidebar-->


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Bosh sahifa</a></li>
          <li class="breadcrumb-item">Foydalanuvchi</li>
          <li class="breadcrumb-item active">Profili</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body2 profile-card pt-4 d-flex flex-column align-items-center">
            <?php
            $sql = mysqli_query($conn, "SELECT * FROM profileimg WHERE unique_id ='$foy'");   
            if(mysqli_num_rows($sql) > 0){  
               $row = mysqli_fetch_assoc($sql);
               }
            if ($row ['status'] == 1) {
							echo "<img src='$row[location]' class='rounded-circle' alt=' :('>";
						} else {
							echo "<img src='afs/profile/default-profile.jpg' alt=' :('  class='rounded-circle'>";
						}
            ?>

              <h2><?=$user['Ism']." ".$user['fam'] ?></h2>
              <h3><?=$user['email']." "?></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
         
        </div>

        <div class="col-xl-8">





          <div class="card">
            <div class="card-body pt-3">
            <div  style="color:green;">
                                    <?php

if(!empty($_SESSION['xabar']))
{  echo $_SESSION['xabar'];
    unset($_SESSION['xabar']);
}
    ?>
</div>
   <div class="btn sweet-success" style="color:red;">
                                    <?php

if(!empty($_SESSION['xabari']))
{  echo $_SESSION['xabari'];
    unset($_SESSION['xabari']);
}
    ?>
   </div>
  
   <div  style="color:green;">
   <?php

if(!empty($_SESSION['xabare']))
{  echo $_SESSION['xabare'];
    unset($_SESSION['xabare']);
}
    ?>
   </div>
   <br>
   <style>
     .card-body2 {
  padding: 0 20px 20px 20px;
  background:#fff;
}
   </style>
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Foydalanuvchi</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Profilni sozlash</button>
                </li>


            

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                 
                  <h5 class="card-title">Foydalanuvchi haqida</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label"><i class="bi bi-person-bounding-box"></i> Logini</div>
                    <div class="col-lg-9 col-md-8"><?=$user['Login']." "?></div>
                  </div>


                  <div class="row">
                    <div class="col-lg-3 col-md-4 label "><i class="bi bi-person-fill"></i> Ismi</div>
                    <div class="col-lg-9 col-md-8"><?=$user['Ism'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label"><i class="bi bi-person-fill"></i> Familyasi</div>
                    <div class="col-lg-9 col-md-8"><?=$user['fam']." "?></div>
                  </div>

                

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label"><i class="bi bi-geo-alt-fill"></i> Manzil</div>
                    <div class="col-lg-9 col-md-8"><?=$user['manzil']." "?></div>
                  </div>

                  
                  

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label"><i class="bi bi-telephone-forward-fill"></i>Telefon raqami</div>
                    <div class="col-lg-9 col-md-8"><?=$user['tel']." "?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label"><i class="bi bi-envelope-fill"></i> Email</div>
                    <div class="col-lg-9 col-md-8"><?=$user['email']." "?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                  <!-- Profile Edit Form -->
                  <form action="prasm.php" accept="application/" enctype="multipart/form-data" method="post">
                    <div class="row mb-3">
                 
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profil rasmini ozgartish</label>
                      <div class="col-md-8 col-lg-9">
                    
                     
            
                                      <div class="pt-2">  <input type="hidden" value="<?=$user['Id']?>" name="Id">
                          <i class="btn btn-primary btn-sm bi bi-camera" title="Yangi profil rasmi"> <input type="file" class="btn btn-primary btn-sm" name="profil"></i><br><br>   
                          <button type="submit"  class="btn btn-primary btn-sm" title="profil rasmini yuklash"><i class="bi bi-upload"></i> Yuklash</button>
                    
                        
                          <button type="submit" formaction="dprasm.php" class="btn btn-danger btn-sm btn sweet-success" title="Profil rasmini olib tashlash">O'chirish<i class="bi bi-trash"></i></button> 
                        </div>
                      </div>
                    </div>
    </form>
                    <form action="yangilash.php" method="post">
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label"><i class="bi bi-person-bounding-box"></i> Login</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullName" type="text" class="form-control" id="fullName" value="<?=$user['Login'] ?>" readonly="true">
                      </div>
                    </div>


                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label"><i class="bi bi-person-fill"></i> Ismi</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Ism" type="text" class="form-control" id="fullName" value="<?=$user['Ism'] ?>">
                      </div>
                    </div>

                 

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label"><i class="bi bi-person-fill"></i> Familyasi</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fam" type="text" class="form-control" id="company" value="<?=$user['fam'] ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label"><i class="bi bi-geo-alt-fill"></i> Manzil</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="manzil" type="text" class="form-control" id="Job" readonly="true" value="<?=$user['manzil'] ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label"><i class="bi bi-telephone-forward-fill"></i> Telefon raqamingiz</label>
                      <div class="col-md-8 col-lg-9">
                    
                        <input name="tel" type="text" class="form-control"  value="<?=$user['tel'] ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label"><i class="bi bi-envelope-fill"></i> Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="text" class="form-control" id="Address" value="<?=$user['email'] ?>">
                      </div>
                    </div>

                  

                
                   

                    <div class="text-center">
                    <input type="hidden" value="<?=$user['Id']?>" name="Id">
                      <button type="submit" class="btn btn-primary">Yangilash</button>
                    </div>
                 <!-- End Profile Edit Form -->
                  <br>
<p>Parol kamida 6 ta belgi va 20 ta dan kam belgilardan iborat bo'lishi kerak!</p>
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
<p id="username-pwd"></p>
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label"><i class="bi bi-shield-fill-x"></i> Eski parol</label>
                      <div class="col-md-8 col-lg-9">
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-eye-fill" id="customCheck1" for="customCheck1"onclick="myFunction1()"></i></span>
                        <input name="parol1" type="password"  id="Password1" class="form-control">
                      </div>
                      </div>

                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label"><i class="bi bi-shield-lock-fill"></i> Yangi parol</label>
                      <div class="col-md-8 col-lg-9">
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-eye-fill" id="customCheck2" for="customCheck2"onclick="myFunction2()"></i></span>
                        <input name="parol2" type="password" id="Password2" onkeyup="tekshirp(this.value)" class="form-control">
                      </div>
                    </div>
                    </div>

                    <div class="row mb-3">
                      
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label"><i class="bi bi-shield-lock-fill"></i>  Yangi parolni qayta tering </label>
                  
                      <div class="col-md-8 col-lg-9">
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-eye-fill" id="customCheck3" for="customCheck3"onclick="myFunction3()"></i></span>
                        <input name="parol3" type="password" id="Password3" onkeyup="tekshirp(this.value)" class="form-control">
              
       
                        </div>
                      </div>
                    

                    </div>
                  

                    <div class="text-center">
                
                    <input type="hidden" value="<?=$user['parol']?>" name="parol">
                      <button type="submit" class="btn btn-primary">Parolni yangilash</button>
                    </div>
               <!-- End Change Password Form -->


                </div>
                </form>
                <script>
                    function myFunction1() {
  var x = document.getElementById("Password1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script>
                    function myFunction2() {
  var x = document.getElementById("Password2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script>
                    function myFunction3() {
  var x = document.getElementById("Password3");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

                  <!-- Settings Form --
                  <form>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Information on new products and services
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End settings Form --

               

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form --
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->
             
        </div>
                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Geograflar faoliyati </span></strong>. All Rights Reserved
    </div>
    <div class="credits">
    
      Designed by <a href="https://instagram.com/1.isma1loff/">Ismoilov Farruxbek</a>
    </div>
  </footer><!-- End Footer -->

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




  <script src="sweetalert/js/sweetalert.min.js"></script>
    <script src="sweetalert/js/sweetalert.init.js"></script>




</body>

</html>