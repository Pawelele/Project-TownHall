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

      $servername = "localhost";
      $username = "site_agent";
      $password = "Projekt_siz_132";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, "SIZ_Database");

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      //echo "Connected successfully";

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

      <div class="sekcja_glowna">
        <div class="container">
          <div class="row">

          <div class="flex-parent jc-center">
            <a href="part1.php"><div class="sign_up">Zapisz się!</div></a>
          </div>

            <p id="pesel_check_p">Podaj PESEL, aby sprawdzic aktywne zapisy</p>

            <form method="get" action="index.php">
            <div class="flex-parent jc-center">
              <input type="text" class="option" name="pesel_check_input" id="pesel_check" placeholder="wpisz pesel">
            </div>
            <div class="flex-parent jc-center">
              <input type="submit" id="main_site_submit" value="Sprawdź">
            </div>
            </form>

            <div id="pesel_check_list">
              <?php
                // włącznik raportowania o błędach
                error_reporting(0);
                $q = "SELECT imie, nazwisko, id FROM zapisy WHERE pesel = $_GET[pesel_check_input]";

                $result = mysqli_query($conn, $q) or die("<center>Wprowadź PESEL w polu powyzej</center>");
                while($row = mysqli_fetch_assoc($result))
                {
                  echo("<center> Imie: ".$row['imie']." &nbsp;&nbsp;&nbsp;Nazwisko: ".$row['nazwisko']." &nbsp;&nbsp;&nbsp;Numerek: ".$row['id']."</center>");
                }
              ?>
            </div>

            <?php
              $conn->close();
            ?>
          </div>
        </div>
      </div>
         <hr>
         <p id="footer">Lorem ipsum, Lorem ipsum, Lorem ipsum</p>


      </div>


    </body>
</html>
