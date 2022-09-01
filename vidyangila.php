<?php
include "Mbbt.php";

if(empty($_SESSION['foy'])) 
{ 
header("Location:login.php"); 
} 
$foy=$_SESSION['unique_id'];

  $video_id = mysqli_real_escape_string($conn, $_GET['video_id']);
  $Video_name = mysqli_real_escape_string($conn, $_POST['video_ismi']);
  $Video_status = mysqli_real_escape_string($conn, $_POST['video_status']);
  $Video_location = mysqli_real_escape_string($conn, $_POST['video_location']);
  $Video_sahifa = mysqli_real_escape_string($conn, $_POST['video_sahifa']);
  $Video_sana = mysqli_real_escape_string($conn, $_POST['video_sana']);

  if(isset($video_id)){

    $sql=mysqli_query($conn,"UPDATE video SET video_name=' $Video_name', video_status='$Video_status', location='$Video_location', sahifa='$Video_sahifa', sana='$Video_sana'  WHERE unique_id='$video_id'"); 
   

    
   
  }
if ($sql === TRUE) {
  $_SESSION["xabar"]="Videoni muvaffaqiyatli o'chirdingiz";
header("Location:index.php?succes");
  
}
 else {
  $_SESSION["xabari"]="Xatolik yuz berdi" ;
  header("Location:index.php?error");
}

?>