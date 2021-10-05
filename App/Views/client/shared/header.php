<!-- Header -->
    <header>
        <div id="wrapper" class="wrapper position-fixed top-0">
            <div class="container mt-1 mb-2">
                <div class="row d-flex justify-content-center align-items-center">
                    <div id="header-logo" class="col-xl-3 col-md-4">
                        <a href="<?= DOCUMENT_ROOT ?>/about"><img class="w-75" src="<?= URL_ICON ?>/logo.png" alt="Logo"></a>
                    </div>
                    <div id="header-menu" class="col-xl-4 col-xs-0 col-md-0">
                        <nav class="nav nav-pills flex-column flex-sm-row">
                            <a class="flex-sm-fill text-sm-center nav-link <?= $GLOBALS['currentPage']=='Home' ? 'active': '' ?>" href="<?= DOCUMENT_ROOT ?>/home">Trang chủ</a>
                            <a class="flex-sm-fill text-sm-center nav-link <?= $GLOBALS['currentPage']=='Products' ? 'active': '' ?>" href="<?= DOCUMENT_ROOT ?>/products">Sản phẩm</a>
                            <a class="flex-sm-fill text-sm-center nav-link <?= $GLOBALS['currentPage']=='About' ? 'active': '' ?>" href="<?= DOCUMENT_ROOT ?>/about">Giới thiệu</a>
                        </nav>
                    </div>
                    <div id="header-search" class="col-xl-3 col-md-7">
                        <div class="form-text">
                            <form action="<?= DOCUMENT_ROOT?>/products/search" method="get">
                                <input type="text" placeholder="Tìm kiếm..." name="key" id="search">
                            </form>
                        </div>
                    </div>
                    <?php if(!isset($_SESSION["user"])) : ?>
                        <div id="header-login" class="col-xl-2 col-md-0 d-flex justify-content-end">
                            <a class="flex-sm-fill nav-link text-end" href="<?= DOCUMENT_ROOT ?>/accounts/login">Đăng nhập</a>
                        </div>
                    <?php else: ?>

                        <div id="header-cart" class="col-xl-1 col-md-0 d-flex justify-content-end">
                            <a href="<?= DOCUMENT_ROOT?>/cart" id="cart" class="rounded-circle text-center" style="width: 50px; height: 50px;"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                        <div id="menu-dropdown" class="col-xl-1 col-md-0 d-flex justify-content-end position-relative">
                            <img id="avatar" class="rounded-circle dropdown-toggle" style="width: 50px" src="<?= URL_IMG ?>/users/<?= $_SESSION['user']['avatar']?>" alt="avatar">
                            <ul id="sub-nav" class="position-absolute top-100 end-0">
                                <li><a class="dropdown-item" href="<?= DOCUMENT_ROOT ?>/user"><i class="fas fa-user me-2"></i>Cá nhân</a></li>                         
                                <li><a class="dropdown-item" href="<?= DOCUMENT_ROOT ?>/accounts/logout"><i class="fas fa-sign-out-alt me-2"></i>Đăng xuất</a></li>                     
                            </ul>
                        </div>
                    
                    <?php endif; ?>

                    <div id="btn-menu-mobile" class="header__menu-mobile col-xs-2 col-md-1 d-flex justify-content-end">
                        <input type="checkbox" class="header__mobile-nav-btn" id="mobile-check">
                        <label for="mobile-check" class="btn-3dot">
                            <i class="fas fa-bars" style="color: var(--green)"></i>
                        </label>
                        <label for="mobile-check" class="header__overlay"></label>
                        <div class="header__mobile-nav">
                            <label for="mobile-check" class="header__mobile-nav-close">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
                            </label>
                            <ul class="header__mobile-nav-list">
                                <li class="header__mobile-nav-link"><a class="dropdown-item" href="<?= DOCUMENT_ROOT?>/home"><i class="fas fa-home me-2"></i>Trang chủ</a></li>
                                <li class="header__mobile-nav-link"><a class="dropdown-item" href="<?= DOCUMENT_ROOT?>/products"><i class="fas fa-seedling me-2"></i>Sản phẩm</a></li>
                                <li class="header__mobile-nav-link"><a class="dropdown-item" href="<?= DOCUMENT_ROOT?>/about"><i class="fas fa-address-card me-2"></i>Giới thiệu</a></li>
                                <?php if(!isset($_SESSION["user"])) : ?>
                                    <li class="header__mobile-nav-link"><a class="dropdown-item" href="<?= DOCUMENT_ROOT?>/accounts/register"><i class="fas fa-user-plus me-2"></i>Đăng ký</a></li>
                                    <li class="header__mobile-nav-link"><a class="dropdown-item" href="<?= DOCUMENT_ROOT?>/accounts/login"><i class="fas fa-sign-in-alt me-2"></i>Đăng nhập</a></li>
                                <?php else: ?>
                                    <li class="header__mobile-nav-link"><a class="dropdown-item" href="<?= DOCUMENT_ROOT?>/user"><i class="fas fa-user me-2"></i>Cá nhân</a></li>
                                    <li class="header__mobile-nav-link"><a class="dropdown-item" href="<?= DOCUMENT_ROOT?>/cart"><i class="fas fa-cart-plus me-2"></i>Giỏ hàng</a></li>
                                    <li class="header__mobile-nav-link"><a class="dropdown-item" href="<?= DOCUMENT_ROOT?>/accounts/logout"><i class="fas fa-sign-out-alt me-2"></i>Đăng xuất</a></li>
                                <?php endif; ?>
                               
                            </ul>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </header>
<!-- End header -->
 