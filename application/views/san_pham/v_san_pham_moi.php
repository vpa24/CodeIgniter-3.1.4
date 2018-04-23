<div class="newproducts-w3agile">
  <div class="container">
    <h3>Sản Phẩm Mới</h3>
      <div class="agile_top_brands_grids">
        <?php foreach ($san_pham_mois as $spm) {?>


        <div class="col-md-3 top_brand_left-1">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="http://localhost/CodeIgniter-3.1.4/index.php?c=san_pham&m=chi_tiet&ma_sp=<?php echo $spm->ma_sp?>"><img title="<?php echo $spm->ten_sp  ?>" alt=" " src="public/images/san_pham/<?php echo $spm->hinh?>" class="hinh"></a>
                      <p class="limit_line"><a href="http://localhost/CodeIgniter-3.1.4/index.php?c=san_pham&m=chi_tiet&ma_sp=<?php echo $spm->ma_sp?>"><?php echo $spm->ten_sp;?></a></p>
                      <div class="stars">
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                      </div>
                        <h4><?php echo number_format($spm->don_gia_khuyen_mai)?>đ <span><?php echo number_format($spm->don_gia)?>đ</span></h4>
                    </div>


                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
          <?php  } ?>

          <div class="clearfix"> </div>
      </div>
  </div>
</div>
