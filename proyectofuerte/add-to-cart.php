<!-- add-to-cart.php -->
<?php
session_start();

if(isset($_POST['add_to_cart'])) {
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];

    $item = array('name' => $item_name, 'price' => $item_price);

    // Add item to the cart session variable
    $_SESSION['cart'][] = $item;
}

// Redirect back to the previous page (adjust the URL accordingly)
header("Location: {$_SERVER['HTTP_REFERER']}");
exit();
?>
