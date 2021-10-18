<!-- Banner -->
<div>
    <img src="<?= URL_ICON ?>/product-banner-Copy.jpg" alt="banner" class="img-fluid">
</div>

<!-- Product detail -->
<div class="container pt-3 pb-3 bg-white">
    <h3 class="sub-title text-center" style="color: var(--bs-green)">Sản phẩm</h2>
    <h2 class="title text-center" style="color: var(--bs-primary)">THÔNG TIN SẢN PHẨM</h2>
    <div class="about">
        <img class="about-logo w-50" src="<?= URL_IMG ?>/vegetables/<?= $data['vege_to_show']['image'] ?>" alt="">
        <div class="about-content mt-4 w-50 ps-5 pt-3">
            <h2 class="about-content-title"><?= $data['vege_to_show']['name'] ?></h2>
            <div class="star-vote mt-1 justify-content-start">
                <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                <i class="fas fa-star-half-alt" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                <i class="far fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
            </div>
            <h5 class="slide-price"><?= number_format($data['vege_to_show']['price'],0, ',','.') ?>đ</h5>
            <p class="detail-content">Khối lượng: <b><?= $data['vege_to_show']['weight']==1000 ? '1k' : $data['vege_to_show']['weight'] ?>g</b></p>
            <div class="detail-amount mb-3">
                <p class="d-inline detail-content">Số lượng:</p>
                <input id="detail_amount" onchange="updateValue(this.value)" class="form-control text-center d-inline w-25" value="1" type="number" min="1" max="10">
            </div>
            <button class="btn btn-primary" onclick="addToCartInDetail(<?= isset($_SESSION['user'])? $_SESSION['user']['id']: 0 ?>, <?= $data['vege_to_show']['id']?>)">Thêm vào giỏ</button>
            <div class="detail-bonus mt-4">
                <h5 style="color: var(--bs-primary); font-weight: 600; margin-bottom: 20px;">NGUỒN GỐC SẢN PHẨM</h5>
                <p class="detail-content"><b>Hạt giống:</b> <?= $data['vege_to_show']['seed'] ?></p>
                <p class="detail-content"><b>Nơi trồng:</b> <?= $data['vege_to_show']['planting_place'] ?></p>
            </div>
        </div>
    </div>
</div>


<!-- Menu -->
<div class="wrapper pt-3" style="background-color: var(--body)!important;">
    <div class="container d-flex flex-column align-items-center">
        <h3 class="sub-title">Menu</h2>
        <h2 class="title">CÁC SẢN PHẨM CÙNG LOẠI</h2>
        <div class="cate-content container menu">
            <?php foreach($data["vege_by_cate"] as $i => $vege) :?>
                <div class="cate-item">
                    <a href="<?= DOCUMENT_ROOT?>/products/detail/<?= $vege['id']?>"><img class="item-img" src="<?= URL_IMG ?>/vegetables/<?= $vege['image'] ?>" alt=""></a>
                    <h5 class="item-name"><?= ucwords($vege['name']) ?></h5>
                    <div class="star-vote mt-1">
                        <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                        <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                        <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                        <i class="fas fa-star-half-alt" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                        <i class="far fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    </div>
                    <div class="price-button">
                        <p style="color: var(--green); font-weight: 700; font-size:22px; margin-bottom:0; line-height: 38px"><?= number_format($vege["price"],0, ',','.') ?>đ</p>
                        <button onclick="addToCart(<?= isset($_SESSION['user'])? $_SESSION['user']['id']: 0 ?> , <?= $vege['id']?>)" class="btn btn-primary" style="font-size: 14px; font-weight: 700;">Thêm vào giỏ</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- End menu -->