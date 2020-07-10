<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Giỏ hàng</h1>
        </div>
    </div>
    </div>
</div>
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
        <div class="col-md-12 ftco-animate">
            <div class="cart-list">
                <table class="table">
                    <thead class="thead-primary">
                        <tr class="text-center">
                        <th>Hình ảnh</th>
                        <th>Sản phẩm</th>
                        <th>Giá tiền</th>
                        <th>Số lượng</th>
                        <th>Tổng cộng</th>
                        <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            function render($item) {
                                return
                                    '<tr class="text-center">
                                        <td class="image-prod"><div class="img" style="background-image:url('. $item->image .');"></div></td>
                                        <td class="product-name">
                                            <h3>'. $item->name .'</h3>
                                            <p>'. $item->description .'</p>
                                        </td>
                                        <td class="price">'. $item->price .'</td>
                                        <td class="quantity">
                                            <div class="input-group mb-3">
                                                <input type="text" name="cart_'. $item->uid .'" class="quantity form-control input-number" value="'. $item->amount .'" min="0" max="'. $item->max .'">
                                            </div>
                                        </td>
                                        <td class="total">'. $item->price * $item->amount .'</td>
                                        <td class="product-remove">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" data-type="minus" data-field="cart_'. $item->uid .'">
                                                    <span class="fa fa-minus-square" style="color: red; font-size:24px;"></span>
                                                </button>
                                            </span>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="cart_'. $item->uid .'">
                                                    <span class="fa fa-plus-square" style="color: green; font-size:24px;"></span>
                                                </button>
                                            </span>
                                        </td>
                                    </tr>';
                            }
                            $result = $cart->findAll($user->data()->uid);
                            if ($result) {
                                echo join(' ', array_map('render', $result));
                            }
                        ?>
                    </tbody>
                    </table>

                </div>
        </div>
        </div>
        <div class="row justify-content-center">
                <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Tổng tiền</h3>
                        <p class="d-flex">
                            <span>Tiền hàng</span>
                            <span id="subtotal-price"><?php echo($cart->cash($user->data()->uid));?></span>
                        </p>
                        <p class="d-flex">
                            <span>Phí ship</span>
                            <span id="ship-fee">0</span>
                        </p>
                        <p class="d-flex">
                            <span>Khuyến mãi</span>
                            <span id="discount">0</span>
                        </p>
                        <hr>
                        <p class="d-flex">
                            <span>Tổng cộng</span>
                            <span id="total-price"><?php echo($cart->cash($user->data()->uid));?></span>
                        </p>
                    </div>
                    <p class="text-center"><a href="checkout.php" class="btn btn-primary py-3 px-4">Tiến hành thanh toán</a></p>
                </div>
            </div>
    </div>
</section>

<script>
    window.addEventListener('load', (event) => {
        var calculate = function (){
            var sum = 0;
            $(".total").each(function(index, value){

                var total_per_item = parseInt($(this).closest(".text-center").find(".price").text()) * parseInt($(this).closest(".text-center").find(".input-number").val());

                $(this).html(total_per_item);
                sum += total_per_item;
            });

            $("#subtotal-price").text(sum);
            $("#total-price").text(sum + parseInt($("#ship-fee").text()) - parseInt($("#discount").text()));
        }
        $('.btn-number').click(function(e) {
            e.preventDefault();

            fieldName = $(this).attr('data-field');
            type      = $(this).attr('data-type');
            var input = $("input[name='"+fieldName+"']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if (type == 'minus') {
                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        var row = $("input[name='"+fieldName+"']").closest("tr").remove();
                    }
                } else if (type == 'plus') {
                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) >= input.attr('max')) {
                        $(this).attr('disabled', true);
                    }
                }
            } else {
                input.val(0);
            }

        });
        $('.input-number').focusin(function(){
            $(this).data('oldValue', $(this).val());
        });
        $('.input-number').on('input', function() {
            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            name = $(this).attr('name');
            if(valueCurrent > minValue) {
                $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
            }
                // } else {
            //     alert('Sorry, the minimum value was reached');
            //     $(this).val($(this).data('oldValue'));
            // }
            if(valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            // calculate();
            calculate();
        });
    });
</script>