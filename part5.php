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

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, "SIZ_Database");

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      // echo "Connected successfully";

      $sql="INSERT INTO zapisy (operacja, termin, imie, nazwisko, email, potwierdzenie , pesel) VALUES ('$_SESSION[department]','$_SESSION[picked_date]', '$_SESSION[name]', '$_SESSION[surname]', '$_SESSION[email]', false , '$_SESSION[pesel]')";

      // Odczyt id zapisanego własnie rekordu na potrzeby wyświetlenia numerka
      $q = "SELECT id FROM zapisy where pesel = '$_SESSION[pesel]' ORDER BY id ASC LIMIT 1";

      $result = mysqli_query($conn, $q) or die("Problemy z odczytem danych!");
      while($row = mysqli_fetch_assoc($result))
      {
        $_SESSION['ticket'] = $row['id'];
      }
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
                  echo $_SESSION['ticket'];
                ?>
            </div>


          </div>
        </div>
      </div>
         <hr>
         <p id="footer">Lorem ipsum, Lorem ipsum, Lorem ipsum</p>


      </div>


    </body>
</html>
