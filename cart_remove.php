<?php
include 'cartControl.php';

$num = $_GET['id'];

removeitem($_SESSION['cart'], $num);
header("Location: http://www.itss.brockport.edu/~nle1/cis442/puppyhouse/cartview.php");
exit();