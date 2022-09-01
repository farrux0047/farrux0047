<?=include_once "includes/kir.php"?>
<?=include_once "includes/sidebar.php"?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Geograflar Faoliyati</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Bosh sahifa</a></li>
          <li class="breadcrumb-item">Geografiya</li>
          <li class="breadcrumb-item active">Malumotlar kiritish</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
            <h5 class="card-title">Video malumotlar kiritish jadvali <i class="bi bi-youtube"></i></h5>
          Assalomu Alaykum <?=$user['Ism'] ?> bugun saytga qanday video joylaymiz <i class="bi bi-emoji-wink"></i>
   </div>
   <div class="alert border-success alert-dismissible fade show" role="alert">
   <a href="ryuklash.php">Rasm yuklash bo'limi <i class="bi bi-images"> </i> </a>
  
	
  </div>
                 <!-- General Form Elements -->
              <form class="row g-3 needs-validation" action="video.php" enctype="multipart/form-data" accept="application/" method="post">
          
          
            
            
              <div  style="color:green;">
                                    <?php

if(!empty($_SESSION['xabar']))
{  echo $_SESSION['xabar'];
    unset($_SESSION['xabar']);
}
    ?>
   </div>
   <br>
   <div  style="color:red;">
                                    <?php

if(!empty($_SESSION['xabari']))
{  echo $_SESSION['xabari'];
    unset($_SESSION['xabari']);
}
    ?>
   </div>
   <br>
   
   <div class="row mb-3">
                  <label for="inputName5" class="form-label">  <div class="alert border-danger alert-dismissible fade show" role="alert">Video nomi ( " / ' \ :)  shunga o'xshash belgilar qo'llanilmasin !  <i class="bi bi-collection-play
 "></i></label></div>
                  <input type="text" class="form-control" name="v_name" id="inputName5" placeholder="Video nomini kiriting" require>
                </div>

<div class="row mb-3">
                <label for="inputNumber"  class="form-label">  <div class="alert border-danger alert-dismissible fade show" role="alert"> Video yuklash: Hajmi 20 mb dan kichik bolgan videolar joylansin ! <i class="bi bi-folder-symlink"></i> <br>Shu formatlar qo'llaniladi <i class="bi bi-collection-play
 
 "></i> <br><small><p class="breadcrumb-item active">|'avi', 'flv', 'wmv', 'mov', 'mp4'|</p></small></label></div>
                  <div class="col-sm-10">
                    <input class="form-control" name="fayl_elek" type="file" title="Rasm yuklash" required="">
                  </div>
                </div>
                
                <br>
<br>
<br>
<div class="col-12">
<label class="form-label">Videoni sahifalarga joylamoq</label>
<div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-geo-alt-fill"></i> </span>
                  <div class="col-sm-10">
                    <select name="Sahifa" class="form-select" aria-label="Default select example" required="" placeholder="Videoni sahifaga joylash">
                      <option selected>Sahifa nomi</option>
                      <option value="bosh sahifa">bosh sahifa</option>
                      <option value="Dunyo tabiiy geografiyasi">Dunyo tabiiy geografiyasi</option>
                      <option value="Orta osiyo tabiiy geografiyasi">Orta osiyo tabiiy geografiyasi</option>
                      <option value="Ozbekiston tabiiy geografiyasi">Ozbekiston tabiiy geografiyasi</option>
                      <option value="Jahon iqtisodiy ijtimoiy geografiyasi">Jahon iqtisodiy ijtimoiy geografiyasi</option>
                      <option value="Yevropa">Yevropa</option>
                      <option value="Osiyo">Osiyo</option>
                      <option value="Avstriya">Avstriya</option>
                      <option value="Shimoliy Amerika">Shimoliy Amerika</option>
                      <option value="Janubiy Amerika">Janubiy Amerika</option>
                      <option value="Afrika">Afrika</option>
                      <option value="Qiziqarli statistikalar">Qiziqarli statistikalar</option>
                      <option value="Kashfiyot">Dunyo ozgartirgan kashfiyotlar</option>
                      <option value="Dunyoni organish">Dunyoni organish</option>
                      <option value="Yangi davr taqdiqotlari">Yangi davr taqdiqotlari</option>
                      <option value="statistika">Qiziqarlik statistikalar</option>
                    </select>
                  </div>
                  </div>
                </div>
                <br>
                <br>

                <div class="row mb-3">
                <br>
                <br>
                  <label for="inputNumber"  class="form-label"> <br>  <div class="alert border-success alert-dismissible fade show" role="alert">
                  Malumot kiritsh ( " / ' \ :)  shunga o'xshash belgilar qo'llanilmasin !  <i class="bi bi-journal-richtext"></i> </div></label>
                  
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 300px" name="v_status" required="" placeholder="Malumot kiring..."></textarea>
                  </div>
                </div>
               

                <br>
<br>
<br>
                <div class="row mb-3">
                  <label for="inputNumber"  class="form-label">Kiritish tugmasi</label>
                  <div class="col-sm-10">


                            <!-- Vertically centered Modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                Kiritish <i class="bi bi-folder-symlink"></i>
              </button>
              <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">  Eslatma 
                   
                        o'qib chiqing <i class="bi bi-exclamation-octagon"></i></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                  
                     Video formatiga e'tibor berdingizmi? <i class="bi bi-file-earmark-easel"></i><br>
                     Ushbu Videoyingiz kiritayotgan ma'lumotingizga to'g'ri keladimi? <i class="bi bi-file-earmark-richtext"></i><br>
                    Videoning nomi to'g'rimi ? <i class="bi bi-file-earmark-font"></i><br>
                    Yuqoridagi barchasi to'gri bo'lsa unda 'Kiritish' tugmasini bosing <i class="bi bi-folder-symlink"></i><br>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish <i class="bi bi-file-earmark-x"></i></button>
                      <button type="submit" class="btn btn-primary">Videni kiritish <i class="bi bi-folder-symlink"></i></button>
                    </div>
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->


              </form>
              <!-- End General Form Elements -->
          
            </div>
          </div>

        </div>

     
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Geograflar faoliyati</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
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

</body>

</html>