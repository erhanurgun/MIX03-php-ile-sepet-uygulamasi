<?php require_once 'header.php'; ?>

<head>
    <title>Ürün Listesi | BTMarket</title>
</head>
<h2 class="text-center">Ürün Listesi</h2>
<hr>
<div class="row">
    <?php
    $i = 0;
    foreach ($products as $product) :
        $i++;
        if ($product->p_status == 1) :
    ?>
            <!-- Card Start -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img class="img-fluid card-img-top" src="assets/img/products/<?= $product->p_imgurl; ?>" alt="<?= $product->p_name; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product->p_name; ?></h5>
                        <p class="card-text"><?= $product->p_detail; ?></p>
                        <p class="card-price"><?= $product->p_price; ?> ₺</p>
                        <button product-id="<?= $product->p_id; ?>" type="button" class="btn bt-warning text-white btnAddToCart"><i class="fa fa-cart-plus"></i> Sepete Ekle</button>
                    </div>
                </div>
            </div>
            <!-- ./Card End -->
        <?php endif; ?>
    <?php endforeach; ?>
</div>
<hr>
<!-- TODO: Pagination kısmı henüz tamamlanmadı -->
<nav class="pagi-pb">
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