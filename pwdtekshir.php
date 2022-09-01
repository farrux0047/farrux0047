<?php
include "mbbt.php";



$p=$_REQUEST["p"];
if(empty($p))
{
    echo " Parolni Kiriting";
    return;
}
if(strlen($p)<6)
{
echo '<p style="color:red;">Kamida 6 ta belgi bo`lishi kerak</p>';

return;
}
?>
