<!-- Banner -->
<div>
    <img src="<?= URL_ICON ?>/product-banner-Copy.jpg" alt="banner" class="img-fluid">
</div>
<!-- User information -->
<div class="wrapper bg-white">
    <div class="container pt-3 pb-3 mt-5 border border-2 rounded-3" style="background-color: var(--body)">
        <h3 class="sub-title text-center" style="color: var(--bs-green)">Cá nhân</h2>
        <h2 class="title text-center" style="color: var(--bs-primary)">THÔNG TIN CÁ NHÂN</h2>
        <div class="container">
            <div class="profile">
                <div class="user-avatar">
                    <img class ="avatar-img mb-3" src="<?= URL_IMG ?>/users/<?= $data['user']['avatar']?>" alt="Ảnh đại diện">
                    <form action="" method="post">
                        <input type="file" name="file" id="file">
                        <label class ="btn btn-primary" for="file">Tải ảnh lên</label>
                    </form>
                </div>
                <div class="user-info">
                    <form action="<?= DOCUMENT_ROOT ?>/user/update" class="profile-form" method="post">
                        <div class="form-content">
                            <p class="input-name">Họ và tên</p>
                            <input name="name" type="text" id="username" value="<?= $data["user"]["name"] ?>">                        
                        
                            <p class="input-name">Địa chỉ email</p>
                            <input name="email" type="text" id="email" value="<?= $data["user"]["email"] ?>">                       
                    
                            <p class="input-name">Số điện thoại</p>
                            <input name="phone" type="text" id="phone" value="<?= $data["user"]["phone"] ?>">  
                                                    
                            <p class="input-name">Địa chỉ</p>
                            <input name="address" type="text" id="address" value="<?= $data["user"]["address"] ?>">
                        </div>
                        <input class="btn btn-primary" type="submit" value="Cập nhật">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- History -->
<div class="wraper">
    <div class="container mt-3">
        <h3 class="sub-title text-center" style="color: var(--bs-green)">Đơn hàng</h2>
        <h2 class="title text-center" style="color: var(--bs-primary)">LỊCH SỬ ĐẶT HÀNG</h2>
        <!-- No processed Orders -->
        <?php foreach($data["noProcessedOrders"] as $index => $orders) :?>
            <div class="history">
                <?php $total = 0; ?>
                <div class="history-title">Mã đơn hàng: #<?= $orders["id"] ?></div>
                
                <?php foreach($data[$orders["id"]]["vege"] as $i => $vege) :?>
                    <div class="history-content">
                        <div class="history-content-img">
                                <img src="<?= URL_IMG ?>/vegetables/<?= $vege['image'] ?>" alt="" class=>
                        </div>

                        <div class="history-content-decs">
                            <p class="cake-name"><b><?= $vege['name'] ?></b></p>
                            <p class="cake-size">Khối lượng: <?= $vege['weight'] ?>g</p>
                            <p class="cake-price" style="color: var(--main-color)">Giá tiền: <?= number_format($vege["price"],0, ',','.') ?> VND</p>
                            <p class="cake-quantity">Số lượng: <?= $vege['amount'] ?></p>
                        </div>
                    </div>
                    <?php $total = $total + $vege['price'] * $vege['amount'] ?>
                <?php endforeach; ?>

                <div class="history-ending">
                    <div class="history-ending1">
                        <p class="history-ending-content">Tổng tiền: </p>
                        <p class="history-ending-content" style="color: var(--main-color)"><?= number_format($total,0, ',','.') ?> VND</p>
                    </div>
                    <div class="history-ending2">
                        <p class="history-ending-content">Trạng thái: </p>
                        <p class="history-ending-content" style="color: var(--main-color)">Chưa xử lý</p>
                    </div>
                </div>
            </div>
        <?php endforeach;?>

        <!-- Preparing Orders -->
        <?php foreach($data["preparingOrders"] as $index => $orders) :?>
            <div class="history">
                <?php $total = 0; ?>
                <div class="history-title">Mã đơn hàng: #<?= $orders["id"] ?></div>
                
                <?php foreach($data[$orders["id"]]["vege"] as $i => $vege) :?>
                    <div class="history-content">
                        <div class="history-content-img">
                                <img src="<?= URL_IMG ?>/vegetables/<?= $vege['image'] ?>" alt="" class=>
                        </div>

                        <div class="history-content-decs">
                            <p class="cake-name"><b><?= $vege['name'] ?></b></p>
                            <p class="cake-size">Khối lượng: <?= $vege['weight'] ?>g</p>
                            <p class="cake-price" style="color: var(--main-color)">Giá tiền: <?= number_format($vege["price"],0, ',','.') ?> VND</p>
                            <p class="cake-quantity">Số lượng: <?= $vege['amount'] ?></p>
                        </div>
                    </div>
                    <?php $total = $total + $vege['price'] * $vege['amount'] ?>
                <?php endforeach; ?>

                <div class="history-ending">
                    <div class="history-ending1">
                        <p class="history-ending-content">Tổng tiền: </p>
                        <p class="history-ending-content" style="color: var(--main-color)"><?= number_format($total,0, ',','.') ?> VND</p>
                    </div>
                    <div class="history-ending2">
                        <p class="history-ending-content">Trạng thái: </p>
                        <p class="history-ending-content" style="color: var(--main-color)">Đang chuẩn bị</p>
                    </div>
                </div>
            </div>
        <?php endforeach;?>

        <!-- Delivering Orders -->
        <?php foreach($data["deliveringOrders"] as $index => $orders) :?>
            <div class="history">
                <?php $total = 0; ?>
                <div class="history-title">Mã đơn hàng: #<?= $orders["id"] ?></div>
                
                <?php foreach($data[$orders["id"]]["vege"] as $i => $vege) :?>
                    <div class="history-content">
                        <div class="history-content-img">
                                <img src="<?= URL_IMG ?>/vegetables/<?= $vege['image'] ?>" alt="" class=>
                        </div>

                        <div class="history-content-decs">
                            <p class="cake-name"><b><?= $vege['name'] ?></b></p>
                            <p class="cake-size">Khối lượng: <?= $vege['weight'] ?>g</p>
                            <p class="cake-price" style="color: var(--main-color)">Giá tiền: <?= number_format($vege["price"],0, ',','.') ?> VND</p>
                            <p class="cake-quantity">Số lượng: <?= $vege['amount'] ?></p>
                        </div>
                    </div>
                    <?php $total = $total + $vege['price'] * $vege['amount'] ?>
                <?php endforeach; ?>

                <div class="history-ending">
                    <div class="history-ending1">
                        <p class="history-ending-content">Tổng tiền: </p>
                        <p class="history-ending-content" style="color: var(--main-color)"><?= number_format($total,0, ',','.') ?> VND</p>
                    </div>
                    <div class="history-ending2">
                        <p class="history-ending-content">Trạng thái: </p>
                        <p class="history-ending-content" style="color: var(--main-color)">Đang giao</p>
                    </div>
                </div>
            </div>
        <?php endforeach;?>

        <!-- Delivered Orders -->
        <?php foreach($data["deliveredOrders"] as $index => $orders) :?>
            <div class="history">
                <?php $total = 0; ?>
                <div class="history-title">Mã đơn hàng: #<?= $orders["id"] ?></div>
                
                <?php foreach($data[$orders["id"]]["vege"] as $i => $vege) :?>
                    <div class="history-content">
                        <div class="history-content-img">
                                <img src="<?= URL_IMG ?>/vegetables/<?= $vege['image'] ?>" alt="" class=>
                        </div>

                        <div class="history-content-decs">
                            <p class="cake-name"><b><?= $vege['name'] ?></b></p>
                            <p class="cake-size">Khối lượng: <?= $vege['weight'] ?>g</p>
                            <p class="cake-price" style="color: var(--main-color)">Giá tiền: <?= number_format($vege["price"],0, ',','.') ?> VND</p>
                            <p class="cake-quantity">Số lượng: <?= $vege['amount'] ?></p>
                        </div>
                    </div>
                    <?php $total = $total + $vege['price'] * $vege['amount'] ?>
                <?php endforeach; ?>

                <div class="history-ending">
                    <div class="history-ending1">
                        <p class="history-ending-content">Tổng tiền: </p>
                        <p class="history-ending-content" style="color: var(--main-color)"><?= number_format($total,0, ',','.') ?> VND</p>
                    </div>
                    <div class="history-ending2">
                        <p class="history-ending-content">Trạng thái: </p>
                        <p class="history-ending-content" style="color: var(--main-color)">Đã giao</p>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>