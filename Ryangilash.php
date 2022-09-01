<?php
include "mbbt.php";
$rasm=$_POST['rasm_id'];
if(empty($_SESSION['foy']))
{
header("Location:login.php");
}
elseif(!($_SESSION['daraja']=='1'))
header("Location:login.php");


$rasm_name=htmlentities($_POST['rasm_name'],ENT_QUOTES,"UTF-8");
$rasm_status=htmlentities($_POST['rasm_status'],ENT_QUOTES,"UTF-8");
$rasm=htmlentities($_POST['location'],ENT_QUOTES,"UTF-8");
if(empty($rasm))
{
        $yangilash=mysqli_query($conn,"UPDATE rasm SET rasm_name='$rasm_name', rasm_status='$rasm_status' WHERE rasm_id='$rasm'");

   if ($yangilash === TRUE ) {
    $_SESSION['xabar']="<h5>Malumot saqlandi <i class='bi bi-emoji-heart-eyes'></i></h5>";
    header("Location:profile.php");
   }
   
   
    }
    else
    {
 
  
        $_SESSION['xabari']="<h5>Malumot saqlanmadi <i class='bi bi-emoji-frown'></i></h5>";
header("Location:profile.php");

    }


header("Location:admin.php");




?>