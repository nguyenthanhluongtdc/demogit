<?php include (_template."layout/breadcrumb.php") ?>

<div class="banner-post" style="background: url(./upload/hinh/bannerjean.png); " >
        <div class="box-content">
            <h1> <?=$category['title']?> </h1>
            <div class="item-category">
            <ol class="breadcrumb" style="background: none;">
               <li>
                  <a href="<?=is_file("./home.php")?"./index.php":"./"?>"  style="color: #fff;">Trang chủ</a> 
               </li> 
            <?php $i=1;
            foreach($row_breadcrumb as $uri_breadcrumb=>$title_breadcrumb){
               if($uri_breadcrumb!=""&&$title_breadcrumb!=""){
                  if($i<count($row_breadcrumb)){?>
                     <li>
                        <a href="<?=getURL($uri_breadcrumb)?>" ><?=$title_breadcrumb?></a> 
                        <i class="far fa-angle-right"></i>
                     </li>
                  <?php }else{ ?>
                     <li class="active" style="color: #fff;">
                        <?=$title_breadcrumb?>
                     </li>
            <?php }} $i++;}?> 
            </ol>
            </div>
        </div>
</div>

<div class="line-space"></div>

<div id="main-content">
<div class="content-main">
   <div class="container">
               <?php if(count($row_product) > 0) : ?>
                  <div class="section-products hot-promotion">
                    <h3 class="line-title">SẢN PHẨM</h3>
                    <!---line-space-->
                    <div class="line-space"></div>
                    <!---end-line-space-->

                    <div class="row">
                    <?php foreach($row_product as $value) : ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
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
               <?php else : ?>
                  không tìm thấy sản phẩm nào
               <?php endif ?>
           
   </div>
</div>
</div>

<?=$paging ?>

<style>
   #body{
      background: #f0f0f0;
   }
</style>

<script>
     var swiper = new Swiper('.swiper-product', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10
                }, 992: {
                    slidesPerView: 4,
                    spaceBetween: 20
                }
            },
        });
</script>