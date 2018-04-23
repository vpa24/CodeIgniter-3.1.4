<!DOCTYPE html>
<html>
<?php $this->load->view("../../include/head",isset($data)?$data:NULL); ?>
<body>
<!-- header -->
	<?php $this->load->view("../../include/header",isset($data)?$data:NULL);?>
<!-- //header -->
<!-- navigation -->
	<?php $this->load->view("../../include/nav",isset($data)?$data:NULL);?>

  <?php $this->load->view("../../include/content",isset($data)?$data:null); ?>
  <!-- //footer -->
  <?php $this->load->view("../../include/footer",isset($data)?$data:Null)?>
  <!-- //footer -->
  <!-- Bootstrap Core JavaScript -->
  <?php $this->load->view("../../include/script",isset($data)?$data:Null) ?>
  <!-- //main slider-banner -->
  </body>
  </html>
