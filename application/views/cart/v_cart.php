
	<?php if($this->session->userdata('tong')>0)
	{
		?>
		<form method="post" action="<?php echo base_url('cart/update')?>">
		<div class="checkout">
		<div class="container">
			<h2>Giỏ hàng của bạn </h2>
			<div class="checkout-right">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th width="350px">Hình</th>
							<th width="400px">Tên sản phẩm</th>
							<th width="5px">Số Lượng</th>

							<th>Đơn Giá</th>
							<th>Xoá</th>
						</tr>
					</thead>
          <?php
          $tong=0;

          	foreach ($carts as $sp)
          	{
							$tong+=$sp['subtotal'];
          	?>
					<tr class="rem">
						<td class="invert-image"><a href="<?php echo base_url()?>san_pham/chi_tiet/<?php echo $sp['id']?>"><img src="public/images/san_pham/<?php echo $sp['image_link']?>" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							<a href="<?php echo base_url()?>san_pham/chi_tiet/<?php echo $sp['id']?>"><?php echo $sp['name']?></a>
						</td>
						<td class="invert">
							 <input type="number"  min="1" max="10" name="qty_<?php echo $sp['id'] ?>" value="<?php echo $sp['qty'] ?>" /></td>
						<td class="invert"><?php echo number_format($sp['subtotal'])?> đ</td>
						<td class="invert-close">
								<a href="<?php echo base_url()?>cart/del/<?php echo $sp['id']?>">x</a>

								<?php } ?>
							</div>
						</td>
					</tr>

				</table>
			</div>
			<?php
			 $tongtt = array('tongtt'=> $tong);
			$this->session->set_userdata($tongtt);
			?>
			<div class="checkout-left">
				<div class="checkout-left-basket">
					<h4>Thành tiền</h4>
					<ul>
						<li class="tong_tien">Tổng cộng:  <span class="tong_tien"><?php echo number_format($tong)?> đ</span></li>
					</ul>
				</div>
				<div class="checkout-right-basket">
					<?php   if($this->session->has_userdata('ten_kh')) {?>
						<a href="<?php echo base_url('cart/khach_hang')?>">Tiến hành đặt hàng</a>
					<?php
					}
					else{
						?>
						<a href="<?php echo base_url('tai_khoan/login')?>">Tiến hành đặt hàng</a>
						<?php
					}?>


							 <input type="submit" value="Cập nhập giỏ hàng" name="btnCapnhat" />
				</div>




				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</form>
<?php
	}
	else {
		?>
		<div class="main" style="min-height:400px">
	    <div class="container">
				<div class="empty_cart">
				<img src="public/layout/images/emptycart.png"/ >
			</div>
			<div >
				<h3 class="thong_bao">Không có sản phẩm nào trong giỏ hàng của bạn!!!!</h3>
			</div>


	        <div class="cart">
	          <a href=".">Tiếp tục mua sắm</a>
	    </div>
	  </div>
	</div>
	<?php
	}
	?>
