<?php
include "mbbt.php";


$date = date('d/m/Y');
$ism=htmlentities($_POST["name"],ENT_QUOTES,"UTF-8");

$email=htmlentities($_POST["email"],ENT_QUOTES,"UTF-8");

$Xabar=htmlentities($_POST["xabar"],ENT_QUOTES,"UTF-8");

       $yozish=mysqli_query($conn,"INSERT INTO sms(user,Xabar,email,sana)  VALUES     ('$ism','$Xabar','$email','$date')");
      if($yozish===TRUE)
        {

            $_SESSION['users']="Xabaringiz yuborildi <i class='bi bi-pencil-square
            '></i>";
            header("Location:contact.php");

        }
    
    
      else
        {
            $_SESSION['userx']="Xabaringiz yuborilmadi <i class='bi bi-pencil-square
            '></i>";
            header("Location:contact.php");

        }
      

?>