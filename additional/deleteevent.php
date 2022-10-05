<?php
include_once 'additional/connect.php';




$sql = "DELETE FROM `users` 
    WHERE `playingtime` = 30 
    AND `logintime` < DATE_ADD(CURRENT_TIMESTAMP, INTERVAL -30 MINUTE)";
$rs = mysqli_query($conn, $sql);

$sql = "DELETE FROM `users` 
    WHERE `playingtime` = 60 
    AND `logintime` < DATE_ADD(CURRENT_TIMESTAMP, INTERVAL -60 MINUTE)";
$rs = mysqli_query($conn, $sql);

$sql = "DELETE FROM `users` 
    WHERE `playingtime` = 90 
    AND `logintime` < DATE_ADD(CURRENT_TIMESTAMP, INTERVAL -90 MINUTE)";
$rs = mysqli_query($conn, $sql);

$sql = "DELETE FROM `users` 
    WHERE `playingtime` = 120 
    AND `logintime` < DATE_ADD(CURRENT_TIMESTAMP, INTERVAL -120 MINUTE)";
$rs = mysqli_query($conn, $sql);
