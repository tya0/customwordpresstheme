$(function(){

	console.log("It's working");
	$(".hamburger").on("click", function(e){
		e.preventDefault();
		console.log("click");
		$("nav").slideToggle();
	})
});