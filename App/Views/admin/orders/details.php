<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Chi tiết đơn hàng</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT?>/admin">Trang chủ</a></li>
          <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT?>/admin/orders">Đơn hàng</a></li>
          <li class="breadcrumb-item active">Chi tiết</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                      <h4>Đơn hàng #<?= $data["id"] ?></h4>
                  </div>
              </div>
              <div class="card-body">
                <table id="cakeTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Thành tiền</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $total=0 ?>
                  <?php foreach($data["details"] as $key => $details) :?>

                    <tr>
                      <td><?= $details["item"] ?></td>
                      <td><?= $details["amount"] ?></td>
                      <td><?= number_format($details["price"],0, ',','.') ?>đ</td>
                      <td><?= number_format($details["amount"]*$details["price"],0, ',','.') ?>đ</td>
                    </tr>
                    <?php $total = $total + $details["amount"]*$details["price"]?>
                  <?php endforeach; ?>
                  </tbody>
                  
                </table>
                <h4>Tổng cộng: <?= number_format($total,0, ',','.') ?>đ</h4>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
    </section>
