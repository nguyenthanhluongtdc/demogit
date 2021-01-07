<?php include (_template."layout/breadcrumb.php") ?>
<section class="container-fluid padd_0im">
<div id="content"> 								
	<main class="padding-top-mobile">
		
		<div id="blog-template" class="blog-template">
			<div class="container pad1 padd_0im">
				<div class="row mar_0">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<!-- Begin: Nội dung blog -->   
						<div class="row">									
							<ul class="col-xs-12 blog-list-articles lists-articles 7" id="list-articles">
								<?php $post = getItems(array('table'=>'post','condition'=>'where enable > 0' )) ?>
							<?php foreach ($post as $key => $value): ?>
								<li class="clearfix post_al" style="display: flex;padding: 10px 0;">
									<div class="blog-item-image blog-mobile" style="display: inline-block;vertical-align: top;padding: 2px;box-shadow: 0 0 2px 0 #e7e7e7;">
										<a href="<?=getURL($value['uri'])?>"><img class="img-mobile" style="width: 100%" src="<?=getResizedImageURL($value['thumbnail'],350,250,1,2)?>"></a>
									</div>
									<div class="blog-item-title" style="width: 70%;float: left;padding-left: 10px;">
										<a href="<?=getURL($value['uri'])?>" title="<?=$value['title']?>">
											<h2 style="margin-bottom: 5px;font-size: 18px;margin: 0;color: #5d5d5d;"><?=$value['title']?></h2>
										</a>
										<p style="font-size: 12px;color: #737373;margin: 5px 0px 10px;">
											Ngày: <?= date("d/m/yy",$value['create_date']); ?> lúc <?= date("H:i",$value['create_date']); ?>
										</p>
										<p class="blog-content-short-description" style="color: #5d5d5d; font-size: 12px;"><?= substr($value['description'],0,270).'[..]' ?></p>

										<a href="<?=$value['uri']?>" style="background: #F4524D; color: #fff; padding: 12px 15px; border-radius: 5px; margin-top: 10px; display: inline-block;">READ MORE</a>
									</div>
								</li>
								<hr class="hr_mobile">
							<?php endforeach ?>
							</ul>
							<!-- <div class="col-xs-12 clearfix loadmore">
								<a href="javascript:" class="btn-loading">Xem thêm bài viết</a>
							</div> -->
						</div>
					</div>
					<!--thêm if news_recent_show and -->
					<!-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="blog-sidebar">								
							<div class="title-decoration"><span>Bài viết mới nhất</span><div class="decoration"></div></div>
							<ul class="blog-list-articles">
								<?php $post_new = getItems(array('table'=>'post','condition'=>'where enable > 0 and popular > 0'))?> 
								<?php foreach ($post_new as $key => $value): ?>
								<li class="clearfix" style="display: flex;padding: 10px 0;border-bottom: 1px solid #333;border-bottom-style: dashed;">
									<div class="blog-item-image" style="    max-height: 60px;display: inline-block;vertical-align: top;padding: 2px;box-shadow: 0 0 2px 0 #e7e7e7;">
										<a href="<?=getURL($value['uri'])?>" title="<?=$value['title']?>">
											<img style="width: 80px;height: 55px;" src="<?=$value['thumbnail']?>">
										</a>
									</div>
									<div class="blog-item-title" style="width: 70%;float: left;padding-left: 10px;">								
										<a href="<?=getURL($value['uri'])?>" title="<?=$value['title']?>" style="display: -webkit-box;cursor: pointer;color: #635e5e;overflow: hidden;-webkit-line-clamp: 3;-webkit-box-orient: vertical;height: 42px;">
											<h2 style="margin-bottom: 5px;font-size: 13px;margin: 0;color: #31414F;"><?=$value['title']?></h2>
										</a>						
										<p style="font-size: 12px;color: #737373;margin: 5px 0px 10px;">
											Ngày: <?= date("d/m/yy",$value['create_date']); ?> lúc <?= date("H:i",$value['create_date']); ?>
										</p>							
									</div>
								</li>
								<?php endforeach ?>
							</ul>			
						</div>
						<div class="ads clearfix padd-15">
							<a href="">
								<img src="<?=$category['thumbnail']?>" style="width:260px,height:250px;">
							</a>
						</div>


						<div class="blog-sidebar" style="display: none;">
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

