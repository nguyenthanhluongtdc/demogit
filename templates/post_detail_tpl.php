<?php include (_template."layout/breadcrumb.php") ?>
<section class="container-fluid padd_0im">
   <div id="content">
      <main class="padding-top-mobile">
         <div id="blog-template" class="blog-template">
            <div class="container padd_0im">
               <div class="row mar_0">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <h1 style="font-size: 28px;padding-top: 10px;margin-top: 0px; color: #5a9e74;" class="title_post_detail"><?=$post['title']?></h1>
                     <p style="color: #999;font-size: 12px;margin-bottom: 12px;">
                        Ngày: <?= date("d/m/yy",$post['create_date']); ?> lúc <?= date("H:i",$post['create_date']); ?>
                     </p>
                     <div class="info-description-article clearfix" style="color: #5d5d5d; font-size: 13px;">
                        <?=$post['content']?>
                     </div>
                     <!-- <div class="info-socials-article clearfix">
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=469524270532474&autoLogAppEvents=1"></script>	
                        <div class="fb-like" data-href="<?= getCurrentPageURL().'.html';?>" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
                        </div> -->
                     <!-- <div class="title-decoration" style="padding-top: 10px;"><span> BÌNH LUẬN </span>
                        <div class="decoration"></div>  
                        </div> -->
                     <!-- <?php include _template."layout/comment.php"; ?> -->
                  </div>
                  <!--thêm if news_recent_show and -->
                  <!-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                     <div class="blog-sidebar">								
                     	<div class="title-decoration"><span>Bài viết mới nhất</span><div class="decoration"></div></div>
                     	<ul class="blog-list-articles">
                     		<?php $post_new = getItems(array('table'=>'post','condition'=>'where enable > 0 and popular > 0'))?>
                     		<?php foreach ($post_new as $key => $value): ?>
                     		<li class="clearfix" style="display: flex;padding: 5px 0;border-bottom: 1px solid #333;border-bottom-style: dashed;">
                     			<div class="blog-item-image" style="display: inline-block;padding: 2px;width: 30%;max-height: 60px;box-shadow: 0 0 2px 0 #e7e7e7;">
                     				<a href="<?=getURL($value['uri'])?>" title="<?=$value['title']?>" >
                     					<img style="width: 80px;height: 55px;" src="<?=$value['thumbnail']?>">
                     				</a>
                     			</div>
                     			<div class="blog-item-title" style="width: 70%;float: left;padding-left: 10px;">								
                     				<a href="<?=getURL($value['uri'])?>" title="<?=$value['title']?>" style="display: -webkit-box;cursor: pointer;font-size: 13px;color: #635e5e;overflow: hidden;-webkit-line-clamp: 3;-webkit-box-orient: vertical;height: 42px;">
                     					<h2 style="margin-bottom: 5px;margin: 0;color: #31414F;font-size: 13px;"><?=$value['title']?></h2>
                     				</a>						
                     				<p style="font-size: 12px;color: #737373;margin: 5px 0px 10px;">
                     					Ngày: <?= date("d/m/yy",$value['create_date']); ?> lúc <?= date("H:i",$value['create_date']); ?>
                     				</p>							
                     			</div>
                     		</li>
                     		<?php endforeach ?>
                     	</ul>			
                     </div>
                     <div class="ads clearfix padd-15" style="display: none;" >
                     	<a href="">
                     		<img src="" style="width: 260px;height: 250px;">
                     	</a>
                     </div>
                     <div class="blog-sidebar" style="padding-top: 10px;display: none;">
                     	<div class="title-decoration"><span>Danh mục blog</span><div class="decoration"></div></div>
                     	<ul class="nav sidebar" id="menu-blog">
                           					<?php $donggia = $layout['header']['19k'] ?>
                           					<?php foreach ($donggia as $cat => $giadong): ?>
                     		<li class="item has-sub  first">
                     			<a href="<?=getURL($giadong['uri'])?>">
                     				<span class="lbl"><?=$giadong['title']?></span>
                     				<span data-toggle="collapse" data-parent="#cssmenu" href="#sub-item-1" class="sign">
                     					<img src="./upload/image/down.png">
                     				</span>
                     			</a>
                     		</li>
                     		<?php endforeach ?>
                     	</ul>
                     </div>
                     </div> -->
               </div>
            </div>
         </div>
      </main>
   </div>
</section>
<div class="comment_item" style="margin-top: 100px;">
   <div class="container">
      <div id="comment">
         <!-- <div id="fb-root"></div> -->
         <!-- 								<script>
            /*<![CDATA[*/
            (function(e,a,f) {
            	var c, b=e.getElementsByTagName(a)[0];
            
            	if(e.getElementById(f)) {
            		return
            	}
            
            	c=e.createElement(a);
            	c.id=f;
            	c.src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=764720674363696&autoLogAppEvents=1";
            	b.parentNode.insertBefore(c, b)
            }
            
            (document, "script", "facebook-jssdk"));
            
            /*]]>*/
            </script> -->
         <div id="fb-root"></div>
         <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0&appId=1752669808220357&autoLogAppEvents=1" nonce="hrMLHhqv"></script>
         <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=true&version=v8.0&appId=764720674363696&autoLogAppEvents=1"></script> -->
         <div class="fb-comments" data-href="<?=getCurrentPageURL().$value['uri']?>.html" data-width="100%" data-numposts="10"></div>
      </div>
   </div>
   <style>
      #comment iframe {
      width: 100% !important
      }
   </style>
</div>