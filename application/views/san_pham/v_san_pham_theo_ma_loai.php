
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang Chủ</a></li>
				<li class="active"><?php echo $san_phams[0]->ten_loai?></li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!--- household --->
	<div class="products">
		<div class="container">

			<div class="col-md-12 products-right">
					<div class="products-right-grids">
						<div class="sorting">
							<select id="country" class="frm-field required sect" name="sap_xep" onchange="sap_xep(<?php echo $san_phams[0]->ma_loai?>,this.value)">
								<option value="chon0" ><i class="fa fa-arrow-right" aria-hidden="true"></i>......</option>

								<option value="chon1"
                                 <?php if(isset($chon))
								{

									if($chon=="order by don_gia_khuyen_mai asc")
										echo 'selected="selected"';
								}
									?>><i class="fa fa-arrow-right" aria-hidden="true"></i>Giá: Từ thấp đến cao</option>
								<option value="chon2"
                                 <?php if(isset($chon))
								{
									if($chon=="order by don_gia_khuyen_mai desc")
										echo 'selected="selected"';
								}
									?>>
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>Giá: Từ cao đến thấp</option>
								<option value="chon3"
                                 <?php if(isset($chon))
								{
									if($chon=="order by don_gia - don_gia_khuyen_mai desc")
										echo 'selected="selected"';
								}
									?>>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>Giảm giá nhiều nhất</option>
								<option value="chon4"
                                 <?php if(isset($chon))
								{
									if($chon=="order by ma_sp desc")
										echo 'selected="selected"';
								}
									?>>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>Sản phẩm mới nhất</option>
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
				<div class="agile_top_brands_grids">
					<?php foreach ($san_phams as $sp){ ?>
					<div class="col-md-3 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">

								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="<?php echo base_url()?>san_pham/chi_tiet/<?php echo $sp->ma_sp?>"><img title="<?php echo $sp->ten_sp?>" alt=" " src="public/images/san_pham/<?php echo $sp->hinh?>" class="hinh"></a>
												<p class="limit_line"><a href="<?php echo base_url()?>san_pham/chi_tiet/<?php echo $sp->ma_sp?>" title="<?php echo $sp->ten_sp?>"><?php echo $sp->ten_sp?></a></p>
												<h4><?php echo number_format($sp->don_gia_khuyen_mai)?> đ <span><?php echo number_format($sp->don_gia)?> đ</span></h4>
											</div>

										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>

						<div class="clearfix"> </div>

				<div id="phantrang" class="div_phan_trang"><?php echo $phan_trang?></div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>


<!--- household --->
