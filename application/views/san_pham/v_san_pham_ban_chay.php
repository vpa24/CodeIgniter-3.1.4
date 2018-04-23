<div class="top-brands">
  <div class="container">
  <h2>Sản Phẩm Bán Chạy</h2>
    <div class="grid_3 grid_5">
      <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Trong Tháng</a></li>
          <li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Giảm Giá</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
            <div class="agile_top_brands_grids">
              <div class="agile_top_brands_grids">
                <?php foreach ($thangs as $m){?>
                <div class="col-md-4 top_brand_left">
                  <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                      <div class="agile_top_brand_left_grid1">
                        <figure>
                          <div class="snipcart-item block" >
                            <div class="snipcart-thumb">
                              <a href="http://localhost/CodeIgniter-3.1.4/index.php?c=san_pham&m=chi_tiet&ma_sp=<?php echo $m->ma_sp?>"><img title="<?php echo $m->ten_sp;?>" alt=" " src="public/images/san_pham/<?php echo $m->hinh?>" width="150px" height="150px" class="hinh"/></a>
                              <p class="limit_line"><a href="http://localhost/CodeIgniter-3.1.4/index.php?c=san_pham&m=chi_tiet&ma_sp=<?php echo $m->ma_sp?>"><?php echo $m->ten_sp;?></a></p>
                              <div class="stars">
                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                              </div>
                              <h4><?php echo number_format($m->don_gia_khuyen_mai)?>đ<span><?php echo number_format($m->don_gia)?>đ</span></h4>
                            </div>

                          </div>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">

							<div class="agile_top_brands_grids">
                  <?php foreach ($giam as $g) {?>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid1">

												<figure>
                          <div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="http://localhost/CodeIgniter-3.1.4/index.php?c=san_pham&m=chi_tiet&ma_sp=<?php echo $g->ma_sp?>"><img title="<?php echo $g->ten_sp?>" alt=" " src="public/images/san_pham/<?php echo $g->hinh?>"  class="hinh"/></a>
                              <p class="limit_line"><a href="http://localhost/CodeIgniter-3.1.4/index.php?c=san_pham&m=chi_tiet&ma_sp=<?php echo $g->ma_sp?>"><?php echo $g->ten_sp?></a></p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4><?php echo number_format($g->don_gia_khuyen_mai)?>đ <span><?php echo number_format($g->don_gia)?>đ</span></h4>
														</div>

													</div>
												</figure>
                      </div>
										</div>
									</div>
								</div>
                <?php }?>
					         </div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
          </div>
        </div>
      </div>
