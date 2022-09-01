<?php
include "mbbt.php";
  $status_id = mysqli_real_escape_string($conn, $_GET['stata_id']);
  if(isset($status_id)){
 $sql=mysqli_query($conn,"DELETE FROM status WHERE Id=$status_id");

    
   

if ($sql === TRUE) {
  $_SESSION["xabar"]="Statistikani muvaffaqiyatli o'chirdingiz";
header("location:index.php?succes");
  
}} else {
  $_SESSION["xabari"]="Xatolik yuz berdi" ;
  header("location:index.php?error");
}
