<?php
if(!(isset($_SESSION['foy'])) or (empty($_SESSION['foy'])))
{
header("Location:login.php");
}




?>