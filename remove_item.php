<?php
session_start();

// Verifica si se ha enviado información del índice del artículo a eliminar
if (isset($_POST['item_index'])) {
    $itemIndex = $_POST['item_index'];

    // Elimina el artículo del carrito usando el índice
    if (isset($_SESSION['cart'][$itemIndex])) {
        unset($_SESSION['cart'][$itemIndex]);
    }
}

// Redirige de vuelta a la página del carrito
header("Location: cart.php");
exit();
?>
