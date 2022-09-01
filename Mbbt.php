<?php
session_start();
$server_nomi="127.0.0.1";
$user_nomi="root";
$user_password="root";
$my_db="Geografiya";

$conn = new mysqli($server_nomi, $user_nomi, $user_password, $my_db);


if ($conn->connect_error)
{
    die("Bazaga ulanishni iloji bo`lmadi!!!: " . $conn->connect_error);
}

?>