<?php
session_start();
?>


<!DOCTYPE html>

<link rel="stylesheet" href="spielfeld.css">

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



<div class="wrapper">

  <body>
    <?php
    include_once 'additional/connect.php';
    $place = $_POST['place'];
    $nameofplayer = $_SESSION['nameofplayer'];

    $sql = "UPDATE users
    SET 
        place = '$place'
    WHERE
        name = '$nameofplayer';";
    $rs = mysqli_query($conn, $sql);

    ?>
    <header>

      <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

              <li class="nav-item">
                <a class="nav-link" href="index.php">Login</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="map.php">Karte</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="about.html">Über uns</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

      <div class="logo">
        <p>B-Ball Connect</p>
      </div>

    </header>


    <div class="title">
      <p>Du hast dich für "Schulhaus Burghalde" entschieden</p>
    </div>


    <div class="image">
      <img src="http://localhost/bballconnect/Maturaarbeit-GitHub/img/burghalde.jpeg" alt="none" width="100%">
    </div>

    <ul class="spielerliste">
      <p>Anwesende Spieler:</p>
      <?php
      // display player on field
      $sql = "SELECT * FROM users WHERE place='Burghalde';";
      $rs = mysqli_query($conn, $sql);
      $rsCheck = mysqli_num_rows($rs);

      if ($rsCheck > 0) {
        while ($row = mysqli_fetch_assoc($rs)) {
          echo '<li> ' . $row['name'] . ' </li>';
        }
      }


      // count players on field
      $query = "SELECT id FROM users WHERE place='Burghalde';";
      $query_run = mysqli_query($conn, $query);

      $row2 = mysqli_num_rows($query_run);

      ?>
    </ul>

    <div class="btn-container">
      <button class="Button1" onclick="goback()">Anderes Spielfeld wählen
        <button class="Button2" onclick="Karte()">Zur Übersicht
    </div>

    <footer>
      © May 2022 By Nico and Emanuel
    </footer>

  </body>
</div>

<script>
  function goback() {
    location.href = "spielfeldauswahl.php";
  }

  function Karte() {
    location.href = "map.php";
  }
</script>

</html>