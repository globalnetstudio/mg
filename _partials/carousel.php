<div id="carousel">

	<ul class="bxslider">

		<li>
			<img src="/images/carousel/slider-1.jpg" alt="Funcionalidad" title="Funcionalidad">
		</li>

		<li>
			<img src="/images/carousel/slider-2.jpg" alt="Servicio" title="Servicio">
		</li>

		<li>
			<img src="/images/carousel/slider-3.jpg" alt="Puntualidad" title="Puntualidad">
		</li>

		<li>
			<img src="/images/carousel/slider-4.jpg" alt="Calidad" title="Calidad">
		</li>

		<li>
			<img src="/images/carousel/slider-5.jpg" alt="Confort" title="Confort">
		</li>

	</ul> <!-- /.bxslider -->

</div> <!-- /#carousel -->

<!-- Custom Scripts -->
<script>
	$(function(){
	  $('.bxslider').bxSlider({	  	
	  	auto: true,
	  	speed: 750,
	  	pause: 5000,
	  	infiniteLoop: true,
	  	autoHover: true,
	  	useCSS: false,
	  	easing: 'easeInCubic',
	  	captions: true,
	  	responsive: true,
	  	touchEnabled: true,
	  	controls: true,
	  	pager: false,
	  	autoControls: false
	  });
	});
</script>