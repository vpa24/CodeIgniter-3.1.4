
<div class="checkout">
		<div class="container">
			<h2>Chi tiết đơn hàng: <?php echo $ma_don_hang?></h2>
			<div class="checkout-right">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th width="350px">Hình</th>
							<th width="400px">Tên sản phẩm</th>
							<th>Số Lượng</th>

							<th>Đơn Giá</th>

						</tr>
					</thead>
          <?php
            foreach ($chi_tiet as $ct)
          	{
          	?>
					<tr class="rem">
						<td class="invert-image"><a href='<?php echo base_url("san_pham/chi_tiet/$ct->ma_sp")?>'><img src="public/images/san_pham/<?php echo $ct->hinh?>" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							<a href='<?php echo base_url("san_pham/chi_tiet/$ct->ma_sp")?>'><?php echo $ct->ten_sp?></a>
						</td>
						<td class="invert">
							 <?php echo $ct->so_luong?>

						<td class="invert"><?php echo number_format($ct->don_gia)?> đ</td>

					</tr>
          <?php }?>

				</table>
			</div>


				<div class="checkout-right-basket">
					    <a href="<?php echo base_url('cart/thong_tin_don_hang')?>"><< Quay lại đơn hàng của bạn</a>

				</div>




				<div class="clearfix"> </div>
			</div>
		</div>
