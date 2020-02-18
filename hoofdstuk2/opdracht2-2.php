<?php
/**
 * User: Timon
 * Date: Date
 * Time: 12:00pm
 * File: opdracht2-2.php
 */
include "../../../wwwroot/phpopdrachten/header/header.php"
?>

<?php
$text1 = "Hallo";
$text2 = " een makkelijke taal";
$text3 = " toch zo'n makkelijke taal";
$text4 = " wat is";
$text5 = " PHP";
$text6 = " Nooit gedacht dat";
$text7 = " De installatie is best ingewikkeld";
$text8 = " Fijn";
$text9 = "?";
$text10 = ".";
$text11 = ",";
$text12 = "<br>";
$text13 = " is";
$text14 = " Vind je niet";
$text15 = " toch";
?>

<h2>Taak 2</h2>
<p>
    <?php echo" 
    $text1$text11$text4$text5$text3$text10$text12
    
    $text7$text10$text8$text15$text9$text12
    
    $text6$text5$text3$text13$text10
    "?>
</p>

<h2>Taak 3</h2>
<p>
    <?php echo"
        $text1$text11$text12
        
        $text8$text15 dat $text5 zo'n makkelijke taal $text13$text10$text12
        
        $text7$text10$text14$text9
        
    "?>
</p>

<!--opmaak-->
<style>
    p
    {
        background-color: rgb(250,250,250);
        border:solid rgb(240,240,240);
    }
</style>
