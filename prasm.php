<?php
include "mbbt.php";
$user=$_POST['Id'];
$foy=$_SESSION['unique_id'];
$file_size=$_FILES["profil"]["size"];
$file_temp=$_FILES["profil"]["tmp_name"];
$file_name = $_FILES["profil"]["name"];
$query = mysqli_query($conn,"SELECT * FROM profileimg WHERE unique_id='$foy'");
$erors=[];

if($file_size < 50000000){
			$file = explode('.', $file_name);
			$end = end($file);
			$allowed_ext = array('jpg', 'jpeg', 'png', 'gif');
			if(in_array($end, $allowed_ext)){	
				 if(mysqli_num_rows($query) == 0){
					$location = 'AFS/profile/'.$foy.".".$end;
					$comp=move_uploaded_file($file_temp, $location);
					$yozish=mysqli_query($conn, "INSERT INTO profileimg(unique_id,location,status) VALUES('$foy','$location','1')");
				                                }
	            else{
				$location = 'AFS/profile/'.$foy.".".$end;
				$comp=move_uploaded_file($file_temp, $location);
				$yozish=mysqli_query($conn,"UPDATE profileimg SET  location='$location' Where  unique_id='$foy'");
                    }
                                           }
                         }     
					 
if ($yozish === TRUE ) {

	$_SESSION['xabar']="<h2>Rasm saqlandi <i class='bi bi-emoji-heart-eyes'></i></h2>";
	header("Location:profile.php");


}
else
{
	$_SESSION['xabari']="<h2>Rasm formati to'gri kelmadi <i class='bi bi-emoji-frown'></i></h2>
	<h5>faqat ushbu '.jpg' '.jpeg' '.png'  formatdagi rasmlar qollaniladi!</h5>";
	header("Location:profile.php");

}                    



?>