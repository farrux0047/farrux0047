<?php
    session_start();
    include_once "mbbt.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} ORDER BY user_id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "Hozircha xabarlar yoq";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "chatapp/php/data.php";
    }
    echo $output;
?>