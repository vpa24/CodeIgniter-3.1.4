

<div class="agileits_header">
  <div class="container">
    <div class="w3l_offers">
      <p>SALE UP TO 70% OFF. USE CODE "SALE70%" SHOP NOW</a></p>
    </div>
    <div class="agile-login">
      <ul>
        <?php

                  if(!$this->session->has_userdata('ten_kh'))
        {
        ?>
                  <li><a href="<?php echo base_url('tai_khoan/dang_ki')?>">Đăng Kí</a></li>
        <li><a href="<?php echo base_url('tai_khoan/login')?>">Đăng Nhập</a></li>
        <li><a href="<?php echo base_url('lien_he/hien_thi')?>">Liên Hệ</a></li>
        <?php
        }
        else
        {
        ?>
                <li class="don_hang"><a href="<?php echo base_url('cart/thong_tin_don_hang')?>">Đơn hàng của bạn </a>	</li>
                  <li><a href="<?php echo base_url('tai_khoan/logout')?>">Chào bạn <?php echo $this->session->userdata("ten_kh") ?> - Thoát </a>	</li>


      </ul>
                  <?php
        }
        ?>
    </div>
  <div class="product_list_header">


      <div class="sl">
        <?php if($this->session->has_userdata('tong'))
                echo $this->session->userdata('tong');
              else
                echo '0';
        ?>
      </div>
        <button class="w3view-cart" type="submit" name="submit" value=""><a href="<?php echo base_url('cart/giohang')?>"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a></button>


    </div>
    <div class="clearfix"> </div>
    </div>
    </div>

<div class="logo_products">
  <div class="container">
  <div class="w3ls_logo_products_left1">
      <ul class="phone_email">
        <li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li>

      </ul>
    </div>
    <div class="w3ls_logo_products_left">
      <h1><a href=".">super Market</a></h1>
    </div>
  <div class="w3l_search">
<form method="get" action="<?php echo base_url('san_pham/tim_kiem_san_pham')?>">
   <div class="input-group add-on">
     <input class="form-control" placeholder="Tìm kiếm sản phẩm...." name="srch-term" value="<?php echo isset($key)? $key:''?>" id="text-search" type="text" autocomplete="off" role="textbox" aria-haspopup="true">
     <button type="submit" class="btn btn-default search" aria-label="Left Align" name="btnTim" >
      <i class="fa fa-search" aria-hidden="true"> </i>
    </button>
   </div>
 </form>
  </div>
    <div class="clearfix"> </div>
  </div>
</div>
