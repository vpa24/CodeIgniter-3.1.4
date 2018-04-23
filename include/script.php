<script src="public/layout/js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
<script src="public/layout/js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="public/layout/js/skdslider.min.js"></script>
<link href="public/layout/css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});

			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});

		});
</script>
<script>
$("#zoom_08").elevateZoom({
			zoomWindowFadeIn: 500,
			zoomWindowFadeOut: 500,
			lensFadeIn: 500,
			lensFadeOut: 500
});
</script>


<script type="text/javascript">
$(function(){
  $("#text-search").autocomplete({
    source: "<?php echo base_url('san_pham/autocomplete')?>",
		focus: function( event, ui ) {
	$( "#text-search" ).val( ui.item.label);
	return false;
},
		select: function( event, ui ) {
						$("#text-search").val(ui.item.label);
						return false;

            //window.location.href = "<?php //echo base_url('san_pham/chi_tiet/')?>"+ui.item.value;
        }
  });
});
</script>
<script type="text/javascript">
$(document).on('ready', function() {
		$(".regular").slick({
			dots: true,
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3
		});
		$(".center").slick({
			dots: true,
			infinite: true,
			centerMode: true,
			slidesToShow: 3,
			slidesToScroll: 3
		});
		$(".variable").slick({
			dots: true,
			infinite: true,
			variableWidth: true
		});
	});

</script>
<script type="text/javascript">
$('.responsive').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
	autoplay: true,
  autoplaySpeed: 5000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

</script>
