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
      $_SESSION['picked_date'] = $_POST['choose_date'];
    ?>

    <body>
      <header>
        <div class="container-fluid">
          <div class="row">
            <a href=index.php><img id="logo" src="logo@2x.png"></a>
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
            <p id="wybierz_opcje">Wpisz swoje dane</p>

            <form method="post" class="formularz" action="part4.php">

              <!-- <p id="font25">Imie</p> -->
              <div class="flex-parent jc-center">
                <input type="text" class="option" name="personal_name" placeholder="tutaj wpisz imie">
              </div>
              <!-- <p id="font25">Nazwisko</p> -->
              <div class="flex-parent jc-center">
                <input type="text" class="option" name="personal_surname" placeholder="tutaj wpisz naziwsko">
              </div>
              <!-- <p id="font25">Pesel</p> -->
              <div class="flex-parent jc-center">
                <input type="text" class="option" name="personal_pesel" placeholder="tutaj wpisz PESEL" minlength="11" maxlength="11">
              </div>
              <!-- <p id="font25">Email</p> -->
              <div class="flex-parent jc-center">
                <input type="text" class="option" name="personal_email" placeholder="tutaj wpisz email">
              </div>
              <input type="submit" name="next" value=">" id="submit_button">

            </form>

          </div>
        </div>
      </div>
         <hr>
         <p id="footer">Lorem ipsum, Lorem ipsum, Lorem ipsum</p>


      </div>


    </body>
</html>
