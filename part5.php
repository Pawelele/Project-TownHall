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
            <p id="wybierz_opcje">Wpisz swój termin</p>

            <form action="post" class="formularz" action="sekcja3.php">

            </form>

            <!-- <div class="flex-parent jc-center">
            <button class="opcja">Rejestracja pojazdu, pozostałe sprawy</button></div>
            <div class="flex-parent jc-center">
            <button class="opcja">Zgłoszenie zbycia, odbiór stałego dowodu rej.</button></div>
            <div class="flex-parent jc-center">
            <button class="opcja">Prawo jazdy-odbiór dokumentu (po wymianie lub po egzaminie)</button></div>
            <div class="flex-parent jc-center">
            <button class="opcja">Prawo jazdy-złożenie wniosku, PKK oraz pozostałe sprawy</button></div> -->
          </div>
        </div>
      </div>
         <hr>
         <p id="footer">Lorem ipsum, Lorem ipsum, Lorem ipsum</p>


      </div>


    </body>
</html>