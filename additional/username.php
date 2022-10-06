<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "test1";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


$name = $_POST['name'];
$_SESSION['nameofplayer'] = $name;

if (isset($_POST) & !empty($_POST)) {

    $sql = "SELECT * FROM users WHERE name = '$name'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        // already logged in, show overview
        header("Location: http://localhost/bballconnect/Maturaarbeit-GitHub/loggedin.php");
        die();
    }
}
