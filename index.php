<!DOCTYPE html>
<html lang="pl">

<head>
    <?php require_once 'head.html'; ?>
    <link rel="stylesheet" href="css/style.css">
</head>



<body>
    <main class="glowna">
        <header class="glowna">
            <h2>Wybierz liczbę osób:</h2>
        </header>
        <section>
            <i class="fas fa-user active"></i>
            <i class="fas fa-user-friends"></i>
            <i class="fas fa-users"></i>
            <section>
                <i class="fas fa-minus-circle"></i>
                <p id="users">1</p>
                <i class="fas fa-plus-circle"></i>
                <button>
                    <!-- <i class="fas fa-arrow-right"></i> -->
                    <a href="zamowienie.php">
                        <i class="fas fa-arrow-alt-circle-right"></i>
                    </a>
                </button>
            </section>
        </section>
    </main>
    <aside class="plate"><img src="img/background-plate.png" alt=""></aside>
    <section id="info">
        <header>
            <h1>Zamówienie Kubuś</h1>
        </header>
        <div>
            <p><strong>Zamówienia realizujemy do 10:30</strong></p>
            <p><strong>Pieniądze do operatorów do 12:00</strong></p>
        </div>
    </section>

    <aside class="alert">
        <p>Osiągnięto maksymalną liczbę zamówień</p>
        <button>Zamknij</button>
    </aside>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/users.js"></script>


</body>

</html>