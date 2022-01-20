<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8">
    <title>Strona główna</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Urząd Miasta Katowice">
    <meta name="keywords" content="Urząd Miasta, Katowice, Urząd Katowice, Urząd Miasta Katowice">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <script src="js/checkOption.js" defer></script>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <!-- Przypisanie zmiennej z poprzedniego etapu -->
  <?php
    session_start();
    $_SESSION['picked_date'] = $_POST['choose_date'];
  ?>
  <body>
    <div class="all_body">
      <header>
        <a href=index.php id="logo"><img id="logo" class="logo2" src="img/logo@2x.png"></a>
        <p id="main_title">Urząd Miejski w Katowicach, Wydział XYZ</p>
      </header>


      <div class="sekcja_glowna">

        <div class="sekcja1_all">
          <div class="actual_round">1
            <p class="p_actual">Dział</p>
          </div>

          <div class="round">2
            <p class="p_another">Termin</p>
          </div>

          <div class="round">3
            <p class="p_another">Dane</p>
          </div>
          <div class="round">4
              <p class="p_another">Potwier.</p>
          </div>
        </div>

        <p id="wybierz_opcje">Wpisz swoje dane</p>

        <form method="post" class="form" action="part4.php">
          <input type="text" class="option" id="no_color_change" name="personal_name" placeholder="tutaj wpisz imie" required>
          <input type="text" class="option" id="no_color_change" name="personal_surname" placeholder="tutaj wpisz nazwisko" required>
          <input type="text" class="option" id="no_color_change" name="personal_pesel" placeholder="tutaj wpisz PESEL" minlength="11" maxlength="11" required>
          <input type="text" class="option" id="no_color_change" name="personal_email" placeholder="tutaj wpisz email" required>
          <input type="submit" name="next" value=">" id="submit_button">
        </form>

          <hr>
          <p id="footer">Lorem ipsum, Lorem ipsum, Lorem ipsum</p>
      </div>
    </div>
  </body>
</html>
