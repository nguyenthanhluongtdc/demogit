<div id="layout-parent-slider-<?= $r_language['uri'] ?>" class="swiper-container replaced" data-option="loop:false,slidesPerColumn:100,spaceBetween:5,allowTouchMove:false,slidesPerColumnFill:'row'">
	<div class="swiper-wrapper">
		<div class="swiper-slide">
			<?= getGraph($row_position['layout-index-carousel']) ?>
		</div>
		<div class="swiper-slide">
			<?= getGraph($row_position['layout-index-vct']) ?>
		</div>
		<div class="swiper-slide">
			<?= getGraph($row_position['layout-index-tabs1']) ?>
		</div>
		<div class="swiper-slide">
			<?= getGraph($row_position['layout-index-tabs2']) ?>
		</div>
		<div class="swiper-slide">
			<?= getGraph($row_position['layout-index-tabs3']) ?>
		</div>
		<div class="swiper-slide">
			<?= getGraph($row_position['layout-index-question']) ?>
		</div>
		<div class="swiper-slide">
			<?= getGraph($row_position['layout-index-customer_my']) ?>
		</div>
		<div class="swiper-slide">
			<?= getGraph($row_position['layout-index-blog_share']) ?>
		</div>
	</div>
</div>