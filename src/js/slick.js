jQuery( document ).ready( function( $ ) {
console.log('ff');

$('.autoplay').slick({
	slidesToShow: 4,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 2000,
  });

});
