$(function(){
	$('.animation-link').on('click',function(){
		if(document.register.name.value == "" || document.register.email.value == "" || document.register.password.value == "" || document.register.password_confirmation.value == ""){
		return false;
	}else{
		$(".animation").fadeOut(500);
	}
	});
});

$('.wrapper').on('click',function(){
		$(".animation").show();
	});