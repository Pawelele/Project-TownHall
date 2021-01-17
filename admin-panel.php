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
      //echo "Connected successfully";

      $_SESSION["session_login"] = $_POST['login'];
      $_SESSION["session_password"] = $_POST['password'];

      $q = "SELECT login, password from users";
      $result = mysqli_query($conn, $q) or die("<center>Błąd połączenia z bazą danych!</center>");
      while($row = mysqli_fetch_assoc($result))
      {
        if($_SESSION["session_login"] == $row['login'] &&  $_SESSION["session_password"]== $row['password'])
        {
            $logowanie= "true";
        }
      }

      if($logowanie =="true")
      {
    ?>

    <body>
      <header>
        <div class="container-fluid">
          <div class="row">
            <a href=index.php><img id="logo" src="logo@2x.png"></a>
            <p>Urząd Miejski w Katowicach, Wydział XYZ</p>
          </div>
        </div>
      </header>

      <div class="sekcja_glowna">
        <div class="container">
          <div class="row">
            <p id="pesel_check_p">Aktywne zapisy</p>

            <div id="pesel_check_list">
              <?php
                // włącznik raportowania o błędach
                error_reporting(0);
                $q = "SELECT id, operacja , imie, nazwisko, email, pesel, termin FROM zapisy where imie != '' or nazwisko != ''";
                $result = mysqli_query($conn, $q) or die("<center>Błąd wyświetlenia zapisów!</center>");
                echo("<center><table>");
                while($row = mysqli_fetch_assoc($result))
                {
                  echo("<tr><td>".$row['id']."</td>"."<td>".$row['imie']."</td>"."<td>".$row['nazwisko']."</td>"."<td>".$row['email']."</td>"."<td>".$row['pesel']."</td>"."<td>".$row['termin']."</td>"."</td></tr>");
                }
                echo("</table></center>");
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

    <?php
      }
      else
      {
        echo "<script type=\"text/javascript\">
        window.setTimeout(\"window.location.replace('login_failed.php');\",1);
        </script>";
      }
    ?>
</html>
