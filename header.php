<?php require_once 'assets/inc/header-query.php'; ?>
<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Erhan ÜRGÜN, @erhanurgun">
    <meta name="description" content="E-Ticaret sitesi için bir sepet uyulamması örneği">
    <link rel="shortcut icon" href="https://bilinentasarim.com/dimg/diger/favicon.svg">
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendors/css/custom.css">

    <style>
        :root {
            /* DeepYellow */
            --color-1: #fab700;
            /* DeepPink */
            --color-2: #ff1493;
            /* DeepGreen */
            --color-3: #04aa6d;
            /* Dark */
            --color-4: #212529;
            /* FireBrick */
            --color-5: #b22222;
            /* DodgerBlue */
            --color-6: #1e90ff;
            /* OrangeRed */
            --color-7: #ff4500;
            /* Purple */
            --color-8: #800080;
            /* White */
            --color-9: #ffffff;
            /* Main Color 1 */
            --main-color-1: var(--color-1);
            /* Main Color 2 */
            --main-color-2: var(--color-4);
        }
    </style>
</head>

<body>
    <!-- Header Start -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bt-dark">
            <div class="container">
                <a class="navbar-brand" href="index">
                    <span class="logo">
                        <?php require_once 'assets/inc/header-logo.php'; ?>
                    </span>
                    <strong class="market"><span class="bt-text">BT</span>Market</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#btNavbar" aria-controls="btNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <span class="bosluk"></span>
                <div class="collapse navbar-collapse" id="btNavbar">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="index"><i class="fa fa-home bt-text"></i> Ürün Listesi</a>
                        <a class="nav-link disabled" href="#"><i class="fa fa-newspaper bt-text"></i> Hakkımızda</a>
                        <a class="nav-link disabled" href="#"><i class="fa fa-info-circle bt-text"></i> İletişim</a>
                    </div>
                </div>
                <a href="cart" class="btn btn-sm text-light position-relative cart-mr">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bt-warning">
                        <span id="cart-count"><?= $total_count; ?></span>
                    </span>
                </a>
            </div>
        </nav>
    </header>
    <!-- ./Header End -->

    <!-- Main Start -->
    <main>
        <div class="container mt-3">