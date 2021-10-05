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
                    <img class ="avatar-img mb-3" src="<?= URL_IMG ?>/users/<?= $data['user']['avatar']?>" alt="" srcset="">
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