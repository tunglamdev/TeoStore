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
                <?php
                    $vote = floor($data['avg_rating']);
                    $no_vote = floor(5-$data['avg_rating']);
                    $half_vote = 5 - ($vote + $no_vote);
                ?>
                <?php for($i=1; $i <= $vote; $i++) : ?>
                    <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                <?php endfor; ?>
                <?php for($i=1; $i <= $half_vote; $i++) : ?>
                    <i class="fas fa-star-half-alt" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                <?php endfor; ?>
                <?php for($i=1; $i <= $no_vote; $i++) : ?>
                    <i class="far fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                <?php endfor; ?>
            </div>
            <h5 class="slide-price"><?= number_format($data["vege_to_show"]["sale_price"]==NULL ? $data['vege_to_show']['price'] : $data['vege_to_show']['sale_price'],0, ',','.') ?>đ</h5>
            <p class="detail-content">Khối lượng: <b><?= $data['vege_to_show']['weight']==1000 ? '1k' : $data['vege_to_show']['weight'] ?>g</b></p>
            <div class="detail-amount mb-3">
                <p class="d-inline detail-content">Số lượng:</p>
                <input id="detail_amount" class="form-control text-center d-inline w-25" value="1" type="number" min="1" max="10">
            </div>
            <button class="btn btn-primary" onclick="addToCartInDetail(<?= isset($_SESSION['user'])? $_SESSION['user']['id']: 0 ?>, <?= $data['vege_to_show']['id']?>, detail_amount)">Thêm vào giỏ</button>
            <div class="detail-bonus mt-4">
                <h5 style="color: var(--bs-primary); font-weight: 600; margin-bottom: 20px;">NGUỒN GỐC SẢN PHẨM</h5>
                <p class="detail-content"><b>Hạt giống:</b> <?= $data['vege_to_show']['seed'] ?></p>
                <p class="detail-content"><b>Nơi trồng:</b> <?= $data['vege_to_show']['planting_place'] ?></p>
            </div>
        </div>
    </div>

    <!-- Comment and vote -->
    <div class="comment mt-3">
        <h3 class="sub-title text-left" style="color: var(--bs-green)">Bình luận & Đánh giá</h2>
        <div class="container mt-2">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <?php if(isset($_SESSION["user"])) : ?>
                        <div>
                            <form action="<?= DOCUMENT_ROOT ?>/products/addComment/<?= $data['vege_to_show']['id']?>" method="post">
                                <div class="d-flex flex-row add-comment-section mt-2 mb-2">
                                    <img class="img-responsive rounded-circle mr-2" src="<?= URL_IMG ?>/users/<?= $_SESSION['user']['avatar']?>" width="50">
                                    <input type="text" name="comment-content" class="form-control mr-3 ms-2" style="color:black" placeholder="Thêm bình luận">
                                </div>
                                <div class="d-flex flex-row add-comment-section mt-2 mb-2 justify-content-between">
                                    <div class="star-rating icons align-items-center justify-content-center">
                                        <small class="ms-5">Bạn chấm sản phẩm bao nhiêu điểm?</small>
                                        <input type="radio" name="rate" id="rate-5" value="5">
                                        <label for="rate-5" class="fas fa-star"></label>
                                        <input type="radio" name="rate" id="rate-4" value="4">
                                        <label for="rate-4" class="fas fa-star"></label>
                                        <input type="radio" name="rate" id="rate-3" value="3">
                                        <label for="rate-3" class="fas fa-star"></label>
                                        <input type="radio" name="rate" id="rate-2" value="2">
                                        <label for="rate-2" class="fas fa-star"></label>
                                        <input type="radio" name="rate" id="rate-1" value="1">
                                        <label for="rate-1" class="fas fa-star"></label>
                                    </div>
                                    <input class="btn btn-primary" type="submit" value="Đánh giá">
                                </div>
                            </form>
                        </div>
                    <?php endif; ?>
                    <div class="headings d-flex justify-content-between align-items-center mb-3">
                        <h5>Tất cả bình luận(<?= $data['num_of_feedback'] ?>) <?= round($data['avg_rating'], 2) ?>/5<i class="fa fa-star text-warning"></i></h5>
                    </div>
                    <?php foreach($data["feedback"] as $i => $feedback) : ?>
                        <div class="card p-3 mt-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="user d-flex flex-row align-items-center"> <img src="<?= URL_IMG ?>/users/<?= $feedback['avatar'] ?>" width="30" class="user-img rounded-circle mr-2"> <span><small class="font-weight-bold text-primary"><?= $feedback['name'] ?></small> <small class="font-weight-bold"><?= $feedback['comment'] ?></small></span> </div> <small><?= $feedback['time'] ?></small>
                            </div>
                            <div class="action d-flex justify-content-end mt-2 align-items-center">
                                <!-- <div class="reply px-4"> <small>Remove</small> <span class="dots"></span> <small>Reply</small> <span class="dots"></span> <small>Translate</small> </div> -->
                                <div class="icons align-items-center">
                                    <?php for($i=1; $i<=$feedback["vote"]; $i++) : ?>
                                        <i class="fa fa-star text-warning"></i>
                                    <?php endfor; ?>

                                    <?php for($i=1; $i<= 5-$feedback["vote"]; $i++) : ?>
                                        <i class="far fa-star text-warning"></i>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
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
                        <?php
                            $rate = $data[$vege['id']]["rating"];
                            $vote = floor($rate);
                            $no_vote = floor(5-$rate);
                            $half_vote = 5 - ($vote + $no_vote);
                        ?>
                        <?php for($i=1; $i <= $vote; $i++) : ?>
                            <i class="fas fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                        <?php endfor; ?>
                        <?php for($i=1; $i <= $half_vote; $i++) : ?>
                            <i class="fas fa-star-half-alt" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                        <?php endfor; ?>
                        <?php for($i=1; $i <= $no_vote; $i++) : ?>
                            <i class="far fa-star" style="color: #FFCC33; margin-left:1px; margin-right:1px; font-size: 16px;"></i>
                        <?php endfor; ?>
                    </div>
                    <div class="price-button">
                        <p style="color: var(--green); font-weight: 700; font-size:22px; margin-bottom:0; line-height: 38px"><?= number_format($vege["sale_price"]==NULL ? $vege["price"] : $vege["sale_price"],0, ',','.') ?>đ</p>
                        <button onclick="addToCart(<?= isset($_SESSION['user'])? $_SESSION['user']['id']: 0 ?> , <?= $vege['id']?>)" class="btn btn-primary" style="font-size: 14px; font-weight: 700;">Thêm vào giỏ</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- End menu -->