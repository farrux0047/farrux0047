<?php
include "mbbt.php";
  $video_id = mysqli_real_escape_string($conn, $_GET['video_id']);
  if(isset($video_id)){
 $sql=mysqli_query($conn,"DELETE FROM video WHERE unique_id=$video_id");

    
   

if ($sql === TRUE) {
  $_SESSION["xabar"]="Videoni muvaffaqiyatli o'chirdingiz";
header("location:index.php?succes");
  
}} else {
  $_SESSION["xabari"]="Xatolik yuz berdi" ;
  header("location:index.php?error");
}

?>