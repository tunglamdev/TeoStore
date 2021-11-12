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
                  </div>
              </div>
              <div class="card-body">
                <table id="cakeTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Mã đơn</th>
                    <th>Tên khách hàng</th>
                    <th>Địa chỉ</th>
                    <th>Thời gian đặt hàng</th>
                    <th>Trạng thái</th>
                    <th>Thời gian giao hàng (dự kiến)</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($data["order"] as $key => $order) :?>
                    <tr>
                      <td>#<?= $order["id"] ?></td>
                      <td><?= $order["username"] ?></td>
                      <td><?= $order["address"] ?></td>
                      <td><?= $order["order_time"] ?></td>
                      <td>
                        <select onchange="updateOrderStatus(<?= $order['id'] ?>, status_order<?= $order['id'] ?>)" class="custom-select" id="status_order<?= $order['id'] ?>" name="cate" required>
                            <?php foreach($data["status"] as $i => $status): ?>
                                <option value="<?= $status["id"] ?>" <?= $status["id"]==$order["status"] ? "selected" :""?>><?= $status["name"] ?></option>
                            <?php endforeach; ?>
                        </select>
                      </td>
                      <td><?= $order["deli_time"] ?></td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="<?= DOCUMENT_ROOT ?>/admin/orders/details/<?= $order["id"] ?>" class="btn btn-info">Xem chi tiết</a>
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
