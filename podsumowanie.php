<!DOCTYPE html>
<html lang="pl">

<head>
    <?php require_once 'head.html' ?>
</head>

<body>
    <main class="podsumowanie">
        <section class="podsumowanie">
            <?php

            $zamowienia = $_COOKIE['zamowienia'];

            echo "<header>\n";
            if ($zamowienia == 1) {
                echo "\t\t\t<h2>Twoje zamówienie:</h2>\n";
            } else if ($zamowienia <= 3) {
                echo "\t\t\t<h2>Twoje zamówienia:</h2>\n";
            }

            echo "\t\t</header>\n";


            for ($i = 1; $i <= $_COOKIE['zamowienia']; $i++) {
                echo "\t\t<div>\n";
                foreach ($_POST as $key => $value) {
                    setcookie($key, $value, 0);
                    if (strstr($key, "$i") !== FALSE) {
                        if ($value == "---") {
                            continue;
                        } else {
                            echo "\t\t\t<p>" . $value . "</p>\n";
                        }
                    }
                }

                echo "\t\t</div>\n";
            }

            ?>
        </section>
        <aside class="plate"><img src="img/background-plate.png" alt="plate"></aside>

        <?php
        echo "<aside class='cena'>";
        echo "<h3>Łącznie</h3>";
        echo "<p>PLN " . $_COOKIE['cena'] . "</p>";

        function proba()
        {
            echo "bambaryłka";
        }


        ?>
    </main>

    <form action="koniec.php" method="post" class="mail">
        <input type="email" name="mail" placeholder="Wpisz swój adres e-mail" required>
        <input type="submit" value="Gotowe">
    </form>


</body>

</html>