<?php
try {
    $dbName = 'www_shoppingcart';
    $dbUser = 'root';
    $dbPass = '';
    $db     = new PDO('mysql:host=localhost;dbname=' . $dbName . ';charset=utf8', $dbUser, $dbPass);
} catch (PDOException $e) {
    echo $e->getMessage();
}
