<!-- Banner -->
    <div>
        <img class="img-fluid" src="<?= URL_ICON ?>/banner.jpg" alt="">
    </div>
<!-- End banner -->

<!-- Slider -->
    <div class="container">
        <div id="carouselExampleSlidesOnly" class="carousel slide z-1 mt-3 mb-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-xs-12 d-flex flex-column justify-content-center align-items-start slideshow mb-2">
                            <h3 class="text-capitalize slide-title">Ớt chuông</h3>
                            <h4 class="slide-price">45.000đ</h4>
                            <p class="slide-content">Những người yêu thích thực phẩm sạch như bạn là người truyền cảm hứng cho Tèo làm việc mỗi ngày. Những ý kiến đóng góp của bạn sẽ giúp Tèo ngày càng hoàn thiện hơn và phục vụ bạn tốt hơn! </p>
                            <a href="#" class="btn btn-primary font-weight-bold">Mua ngay</a>
                        </div>
                        <div class="col-xl-6 col-md-6 col-xs-12">
                            <img src="<?= URL_IMG ?>/vegetables/68.jpg" class="img-fluid"alt="" srcset="">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-xs-12 d-flex flex-column justify-content-center align-items-start slideshow mb-2">
                            <h3 class="text-capitalize slide-title">Bí xanh</h3>
                            <h4 class="slide-price">20.000đ</h4>
                            <p class="slide-content">Những người yêu thích thực phẩm sạch như bạn là người truyền cảm hứng cho Tèo làm việc mỗi ngày. Những ý kiến đóng góp của bạn sẽ giúp Tèo ngày càng hoàn thiện hơn và phục vụ bạn tốt hơn! </p>
                            <a href="#" class="btn btn-primary font-weight-bold">Mua ngay</a>
                        </div>
                        <div class="col-xl-6 col-md-6 col-xs-12">
                            <img src="<?= URL_IMG ?>/vegetables/7.jpg" class="img-fluid"alt="" srcset="">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-xs-12 d-flex flex-column justify-content-center align-items-start slideshow mb-2">
                            <h3 class="text-capitalize slide-title">Cà chua</h3>
                            <h4 class="slide-price">15.000đ</h4>
                            <p class="slide-content">Những người yêu thích thực phẩm sạch như bạn là người truyền cảm hứng cho Tèo làm việc mỗi ngày. Những ý kiến đóng góp của bạn sẽ giúp Tèo ngày càng hoàn thiện hơn và phục vụ bạn tốt hơn! </p>
                            <a href="#" class="btn btn-primary font-weight-bold">Mua ngay</a>
                        </div>
                        <div class="col-xl-6 col-md-6 col-xs-12">
                            <img src="<?= URL_IMG ?>/vegetables/14.jpg" class="img-fluid"alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End slider -->

<!-- Categories -->
    <div class="wrapper pt-3" style="background-color: var(--body)!important;">
        <div class="container d-flex flex-column align-items-center">
            <h3 class="sub-title">Sản Phẩm</h2>
            <h2 class="title">CÁC LOẠI SẢN PHẨM CỦA TÈO</h2>
            <div class="cate-content container categories">
                <?php foreach($data["cate"] as $i => $cate) :?>
                    <a href="<?= DOCUMENT_ROOT ?>/products/categories?id=<?= $cate['id']?>&page=1">
                        <div class="cate-item">
                            <img class="item-img" src="<?= URL_IMG ?>/categories/<?= $cate["image"]?>" alt="">
                            <h5 class="item-name"><?= ucfirst($cate["name"]) ?></h5>
                            <p class="item-des">Các loại <?= strtolower($cate["name"]) ?> tươi</p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<!-- End categories -->

<!-- Guarranty -->
<?php require_once VIEW."/client/shared/guarantee.php"; ?>
<!-- End guarranty -->

<!-- Menu -->
<div class="wrapper pt-3" style="background-color: var(--body)!important;">
    <div class="container d-flex flex-column align-items-center">
        <h3 class="sub-title">Menu</h2>
        <h2 class="title">RAU HÔM NAY TẠI NHÀ TÈO</h2>
        <div class="cate-content container categories">
            <?php foreach($data["vege_to_show"] as $i => $vege) :?>
                <div class="cate-item">
                    <a href="#"><img class="item-img" src="<?= URL_IMG ?>/vegetables/<?= $vege['image'] ?>" alt=""></a>
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
                        <a href="#" class="btn btn-primary" style="font-size: 14px; font-weight: 700;">Thêm vào giỏ</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination mt-3">
                <li class="page-item ps-1 pe-1"><a class="page-link" href="<?= DOCUMENT_ROOT ?>/products/index?page=1"><i class="fas fa-angle-double-left"></i></a></li>
                <?php $num = ceil($data["num_of_vege"]/NUM_OF_VEGE_ON_PAGE); ?>
                <?php for($i=1; $i<=$num ; $i++) :?>
                    <li class="page-item ps-1 pe-1 <?= $i==1 ? 'active' : ''?>"><a class="page-link" href="<?= DOCUMENT_ROOT ?>/products/index?page=<?= $i ?>"><?= $i ?></a></li>
                <?php endfor; ?>
                <li class="page-item ps-1 pe-1"><a class="page-link" href="<?= DOCUMENT_ROOT ?>/products/index?page=2"><i class="fas fa-angle-double-right"></i></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- End menu -->
