<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm nguồn gốc sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT?>/admin">Trang chủ</a></li>
              <li class="breadcrumb-item active"><a href="<?= DOCUMENT_ROOT?>/admin/original">Nguồn gốc sản phẩm</a></li>
              <li class="breadcrumb-item active">Thêm</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
      <!-- general form elements -->
      <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Thông tin nguồn gốc sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php DOCUMENT_ROOT ?>/admin/original/store" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="seed">Thông tin hạt giống</label>
                                <input type="text" class="form-control" id="seed" name="seed" placeholder="Nhập thông tin hạt giống" required>
                            </div>
                            <div class="form-group">
                                <label for="planting">Thông tin nơi gieo trồng</label>
                                <input type="text" class="form-control" id="planting" name="planting" placeholder="Nhập thông tin nơi gieo trồng" required>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Thêm</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</section>