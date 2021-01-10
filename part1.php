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
    <body>
    <!-- Zaznaczanie pól formularza  -->
    <script>

      function RadioCheck()
      {
        radio1 = document.getElementById("option1");
        radio2 = document.getElementById("option2");
        radio3 = document.getElementById("option3");
        radio4 = document.getElementById("option4");

        if(radio1.checked == true)
        {
          document.getElementById("checked1").style.backgroundColor = "#5AB7FF";
          document.getElementById("checked1").style.transform = "scale(1.03,1.03)"
        }
        else
        {
          document.getElementById("checked1").style.backgroundColor = "#FFFFFF";
          document.getElementById("checked1").style.transform = "scale(1,1)"
        }

        if(radio2.checked == true)
        {
          document.getElementById("checked2").style.backgroundColor = "#5AB7FF";
          document.getElementById("checked2").style.transform = "scale(1.03,1.03)"
        }
        else
        {
          document.getElementById("checked2").style.backgroundColor = "#FFFFFF";
          document.getElementById("checked2").style.transform = "scale(1,1)"
        }

        if(radio3.checked == true)
        {
          document.getElementById("checked3").style.backgroundColor = "#5AB7FF";
          document.getElementById("checked3").style.transform = "scale(1.03,1.03)"
        }
        else
        {
          document.getElementById("checked3").style.backgroundColor = "#FFFFFF";
          document.getElementById("checked3").style.transform = "scale(1,1)"
        }

        if(radio4.checked == true)
        {
          document.getElementById("checked4").style.backgroundColor = "#5AB7FF";
          document.getElementById("checked4").style.transform = "scale(1.03,1.03)"
        }
        else
        {
          document.getElementById("checked4").style.backgroundColor = "#FFFFFF";
          document.getElementById("checked4").style.transform = "scale(1,1)"
        }

      }
    </script>
      <div class="all_body">

        <header>
          <div class="container-fluid">
            <div class="row">
              <a href=index.php><img id="logo" src="logo@2x.png"></a>
              <p>Urząd Miejski w Katowicach, Wydział XYZ</p>
            </div>
          </div>
        </header>




        <div class="sekcja_glowna">

          <center>
            <div class="sekcja1_all">
              <div class="container">
                <div class="row">
                  <div class="col-md-3">
                    <div class="actual_round">1</div>
                    <p>Dział</p>
                  </div>
                  <div class="col-md-3">
                    <div class="round">2</div>
                    <p>Termin</p>
                  </div>
                  <div class="col-md-3">
                    <div class="round">3</div>
                    <p>Dane</p>
                  </div>
                  <div class="col-md-3">
                    <div class="round">4</div>
                    <p>Potwierdzenie</p>
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
    </body>
</html>
