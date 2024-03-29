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
      <header>
        <div class="container-fluid">
          <div class="row">
            <a href=index.php><img id="logo" src="img/logo@2x.png"></a>
            <p>Urząd Miejski w Katowicach, Wydział XYZ</p>
          </div>
        </div>
      </header>

      <div class="sekcja_glowna">
        <div class="container">
          <div class="row">

            <p id="pesel_check_p">Logowanie</p><br>

            <form method="post" action="admin-panel.php">
                <div class="flex-parent jc-center">
                <input type="text" class="panel_login" id="no_color_change" name="login" id="pesel_check" placeholder="wpisz login">
                </div>
                <div class="flex-parent jc-center">
                <input type="password" class="panel_login" id="no_color_change" name="password" id="pesel_check" placeholder="wpisz hasło">
                </div>
                <div class="flex-parent jc-center">
                <input type="submit" class="panel_login_submit" value="Zaloguj">
            </div>
            </form>
            <p id="login_failed_p">Błędny login lub hasło!</p>
          </div>
        </div>
      </div>
         <hr>
         <p id="footer">Lorem ipsum, Lorem ipsum, Lorem ipsum</p>


      </div>


    </body>
</html>
