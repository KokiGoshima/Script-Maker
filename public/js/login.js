$(function(){
	$('.animation-link').on('click',function(){
		if(document.login.email.value == "" || document.login.password.value == ""){
		return false;
	}else{
		$(".animation").fadeOut(500);
	}
	});
});

$('.wrapper').on('click',function(){
		$(".animation").show();
	});