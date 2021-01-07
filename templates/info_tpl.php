<?php include (_template."layout/breadcrumb.php") ?>
<div id="content" style="background-color: #fff;padding: 10px 0px;">
  <div class="container" >
     <?=$category['content']?>
     <div class="info-socials-article clearfix">
     	<div id="fb-root"></div>
     	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=469524270532474&autoLogAppEvents=1"></script>	
     	<div class="fb-like" data-href="<?= getCurrentPageURL().'.html'; ?>" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
     </div>
	<?php include (_template."layout/comment.php") ?>
  </div>
</div>

<!-- <div>
	<div class="swiper-container swiper-container-khuyenmai transition-800ms">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="upload/image/banner1.png" alt=""></div>
      <div class="swiper-slide"><img src="upload/image/banner2.png" alt=""></div>
      <div class="swiper-slide"><img src="upload/image/banner3.png" alt=""></div>
      <div class="swiper-slide"><img src="upload/image/banner2.png" alt=""></div>
      <div class="swiper-slide"><img src="upload/image/banner1.png" alt=""></div>
      <div class="swiper-slide"><img src="upload/image/banner3.png" alt=""></div>
      <div class="swiper-slide"><img src="upload/image/banner1.png" alt=""></div>
      <div class="swiper-slide"><img src="upload/image/banner2.png" alt=""></div>
      <div class="swiper-slide"><img src="upload/image/banner3.png" alt=""></div>
      <div class="swiper-slide"><img src="upload/image/banner2.png" alt=""></div>
    </div>
		<div class="swiper-scrollbar"></div>
	 <div class="swiper-button-prev"><span class="fa fa-chevron-left"></span></div> 
	<div class="swiper-button-next"><span class="fa fa-chevron-right"></span></div>
  </div>
</div> -->
<!-- <script type="text/javascript">
  setTimeout(function() { 
    // $(window).on('load', function() {
        var swiper = new Swiper('.swiper-container-khuyenmai', {
          // speed: 1000,
          // slidesPerView: 3,
          // slidesPerView: 2,
          // spaceBetween: 10,
          // effect:'fade',
          // fadeEffect:{
          // 	crossFade:true
          // },

          // navigation:{
          // 	prevEl:'.swiper-button-prev',
          // 	nextEl:'.swiper-button-next'
          // },
          // slidesPerColumn:2,
          // slidesPerColumnFill:'row',
          scrollbar: {
          	el: '.swiper-scrollbar',
          },
           mousewheel: true,
           direction: 'vertical',
      slidesPerView: 'auto',
      freeMode: true,
           // direction: 'vertical',
          // mousewheel: true,
          // autoplay: {
          //   delay: 5000,
          // },
          // effect:'slide',
          // allowTouchMove: true,
          // autoHeight: 'auto',
          // navigation: {
          //   nextEl: '#swiper-button-next-khuyenmai',
          //   prevEl: '#swiper-button-prev-khuyenmai',
          // },
          // loop:false,

            // on: {
            //   init: function() {
            //     $('.swiper-container-khuyenmai').removeClass('opacity-0');
            //   }
            // }
          });
        }, 500);
</script> -->