<style>
   #body{
   background: #f0f0f0 !important;
   }
   .btn-success{
   background: rgb(213,183,196);
   background: linear-gradient(0deg, rgba(213,183,196,0.6222864145658263) 0%, rgba(232,1,1,0.6727065826330532) 99%);
   }
   .btn-success:hover{
   background: rgb(232,1,1);
   background: linear-gradient(0deg, rgba(232,1,1,0.6727065826330532) 0%, rgba(213,183,196,0.6222864145658263) 100%);
   }
</style>

<?php include (_template."layout/breadcrumb.php") ?>
<div class="table-cart-wrapper" id="cart_load">
   <div class="container" id="cart_load1">
      <div class="row">
         <?php if (is_array($cart['product']) && !empty($cart['product'])): ?>
         <form action="" class="col-lg-8" method="post" accept="utf-8" onsubmit="return cartSubmit();" style="max-width: 600px; display: block; margin: 15px auto; user-select: none; -webkit-user-select: none; background: #fff; box-shadow: 0 0 20px rgba(0, 0, 0, .15); border-radius: 10px;
            padding: 20px;" id="form_post">
            <div class="cart-table-container">
               <div class="cart-table">
                  <?php foreach ($cart['product'] as $k_product => $r_product): ?>
                  <div style="display: flex; margin-bottom: 50px;">
                     <div>
                        <a href="<?= getURL($r_product['uri']) ?>" class="thumbnail" style="margin-left: auto;display:flex;align-items: center;width: 100px; height: 100px; text-align: center; margin-right: 10px; margin-bottom: 0;">
                        <img style="max-height: 100%;" src="<?=$r_product['thumbnail'] ?>">
                        </a>
                        <center style="width: 100px;">
                           <a href="javascript:void(0);" class="color-main btn btn-link text-danger" style="display: inline-block;color: red;" onclick="cartAjax({ 
                              action: 'removefromcart', 
                              id: '<?= $r_product['id'] ?>',
                              color_id: '<?= $r_product['color'] ?>',
                              size_id: '<?= $r_product['size'] ?>',
                              msg: 'Đã xóa sản phẩm khỏi giỏ hàng!', 
                              lbl: 'label-danger' });">
                              <span class="fa fa-trash-alt color-main" style="font-weight: 600;"></span>&nbsp;<?=$layout['danhsachnhaplieu']['nhap-delete']['value']?>
                           </a>
                        </center>
                     </div>
                     <div style="flex-grow: 1; position: relative; padding: 3px 5px 3px 0;">
                        <div style="min-height: 50px; padding-bottom: 5px;">
                           <div class="info-product">
                              <h3 class="color-main title" style="font-weight: bold;  max-width: calc(100% - 100px);">
                                 <?= $r_product['title'] ?>
                              </h3>

                              <?php $size = getItems(array("table" => "option", "id" => $r_product['size']))['title']; ?> 
                              <?php if(!empty($size)) { ?>
                                 <p class="size"> <b>Size: </b> 
                                    <?= $size; ?> 
                                 </p>
                              <?php } ?>
                              <?php $color = getItems(array("table" => "option", "id" => $r_product['color']))['title']; ?> 
                              <?php if(!empty($color)) { ?>
                                 <p class="color"> <b>Màu: </b> 
                                    <?= $color; ?>
                                 </p>
                              <?php } ?>
                              
                           </div>
                           <div class="text-muted">
                              <?= $_SESSION['cart_type'][$r_product['id']] ?>
                           </div>
                           <del style="position: absolute; top: 3px; right: 5px; color: #777; text-decoration: line-through"><?= $r_product['price_del'] ?></del>
                           <span style="position: absolute; top: 24px; right: 5px; color: #f00; font-weight: bold;"><?= $r_product['price'] ?></span>
                        </div>
                        <div>
                           <button type="button" class="btn" onclick="
                           $(this).css('pointer-events', 'none'); $(this).css('opacity', '.5'); 
                           cartAjax({ action: 'updatefromcart', 
                           id: '<?= $r_product['id'] ?>', 
                           color_id: '<?= $r_product['color'] ?>',
                           size_id: '<?= $r_product['size'] ?>',
                           msg: 'Giỏ hàng đã được cập nhật!', lbl: 'label-warning', 
                           quantity: Number($(this).next().val())+1 });" 
                           style="float: right; border-radius: 0; height: 28px; width: 28px; padding: 0 0; text-align: center; font-weight: bold; padding: 5px 0; <?= intval($r_product['quantity'])>=10&&0 ? "pointer-events: none; opacity: .5;" : ""; ?>">+</button>

                           <input type="text" class="form-control" readonly style="float: right;width: 40px;height: 28px; padding: 0 10px; text-align: center; background: transparent; border-radius: 0;" value="<?= $r_product['quantity'] ?>" onclick="if($val=prompt('Nhập số lượng cần mua')) { if(Number($val)>0&&Number($val)%1==0) cartAjax({ action: 'updatefromcart', id: '<?= $r_product['id'] ?>', msg: 'Giỏ hàng đã được cập nhật!', lbl: 'label-warning', quantity: $val }); else alert('Vui lòng nhập đúng định dạng số nguyên dương!') };">

                           <button type="button" class="btn" onclick="$(this).css('pointer-events', 'none'); $(this).css('opacity', '.5'); 
                              cartAjax({ action: 'updatefromcart', 
                              id: '<?= $r_product['id'] ?>',
                              color_id: '<?= $r_product['color'] ?>',
                              size_id: '<?= $r_product['size'] ?>',
                              msg: 'Giỏ hàng đã được cập nhật!', lbl: 'label-warning', 
                              quantity: Math.max(1, Number($(this).prev().val())-1) });" 
                              style="float: right; border-radius: 0; height: 28px; width: 28px; padding: 0 0; text-align: center; font-weight: bold; padding: 5px 0; <?= intval($r_product['quantity'])<=1 ? "pointer-events: none; opacity: .5;" : ""; ?>">&minus;</button>
                        </div>
                     </div>
                  </div>
                  <?php endforeach ?>
                  <div class="info-pay" style="margin-top: 60px; padding-top: 20px; border-top: 1px solid #ccc;">
                     <div style="display: flex;">
                        <div style="flex-grow: 1;"><?=$layout['danhsachnhaplieu']['nhap-tongtien']['value']?>:</div>
                        <div style="letter-spacing: 1px;"><?= $cart['total_price_del'] ?></div>
                     </div>
                     <div style="display: flex;">
                        <div style="flex-grow: 1;"><?=$layout['danhsachnhaplieu']['nhap-giam']['value']?>:</div>
                        <div style="letter-spacing: 1px;">-<?= format(floatval(preg_replace('/\D/i', "", $cart['total_price_del'])) - floatval(preg_replace('/\D/i', "", $cart['total_price']))) ?>đ</div>
                     </div>
                     <div style="display: flex; font-size: 16px; font-weight: bold;">
                        <div style="flex-grow: 1;"><?=$layout['danhsachnhaplieu']['nhap-thanhtoan']['value']?>:</div>
                        <div style="color: #f00; letter-spacing: 1px;"><?= $cart['total_price'] ?></div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- <div style="margin-top: 30px;">
               <span style="float: left; margin-right: 30px;">
               <input id="male" type="radio" name="gender" value="Nam" checked style="float: left; margin-top: 0; height: 20px; margin-right: 5px; cursor: pointer;">
               <label for="male" style="cursor: pointer;"><?=$layout['danhsachnhaplieu']['nhap-anh']['value']?></label>
               </span>
               <span style="float: left;">
               <input id="famale" type="radio" name="gender" value="Nữ" style="float: left; margin-top: 0; height: 20px; margin-right: 5px; cursor: pointer;">
               <label for="famale" style="cursor: pointer;"><?=$layout['danhsachnhaplieu']['nhap-chi']['value']?></label>
               </span>
               <div class="clearfix"></div>
            </div>
            <div style="margin-top: 10px; display: flex;">
               <input type="text" name="name" class="form-control" placeholder="<?=$layout['danhsachnhaplieu']['nhap-hoten']['value']?>" style="flex-grow: 1; margin-right: 5px;" required>
               <input type="text" name="tel" class="form-control" placeholder="<?=$layout['danhsachnhaplieu']['nhap-sodienthoai']['value']?>" style="flex-grow: 1; margin-left: 5px;" required>
            </div>
            <input type="text" name="email" class="form-control" placeholder="<?=$layout['danhsachnhaplieu']['nhap-email']['value']?>" style="margin-top: 10px;">
            <div style="margin-top: 20px; display: flex; font-size: 16px;">
               <b><?=$layout['danhsachnhaplieu']['nhap-dephucvunhanhon']['value']?>,</b>
            </div> -->
            <!-- <div style="margin-top: 5px; display: flex;">
                <span style="float: left; margin-right: 30px;">
                <input id="delivery-1" data-target=".delivery-1" data-up=".delivery-2" type="radio" name="delivery" value="1" checked style="float: left; margin-top: 0; height: 20px; margin-right: 5px; cursor: pointer;">
                <label for="delivery-1" style="cursor: pointer;"><?=$layout['danhsachnhaplieu']['nhap-diachigiaohang']['value']?></label>
                </span>
                <span style="float: left;">
                <input id="delivery-2" data-target=".delivery-2" data-up=".delivery-1" type="radio" name="delivery" value="2" style="float: left; margin-top: 0; height: 20px; margin-right: 5px; cursor: pointer;">
                <label for="delivery-2" style="cursor: pointer;"><?=$layout['danhsachnhaplieu']['nhap-nhanhangtaishop']['value']?></label>
                </span>
                <div class="clearfix"></div>
            </div> -->
            <div style="margin-top: 10px; display: flex;">
                <!-- <div class="delivery-1" style="background: #F0F0F0;-height: 500px; width: 100%;padding: 20px;position: relative;">
                    <div style="display: flex;">
                        <select class="sel-province form-control" name="pid" id="province" style="margin-right: 5px; flex-grow: 1; width: auto;">
                            <option value="">-- Chọn Tỉnh - Thành phố --</option>
                            <?php $province = getItems(array("table" => "province"));?>
                            <?php foreach ($province as $p): ?>
                            <option value="<?= $p['id'] ?>"><?= $p['name'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <?php $district = getItems(array("table" => "district", "condition" => "where pid like '{$_SESSION['cart_pid']}'"));?>
                        <div class="sel-district-container" style="margin-left: 5px; flex-grow: 1;">
                            <select class="sel-district form-control" name="did" id="district">
                            <option value="">-- Chọn Quận - Huyện --</option>
                            <?php foreach ($district as $d): ?>
                            <option value="<?= $d['id'] ?>"><?= $d['name'] ?></option>
                            <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <input class="form-control" type="text" name="address" placeholder="<?=$layout['danhsachnhaplieu']['nhap-sonhatenxa']['value']?>" style="margin-top: 10px;">
                    <div style="margin-top: 15px;">
                        <input id="staff" type="checkbox" name="staff" value="Yêu cầu nhân viên hỗ trợ kỹ thuật đi giao hàng" style="float: left; margin-right: 5px; margin-top: 0; height: 20px; cursor: pointer;">
                        <label for="staff" style="cursor: pointer; margin-bottom: 0;">Yêu cầu nhân viên hỗ trợ kỹ thuật đi giao hàng</label>
                    </div>
                </div> -->
                    <!-- <script>
                        $(document).ready(function () {
                        
                            $('input[name="delivery"]').change(function () {
                        
                                if(this.checked) {
                        
                                    $($(this).data("target")).fadeIn(500);
                        
                                    $($(this).data("up")).fadeOut(0);
                        
                                }
                        
                            });
                        
                            $(".sel-province").change(function () {
                        
                                $.post("<?= getAjaxURL() ?>ajax_getdistrict.php", { pid: this.value }, function (res) {
                        
                                $(".sel-district-container").load(" .sel-district-container .sel-district");
                        
                                });
                        
                            });
                        
                            $(".sel-province").trigger("change");
                        
                        });
                        
                    </script> -->
            </div>
            <!-- <div style="margin-top: 10px; display: flex;">
               <textarea class="form-control" name="content" rows="3" placeholder="<?=$layout['danhsachnhaplieu']['nhap-yeucaukhac']['value']?>" style="min-height: 74px; margin-top: 10px;" ></textarea>
            </div> -->
            <div style="margin-top: 20px; display: flex; justify-content: center;">
               <!-- <button type="submit" name="orderbtn" class="btn btn-success btn-submit-cart"
                  style="border: none; padding: 10px 20px;">
                  <b>Thanh Toán</b>
                  <p>( Lưu ý: Kiểm tra hàng trước khi thanh toán )</p>
               </button> -->

                <a class="btn btn-success btn-submit-cart"
                  style="background: #fd6e1d;
                background: -webkit-gradient(linear,0% 0%,0% 100%,from(#fd6e1d),to(#f59000));
                background: -webkit-linear-gradient(top,#f59000,#fd6e1d);border: none; padding: 10px 20px;" href="<?=getURL($classify['pay'][0]['uri'])?>">
                  <b style="color: #fff;">Thanh Toán</b>
                </a >
            </div>
         </form>
         <?php else: ?>
         <div class="alert alert-warning" style="padding: 50px; margin: 0 auto; font-size: 23px;">Giỏ hàng của bạn chưa có sản phẩm nào<br><br><a href="./" class="small">Quay về trang chủ</a>
         </div>
         <?php endif ?>
      </div>
   </div>
</div>
<style>
   body.cart #body {
   background: #fff;
   }
   .table-cart th,
   .table-cart td {
   vertical-align: middle !important;
   }
   .table-cart img {
   margin: auto;
   }
   .btn >p 
   {
   margin: 0;
   }
   .delivery-1:before
   {
   content: '';
   border-right: 12px solid transparent;
   border-left: 12px solid transparent;
   border-bottom: 14px solid #F0F0F0;
   position: absolute;
   bottom: 100%;
   left: 61px;
   }
   .delivery-2:before
   {
   content: '';
   border-right: 12px solid transparent;
   border-left: 12px solid transparent;
   border-bottom: 14px solid #F0F0F0;
   position: absolute;
   bottom: 100%;
   left: 216px;
   }
   .sel-province,.sel-district
   {
   height: 38px;
   -width: calc(100% - 100px);
   flex-grow: 1;
   }

   .cart-table-container .info-product{
      padding: 10px 20px;
   }

   .cart-table-container h3{
      padding: 0;
      margin-top: 0;
      font-size: 16px;
   }

   .cart-table-container h3 a{
      color: #131e39;
      text-decoration: none;
   }

   .cart-table-container .info-product p{
      margin: 0;
      font-size: 12px;
   }

   .cart-table-container .info-product p b{
      font-size: 14px;
      margin-right: 10px;
   }
</style>