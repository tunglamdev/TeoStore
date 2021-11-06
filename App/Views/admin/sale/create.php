<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm sản phẩm khuyến mãi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT?>/admin">Trang chủ</a></li>
              <li class="breadcrumb-item active"><a href="<?= DOCUMENT_ROOT?>/admin/sale">Khuyến mãi</a></li>
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
                <h3 class="card-title">Thông tin sản phẩm khuyến mãi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php DOCUMENT_ROOT ?>/admin/sale/store" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="cate">Chọn sản phẩm</label>
                                <select onchange="updatePrice(sale_product)" class="custom-select" id="sale_product" name="sale_product" required>
                                    <option value="" selected disabled>Chọn...</option>
                                    <?php foreach($data["vege"] as $i => $vege): ?>
                                        <option value="<?= $vege["id"] ?>"><?= $vege["name"] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price">Giá hiện tại</label>
                                <input disabled type="text" class="form-control" id="price" name="price"  placeholder="" required>
                            </div>

                            <div class="form-group">
                                <label for="sale_price">Giá khuyến mãi</label>
                                <input type="text" class="form-control" id="sale_price" name="sale_price"  placeholder="Nhập giá khuyến mãi" required>
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