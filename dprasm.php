<?php
include "mbbt.php";
$foy=$_SESSION['unique_id'];
$Delete=mysqli_query($conn, "DELETE FROM profileimg WHERE unique_id='$foy'");

if($Delete === TRUE){


    $_SESSION['xabari']="<h2 class='btn btn-danger btn-success'>Rasm o'chirildi !</h2>";
    header("Location:profile.php");
}else{
    $_SESSION['xabare']="<h2>Rasm o'chirilmadi </h2>!";
    header("Location:profile.php");
}





?>