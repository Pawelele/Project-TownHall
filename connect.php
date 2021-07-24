<?php
    $servername = "localhost";
    $username = "paweluch_urzad_agent";
    $password = "Projekt_siz_132";
    $db_name = "paweluch_urzad_database";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db_name);
    $conn-> query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
?>
