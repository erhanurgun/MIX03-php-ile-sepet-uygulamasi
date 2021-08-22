<?php
session_start();
require_once 'conn.php';
require_once 'func.php';
/* --------------------------------------------- */
if (isset($_POST['p'])) {
    $islem = formPost('p');
    $pid   = formPost('product_id');
    // İşlem Tipi:
    if ($islem == "addToCart") {
        $product = $db->query("SELECT * FROM products WHERE p_id={$pid}", PDO::FETCH_OBJ)->fetch();
        $product->count = 1;
        echo addToCart($product);
    } else if ($islem == "removeFromCart") {
        echo removeFromCart($pid);
    }
}
/* --------------------------------------------- */
if (isset($_GET['p'])) {
    $islem = formGet('p');
    $pid   = formGet('product_id');
    // İşlem Tipi:
    if ($islem == "incCount") {
        if (incCount($pid)) {
            Header("Location: ../../cart");
            exit;
        }
    } else if ($islem == "decCount") {
        if (decCount($pid)) {
            Header("Location: ../../cart");
            exit;
        }
    }
}
/* --------------------------------------------- */