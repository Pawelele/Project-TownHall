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

      <script src="js/accessibility.js" defer></script>
    </head>
    <!-- Przypisanie zmiennej z poprzedniego etapu -->
    <?php
      error_reporting(0);
      session_start();

      $servername = "localhost";
      $username = "site_agent";
      $password = "Projekt_siz_132";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, "SIZ_Database");

      // Check connection
      // if (!$conn) {
      //   die("Connection failed: " . mysqli_connect_error());
      // }
      // echo "Connected successfully";

      $sql="INSERT INTO zapisy (operacja, termin, imie, nazwisko, email, potwierdzenie , pesel) VALUES ('$_SESSION[department]','$_SESSION[picked_date]', '$_SESSION[name]', '$_SESSION[surname]', '$_SESSION[email]', false , '$_SESSION[pesel]')";
    ?>

    <body>
      <div class="accessibility4">
        <div class="change-cursor"><img src="img/cursor.png"></div>
        <div class="change-colors"><img src="img/change.png"></div>
        <div class="icon"><img src="img/disabled.png"></div>
      </div>

      <header>
        <div class="container-fluid">
          <div class="row">
            <a href=index.php><img id="logo" class="logo2" src="logo@2x.png"></a>
            <p id="main_title">Urząd Miejski w Katowicach, Wydział XYZ</p>
          </div>
        </div>
      </header>

      <div class="sekcja_glowna">
        <div class="container">
          <div class="row">

            <div id="accepted">
              <?php
                if ($conn->query($sql) === TRUE) {
                  echo "Twoja rezerwacja została dodana";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
              ?>
            </div>

            <div id="number">
                Twój numerek:
                <?php
                  $_SESSION['ticket'] = "Brak przypisanego numerka.<br> Jeśli odświezyłeś przegladarke, przejdz do strony głównej, aby sprawdzić swoją rezerwacje.";
                  sleep(1);
                  // Odczyt id zapisanego własnie rekordu na potrzeby wyświetlenia numerka oraz wyswietlenie
                  $q = "SELECT id FROM zapisy where pesel= '$_SESSION[pesel]' and pesel != 0 ORDER BY id DESC LIMIT 1";

                  $result = mysqli_query($conn, $q) or die("Problemy z odczytem danych!");
                  while($row = mysqli_fetch_assoc($result))
                  {
                    $_SESSION['ticket'] = $row['id'];
                  }
                  echo $_SESSION['ticket'];
                ?>
            </div>

            <div id="number">
                Zapisałeś się na termin:
                <?php
                  $_SESSION['data_wybrana'] = "Brak wybranego terminu";
                  sleep(1);
                  // Odczyt id zapisanego własnie rekordu na potrzeby wyświetlenia numerka oraz wyswietlenie
                  $q = "SELECT termin FROM zapisy where pesel= '$_SESSION[pesel]' and pesel != 0 ORDER BY id DESC LIMIT 1";

                  $result = mysqli_query($conn, $q) or die("Problemy z odczytem danych!");
                  while($row = mysqli_fetch_assoc($result))
                  {
                    $_SESSION['data_wybrana'] = $row['termin'];
                  }
                  echo $_SESSION['data_wybrana'];
                ?>
                <!-- Sending mail after rejestration -->
                <?php
                  $email_odbiorcy = $_SESSION["email"];
                  $header = "Reply-To: <none@none.pl> \r\n";
                  $header .= "MIME-Version: 1.0 \r\n";
                  $header .= "Content-Type: text/html; charset=UTF-8";
                  $wiadomosc = "<p>Cześć: ".$_SESSION['name']."!</p>";
                  $wiadomosc .= "<p>Twoja wizyta została umówiona!</p>";
                  $wiadomosc .= "<p>Nadany numerek: ".$_SESSION['ticket']."</p>";
                  $wiadomosc .= "<p>Termin: ".$_SESSION['data_wybrana']."</p>";
                  $message = "<!doctype html><html><head><meta charset='UTF-8'>".$wiadomosc."</head></html>";
                  $subject = 'Twoja wizyta została umówiona';
                  $subject ='=?utf-8?B?'.base64_encode($subject).'?=';

                  mail($email_odbiorcy, $subject, $message, $header)
                ?>
            </div>

            <?php
              $conn->close();
              session_destroy();
            ?>
          </div>
        </div>
      </div>
         <hr>
         <p id="footer">Lorem ipsum, Lorem ipsum, Lorem ipsum</p>


      </div>


    </body>
</html>
