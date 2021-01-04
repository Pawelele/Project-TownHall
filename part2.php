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
      $_SESSION['department'] = $_POST['form_department'];
    ?>

    <body>
      <div class="all_body">
        <header>
          <div class="container-fluid">
            <div class="row">
              <a href=index.php><img id="logo" src="logo@2x.png"></a>
              <h1>Urząd Miejski w Katowicach, Wydział XYZ</h1>
            </div>
          </div>
        </header>



        <div class="sekcja_glowna">

          <center>
            <div class="sekcja1_all">
              <div class="container">
                <div class="row">
                  <div class="col-md-3">
                    <div class="round">1</div>
                    <p>Dział</p>
                  </div>
                  <div class="col-md-3">
                    <div class="actual_round">2</div>
                    <p>Termin</p>
                  </div>
                  <div class="col-md-3">
                    <div class="round">3</div>
                    <p>Dane</p>
                  </div>
                  <div class="col-md-3">
                    <div class="round">4</div>
                    <p>Regulamin i potwierdzenie</p>
                  </div>
                </div>
              </div>
            </div>
          </center>

          <div class="container">
            <div class="row">
              <p id="wybierz_opcje">Wpisz swój termin</p>

              <form method="post" class="formularz" action="part3.php">
                <div class="flex-parent jc-center">
                  <input type="date" name="choose_date" class="option">
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
    </body>
</html>
