<?php include (_template."layout/breadcrumb.php") ?>
<section class="container-fluid" >
<div id="content">
    <main class="padding-top-mobile">
        <!-- <div class="header-navigate">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="    padding-right: 0;">
                <ol class="breadcrumb breadcrumb-arrow" style="padding: 10px 0px !important;">
                  <li><a href="." >Trang chủ</a></li>
                  <li><i class="fa fa-angle-right"></i></li>
                  <li class="active"><span><?=$category['title']?></span></li>
                </ol>
              </div>
            </div>
          </div>
        </div> -->
        <div class="layout-page">
          <div class="container">
            <div class="row">
              <div class="col-md-2 pd-none-r hidden-sm hidden-xs" style="display: none;">
                <ul class="sidebar-page-left">
                <?php $donggia = $layout['header']['19k'] ?>
                <?php foreach ($donggia as $cat => $giadong): ?>
                  <li class="a_dg"><a style="font-size: 13px;" href="<?=getURL($giadong['uri'])?>"><?=$giadong['title']?></a></li>
                <?php endforeach ?>
                </ul>
                <iframe src="https://www.facebook.com/plugins/page.php?href=<?= urlencode($layout['header']['fanpage']['value']) ?>&tabs=timeline&width=185&height=960&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=469524270532474" width="185px" height="960px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> 
              </div>
              <div class=" col-md-12 col-lg-12 col-xs-12 text-center">
                    <div>
                      <h2 class="h2_tieude  h2_contact">Thông tin liên hệ</h2>
                        <div class="col-md-12 text-center">
                          <form class="content_lienhe" method="post" action="" style="padding-bottom: 20px;border-bottom: 1px solid #3333;">
                            <input type="text" id="name" name="name" autocomplete="off" value="" required placeholder="Họ và tên">
                            <input type="hidden" name="type" value="contact">
                            <input type="phone" id="tel" name="tel" autocomplete="off" required value="" placeholder="Số điện thoại">
                            <input type="email" id="email" name="email" required autocomplete="off" value="" placeholder="Email">
                            <textarea name="content" rows="8" cols="80" placeholder="Nhu cầu của bạn là gì?"></textarea>
                            <div class="text-center">
                              <button type="submit" class="btn btn_lh" name="contactbtn" id="contactbtn">Nhận hỗ trợ</button>
                            </div>
                          </form>
                        </div>
                        <div class="col-md-12 div-lh">
                          <div class="div-lh2"><h2 class="h2_contact">Bản đồ</h2></div>
                          <div class="google_map">
                           <?= $layout['index']['google']['value'] ?>
                         </div>
                       </div>
                       <div class="col-md-12 div-lh1">
                           <?= $category['content']?>
                       </div>
                   </div>
              </div>
            </div>
          </div>
        </div>
    </main>
</div>
</section>
<style>
.h2_contact{
  margin: 0;padding: 0;font-size: 20px;line-height: 20px;text-transform: uppercase;color: #4a90e2;margin-bottom: 10px;padding-top: 20px;
}
  .content_lienhe input {
    font-size: 15px;
    padding: 12px 20px;
    width: 100%;
    max-width: 600px;
    margin: 10px 0;
    color: #005c27;
    background-color: #fff;
    border: 3px solid #4a90e2;
}
.content_lienhe textarea {
    margin: 10px 0;
    width: 100%;
    max-width: 600px;
    border: 3px solid #4a90e2;
    font-size: 15px;
    padding: 15px 20px;
    color: #005c27;
    background-color: #fff;
}
.btn_lh:hover {
    cursor: pointer;
    background-color: #4a90e2;
    color: #fff;
}
.btn_lh {
    vertical-align: middle;
    text-transform: uppercase;
    text-align: center;
    font-family: 'Open Sans';
    color: #696969;
    font-size: 15px;
    line-height: 24px;
    border: 2px solid #4a90e2;
    max-width: 336px;
    width: 100%;
    height: 45px;
    cursor: pointer;
    background-color: #fff;
}
</style>