<head>
<base href="http://localhost/CodeIgniter-3.1.4/">
<title>asdas</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="public/layout/images/unnamed.png">

<link href="public/layout/css/jquery.ui.css" rel="stylesheet" type="text/css" media="all"/>
<!-- js -->
<script src="public/layout/js/jquery-2.2.3.js"></script>

<script type="text/javascript" src="public/layout/js/jquery-ui.js"></script>

<script>
$(function() {
    $( "#srch-term" ).autocomplete({
        source:"<?php echo site_url('tim_sp/autocomplete/?'); ?>";
    });
});
</script>
</head>
 <input class="form-control" placeholder="Tìm kiếm sản phẩm...." name="srch-term" id="srch-term" type="text">
