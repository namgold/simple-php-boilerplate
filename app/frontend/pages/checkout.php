<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-xl-8 ftco-animate bill-info">
            <form action="#" class="billing-form">
                <h3 class="mb-4 billing-heading">Thông tin thanh toán</h3>
                <div class="row align-items-end">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label for="firstname">Tên khách hàng</label>
                    <input type="text" id="cusName" class="form-control" placeholder="">
                    </div>
                    </div>
                    
                    <div class="w-100"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="streetaddress">Số nhà</label>
                            <input type="text" id="street" class="form-control" placeholder="Số nhà và tên đường">
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                        <input type="text" class="form-control" placeholder="Tòa nhà, số tầng">
                        </div>
                    </div>
                    <div class="w-100"></div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="streetaddress">Quận / Huyện</label>
                            <input type="text" id="town" class="form-control" placeholder="Quận, huyện, thị xã">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="country">Tỉnh / Thành phố</label>
                            <div class="select-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="city" class="form-control">
                            <option value="none" selected>Vui lòng chọn</option>
                            <option value="hcm">TP Hồ Chí Minh</option>
                            <option value="ag">An Giang</option>
                            <option value="dlk">ĐăkLăk</option>
                            <option value="hno">Hà Nội</option>
                            <option value="thh">Thanh Hóa</option>
                            <option value="hph">Hải Phòng</option>
                            <option value="dna">Đà Nẵng</option>

                        </select>
                        </div>
                        </div>
                    </div>
                    
                    <div class="w-100"></div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Số điện thoại</label>
                            <input type="text" id="pNumber" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="emailaddress">Email</label>
                            <input type="text" id="email" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="w-100"></div>
                </div>
            </form><!-- END -->



            
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
                    <p><a href="#"class="btn btn-primary" onclick="validateData()">Đặt hàng</a></p>
                </div>
            
        </div> <!-- .col-md-8 -->
        </div>
    </div>
    </section> <!-- .section -->