<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bình luận & Đánh giá</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT?>/admin">Trang chủ</a></li>
              <li class="breadcrumb-item active">Bình luận & Đánh giá</li>
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
                      <h4>Danh sách bình luận & đánh giá</h4>
                      <!-- <a class="btn btn-primary" href="<?= DOCUMENT_ROOT ?>/admin/sale/create">Thêm sản phẩm khuyến mãi</a> -->
                  </div>
              </div>
              <div class="card-body">
                <table id="cakeTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Khách hàng</th>
                    <th>Sản phẩm</th>
                    <th>Nội dung bình luận</th>
                    <th>Số điểm</th>
                    <th>Thời gian</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($data["feedback"] as $key => $feedback) :?>
                    <tr>
                      <td><?= $key + 1 ?></td>
                      <td><?= $feedback["user"] ?></td>
                      <td><?= $feedback["vege"] ?></td>
                      <td><?= $feedback["comment"] ?></td>
                      <td><?= $feedback["vote"]?></td>
                      <td><?= $feedback["time"]?></td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button onclick="deleteComment(<?= $feedback['id'] ?>)" class="btn btn-danger">Xóa</button>
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
