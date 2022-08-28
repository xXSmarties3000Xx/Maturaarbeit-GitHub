<!DOCTYPE html>

<link rel="stylesheet" href="spielfeldauswahl.css" />

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
  <?php
  include_once 'additional/connect.php';
  $name = $_POST['name'];
  $playingtime = $_POST['playingtime'];

  $sql = "INSERT INTO `users` (`Id`, `name`, `playingtime`) VALUES ('0', '$name', '$playingtime')";
  $rs = mysqli_query($conn, $sql);
  ?>

  <div id="wrapper">

    <header>
      <div class="logo">
        <p>B-Ball Connect</p>
      </div>
    </header>


    <div class="leftsidebar"></div>
    <div class="rightsidebar"></div>




    <div class="weisserbalken">
      <div class="greeting">
        <p>
          <?php
          if ($rs) {
            echo "Hallo $name";
          }
          ?>
        </p>
      </div>

      <div class="question">
        <p>Auf welchem Feld möchtest du spielen?</p>
      </div>
    </div>




    <div class="topcosmetic"></div>





    <div class="Spielfeld1">

      <div class="Titel1">
        Kantonsschule Baden:
      </div>

      <div class="Bild1">
        <img src="/HTML, CSS Documents/images/Baden.jpeg" alt="none" width="100%" height="100%">
      </div>
      <form action="spielfeld1.php" method="POST">
        <div class="btn-container">
          <button name="place" value="Baden" class="Button1">Auswählen
        </div>
      </form>


    </div>

    <div class="topcosmetic2">
    </div>

    <div class="Spielfeld2">

      <div class="Titel2">
        Dättwil Autobahnbrücke:
      </div>

      <div class="Bild2">
        <img src="/HTML, CSS Documents/images/Dättwil.jpeg" alt="none" width="100%" height="100%">
      </div>
      <form action="spielfeld2.php" method="POST">
        <div class="btn-container">
          <button class="Button2">Auswählen
        </div>
      </form>

    </div>

    <div class="topcosmetic3">
    </div>

    <div class="Spielfeld3">

      <div class="Titel3">
        Sportanlage Nussbaumen:
      </div>

      <div class="Bild3">
        <img src="/HTML, CSS Documents/images/Nussbaumen.jpeg" alt="none" width="100%" height="100%">
      </div>
      <form action="spielfeld3.php" method="POST">
        <div class="btn-container">
          <button class="Button3">Auswählen
        </div>
      </form>

    </div>

    <div class="topcosmetic4">
    </div>

    <div class="Spielfeld4">

      <div class="Titel4">
        Kantonsschule Wettingen:
      </div>

      <div class="Bild4">
        <img src="/HTML, CSS Documents/images/KantiWettingen.jpeg" alt="none" width="100%" height="100%">
      </div>
      <form action="spielfeld4.php" method="POST">
        <div class="btn-container">
          <button class="Button4">Auswählen
        </div>
      </form>

    </div>

    <div class="topcosmetic5">
    </div>

    <div class="Spielfeld5">

      <div class="Titel5">
        Schulhaus Burghalde:
      </div>

      <div class="Bild5">
        <img src="/HTML, CSS Documents/images/Example.jpg" alt="none" width="100%" height="100%">
      </div>
      <form action="spielfeld5.php" method="POST">
        <div class="btn-container">
          <button class="Button5">Auswählen
        </div>
      </form>

    </div>

    <div class="topcosmetic6">
    </div>









    <footer>
      © May 2022 By Nico and Emanuel
    </footer>







  </div>

  <?php
  include_once 'additional/connect.php';

  $sql = "SELECT * FROM users WHERE place='';";
  $rs = mysqli_query($conn, $sql);
  $rsCheck = mysqli_num_rows($rs);

  if ($rsCheck > 0) {
    while ($row = mysqli_fetch_assoc($rs)) {
      echo $row['name'] . "<br>";
    }
  }

  ?>

</body>


</html>