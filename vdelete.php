<?php
include "mbbt.php";
$video_id=$_POST['video_id'];

// sql to delete a record
$sql =mysqli_query("DELETE FROM video WHERE video_id=$video_id");

if ($sql === TRUE) {
  $_SESSION["xabar"] "Record deleted successfully";
} else {
  $_SESSION["xabari"] "Error deleting record" ;
}

header("Location:admin.php");
?>