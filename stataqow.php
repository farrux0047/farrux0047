<?=include_once "includes/kir.php"?>
<?=include_once "includes/sidebar.php"?>

 
<main id="main" class="main">




<div class="col-lg-6">

          <div class="card">
          <div  style="color:green;">
                                    <?php

if(!empty($_SESSION['xabarstata']))
{  echo $_SESSION['xabarstata'];
    unset($_SESSION['xabarstata']);
}
    ?>
</div>
<div  style="color:red;">
                                    <?php

if(!empty($_SESSION['xabarstataeror']))
{  echo $_SESSION['xabarstataeror'];
    unset($_SESSION['xabarstataeror']);
}
    ?>
</div>
            <div class="card-body">

              <h5 class="card-title">Statistika haqida</h5>
             
              <!-- Vertical Bar Chart -->
              <div id="verticalBarChart1" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#verticalBarChart1")).setOption({
                    title: {
                      text: 'Statistika nomi '
                    },
                    
                     
      
                    tooltip: {
                      trigger: 'axis',
                      axisPointer: {
                        type: 'shadow'
                      }
                    },
                    legend: {},
                    grid: {
                      left: '3%',
                      right: '4%',
                      bottom: '3%',
                      containLabel: true
                    },
                    xAxis: {
                      type: 'value',
                      boundaryGap: [0, 0.01]
                    },
                    yAxis: {
                      type: 'category',
                      data: ['Nomi1','Nomi2','Nomi3','Nomi4','Nomi5','Nomi6','Nomi7','Nomi8','Nomi9','Nomi10', ]
                    },
                    series: [{
                        name: 'Sana: ',
                        type: 'bar',
                        data: [10,9,8,7,6,5,4,3,2,1]
                      },
              
                    ]
                  });
                });
              </script>
              <div class="alert border-primary alert-dismissible fade show" role="alert">
            Statistika sonini katta dan boshlasangiz 
            Yani "Nomi1" ga katta son bilan boshlab orqa sanoq qilsangiz Statistikangiz piramida shakliga keladi :).
            </div>
              <!-- End Vertical Bar Chart -->

            </div>
          </div>
        </div>
      

  <div class="card-body">
    <h5 class="card-title">Statistika haqida</h5>

    <!-- Vertical Bar Chart -->
    <div id="verticalBarChart2" style="min-height: 400px;" class="echart"></div>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        echarts.init(document.querySelector("#verticalBarChart2")).setOption({
          title: {
            text: 'Statistika nomi '
          },
          
           

          tooltip: {
            trigger: 'axis',
            axisPointer: {
              type: 'shadow'
            }
          },
          legend: {},
          grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
          },
          xAxis: {
            type: 'value',
            boundaryGap: [0, 0.01]
          },
          yAxis: {
            type: 'category',
            data: ['Nomi1','Nomi2','Nomi3','Nomi4','Nomi5','Nomi6','Nomi7','Nomi8','Nomi9','Nomi10', ]
          },
          series: [{
              name: 'Sana: ',
              type: 'bar',
              data: [1,2,3,4,5,6,7,8,9,10]
            },
    
          ]
        });
      });
    </script>
     <div class="alert border-primary alert-dismissible fade show" role="alert">
 Aks holda Statistikangiz shu holatga keladi :).
    </div>
     <div class="alert border-success alert-dismissible fade show" role="alert">
Elsatib o'taman statistika qo'shish eng Maksimal 10 qatorlik bo'ladi.
Eng minimal esa 1 qator bo'lishi kerak!

  </div>
    <!-- End Vertical Bar Chart -->
    <form action="phpstataqow.php" method="post">
    <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Sanasi</label>
                  <div class="col-sm-10">
                    <input type="date" name="sana" class="form-control">
                  </div>
                </div>
                <div class="col-12">
<label class="form-label">Statistika sahifalarga joylamoq</label>
<div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-geo-alt-fill"></i> </span>
                  <div class="col-sm-10">
                    <select name="Sahifa" class="form-select" aria-label="Default select example" required="" placeholder="Rasmni sahifaga joylash">
                      <option selected>Sahifa nomi</option>
                      <option value="bosh sahifa">Bosh sahifa</option>
                     
                      <option value="Qiziqarli statistikalar">Qiziqarli statistikalar</option>
              
                    </select>
                  </div>
                  </div>
                </div>
                <label for="inputNumber"  class="form-label"> <br>
                <div class="alert border-danger alert-dismissible fade show" role="alert">
                  Malumot kiritsh ( " / ' \ :)  shunga o'xshash belgilar qo'llanilmasin Faqatgina harflardan iborat bo'lishi kerak<br>
                  Aks holda statistika yozuvida xatolik berishi mumkin !  <i class="bi bi-journal-richtext"></i></label>
    </div>
                  <div class="col-12">
                      <label for="yourEmail" class="form-label">Statistika haqida</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">Haqida</span>
                      <input type="text" name="haqida" class="form-control" id="yourstatus"  title="Statistika haqida" required="" placeholder="Statistika haqida">
                      <span class="input-group-text" id="inputGroupPrepend">Nomi</span>
                      <input type="text" name="snomi" class="form-control" id="yourstatusnumber"  title="statistika nomi" required=""  placeholder="Statistika nomi">
                      <div class="invalid-feedback">Iltimos Statiskani kiriting!</div>
                    </div>
    <!--Statistika qo'shish -->
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Statistika Nomi1</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">1</span>
                      <input type="text" name="nomi1" class="form-control" id="yourstatus"  title="Nomi1" required="" placeholder="O'zbekiston">
                      <input type="number" name="soni1" class="form-control" id="yourstatusnumber"  title="son1 "required=""  placeholder="Son kiriting">
                      <div class="invalid-feedback">Iltimos Statiskani kiriting!</div>
                    </div>
                    <br>
   <!--Statistika qo'shish -->


 <!--Statistika qo'shish -->
 <div class="col-12">
                      <label for="yourEmail" class="form-label">Statistika Nomi2</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">2</span>
                      <input type="text" name="nomi2" class="form-control" id="yourstatus"  title="Nomi1"  placeholder="O'zbekiston">
                      <input type="number" name="soni2" class="form-control" id="yourstatusnumber"  title="son1 " placeholder="Son kiriting">
                      <div class="invalid-feedback">Iltimos Statiskani kiriting!</div>
                    </div>
   <!--Statistika qo'shish -->
    <!--Statistika qo'shish -->
    <div class="col-12">
                      <label for="yourEmail" class="form-label">Statistika Nomi3</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">3</span>
                      <input type="text" name="nomi3" class="form-control" id="yourstatus"  title="Nomi1"  placeholder="O'zbekiston">
                      <input type="number" name="soni3" class="form-control" id="yourstatusnumber"  title="son1 " placeholder="Son kiriting">
                      <div class="invalid-feedback">Iltimos Statiskani kiriting!</div>
                    </div>
   <!--Statistika qo'shish -->
    <!--Statistika qo'shish -->
    <div class="col-12">
                      <label for="yourEmail" class="form-label">Statistika Nomi4</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">4</span>
                      <input type="text" name="nomi4" class="form-control" id="yourstatus"  title="Nomi1"  placeholder="O'zbekiston">
                      <input type="number" name="soni4" class="form-control" id="yourstatusnumber"  title="son1 "  placeholder="Son kiriting">
                      <div class="invalid-feedback">Iltimos Statiskani kiriting!</div>
                    </div>
   <!--Statistika qo'shish -->
    <!--Statistika qo'shish -->
    <div class="col-12">
                      <label for="yourEmail" class="form-label">Statistika Nomi5</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">5</span>
                      <input type="text" name="nomi5" class="form-control" id="yourstatus"  title="Nomi1" placeholder="O'zbekiston">
                      <input type="number" name="soni5" class="form-control" id="yourstatusnumber"  title="son1 "  placeholder="Son kiriting">
                      <div class="invalid-feedback">Iltimos Statiskani kiriting!</div>
                    </div>
   <!--Statistika qo'shish -->

    <!--Statistika qo'shish -->
    <div class="col-12">
                      <label for="yourEmail" class="form-label">Statistika Nomi6</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">6</span>
                      <input type="text" name="nomi6" class="form-control" id="yourstatus"  title="Nomi1"  placeholder="O'zbekiston">
                      <input type="number" name="soni6" class="form-control" id="yourstatusnumber"  title="son1 "  placeholder="Son kiriting">
                      <div class="invalid-feedback">Iltimos Statiskani kiriting!</div>
                    </div>
   <!--Statistika qo'shish -->
 <!--Statistika qo'shish -->
 <div class="col-12">
                      <label for="yourEmail" class="form-label">Statistika Nomi7</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">7</span>
                      <input type="text" name="nomi7" class="form-control" id="yourstatus"  title="Nomi1"  placeholder="O'zbekiston">
                      <input type="number" name="soni7" class="form-control" id="yourstatusnumber"  title="son1 "  placeholder="Son kiriting">
                      <div class="invalid-feedback">Iltimos Statiskani kiriting!</div>
                    </div>
   <!--Statistika qo'shish -->
    <!--Statistika qo'shish -->
    <div class="col-12">
                      <label for="yourEmail" class="form-label">Statistika Nomi8</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">8</span>
                      <input type="text" name="nomi8" class="form-control" id="yourstatus"  title="Nomi1"  placeholder="O'zbekiston">
                      <input type="number" name="soni8" class="form-control" id="yourstatusnumber"  title="son1 "  placeholder="Son kiriting">
                      <div class="invalid-feedback">Iltimos Statiskani kiriting!</div>
                    </div>
   <!--Statistika qo'shish -->
    <!--Statistika qo'shish -->
    <div class="col-12">
                      <label for="yourEmail" class="form-label">Statistika Nomi9</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">9</span>
                      <input type="text" name="nomi9" class="form-control" id="yourstatus"  title="Nomi1"  placeholder="O'zbekiston">
                      <input type="number" name="soni9" class="form-control" id="yourstatusnumber"  title="son1 "  placeholder="Son kiriting">
                      <div class="invalid-feedback">Iltimos Statiskani kiriting!</div>
                    </div>
   <!--Statistika qo'shish -->
    <!--Statistika qo'shish -->
    <div class="col-12">
                      <label for="yourEmail" class="form-label">Statistika Nomi10</label>
                      <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">10</span>
                      <input type="text" name="nomi10" class="form-control" id="yourstatus"  title="Nomi1"  placeholder="O'zbekiston">
                      <input type="number" name="soni10" class="form-control" id="yourstatusnumber"  title="son1"  placeholder="Son kiriting">
                      <div class="invalid-feedback">Iltimos Statiskani kiriting!</div>
                    </div>
   <!--Statistika qo'shish -->


  </div>
</div>
</div>
<br>
<div class="alert border-success alert-dismissible fade show" role="alert">
Elsatib o'taman statistika qo'shish eng Maksimal 10 qatorlik bo'ladi.
Eng minimal esa 1 qator bo'lishi kerak!

  </div>
  <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" formaction="phpstataqow.php">Statistika qo'shish</button>
                    </div>

      
    </form>


   
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
      Designed by <a href="https://instagram.com/1.isma1loff">Ismailov Farruxbek</a>
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