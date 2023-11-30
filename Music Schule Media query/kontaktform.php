<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <h1>Private Musikschule Thübingen</h1>
        </header>
        <div id="navwrapper">
            <nav>
                <ul>
                    <li><a href="index.php">Startseite</a></li>
                    <li><a href="kontakt.html">Kontakt</a></li>
                    <li><a href="anmeldungkurs.html">Anmeldung für Kurs</a></li>
                    <li><a href="kinderinstrumente.html">Kinder Instrumente</a></li>
                    <li><a href="ErwachseneInstrumente.html">Erwachsene Instrumente</a></li>
                    
                    <li><a href="" id="onhover">Gesang</a>
                        <ul>
                            <li><a href="gesangerwachsene.html">Erwachsene</a></li>
                            <li><a href="gesangkinder.html">Kinder</a></li>
                        </ul>
                    </li>
                    <li><a href="anmelden.html">Anmelden</a></li>
                </ul>
            </nav>
        </div>
        <div id="kihwrapper" style="background-color: white; width: 500px;" >
            <form method="post">
                <div id="anmeldungw">
                <h2>Anmeldung</h2>
                <label>Vorname</label>
                <input name="vname" type="text"><br>
                <label>Nachname</label>
                <input name="nname" type="text"><br>
                <input type="submit">
            
            </form>

            <?php
                $db_link = new mysqli('localhost', 'root', '', 'thuebingen');

                $vname = $_POST['vname'];
                $nname = $_POST['nname'];

                $insert = "INSERT INTO gaeste (VName, NName) VALUES ('$vname', '$nname')";
                $result = $db_link->query($insert);
            ?>
        </div>


        </div>
    </div>

</body>
</html>