$(function(){

	console.log("It's working");
	$(".hamburger").on("click", function(e){
		e.preventDefault();
		$("nav").slideToggle();
	})

	$('.latest-post').flickity({
	  // options
	  cellAlign: 'left',
	  contain: true,
	  imagesLoaded: true
	});
});