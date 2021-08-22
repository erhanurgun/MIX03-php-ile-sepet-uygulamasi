<?php
session_start();
require_once 'assets/lib/conn.php';
require_once 'assets/lib/func.php';
/* --------------------------------------------- */
$products = $db->query("SELECT * FROM products ORDER BY p_id DESC", PDO::FETCH_OBJ)->fetchAll();
/* --------------------------------------------- */
if (isset($_SESSION['shoppingCart'])) {
    $shoppingCart  = $_SESSION['shoppingCart'];
    $total_count   = $shoppingCart['summary']['total_count'];
    $total_price   = $shoppingCart['summary']['total_price'];
    $shop_products = $shoppingCart['products'];
} else {
    $total_price = 0.0;
    $total_count = 0;
}
/* --------------------------------------------- */
