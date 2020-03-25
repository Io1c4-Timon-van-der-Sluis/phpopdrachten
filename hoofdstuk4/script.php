<?php
//Taak1: Voltooit

/*
                PHP                         Meneer Evers
                ASP                         Meneer Van der Meer
                SQL                         Meneer Van de Wetering
                JavaScript                  Meneer Van de Wetering

                HTML                        Meneer Gijsbrechts & Meneer Evers
                Usability                   Meneer Van de Wetering
                Hardware                    Meneer Saebu

                Computertekenen             Meneer Van de Berg
                Digitale vaardigheden       Mevrouw Pilage

                Rekenen                     Meneer Van der Meer
                Engels                      Mevrouw Mitrovich
                Nederlands                  Meneer Van der Ende

                Burgerschap                 Mevrouw De Ruiter
                Studievaardigheden          Mevrouw De Ruiter
                Loobbaan                    Mevrouw De Ruiter
*/

//Taak2
$courseName  = "HTML";
$teacherName = "";
$gender = "Meneer";

switch ( $courseName )
{
    //PHP
    case "PHP":
    $teacherName = "Evers";
    break;

    //ASP , Rekenen
    case "ASP":
    case "Rekenen":
        $teacherName = "van der Meer";
        break;

    //SQL , Javascript, Usability
    case "SQL":
    case "Javascript":
    case "Usability":
        $teacherName = "van de Wetering";
        break;

    //HTML
    case "HTML":
        $teacherName = "Evers & Gijsbrechts";
        break;

    //Hardware
    case "Hardware":
        $teacherName = "seabu";
        break;

    //Computertekenen
    case "Computertekenen":
        $teacherName = "van de Berg";
        break;

    //Digitale vaardigheden
    case "Digitale vaardigheden":
        $teacherName = "Pilage";
        $gender = "Mevrouw";
        break;

    //Engels
    case "Engels":
        $teacherName = "Mitrovich";
        break;

    //Nederlands
    case "Nederlands":
        $teacherName = "van der Ende";
        break;

    //Burgerschap, ect
    case "Burgerschap":
    case "Studievaardighedden":
    case "Loopbaan":
        $teacherName = "Wheel Chair Warrior";
        $gender = "The Fabulous";
        break;

    //Default
    default:
    $teacherName = "Niemand";
    $courseName = "Niks";
    $gender = "Onzijdig";
}


//Taak3
echo ("<span>$courseName</span> wordt gegeven door $gender <span>$teacherName</span>");
?>
<style>
span
    {
        font-weight: bold;
    }
</style>