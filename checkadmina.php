<?php
include "mbbt.php";
$q=$_REQUEST["q"];
if(empty($q))
{
    echo " Login Kiriting";
    return;
}
if(strlen($q)<5)
{
echo '<p style="color:red;">Kamida 5 ta belgi bo`lishi kerak <i class="ri-edit-line"></i></p>';

return;
}

$Login=mysqli_fetch_array(mysqli_query($conn,"Select *from users where Login='$q'"));

if(empty($Login))
echo  '<p style="color:Yellow;"> Bu Login bo`sh <i class="ri-emotion-laugh-line"></i></p>';
else
echo '<p style="color:red;">Kechirasiz, bu login band <i class="ri-emotion-unhappy-line"></i></p>';

?>
