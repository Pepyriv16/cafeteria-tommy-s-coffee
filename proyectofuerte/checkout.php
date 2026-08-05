<!-- checkout.php -->
<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="checkout.css">
    <link rel="icon" href="logo.png">
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
                    <li class="nav__item"><a href="cart.php" class="nav__link active-link">Carrito de compra</a></li>
                    <li><i class='bx bxs-moon change-theme' id="theme-button"></i></li>
                </ul>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>
    <?php
    // Display selected items from the session (similar to cart.php)
    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        foreach($_SESSION['cart'] as $item) {
            echo "<p>{$item['name']} - {$item['price']}</p>";
        }
    } else {
        echo "<p>Su carrito esta vacío</p>";
    }
    ?>
 <img src="https://checkoutshopper-live.adyen.com/checkoutshopper/images/logos/visa.svg" alt="VISA" class="adyen-checkout__image adyen-checkout__image--loaded" style= "float: left";>
    <img src="https://checkoutshopper-live.adyen.com/checkoutshopper/images/logos/mc.svg" alt="MasterCard" class="adyen-checkout__image adyen-checkout__image--loaded">
    <!-- Add a form for payment information -->
    <form action="process-payment.php" method="POST">
        <!-- Include payment form fields (e.g., credit card information) -->
        <input type="text" name="credit_card_number" placeholder="Credit Card Number" required>
        <input type="text" name="expiration_date" placeholder="Expiration Date" required>
        <!-- Add more payment fields as needed -->
        
        <button type="submit" class="button">Pagar</button>
    </form>
</body>
</html>