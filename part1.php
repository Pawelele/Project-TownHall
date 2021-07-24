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

      <script src="js/checkOption.js" defer></script>
      <script src="js/accessibility2.js" defer></script>
    </head>
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
            <div class="row">
              <a href=index.php id="logo"><img id="logo" class="logo2" src="logo@2x.png"></a>
              <p id="main_title">Urząd Miejski w Katowicach, Wydział XYZ</p>
            </div>
          </div>
        </header>


        <div class="sekcja_glowna">

          <center>
            <div class="sekcja1_all"  id="mobile-centered">
              <div class="container">
                <div class="row">
                  <div class="col-md-3">
                    <div class="actual_round">1</div>
                    <p class="p_actual">Dział</p>
                  </div>
                  <div class="col-md-3">
                    <div class="round">2</div>
                    <p class="p_another">Termin</p>
                  </div>
                  <div class="col-md-3">
                    <div class="round">3</div>
                    <p class="p_another">Dane</p>
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
              <p id="wybierz_opcje">Wybierz opcje</p>

              <form method="post" class="form" action="part2.php">

                <div class="flex-parent jc-center">
                  <label for="option1" id="checked1" class="option" onchange="RadioCheck()">Rejestracja pojazdu, pozostałe sprawy <input type="radio" id="option1" value="1. Rej pojazdu" name="form_department"></label>
                </div>

                <div class="flex-parent jc-center">
                  <label for="option2" id="checked2" class="option" onchange="RadioCheck()">Zgłoszenie zbycia, odbiór stałego dowodu rej. <input type="radio" id="option2" value="2. zgl zbyc, odb dow rej" name="form_department"></label>
                </div>

                <div class="flex-parent jc-center">
                  <label for="option3" id="checked3" class="option" onchange="RadioCheck()">Prawo jazdy-odbiór dokumentów (po wymienie lub po egzaminie)<input type="radio" id="option3" value="3. Prawo jazdy odbior" name="form_department"></label>
                </div>

                <div class="flex-parent jc-center">
                  <label for="option4" id="checked4" class="option" onchange="RadioCheck()">Prawo jazdy-złoenie wniosku, PKK oraz pozostałe sprawy <input type="radio" id="option4" value="4. Prawo jazdy wniosek" name="form_department"></label>
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
