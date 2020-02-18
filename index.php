<?php
/**
 * User: Timon
 * Date: Date
 * Time: 12:00pm
 * File: index.php
 */
?>
<html lang="en">
    <head>
        <meta charset="utf8"/>
        <link href="CSS/style.css" type="text/css" rel="stylesheet">
        <title>
            Home
        </title>
    </head>
    <body>
    <script defer>
        function no()
        {
            alert ("You are already on the right page you stupid");
        }
    </script>
    <!---titel--->
    <header>
        <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
    </header>
    <aside>
        <h2>Menu</h2>
        <ul>
            <!---hoofdstuk 2--->
            <li><div class="tekst">Hoofdstuk 2</div>
                <ul>
                    <li>
                        <a href="#" onclick="no()">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk2/opdracht2-2.php">Opdracht 2.2</a>
                    </li>
                </ul>

            </li>
            <!---hoofdstuk 3--->
            <li><div class="tekst">Hoofdstuk 3</div>
                <ul>
                    <li>
                        <a href="hoofdstuk3/opdracht3-1.php">Opdracht 3.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk3/opdracht3-2.php">Opdracht 3.2</a>
                    </li>
                    <li>
                        <a href="hoofdstuk3/opdracht3-3.php">Opdracht 3.3</a>
                    </li>
                </ul>
            <!---hoofdstuk 4--->
            <li><div class="tekst">Hoofdstuk 4</div>
                <ul>
                    <li>
                        <a href="hoofdstuk4/opdracht4-1.php">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk4/opdracht4-2.php">Opdracht 4.2</a>
                    </li>
                    <li>
                        <a href="hoofdstuk4/opdracht4-3.php">Opdracht 4.3</a>
                    </li>
                    <li>
                        <a href="hoofdstuk4/opdracht4-4.php">Opdracht 4.4</a>
                    </li>
                </ul>
                    <!---hoofdstuk 5--->
                    <li><div class="tekst">Hoofdstuk 5</div>
                        <ul>
                            <li>
                                <a href="hoofdstuk5/opdracht5-1.php">Opdracht 5.1</a>
                            </li>
                            <li>
                                <a href="hoofdstuk5/opdracht5-2.php">Opdracht 5.2</a>
                            </li>
                            <li>
                                <a href="hoofdstuk5/opdracht5-3.php">Opdracht 5.3</a>
                            </li>
                            <li>
                                <a href="hoofdstuk5/opdracht5-4.php">Opdracht 5.4</a>
                            </li>
                        </ul>
        </ul>



    </aside>

    <main id="uitwerking">
        <h2>Uitwerkingen</h2>
    </main>
    </body>
</html>