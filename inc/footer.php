
<footer>
	<div class="container">
		<div class="row" >
			<hr>
			<div class="col-lg-3 col-md" data-aos="fade-up">
				<a href="#" class="footer-logo">
					<img src="images/logo.svg" alt="">
				</a>
				<p>© 2020 deficliq, Inc.</p>
			</div>
			<div class="col-lg-3 col-md" data-aos="fade-up">
				<ul>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Our Team</a></li> 
					<li><a href="#">Why Us</a></li>
					<li><a href="#">Roadmap</a></li>
					<li><a href="#">Blog</a></li>
				</ul>
			</div>
			<!-- <div class="col-lg-3 col-md" data-aos="fade-up">
				<ul>
					<li><a href="#">Terms and Conditions</a></li>
					<li><a href="#">Privacy Policy</a></li> 
				</ul>
			</div> -->
			<div class="col-lg-3 col-md" data-aos="fade-up">
				<h5 style="color: #ee1c50;"><a style="color: #ee1c50;" href="Deficliqpitchdeck.pdf" target="_blank"><img src="images/home-img29.svg" alt="">Pitch Deck</a></h5>
				<h5 style="color: #ee1c50;"><a style="color: #ee1c50;" href="whitepaper.pdf" target="_blank"><img src="images/home-img28.svg" alt="">White Paper</a></h5>

			</div>
			<div class="col-lg-3 col-md">
				<ul class="social">
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>

<img src="images/footer-bg.svg" alt="" class="footer-bg">
</footer>
<style>
	.pageloader {
    position: fixed;
    z-index: 99999;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
}
</style>
<div class="pageloader">
	<img src="images/loader.png" alt="">
</div>

<!--  <a href="#0" class="cd-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>     -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.slimNav_sk78.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
	$(window).load(function() {
  $(".pageloader").fadeOut("slow");
});
</script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<script>
  AOS.init();
</script>
<script type="text/javascript">
$(document).ready(function() {	
	$('#navigation nav').slimNav_sk78();	
  
   

	var owl = $('.teams');
	owl.owlCarousel({
	autoPlay: 3000, //Set AutoPlay to 3 seconds
	items:4,	
	nav:true,
	dots:false,
	loop:true,
	autoplay:true,
	margin:15,
	 smartSpeed:1500,
	autoplayTimeout:3000,
	autoplayHoverPause:true,
	responsive:{
        0:{
           items:1,	
			nav:false,
			dots:true, 
        },  
         500:{
           items:2,	
			nav:false,
			dots:true, 
        },   
         768:{
           items:2,	
			nav:true,
			dots:false, 
        },   
         1025:{
           items:4,	
			nav:true,
			dots:false, 
        },       
    }
	});

	var owl = $('.blog-cara');
	owl.owlCarousel({
	autoPlay: 3000, //Set AutoPlay to 3 seconds
	items:1,	
	nav:false,
	dots:true, 
	loop:false,
	autoplay:true,
	margin:35,
	 smartSpeed:1500,
	autoplayTimeout:3000,
	autoplayHoverPause:true,
	responsive:{
        0:{
           items:1,	
			nav:false,
			dots:true, 
        },  
         500:{
           items:2,	
			nav:false,
			dots:true, 
        },   
         768:{
           items:3,	
			nav:false,
			dots:true, 
        },   
         900:{
           items:4,	
			nav:false,
			dots:true, 
        },       
    }
	});

	var owl = $('.Token-decp-cara');
	owl.owlCarousel({
	autoPlay: 3000, //Set AutoPlay to 3 seconds
	items:1,	
	nav:false,
	dots:true,
	autoHeight:true,
	loop:false,
	autoplay:true,
	smartSpeed:1500,
	autoplayTimeout:3000,
	autoplayHoverPause:true,
	responsive:{
        0:{
            
        },         
    }
	});

    window.onscroll = function () {
     var header = document.querySelector("header");
     if (window.pageYOffset >= 1) {
     header.classList.add("is-sticky");
     } else {
     header.classList.remove("is-sticky");
     }
     };	

     	$('.accordion').find('.accordion-toggle').click(function() {
		$(this).next().slideToggle('600');
		$(".accordion-content").not($(this).next()).slideUp('600');
	});
	$('.accordion-toggle').on('click', function() {
		$(this).toggleClass('active').siblings().removeClass('active');
	});




// 	$('a[href^="#"]').on('click', function(event) {		
//     var target = $(this.getAttribute('href'));
//     if( target.length ) {
//         event.preventDefault();
//         $('html, body').stop().animate({
//             scrollTop: target.offset().top
//         }, 1000);
//     }
// });


});
</script>

<script>
	$(document).ready(function() {
		$('a[href*=#]').bind('click', function(e) {
				e.preventDefault(); 

				var target = $(this).attr("href"); 

				
				$('html, body').stop().animate({
						scrollTop: $(target).offset().top
				}, 1000, function() {
						
				});

		});
});

$(window).scroll(function() {
		var scrollDistance = $(window).scrollTop();
		$('.page-section').each(function(i) {
				if ($(this).position().top -25 <= scrollDistance) {
						$('header ul li a.active').removeClass('active');
						$('header ul li a').eq(i).addClass('active');
				}
		});
}).scroll();
</script>


<script>

$(window).scroll(function() {
		var scrollDistance = $(window).scrollTop();
		$('#token-sec').each(function(i) {
				if ($(this).position().top <= scrollDistance) {
						$('.circular-chart path.circle2').addClass('circle');
						// $('.circular-chart path').eq(i).addClass('circle');
				}
		});
}).scroll();



</script>
  

</body>
</html>