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
    $_SESSION['name'] = $_POST['personal_name'];
    $_SESSION['surname'] = $_POST['personal_surname'];
    $_SESSION['pesel'] = $_POST['personal_pesel'];
    $_SESSION['email'] = $_POST['personal_email'];
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



        <p id="wybierz_opcje">Dane rezerwacji</p>

          <div class="option" id="no_color_change" id="part4_option">Twoje imie: <a><?php echo $_SESSION['name']?></a></div>
          <div class="option" id="no_color_change">Twoje nazwisko: <a><?php echo $_SESSION['surname']?></a></div>
          <div class="option" id="no_color_change">Twój email: <a><?php echo $_SESSION['email']?></a></div>
          <div class="option" id="no_color_change">Twój termin: <a><?php echo $_SESSION['picked_date']?></a></div>

        <div class="sekcja_regulamin">

          <p id="reg_p">Regulamin</p>

            <div class="regulamin">
              1. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elit ullamcorper dignissim cras tincidunt lobortis. Suspendisse ultrices gravida dictum fusce ut placerat orci.<br>
              2. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elit ullamcorper dignissim cras tincidunt lobortis. Suspendisse ultrices gravida dictum fusce ut placerat orci.<br>
              3. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elit ullamcorper dignissim cras tincidunt lobortis. Suspendisse ultrices gravida dictum fusce ut placerat orci.<br>
            </div>


          <form name="form" action="part5.php">
            <div class="rules_checbox_div">
              <input id="accept_rules_checkbox" type="checkbox" name="accept_rules" required>
              <label for="accept_rules_checkbox">Akceptuję regulamin</label>
            </div>

            <input id="submit_part4" type="submit" name="next" value="Rezerwuję">
          </form>

          <div id="blue_hr"></div>
          <p id="footer_part4">Lorem ipsum, Lorem ipsum, Lorem ipsum</p>

        </div>
      </div>
  </body>
</html>
