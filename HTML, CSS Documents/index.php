<!DOCTYPE html>

<link rel="stylesheet" href="index.css">

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
                <a class="nav-link" href="Homepage.html">Login</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="map.html">Karte</a>
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



    <div class="instructions">
      <h1>Willkommen bei B-Ball Connect!</h1>
      <p>
        Gib hier deinen Namen ein um fortzufahren:
      </p>
    </div>


    <div class="inputs">
      <form id="form" action="contact.php" method="POST">
        <div class="namensschild">
          <input autofocus id="name" name="name" type="text" class="form-control" placeholder="Dein Name" aria-label=".form-control-lg example" required>
        </div>


        <div id="playingtime" class="form-text">Wie lange planst du ungefähr zu spielen?</div>

        <div class="kästchen">
          <div class="mb-3 form-check">
            <input class="form-check-input" type="radio" name="playingtime" value="30" id="30mins">
            <label class="form-check-label" for="30mins">30 minuten</label>
          </div>

          <div class="mb-3 form-check">
            <input class="form-check-input" type="radio" name="playingtime" value="60" id="1 Stunde">
            <label class="form-check-label" for="1h">1 Stunde</label>
          </div>

          <div class="mb-3 form-check">
            <input class="form-check-input" type="radio" name="playingtime" value="90" id="1.5 Stunden">
            <label class="form-check-label" for="1.5h">1.5 Stunden</label>
          </div>

          <div class="mb-3 form-check">
            <input class="form-check-input" type="radio" name="playingtime" value="120" id="2 Stunden">
            <label class="form-check-label" for="2h">2 Stunden</label>
          </div>

          <div class="submitbutton">
            <button id="myButton" type="submit" class="btn btn-primary">Senden</button>
          </div>
        </div>

      </form>
    </div>









    <div class="image">
      <img src="/HTML, CSS Documents/images/hoopblack.jpg" alt="Picture of a Basketballhoop" width="100%">
    </div>

    <footer>
      © May 2022 By Nico and Emanuel
    </footer>

  </div>

</body>


<script>
  document.getElementById("myButton").onclick = function() {
    location.href = "spielfeldauswahl.html";
  };

  const name = document.getElementById('name')
  form.addEventListener('submit')(e) => {
    let messages = []
    if (name.value === '' || name.value == null)
      messages.push('Name is required')
  }
</script>







</body>

</html>