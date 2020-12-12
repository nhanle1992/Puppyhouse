<?php
require 'cartControl.php';
$itemId = $_POST['itemId'];
$custId = $_POST['custId'];
$quan = $_POST['quantity'];
$size = $_POST['size'];
$cart = $_SESSION['cart'];
additem($cart, new cartItem($itemId, $custId, $quan, $size));
$_SESSION['cart'] = $cart;
header("Location: http://www.itss.brockport.edu/~nle1/cis442/puppyhouse/cartview.php");
exit();