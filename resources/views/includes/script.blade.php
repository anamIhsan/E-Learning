<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
	$(document).ready(function() {
	  var owl = $('.owl-carousel');
	  owl.owlCarousel({
		margin: 10,
		nav: true,
		loop: true,
		autoplay: true,
		items: 4,
		dots: true,
	  })
	})
  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script>
	new Splide( '#splide1', {
		pagination : false,
		autoplay : true,
		type : 'loop'
	}).mount();

	new Splide( '#splide2', {
		pagination : true,
		arrows : false,
		autoplay : true,
		type : 'loop'
	}).mount();
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	AOS.init();
</script>
<script>
	$(document).ready(function() {
		var a = 0;
		$(window).scroll(function() {
			var cTop = $('#count').offset().top - window.innerHeight,
				scroll = $(window).scrollTop();
			if (a == 0 && scroll > cTop ) {
				$('.counter-value').each(function() {
					var $this 	= $(this),
						countTo = $this.attr('data-count');
					$({
						countNum: $this.text()
					}).animate({
						countNum: countTo
					},
					{
						duration: 5*1000,
						easing: 'swing',
						step: function() {
							if($this.hasClass('with-plus')) {
								$this.text(Math.floor(this.countNum) + '+');
							} else {
								$this.text(Math.floor(this.countNum));
							}
						},
						complete: function() {
							if($this.hasClass('with-plus')) {
								$this.text(this.countNum + '+');
							} else {
								$this.text(this.countNum);
							}
							// alert('finished');
						}
					});
				});
				a = 1;
			}
		})
	})
</script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> --}}

