<?php
include "mbbt.php";
include "qoshimcha.php";
$foy=$_SESSION['foy'];
If(!(($_SESSION['daraja'])==3))
{
header("Location:404x.php");
}

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
        if(strlen($log)>=4)
        
        {
            $status = "Aktiv";
            $time = time();
        $ran_id = rand(time(), 100000000);
        $md5parol = md5($parol);
        $yozish=mysqli_query($conn,"INSERT INTO users(unique_id,Ism,fam,email,tel,manzil,Login,parol,daraja,status,sana)  VALUES     ('$ran_id','$ism','$fam','$email','$nomer','$manzil','$log','$md5parol','3','$status','$date')");
        }
        else
        {
            $_SESSION['admin_yoz']="Loginda kamida 5 ta belgi bo'lish kerak <i class='bi bi-pencil-square
            '></i>";
            header("Location:addminplus.php");

        }
        if($yozish===TRUE)
        {

            $_SESSION['xabar1']="<script alert='<h6>Yangi admin qo'shildi  <i class='ri-vip-crown-line'></i></h6>'></script>";
            header("Location:fadmin.php");

        }
    }
    else
{

        $_SESSION['admin_yoz']="Bunday login ro'yhatdan o'tgan";
        header("Location:addminplus.php");
    

}



}

else
{
    $_SESSION['admin_yoz']="Parollar bir xil emas";
    header("Location:addminplus.php");
}

?>