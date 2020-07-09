<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Quản lý thông tin shop</h1>
        </div>
    </div>
    </div>
</div>

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
            <input type="text" class="form-control" id="price" placeholder="Enter price" name="price" value="<?php echo $Product->price; ?>" required>
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