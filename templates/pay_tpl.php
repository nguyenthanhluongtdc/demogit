

    <div class="pay-content">
        <div class="container">
            <div class="title-content">
                <h3>Thanh toán <i class="fas fa-vote-nay"></i></h3>
            </div>

            <div class="row pay-main">
                <div class="col-md-7">
                    <form class="pay-left" method="post" onsubmit="return cartSubmit();" id="form-post"> 
                        <p class="pay_info">
                            Thông tin thanh toán
                        </p>

                        <p class="form-row-wide">
                            <label for="billing_first_name">Họ tên *</label>
                            <input type="text" class="input_text" name="name" id="billing_first_name" required>
                        </p>
                        <!-- <p class="form-row-wide">
                            <label for="billing_company">Tên công ty</label>
                            <input type="text" class="input_text" name="billing_company" id="billing_company">
                        </p> -->

                        <!-- <p class="form-row-wide">
                            <label for="billing_country">Quốc gia</label>
                            <select name="" id="billing_country">
                                <option value="vietnames">Việt Nam</option>
                                <option value="japan">Japan</option>
                                <option value="usa">USA</option>
                            </select>
                        </p> -->

                        <p class="form-row-wide delivery-1">
                            <label for="billing_city">Tỉnh / Thành Phố *</label>
                            <select class="sel-province form-control" name="pid" id="province" style="margin-right: 5px; flex-grow: 1;">

                                <option value="">-- Chọn Tỉnh - Thành phố --</option>

                                <?php $province = getItems(array("table" => "province"));?>

                                <?php foreach ($province as $p): ?>

                                    <option value="<?= $p['id'] ?>"><?= $p['name'] ?></option>

                                <?php endforeach ?>

                            </select>
                        </p>

                        <?php $district = getItems(array("table" => "district", "condition" => "where pid like '{$_SESSION['cart_pid']}'"));?>

                        <p class="form-row-wide sel-district-container">
                            <label for="billing_city">Quận / Huyện*</label>
                            <select class="sel-district form-control" name="did" id="district">

                                      <option value="">-- Chọn Quận - Huyện --</option>

                                      <?php foreach ($district as $d): ?>

                                        <option value="<?= $d['id'] ?>"><?= $d['name'] ?></option>

                                      <?php endforeach ?>

                                    </select>
                        </p>

                        <p class="form-row-wide">
                            <label for="billing_address">Địa chỉ *</label>
                            <input type="text" name="address" class="input_text" name="billing_address" id="billing_address" required>
                        </p>

                        <p class="form-row-wide">
                            <label for="billing_phone">Số điện thoại *</label>
                            <input type="text" class="input_text" name="tel" id="billing_phone" required>
                        </p>

                        <p class="form-row-wide">
                            <label for="billing_email">Địa chỉ email</label>
                            <input type="text" class="input_text" name="email" id="billing_email">
                        </p>
                        <p class="form-row-wide">
                            <label for="billing_infoDifferent">Thông tin khác</label>
                            <textarea name="" id="" name="content" cols="10" rows="4" class="textarea_info_different" placeholder="Nhập vào đây..." style="font-style: italic;"></textarea>
                        </p>
                        <input type="hidden" name="orderbtn" value="">
                        <button id="submit_cart" type="submit" class="d-none">
                        </button>
                    </form>
                </div>
                <div class="col-md-5 ">
                    <div class="pay-right">
                        <p class="your-order">
                            Đơn hàng của bạn
                        </p>
                        <div class="box-producs">
                            <?php $product_cart = $cart['product'] ?>
                            <?php foreach($product_cart as $value) : ?>
                                <div class="item-product">
                                    <div class="img-product">
                                        <img src="<?=$value['thumbnail']?>" alt="">
                                    </div>
                                    <div class="name-product">
                                        <?=$value['title']?>
                                    </div> 
                                    <div class="price-money">
                                        <div class="price-origin" style="text-align: right; font-size: 14px; font-style: italic;"><?=getPriceSale($value)?></div>

                                        <?php $price= ((float)$value['price_sale']) * (int)$value['quantity']?>
                                        <?php $price_sale = array("price_sale"=>$price) ?>

                                        <span style="font-weight: 400; font-size: 15px;"><?php echo $value['quantity'] ?> x </span>
                                        <span class="item"> <?php echo getPriceSale($price_sale)?></span>
                                    </div>
                            </div>
                               
                            <?php endforeach ?>
                        </div>
                        <p class="total-money">
                            <span class="title">Thanh toán: </span>
                            <span class="value"><?= $cart['total_price'] ?></span>
                        </p>
                        <div class="row-order">
                            <button class="btn-order" name="orderbtn" >
                                Đặt hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
   

    $(document).ready(function () {
        $('.btn-order').click(function(){
        // $('#form-post').submit();

        $check = false;

        $('#form-post :input[required="required"]').each(function()
        {
            if(!this.validity.valid)
            {
                $(this).focus();
                // break
                $check = false;
                return false;
            }else{
                
                $check = true;
            }
        });

        if($check === true){
            $('#submit_cart').trigger('click');
        }

    })

    $('input[name="delivery"]').change(function () {

        if(this.checked) {

            $($(this).data("target")).fadeIn(500);

            $($(this).data("up")).fadeOut(0);

        }

    });

    $(".sel-province").change(function () {

    $.post("<?= getAjaxURL() ?>ajax_getdistrict.php", { pid: this.value }, function (res) {

        $(".sel-district-container").load(" .sel-district-container .sel-district");

    });

    });

    $(".sel-province").trigger("change");

    });
    
</script>
    

<style>
    .pay-content {
        padding: 120px 0;
    }

    .pay-content .pay_info, .pay-content .your-order {
        color: #5d5d5d;
        font-weight: bold;
        font-size: 17px;
        border-bottom: 2px solid #ccc;
    }

    .pay-content .pay-left, .pay-content .pay-right {
        padding: 20px;
        box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
    }

    .pay-content .pay-main .pay-left .form-row-first, .pay-content .pay-main .form-row-last {
        width: 45%;
    }

    .pay-content .pay-main .pay-left .form-row-first {
        float: left;
    }

    .pay-content .pay-main .form-row-last {
        float: right;
    }

    .pay-content .pay-main .pay-left .input_text, .pay-content #billing_country, .textarea_info_different {
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px 5px 5px 15px;
        background: none;
        color: #977b76;
    }

    .pay-content .pay-main .pay-left .form-row-wide {
        width: 100%;
    }

    .pay-content .pay-left label {
        font-weight: bold;
        color: #5d5d5d;
    }

    .pay-content .pay-right .item-product {
        border-bottom: 1px solid #ccc;
        padding-bottom: 20px;
        margin-top: 10px;
    }

    .pay-right .item-product:last-child {
        border-bottom: none;
    }

    .pay-content .pay-right .img-product {
        width: 70px;
        height: 70px;
        display: inline-block;
    }

    .pay-content .pay-right .name-product {
        font-size: 17px;
        font-weight: bold;
        margin-left: 10px;
        display: inline-block;
        width: 45%;
    }

    .pay-content .pay-right .price-money {
        float: right;
    }

    .pay-content .pay-right .price-money .item {
        font-weight: bold;
        color: #cb411f;
        font-size: 16px;
    }

    .pay-content .total-money {
        margin-top: 50px;
        padding-top: 10px;
        border-top: 1px solid #ccc;
    }

    .pay-content .pay-right .total-money .title {
        color: #5d5d5d;
    }

    .pay-content .pay-right .total-money .value {
        font-weight: bold;
        font-size: 20px;
        color: #cb411f;
        float: right;
    }

    .pay-right .btn-order {
        width: 70%;
        background: #fd6e1d;
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fd6e1d), to(#f59000));
        background: -webkit-linear-gradient(top, #f59000, #fd6e1d);
        color: #fff;
        padding: 10px;
        font-weight: bold;
        border-radius: 5px;
    }

    .pay-right .row-order {
        margin-top: 50px;
        text-align: center;
    }
</style>