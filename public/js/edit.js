$(function(){

	$('.script-title .button-box button').on('click', function(e){
  // 「OK」ボタン押下時
  e.preventDefault();
  if (confirm('現在のスクリプト内容を保存してもよろしいですか？')) {
  	document.getElementById("form_" + this.dataset.id).submit();
   }
  });

  $("body").on("click", function(){
  	$("#save").hide();
  });

  // $("body").click(function(){
  // 	$("#save").fadeOut();
  // });

// onclick="return confirm('現在のスクリプト内容を保存してもよろしいですか？')"
})

