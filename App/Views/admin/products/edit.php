<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chỉnh sửa thông tin sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT?>/admin">Trang chủ</a></li>
              <li class="breadcrumb-item active"><a href="<?= DOCUMENT_ROOT?>/admin/products">Sản phẩm</a></li>
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
                <h3 class="card-title">Thông tin sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php DOCUMENT_ROOT ?>/admin/products/update/<?= $data['vege']['id']?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="cate">Loại sản phẩm</label>
                                <select class="custom-select" id="cate" name="cate" required>
                                    <?php foreach($data["categories"] as $i => $categories): ?>
                                        <option value="<?= $categories["id"] ?>" <?= $categories["id"] == $data['vege']['id_veg_type'] ? "selected" : ""?> ><?= $categories["name"] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Tên sản phẩm</label>
                                <input value="<?= $data['vege']['name'] ?>" type="text" class="form-control" id="name" name="name" placeholder="Nhập tên sản phẩm" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Giá sản phẩm</label>
                                <input value="<?= $data['vege']['price'] ?>" type="text" class="form-control" id="price" name="price"  placeholder="Nhập giá sản phẩm" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="weight">Khối lượng</label>
                                <input value="<?= $data['vege']['weight'] ?>" type="text" class="form-control" id="weight" name="weight"  placeholder="Nhập khối lượng sản phẩm" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh sản phẩm</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image" type="file">
                                        <input type="hidden" value="<?= $data['vege']['image'] ?>" name="old-image">
                                        <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Tải lên</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="orig">Nguồn gốc</label>
                                <select class="custom-select" id="orig" name="orig" required>
                                    <option value="" selected disabled>Chọn...</option>
                                    <?php foreach($data["orig"] as $i => $orig): ?>
                                        <option value="<?= $orig["id"] ?>"><?= $orig["planting_place"] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Chỉnh sửa</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</section>