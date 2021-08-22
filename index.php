<?php require_once 'header.php'; ?>

<h2 class="text-center">Ürün Listesi</h2>
<hr>
<div class="row">
    <?php
    $i = 0;
    $products = [1, 2, 3, 4, 5, 6, 7, 8];
    foreach ($products as $product) : $i++; ?>
        <!-- Card Start -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <img class="card-img-top" src="assets/img/products/p-0<?= $i; ?>.jpg" alt="{urun_adi}">
                <div class="card-body">
                    <h5 class="card-title">{urun_adi}</h5>
                    <p class="card-text">{urun_detayi}</p>
                    <p class="card-price">{urun_fiyati} ₺</p>
                    <a href="#" class="btn bt-warning text-white"><i class="fa fa-cart-plus"></i> Sepete Ekle</a>
                </div>
            </div>
        </div>
        <!-- ./Card End -->
    <?php endforeach; ?>
</div>
<hr>
<nav>
    <ul class="pagination pagi-ml">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                << Önceki</a>
        </li>
        <li class="page-item active" aria-current="page"><a class="page-link" href="#">01</a></li>
        <li class="page-item"><a class="page-link" href="#">02</a></li>
        <li class="page-item"><a class="page-link" href="#">...</a></li>
        <li class="page-item"><a class="page-link" href="#">13</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Sonraki >></a>
        </li>
    </ul>
</nav>

<?php require_once 'footer.php'; ?>