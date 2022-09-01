<?php
include "Mbbt.php";
unset($_SESSION['unique_id']);
$login=$_POST['Login'];
$parol=$_POST['password'];
$md5parol = md5($parol);
$user=mysqli_fetch_array(mysqli_query($conn,"Select *from users where Login='$login' and parol='$md5parol'"));
if (!empty($user))
{
    $_SESSION['unique_id']=$user['unique_id'];
    $_SESSION['daraja']=$user['daraja'];
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE Login = '{$login}'");
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
 
    $status = "Onlayn";
    $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
    if($sql2){
        $_SESSION['unique_id'] = $row['unique_id'];
     }
}
    if ($user['daraja']==3)
    {
     header("Location:fadmin.php");
    }
    elseif ($user['daraja']==1)
    {
        header("Location:index.php");
    }
    elseif ($user['daraja']==0)
    {
        header("Location:404.php");
    }
}
 else
 {
     $_SESSION['xabar']="Voy, login yoki parol xatoku ! <i class='bi bi-emoji-frown'></i>";
     header("Location:login.php");
 }

?>