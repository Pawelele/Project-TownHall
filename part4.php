<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Strona główna</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Urząd Miasta Katowice">
        <meta name="keywords" content="Urząd Miasta, Katowice, Urząd Katowice, Urząd Miasta Katowice">
        <link rel="stylesheet" href="style.css" type="text/css">

      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

      <!-- Importing bootstrap -->
      <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css"/>
      <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
      <script src="Bootstrap/js/bootstrap.min.js"></script>
      <!-- End Importing bootstrap -->

    </head>
    <!-- Przypisanie zmiennej z poprzedniego etapu -->
    <?php
      session_start();
      $_SESSION['name'] = $_POST['personal_name'];
      $_SESSION['surname'] = $_POST['personal_surname'];
      $_SESSION['email'] = $_POST['personal_email'];
    ?>

    <body>
      <header>
        <div class="container-fluid">
          <div class="row">
            <img id="logo" src="logo@2x.png">
            <h1>Urząd Miejski w Katowicach, Wydział XYZ</h1>
          </div>
        </div>
      </header>

      <div class="sekcja1_all">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="round">1</div>
            </div>
            <div class="col-md-3">
              <div class="round">2</div>
            </div>
            <div class="col-md-3">
              <div class="round">3</div>
            </div>
            <div class="col-md-3">
              <div class="round">4</div>
            </div>
          </div>
        </div>
      </div>

      <div class="sekcja_glowna">
        <div class="container">
          <div class="row">
            <p id="wybierz_opcje">Dane rezerwacji</p>
              <div class="flex-parent jc-center">
                <div class="option">Twoje imie: <a><?php echo $_SESSION['name']?></a></div>
              </div>
              <div class="flex-parent jc-center">
                <div class="option">Twoje nazwisko: <a><?php echo $_SESSION['surname']?></a></div>
              </div>
              <div class="flex-parent jc-center">
                <div class="option">Twój email: <a><?php echo $_SESSION['email']?></a></div>
              </div>
              <div class="flex-parent jc-center">
                <div class="option">Twój termin: <a><?php echo $_SESSION['picked_date']?></a></div>
              </div>
          </div>
        </div>
      </div>
         <hr>
         <p id="footer">Lorem ipsum, Lorem ipsum, Lorem ipsum</p>


      </div>


    </body>
</html>
