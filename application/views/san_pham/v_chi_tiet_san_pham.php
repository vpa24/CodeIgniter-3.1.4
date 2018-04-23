
<div class="products san_pham">

	<div class="container">
			<div class="agileinfo_single">
				<div class="col-md-4 agileinfo_single_left" >
					<img id="zoom_08" src='public/images/san_pham/<?php echo $san_pham->hinh?>'
					data-zoom-image="public/images/san_pham/<?php echo $san_pham->hinh?>" alt=" " class="img-responsive"/>
				</div>
				<div class="col-md-8 agileinfo_single_right">
				<h3 class="ten_sp"><?php echo $san_pham->ten_sp?></h3>
        <h4>Thương Hiệu: <a href="<?php echo base_url()?>san_pham/thuong_hieu/<?php echo $san_pham->ma_thuong_hieu?>"><?php echo $san_pham->ten_thuong_hieu?></a></h4>
				<h4 class="danh_gia">Đánh Giá:
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>

				</h4>

						<div class="nancy m-sing">Tại Super Market:</div>
	                <div class="don_gia_khuyen_mai"><?php echo number_format($san_pham->don_gia_khuyen_mai)?> đ</div>

                <div class="don_gia">Giá thị trường: <span class="gach"> <?php echo number_format($san_pham->don_gia)?></span><span class="chu_thuong"> đ</span></div>
              <div class="don_gia">Tiết kiệm: <span class="chu_thuong"><?php echo number_format($san_pham->don_gia- $san_pham->don_gia_khuyen_mai) ?> đ</span></h4>
								<div class="so_luong">Số lượng:<input type="number" min="1" max="10" value="1" class="number" name="sl_<?php echo $san_pham->ma_sp ?>" id="sl_<?php echo $san_pham->ma_sp ?>"/> </div>
						<div class="snipcart-details agileinfo_single_right_details ">
							<input type="submit" name="submit" id="chon_mua" value="Thêm vào giỏ hàng" class="button gio_hang" onclick="kiemtra(<?php echo $san_pham->ma_sp?>)">
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
  <div  class="mo_ta">
    <h2>Mô tả sản phẩm</h2>
		<h4 class="ten_sp1"><?php echo $san_pham->ten_sp?></h4>
    <div class="noi_dung_chi_tiet">
			<?php echo $san_pham->noi_dung_chi_tiet ?>
		</div>

  </div>

<!-- new -->
	<div class="newproducts-w3agile">
		<div class="container">
			<h3>Sản Phẩm Cùng Loại</h3>
				<div class="agile_top_brands_grids responsive">
					<?php foreach($san_phams as $sps){?>
					<div class="col-md-3 top_brand_left-1 item">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="<?php echo base_url()?>san_pham/chi_tiet/<?php echo $sps->ma_sp?>"><img title="<?php echo $sps->ten_sp?>" alt=" " src="public/images/san_pham/<?php echo $sps->hinh?>" class="hinh"></a>
												<p class="limit_line"><a href="<?php echo base_url()?>san_pham/chi_tiet/<?php echo $sps->ma_sp?>"><?php echo $sps->ten_sp?></a></p>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
													<h4><?php echo number_format($sps->don_gia_khuyen_mai)?> đ<span><?php echo number_format($sps->don_gia)?> đ</span></h4>
											</div>

										 </div>
									</figure>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
						<div class="clearfix"> </div>

					</div>
				</div>
		</div>
	</div>

<div id="myModal" class="modal">

	<div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" id="dong" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Lỗi</h4>
		</div>
		<div class="modal-body">
			<p id="loi"> Some text in the modal.</p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" id="dong2" data-dismiss="modal">Close</button>
		</div>
	</div>

</div>
</div>
