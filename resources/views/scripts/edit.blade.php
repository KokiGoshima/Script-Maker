@extends('layouts.test')

@section('title')
  作成画面 | Script Maker
@endsection

@section("editCss")
  <link rel="stylesheet" href="{{asset('/css/edit.css')}}">
@endsection

@section('content')
{{--  アコーディオン機能 --}}
<div class="script-box">
    <div id="accordianmenu">
        <ul>
            <li class="active">
                <p>導入</p>
                <ul>
                    <li><a class="topic current" href="#">挨拶</a></li>
                    <li><a class="topic" href="#">自己紹介</a></li>
                    <li><a class="topic" href="#">感謝</a></li>
                    <li><a class="topic" href="#">プレゼンテーマ</a></li>
                    <li><a class="topic" href="#">プレゼン時間</a></li>
                    <li><a class="topic" href="#">質疑応答</a></li>
                </ul>
            </li>
            <li>
                <p>本論</p>
                <ul>
                    <li><a class="topic" href="#">問題提起</a></li>
                    <li><a class="topic" href="#">原因</a></li>
                    <li><a class="topic" href="#">具体例</a></li>
                    <li><a class="topic" href="#">図の紹介</a></li>
                    <li><a class="topic" href="#">比較</a></li>
                    <li><a class="topic" href="#">予想</a></li>
                    <li><a class="topic" href="#">結果</a></li>
                </ul>
            </li>
            <li>
                <p>結論</p>
                <ul>
                    <li><a class="topic" href="#">結論</a></li>
                    <li><a class="topic" href="#">お礼</a></li>
                    <li><a class="topic" href="#">質疑応答</a></li>
                    <li><a class="topic" href="#">答え方</a></li>
                </ul>
            </li>
        </ul>
    </div>

  {{-- フレーズ画面 --}}
  <div id="phrases-box">
    <!-- 挨拶 -->
    <div class="scrollvar topic_item current">
        <p class="situations">導入 > 挨拶</p>
        <div class="phrase">
          <div class="phrase-item">
                <button class="phrase-button" type="button" name="phrase" onClick="addTF(this.value)" value="Hello I would like to explain about my topic.  ">Hello I would like to explain about my topic.<br>
                  こんにちは、今日は私のトピックについて説明します</button>
          </div>
        </div>
        <div class="phrase">
          <div class="phrase-item">
                  <button class="phrase-button" type="button" name="phrase" onClick="addTF(this.value)" value="Hello I would like to explain about my topic.  ">Hello I would like to explain about my topic.<br>
                    こんにちは、今日は私のトピックについて説明します</button>
          </div>
        </div>
        <div class="phrase">
          <div class="phrase-item">
                <button class="phrase-button" type="button" name="phrase" onClick="addTF(this.value)" value="Hello I would like to explain about my topic.  ">Hello I would like to explain about my topic.<br>
                  こんにちは、今日は私のトピックについて説明します</button>
          </div>
        </div>
    </div>
    <!-- 自己紹介 -->
    <div class="scrollvar topic_item">
        <p class="situations">導入 > 自己紹介</p>
        <div class="phrase">
            <div class="phrase-item">
                <button class="phrase-button" type="button" name="phrase" onClick="addTF(this.value)" value="My name is naoki.  ">My name is naoki.<br>
                  わたしの名前は直樹です。</button>
            </div>
        </div>
    </div>
    <!-- 感謝 -->
    <div class="scrollvar topic_item">
        <p class="situations">導入 > 感謝</p>
        <div class="phrase">
            <div class="phrase-item">
                <button class="phrase-button" type="button" name="phrase" onClick="addTF(this.value)" value="Thank you for coming my presentation.  ">Thank you for coming my presentation.<br>
                  今日はお越し頂きありがとうございます。</button>
            </div>
        </div>
    </div>
    <!-- プレゼンテーマ -->
    <div class="scrollvar topic_item">
      <p class="situations">導入 > プレゼンテーマ</p>
      <div class="phrase">
          <div class="phrase-item">
                <button class="phrase-button" type="button" name="phrase" onClick="addTF(this.value)" value="Thank you for coming my presentation.  ">Thank you for coming my presentation.<br>
                今日はお越し頂きありがとうございます。</button>
          </div>
      </div>
    </div>
    <!-- プレゼン時間 -->
    <div class="scrollvar topic_item">
        <p class="situations">導入 > プレゼン時間</p>
        <div class="phrase">
            <div class="phrase-item">
                <button class="phrase-button" type="button" name="phrase" onClick="addTF(this.value)" value="Thank you for coming my presentation.  ">Thank you for coming my presentation.<br>
                  今日はお越し頂きありがとうございます。</button>
            </div>
        </div>
    </div>
    <!-- 質疑応答 -->
    <div class="scrollvar topic_item">
        <p class="situations">導入 > 質疑応答</p>
        <div class="phrase">
            <div class="phrase-item">
                <button class="phrase-button" type="button" name="phrase" onClick="addTF(this.value)" value="Thank you for coming my presentation.  ">Thank you for coming my presentation.<br>
                  今日はお越し頂きありがとうございます。</button>
            </div>
        </div>
    </div>
  </div>



<div class="clearfix">
    <div class="script">
        <form name="scriptForm" action = "{{ route('scripts.update', ['id' => $script->id]) }}" method="post">
            @csrf
            @method("put")
            <div class="script1">
                <p class="script-item">スクリプト</p>
                    <textarea id="text1" class="scripttext" name="textbox" cols="100" rows="20"  style="overflow:auto" placeholder="テキストを入力">{{ old('content', $script->content) }}</textarea><br>
                    <button type="button"class="jquery_reset_perfect" onclick="submitbtn();" >クリア</button>
                    <input type="submit" value="保存" onclick="return confirm('現在のスクリプト内容を保存してもよろしいですか？');">
            </div>
        </form>
    </div>


 
     
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

{{-- アコーディオン --}}
<script>
$(document).ready(function(){
  $("#accordianmenu p").click(function(){
  $("#accordianmenu ul ul").slideUp();
      if(!$(this).next().is(":visible")){
          $(this).next().slideDown();
        }
  });
});
</script>

{{-- コンテンツの表示 --}}
<script>
        $('.topic').on('click', function(){
          // 初期化
          $('.topic').removeClass('current')
          $('.topic_item').removeClass('current')
          $(this).addClass('current')
          console.log($(this))
          let num = $('.topic').index(this);
          console.log(num);
          $('.topic_item').eq(num).addClass('current')
        })
</script>

{{-- テキストエリア --}}
<script type="text/javascript">
function addTF(str) {
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
}
</script>


<script>
  //完全リセット
$('.jquery_reset_perfect').on('click', function(){
  // 「OK」ボタン押下時
  if (confirm('実行しますか？')) {
    $('.scripttext').val('');
   // 「キャンセル」ボタン押下時
   } else {
        alert('キャンセル');
    }
});
</script>




@endsection