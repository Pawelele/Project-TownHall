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

          <p id="wybierz_opcje">Wybierz opcje</p>

          <form method="post" class="form" action="part2.php">

            <label for="option1" class="option">Rejestracja pojazdu, pozostałe sprawy
            <input type="radio" id="option1" class= "radio" value="1. Rej pojazdu" name="form_department"></label>

            <label for="option2" class="option">Zgłoszenie zbycia, odbiór stałego dowodu rej.
            <input type="radio" id="option2" class= "radio" value="2. zgl zbyc, odb dow rej" name="form_department"></label>

            <label for="option3" class="option">Prawo jazdy-odbiór dokumentów (po wymienie lub po egzaminie)
            <input type="radio" id="option3" class= "radio" value="3. Prawo jazdy odbior" name="form_department"></label>

            <label for="option4" class="option" >Prawo jazdy-złoenie wniosku, PKK oraz pozostałe sprawy
            <input type="radio" id="option4" class= "radio" value="4. Prawo jazdy wniosek" name="form_department"></label>

            <input type="submit" name="next" value=">" id="submit_button">
          </form>

          <hr>
          <p id="footer">Lorem ipsum, Lorem ipsum, Lorem ipsum</p>
      </div>
    </div>
  </body>
</html>
