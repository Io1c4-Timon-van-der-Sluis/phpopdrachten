<?php
$current_file_name = basename($_SERVER['PHP_SELF']);
//date / time for footer
date_default_timezone_set( "Europe/Amsterdam" );
$date = date("Y");
$uur = date("H");
$dagdeel = "error";
//dag wens
//nacht
if ($uur >= 0 && $uur < 5)
{
    $dagdeel = "nacht";
}
//ochtend
else if ($uur >= 5 && $uur < 12)
{
    $dagdeel = "ochtend";
}
//middag
else if ($uur >= 12 && $uur < 17)
{
    $dagdeel = "middag";
}
else if ($uur >= 17 && $uur < 24)
{
    $dagdeel = "avond";
}




