<!-- Banner -->
<div>
    <img src="<?= URL_ICON ?>/product-banner-Copy.jpg" alt="banner" class="img-fluid">
</div>

<!-- Cart -->
<div class="container mt-3"> 
    <h3 class="sub-title text-center" style="color: var(--bs-green)">Giỏ hàng</h2>
    <h2 class="title text-center" style="color: var(--bs-primary)">GIỎ HÀNG CỦA BẠN</h2>
    <?php if($data["cart"] == []) :?>
        <div style="margin-bottom: 30px; text-align: center">
            <i class="sub-title">Không có sản phẩm nào trong giỏ hàng!</i>
            <div class="mt-5">
                <a href="<?= DOCUMENT_ROOT ?>/products"><img style="width: 200px; opacity: 0.3" src="<?= URL_ICON ?>/cart.png" alt="Giỏ hàng trống"></a>
            </div>
        </div>
    <?php else : ?>
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
                <?php $total = 0; ?>
                <?php foreach($data["cart"] as $i => $cart) : ?>
                    <tr> 
                        <td data-th="<?= $cart['name']?>" style="width:15%"> 
                            <img src="<?= URL_IMG ?>/vegetables/<?= $cart['image']?>" alt="Sản phẩm" class="img-responsive" width="100">
                        </td>
                        <td class="product-name" style="width:15%"> 
                            <h5 class="nomargin"><?= $cart['name']?></h5> 
                        </td>
                        <td data-th="Trọng lượng"><?= $cart['weight']==1000 ? '1k' : $cart['weight'] ?>g</td> 
                        <td data-th="Đơn giá"><?= number_format($cart["sale_price"]==NULL ? $cart["price"] : $cart["sale_price"],0, ',','.')?>đ</td> 
                        <?php if($cart["sale_price"]!=NULL) $cart["price"]=$cart["sale_price"]; ?>
                        <td data-th="Số lượng">
                            <input onchange="updateQuantity(<?= $_SESSION['user']['id']?>, <?= $cart['id']?>, this.value)" class="form-control text-center" value="<?= $cart['amount']?>" type="number" min="1" max="10">
                        </td> 
                        <td data-th="Thành tiền"><?= number_format($cart["price"]*$cart['amount'],0, ',','.')?>đ</td> 
                        <td class="actions" data-th="Xóa sản phẩm">
                            <button onclick="deleteItem(<?= $_SESSION['user']['id']?>,<?= $cart['id']?>)" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </td> 
                    </tr>
                    <?php $total = $total + $cart["price"]*$cart['amount']?>
                <?php endforeach; ?>
            </tbody>
            <tfoot> 
                <tr> </tr> 
            </tfoot>
        </table>
        <div style="text-align:right">
            <h5 style="font-weight:600">Tổng tiền: <?= number_format($total,0, ',','.')?>đ</h5>
            <a href="<?= DOCUMENT_ROOT ?>/products" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Tiếp tục mua hàng</a>
            <button onclick="book(<?= $_SESSION['user']['id']?>);" class="btn btn-primary btn-block"><i class="fas fa-money-check"></i> Thanh toán</button>
        </div>
    <?php endif; ?>
</div>