<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nguồn gốc sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT?>/admin">Trang chủ</a></li>
              <li class="breadcrumb-item active">Nguồn gốc sản phẩm</li>
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
                      <h4>Thông tin nguồn gốc</h4>
                      <a class="btn btn-primary" href="<?= DOCUMENT_ROOT ?>/admin/original/create">Thêm nguồn gốc mới</a>
                  </div>
              </div>
              <div class="card-body">
                <table id="cakeTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Thông tin hạt giống</th>
                    <th>Nơi gieo trồng</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($data["orig"] as $key => $orig) :?>
                    <tr>
                      <td><?= $key + 1 ?></td>
                      <td><?= $orig["seed"] ?></td>
                      <td><?= $orig["planting_place"] ?></td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="<?= DOCUMENT_ROOT ?>/admin/original/edit/<?= $orig["id"] ?>" class="btn btn-info">Chỉnh sửa</a>
                          <button onclick="deleteOrig(<?= $orig['id'] ?>)" class="btn btn-danger">Xóa</button>
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
