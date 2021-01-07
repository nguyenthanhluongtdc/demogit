<header class="header-main">
<div class="header-top">
    <div class="container">
        <ul class="sub-top-top">
            <li class="box-welcome"> <a href="<?=getURL()?>"> <img src=" <?=$layout['header']['logo_website']['thumbnail']?>" alt=""> </a> </li>
            <li class="box-search">
                <form action="<?=getURL($classify['search'][0]['uri'])?>" method="post">
                    <div class="items-form">
                        <input type="text" placeholder="Tim kiem" name="title">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </li>
            <li class="box-hotline">
                <span><?=$layout['header']['title_hotline']['value']?> </span> : <a href="tel:<?=$layout['header']['tel_hotline']['value']?>"> <?=$layout['header']['tel_hotline']['value']?> </a>
            </li>
        </ul>
        <ul class="sub-top-bottom">
            <li class="box-item">
                <div class="img-item">
                    <img src="http://haitrieu21.com/uploads/source/demo/the-manh/icon1.png" alt="">
                </div>
                <div class="title-item">
                    <h3>GIAO HANG NHANH</h3>
                    <p class="description">
                        TOAN QUOC
                    </p>
                </div>
            </li>
            <li class="box-item">
                <div class="img-item">
                    <img src="http://haitrieu21.com/uploads/source/demo/the-manh/icon1.png" alt="">
                </div>
                <div class="title-item">
                    <h3>GIAO HANG NHANH</h3>
                    <p class="description">
                        TOAN QUOC
                    </p>
                </div>
            </li>
            <li class="box-item">
                <div class="img-item">
                    <img src="http://haitrieu21.com/uploads/source/demo/the-manh/icon1.png" alt="">
                </div>
                <div class="title-item">
                    <h3>GIAO HANG NHANH</h3>
                    <p class="description">
                        TOAN QUOC
                    </p>
                </div>
            </li>
            <li class="box-item">
                <div class="img-item">
                    <img src="http://haitrieu21.com/uploads/source/demo/the-manh/icon1.png" alt="">
                </div>
                <div class="title-item">
                    <h3>GIAO HANG NHANH</h3>
                    <p class="description">
                        TOAN QUOC
                    </p>
                </div>
            </li>
            <li class="box-item">
                <a href="<?=getURL($classify['cart'][0]['uri'])?>"  style="justify-content: flex-end; display: flex; width: 100%; text-decoration: none;">
                    <div class="img-item">
                        <i class="fas fa-shopping-cart" style="font-size: 30px;"></i>
                    </div>
                    <div class="title-item">
                        <h3>Gio hang</h3>
                        <p class="description">
                            <b class="qty"><?=$cart['total_quantity']?></b> Sản phẩm
                        </p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="header-navbar">
    <div class="container">
        <div class="items-header">
            <div class="menu-navbar">
                <i class="fas fa-bars"></i> <span> <?=$layout['header']['title_sidebar']['value'] ?> </span>
            </div>

            <div class="box_cart-search">
                <form action="<?=getURL($classify['search'][0]['uri'])?>" method="get" class="form-search">
                    <input type="text" placeholder="Tim kiem" name="title">
                    <button><i class="far fa-search"></i></button>
                </form>
                <a href="javascript:void(0);" class="search"><i class="far fa-search"></i></a>
                <a href="<?=getURL($classify['cart'][0]['uri'])?>" class="cart">
                    <i class="fas fa-shopping-cart"></i>

                    <b style="background: yellow; 
                            color: #000; 
                            height: 15px; 
                            width: 15px; 
                            border-radius: 50%; 
                            display: inline-block; 
                            text-align: center; 
                            font-size: 13px;
                            position: absolute;
                            bottom: 12px;
                            left: 15px;"> 
                        <?=$cart['total_quantity']?>
                    </b>
                </a>
            </div>

            <ul class="navbar-horizontal navbar-collapse-over">

            <?php $navigation = $layout['header']['navigation'] ?>
            <?php foreach ($navigation as $value) : ?> <!--begin foreach-->

                <li class="nav-item">
                    <a href="<?=getURL($value['uri'])?>" class="nav-link"><?=$value['title']?></a>
                </li>

            <?php endforeach ?><!---endforeach-->

            </ul>
        </div>
    </div>
</div>
</header>


<div id="nav-main-menu-mobile">
             <div class="container" >
                <div class="line-header-menu">
                    <div class="img-logo">
                     <a href="<?=getURL()?>"> <img src=" <?=$layout['header']['logo_website']['thumbnail']?>" alt="" style="he"> </a> 
                    </div>
                   <form class="form-search-mobile" method="POST" action="<?=getURL($classify['search'][0]['uri'])?>" style="float: left;">
                       <input type="text" placeholder="Bạn tìm gì">
                       <button><i class="fas fa-search"></i></button>
                   </form>
                   <div class="cart">
                        <a href="<?=getURL($classify['cart'][0]['uri'])?>">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                   </div>
                    <div>
                        <span class="icon-menu">
                            <i class="fas fa-align-left icon-open"></i>
                        </span>
                    </div>
                 </div>
             </div>
             <div class="menu-mobile">
                 <ul class="menu-level-1">
                     <li class="item-level-1 " style="border-bottom: 1px solid #ccc;">
                        <a href="" style="width: 70px; border: none;"><img style="height: 40px; width: auto;" src="<?=$layout['header']['logo']['thumbnail']?>" alt=""></a>
                        <i class="fas fa-times icon-exit" style="line-height: 50px;"></i>
                    </li>
                    <?php $items = $layout['header']['menu-nav'] ?>
                    <?php foreach($items as $value) : ?>
                     <li class="item-level-1" >
                         <a href="<?=$sub_value['uri']?>" class="item-link"><?=$value['title']?></a>
                         <?php if(count($value['child']) > 0) : ?>
                        <i class="fas fa-chevron-right click-icon-right"></i>
                         <ul class="menu-level-2">
                             <?php foreach($value['child'] as $sub_value) : ?>
                                <li class="item-level-2">
                                    <a href="<?=$sub_value['uri']?>"><?=$sub_value['title']?></a>
                                    <!-- <i class="fas fa-chevron-right click-icon-right"></i> -->
                                </li>
                             <?php endforeach ?>
                             <!-- <li class="item-level-2">
                                 <a href="">Trang chu 2</a>
                                 <i class="fas fa-chevron-right click-icon-right"></i>
                                 <ul class="menu-level-3">
                                     <li class="item-level-3">
                                         <a href="">Trang chu 2.1</a>
                                         <i class="fas fa-chevron-right click-icon-right"></i>
                                     </li>
                                     <li class="item-level-3">
                                         <a href="">Trang chu 2.2</a>
                                         <i class="fas fa-chevron-right click-icon-right"></i>
                                     </li >
                                 </ul>
                             </li> -->
                         </ul>
                         <?php endif ?>
                     </li>
                    <?php endforeach ?>
                 </ul>
             </div>
        </div>

        <style>
            * {
                    margin: 0;
                    padding: 0;
                    border: none;
                    outline: none;
                }

                #nav-main-menu-mobile{
                    margin-bottom: 20px;
                    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
                    padding: 5px 0;
                    background: #8fe3d9;
                }

                .form-search-mobile{
                    display: flex;
                }

                .form-search-mobile input[type="text"]{
                    width: 80%;
                    border: 1px solid #ccc;
                    border-top-left-radius: 5px;
                    border-bottom-left-radius: 5px;
                    padding-left: 10px;
                    line-height: 30px;
                    font-size: 13px;
                }

                .form-search-mobile button{
                    background: #fff;
                    color: rgb(41, 36, 36);
                    width: 20%;
                    line-height: 30px;
                    border: 1px solid #ccc;
                    margin-left: -5px;
                    border-top-right-radius: 5px;
                    border-bottom-right-radius: 5px;
                    border-left: none;
                }

                .menu-mobile {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 80%;
                    height: 100%;
                    background: #fff;
                    transform: translateX(-100%);
                    transition: all 500ms;
                    z-index: 10;
                }

                .menu-mobile.active {
                    transform: translateX(0px);
                }

                .menu-mobile ul {
                    list-style: none;
                }

                .menu-mobile ul li i {
                    display: inline-block;
                    width: 10%;
                    line-height: 40px;
                    position: absolute;
                    right: 0;
                    top: 0;
                    text-align: center;
                    border-left: 1px solid #ccc;
                    border-bottom: 1px solid #ccc;
                }

                .menu-mobile ul li i.active{
                    background: #d6cad6 ;
                }

                /* .menu-mobile .item-level-1 {
                    background: #3498db;
                } */

                .menu-mobile .menu-level-1 a {
                    color: #fff;
                    text-decoration: none;
                    text-transform: capitalize;
                    padding: 10px 0 10px 10px;
                    display: inline-block;
                    width: 90%;
                }

                .menu-mobile .menu-level-2 {
                    /* background: #333; */
                    max-height: 0;
                    overflow: hidden;
                    transition: max-height 500ms;
                }

                .menu-mobile .menu-level-2 li a {
                    padding-left: 20px;
                }

                .menu-mobile .menu-level-3 li>a {
                    padding-left: 30px;
                }

                .menu-level-3 {
                    /* background: rgb(68, 63, 63); */
                    max-height: 0;
                    overflow: hidden;
                    transition: max-height 500ms;
                }

                .menu-level-2.active {
                    max-height: 20em;
                }

                .menu-level-3.active {
                    max-height: 10em;
                }

                /**icon menu**/
                .line-header-menu {
                    width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                }

                .icon-menu {
                    width: 40px;
                    height: 30px;
                    line-height: 35px;
                    float: right;
                    text-align: center;
                    background: #3d3c3d;
                    color: #fff;
                    transition: all 300ms;
                }

                .cart i{
                    font-size: 25px;
                    color: #fff;
                }

                .icon-open{
                    color: #fff;
                }

                .icon-menu.active{
                    transform: translateX(-200px);
                    opacity: 0;
                }

                #nav-main-menu-mobile ul li {
                    position: relative;
                }

                #nav-main-menu-mobile ul li a{
                    color: #3d3d3d;
                    border-bottom: 1px solid #ccc;
                }

                #nav-main-menu-mobile {
                    display: none;
                }

                #nav-main-menu-mobile .img-logo, .horizontal-fixed{
                    width: 40px;
                    float: left;
                }

                .icon-open, .icon-exit{
                    font-size: 20px;
                    font-weight: 200;
                }


        </style>

        <script>
            $(document).ready(function () {
                $('.click-icon-right').click(function () {
                    $(this).next().toggleClass('active');
                    if($(this).next().text() != ''){
                        $(this).toggleClass('active');
                    }
                });

                $('.icon-menu').click(function () {
                    $('.menu-mobile').toggleClass('active');
                    $(this).toggleClass('active')
                })

                $('.icon-exit').click(function(){
                    $('.menu-mobile').toggleClass('active');
                    $('.icon-menu').toggleClass('active')
                })
            });
        </script>
