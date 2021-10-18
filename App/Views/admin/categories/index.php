<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Loại sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT?>/admin">Trang chủ</a></li>
              <li class="breadcrumb-item active">Loại sản phẩm</li>
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
                      <h4>Danh sách loại sản phẩm</h4>
                      <a class="btn btn-primary" href="<?= DOCUMENT_ROOT ?>/admin/categories/create">Thêm loại mới</a>
                  </div>
              </div>
              <div class="card-body">
                <table id="cakeTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Tên loại</th>
                    <th>Ảnh</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($data["cate"] as $key => $cate) :?>
                    <tr>
                      <td><?= $key + 1 ?></td>
                      <td><?= $cate["name"] ?></td>
                      <td>
                      <img src="<?= URL_IMG?>/categories/<?= $cate["image"] ?>" class="rounded" alt="..." style="width: 100px">
                      </td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="<?= DOCUMENT_ROOT ?>/admin/categories/edit/<?= $cate["id"] ?>" class="btn btn-info">Chỉnh sửa</a>
                          <button onclick="deleteCate(<?= $cate['id'] ?>)" class="btn btn-danger">Xóa</button>
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
