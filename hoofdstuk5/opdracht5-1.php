<?php

/**
 * User: Timon
 * Date: Date
 * Time: 14:00pm
 * File: opdracht5-1.php
 */
include "../../../wwwroot/phpopdrachten/includes/header.php";
include "../../../wwwroot/phpopdrachten/includes/footer.php";

?>
<html title="main" lang="en">
    <head>
        <meta charset="utf8"/>
        <link href="" type="text/css" rel="stylesheet">
        <title>

        </title>
    </head>

    <body>
        <form action="form_data.php" method="post">
            <label for="Bnaam">Bedrijfsnaam</label><br>
            <input type="text" id="Bnaam" name="Bnaam"><br>

            <label for="Vnaam">Voornaam</label><br>
            <input type="text" id="Vnaam" name="Vnaam"><br>

            <label for="Anaam">Achternaam</label><br>
            <input type="text" id="Anaam" name="Anaam"><br>

            <label for="telefoon">Telefoon</label><br>
            <input type="number" id="telefoon" name="telefoon"><br>

            <label for="email">E-mail</label><br>
            <input type="email" id="email" name="email"><br>

            <input type="submit">
        </form>
    </body>
</html>


