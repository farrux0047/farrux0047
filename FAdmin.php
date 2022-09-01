<?php
include "Mbbt.php";
include "qoshimcha.php";
$foy=$_SESSION['unique_id'];
$foy2=$_SESSION['foy'];
if(!(($_SESSION['daraja'])==3))
{
header("Location:404x.php");
}
$user=mysqli_fetch_array(mysqli_query($conn,"Select *from users where unique_id='$foy'"));
$Farrux=mysqli_fetch_array(mysqli_query($conn,"SELECT *FROM users WHERE unique_id='20051207'"));
$sql = mysqli_query($conn, "SELECT * FROM profileimg WHERE unique_id ='$foy'");   
if(mysqli_num_rows($sql) > 0){  
   $row = mysqli_fetch_assoc($sql);
   }

   $unique = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
   if(mysqli_num_rows($unique) > 0){
     $logid = mysqli_fetch_assoc($unique);
   }
$date=date('Y/m/d');
$manzilA=mysqli_num_rows(mysqli_query($conn,"SELECT *from users where manzil='Andijon'"));
$manzilF=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM users where manzil='Fargona'"));
$manzilN=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM users where manzil='Namangan'"));
$manzilT=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM users where manzil='Toshkent'"));
$manzilSi=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM users where manzil='Sirdaryo'"));
$manzilSa=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM users where manzil='Samarqand'"));
$manzilQa=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM users where manzil='Qashqadaryo'"));
$manzilB=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM users where manzil='Buxoro'"));
$manzilQo=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM users where manzil='Qoraqalpogiston'"));
$manzilX=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM users where manzil='Xorazm'"));
$manzilNa=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM users where manzil='Navoiy'"));
$manzilJ=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM users where manzil='Jizzax'"));
$user=mysqli_fetch_array(mysqli_query($conn,"SELECT *FROM users where unique_id='$foy'"));
$foydalanuvchi_soni=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM users"));
$postV=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM video"));
$postR=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM rasm"));
$postS=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM status"));
$foydA=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM users where daraja='3'"));
$foyde=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM users where daraja='2'"));
$foyd=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM users where daraja='1'"));
$foydalanuvchilar=mysqli_query($conn,"SELECT *FROM users");
$sanafa=mysqli_fetch_array(mysqli_query($conn,"SELECT *FROM users where sana='$date'"));

$foydje=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM users where Jinsi='Erkak'"));
$foydja=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM users where JInsi='Ayol'"));


while($foydalanuvchi=mysqli_fetch_assoc($foydalanuvchilar))
{
    $foydalanuvchilar_jadvali[]=$foydalanuvchi;
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
  <title>Geograflar faoliyati - Admin paneli</title>
  <!-- loader-->
  <link href="admin/assets/css/pace.min.css" rel="stylesheet"/>
  <script src="admin/assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="admin/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="admin/assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="admin/assets/css/app-style.css" rel="stylesheet"/>
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <link href="Restaurant/assets/vendor/venobox/venobox.css" rel="stylesheet">

</head>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="assets/img/favicon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Admin panel</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header"> Dasturchi <a href="https://instagram.com/1.isma1loff/">Ismoilov Farruxbek</a></li>
      <li>
        <a href="fadmin.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Bosh sahifa</span>
        </a>
      </li>
      <li>
        <a href="index.php">
          <i class="bi bi-bank"></i> <span>Geograflar-Faoliyati</span>
        </a>
      </li>
      <li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-youtube"></i> <span>Malumotlar kiritish</span> <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="ryuklash.php">
            <i class="bi bi-image"></i><span>Rasm</span>
            </a>
          </li>
          <li>
            <a href="vyuklash.php">
            <i class="bi bi-youtube"></i><span>Video</span>
            </a>
          </li>
          <li>
            <a href="stataqow.php">
            <i class="bi bi-bar-chart"></i><span>Statistikalar</span>
            </a>
          </li>
        </ul>

      <li>
        <a href="addminplus.php">
          <i class="fa fa-user"></i> <span>Admin qo'shish</span>
        </a>
      </li>
    




      
    
      
      
      

      

      <li class="sidebar-header">LABELS</li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>

    </ul>
   
    
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
  <p><?php if(!empty($_SESSION['xabar1'])){echo $_SESSION['xabar1']; unset($_SESSION['xabar1']);}?></p>
     Sana:  <?=$date = date('d/m/Y');?>
  <ul class="navbar-nav align-items-center right-nav-link">
  
   
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="bi bi-collection-play"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <a href="vyuklash.php"><li class="dropdown-item"> <i class="bi bi-youtube"></i> Video</li></a>
    
          <a href="ryuklash.php"><li class="dropdown-item"> <i class="bi bi-images"></i> Rasm</li></a>
          <a href="stataqow.php"><li class="dropdown-item"> <i class="bi bi-bar-chart"></i> Statistikalar qo'shish</li></a>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><?php
          if ($row ['status'] == 1) {
							echo "<img src='$row[location]'  class='img-circle' alt=' rasm joylang! :('>";
						} else {
							echo "<img src='afs/profile/default-profile.jpg' alt=' :('  class='rounded-circle'>";
						}
            ?></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><?php
          if ($row ['status'] == 1) {
							echo "<img src='$row[location]' class='align-self-start mr-3' alt=' rasm joylang! :('>";
						} else {
							echo "<img src='afs/profile/default-profile.jpg' alt=' :('  class='rounded-circle'>";
						}
            ?></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?=$user['Ism']?></h6>
            <p class="user-subtitle"><?=$user['email']?></p>
            </div>
           </div>
          </a>
        </li>
        <a href="profile.php">
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-user mr-2"></i> Profile</li>
        <li class="dropdown-divider"></li>
       <li class="dropdown-item"><i class="icon-settings mr-2"></i> Sozlamalar</li></a>
        <li class="dropdown-divider"></li></a>
        <a href="logout.php?logout_id=<?php echo $logid['unique_id']; ?>">
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Chiqish</li></a>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?=$foydalanuvchi_soni." "?> <br><small>Erkaklar: <?=$foydje?> | Ayollar: <?=$foydja?></small><span class="float-right"><i class="zmdi zmdi-accounts-list"></i></span></h5>
                    <div class="progress my-3" style="height:6px;">
                       <div class="progress-bar" style="width:<?=$foydalanuvchi_soni."% "?> "></div>
                    </div>
                  <p class="mb-0 text-white small-font"> foydalanuvchilar ro'yxatdan o'tgan <span class="float-right">+<?=$foydalanuvchi_soni.".0%"?> <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?=$postV." "?> <span class="float-right"><i class="fa fa-youtube-play"></i></span></h5>
                    <div class="progress my-3" style="height:5px;">
                       <div class="progress-bar" style="width:<?=$postV."%"?>"></div>
                    </div>
                  <p class="mb-0 text-white small-font">saytga admin tomonidan video joylangan <span class="float-right">+<?=$postV.".0%"?> <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?=$postR." "?> <span class="float-right"><i class="fa fa-image"></i></span></h5>
                    <div class="progress my-3" style="height:5px;">
                       <div class="progress-bar" style="width:<?=$postR."% "?>"></div>
                    </div>
                  <p class="mb-0 text-white small-font">saytga admin tomonidan rasm joylangan <span class="float-right">+<?=$postR.".0% "?> <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?=$foydA." "?> <span class="float-right"><i class="fa fa-user"></i></span></h5>
                    <div class="progress my-3" style="height:6px;">
                       <div class="progress-bar" style="width:<?=$foydA."%"?>"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Geograflar Faoiliyati saytining adminlari <span class="float-right">+<?=$foydA.".0%"?> <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
        </div>
    </div>
 </div>  
	  





 <div class="col-lg-6">

<div class="card">

  <div class="card-body">
    <h5 class="card-title">Media Statistika</h5>

    <!-- Pie Chart -->
    <div id="pieChart" style="min-height: 400px; font-color:#fff;" class="echart"></div>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        echarts.init(document.querySelector("#pieChart")).setOption({
        
          tooltip: {
            trigger: 'item'
          },
          legend: {
            orient: 'vertical',
            left: 'right'
          },
          series: [{
            name: 'Statistika',
            type: 'pie',
            radius: '50%',
            data: [{
              
              },
              {
               
              },

              {
               
              },
              {
                value: <?=$postV?>,
                name: 'Videolar <?=$postV?>'
              },
              {
                value: <?=$postR?>,
                name: 'Rasmlar <?=$postR?>'
              },
              {
               
              },
              {
               
              },
              
             
           
            ],
            emphasis: {
              itemStyle: {
                shadowBlur: 10,
                shadowOffsetX: 0,
                shadowColor: 'white'
              }
            }
          }]
        });
      });
    </script>
    <!-- End Pie Chart -->

  </div>
</div>
</div>


<div class="col-lg-6">

<div class="card">

  <div class="card-body">
    <h5 class="card-title">Saytdagi Erkak va Ayol Statistikasi</h5>

    <!-- Pie Chart -->
    <div id="pieChart2" style="min-height: 400px; font-color:#fff;" class="echart"></div>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        echarts.init(document.querySelector("#pieChart2")).setOption({
        
          tooltip: {
            trigger: 'item'
          },
          legend: {
            orient: 'vertical',
            left: 'right'
          },
          series: [{
            name: 'Statistika',
            type: 'pie',
            radius: '50%',
            data: [{
              
              },
              {
               
              },

              {
               
              },
              {
                value: <?=$foydje?>,
                name: 'Erkaklar <?=$foydje?>'
              },
              {
                value: <?=$foydja?>,
                name: 'Ayollar <?=$foydja?>'
              },
              {
               
              },
              {
               
              },
              
             
           
            ],
            emphasis: {
              itemStyle: {
                shadowBlur: 10,
                shadowOffsetX: 0,
                shadowColor: 'white'
              }
            }
          }]
        });
      });
    </script>
    <!-- End Pie Chart -->

  </div>
</div>
</div>


	<div class="row">
    <div class="col-12 col-lg-8 col-xl-8">
	    <div class="card">
       
		 <div class="card-header">Foydalanuvchilar jadvalining 2D ko'rinishi
		   <div class="card-action">
			    
		   </div>
		 </div>
		 <div class="card-body">
		    <ul class="list-inline">
			  <li class="list-inline-item"><i class="fa fa-circle mr-2 text-white"></i></li>
		
			</ul>
			<div class="chart-container-1">
			  <canvas id="chart1"></canvas>
			</div>
		 </div>
		 
		 <div class="row m-0 row-group text-center border-top border-light-3">
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0"><?=$foydalanuvchi_soni." "?></h5>
			   <small class="mb-0">Foydalanuvchilar soni  <span> <i class="zmdi zmdi-accounts-list"></i></span></small>
		     </div>
		   </div>
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0"> <?=$date = date('Y/m/d');?></h5>
			   <small class="mb-0">Bugungi sana <span>     <i class="fa fa-calendar"></i>
        
        
        
        </span></small>
		     </div>
		   </div>
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">Har bir viloyatlar ko'rsatilgan</h5>
			   <small class="mb-0">Viloyatlar soni <span> <i class="fa fa-flag"></i> 13</span></small>
		     </div>
		   </div>
		 </div>
		 
		</div>
	 </div>



     <div class="col-12 col-lg-4 col-xl-4">
        <div class="card">
           <div class="card-header">Foydalanuvchilar qayerdan ?
             <div class="card-action">
           
             </div>
           </div>

           <div class="card-body">
		     <div class="chart-container-2">
               <canvas id="chart2"></canvas>
			  </div>
           </div>
           <div class="table-responsive">
       <section class="section">
             <table class="table align-items-center">
             <table class="table datatable">
               <thead>
               <tr>
                     <th scope="col">№Viloyatlar</th>
                     <th scope="col">Soni <i class="bi bi-person-lines-fill"></i></th>
                     <th scope="col"><h5><i class="fa fa-angle-double-up"></i></h5></th>
                   </tr>
</thead>
               <tbody>
               <td  scope="row"><i class="fa fa-circle text-white mr-2"> Andijon</i></td>
                   <td>
                     <?=$manzilA." "?>
                   </td>
      
                   <td>
                   + <?=$manzilA." "?>%
</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-1 mr-2"></i>Farg'ona</td>
                   <td>  <?=$manzilF." "?></td>
                   <td>+ <?=$manzilF." "?>%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-1 mr-2"></i>Namangan</td>
                   <td>  <?=$manzilN." "?></td>
                   <td>+ <?=$manzilN." "?>%</td>
                 </tr>
               
                   <td><i class="fa fa-circle text-light-1 mr-2"></i>Samarqand</td>
                   <td>  <?=$manzilSa." "?></td>
                   <td>+ <?=$manzilSa." "?>%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-1 mr-2"></i>Sirdaryo</td>
                   <td>  <?=$manzilSi." "?></td>
                   <td>+ <?=$manzilSi." "?>%</td>
                 </tr> 
                  <tr>
                   <td><i class="fa fa-circle text-light-1 mr-2"></i>Toshkent</td>
                   <td>  <?=$manzilT." "?></td>
                   <td>+ <?=$manzilT." "?>%</td>
                   <tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-1 mr-2"></i>Navoiy</td>
                   <td>  <?=$manzilNa." "?></td>
                   <td>+ <?=$manzilNa." "?>%</td>
                 </tr>
              
                 <tr>
                   <td><i class="fa fa-circle text-light-1 mr-2"></i>Jizzax</td>
                   <td>  <?=$manzilJ." "?></td>
                   <td>+ <?=$manzilJ." "?>%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-1 mr-2"></i>Xorazm</td>
                   <td>  <?=$manzilX." "?></td>
                   <td>+ <?=$manzilX." "?>%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-1 mr-2"></i>Buxoro</td>
                   <td>  <?=$manzilB." "?></td>
                   <td>+ <?=$manzilB." "?>%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-1 mr-2"></i>Qashqadaryo</td>
                   <td>  <?=$manzilQa." "?></td>
                   <td>+ <?=$manzilQa." "?>%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-1 mr-2"></i>Qoraqalpog'iston</td>
                   <td>  <?=$manzilQo." "?></td>
                   <td>+ <?=$manzilQo." "?>%</td>
                 </tr>
                 </tr>
               </tbody>
             </table>

           </div>
         </div>
     </div>
	</div><!--End Row-->
  </section>

 <section class="section">
  <div class="chart-container-2">
               <canvas id="barChart"></canvas>
			  </div>

	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Foydalanuvchilar jadvali
		  <div class="card-action">
       
		 </div>
     
	       <div class="table-responsive">
         <table class="table datatable">
                  <thead>
                   <tr>
                     <th  scope="col">#</th>
                     <th  scope="col">Profil <i class="bi bi-person-lines-fill"></i></th>
                     <th  scope="col">Ismi <i class="bi bi-person-lines-fill"></i></th>
                     <th  scope="col">Familyasi <i class="bi bi-person"></th>
                     <th  scope="col">Emaili <i class="fa fa-envelope-o"></i></th>
                     <th  scope="col">Telefon <i class="bi bi-telephone"></th>
                     <th  scope="col">manzil <i class="bi bi-geo-alt"></i></th>
                     <th  scope="col">Logini <i class="bi bi-globe"></i></th>
                     <th  scope="col">sanasi <i class="fa fa-calendar"></i></th> 
                     
                    <th  scope="col">Status <i class="bi bi-reception-4"></i></th>
                     <th  scope="col">Darajasi <i class="fa fa-angle-double-up"></i></th>
                     <th  scope="col">O'chirish<i class="bi bi-trash"></i></th>
                   </tr>
                   </thead><?$i=1?>
                   <tbody>
                        <?
                        if(!empty($foydalanuvchilar_jadvali))
                            foreach($foydalanuvchilar_jadvali as $userf):
                                ?>
                            <tr>

                                <td  scope="row">
                                    <?=$i?>
              
                                </td>
                                <td>
                                  <?php
                               $ism=mysqli_fetch_array(mysqli_query($conn,"Select *from users where Ism='$userf[Ism]'"));
                $sqlImg = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM profileimg WHERE unique_id='$userf[unique_id]'"));
                   if ($sqlImg ['status'] == 1) {
                     echo "  <div class='post-item clearfix'>
                     <a href='$sqlImg[location]' class='venobox' data-gall='gallery-item'><img  class='img-fluid' src='$sqlImg[location]'></a>
                     </div>";
                   } else {
                     echo "<img src='afs/profile/default-profile.jpg' alt=' :('  class='product-img'>";
                   }?>
                             
                                </td>
                              <td>
                                  <?php
                               $ism=mysqli_fetch_array(mysqli_query($conn,"Select *from users where Ism='$userf[Ism]'"));
                               echo $ism['Ism'];

                                ?>

                                </td>


                                <td>
                                    <?php
                                       $familya=mysqli_fetch_array(mysqli_query($conn,"Select *from users where fam='$userf[fam]'"));
                                       echo $familya['fam'];

                                    ?>
                                </td>

                                <td>
                               <?php $email=mysqli_fetch_array(mysqli_query($conn,"Select *from users where email='$userf[email]'"));
                            
                            ?>
                            <?php
                            echo $email['email'];?>
                                </td>
                                <td>
                                    <?php
                                   
                                      $tel=mysqli_fetch_array(mysqli_query($conn,"Select *from users where tel='$userf[tel]'"));
                                      ?>
                                       <a href="tel:<?=$tel['tel']?>">
                                      <?php
                                      echo $tel['tel'];
                                    ?></a>
                                </td>
                                
                                <td>
                                    <?php
                                       $manzil=mysqli_fetch_array(mysqli_query($conn,"Select *from users where manzil='$userf[manzil]'"));
                                       echo $manzil['manzil'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                       $login=mysqli_fetch_array(mysqli_query($conn,"Select *from users where Login='$userf[Login]'"));
                                       echo $login['Login'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                       $sana=mysqli_fetch_array(mysqli_query($conn,"Select *from users where sana='$userf[sana]'"));
                                       echo $sana['sana'];
                                    ?>
                                </td>
                                <td>
                                  <?php
                               $status=mysqli_fetch_array(mysqli_query($conn,"Select *from users where status='$userf[status]'"));
                               echo $status['status'];

                                ?>

                                </td>
                                <td>
                                    <?php
                                       $daraja=mysqli_fetch_array(mysqli_query($conn,"Select *from users where daraja='$userf[daraja]'"));
                                       if($userf['unique_id']==$Farrux['unique_id']) {
                                         echo '  <small class="badge float-right badge-dark"> Creator Admin <i class="bi bi-star"></i> </small>';

                                       }else{        
if($daraja['daraja']==3){
  echo '  <small class="badge float-right badge-dark">Admin <i class="bi bi-star"></i> </small>';
}else{
  echo '  <small class="badge float-right badge-light">Foydalanuvchi <i class="bi bi-person"></i></small>';
}}

                                    ?>
                                </td>
                                <td>
                        
                                  <?php
                               $unique_id=mysqli_fetch_array(mysqli_query($conn,"Select *from users where unique_id='$userf[unique_id]'"));
                              
                               if(!($unique_id['unique_id']==$foy) and (!($userf['unique_id']==$Farrux['unique_id'])))
                               {
                               echo "
                               

                               <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#verticalycentered1'>
                                 O'chirish <i class='bi bi-trash'></i>
                               </button>
                               <div class='modal fade' id='verticalycentered1' tabindex='-1'>
                                 <div class='modal-dialog modal-dialog-centered'>
                                   <div class='modal-content'>
                                     <div class='modal-header'>
                                       <h5 class='modal-title'>  Eslatma 
                                    
                                         o'qib chiqing <i class='bi bi-exclamation-octagon'></i></h5>
                                       <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                     </div>
                                     <div class='modal-body'>
                                   
                                 Foydalanuvchini haqiqatdan ham saytdan o'chirmoqchimisiz? <i class='icon-user'></i><br>
                                      Ushbu o'chiryotgan foydalanuvchingiz <br> ortiq shu hisob orqali saytga tashrif buyura olmaydi !  <i class='bi bi-globe'></i><br>
                                
                                     Yuqoridagi barchasiga rozi bo'lsangiz <br> unda 'Foydalanuvchini o'chirish <i class='bi bi-trash'></i>' tugmasini bosing <br>
                                     Aks holda fikringizni o'zgartirsangiz 'Yopish <i class='bi bi-file-earmark-x'></i>' tugmasini bosing.
                                     </div>
                                     <div class='modal-footer'>
                                     <button type='button' class='btn btn-primary' data-bs-dismiss='modal'>Yopish <i class='bi bi-file-earmark-x'></i></button><br>
                                     <a href='foydel.php?unique_id=$userf[unique_id];'> 
                                       <button type='submit' class='btn btn-danger'>Foydalanuvchini o'chirish <i class='bi bi-trash'></i></i></button></a>
                                     </div>
                                   </div>
                                 </div>
                               </div>


                               
                              
                               
                               
                               
                               
                               
                               
                               
                               ";
                               }else{
                                echo "
                               

                                <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#verticalycentered'>
                                Admin <i class='icon-user'></i>
                                </button>
                                <div class='modal fade' id='verticalycentered' tabindex='-1'>
                                  <div class='modal-dialog modal-dialog-centered'>
                                    <div class='modal-content'>
                                      <div class='modal-header'>
                                        <h5 class='modal-title'>O'zingizni profilingiz va <br>Creator profilini o'chirolmaysiz <i class='bi bi-emoji'></i></h5>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                      </div>
                                      <div class='modal-body'>
                                    
                                  O'zingizni profilingini o'chirmoqchimisiz? <i class='icon-user'></i><br>
                                       Unda Creator adminga murojat qiling !  <i class='ri-vip-crown-line'></i><br>
                                 
                                      Yuqoridagiga rozi bo'lsangiz <br> unda 'Creator Admin <i class='bi bi-star'></i>' tugmasini bosing <br>
                                      Aks holda fikringizni o'zgartirsangiz 'Yopish <i class='bi bi-file-earmark-x'></i>'
                                      <br>tugmasini bosing.
                                      </div>
                                      <div class='modal-footer'>
                                      <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Yopish <i class='bi bi-file-earmark-x'></i></button>
                                      <a href='https://instagram.com/1.isma1loff/'> 
                                        <button type='submit' class='btn btn-primary'>Creator Admin <i class='bi bi-star'></i></i></button></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
 
 
                                
                               
                                
                                
                                
                                
                                
                                
                                
                                ";
                               }
                                ?>

                                </td>


                                
                                <?$i++?>
                                
                            </tr>
                                <? endforeach ?>
                        </tbody> 
                    </table>
               </div>
	   </div>
	 </div>
	</div>
</section>




<style>
  .modal-content {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: black;
    background-clip: padding-box;
    border: 1pxsolidrgba(0,0,0,.2);
    border-radius: 0.3rem;
    outline: 0;
}
  </style>






<!--End Row--
  <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                  	<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                        </div></td>
                  
                  <td>
      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2022 <a href="https://instagram.com/1.isma1lovv_">Ismoilov Farruxbek</a>
        </div>
      </div>
    </footer>
	<!--End footer-->
	
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Sayt temasi</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Sayt rangi</p>
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
   
  </div><!--End wrapper-->
  
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap core JavaScript-->
  <script src="admin/assets/js/jquery.min.js"></script>
  <script src="admin/assets/js/popper.min.js"></script>
  <script src="admin/assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="admin/assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="admin/assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="admin/assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="admin/assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="admin/assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js --
  <script src="admin/assets/js/index.js"></script>
--><!-- Vendor JS Files -->
 
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
 

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script>





  // chart 1
	 
  var ctx = document.getElementById('chart1').getContext('2d');
		
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Andijon", "Fargona", "Toshkent", "Sirdaryo", "Samarqand", "Qashqadaryo", "Qoraqalpogiston", "Namangan", "Navoiy", "Jizzax", "Buxoro","Xorazm"  ],
        datasets: [{
          label: 'Foydalanuvchilar',
          data:  [<?=$manzilA." "?>,<?=$manzilF." "?>, <?=$manzilT." "?>, <?=$manzilSi." "?>,<?=$manzilSa." "?>,<?=$manzilQa." "?>,<?=$manzilQo." "?>,<?=$manzilNa." "?>,<?=$manzilN." "?>,<?=$manzilJ." "?>,<?=$manzilB." "?>,<?=$manzilX." "?>,<?=$manzilX." "?>],
          backgroundColor: 'white',

          borderColor: "black",
          pointRadius :"3",
          borderWidth: 1
        }, 
        {
         
        }]
      },
    options: {
      maintainAspectRatio: false,
      legend: {
        display: false,
        labels: {
        fontColor: '#ddd',  
        boxWidth:40
        }
      },
      tooltips: {
        displayColors:false
      },	
      scales: {
        xAxes: [{
        ticks: {
          beginAtZero:true,
          fontColor: '#ddd'
        },
        gridLines: {
          display: true ,
          color: "rgba(221, 221, 221, 0.08)"
        },
        }],
         yAxes: [{
        ticks: {
          beginAtZero:true,
          fontColor: '#ddd'
        },
        gridLines: {
          display: true ,
          color: "rgba(221, 221, 221, 0.08)"
        },
        }]
       }

     }
    });  





// chart 2

var ctx = document.getElementById("chart2").getContext('2d');
     var myChart = new Chart(ctx, {
       type: 'doughnut',
       data: { 
         labels: ["Andijon", "Fargona", "Toshkent", "Sirdaryo", "Samarqand", "Qashqadaryo", "Qoraqalpogiston", "Namangan", "Navoiy", "Jizzax", "Buxoro",  "Xorazm",],
         datasets: [{
           backgroundColor: [
             "black",
             "white",
             "red",
             "blue",
             "rgba(222, 221, 222, 0.70)",
             "orange",
             "yellow",
             "pink",
             "blue",
             "rgba(278, 123, 222, 0.40)",
             "rgba(87, 223, 222, 0.90)",
             "rgba(98, 224, 22, 0.70)",
             "rgba(222, 228, 222, 0.60)",
           ],
           data: [<?=$manzilA." "?>,<?=$manzilF." "?>, <?=$manzilT." "?>, <?=$manzilSi." "?>,<?=$manzilSa." "?>,<?=$manzilQa." "?>,<?=$manzilQo." "?>,<?=$manzilNa." "?>,<?=$manzilN." "?>,<?=$manzilJ." "?>,<?=$manzilB." "?>,<?=$manzilX." "?>],
           borderWidth: [0, 0, 0, 0, 0, 0, 0, 0]
         }]
       },
     options: {
       maintainAspectRatio: false,
        legend: {
        position :"bottom",	
        display: true,
           labels: {
           fontColor: '#ddd',  
           boxWidth:15
          }
       }
       ,
       tooltips: {
         displayColors:true
       }
        }
     });
   


            </script>

<?=include_once "includes/footer.php";?>
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="Restaurant/assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
</body>
</html>
