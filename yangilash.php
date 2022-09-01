<?php 
include "mbbt.php"; 

$userp=$_POST['parol']; 
 
if(empty($_SESSION['foy'])) 
{ 
header("Location:login.php"); 
} 
$foy=$_SESSION['unique_id'];
 
$fam=htmlentities($_POST["fam"],ENT_QUOTES,"UTF-8"); 
$ism=htmlentities($_POST["Ism"],ENT_QUOTES,"UTF-8"); 
$manzil=htmlentities($_POST["manzil"],ENT_QUOTES,"UTF-8"); 
$tel=htmlentities($_POST["tel"],ENT_QUOTES,"UTF-8"); 
$email=htmlentities($_POST["email"],ENT_QUOTES,"UTF-8"); 
$parol=($_POST['parol1']); 
$parol2=($_POST['parol2']); 
$parol3=($_POST['parol3']);
 
 $md5parol = md5($parol);
if(empty($parol)) 
{ 
        $yangilash=mysqli_query($conn,"UPDATE users SET Ism='$ism',fam='$fam',email='$email', tel='$tel' WHERE unique_id='$foy'"); 
 
        $_SESSION['xabare']="<h5>Malumot saqlandi <i class='bi bi-emoji-heart-eyes'></i></h5>"; 
        header("Location:profile.php"); 
    }

    elseif(!($md5parol==$userp)) 
    { 
  
   
        $_SESSION['xabari']="<h5>Eski parol noto'g'ri <i class='bi bi-emoji-frown'></i></h5>"; 
header("Location:profile.php"); 
 
    } 

    elseif ($parol2==$parol3 and strlen($parol2)>=6 and strlen($parol2)<20) 
    { 
      
        $md5parol2 = md5($parol2);
$yangilash=mysqli_query($conn,"UPDATE users SET Ism='$ism',fam='$fam',email='$email', tel='$tel', parol='$md5parol2' WHERE unique_id='$foy'"); 
if($yangilash === TRUE){
$_SESSION['xabar']="<h5>Yangi parol saqlandi <i class='bi bi-emoji-heart-eyes'></i></h5>"; 
header("Location:profile.php"); 
}else{
    $_SESSION['xabari']="<h5>Parol yangilanmadi <i class='bi bi-emoji-frown'></i></h5>"; 
    header("Location:profile.php");  
}
    } 




else 
{ 
     
    $_SESSION['xabari']="<h5>Yangi parollar bir xil emas yoki <br>parollarni 6 ta dan kam qilgansiz! <i class='bi bi-emoji-frown'></i></h5>"; 
    header("Location:profile.php"); 
 
} 

 
 
 
 
?>