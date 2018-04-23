
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
				<li class="active">Đăng nhập</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<h2>Đăng Nhập</h2>

			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form method="post">
					<input type="email" placeholder="Nhập email" name="email" >
					<input type="password" placeholder="Nhập mật khẩu" name="mat_khau" >
					<input type="submit" name="btnlogin" value="Đăng Nhập">
					<div class="error">
						<?php if(isset($error)) echo $error ?>
					</div>
				</form>
			</div>
			<h4>Cho người dùng mới</h4>
			<p><a href="http://localhost/CodeIgniter-3.1.4/index.php?c=tai_khoan&m=dang_ki">Đăng kí</a> (Hoặc) trở về <a href=".">Trang chủ<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
<!-- //login -->
<!-- //footer -->

<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
