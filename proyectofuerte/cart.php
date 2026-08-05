<!-- cart.php -->
<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="cart.css">
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
                    <li><i class='bx bxs-moon change-theme' id="theme-button"></i></li>
                </ul>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>
    <h1>Su carrito de compras</h1>
    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
</svg>
    <div class="container">
    

              <!-- En cart.php -->
<?php
// Verifica si se ha enviado información del producto
if (isset($_GET['product']) && isset($_GET['price'])) {
    // Obtén la información del producto de la URL
    $product = $_GET['product'];
    $price = $_GET['price'];

    // Agrega el producto al carrito
    $item = array(
        'name' => $product,
        'price' => $price,
        // Puedes agregar más detalles según sea necesario
    );

    // Si el carrito aún no está inicializado, inicialízalo
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Agrega el nuevo artículo al carrito
    $_SESSION['cart'][] = $item;
}
?>
 <?php
        // Muestra los elementos del carrito
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $index => $item) {
                echo "<div class='cart-item'>";
                echo "<p>{$item['name']} - {$item['price']}</p>";
                // Agrega un formulario con un botón para eliminar el artículo
                echo "<form action='remove_item.php' method='post'>";
                echo "<input type='hidden' name='item_index' value='$index'>";
                echo "<button type='submit'>Eliminar</button>";
                echo "</form>";
                echo "</div>";
            }
        } else {
            echo "<p>Su carrito esta vacío</p>";
        }
        ?>
<!-- Luego, puedes mostrar los elementos del carrito en la página -->

<a href="checkout.php" class="proceed-to-payment">Proceder al pago</a>
</div>
</body>
</html>