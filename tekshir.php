<?php
include "mbbt.php";
$date = date('Y/m/d');
$ism=htmlentities($_POST["name"],ENT_QUOTES,"UTF-8");
$email=htmlentities($_POST["email"],ENT_QUOTES,"UTF-8");
$log=htmlentities($_POST["username"],ENT_QUOTES,"UTF-8");
$parol=$_POST["password"];
$parol1=$_POST["re-password"];
$fam=htmlentities($_POST["fam"],ENT_QUOTES,"UTF-8");
$manzil=htmlentities($_POST["manzil"],ENT_QUOTES,"UTF-8");
$nomer=htmlentities($_POST["tel"],ENT_QUOTES,"UTF-8");
if($parol==$parol1)
{
$bilish=mysqli_query($conn,"Select *from users where login='$log'");
if(mysqli_num_rows($bilish)==0)
    {
        if(strlen($log)>6)
        {
            
            
        $time = time();
        $ran_id = rand(time(), 100000000);
        $status = "Aktiv";
        $md5parol = md5($parol);
        $yozish=mysqli_query($conn,"Insert Into users(unique_id,Ism,fam,email,tel,manzil,Login,parol,daraja,status,sana)  VALUES     ('$ran_id','$ism','$fam','$email','$nomer','$manzil','$log','$md5parol','1','$status','$date')");
        $file_size=$_FILES["profil"]["size"];
        $file_temp=$_FILES["profil"]["tmp_name"];
        $file_name = $_FILES["profil"]["name"];
        $erors=[];
        if($file_size < 50000000){
                    $file = explode('.', $file_name);
                    $end = end($file);
                    $allowed_ext = array('jpg', 'jpeg', 'png','gif');
                    if(in_array($end, $allowed_ext)){	
                        $location = 'AFS/profile/'.$ran_id.".".$end;
                        $comp=move_uploaded_file($file_temp, $location);
                        $yozish=mysqli_query($conn, "INSERT INTO profileimg(unique_id,location,status) VALUES('$ran_id','$location','1')");
        }}
        
    }
        else
        {
            $_SESSION['sinf_yozish']="Login va parolda kamida 5 ta belgi bo'lish kerak <i class='bi bi-pencil-square
            '></i>";
            header("Location:register.php");

        }
        if($yozish===TRUE)
        {
            $_SESSION['xabarl']="<h4>Malumot saqlandi <i class='bi bi-emoji-heart-eyes'></i></h4>";
            header("Location:login.php");
        }
    }
    else
{
        $_SESSION['sinf_yozish']="Bunday login ro'yhatdan o'tgan";
        header("Location:register.php");
}
}

else
{
    $_SESSION['sinf_yozish']="Parollar bir xil emas";
    header("Location:register.php#");
}

?>