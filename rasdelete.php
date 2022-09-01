<?php
include "mbbt.php";
  $rasm_id = mysqli_real_escape_string($conn, $_GET['rasm_id']);
  if(isset($rasm_id)){
 $sql=mysqli_query($conn,"DELETE FROM rasm WHERE unique_id=$rasm_id");

    
   

if ($sql === TRUE) {
  $_SESSION["xabar"]="Rasmni muvaffaqiyatli o'chirdingiz";
header("location:index.php?succes");
  
}} else {
  $_SESSION["xabari"]="Xatolik yuz berdi" ;
  header("location:index.php?error");
}

?>