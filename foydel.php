<?php
include "mbbt.php";
if(!(($_SESSION['daraja'])==3))
{
header("Location:404x.php");
}
  $video_id = mysqli_real_escape_string($conn, $_GET['unique_id']);
  if(isset($video_id)){
 $sql=mysqli_query($conn,"DELETE FROM users WHERE unique_id=$video_id");

    
   

if ($sql === TRUE) {
  $_SESSION["xabar1"]="Foydalanuvchini muvaffaqiyatli o'chirdingiz";
header("location:fadmin.php?succes");
  
}} else {
  $_SESSION["xabar1"]="Xatolik yuz berdi" ;
  header("location:fadmin.php?error");
}

?>