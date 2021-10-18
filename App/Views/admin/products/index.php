<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT?>/admin">Trang chủ</a></li>
              <li class="breadcrumb-item active">Sản phẩm</li>
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
                      <h4>Danh sách sản phẩm</h4>
                      <a class="btn btn-primary" href="<?= DOCUMENT_ROOT ?>/admin/products/create">Thêm sản phẩm</a>
                  </div>
              </div>
              <div class="card-body">
                <table id="cakeTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá (VNĐ)</th>
                    <th>Khối lượng (gram)</th>
                    <th>Loại</th>
                    <th>Ảnh</th>
                    <th>Mã nguồn gốc</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($data["vege"] as $key => $vege) :?>
                    <tr>
                      <td><?= $key + 1 ?></td>
                      <td><?= $vege["name"] ?></td>
                      <td><?= $vege["price"] ?></td>
                      <td><?= $vege["weight"] ?></td>
                      <td><?= $vege["id_veg_type"] ?></td>
                      <td>
                      <img src="<?= URL_IMG?>/vegetables/<?= $vege["image"] ?>" class="rounded" alt="..." style="width: 100px">
                      </td>
                      <td><?= $vege["id_orig"] ?></td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="<?= DOCUMENT_ROOT ?>/admin/products/edit/<?= $vege["id"] ?>" class="btn btn-info">Chỉnh sửa</a>
                          <button onclick="deleteItem(<?= $vege['id'] ?>)" class="btn btn-danger">Xóa</button>
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
