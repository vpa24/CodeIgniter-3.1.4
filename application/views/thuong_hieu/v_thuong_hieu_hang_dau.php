<div class="brands">
  <div class="container">
  <h3>Thương Hiệu Hàng Đầu</h3>
    <div class="brands-agile">
      <?php foreach($thuong_hieus as $th){?>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="http://localhost/CodeIgniter-3.1.4/index.php?c=san_pham&m=thuong_hieu&ma_thuong_hieu=<?php echo $th->ma_thuong_hieu?>">
            <?php echo $th->ten_thuong_hieu?></a></p>
        </div>
      </div>
<?php } ?>
      <div class="clearfix"></div>
    </div>


  </div>
</div>
