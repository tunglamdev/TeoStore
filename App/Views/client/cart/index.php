<!-- Banner -->
<div>
    <img src="<?= URL_ICON ?>/product-banner-Copy.jpg" alt="banner" class="img-fluid">
</div>

<!-- Cart -->
<div class="container mt-3"> 
    <h3 class="sub-title text-center" style="color: var(--bs-green)">Giỏ hàng</h2>
        <h2 class="title text-center" style="color: var(--bs-primary)">GIỎ HÀNG CỦA BẠN</h2>
    <table id="cart" class="table table-hover table-condensed mt-3" style="text-align: center; vertical-align: middle"> 
        <thead> 
            <tr> 
                <th colspan="2" style="width:30%">Tên sản phẩm</th> 
                <th style="width:15%">Trọng lượng</th> 
                <th style="width:12.5%">Đơn giá</th> 
                <th style="width:12.5%">Số lượng</th> 
                <th style="width:15%" class="text-center">Thành tiền</th> 
                <th style="width:15%"> </th> 
            </tr> 
        </thead> 
        <tbody>
            <tr> 
                <td data-th="Bí xanh" style="width:15%"> 
                    <img src="<?= URL_IMG ?>/vegetables/7.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
                </td>
                <td class="product-name" style="width:15%"> 
                    <h5 class="nomargin">Bí xanh</h5> 
                </td>
                <td data-th="Trọng lượng">500g</td> 
                <td data-th="Đơn giá">200.000 đ</td> 
                <td data-th="Số lượng">
                    <input class="form-control text-center" value="1" type="number">
                </td> 
                <td data-th="Thành tiền">200.000 đ</td> 
                <td class="actions" data-th="Xóa sản phẩm">
                    <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td> 
            </tr> 
            <tr> 
                <td data-th="Bí ngòi"> 
                    <img src="<?= URL_IMG ?>/vegetables/9.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
                </td>
                <td class="product-name"> 
                    <h5 class="nomargin">Bí ngòi</h5> 
                </td>
                <td data-th="Trọng lượng">500g</td> 
                <td data-th="Đơn giá">300.000 đ</td> 
                <td data-th="Số lượng">
                    <input class="form-control text-center" value="1" type="number">
                </td> 
                <td data-th="Thành tiền">300.000 đ</td> 
                <td class="actions" data-th="Xóa sản phẩm">
                    <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td> 
            </tr> 
        </tbody>
        <tfoot> 
            <tr> </tr> 
        </tfoot>
    </table>
    <div style="text-align:right">
        <h5>Tổng tiền: 500.000</h5>
        <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Tiếp tục mua hàng</a>
        <a href="" class="btn btn-primary btn-block"><i class="fas fa-money-check"></i> Thanh toán</a>
    </div>
</div>