<!DOCTYPE html>
<html lang="pl">

<head>
    <?php require_once 'head.html'; ?>
</head>

<body>
    <main class="formularz">
        <form action="podsumowanie.php" method="POST">

            <?php require_once 'dania.php'; ?>

            <section class="zamow">
                <input type="submit" value="ZAMAWIAM">
            </section>

        </form>
    </main>
    <aside class="cena">
        <h3>Łącznie</h3>
        <p>PLN <span>0</span></p>
    </aside>
    <aside class="plate"><img src="img/background-plate.png" alt="plate"></aside>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/formularz.js"></script>
</body>

</html>