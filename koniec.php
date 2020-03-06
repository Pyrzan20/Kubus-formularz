<!DOCTYPE html>
<html lang="pl">

<head>
    <?php require_once 'head.html' ?>
</head>

<body>
    <main class="">

        </section>
        <aside class="plate"><img src="img/background-plate.png" alt="plate"></aside>

        <?php
        $bazka = mysqli_connect('localhost', 'root', '', 'kubus') or die("A szo tak dobrze");

        $langadb = "SET NAMES utf8";
        mysqli_query($bazka, $langadb);

        for ($i = 1; $i <= $_COOKIE['zamowienia']; $i++) {
            $zamowienie = [];
            echo "<hr>";

            foreach ($_COOKIE as $key => $value) {
                if (strstr($key, "$i") !== FALSE) {
                    // echo $key . " = " . $value;
                    $zamowienie[str_replace("$i", '', $key)] = $value;
                }
            }
            // foreach ($zamowienie as $key => $value) {
            //     echo  "<br>" . $key . " = " . $value;
            // }

            $zapytanie = "INSERT INTO zamowienia(mail, zupa, drugie_danie, dodatek, surowka, pierogi, kwota) VALUES(
                    '" . $_POST['mail'] . "'
                    , '" . $zamowienie['zupa'] . "'
                    , '" . $zamowienie['danie'] . "'
                    , '" . $zamowienie['dodatek'] . "'
                    , '" . $zamowienie['surowka'] . "'
                    , '" . $zamowienie['pierogi'] . "'
                    , " . $_COOKIE['cena'] . ")";

            echo $zapytanie;

            mysqli_query($bazka, $zapytanie);
        }

        mysqli_close($bazka);
        ?>


</body>

</html>