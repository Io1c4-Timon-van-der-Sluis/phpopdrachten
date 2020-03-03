
<?php
// Instructie date() elseif statement

date_default_timezone_set("Europe/Amsterdam");
$day = date("l");

switch($day)
{
    case "Monday":
        echo "Het is vandaag Maandag";
        break;

    case "Tuesday":
        echo "Het is vandaag Dinsdag";
        break;
}
?>

