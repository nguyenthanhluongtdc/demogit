<?php $count = array(); ?>

<div class="content-main">
        <div class="container">
            <!--section-top-vertical-->
            <div class="section-top-vertical">
                <div class="sidebar-main hidden-md-* ">
                    <ul class="sildebar">
                    <?php $sidebar = $layout['header']['sidebar'] ?>
                    <?php foreach ($sidebar as $value) : ?> <!---beginforeach--->
                        <li class="sidebar-item">
                            <span class="img" style="width: 15px; display: inline-block; margin-right: 5px;"> <img src="<?=$value['thumbnail']?>" alt=""> </span>
                            <a href="<?=getURL($value['uri'])?>" class="sidebar-link"> <?=$value['title']?> </a>
                        </li>
                    <?php endforeach ?> <!---endforeach--->
                    </ul>
                </div>

                <div class="banner-carouse">
                    <div class="carouse-left">
                        <div class="swiper-container swiper-carouse" style="width: 100%;">
                            <div class="swiper-wrapper">
                            <?php $carousel = $layout['index']['carousel_main'] ?>
                            <?php foreach ($carousel as $value) : ?>  <!----beginforeach--->
                                <div class="swiper-slide" >
                                    <img src="<?=$value['thumbnail']?>" alt="">
                                </div>
                            <?php endforeach ?> <!----endforeach--->
                            </div>
                            <button class="swiper-btn-next"><i class="fal fa-arrow-right"></i></button>
                            <button class="swiper-btn-prev"><i class="fal fa-arrow-left"></i></button>

                        </div>
                    </div>

                    <!-- <div class="carouse-right">
                        <div class="sub-carouse-top">
                            <img src="<?=$layout['index']['sub_carousel_1']['thumbnail']?>" alt="">
                        </div>
                        <div class="sub-carouse-bottom">
                            <img src="<?=$layout['index']['sub_carousel_2']['thumbnail']?>" alt="">
                        </div>
                    </div> -->
                </div>
            </div>
            <!--end-section-top-vertical-->

            <!---line-space-->
            <div class="line-space"></div>
            <!---end-line-space-->

            <!--section-about-->
            <!-- <?php $vct = $layout['index']['vct'] ?>
            <?php $category_vct = getItems(array('table'=>'category','condition'=>'where enable > 0 and id = '.$vct[0]['id'].' ')) ?>
            <div class="section-about">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-10 col-10" style="margin: 0 auto;">
                        <div class="img-item">
                            <img src="<?= $category_vct[0]['thumbnail'] ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10 col-10" style="margin: 0 auto;">
                        <div class="content-item">
                            <h2>
                                <?=$category_vct[0]['title']?>
                            </h2>
                            <h3>
                                <?= $category_vct[0]['first_tag'] ?>
                            </h3>
                            <p class="description">
                                <?= $category_vct[0]['content'] ?>
                            </p>
                            <div class="line-space"></div>
                            <a href="<?=getURL($category_vct[0]['uri'])?>" class="see-more">
                                <span>Xem Thêm</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--end-section-about-->

            <!---line-space-->
            <div class="line-space"></div>
            <!---end-line-space-->

            <!---line-space-->
            <div class="line-space"></div>
            <!---end-line-space-->

            <!--begin-section-product-->
            <?php $product_sale = getItems(array('table'=>'product','condition'=>'where enable > 0 and popular > 0')) ?>
            <?php if(!empty($product_sale)) : ?>
                <div class="section-products hot-promotion">
                    <h3 class="line-title">KHUYÊN MÃI HOT</h3>
                    <!---line-space-->
                    <div class="line-space"></div>
                    <!---end-line-space-->

                    <div class="row">
                    <?php $product_sale = getItems(array('table'=>'product','condition'=>'where enable > 0 and popular > 0')) ?>
                    <?php foreach($product_sale as $value) : ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-2">
                            <div class="item-product">
                                <a href="<?=getURL($value['uri'])?>"><img src="<?=$value['thumbnail']?>" alt=""></a>
                                <div class="cart-detail">
                                    <div class="detail">
                                        <a href="<?=getURL($value['uri'])?>"><i class="far fa-eye"></i> </a>
                                    </div>
                                    <!-- <div class="cart">
                                        <button onclick="cartAjax({ action: 'addtocart',quantity: 1, id: '<?= $value['id'] ?>', lbl: 'label-success', callback: function(){ setTimeout(function() { window.location='<?= $classify['cart'][0]['uri'] ?>'; }, 500); } });"><i class="fas fa-shopping-cart"></i></button>
                                    </div> -->
                                </div>
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
                                        <?=getPriceSale($value) ?>
                                    </div>
                                    <div class="view">
                                        <i class="far fa-eye"></i> <span class="view-number">Lượt xem: 150</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                    </div>
                </div>
            <?php endif ?>
            <!--end-section-product-->

            <!---line-space-->
            <div class="line-space"></div>
            <!---end-line-space-->

            <!--begin-section-product-->
            <?php $product_hot_deal = getItems(array('table'=>'product','condition'=>'where enable > 0 and popular2 > 0')) ?>
            <?php if(!empty($product_hot_deal)) : ?>
                <div class="section-products top-hot-deal">
                    <h3 class="line-title">TOP BÁN CHẠY</h3>
                    <!---line-space-->
                    <div class="line-space"></div>
                    <!---end-line-space-->

                    <div class="row">
                    <?php foreach($product_hot_deal as $value) : ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-2">
                            <div class="item-product">
                                <a href="<?=getURL($value['uri'])?>"><img src="<?=$value['thumbnail']?>" alt=""></a>
                                <div class="cart-detail">
                                    <div class="detail">
                                        <a href="<?=getURL($value['uri'])?>"><i class="far fa-eye"></i> </a>
                                    </div>
                                    <!-- <div class="cart">
                                        <button onclick="cartAjax({ action: 'addtocart',quantity: 1, id: '<?= $value['id'] ?>', lbl: 'label-success', callback: function(){ setTimeout(function() { window.location='<?= $classify['cart'][0]['uri'] ?>'; }, 500); } });"><i class="fas fa-shopping-cart"></i></button>
                                    </div> -->
                                </div>
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
                                        <?=getPriceSale($value) ?>
                                    </div>
                                    <div class="view">
                                        <i class="far fa-eye"></i> <span class="view-number">Lượt xem: 150</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                    </div>
                </div>
            <?php endif ?>
            <!--end-section-product-->

            <!---line-space-->
            <div class="line-space"></div>
            <!---end-line-space-->

            <!---tabs 1-->
            <?php $category_tabs1 = $layout['index']['tabs1'] ?>
            <!--tilte-header-->
            <div class="title-header">
                <h2 class="title-category"> <?=$layout['index']['title_tabs1']['value']?> </h2>
                <div class="list-category">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php $sub_count = array(); ?>
                        <?php foreach($category_tabs1 as $key => $value) : ?>
                                <li class="nav-item <?php if($key === 0) echo 'active' ?>">
                                    <a class="nav-link <?php if($key === 0) echo 'active' ?>" id="tab1<?=$key?>-tab"         data-toggle="tab" href="#tab1<?=$key?>" role="tab"
                                        aria-controls="tab1<?=$key?>" aria-selected="true">
                                        <?= $value['title']?>
                                    </a>
                                </li>
                        
                        <?php array_push($sub_count,$key) ?>
                        <?php endforeach ?>
                        <?php array_push($count, $sub_count) ?>
                    </ul>
                </div>
            </div>
            <!---end-tilte-header--->

            <!---line-space-->
            <div class="line-space-short"></div>
            <!---end-line-space-->

            <div class="tab-content" id="myTabContent">
                <?php foreach($category_tabs1 as $key => $value) : ?>
                    <div class="tab-pane fade <?php if($key === 0) echo 'active' ?> in" id="tab1<?=$key?>" role="tabpanel" aria-labelledby="home-tab">
                        <!--begin-section-product-->
                        <div class="section-products top-hot-deal">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 hidden-xs">
                                    <div class="product-feature">
                                        <img src="<?=$layout['index']['avatar_tabs1']['thumbnail']?>" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                    <div class="swiper-container swiper-product-tabs1<?=$key?>">
                                        <div class="swiper-wrapper">
                                        <?php $product_tab = getItems(array('table'=>'product','condition'=>'where enable > 0 and find_in_set('.$value['id'].',category_id) ')) ?>
                                        <?php foreach($product_tab as $value2) : ?>
                                            <div class="swiper-slide">
                                                <div class="item-product">
                                                    <a href="<?=getURL($value2['uri'])?>">
                                                        <img src="<?=$value2['thumbnail']?>" alt="">
                                                    </a>
                                                    <div class="info-product">
                                                        <h2 class="title-product">
                                                            <a href="<?=getURL($value2['uri'])?>">
                                                                <?php 
                                                                    if(strlen($value2['title']) > 45) {echo substr($value2['title'],0,45).'... ';}
                                                                    else { echo $value2['title']; } 
                                                                ?> 
                                                            </a>
                                                        </h2>
                                                        <div class="price-sale">
                                                            130,000 đ
                                                        </div>
                                                        <div class="view">
                                                            <i class="far fa-eye"></i> <span class="view-number">Lượt xem:
                                                                150</span>
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
                        <!--end-section-product-->
                    </div>
                <?php endforeach ?>
            </div>

            <!---line-space-->
            <div class="line-space"></div>
            <!---end-line-space-->
            
            <!---tabs 2-->
            <?php $category_tabs2 = $layout['index']['tabs2'] ?>
            <!--tilte-header-->
            <div class="title-header">
                <h2 class="title-category"> <?=$layout['index']['title_tabs2']['value']?> </h2>
                <div class="list-category">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php $sub_count = array(); ?>
                        <?php foreach($category_tabs2 as $key => $value) : ?>
                                <li class="nav-item <?php if($key === 0) echo 'active' ?>">
                                    <a class="nav-link <?php if($key === 0) echo 'active' ?>" id="tab2<?=$key?>-tab"         data-toggle="tab" href="#tab2<?=$key?>" role="tab"
                                        aria-controls="tab2<?=$key?>" aria-selected="true">
                                        <?= $value['title']?>
                                    </a>
                                </li>
                        <?php array_push($sub_count,$key) ?>
                        <?php endforeach ?>
                        <?php array_push($count, $sub_count) ?>
                    </ul>
                </div>
            </div>
            <!---end-tilte-header--->

            <!---line-space-->
            <div class="line-space-short"></div>
            <!---end-line-space-->

            <div class="tab-content" id="myTabContent">
                <?php foreach($category_tabs2 as $key => $value) : ?>
                    <div class="tab-pane fade <?php if($key === 0) echo 'active' ?> in" id="tab2<?=$key?>" role="tabpanel" aria-labelledby="home-tab">
                        <!--begin-section-product-->
                        <div class="section-products top-hot-deal">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5">
                                    <div class="product-feature">
                                        <img src="<?=$layout['index']['avatar_tabs2']['thumbnail']?>" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                                    <div class="swiper-container swiper-product-tabs2<?=$key?>">
                                        <div class="swiper-wrapper">
                                        <?php $product_tab = getItems(array('table'=>'product','condition'=>'where enable > 0 and find_in_set('.$value['id'].',category_id) ')) ?>
                                        <?php foreach($product_tab as $value2) : ?>
                                            <div class="swiper-slide">
                                                <div class="item-product">
                                                    <a href="<?=getURL($value2['uri'])?>">
                                                        <img src="<?=$value2['thumbnail']?>" alt="">
                                                    </a>
                                                    <div class="info-product">
                                                        <h2 class="title-product">
                                                            <a href="<?=getURL($value2['uri'])?>">
                                                                <?php 
                                                                    if(strlen($value2['title']) > 60) {echo substr($value2['title'],0,60).'... ';}
                                                                    else { echo $value2['title']; } 
                                                                ?> 
                                                            </a>
                                                        </h2>
                                                        <div class="price-sale">
                                                            130,000 đ
                                                        </div>
                                                        <div class="view">
                                                            <i class="far fa-eye"></i> <span class="view-number">Lượt xem:
                                                                150</span>
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
                        <!--end-section-product-->
                    </div>
                <?php endforeach ?>
            </div>

            <!---line-space-->
            <div class="line-space"></div>
            <!---end-line-space-->

            <!---tabs 3-->
            <?php $category_tabs3 = $layout['index']['tabs3'] ?>
            <!--tilte-header-->
            <div class="title-header">
                <h2 class="title-category"> <?=$layout['index']['title_tabs3']['value']?> </h2>
                <div class="list-category">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php $sub_count = array(); ?>
                        <?php foreach($category_tabs3 as $key => $value) : ?>
                                <li class="nav-item <?php if($key === 0) echo 'active' ?>">
                                    <a class="nav-link <?php if($key === 0) echo 'active' ?>" id="tab3<?=$key?>-tab"         data-toggle="tab" href="#tab3<?=$key?>" role="tab"
                                        aria-controls="tab3<?=$key?>" aria-selected="true">
                                        <?= $value['title']?>
                                    </a>
                                </li>
                        <?php array_push($sub_count,$key) ?>
                        <?php endforeach ?>
                        <?php array_push($count, $sub_count) ?>
                    </ul>
                </div>
            </div>
            <!---end-tilte-header--->

            <!---line-space-->
            <div class="line-space-short"></div>
            <!---end-line-space-->

            <div class="tab-content" id="myTabContent">
                <?php foreach($category_tabs3 as $key => $value) : ?>
                    <div class="tab-pane fade <?php if($key === 0) echo 'active' ?> in" id="tab3<?=$key?>" role="tabpanel" aria-labelledby="home-tab">
                        <!--begin-section-product-->
                        <div class="section-products top-hot-deal">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5">
                                    <div class="product-feature">
                                        <img src="<?=$layout['index']['avatar_tabs3']['thumbnail']?>" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                                    <div class="swiper-container swiper-product-tabs3<?=$key?>">
                                        <div class="swiper-wrapper">
                                        <?php $product_tab = getItems(array('table'=>'product','condition'=>'where enable > 0 and find_in_set('.$value['id'].',category_id) ')) ?>
                                        <?php foreach($product_tab as $value2) : ?>
                                            <div class="swiper-slide">
                                                <div class="item-product">
                                                    <a href="<?=getURL($value2['uri'])?>">
                                                        <img src="<?=$value2['thumbnail']?>" alt="">
                                                    </a>
                                                    <div class="info-product">
                                                        <h2 class="title-product">
                                                            <a href="<?=getURL($value2['uri'])?>">
                                                                <?php 
                                                                    if(strlen($value2['title']) > 60) {echo substr($value2['title'],0,60).'... ';}
                                                                    else { echo $value2['title']; } 
                                                                ?> 
                                                            </a>
                                                        </h2>
                                                        <div class="price-sale">
                                                            130,000 đ
                                                        </div>
                                                        <div class="view">
                                                            <i class="far fa-eye"></i> <span class="view-number">Lượt xem:
                                                                150</span>
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
                        <!--end-section-product-->
                    </div>
                <?php endforeach ?>
            </div>


            <!----video-->
            <div class="line-space"></div>
            <!-- <div class="section-question-video ">
                <h3 class="line-title">CÂU HỎI THƯỜNG GẶP</h3>

                <div class="line-space"></div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                        <h3>Giải đáp thắc mắc khách hàng</h3>
                        <div class="item-question">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <?php foreach($layout['index']['question_answer'] as $key => $value) : ?>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne_<?=$key?> " aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fal fa-plus-hexagon"></i> <span class="title"> <?=$value['title']?> </span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne_<?=$key?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                        <h3>Danh sach video</h3>
                        <div class="item-list_video">
                            <div class="swiper-container swiper-list_video">
                                <div class="swiper-wrapper">
                                <?php foreach($layout['index']['question_video'] as $value) : ?>
                                    <div class="swiper-slide">
                                        <div class="items">
                                            <a data-fancybox="video" href="<?=$value['link']?>">
                                                <img src="<?=$value['thumbnail']?>" alt="">
                                                <h3 class="title">
                                                    <?=$value['title']?>
                                                </h3>

                                                <div class="icon-ytb">
                                                    <i class="fab fa-youtube"></i>
                                                </div>
                                            </a>
                                            
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
            </div> -->
            <!--end-section-product-->

            <div class="widget_customer_my" style="background:url('<?=$layout['index']['banner_customer']['thumbnail']?>');background-size:100% 100%; background-position: center center;">
                <h2 class="title"> <?=$layout['index']['title_customer']['value']?> </h2>
                <div class="box-customer">
                    <div class="swiper-container swiper-customer">
                        <div class="swiper-wrapper">
                            <?php foreach($layout['index']['list_customer'] as $value) : ?>
                                <div class="swiper-slide">
                                    <div class="img-customer">
                                        <img src="<?=$value['thumbnail']?>" alt="<?=$value['title']?>">
                                    </div>
                                    <h3 class="name">
                                        <?=$value['title']?>
                                    </h3>
                                    <p class="description">
                                        <?=$value['link']?>
                                    </p>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="line-space"></div>
            <div class="section-blog ">
                <h3 class="line-title"> <?=$layout['index']['title_blog_share']['value']?> </h3>
                <!---line-space-->
                <div class="line-space"></div>
                <!---end-line-space-->

                <div class="swiper-container swiper-blog">
                    <div class="swiper-wrapper">
                    <?php $category_blog_share = $layout['index']['blog_share'][0] ?>
                    <?php $post_blog_share = getItems(array('table'=>'post','condition'=>'where enable > 0 and find_in_set('.$category_blog_share['id'].',category_id)')) ?>

                    <?php foreach($post_blog_share as $value) : ?>
                        <div class="swiper-slide">
                            <div class="item-blog">
                                <img src="<?= $value['thumbnail'] ?>" alt="">
                                <div class="info-blog">
                                    <h2 class="title-blog">
                                        <a href="#">
                                            <?php 
                                                if(strlen($value['title']) > 60) {echo substr($value['title'],0,60).'... ';}
                                                else { echo $value['title']; } 
                                            ?> </a> 
                                    </h2>
                                    <p class="description">
                                        <?php 
                                            if(strlen($value['description']) > 180) {echo substr($value['description'],0,180).'... ';}
                                            else { echo $value['description']; } 
                                        ?> 
                                    </p>

                                    <p class="read-more">
                                        <a class="link" href="<?=getURL($value['uri'])?>">Read more... </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                    </div>

                    <button class="swiper-btn-next"><i class="fal fa-arrow-right"></i></button>
                    <button class="swiper-btn-prev"><i class="fal fa-arrow-left"></i></button>
                </div>
            </div>
            <!--end-section-product-->
        </div>
    </div>

    

    <script  type="text/javascript">
        $( document ).ready(function() {
            let list_key = [];
                list_key = <?php echo json_encode($count) ?>

                let dem = 1;
                list_key.forEach(el=>{
                el.forEach(function(sub_el) {
                
                    const swiper = new Swiper(`.swiper-product-tabs${dem.toString()+sub_el}`, {
                    loop: true,
                    autoplay:{
                        delay: 2000
                    },
                        navigation: {
                        nextEl: '.swiper-btn-next',
                        prevEl: '.swiper-btn-prev',
                        },
                        
                        slidesPerView: 1.5,

                        spaceBetween: 10,

                        breakpoints: {
                        640: {
                            slidesPerView: 2.5,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 2.5,
                            spaceBetween: 40,
                        },
                        1024: {
                            slidesPerView: 3.5,
                            spaceBetween: 50,
                        },
                        }
                    });

                    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                    swiper.update()
                    })

                })
                    dem++;
                })
            });
    </script>
