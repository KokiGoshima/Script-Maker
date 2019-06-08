$(function(){

	$('.script-tytle .button-box button').on('click', function(e){
  // 「OK」ボタン押下時
  e.preventDefault();
  if (confirm('現在のスクリプト内容を保存してもよろしいですか？')) {
  	document.getElementById("form_" + this.dataset.id).submit();
   }
  })

// onclick="return confirm('現在のスクリプト内容を保存してもよろしいですか？')"
})