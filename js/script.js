$(document).ready(function(){

	function showPhotos(){
		$(this).parent(".pic").find(".picInfo").slideToggle('fast');		
	}

	$(".pic").on("mouseenter", ".picImg", showPhotos);
    $(".pic").on("mouseleave", ".picImg", showPhotos);



	/*$("#topMenu > li").on("mouseenter", function(){
		console.log($(this))
		$(this).addClass('moveTop');

	});*/

});