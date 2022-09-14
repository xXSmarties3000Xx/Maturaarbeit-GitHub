<!DOCTYPE html>

<link rel="stylesheet" href="map.css">

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

  <body>

    <div class="description">
      <div class="headtitle">
        Karte
      </div>
    </div>

    <div class="karte">
      <img src="/img/KarteBaden2.png" width="100%" alt="Map">
      <div class="standorte">
        <img src="/HTML, CSS Documents/images/pin.png" class="pin1">
        <img src="/HTML, CSS Documents/images/pin.png" class="pin2">
        <img src="/HTML, CSS Documents/images/pin.png" class="pin3">
        <img src="/HTML, CSS Documents/images/pin.png" class="pin4">
        <img src="/HTML, CSS Documents/images/pin.png" class="pin5">
      </div>

      <div class="nummern">
        <p class="nummer1">1</p>
        <p class="nummer2">2</p>
        <p class="nummer3">3</p>
        <p class="nummer4">4</p>
        <p class="nummer5">5</p>
      </div>

    </div>

    <div class="listdescription">
      <p>Hier hast du eine Übersicht von allen verfügbaren Plätzen und siehst, wie viele Spieler momentan dort spielen:</p>
    </div>


    <table class="table table-sucess table-striped">
      <thead>
        <th scope="col">Spielfeld</th>
        <th scope="col">Spieler Anwesend</th>
      </thead>
      <?php
      include_once 'additional/connect.php';

      // count players on field Baden
      $query = "SELECT id FROM users WHERE place='Baden';";
      $query_run = mysqli_query($conn, $query);

      $anzBaden = mysqli_num_rows($query_run);

      $query = "SELECT id FROM users WHERE place='Nussbaumen';";
      $query_run = mysqli_query($conn, $query);

      $anzNussbaumen = mysqli_num_rows($query_run);

      $query = "SELECT id FROM users WHERE place='Wettingen';";
      $query_run = mysqli_query($conn, $query);

      $anzWettingen = mysqli_num_rows($query_run);

      $query = "SELECT id FROM users WHERE place='Burghalde';";
      $query_run = mysqli_query($conn, $query);

      $anzBurghalde = mysqli_num_rows($query_run);

      $query = "SELECT id FROM users WHERE place='Dättwil';";
      $query_run = mysqli_query($conn, $query);

      $anzDättwil = mysqli_num_rows($query_run);
      ?>

      <tbody>
        <tr class="nussbaumen">
          <th scope="row">1.<a class="links" href="spielfeld3.php">Sportanlage Nussbaumen</a></th>
          <td class="anzahlspieler"><?php echo $anzNussbaumen ?></td>
        </tr>
        <tr class="wettingen">
          <th scope="row">2.<a class="links" href="spielfeld4.php">Kantonsschule Wettingen</a></th>
          <td class="anzahlspieler"><?php echo $anzWettingen ?></td>
        </tr>
        <tr class="baden">
          <th scope="row">3.<a class="links" href="spielfeld1.php">Kantonsschule Baden</a></th>
          <td class="anzahlspieler"><?php echo $anzBaden ?></td>
        </tr>
        <tr class="burghalde">
          <th scope="row">4.<a class="links" href="spielfeld5.php">Schulhaus Burghalde</a></th>
          <td class="anzahlspieler"><?php echo $anzBurghalde ?></td>
        </tr>
        <tr class="dättwil">
          <th scope="row">5.<a class="links" href="spielfeld2.php">Autobahnbrücke Dättwil</a></th>
          <td class="anzahlspieler"><?php echo $anzDättwil ?></td>
        </tr>

      </tbody>
    </table>



  </body>


</div>


</html>