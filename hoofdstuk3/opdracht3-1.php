<?php
/**
 * User: Timon
 * Date: Date
 * Time: 14:00pm
 * File: opdracht3-1.php
 */
?>

<?php

$evenement= "Elfstedentocht";
$frieselvenement= "Alvestêdetocht";
$afstand= "200";
$type= "schaatstocht";
$baan= "natuurijs";
$organisator= "Koninklijke Vereniging De Friesche Elf Steden.";
$locatie= "Leeuwarden";
$regio= "Friesland";
$herhaald= "15";
$eerste= "1909";
$aantal= "1";

$verhaal= "De $evenement (Fries: $frieselvenement) is een $afstand kilometer
lange $type over $baan die wordt georganiseerd door
de $organisator. $locatie,
de hoofdstad van $regio, is start- en aankomstplaats. De
Elfstedentocht is inmiddels $herhaald maal verreden en werd voor het
eerst in $eerste gereden en wordt maximaal $aantal keer per winter
gehouden.";
?>

<html lang="en">
    <body>
        <a href="../index.php">return</a>
        <p>
            <h2>Verhaal 1</h2>
            <?php echo "$verhaal"; ?>
        </p>
        <p>
            <h2>Verhaal 2</h2>

        <?php
        echo "<p>De " .$evenement. " (Fries: " .$frieselvenement. ") is een " .$afstand. " kilometer lange " .$type. " over " .$baan. " die wordt georganiseerd door de " .$organisator. " " .$locatie. ", de hoofdstad van " .$regio. "is start- en aankomstplaats. De Elfstedentocht is inmiddels " .$herhaald. " maal verreden en werd voor het eerst in " .$eerste. " gereden en wordt maximaal " .$aantal. " keer per winter gehouden.</p>"



        ?>
        </p>

    </body>

</html>
