<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="checkout.css">
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="process-payment.css">

    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="swiper.css" />
    <title>Carrito de compras</title>
</head>
<body>
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>
    <header class="header" id="header">
        <nav class="nav bd-container">
            <a href="index.php" class="nav__logo"><img src="logo.png"></a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="index.php" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">Acerca de</a></li>
                    <li class="nav__item"><a href="#services" class="nav__link">Servicios</a></li>
                    <li class="nav__item"><a href="#menu" class="nav__link">Menu</a></li>
                    <li class="nav__item"><a href="checkout.php" class="nav__link active-link">Pedido</a></li>
                    <li><i class='bx bxs-moon change-theme' id="theme-button"></i></li>
                </ul>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>
    <?php

    if (isset($_POST['credit_card_number']) && isset($_POST['expiration_date'])) {
        // Simulate a successful payment
        $payment_successful = true;

        if ($payment_successful) {
            // Clear the cart after successful payment
            unset($_SESSION['cart']);
            ?>
            <div class="success-message">
                <p>Su pago se realizó correctamente! Gracias por su orden.</p>
            </div>
            <?php
        } else {
            echo "<p>Error processing payment. Please try again.</p>";
        }
    } else {
        echo "<p>Error: Payment information not provided.</p>";
    }
    ?>
</body>
</html>
