
<div class="detail-product">
        <div class="container">
            <div class="rowdetail">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 item-left">
                        <div class="zoom-left">
                            <div class="img_zoomWrapper">
                                <img  id="img_01"
                                src="<?=$product['thumbnail']?>"
                                data-zoom-image="<?=getResizedImageURL($product['thumbnail'],1200,700,1,1)?>" />
                            </div>

                            <div id="gal1" class="row">
                                <?php foreach($product['slides'] as $value) : ?>
                                    <a href="#"  class="elevatezoom-gallery" data-update=""
                                        data-image="<?=$value['thumbnail']?>"
                                        data-zoom-image="<?=getResizedImageURL($value['thumbnail'],1100,700,1,1)?>" style="padding: 15px;">
                                        <img id="img_01"
                                            src="<?=$value['thumbnail']?>"
                                            width="100" />
                                    </a>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 item-center">
                        <h1> <?=$product['title']?> </h1>
                        <div class="price-product">
                            <span>Giá: </span> <span> <?=getPriceSale($product)?> </span>
                        </div>
                        <div class="description-product">
                            <span>Mô tả sản phẩm</span>
                            <p >
                                <?=$product['first_tag']?>
                            </p>
                        </div>
                        <!-- <div class="icon-contact">
                            <i class="fab fa-facebook-square"></i>
                            <i class="fab fa-facebook-square"></i>
                            <i class="fab fa-facebook-square"></i>
                        </div> -->

                        <div class="choose-color-size">
                            <?php $color = getItems(array("table"=>"option","condition"=>"where enable > 0 and find_in_set(id,'{$product['color_id']}')")) ?>

                            <?php if(!empty($color)) : ?>
                                <div class="color">
                                    <span>Màu sắc: </span>
                                    <select name="color" id="color" class="choose-color">
                                        <?php foreach($color as $value) : ?>
                                            <option value="<?=$value['id']?>">
                                                <?=$value['title'] ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            <?php endif ?>

                            <?php $size = getItems(array("table"=>"option","condition"=>"where enable > 0 and find_in_set(id,'{$product['size_id']}')")) ?>
                            <?php if(!empty($size)) : ?>
                                <div class="size">
                                    <span>Size: </span>
                                    <select name="size" id="size" class="choose-size">
                                        <?php foreach($size as $value) : ?>
                                            <option value="<?=$value['id']?>">
                                                <?=$value['title'] ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            <?php endif ?>

                            <div class="rowquantity">
                                <span>Số lượng:</span>
                                <input type="submit" value="-" class="tru" onclick="$(this).next().val(Math.max(1, Number($(this).next().val()) - 1)); ">
                                <input type="text" value="1" class="qty-value">
                                <input type="submit" value="+" class="plus" onclick="$(this).prev().val(Number($(this).prev().val()) +1)">
                            </div>

                            <div class="bottom">
                                <button class="buy-now" onclick="cartAjax({ 
                                    action: 'addtocart2',
                                    quantity: $(this).parent().prev().find('.qty-value').val(), 
                                    id: '<?= $product['id'] ?>', 
                                    color_id: $('#color').val(),
                                    size_id: $('#size').val(),
                                    lbl: 'label-success', 
                                    callback: function(){ setTimeout(function() { window.location='<?= $classify['cart'][0]['uri'] ?>'; }, 500); } });">
                                    Mua ngay
                                </button>
                                <button class="add-cart" onclick="cartAjax({ 
                                    action: 'addtocart2', 
                                    id: '<?= $product['id'] ?>',
                                    quantity: $(this).parent().prev().find('.qty-value').val(),
                                    // price: $('#giaban').html(),
                                    color_id: $('#color').val(), 
                                    size_id: $('#size').val(),
                                    type:'Mua trực tiếp', 
                                    lbl: 'label-success',
                                    msg: 'Thêm vào giỏ hàng thành công'
                                    });">

                                    <i class="fas fa-shopping-cart icon-add-cart" ></i> Thêm vào giỏ hàng
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4  item-right">
                        <div class="sub-top">
                            <h3 class="title">Xưởng Sỉ Thời Trang Hải Triều 21- phân phối quần áo giá tốt</h3>
                            <div class="content">
                                <div class="sub-sub">
                                    <i class="far fa-check-square"></i> Giá cả cạnh tranh hợp lý nhất thị trường
                                </div>
                                <div class="sub-sub">
                                    <i class="far fa-check-square"></i> Giá cả cạnh tranh hợp lý nhất thị trường
                                </div>
                                <div class="sub-sub">
                                    <i class="far fa-check-square"></i> Giá cả cạnh tranh hợp lý nhất thị trường
                                </div>
                            </div>
                        </div>
                        <div class="sub-center ">
                            <h3 class="title">Lien he</h3>
                            <div class="content">
                                <div class="sub-sub">
                                    Giá cả cạnh tranh hợp lý nhất thị trường
                                </div>
                                <div class="sub-sub">
                                    Giá cả cạnh tranh hợp lý nhất thị trường
                                </div>
                                <div class="sub-sub">
                                    Giá cả cạnh tranh hợp lý nhất thị trường
                                </div>
                            </div>
                        </div>
                        <div class="sub-bottom">
                            <h3 class="title">San pham da xem</h3>
                            <div class="content">
                                
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

            <div class="box-content-detail">
                <div class="content-top">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item active">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Thong tin chi tiet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Binh luan</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active in" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <!--begin-section-product-->
                            <div class="section-products top-hot-deal">
                                <?=$product['second_tag']?>
                            </div>
                            <!--end-section-product-->
                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <!--begin-section-product-->
                            <div class="section-products top-hot-deal">
                                <div id="comment">
                                    <div id="fb-root"></div>
                                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0&appId=1752669808220357&autoLogAppEvents=1" nonce="hrMLHhqv"></script>
                                    <div class="fb-comments" data-href="<?=getCurrentPageURL().$value['uri']?>.html" data-width="100%" data-numposts="10"></div>
                                </div>
                            </div>
                            <!--end-section-product-->
                        </div>
                    </div>
                </div>

                <div class="content-bottom">
                    <h3>sản phẩm liên quan</h3>
                    <div class="swiper-container swiper-product-lienquan">
                        <div class="swiper-wrapper">
                        <?php foreach($row_related as $value) : ?>
                            <div class="swiper-slide">
                                <div class="item-product">
                                    <a href="<?=getURL($value['uri'])?>">
                                        <img src="<?=$value['thumbnail']?>" alt="">
                                    </a>
                                    <div class="info-product">
                                        <h2 class="title-product">
                                            <a href="<?=getURL($value['uri'])?>">
                                                <?php 
                                                    if(strlen($value['title']) > 60) {echo substr($value['title'],0,60).'... ';}
                                                    else { echo $value['title']; } 
                                                ?> 
                                            </a>
                                        </h2>
                                        <div class="price-sale">
                                            <?=getPriceSale($value)?>
                                        </div>
                                        <div class="view">
                                            <i class="far fa-eye"></i> 
                                            <span class="view-number">
                                                Lượt xem: 150
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                        </div>

                        <button class="swiper-btn-next"><i class="fal fa-arrow-right"></i></button>
                        <button class="swiper-btn-prev"><i class="fal fa-arrow-left"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    