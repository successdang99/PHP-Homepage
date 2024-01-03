var parent = document.getElementById("all");
var children = document.getElementById("delete");

setTimeout(() => {
    parent.removeChild(children);
}, 3000);

var siteCarousel = function () {
	if ( $('.nonloop-block-15').length > 0 ) {
		$('.nonloop-block-15').owlCarousel({
		    center: false,
		    items: 1,
		    loop: true,
			stagePadding: 0,
			autoplay: true,
		    margin: 20,
		    nav: true,
		    dots: true,
			navText: ['<i class="fas fa-arrow-circle-left"></i>', '<i class="fas fa-arrow-alt-circle-right"></i>'],
		    responsive:{
	        	0:{
	        		margin: 20,
	        		stagePadding: 0,
	          		items: 1,
	          		nav: false,
		    		dots: true
	        	},
	        	200:{
	        		margin: 20,
	        		stagePadding: 0,
	          		items: 2,
	          		nav: true,
		    		dots: true
	        	},
	        	400:{
	        		margin: 20,
	        		stagePadding: 0,
	          		items: 3,
	          		nav: true,
		    		dots: true
	        	}
		    }
		});
	}
};
siteCarousel();