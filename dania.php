<?php
function zamowienie($numer_zamowienia)
{
    $bazka = mysqli_connect('localhost', 'root', '', 'kubus') or die("Problem z połączenie z bazą");

    $langadb = "SET NAMES utf8";
    mysqli_query($bazka, $langadb);

    $zapytanie_cena_zupy = "SELECT cena FROM ceny WHERE kategoria='zupa'";
    $zapytanie_cena_dania = "SELECT cena FROM ceny WHERE kategoria='drugie_danie'";
    $zapytanie_cena_dodatku = "SELECT cena FROM ceny WHERE kategoria='dodatek'";
    $zapytanie_cena_surowki = "SELECT cena FROM ceny WHERE kategoria='surowka'";
    $zapytanie_cena_pierogow = "SELECT cena FROM ceny WHERE kategoria='pierogi'";

    $zapytanie_zupy = "SELECT nazwa, name FROM zupy";
    $zapytanie_dania = "SELECT nazwa, name FROM dania";
    $zapytanie_dodatki = "SELECT nazwa, name FROM dodatki";
    $zapytanie_surowki = "SELECT nazwa, name FROM surowki";
    $zapytanie_pierogi = "SELECT nazwa, name FROM pierogi";

    $result_cena_zupy = mysqli_query($bazka, $zapytanie_cena_zupy);
    $result_cena_dania = mysqli_query($bazka, $zapytanie_cena_dania);
    $result_cena_dodatku = mysqli_query($bazka, $zapytanie_cena_dodatku);
    $result_cena_surowki = mysqli_query($bazka, $zapytanie_cena_surowki);
    $result_cena_pierogow = mysqli_query($bazka, $zapytanie_cena_pierogow);

    $result_zupy = mysqli_query($bazka, $zapytanie_zupy);
    $result_dania = mysqli_query($bazka, $zapytanie_dania);
    $result_dodatki = mysqli_query($bazka, $zapytanie_dodatki);
    $result_surowki = mysqli_query($bazka, $zapytanie_surowki);
    $result_pierogi = mysqli_query($bazka, $zapytanie_pierogi);

    // SEKCJA ZAMÓWIENIA

    echo "<section class='zamowienie'>\n";
    echo "\t\t\t\t<header>\n";
    echo "\t\t\t\t\t<h2>Zamówienie " . $numer_zamowienia . "</h2>\n";
    echo "\t\t\t\t</header>\n";
    echo "\t\t\t\t<section class='dania'>\n";

    // ZUPY
    echo "\t\t\t\t\t<section class='zupa'>\n";
    echo "\t\t\t\t\t\t<div>\n";

    while ($row = mysqli_fetch_assoc($result_cena_zupy)) {
        echo "\t\t\t\t\t\t\t<h2>Zupa " . $row['cena'] . "zł</h2>\n";
        echo "\t\t\t\t\t\t\t<select name='zupa" . $numer_zamowienia . "' id='zupa" . $numer_zamowienia . "' data-price=" . $row['cena'] . ">\n";
    }


    echo "\t\t\t\t\t\t\t\t<option value='---'>Bez zupy</option>\n";

    while ($row = mysqli_fetch_assoc($result_zupy)) {
        echo "\t\t\t\t\t\t\t\t<option value='" . $row['nazwa'] . "'>" . $row['nazwa'] . "</option>\n";
    }

    echo "\t\t\t\t\t\t\t</select>\n";
    echo "\t\t\t\t\t\t</div>\n";
    echo "\t\t\t\t\t</section>\n";

    // DRUGIE DANIE

    echo "\t\t\t\t\t<section class='drugie-danie'>\n";

    //DANIE
    echo "\t\t\t\t\t\t<div>\n";

    while ($row = mysqli_fetch_assoc($result_cena_dania)) {
        echo "\t\t\t\t\t\t\t<h2>Danie " . $row['cena'] . "zł</h2>\n";
        echo "\t\t\t\t\t\t\t<select name='danie" . $numer_zamowienia . "' id='danie" . $numer_zamowienia . "' data-price=" . $row['cena'] .  ">\n";
    }


    echo "\t\t\t\t\t\t\t\t<option value='---'>Bez dania</option>\n";

    while ($row = mysqli_fetch_assoc($result_dania)) {
        echo "\t\t\t\t\t\t\t\t<option value='" . $row['nazwa'] . "'>" . $row['nazwa'] . "</option>\n";
    }

    echo "\t\t\t\t\t\t\t</select>\n";
    echo "\t\t\t\t\t\t</div>\n";

    // DODATEK

    echo "\t\t\t\t\t\t<div>\n";

    while ($row = mysqli_fetch_assoc($result_cena_dodatku)) {
        echo "\t\t\t\t\t\t\t<h2>Dodatek " . $row['cena'] . "zł</h2>\n";
        echo "\t\t\t\t\t\t\t<select name='dodatek" . $numer_zamowienia . "' id='dodatek" . $numer_zamowienia . "' data-price=" . $row['cena'] . ">\n";
    }


    echo "\t\t\t\t\t\t\t\t<option value='---'>Bez dodatku</option>\n";

    while ($row = mysqli_fetch_assoc($result_dodatki)) {
        echo "\t\t\t\t\t\t\t\t<option value='" . $row['nazwa'] . "'>" . $row['nazwa'] . "</option>\n";
    }

    echo "\t\t\t\t\t\t\t</select>\n";
    echo "\t\t\t\t\t\t</div>\n";

    // SURÓWKA

    echo "\t\t\t\t\t\t<div>\n";

    while ($row = mysqli_fetch_assoc($result_cena_surowki)) {
        echo "\t\t\t\t\t\t\t<h2>Surówka " . $row['cena'] . "zł</h2>\n";
        echo "\t\t\t\t\t\t\t<select name='surowka" . $numer_zamowienia . "' id='surowka" . $numer_zamowienia . "' data-price=" . $row['cena'] . ">\n";
    }


    echo "\t\t\t\t\t\t\t\t<option value='---'>Bez surówki</option>\n";

    while ($row = mysqli_fetch_assoc($result_surowki)) {
        echo "\t\t\t\t\t\t\t\t<option value='" . $row['nazwa'] . "'>" . $row['nazwa'] . "</option>\n";
    }

    echo "\t\t\t\t\t\t\t</select>\n";
    echo "\t\t\t\t\t\t</div>\n";
    echo "\t\t\t\t\t</section>\n";

    // PIEROGI
    echo "\t\t\t\t\t<section class='pierogi'>\n";
    echo "\t\t\t\t\t\t<div>\n";

    while ($row = mysqli_fetch_assoc($result_cena_pierogow)) {
        echo "\t\t\t\t\t\t\t<h2>Pierogi " . $row['cena'] . "zł</h2>\n";
        echo "\t\t\t\t\t\t\t<select name='pierogi" . $numer_zamowienia . "' id='pierogi" . $numer_zamowienia . "' data-price=" . $row['cena'] . ">\n";
    }


    echo "\t\t\t\t\t\t\t\t<option value='---'>Bez pierogów</option>\n";

    while ($row = mysqli_fetch_assoc($result_pierogi)) {
        echo "\t\t\t\t\t\t\t\t<option value='" . $row['nazwa'] . "'>" . $row['nazwa'] . "</option>\n";
    }

    echo "\t\t\t\t\t\t\t</select>\n";
    echo "\t\t\t\t\t\t</div>\n";
    echo "\t\t\t\t\t</section>\n";
    echo "\t\t\t\t</section>\n";
    echo "\t\t\t</section>\n";

    mysqli_close($bazka) or die("nie zamkłem");
}

if ($_COOKIE['zamowienia'] == 1) {
    zamowienie(1);
} else if ($_COOKIE['zamowienia'] == 2) {
    zamowienie(1);
    zamowienie(2);
} else if ($_COOKIE['zamowienia'] == 3) {
    zamowienie(1);
    zamowienie(2);
    zamowienie(3);
} else {
    echo "Coś poszło nie tak";
}
