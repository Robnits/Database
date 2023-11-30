<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <div id="wrapper">
            <header>
                <h1>Private Musikschule Thübingen</h1>
            </div>
            </header>
            <div id="navwrapper">
                <nav>
                    <ul>
                        <li><a href="index.php">Startseite</a></li>
                        <li><a href="kontakt.html">Kontakt</a></li>
                        <li><a href="anmeldungkurs.html">Anmeldung für Kurs</a></li>
                        <li><a href="kinderinstrumente.html">Kinder Instrumente</a></li>
                        <li><a href="ErwachseneInstrumente.html">Erwachsene Instrumente</a></li>
                        <li><a href="kontaktform.php">Kontaktform</a></li>
                        <li><a href="" id="onhover">Gesang</a>
                            <ul>
                                <li><a href="gesangerwachsene.html">Erwachsene</a></li>
                                <li><a href="gesangKinder.html">Kinder</a></li>
                            </ul>
                        </li>
                        <li><a href="anmelden.html">Anmelden</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="gwrapper"> 
            
            <div id="bildindex">
                <img src="/Symbole/Main/1f3765df-d258-477b-b95a-921c821c808f.jpg" alt="Bild der Musikschule">
            </div>

            <div id="indext2">
                <p><h3>Willkommen in unserer Musikschule!</h3>
                    Bei uns entdecken Sie die wunderbare Welt der Musik. Egal, ob Sie ein Anfänger sind oder bereits musikalische Erfahrung haben, unsere talentierten Lehrer stehen Ihnen zur Seite, um Ihre Fähigkeiten auf Ihrem Instrument zu entwickeln oder zu verfeinern.
                    Unsere Musikschule bietet eine Vielzahl von Instrumenten zum Erlernen an, darunter Klavier, Gitarre und Streichinstrumente. Unsere erfahrenen Lehrer sind nicht nur qualifizierte Pädagogen, sondern auch leidenschaftliche Musiker, die Ihnen helfen, Ihr musikalisches Potenzial voll auszuschöpfen.
                    Bei uns geht es nicht nur um das Spielen eines Instruments, sondern auch um das gemeinsame Musizieren.
                </p>

                <?php
        
                    $db_link = new mysqli('localhost', 'root','','thuebingen');
                    $abfrage = "SELECT * FROM `gaeste`";
                    $db_erg= mysqli_query ($db_link, $abfrage);
                    echo "Formulareingaben:<br />";  
                    //echo "<table>";
                    while ($datensatz = mysqli_fetch_array ($db_erg, MYSQLI_ASSOC))
                    {
                         echo "Vorname: ";
                         echo @$datensatz['VName'];  //     aus der DB
                         echo "<br />";
                         echo "Name: ";
                         echo @$datensatz['NName'];
                         echo "<br />";
                    }
                ?>
                
            </div>
            <div id="indext1">
                <p> <h3>bei der Private Musikschule Thübingen!</h3><br> <br>

                    Unsere Musikschule bietet qualitativ hochwertigen Musikunterricht für Menschen jeden Alters und jeder Fertigkeitsstufe. Wir glauben, dass Musik eine wichtige Rolle in unserem Leben spielt und jeder das Potenzial hat, ein Musiker zu sein. Deshalb bieten wir eine breite Palette an Unterrichtsfächern, die von professionellen und erfahrenen Lehrern unterrichtet werden.

                    Ob Sie Anfänger oder Fortgeschrittener sind, wir haben das passende Angebot für Sie.

                    Unsere Unterrichtsstunden sind individuell auf jeden Schüler zugeschnitten und werden auf seine spezifischen Bedürfnisse und Ziele abgestimmt.
                </p>
            </div>
        </div>
        <footer>
            <a href="impressum.html">Impressum</a>
            <a href="http://backen-mit-spass.de/images/content/1351/kekse_mit_schokoladenstueckchen.jpg">Cookies</a>
            <a href="Datenschutz.html">Datenschutz</a>
            <a href="tabelle.html">Sitemap</a>
        </footer>
    </body>
</html>