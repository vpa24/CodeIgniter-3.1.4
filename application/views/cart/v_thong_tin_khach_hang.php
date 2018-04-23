
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
				<li class="active">Địa chỉ giao hàng</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h2>Địa chỉ giao hàng</h2>
			<div class="login-form-grids">

				<form method="post">
					<div>Họ tên:<input type="text" name="ten_kh"  value="<?php echo $kh->ten_kh?>"></div>
          <div>Địa chỉ:<input type="text" name="dia_chi" value="<?php echo $kh->dia_chi?>"></div>
          <div>Điện thoại:<input type="text" name="dien_thoai" value="<?php echo $kh->dien_thoai?>"></div>
          <div>Thanh toán bằng:<input type="radio" name="thanh_toan" value="Tiền Mặt">Tiền Mặt
						<input type="radio" name="thanh_toan" value="Thẻ">Thẻ</div>
          <input type="submit" value="Giao đến địa chỉ này"  name="btnDiaChi" onclick="in_don_hang()">
        </form>
			
		</div>
	</div>
