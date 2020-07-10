<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Products</span></p> -->
                <h1 class="mb-0 bread">Cập nhật thông tin cá nhân</h1>
            </div>
        </div>
    </div>
</div>
<div class="container" style="padding-top: 5%; padding-bottom: 5%;">
    <form action="" method="post">
        <div class="form-group">
            <label for="name">Họ và Tên : <span style="color:red">*</span></label>
            <input type="text" class="form-control" id="name" placeholder="Nhập Họ và Tên" name="name" value="<?php echo escape($user->data()->name); ?>" required>
        </div>
        <div class="form-group">
            <label for="username">Tên đăng nhập : <span style="color:red">*</span></label>
            <input type="text" class="form-control" id="username" placeholder="Nhập tên đăng nhập" name="username" value="<?php echo escape($user->data()->username); ?>" required>
        </div>
        <div class="form-group">
            <label for="current_password">Mật khẩu hiện tại : <span style="color:red">*</span></label>
            <input type="password" class="form-control" id="current_password" placeholder="Nhập mật khẩu hiện tại" name="current_password" required>
        </div>
        <div class="form-group">
            <label for="new_password">Mật khẩu mới :</label>
            <input type="password" class="form-control" id="new_password" placeholder="Nhập mật khẩu mới" name="new_password">
        </div>
        <div class="form-group">
            <label for="confirm_new_password">Xác nhận mật khẩu mới :</label>
            <input type="password" class="form-control" id="confirm_new_password" placeholder="Xác nhận mật khẩu mới" name="confirm_new_password">
        </div>
        <input type="submit" class="btn btn-primary" value="Cập nhật thông tin">
    </form>
</div>
