<?php
include "mbbt.php";
$date = date('Y/m/d');
$nomi=htmlentities($_POST["v_name"],ENT_QUOTES,"UTF-8");
$status=htmlentities($_POST["v_status"],ENT_QUOTES,"UTF-8");
$sahifa=$_POST['Sahifa'];
$file_size=$_FILES["fayl_elek"]["size"];
$file_temp=$_FILES["fayl_elek"]["tmp_name"];
$file_name = $_FILES["fayl_elek"]["name"];
$erors=[];

if($file_size <= 20000000){
	$time = time();
	$ran_id = rand(time(), 100000000);
			$file = explode('.', $file_name);
			$end = end($file);
			$allowed_ext = array('avi', 'flv', 'wmv', 'mov', 'mp4');
			if(in_array($end, $allowed_ext)){
				$name=$nomi;
				$location = 'AFS/video/'.$ran_id.".".$end;
				$comp=move_uploaded_file($file_temp, $location);
				$yozish=mysqli_query($conn, "INSERT INTO video(unique_id,video_name,video_status,location,sahifa,sana) VALUES('$ran_id','$name','$status', '$location','$sahifa','$date')");
}if ($yozish === TRUE ) {

		$_SESSION['xabar']="<h2>Video saqlandi <i class='bi bi-emoji-heart-eyes'></i></h2>";
		header("Location:vyuklash.php");

	}
}

	
	else
	{
		$_SESSION['xabari']="<h2>Video formati to'gri kelmadi <i class='bi bi-emoji-frown'></i></h2>";
		header("Location:vyuklash.php");

}





?>