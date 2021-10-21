<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Đơn hàng</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT?>/admin">Trang chủ</a></li>
              <li class="breadcrumb-item active">Đơn hàng</li>
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
                      <h4>Danh sách đơn hàng</h4>
                      <!-- <a class="btn btn-primary" href="">Thêm sản phẩm</a> -->
                  </div>
              </div>
              <div class="card-body">
                <table id="cakeTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Mã đơn</th>
                    <th>Trạng thái</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá (VNĐ)</th>
                    <th>Thành tiền</th>
                    <th>Địa chỉ giao hàng</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($data["order"] as $key => $order) :?>
                    <tr>
                      <td>#<?= $order["id"] ?></td>
                      <td><?= $order["status"] ?></td>
                      <td><?= $order["username"] ?></td>
                      <td><?= $order["phone"] ?></td>
                    <td>
                        <?php foreach($data[$order["id"]]["details"] as $i => $details) : ?>
                            <p><?= $details["item"] ?></p>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <?php foreach($data[$order["id"]]["details"] as $i => $details) : ?>
                            <p><?= $details["amount"] ?></p>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <?php foreach($data[$order["id"]]["details"] as $i => $details) : ?>
                            <p><?= $details["price"] ?></p>
                        <?php endforeach; ?>
                    </td>
                    <td></td>
                      <td><?= $order["address"] ?></td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="<?= DOCUMENT_ROOT ?>/admin/products/edit/<?= $vege["id"] ?>" class="btn btn-info">Cập nhật</a>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
    </section>
