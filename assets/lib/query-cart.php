<?php
session_start();
require_once 'conn.php';
/* --------------------------------------------- */
function addToCart($product_item)
{
    // SESSION Kontrolü:
    if (isset($_SESSION['shoppingCart'])) {
        $shoppingCart = $_SESSION['shoppingCart'];
        $products    = $shoppingCart['products'];
    } else {
        $products = [];
    }
    // Adet Kontrolü:
    if (array_key_exists($product_item->p_id, $products)) {
        $products[$product_item->p_id]->count++;
    } else {
        $products[$product_item->p_id] = $product_item;
    }
    // Sepetin Hesaplanması:
    $total_price = 0.0;
    $total_count = 0;
    foreach ($products as $product) {
        $product->total_price = $product->count * $product->p_price;
        $total_price += $product->total_price;
        $total_count += $product->count;
    }
    $summary['total_price'] = $total_price;
    $summary['total_count'] = $total_count;
    $_SESSION['shoppingCart']['products'] = $products;
    $_SESSION['shoppingCart']['summary']  = $summary;
    return $total_count;
}
/* --------------------------------------------- */
function removeFromCart($product_id)
{
    // SESSION Kontrolü:
    if (isset($_SESSION['shoppingCart'])) {
        $shoppingCart = $_SESSION['shoppingCart'];
        $products    = $shoppingCart['products'];
        // Ürünü Listeden Çıkar:
        if (array_key_exists($product_id, $products)) {
            unset($products[$product_id]);
        }
        // Sepetin Hesaplanması:
        $total_price = 0.0;
        $total_count = 0;
        foreach ($products as $product) {
            $product->total_price = $product->count * $product->p_price;
            $total_price += $product->total_price;
            $total_count += $product->count;
        }
        $summary['total_price'] = $total_price;
        $summary['total_count'] = $total_count;
        $_SESSION['shoppingCart']['products'] = $products;
        $_SESSION['shoppingCart']['summary']  = $summary;
        return true;
    }
}
/* --------------------------------------------- */
function incCount($product_id)
{
    // SESSION Kontrolü:
    if (isset($_SESSION['shoppingCart'])) {
        $shoppingCart = $_SESSION['shoppingCart'];
        $products     = $shoppingCart['products'];
    }
    // Adet Kontrolü:
    if (array_key_exists($product_id, $products)) {
        $products[$product_id]->count++;
    }
    // Sepetin Hesaplanması:
    $total_price = 0.0;
    $total_count = 0;
    foreach ($products as $product) {
        $product->total_price = $product->count * $product->p_price;
        $total_price += $product->total_price;
        $total_count += $product->count;
    }
    $summary['total_price'] = $total_price;
    $summary['total_count'] = $total_count;
    $_SESSION['shoppingCart']['products'] = $products;
    $_SESSION['shoppingCart']['summary']  = $summary;
    return $total_count;
}
/* --------------------------------------------- */
function decCount($product_id)
{
    // SESSION Kontrolü:
    if (isset($_SESSION['shoppingCart'])) {
        $shoppingCart = $_SESSION['shoppingCart'];
        $products     = $shoppingCart['products'];
    }
    // Adet Kontrolü:
    if (array_key_exists($product_id, $products)) {
        if ($products[$product_id]->count > 1) {
            $products[$product_id]->count--;
        }
    }
    // Sepetin Hesaplanması:
    $total_price = 0.0;
    $total_count = 0;
    foreach ($products as $product) {
        $product->total_price = $product->count * $product->p_price;
        $total_price += $product->total_price;
        $total_count += $product->count;
    }
    $summary['total_price'] = $total_price;
    $summary['total_count'] = $total_count;
    $_SESSION['shoppingCart']['products'] = $products;
    $_SESSION['shoppingCart']['summary']  = $summary;
    return $total_count;
}
/* --------------------------------------------- */
if (isset($_POST['p'])) {
    $islem = $_POST['p'];
    // İşlem Tipi:
    if ($islem == "addToCart") {
        $id = $_POST['product_id'];
        $product = $db->query("SELECT * FROM products WHERE p_id={$id}", PDO::FETCH_OBJ)->fetch();
        $product->count = 1;
        echo addToCart($product);
    } else if ($islem == "removeFromCart") {
        $id = $_POST['product_id'];
        echo removeFromCart($id);
    }
}
/* --------------------------------------------- */
if (isset($_GET['p'])) {
    $islem = $_GET['p'];
    // İşlem Tipi:
    if ($islem == "incCount") {
        $id = $_GET['product_id'];
        if (incCount($id)) {
            Header("Location: ../../cart");
            exit;
        }
    } else if ($islem == "decCount") {
        $id = $_GET['product_id'];
        if (decCount($id)) {
            Header("Location: ../../cart");
            exit;
        }
    }
}
/* --------------------------------------------- */