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

      $servername = "localhost";
      $username = "site_agent";
      $password = "Projekt_siz_132";

      try {
        $conn = new PDO("mysql:host=$servername;dbname=SIZ_Database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
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

      <div class="sekcja_glowna">
        <div class="container">
          <div class="row">
            <p id="accepted">Twoja rezerwacja została dodana</p>
            <p id="number">Twój numerek: xxx</p>



            <?php

            ?>

          </div>
        </div>
      </div>
         <hr>
         <p id="footer">Lorem ipsum, Lorem ipsum, Lorem ipsum</p>


      </div>


    </body>
</html>
