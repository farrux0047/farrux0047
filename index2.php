<?php
include "Mbbt.php";
$foy=$_SESSION['foy']; 
/*
if(empty($foy) and !($foy=='0'))
{ if(!($foy=='0'))
    header("Location:404.php");
}*/
$user=mysqli_fetch_array(mysqli_query($conn,"Select *from users where Id='$foy'"));

/*
$Malumot=mysqli_fetch_array(mysqli_query($conn,"Select *from malumot where Id"));
while($sorovlar=mysqli_fetch_assoc($Malumot))
{
    $jadval[]=$sorovlar;
}*/
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
      <a href="index2.php" class="logo d-flex align-items-center">
        <img src="assets/img/favicon.png" alt="">
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
    
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>
        <?php
        $_SESSION['foy']=$user['Id'];
    $_SESSION['daraja']=$user['daraja'];
    if ($user['daraja']==1)
    {
     echo '     

     
     <h3> <a href="https://instagram.com/uygurim" class="instagram"><i class="ri-instagram-fill"></i></a>
      <a href="https://t.me/hacker_1889_by_farrux" class=""><i class="ri-telegram-fill"></i></a>
      <a href="https://instagram.com/uygurim" class="instagram"><i class="ri-youtube-fill"></i></a>

    </h3>
     <li class="nav-item dropdown pe-3">

       <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
         <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
         <span class="d-none d-md-block dropdown-toggle ps-2"><?=$user["Login"] ?></span>
       </a><!-- End Profile Iamge Icon -->

       <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
         <li class="dropdown-header">
           <h6><?=$user["Login"]." "?></h6>
           <span>Web Designer</span>
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

         <li>
           <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
             <i class="bi bi-question-circle"></i>
             <span>Yordam</span>
           </a>
         </li>
         <li>
           <hr class="dropdown-divider">
         </li>

         <li>
           <a class="dropdown-item d-flex align-items-center" href="logout.php">
             <i class="bi bi-box-arrow-right"></i>
             <span>Chiqish</span>
           </a>
         </li>

       </ul><!-- End Profile Dropdown Items -->';
    }
    elseif ($user['daraja']==0)
    {
      echo'<h3> <a href="https://instagram.com/uygurim" class="instagram"><i class="ri-instagram-fill"></i></a>
      <a href="https://t.me/hacker_1889_by_farrux" class=""><i class="ri-telegram-fill"></i></a>
      <a href="https://instagram.com/uygurim" class="instagram"><i class="ri-youtube-fill"></i></a>
     
    </h3>
    
    
    <a href="register.php" class="nav-link nav-profile d-flex align-items-center pe-0"><h1><i class="ri-account-circle-fill"></i></h1></a>
   
    
   ';
    }?>
      
       



         
          <!-- End Profile Iamge Icon --

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6></h6>
              <span>Web Designer</span>
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

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Yordam</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
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
          <i class="bi bi-menu-button-wide"></i><span>Geografiya</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-chat-square-text"></i><span>Dunyo tabiiy geografiyasi</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>O'rta osiyo tabiiy geografiyasi</span>
            </a>
          </li>
          <li>
            <a href="components-badges.html">
              <i class="bi bi-circle"></i><span>O'zbekiston tabiiy geografiyasi</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Jahon iqtsodiy-ijtimoiy geografiyasi</span>
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
              <i class="bi bi-circle"></i><span>Dunyo xaritasi</span>
            </a>
          </li>
          <li>
            <a href="Yevropa.php">
              <i class="bi bi-circle"></i><span>Yevropa</span>
            </a>
          </li>
          <li>
            <a href="Osiyo.php">
              <i class="bi bi-circle"></i><span>Osiyo</span>
            </a>
          </li>
          <li>
            <a href="Avstriya.php">
              <i class="bi bi-circle"></i><span>Avstriya va okeaniya</span>
            </a>
          </li>
          <li>
            <a href="USA.php">
              <i class="bi bi-circle"></i><span>Shimoliy Amerika</span>
            </a>
          </li>
          <li>
            <a href="USA2.php">
              <i class="bi bi-circle"></i><span>Janubiy Amerika</span>
            </a>
          </li>
          <li>
            <a href="afrika.php">
              <i class="bi bi-circle"></i><span>Afrika</span>
            </a>
          </li>
        </ul>
      </li><!-- Dunyo mamlakatlari nav bari tugashi-->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-award"></i><span>Kashfiyot
          </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>Dunyoni o'rganish</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Dunyoni o'zgartirgan kashfiyotlar</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Yangi davr taqdiqotlari</span>
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
              <i class="bi bi-circle"></i><span>Qiziqarli statistikalar</span>
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
              <i class="bi bi-circle"></i><span>Islomjon Abdupattayev Karimov darsliklari</span>
            </a>
          </li>

        </ul>
      </li><!-- End Icons Nav -->

  

    
      <li class="nav-item">
        <a class="nav-link collapsed" href="register.php">
          <i class="bi bi-card-list"></i>
          <span>Ro'yhatdan o'tish</span>
        </a>
  <li class="nav-item">

        <a class="nav-link collapsed" href="iportfolio/index.html">

          <i class="ri-customer-service-2-fill
 "></i>
          <span>Dasturchi bilan boglanish</span>
        </a>
      </li><!-- End Contact Page Nav -->
      </li><!-- End Register Page Nav -->

     <li class="nav-item">

    <a class="nav-link collapsed" href="logout.php">

      <i class="bi bi-box-arrow-right"></i>
      <span>Chiqish</span>
    </a>
  </li>
</ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Geograflar Faoliyati</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Bosh sahifa</a></li>
          <li class="breadcrumb-item active">Kirish</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

       
          </div><!-- End Website Traffic -->
        

            

                <!-- Slides with captions -->
                <div class="card">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9205006212941921"
     crossorigin="anonymous"></script>
              <div class="card-body">
             
                <h5 class="card-title">Assalomu Alaykum <?=$user['Ism']." "?>Geograflar Faoliyati saytimizga xush kelibsiz</h5>

              <!-- Slides with fade transition -->
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
             
                  <div class="carousel-item active">
                    <a href="assets/img/geograf.jpg">
                    <img src="assets/img/geograf.jpg" class="d-block w-100" alt="...">
</a>
                    <div class="carousel-caption d-none d-md-block">
                     
                    </div>
                    <br>
                    <h5>Gegrafiyaga oid qiziqarli malumotlar</h5>
                    <p>Tabiiy resurslar va Havo iqlimi va shunga o'xshash qiziqarli malumotlar...</p>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/geografdars.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      
                    </div>
                    <br>
                    <h5>Qiziqarli darsliklar</h5>
                    <a href="videodars.php">Darsliklar Islom Abdupattayevich Karimov tomonidan o'tiladi...</a>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/xarita.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                     
                    </div>
                    <br>
                    <h5>Dunyo Mamlakatlari haqida malumotlar</h5>
                    <p>Dunyo mamlakarlar haqida malumotlarga ega bo'lishingiz mumkin...</p>
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Ortga</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Keyingisi</span>
                </button>

              </div><!-- End Slides with fade transition -->
  
              </div>
            </div>
            
          <!-- News & Updates Traffic -->
          <?php
require "mbbt.php";
$query = mysqli_query($conn, "SELECT * FROM rasm");

while($fetch=mysqli_fetch_assoc($query)){
				$ras[]=$fetch;
				}
		?>

          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Tartib</h6>
                </li>

                <li><a class="dropdown-item" href="#">Osiyo</a></li>
                <li><a class="dropdown-item" href="#">Yevropa</a></li>
                <li><a class="dropdown-item" href="#">Amerika</a></li>
                <li><a class="dropdown-item" href="#">Afrika</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Geografiya &amp;Yangi postlar <span>| 2022</span></h5>
              
              <div class="news">
              <?foreach($ras as $rasmlar) :?>
                <div class="post-item clearfix">
                  <img src="<?=$rasmlar['location']?>" alt="">
                  <h4><a href="<?=$rasmlar['location']?>"><?=$rasmlar['rasm_name']?></a></h4>
                  <p><?=$rasmlar['rasm_status']?></p>
                </div>
                <br>
                <?endforeach?>
                <div class="post-item clearfix">
                  <a href="assets/img/afgoniston.jpg"><img src="assets/img/afgoniston.jpg" alt=""></a>
                  <h4><a href="Osiyo.php#Afgoniston">Afg'onistonda</a></h4>
                  <p>Yaqin vaqtlargacha Afg'oniston hududida dunyodagi barcha giyohvand moddalarning 95 foiziga yaqin qismi yetishtirilardi. Hozirgi hukumat tomonidan mamlakat hududida norkotik moddalar yetishtirish ta'qiqlangan. </p>
                </div>

                <div class="post-item clearfix">
                 <a href="assets/img/yolbars.jpg"> <img src="assets/img/yolbars.jpg" alt=""></a>
                  <h4><a href="Osiyo.php#yolbars">Yo'lbarslar</a></h4>
                  <p> 
Yo'lbarslar faqat Osiyo qit'asida Asosan musson o'rmonlar, shuningdek savannalar, Daryobo'yi to'qaylarida tarqalgan.

Xaritada 1900-yilgacha (to'q sariq rangda) va hozirgi vaqtlarda (qizil rangda) yo'lbarslarning tarqalgan hududlari ko'rsatilgan.
<a href="Osiyo.php#yolbars">barcha malumot...</a></p>
                </div>

                <div class="post-item clearfix">
                <a href="assets/img/muzokean.jpg">  <img src="assets/img/muzokean.jpg" alt=""></a>
                  <h4>Shimoliy Muz Okeani</h4>
                  <p>Dunyo okeanlari orasida, Shimoliy Muz okeani qirg‘oqlarida eng kam mamlakat joylashgan.
Ushbu okean quruqlikda atigi 6ta mamlakat sohilini yuvib turadi.</p>
                </div>

                <div class="post-item clearfix">
                 <a href="assets/img/Uzstata.jpg"> <img src="assets/img/Uzstata.jpg" alt=""></a>
                  <h4>Ozbekiston Soliq tolovchi korxonalar</h4>
                  <p>
                  Ushbu diagrammada 10 ta eng yirik soliq to'lovchi korxonolari ko'rsatilgan.</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->


        </div><!-- End Right side columns -->
  <!-- Card with an image on left -->
  <div class="card mb-3">
    <div class="row g-0">
      <style>
      video {
  width: 200%;
  height: auto;
}
</style>
     <video class="video" controls>
      <source src="assets/videos/bora.mp4" type="video/mp4">
      <source src="assets/videos/bora.ogg" type="video/ogg">
Sizning versiyangiz mos kelmadi
    </video>
    
      <div class="col-md-8">
        <div class="card-body">
         
          <h5 class="card-title">🌴 Bora Bora, Fransiya Polineziyasi 🇵🇫</h5>
          <p class="card-text">
Bora Bora - Taitining shimoli-g'arbiy qismida, Janubiy Tinch okeanidagi Fransiya Polineziyasidagi kichik orol.</p>




        </div>
        
      </div>
      
    </div>
  </div>
  <!-- End Card with an image on left -->
  
  
  
  
    <!-- Card with an image on left -->

  <div class="card mb-3">

    <div class="row g-0">
      <style>
      video {
  width: 200%;
  height: 450px;
}
</style>
     <video class="video" with="400" controls>
      <source src="assets/videos/boba.mp4" type="video/mp4">
      <source src="assets/videos/boba.ogg" type="video/ogg">
Sizning versiyangiz mos kelmadi
    </video>
    
      <div class="col-md-8">
        <div class="card-body">
         
          <h5 class="card-title">🌴 Bora Bora, Fransiya Polineziyasi</h5>
          <p class="card-text">
    <!-- Default Accordion -->



              <div class="accordion" id="accordionExample">

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne"> 
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      🇵🇫 Fransuz Polineziyasi, Bora Bora.
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong> 🇵🇫 Fransuz Polineziyasi, Bora Bora.</strong>
  <source src="assets/videos/Fransiya.mp4" alt="">
Tinch okeanining janubiy qismida Bora Bora oroli🏝 joylashgan: Fransuz Polineziyasining marvaridlari, Taitidan 50 daqiqa uzoqlikda joylashgan miniatyura oroli, dunyodagi eng go'zal lagunalardan biri bilan chegaradosh. Tinch okeanining yaqinligi va ekzotik flora bilan mustahkamlangan osoyishta hashamat muhiti kichik atollni ajoyib plyaj kurortiga aylantirdi.


                    </div>
                  </div>
                </div>

</p>

        </div>
        
      </div>
      
    </div>
  </div><!-- End Card with an image on left -->
  
  
      <!-- News & Updates Traffic -->
      
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
 <h6>Tartib</h6>

                </li>


                <li><a class="dropdown-item" href="#">Osiyo</a></li>
                <li><a class="dropdown-item" href="#">Yevropa</a></li>
                <li><a class="dropdown-item" href="#">Amerika</a></li>
                <li><a class="dropdown-item" href="#">Afrika</a></li>
          </ul>
        </div>

        <div class="card-body pb-0">
          <h5 class="card-title">Geografiya &amp; yangi postlar <span>| 2022</span></h5>

          <div class="news">
            <div class="post-item clearfix">
            <a href="assets/img/stataap.jpg" > <img src="assets/img/stataap.jpg" alt=""></a>
              <h4><a href="Statistika.php#appstore">Eng ko'p yuklangan ilovalar</a></h4>
              <p> 
Ushbu jadvalda 2022-yilning ilk choragida eng ko'p yuklab olingan ilovalar ko'rsatilgan.
Telegram top 5 likga kirdi.
</p>
            </div>

            <div class="post-item clearfix">
<a href="assets/img/masjid.jpg"><img src="assets/img/masjid.jpg" alt=""></a>
              <h4>Исломдаги биринчи масжид



</a></h4>
              <p>Саудия Арабистонининг Мадина шаҳридаги Қубо масжиди Ислом тарихида биринчи қурилган масжид ҳисобланади
            <a href="statistika.php">  barcha malumot...</a>
 </p>
            </div>

            <div class="post-item clearfix">
              <a href="assets/img/Kdunyo.jpg"><img src="assets/img/Kdunyo.jpg" alt=""></a>
              <h4><a href="#">Dunyodagi eng yirik kumush qazib oluvchi davlatlar</a></h4>
              <p>🪙 
Ishlab chiqarishning yarmi Lotin Amerikasida joylashgan. Jahon reytingining birinchi qatorlari quyidagicha ko'rinadi:

1. 🇲🇽 Meksika - 178,1 mln (dunyo hajmining 22,7%)
2.🇵🇪 Peru - 109,7 mln (14%)
3. 🇨🇳 Xitoy - 108,6 mln (14%)
4. 🇨🇱 Chili - 47,4 mln (6%)
5. 🇦🇺 Avstraliya - 43,8 mln (5,6%)
6. 🇷🇺 Rossiya - 42,5 mln (5,4%)
...
12. 🇰🇿 Qozog'iston - 17,3 mln (2,2%)
17. 🇺🇿 O'zbekiston - 6,3 mln (0,8%)
</p>
            </div>

            <div class="post-item clearfix">
             <a href="assets/img/dkarta.jpg">
                <img src="assets/img/dkarta.jpg" alt=""></a>
              <h4 ><a href="" id="accordionExample">ijtimoiy tarmoqnib bloklagan davlatlar</a></h4>
              <p>Ushbu Xaritada Yer yuzida bitta bolsa ham ijtimoiy tarmoqni bloklagan davlatlar qizil rangda korsatilgan</p>
            </div>







            <div class="post-item clearfix">
              <a href="assets/img/atlantikaokean.jpg"><img src="assets/img/atlantikaokean.jpg" alt=""></a>
              <h4><a href="#">Ushbu xaritada Atlantika okeani ko‘rsatilgan.</a></h4>
              <p>

UMUMIY MA'LUMOTLAR

➖ Maydoni: 91 700 000 km²
➖ Suv hajmi: 330 000 000 km³
➖ O'rtacha chuqurligi: 3 926 m
➖ Maksimal chuqurligi: Puerto-Riko cho'kmasi, 8 742 m
➖ Dengizlar soni: 20 ta
➖ Eng yuqori suv ko'tarilishi: Fandi qo'ltig'i, 18 m</p>
            </div>

          </div><!-- End sidebar recent posts-->

        </div>
      </div><!-- End News & Updates -->



      <?php
require "mbbt.php";
$query = mysqli_query($conn, "SELECT * FROM video");

while($fetch=mysqli_fetch_assoc($query)){
				$vid[]=$fetch;
				}
		?>












 <!-- Card with an image on left -->
 <?foreach($vid as $video) :?>
 <div class="card mb-3">

<div class="row g-0">
  <style>
  video {

height: 50px;
position: absolute;
  top: 0vh;
  bottom: 0vh;
  left: 0px;
  width: 100;
  font-size: 20px;

}
</style>
 <video class="video" with="400" controls>
  <source src="<?=$video['location']?>" type="video/mp4">
Sizning versiyangiz mos kelmadi
</video>
<br>

  <div class="col-md-8">
    <div class="card-body">
     
      <h5 class="card-title"><?=$video['video_name']?></h5>
      <p class="card-text"><?=$video['video_status']?></p>
      
      <h5 class="card-title"></h5>
    </div>
  </div>
</div>
</div>
<?endforeach?>
<!-- End Card with an image on left --


















        <!-- Card with an image on left -->

  <div class="card mb-3">

    <div class="row g-0">
      <style>
      video {
  width: 20%;
  height: 80vh;
  position: relative;
  weight:1vh;
}
</style>
     <video class="video" with="400" controls>
      <source src="assets/videos/Fransiya.mp4" type="video/mp4">
      <source src="assets/videos/Fransiya.ogg" type="video/ogg">
Sizning versiyangiz mos kelmadi
    </video>
    
      <div class="col-md-8">
        <div class="card-body">
         
          <h5 class="card-title">Fransiya🇫🇷 Normandiya, Min Sen-Mushel qal'asi
</h5>
          <p class="card-text">

Ushbu mashhur qalʼa orol Normandiya, Fransiyaning shimolida, Buyuk Britaniya bilan dengiz chegara qismida joylashgan.

Mon Sen-Mishel har yili butun dunyodan minglab sayyohlarni jalb qiladi. Goʻzal joylashuvi va qadimiy meʼmorchiligidan tashqari, u kuchli hamda jilokor suv oqimi bilan ham qiziqdir. .</p>

        </div>
      </div>
    </div>
  </div><!-- End Card with an image on left --
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Geograflar Faoliyati</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">Ismailov Farruxbek</a>
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

</body>

</html>