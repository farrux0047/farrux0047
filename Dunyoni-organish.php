<?=include_once "includes/kir.php"?>
<?=include_once "includes/sidebar.php"?>
<?=include_once "includes/head.php"?>
<?php 
$date= date('Y-m-d');        
    
          $carusel=mysqli_query($conn,"SELECT * FROM rasm WHERE date='$date' and sahifa='Dunyoni organish'");
          if(mysqli_num_rows($carusel) > 0){
            while($carusell=mysqli_fetch_assoc($carusel)){
              $carusele[]=$carusell;
              }
            
            }
            $csqlr=mysqli_query($conn,"SELECT * FROM rasm WHERE date='$date' and sahifa='Dunyoni organish'");
            if(mysqli_num_rows($csqlr) > 0){  
              $caruselr = mysqli_fetch_assoc($csqlr);
              }


              $rowvid=mysqli_query($conn,"SELECT * FROM video WHERE sana='$date' and sahifa='Dunyoni organish'");
              if(mysqli_num_rows( $rowvid) > 0){
                while($rowvidd=mysqli_fetch_assoc( $rowvid)){
                  $rowvide[]=$rowvidd;
                  }
                
                }
   
        
        $sqlr = mysqli_query($conn, "SELECT * FROM rasm WHERE sahifa ='Dunyoni organish'");
        if(mysqli_num_rows($sqlr) > 0){
          while($sqlro=mysqli_fetch_assoc($sqlr)){
            $caru[]=$sqlro;
            }
          
        }
  
        $sqql = mysqli_query($conn, "SELECT * FROM video WHERE sahifa ='Dunyoni organish'");
        if(mysqli_num_rows($sqql) > 0){
          while($sqlrv=mysqli_fetch_assoc($sqql)){
            $vi[]=$sqlrv;
            }
          
        }
      ?> 
  <main id="main" class="main">
  <section class="section dashboard">
      <div class="row">

    <div class="pagetitle">
      <h1>Dunyoni o'rganish</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Bosh sahifa </a></li>
          <li class="breadcrumb-item">Dunyoni o'rganish</li>
          <li class="breadcrumb-item active">Dunyoni o'rganish</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
 
      
   <!-- Slides with captions -->
   <div class="card">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9205006212941921"
     crossorigin="anonymous"></script>
              <div class="card-body">
              <div class="col-lg-6">
              <div class="row align-items-top">
              <h5 class="card-title">Yangi postlar</h5>
           
              <!-- Slides with fade transition -->
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
             
                  <div class="carousel-item active">
                 
                    <img src="<?=$caruselr['location']?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                     
                      <h5><?=$caruselr['rasm_name']?></h5>
                    <a href="#<?=$caruselr['rasm_name']?>"><?=$caruselr['rasm_name']?></a>
                    
                    </div>
                  
                    <br>
                    
                  </div>
                  <?foreach($carusele as $caruselr) :?>
                  <div class="carousel-item">
                    <img src="<?=$caruselr['location']?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
        
                      <h5><?=$caruselr['rasm_name']?></h5>
                    <a href="#<?=$caruselr['rasm_name']?>"><?=$caruselr['rasm_name']?></a>
                    </div>
                    <br>
                  
                  </div>
                  <?endforeach?>
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

          </div>
          </div>
        </div>
        
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
          <?foreach($caru as $rowr) :?>  
               
               <div class="news">
         
            <div class="post-item clearfix">
            <a href="<?=$rowr['location']?>"class="venobox" data-gall="gallery-item"><img src="<?=$rowr['location']?>" alt="" class="img-fluid"></a>
              <h4><a href="#<?=$rowr['rasm_name']?>"> <?=$rowr['rasm_name']?> </a><?php 
   if ($user['daraja']==3)
   {
    echo " 
    
    
     <input type='hidden' value='$rowr[rasm_id]' name='rasm_id'>
     <a href='rasdelete.php?rasm_id=$rowr[unique_id]'>
        <button type='submit' class='btn btn-danger'><i class='bi bi-trash'></i></i></button>
     </a>
     <br>
      ";
    }?></h4>
            </div>
           
             

           
         
          <br>    <br>
          </div>
<?endforeach?>
        </div>
       
      </div><!-- End News & Updates -->
      
       <?foreach($caru as $rowr) :?>
    <section class="section">
      <div class="row align-items-top">
        <div class="col-lg-6">
      
            <!-- Card with an image on left -->    <section id="<?=$rowr['rasm_name']?>" class="">
            <div class="card mb-3">
            <div class="row g-0">
              <a href="<?=$rowr['location']?>" class="venobox" data-gall="gallery-item"><img src="<?=$rowr['location']?>"   class="img-fluid">
              
              </a>
         

          
              <div class="col-md-8">
                <div class="card-body">
                  
                  <h5 class="card-title"><?=$rowr['rasm_name']?>  
                <?php 
   if ($user['daraja']==3)
   {
    echo " 
    
    
     <input type='hidden' value='$rowr[rasm_id]' name='rasm_id'>
     <a href='rasdelete.php?rasm_id=$rowr[unique_id]'>
        <button type='submit' class='btn btn-danger'>o'chirish <i class='bi bi-trash'></i></i></button>
     </a>
     <br>
      ";
    }?>
    <br></h5>
                
  
              <div class="accordion" id="accordionvideo<?=$rowr['rasm_id']?>">

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headvideo<?=$rowr['rasm_id']?>"> 
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?=$rowr['rasm_id']?>" aria-expanded="true" aria-controls="collapseOne">
                    "<?=$rowr['rasm_name']?>" Rasmi haqida ma'lumot:
                    </button>
                  </h2>
                  <div id="collapseOne<?=$rowr['rasm_id']?>" class="accordion-collapse collapse show" aria-labelledby="headvideo<?=$rowr['rasm_id']?>" data-bs-parent="#accordionvideo<?=$rowr['rasm_id']?>">
                    <div class="accordion-body">
                      <strong><?=$rowr['rasm_name']?>:</strong>
                      <source src="<?=$rowr['location']?>>" type="video/mp4">

  <?=$rowr['rasm_status']?>
  
  <br>
  
  <br><span><i class="bi bi-youtube"></i> ______________________ <i class="bi bi-youtube"></i></span>
  
                    </div>
                  </div>
                </div>
    </div>
  </div>
        
              
                </div>
              </div>
            </div>
          </div>
          </div><!-- End Card with an image on left -->
  <?endforeach?> 
<!-- Card with an image on left -->
<?foreach($vi as $video) :?>
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
  <source src="<?=$video['location']?>" type="video/mp4">
Sizning versiyangiz mos kelmadi
</video>
<br>

  <div class="col-md-8">
    <div class="card-body">
     
      <h5 class="card-title"> <?=$video['video_name']?><small> : <i class="bi bi-calendar"></i>  <?=$video['sana']?></small> <?php 
   if ($user['daraja']==3)
   {
    echo " 
    
    
     <input type='hidden' value='$video[video_id]' name='video_id'>
     <a href='rdelete.php?video_id=$video[unique_id]'>
        <button type='submit' class='btn btn-danger'>Videoni o'chirish <i class='bi bi-trash'></i></i></button>
     </a>
     
      ";
    }?></h5> 

    <!-- Default Accordion -->


  
              <div class="accordion" id="accordionvideo">

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headvideo"> 
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    "<?=$video['video_name']?>" videosi haqida ma'lumot:
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headvideo" data-bs-parent="#accordionvideo">
                    <div class="accordion-body">
                      <strong><?=$video['video_name']?>:</strong>
                      <source src="<?=$video['location']?>" type="video/mp4">

  <?=$video['video_status']?>
  <br><span style="background-color:white;"><i class="bi bi-youtube"></i>_____________________________<i class="bi bi-youtube"></i></span>
  <br>
  
                    </div>
                  </div>
                </div>
    </div>
    </div>
  </div>
</div>
</div>
<br>
<?endforeach?>
<br>

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
  <?=include_once "includes/footer.php";?>
</body>

</html>