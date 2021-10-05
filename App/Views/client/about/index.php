<!-- Banner -->
<div>
    <img src="<?= URL_ICON ?>/about-banner.jpg" alt="banner" class="img-fluid">
</div>

<!-- About Teo -->
<div class="container pt-3 pb-3">
    <h3 class="sub-title text-center" style="color: var(--bs-green)">Giới thiệu</h2>
    <h2 class="title text-center" style="color: var(--bs-primary)">TẠI SAO NÊN CHỌN TÈO?</h2>
    <div class="about mt-4">
        <img class="about-logo" src="<?= URL_ICON ?>/TeoLogo.png" alt="Teo's logo">
        <div class="about-content mt-4">
            <h2 class="about-content-title">Xin chào! Mình tên là Tèo</h2>
            <p>“Rau Nhà Tèo” là cửa hàng chuyên cung cấp các loại sau sạch trên địa bàn Thành phố Cần Thơ. Rau được trồng theo mô hình nông nghiệp sạch với tiêu chí 4K, cam kết đem lại cho quý khách hàng những sản phẩm rau tươi an toàn cho sức khỏe. Hãy cùng trở thành những người tiêu dùng thông minh khi chọn sử dụng các sản phẩm Rau Nhà Tèo nhé!</p>
            <a class="btn btn-primary" href="<?= DOCUMENT_ROOT ?>/products">Ghé nhà Tèo</a>
        </div>
    </div>
</div>

<!-- About 4K standard -->
<div class="wrapper pt-3 pb-3" style="background-color: var(--body)!important;">
    <div class="container">
        <h3 class="sub-title text-center" style="color: var(--green)">Giới thiệu</h2>
        <h2 class="title text-center" style="color: var(--blue)">RAU SẠCH ĐẠT CHUẨN 4K</h2>
        <div class="organic">
            <div class="vege-4k pe-5 ps-5">
                <img class="me-2" src="<?= URL_ICON ?>/4k-1.jpg" alt="">
                <div class="vege-4k-content">
                    <p class="title-4k">Không thuốc trừ sâu</p>
                    <p class="content-4k">Rau Nhà Tèo được trồng trong nhà lưới Israel chống côn trùng xâm nhập, giám sát bằng công nghệ 4.0.</p>
                </div>
            </div>

            <div class="vege-4k ps-5 pe-5">
                <img class="me-2" src="<?= URL_ICON ?>/4k-2.jpg" alt="">
                <div class="vege-4k-content">
                    <p class="title-4k">Không chất tăng trưởng</p>
                    <p class="content-4k">Rau Nhà Tèo được trồng một cách tự nhiên như bạn tự trồng rau tại sân vườn nhà mình.</p>
                </div>
            </div>

            <div class="vege-4k pe-5 ps-5 vege-4k-mobile">
                <div class="vege-4k-content">
                    <p class="title-4k">Không chất bảo quản</p>
                    <p class="content-4k">Rau Nhà Tèo được đóng gói tại vườn và đến tay khách hàng tuyệt đối không sử dụng chất bảo quản nào.</p>
                </div>
                <img class="ms-2" src="<?= URL_ICON ?>/4k-3.jpg" alt="">
            </div>

            <div class="vege-4k ps-5 pe-5 vege-4k-mobile">
                <div class="vege-4k-content">
                    <p class="title-4k">Không giống biến đổi gen</p>
                    <p class="content-4k">Hạt giống sử dụng tại Rau Nhà Tèo được kiểm soát chặt chẽ nguồn gốc, đơn vị sản xuất, nhập khẩu và phân phối.</p>
                </div>
                <img class="ms-2" src="<?= URL_ICON ?>/4k-4.jpg" alt="">
            </div>
            
        </div>
    </div>
</div>

<!-- Guarantee -->
<?php require_once VIEW."/client/shared/guarantee.php"; ?>