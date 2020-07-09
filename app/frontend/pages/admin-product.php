<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Quản lý Sản phẩm & Dịch vụ</h1>
        </div>
    </div>
    </div>
</div>

<?php parse_str($_SERVER['QUERY_STRING'], $get_array);?>
<?php if ($get_array && array_key_exists('uid', $get_array)): ?>
    <?php if ($product->find($get_array["uid"])): ?>
        <?php if (array_key_exists('delete', $get_array) && $get_array["delete"] == '1'): ?>
            <?php
                if ($product->deleteMe()) {
                    Session::flash('product-delete-success', 'Xoá sản phẩm thành công!');
                    Redirect::to('admin-product.php');
                } else {
                    Session::flash('product-delete-fail', 'Xoá sản phẩm bị lỗi!');
                    Redirect::to('admin-product.php');
                }
                ?>
        <?php else: ?>
            <?php $Product = $product->data(); ?>
            <div class="container" style="padding-top: 5%; padding-bottom: 5%;">
                <h2>Update product</h2>
                <form action="" method="post">
                    <input type="hidden" class="form-control" id="uid" name="uid" value="<?php echo $Product->uid; ?>">
                    <div class="form-group">
                        <label for="name">Product name :<span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="name" placeholder="Enter product name" name="name" value="<?php echo $Product->name; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description :<span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="description" placeholder="Enter description" name="description" value="<?php echo $Product->description; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price :<span style="color: red">*</span></label>
                        <input type="number" class="form-control" id="price" placeholder="Enter price" name="price" value="<?php echo $Product->price; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Type :<span style="color: red">*</span></label>
                        <select class="form-control" id="type" placeholder="Select type" name="type" required>
                            <option value="" style="display:none"></option>
                            <option value="product" <?php if ($Product->type == 'product') echo 'selected'; ?>>Product</option>
                            <option value="service" <?php if ($Product->type == 'service') echo 'selected'; ?>>Service</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image url:<span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="image" placeholder="Enter image url" name="image" value="<?php echo $Product->image; ?>" oninput="document.getElementById('previewImage').src= event.target.value" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Preview image:</label>
                        <br>
                        <img id="previewImage" src="<?php echo $Product->image ?>" width="200px">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Update product">
                    <a class="btn btn-info" href="/admin-product.php">Go back</a>
                </form>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <p>Product not found!</p>
    <?php endif; ?>
<?php elseif ($get_array && array_key_exists('new', $get_array)): ?>
    <div class="container" style="padding-top: 5%; padding-bottom: 5%;">
        <h2>Create Information</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Product name :<span style="color: red">*</span></label>
                <input type="text" class="form-control" id="name" placeholder="Product name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Description :<span style="color: red">*</span></label>
                <input type="text" class="form-control" id="description" placeholder="Enter description" name="description" required>
            </div>
            <div class="form-group">
                <label for="price">Price :<span style="color: red">*</span></label>
                <input type="number" class="form-control" id="price" placeholder="Enter price" name="price" required>
            </div>
            <div class="form-group">
                <label for="price">Type :<span style="color: red">*</span></label>
                <select class="form-control" id="type" placeholder="Select type" name="type" required>
                    <option value="" style="display:none"></option>
                    <option value="product">Product</option>
                    <option value="service">Service</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Image url :<span style="color: red">*</span></label>
                <input type="text" class="form-control" id="image" placeholder="Enter image url" name="image" oninput="document.getElementById('previewImage').src= event.target.value" required>
            </div>
            <div class="form-group">
                <label for="image">Preview image:</label>
                <br>
                <img id="previewImage" src="" width="200px">
            </div>
            <input type="hidden" name="isUpdate" value="true">
            <input type="submit" class="btn btn-primary" value="Create product">
            <a class="btn btn-info" href="/admin-product.php">Go back</a>
        </form>
    </div>
<?php else: ?>
    <?php
        $data = $product->getAll();
        function render($value, $index) {
            return
                '<tr>
                    <td style="text-align: right;">' . ($index + 1) . '</td>
                    <td style="white-space: nowrap;">' . $value->uid . '</td>
                    <td><a href="/admin-product.php?uid='. $value->uid . '">'. $value->name . '</a></td>
                    <td>' . $value->description . '</td>
                    <td>' . $value->price . '</td>
                    <td><img src="' . $value->image . '" width="200px"></td>
                    <td>' . (($value->type == 'service') ? 'Dịch vụ' : 'Sản phẩm') . '</td>
                    <td>
                        <div class="btn-group" style="display: flex;">
                            <a class="btn btn-primary" href="/admin-product.php?uid='. $value->uid .'">Sửa</a>
                            <a class="btn btn-danger" href="/admin-product.php?uid='. $value->uid .'&delete=1">Xoá</a>
                        </div>
                    </td>
                </tr>';
        };
    ?>
    <div style="padding: 30px">
        <a class="btn btn-success" style="float:right" href="/admin-product.php?new">Tạo mới</a></br></br>
        <table class="table table-hover table-bordered table-responsive" style="margin-left:auto;margin-right:auto;">
            <thead>
                <tr>
                    <th style="width: auto; text-align: center;">#</th>
                    <th style="width: 10%;">ID</th>
                    <th style="width: 10%; white-space: nowrap;">Tên</th>
                    <th style="width: 60%; white-space: nowrap;">Mô tả</th>
                    <th style="width: 10%; white-space: nowrap;">Giá</th>
                    <th style="width: 20%; white-space: nowrap;">Hình ảnh</th>
                    <th style="width: 20%; white-space: nowrap;">Loại sản phẩm</th>
                    <th style="width: auto; text-align: center; white-space: nowrap;">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    echo join(' ', array_map('render', $data, array_keys($data)));
                ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>