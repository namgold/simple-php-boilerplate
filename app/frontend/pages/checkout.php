<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Products</span></p> -->
                <h1 class="mb-0 bread">Thanh toán</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 ftco-animate bill-info">
                <form action="" method="POST">
                    <h3 class="mb-4 billing-heading">Thông tin thanh toán</h3>
                    <div class="row align-items-end">
                        <div class="col-md-12">
                            <input type="hidden" id="uid" name="uid" class="form-control" value="<?php echo $user->data()->uid; ?>" required>
                            <div class="form-group">
                                <label for="name">Tên khách hàng :<span style="color: red">*</span></label>
                                <input class="form-control" type="text" id="name" name="name" class="form-control" placeholder="Nhập tên" value="<?php echo $user->data()->name; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Địa chỉ :<span style="color: red">*</span></label>
                                <input type="text" id="address" name="address" class="form-control" placeholder="Nhập địa chỉ" required value="<?php echo $user->data()->address; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Số điện thoại: <span style="color: red">*</span></label>
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Nhập số điện thoại" required value="<?php echo $user->data()->phone; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email :<span style="color: red">*</span></label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Nhập email" required value="<?php echo $user->data()->email; ?>">
                            </div>
                        </div>
                        <div class="w-100"></div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="cart-detail cart-total">
                            <h3 class="billing-heading">Tổng giỏ hàng</h3>
                            <p class="d-flex">
                                <span>Tổng tiền hàng</span>
                                <span>485000</span>
                            </p>
                            <p class="d-flex">
                                <span>Phí ship</span>
                                <span>0</span>
                            </p>
                            <p class="d-flex">
                                <span>Khuyến mãi</span>
                                <span>0</span>
                            </p>
                            <hr>
                            <p class="d-flex total-price">
                                <span>Tổng cộng</span>
                                <span>485000</span>
                            </p>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12 text-center" style="margin-top: 10px;">
                        <input type='submit' class="btn btn-primary" value="Đặt hàng">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>