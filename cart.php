<?php require_once 'header.php'; ?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Uyarı!</strong> <br />
    Sepetinizde henüz ürün bulunmamaktadır. <br />
    Lütfen bu <a href="index">link</a>'e tıklayarak ürünler sayfasına gidiniz...
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Bilgi!</strong> <br />
    Sepetinizde <strong>10</strong> adet ürün bulunmaktadır.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<hr>

<table id="product-table" class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col"><i class="fa bt-text fa-barcode"></i> #</th>
            <th scope="col"><i class="fa bt-text fa-images"></i> Ürün Resmi</th>
            <th scope="col"><i class="fa bt-text fa-text-width"></i> Ürün Adı</th>
            <th scope="col"><i class="fa bt-text fa-lira-sign"></i> Fiyatı</th>
            <th scope="col"><i class="fa bt-text fa-sort-numeric-down"></i> Adeti</th>
            <th scope="col"><i class="fa bt-text fa-lira-sign"></i> Toplam</th>
            <th scope="col"><i class="fa bt-text fa-tasks"></i> İşlem</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        $products = [1, 2, 3, 4, 5, 6];
        foreach ($products as $product) : $i++; ?>
            <tr>
                <th scope="row"><?= $i < 10 ? '0' . $i : $i; ?></th>
                <td>
                    <img width="50" src="assets/img/products/p-01.jpg" alt="{urun_adi}">
                </td>
                <td>{urun_adi}</td>
                <td>{urun_fiyati}</td>
                <td>{urun_adeti}</td>
                <td>{toplam_fiyat}</td>
                <td>
                    <button class="btn btn-sm btn-danger">
                        <i class="fa fa-trash-alt"></i>
                        Çıkar
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <th colspan="3" class="text-right">
            Toplam Ürün: <span class="color-danger"> <?= $i; ?> adet</span>
        </th>
        <th colspan="3" class="text-right">
            Toplam Tutar: <span class="color-danger"><?= $i; ?> ₺</span>
        </th>
    </tfoot>
</table>


<hr>
<?php require_once 'footer.php'; ?>