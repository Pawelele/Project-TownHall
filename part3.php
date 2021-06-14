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

      <script src="js/accessibility3.js" defer></script>
    </head>
    <!-- Przypisanie zmiennej z poprzedniego etapu -->
    <?php
      session_start();
      $_SESSION['picked_date'] = $_POST['choose_date'];
    ?>

    <body>
    <div class="bigCursor">
      <div class="accessibility">
        <div class="change-cursor"><img src="img/cursor.png"></div>
        <div class="change-colors"><img src="img/change.png"></div>
        <div class="icon"><img src="img/disabled.png"></div>
      </div>

      <div class="all_body">
        <header>
          <div class="container-fluid">
            <div class="row" id="naglowek">
              <a href=index.php><img id="logo" class="logo2" src="logo@2x.png"></a>
              <p id="main_title">Urząd Miejski w Katowicach, Wydział XYZ</p>
            </div>
          </div>
        </header>



        <div class="sekcja_glowna">

        <center>
          <div class="sekcja1_all" id="mobile-centered">
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <div class="round">1</div>
                  <p class="p_another">Dział</p>
                </div>
                <div class="col-md-3">
                  <div class="round">2</div>
                  <p class="p_another">Termin</p>
                </div>
                <div class="col-md-3">
                  <div class="actual_round">3</div>
                  <p class="p_actual">Dane</p>
                </div>
                <div class="col-md-3">
                  <div class="round">4</div>
                  <p class="p_another">Potwierdzenie</p>
                </div>
              </div>
            </div>
          </div>
        </center>

          <div class="container">
            <div class="row">
              <p id="wybierz_opcje">Wpisz swoje dane</p>

              <form method="post" class="formularz" action="part4.php">

                <!-- <p id="font25">Imie</p> -->
                <div class="flex-parent jc-center">
                  <input type="text" class="option" id="no_color_change" name="personal_name" placeholder="tutaj wpisz imie">
                </div>
                <!-- <p id="font25">Nazwisko</p> -->
                <div class="flex-parent jc-center">
                  <input type="text" class="option" id="no_color_change" name="personal_surname" placeholder="tutaj wpisz nazwisko">
                </div>
                <!-- <p id="font25">Pesel</p> -->
                <div class="flex-parent jc-center">
                  <input type="text" class="option" id="no_color_change" name="personal_pesel" placeholder="tutaj wpisz PESEL" minlength="11" maxlength="11" required>
                </div>
                <!-- <p id="font25">Email</p> -->
                <div class="flex-parent jc-center">
                  <input type="text" class="option" id="no_color_change" name="personal_email" placeholder="tutaj wpisz email">
                </div>
                <div class="flex-parent jc-center">
                  <input type="submit" name="next" value=">" id="submit_button">
                </div>

              </form>

            </div>
          </div>
        </div>
          <hr>
          <p id="footer">Lorem ipsum, Lorem ipsum, Lorem ipsum</p>


        </div>
    </div>
      </div>
    </body>
</html>
