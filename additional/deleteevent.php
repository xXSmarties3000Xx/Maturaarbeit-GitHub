<?php
include_once 'additional/connect.php';

if (`playingtime` == 30) {
    $sql = "DELETE FROM `users` WHERE `logintime` < DATE_ADD(CURRENT_TIMESTAMP, INTERVAL -30 MINUTE)";
    $rs = mysqli_query($conn, $sql);
}

if (`playingtime` == 60) {
    $sql = "DELETE FROM `users` WHERE `logintime` < DATE_ADD(CURRENT_TIMESTAMP, INTERVAL -60 MINUTE)";
    $rs = mysqli_query($conn, $sql);
}
if (`playingtime` == 90) {
    $sql = "DELETE FROM `users` WHERE `logintime` < DATE_ADD(CURRENT_TIMESTAMP, INTERVAL -90 MINUTE)";
    $rs = mysqli_query($conn, $sql);
}
if (`playingtime` == 120) {
    $sql = "DELETE FROM `users` WHERE `logintime` < DATE_ADD(CURRENT_TIMESTAMP, INTERVAL -120 MINUTE)";
    $rs = mysqli_query($conn, $sql);
}
