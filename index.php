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
  <?php
    error_reporting(0);

    require_once "connect.php";
  ?>
  <body>
    <div class="all_body">
      <header>
        <a href=index.php id="logo"><img id="logo" class="logo2" src="img/logo@2x.png"></a>
        <p id="main_title">Urząd Miejski w Katowicach, Wydział XYZ</p>
      </header>


      <div class="sekcja_glowna">

        <a href="part1.php"><div class="sign_up">Zapisz się!</div></a>

        <p id="pesel_check_p">Podaj PESEL, aby sprawdzić aktywne zapisy</p>

        <form method="get" class="form" action="index.php">
          <input type="text" class="option" id="no_color_change" name="pesel_check_input" id="pesel_check" placeholder="wpisz pesel">
          <input type="submit" id="main_site_submit" value="Sprawdź">
        </form>

        <div id="pesel_check_list">
          <?php
            // włącznik raportowania o błędach
            error_reporting(0);
            $q = "SELECT imie, nazwisko, termin, id FROM zapisy WHERE pesel = $_GET[pesel_check_input]";

            $result = mysqli_query($conn, $q) or die("<center class='yellow'>Wprowadź PESEL w polu powyzej</center>");
            while($row = mysqli_fetch_assoc($result))
            {
              echo("<center class='yellow'> Imie: ".$row['imie']." &nbsp;&nbsp;&nbsp;Nazwisko: ".$row['nazwisko']." &nbsp;&nbsp;&nbsp;Data: ".$row['termin']." &nbsp;&nbsp;&nbsp;Numerek: ".$row['id']."</center>");
            }
          ?>
        </div>

        <?php
          error_reporting(0);
          $conn->close();
        ?>

        <hr>
        <p id="footer">Lorem ipsum, Lorem ipsum, Lorem ipsum</p>
      </div>
    </div>
  </body>
</html>
