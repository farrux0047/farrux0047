<?php
    session_start();
    include_once "mbbt.php";

    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (Ism LIKE '%{$searchTerm}%' OR fam LIKE '%{$searchTerm}%') ";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){  
    }
        else{
        $output= 'Qidiruv sozingizga tegishli foydalanuvchi topilmadi';
        header("index.php");
    }
    echo   $output;
?>