<?php
/**
 * User: Timon
 * Date: Date
 * Time: 12:00pm
 * File: header.php
 */
?>
<html lang="en">
<head>
    <meta charset="utf8"/>
    <link href="../../../wwwroot/phpopdrachten/header/header.css" type="text/css" rel="stylesheet">
    <title>
        ?
    </title>
</head>
<body>
    <a href="../index.php">
    <header>
        <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
    </header>
    </a>
</body>
<style>
    header
    {
        /*tekst opmaak*/
        text-align: center;
        font-family: "Bookman Old Style";
        color: white;
        font-size: 2em;
        /*achtergrond*/
        background-color: darkred;
        transition-duration: 0.5s;
        overflow-x:hidden;
    }

    header:hover
    {
        color:lightgrey;
        transition-duration: 0.5s;

    }

    a
    {
        text-decoration: none;
    }
</style>
</html>

