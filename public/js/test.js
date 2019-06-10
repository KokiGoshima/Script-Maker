$(function(){

	$('#logout').on('click',function(){
		if(confirm('ログアウトしますか？')){
			event.preventDefault(); document.getElementById('logout-form').submit();
		}else{
			return false;
		}
	})

});