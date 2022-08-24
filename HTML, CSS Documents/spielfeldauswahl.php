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
  $con = mysqli_connect('localhost', 'root', '', 'test1');
  $name = $_POST['name'];
  $playingtime = $_POST['playingtime'];

  $sql = "INSERT INTO `users` (`Id`, `name`, `playingtime`) VALUES ('0', '$name', '$playingtime')";
  $rs = mysqli_query($con, $sql);
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
      <div class="btn-container">
        <button class="Button1" onclick="spielfeld1()">Auswählen
      </div>

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
      <div class="btn-container">
        <button class="Button2" onclick="spielfeld2()">Auswählen
      </div>

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
      <div class="btn-container">
        <button class="Button3" onclick="spielfeld3()">Auswählen
      </div>

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
      <div class="btn-container">
        <button class="Button4" onclick="spielfeld4()">Auswählen
      </div>

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
      <div class="btn-container">
        <button class="Button5" onclick="spielfeld5()">Auswählen
      </div>

    </div>

    <div class="topcosmetic6">
    </div>









    <footer>
      © May 2022 By Nico and Emanuel
    </footer>







  </div>

  <script>
    function spielfeld1() {
      location.href = "spielfeld1.html";
    }

    function spielfeld2() {
      location.href = "spielfeld2.html";
    }

    function spielfeld3() {
      location.href = "spielfeld3.html";
    }

    function spielfeld4() {
      location.href = "spielfeld4.html";
    }

    function spielfeld5() {
      location.href = "spielfeld5.html";
    }
  </script>
</body>


</html>