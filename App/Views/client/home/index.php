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
                <a href="#">
                    <div class="cate-item">
                        <img class="item-img" src="<?= URL_IMG ?>/categories/1.jpg" alt="">
                        <h5 class="item-name">Rau</h5>
                        <p class="item-des">Các loại rau tươi</p>
                    </div>
                </a>

                <a href="#">
                    <div class="cate-item">
                        <img class="item-img" src="<?= URL_IMG ?>/categories/2.jpg" alt="">
                        <h5 class="item-name">Củ</h5>
                        <p class="item-des">Các loại củ tươi</p>
                    </div>
                </a>

                <a href="#">
                    <div class="cate-item">
                        <img class="item-img" src="<?= URL_IMG ?>/categories/3.jpg" alt="">
                        <h5 class="item-name">Quả</h5>
                        <p class="item-des">Các loại quả tươi</p>
                    </div>
                </a>

                <a href="#">
                    <div class="cate-item">
                        <img class="item-img" src="<?= URL_IMG ?>/categories/4.jpg" alt="">
                        <h5 class="item-name">Nấm</h5>
                        <p class="item-des">Các loại nấm tươi</p>
                    </div>
                </a>

                <a href="#">
                    <div class="cate-item">
                        <img class="item-img" src="<?= URL_IMG ?>/categories/6.jpg" alt="">
                        <h5 class="item-name">Hạt</h5>
                        <p class="item-des">Các loại hạt khô</p>
                    </div>
                </a>

                <a href="#">
                    <div class="cate-item">
                        <img class="item-img" src="<?= URL_IMG ?>/categories/5.jpg" alt="">
                        <h5 class="item-name">Bông</h5>
                        <p class="item-des">Các loại bông tươi</p>
                    </div>
                </a>
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
        <h2 class="title">CÁC LOẠI RAU HÔM NAY CỦA TÈO</h2>
        <div class="cate-content container categories">
            <div class="cate-item">
                <a href="#"><img class="item-img" src="<?= URL_IMG ?>/categories/1.jpg" alt=""></a>
                <h5 class="item-name">Bí Xanh</h5>
                <div class="star-vote mt-1">
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star-half-alt" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="far fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                </div>
                <div class="price-button">
                    <p style="color: var(--green); font-weight: 700; font-size:22px; margin-bottom:0">20.000đ</p>
                    <a href="#" class="btn btn-primary" style="font-size: 14px; font-weight: 700;">Thêm vào giỏ</a>
                </div>
            </div>

            <div class="cate-item">
                <a href="#"><img class="item-img" src="<?= URL_IMG ?>/categories/1.jpg" alt=""></a>
                <h5 class="item-name">Bí Xanh</h5>
                <div class="star-vote mt-1">
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star-half-alt" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="far fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                </div>
                <div class="price-button">
                    <p style="color: var(--green); font-weight: 700; font-size:22px; margin-bottom:0">20.000đ</p>
                    <a href="#" class="btn btn-primary" style="font-size: 14px; font-weight: 700;">Thêm vào giỏ</a>
                </div>
            </div>

            <div class="cate-item">
                <a href="#"><img class="item-img" src="<?= URL_IMG ?>/categories/1.jpg" alt=""></a>
                <h5 class="item-name">Bí Xanh</h5>
                <div class="star-vote mt-1">
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star-half-alt" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="far fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                </div>
                <div class="price-button">
                    <p style="color: var(--green); font-weight: 700; font-size:22px; margin-bottom:0">20.000đ</p>
                    <a href="#" class="btn btn-primary" style="font-size: 14px; font-weight: 700;">Thêm vào giỏ</a>
                </div>
            </div>

            <div class="cate-item">
                <a href="#"><img class="item-img" src="<?= URL_IMG ?>/categories/1.jpg" alt=""></a>
                <h5 class="item-name">Bí Xanh</h5>
                <div class="star-vote mt-1">
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star-half-alt" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="far fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                </div>
                <div class="price-button">
                    <p style="color: var(--green); font-weight: 700; font-size:22px; margin-bottom:0">20.000đ</p>
                    <a href="#" class="btn btn-primary" style="font-size: 14px; font-weight: 700;">Thêm vào giỏ</a>
                </div>
            </div>

            <div class="cate-item">
                <a href="#"><img class="item-img" src="<?= URL_IMG ?>/categories/1.jpg" alt=""></a>
                <h5 class="item-name">Bí Xanh</h5>
                <div class="star-vote mt-1">
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star-half-alt" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="far fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                </div>
                <div class="price-button">
                    <p style="color: var(--green); font-weight: 700; font-size:22px; margin-bottom:0">20.000đ</p>
                    <a href="#" class="btn btn-primary" style="font-size: 14px; font-weight: 700;">Thêm vào giỏ</a>
                </div>
            </div>

            <div class="cate-item">
                <a href="#"><img class="item-img" src="<?= URL_IMG ?>/categories/1.jpg" alt=""></a>
                <h5 class="item-name">Bí Xanh</h5>
                <div class="star-vote mt-1">
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star-half-alt" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="far fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                </div>
                <div class="price-button">
                    <p style="color: var(--green); font-weight: 700; font-size:22px; margin-bottom:0">20.000đ</p>
                    <a href="#" class="btn btn-primary" style="font-size: 14px; font-weight: 700;">Thêm vào giỏ</a>
                </div>
            </div>

            <div class="cate-item">
                <a href="#"><img class="item-img" src="<?= URL_IMG ?>/categories/1.jpg" alt=""></a>
                <h5 class="item-name">Bí Xanh</h5>
                <div class="star-vote mt-1">
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star-half-alt" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="far fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                </div>
                <div class="price-button">
                    <p style="color: var(--green); font-weight: 700; font-size:22px; margin-bottom:0">20.000đ</p>
                    <a href="#" class="btn btn-primary" style="font-size: 14px; font-weight: 700;">Thêm vào giỏ</a>
                </div>
            </div>

            <div class="cate-item">
                <a href="#"><img class="item-img" src="<?= URL_IMG ?>/categories/1.jpg" alt=""></a>
                <h5 class="item-name">Bí Xanh</h5>
                <div class="star-vote mt-1">
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="fas fa-star-half-alt" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                    <i class="far fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                </div>
                <div class="price-button">
                    <p style="color: var(--green); font-weight: 700; font-size:22px; margin-bottom:0">20.000đ</p>
                    <a href="#" class="btn btn-primary" style="font-size: 14px; font-weight: 700;">Thêm vào giỏ</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End menu -->


