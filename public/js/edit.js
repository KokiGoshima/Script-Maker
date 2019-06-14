$(function(){



  $(document).ready(function(){
    $("#accordianmenu p").click(function(){
    $("#accordianmenu ul ul").slideUp();
        if(!$(this).next().is(":visible")){
            $(this).next().slideDown();
          }
    });
  });

  // アコーディオン
  $('.topic').on('click', function(){
    // 初期化
    $('.topic').removeClass('current')
    $('.topic_item').removeClass('current')
    $(this).addClass('current')
    console.log($(this))
    let num = $('.topic').index(this);
    console.log(num);
    $('.topic_item').eq(num).addClass('current')
  });



  // テキストエリア 

  // function addTF(str) {
  $(".phrase-button").on("click", function(str) {
  //テキストエリア取得
  let textarea = document.scriptForm.textbox;
  // テキストエリアの文字列を取得
  let sentence = textarea.value;
  // 文字列の長さ
  let len = sentence.length;
  //カーソル位置を取得
  let pos = textarea.selectionStart;
  // カーソルの前の文字列を取得
  let before = sentence.substr(0, pos);
  //カーソルのあとの文字列を取得
  let after = sentence.substr(pos, len);
  // (str)文字を追加
  return document.scriptForm.textbox.value = before + str + after;
  });



    // 完全リセット
  $('.jquery_reset_perfect').on('click', function(e){
    // 「OK」ボタン押下時
    e.preventDefault();
    if (confirm('現在のスクリプト内容を全て削除してもよろしいですか？')) {
      $('.scripttext').val('');
     } 
  });



  $(function() {
    $("input:not(.allow_submit)").on("keypress", function(){
      return event.which !== 13;
    });
  });



	$('.script-title .button-box .save').on('click', function(e){

  // 「OK」ボタン押下時
  e.preventDefault();
  if (confirm('現在のスクリプト内容を保存してもよろしいですか？')) {
  	document.getElementById("form_" + this.dataset.id).submit();
   }
  });

  $("body").on("click", function(){
  	$("#save").hide();
  });


})

