<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chỉnh sửa khuyến mãi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT?>/admin">Trang chủ</a></li>
              <li class="breadcrumb-item active"><a href="<?= DOCUMENT_ROOT?>/admin/sale">Khuyến mãi</a></li>
              <li class="breadcrumb-item active">Chỉnh sửa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
      <!-- general form elements -->
      <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Cập nhật thông tin khuyến mãi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php DOCUMENT_ROOT ?>/admin/sale/update/<?= $data['vege']['id'] ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Tên sản phẩm</label>
                                <input disabled value="<?= $data['vege']['name'] ?>" type="text" class="form-control" id="name" name="name" placeholder="Nhập tên sản phẩm" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Giá hiện tại</label>
                                <input disabled type="text" class="form-control" id="price" name="price"  placeholder="<?= $data['vege']['price'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="sale_price">Giá khuyến mãi</label>
                                <input value="<?= $data['vege']['sale_price'] ?>" type="text" class="form-control" id="sale_price" name="sale_price" required>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Cập nhật</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</section>