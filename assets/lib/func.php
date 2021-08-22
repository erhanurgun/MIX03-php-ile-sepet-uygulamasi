<?php
/* --------------------------------------------- */
function formPost($post)
{
    $value = strip_tags(htmlspecialchars(trim($_POST[$post])));
    return $value;
}
/* ----------------------------------------------------- */
function formGet($get)
{
    $value = strip_tags(htmlspecialchars(trim($_GET[$get])));
    return $value;
}
/* --------------------------------------------- */
function addToCart($product_item)
{
    // SESSION Kontrolü:
    if (isset($_SESSION['shoppingCart'])) {
        $shoppingCart = $_SESSION['shoppingCart'];
        $products     = $shoppingCart['products'];
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
function removeCart($product_id, $logical)
{
    // SESSION Kontrolü:
    if (isset($_SESSION['shoppingCart'])) {
        $shoppingCart = $_SESSION['shoppingCart'];
        $products    = $shoppingCart['products'];
        // Ürünü Listeden Çıkar:
        if (array_key_exists($product_id, $products)) {
            if ($logical) {
                unset($products[$product_id]);
            } else {
                session_destroy();
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
        return true;
    }
}
/* --------------------------------------------- */
function itemCount($product_id, $logical)
{
    // SESSION Kontrolü:
    if (isset($_SESSION['shoppingCart'])) {
        $shoppingCart = $_SESSION['shoppingCart'];
        $products     = $shoppingCart['products'];
    }
    // Adet Kontrolü:
    if (array_key_exists($product_id, $products)) {
        if ($logical) {
            if ($products[$product_id]->count < 20) {
                $products[$product_id]->count++;
            }
        } else {
            if ($products[$product_id]->count > 1) {
                $products[$product_id]->count--;
            }
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