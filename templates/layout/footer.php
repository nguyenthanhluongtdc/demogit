<div class="line-space"></div>
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="item-footer">
                            <div class="logo-website"> <img src="<?=$layout['header']['logo_website']['thumbnail']?>" alt=""> </div>
                            <p class="content">
                                <?=$layout['footer']['value_row1']['value']?>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="item-footer">
                            <h3 class="title-item-footer">
                                DANH MỤC
                            </h3>
                            <ul class="items">
                                <?php foreach($layout['footer']['footer_row2'] as $value) : ?>
                                    <li class="item">
                                        <a class="item-link" href="<?=getURL($value['uri'])?>"><?=$value['title']?></a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="item-footer">
                            <h3 class="title-item-footer">
                                Dang ky nhan tin
                            </h3>

                            <ul class="items-icon">
                                <?php foreach($layout['footer']['value_row3'] as $value) : ?>
                                    <li>
                                        <a href="<?=getURL($value['link'])?>"><img src="<?=$value['thumbnail']?>" alt=""></a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="item-footer">
                            <h3 class="title-item-footer">
                                Ban do
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <a href="">© 2020 Haitrieu21.com - Xưởng Sỉ Thời Trang Nam Nữ - Thiết kế bởi sikido.vn</a>
        </div>
    </footer>