<?php
session_start();
include_once 'additional/connect.php';
$name = $_SESSION['name'];
?>

<!DOCTYPE html>
<link rel="stylesheet" href="loggedin.css" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="HTML" />
    <meta name="description" content="Welcome to B-Ball connect" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>
        B-Ball Connect
    </title>

</head>

<body>
    <header>
        <div class="logo">
            <p>B-Ball Connect</p>
        </div>
    </header>
    <img class="image" src="http://localhost/bballconnect/Maturaarbeit-GitHub/img/sunset.jpg" alt="something went wrong with the picture">
    <div class="instructions">
        <h2><?php
            echo ("Hallo $name");
            ?></h2>
        <br>
        <p>Du bist schon eingeloggt oder dein Nutzername wurde schon verwendet!<br><br>
            Falls du schon eingeloggt bist kommst du hier zur Übersicht:
            <button onclick=MapFunction() class="Button"> Karte </button><br><br>
            Ansonsten verwende bitte einen anderen Nutzernamen im Login:
            <button onclick=LoginFunction() class="Button"> Login </button><br><br>

        </p>

    </div>
    <footer>
        © May 2022 By Nico and Emanuel
    </footer>

    <script>
        function MapFunction() {
            location.href = "map.php";
        }

        function LoginFunction() {
            location.href = "index.php";
        }
    </script>
</body>