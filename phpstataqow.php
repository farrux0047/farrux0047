<?php
include "mbbt.php";
if(!(($_SESSION['daraja'])==3))
{
header("Location:404x.php");
}
$foy=$_SESSION['unique_id'];
$date = date('d_m_Y');
$haqida=htmlentities($_POST["haqida"],ENT_QUOTES,"UTF-8");
$snomi=htmlentities($_POST["snomi"],ENT_QUOTES,"UTF-8");
$sana=htmlentities($_POST["sana"],ENT_QUOTES,"UTF-8");
$nomi1=htmlentities($_POST["nomi1"],ENT_QUOTES,"UTF-8");
$nomi2=htmlentities($_POST["nomi2"],ENT_QUOTES,"UTF-8");
$nomi3=htmlentities($_POST["nomi3"],ENT_QUOTES,"UTF-8");
$nomi4=htmlentities($_POST["nomi4"],ENT_QUOTES,"UTF-8");
$nomi5=htmlentities($_POST["nomi5"],ENT_QUOTES,"UTF-8");
$nomi6=htmlentities($_POST["nomi6"],ENT_QUOTES,"UTF-8");
$nomi7=htmlentities($_POST["nomi7"],ENT_QUOTES,"UTF-8");
$nomi8=htmlentities($_POST["nomi8"],ENT_QUOTES,"UTF-8");
$nomi9=htmlentities($_POST["nomi9"],ENT_QUOTES,"UTF-8");
$nomi10=htmlentities($_POST["nomi10"],ENT_QUOTES,"UTF-8");
$soni1=htmlentities($_POST["soni1"],ENT_QUOTES,"UTF-8");
$soni2=htmlentities($_POST["soni2"],ENT_QUOTES,"UTF-8");
$soni3=htmlentities($_POST["soni3"],ENT_QUOTES,"UTF-8");
$soni4=htmlentities($_POST["soni4"],ENT_QUOTES,"UTF-8");
$soni5=htmlentities($_POST["soni5"],ENT_QUOTES,"UTF-8");
$soni6=htmlentities($_POST["soni6"],ENT_QUOTES,"UTF-8");
$soni7=htmlentities($_POST["soni7"],ENT_QUOTES,"UTF-8");
$soni8=htmlentities($_POST["soni8"],ENT_QUOTES,"UTF-8");
$soni9=htmlentities($_POST["soni9"],ENT_QUOTES,"UTF-8");
$soni10=htmlentities($_POST["soni10"],ENT_QUOTES,"UTF-8");
$sahifa=htmlentities($_POST['Sahifa'],ENT_QUOTES,"UTF-8");


    $yozish=mysqli_query($conn,"INSERT INTO status(nomi,snomi,mnomi,mnomi2,mnomi3,mnomi4,mnomi5,mnomi6,mnomi7,mnomi8,mnomi9,mnomi10,soni,soni2,soni3,soni4,soni5,soni6,soni7,soni8,soni9,soni10,sahifa,sana)  VALUES     ('$haqida','$snomi','$nomi1','$nomi2','$nomi3','$nomi4','$nomi5','$nomi6','$nomi7','$nomi8','$nomi9','$nomi10','$soni1','$soni2','$soni3','$soni4','$soni5','$soni6','$soni7','$soni8','$soni9','$soni10','$sahifa','$sana')");
      
       
      
   
   if ($yozish === TRUE) {
     $_SESSION["xabarstata"]="<div class='alert border-success alert-dismissible fade show' role='alert'>
     Statistika qo'shildi oka  <i class='bi bi-emoji-heart-eyes'></i>
         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
       </div>";
   header("location:stataqow.php?succes");
     
   } else {
     $_SESSION["xabarstataeror"]="<div class='alert border-danger alert-dismissible fade show' role='alert'>
    Oka xatolik yuz berdiyu <i class='bi bi-emoji-frown'></i>
     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
     </div>" ;
     header("location:stataqow.php?error");
   }

?>