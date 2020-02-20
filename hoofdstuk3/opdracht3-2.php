<?php
/**
 * User: Timon
 * Date: Date
 * Time: 18:00pm
 * File: opdracht3-2.php
 */
include "../../../wwwroot/phpopdrachten/header/header.php"
?>
<?php
//Taak 1
$trafficLightColor = "groen";
$ambulanceComing = false;
    if ($trafficLightColor == "groen" && $ambulanceComing == false)
    {
        echo "Doorrijden";
    }
    else
    {
        echo "Stoppen";
    }

//Taak 2
$trafficLightColor = "groen";
$ambulanceComing = false;
if ($trafficLightColor == "groen" && $ambulanceComing == false)
{
    $driveOn = true;
}
else
{
    $driveOn = false;
}
//echo
if ($driveOn == true)
{
    echo "Doorrijden";
}
else
{
    echo "Stoppen";
}

//Taak 3

$countryName = "Nederland";
$currentAge     = "80"    ;
$janee          = "ERROR";

if (
    $countryName == "Nederland" && $currentAge >= 16 && $currentAge < 18 ||
    $countryName == "Zweden" && $currentAge >= 18 && $currentAge < 20
    )
{
    $janee= "Je mag hier zwakke alchol drinken";
}
else if (
        $countryName == "Belgie" &&
        $countryName == "Bulgarije" ||
        $countryName == "Nederland" || $currentAge >= 18 ||
        $countryName == "Zweden" && $currentAge >= 20 ||
        $countryName == "Cyprus" && $currentAge >= 17
        )
{
    $janee= "je mag alle alchol drinken";
}
else
{
    $janee= "je mag geen dranken drinken";
}

echo "<br>Je woont in $countryName en bent $currentAge jaar oud $janee";
?>