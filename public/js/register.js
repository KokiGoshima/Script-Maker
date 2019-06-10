$(function(){
	$('.animation-link').on('click',function(){
		$(".animation").fadeOut(500);
	});

});
$(function(){
	$('.wrapper').on('click', function(){
		$(".animation").show();
	});
});