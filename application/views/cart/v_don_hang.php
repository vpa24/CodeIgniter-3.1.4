<?php
 	if($tong==0)
	{
		?>
		<div class="main" style="min-height:400px">
	    <div class="container">
	        <h3 align="center" class="thanh_cong">Rất tiêc bạn chưa có đơn hàng nào!!!</h3>
	        <div class="checkout-right-basket">
	          <a href=".">Quay về trang chủ</a>
	    </div>
	  </div>
	</div>
	<?php
	}
	else{
	?>
	<form method="post">
	<div class="checkout">
			<div class="container">
				<h2>Đơn hàng của bạn </h2>
				<div class="checkout-right">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th width="350px">Mã Đơn Hàng</th>
								<th width="400px">Ngày đặt</th>
								<th>Tổng tiển</th>
								<th>Tình trạng</th>
							</tr>
						</thead>
	          <?php
	          $tongtt=0;

	          	foreach ($don_hangs as $dh)
	          	{

	          	?>
						<tr class="rem">
							<td class="invert"><a href='<?php echo base_url("cart/chi_tiet_don_hang/$dh->ma_don_hang")?>'><?php echo $dh->ma_don_hang?></a></td>
							<td class="invert">
								<?php $ngay_dat=$dh->ngay_dat;echo $date=date("d-m-Y", strtotime($ngay_dat));?></a>
							</td>

							<td class="invert"><?php echo number_format($dh->tong_tien)?> đ</td>
							<td class="invert"><?php if($dh->tinh_trang==1)
	                                            echo "Chưa thanh toán";
	                                      elseif ($dh->tinh_trang==2)
	                                        echo "Đã thanh toán";
	                                      else
	                                      echo"Hủy đơn hàng";
	                              ?>
									</div>
									<?php } ?>
								</div>
							</td>
						</tr>

					</table>
				</div>

			</div>
		</div>
	</form>
	<?php
	}
	 ?>
