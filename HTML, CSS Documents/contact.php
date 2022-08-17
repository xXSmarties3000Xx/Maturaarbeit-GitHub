<?php
$con = mysqli_connect('localhost', 'root', '', 'test1');
$name = $_POST['name'];
$playingtime = $_POST['playingtime'];

$sql = "INSERT INTO `users` (`Id`, `name`, `playingtime`) VALUES ('0', '$name', '$playingtime')";
$rs = mysqli_query($con, $sql);

if ($rs) {
    echo $name;
}
