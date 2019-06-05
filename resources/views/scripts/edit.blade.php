<?php

use App\Construction;
use App\Situation;
use App\Phrase;

?>

@extends('layouts.test')


@section('title')
  作成画面 | Script Maker
@endsection

@section("editCss")
  <link rel="stylesheet" href="{{asset('/css/edit.css')}}">
@endsection

@section('content')
<body>
<div class="box clearfix">
<div id="accordianmenu">
  <ul>
      <li class="active">
          <p>導入</p>
          <ul>
            @foreach(Construction::find(1)->situations as $situation)
            {{-- @foreach(Situation::where('flow_id', '=', 1)->get() as $situation) --}}
              <li><a class="topic current">{{ $situation->pattern }}</a></li>
            @endforeach
          </ul>
      </li>
      <li>
          <p>本論</p>
          <ul>
            @foreach(Construction::find(2)->situations as $situation)
              <li><a class="topic current">{{ $situation->pattern }}</a></li>
            @endforeach
          </ul>
      </li>
      <li>
          <p>結論</p>
          <ul>
             @foreach(Construction::find(3)->situations as $situation)
              <li><a class="topic current">{{ $situation->pattern }}</a></li>
            @endforeach
          </ul>
      </li>
  </ul>
</div>


<div id="phrases">
  <!-- 挨拶 -->
  <div class="scrollvar topic_item current">
      <p class="tytle">導入 > 挨拶</p>
      <div class="well">
          <div>
              <p>Hello</p><br>
              <p>こんにちは</p>
          </div>
          <div>
              <input type="button" value="挿入">
          </div>
      </div>
  </div>
  <!-- 自己紹介 -->
  <div class="scrollvar topic_item">
      <p class="tytle">導入 > 自己紹介</p>
      <div class="well">
          <div>
              <p>My name is naoki</p><br>
              <p>わたしの名前は直樹です。</p>
          </div>
          <div>
              <input type="button" value="挿入">
          </div>
      </div>
  </div>
  <!-- 感謝 -->
  <div class="scrollvar topic_item">
      <p class="tytle">導入 > 感謝</p>
      <div class="well">
          <div>
              <p>Thank you for coming my presentation.</p><br>
              <p>今日はお越し頂きありがとうございます。</p>
          </div>
          <div>
              <input type="button" value="挿入">
          </div>
      </div>
  </div>
</div>


<div class="script">
     <form name="scriptForm" action = "{{ route('scripts.update', ['id' => $script->id]) }}" method="post">
        {{-- <div class="textcontents">
            <input type="button" value="Thank you for coming my presentetion. " onClick="addTF(this.value)"><br>
            <input type="button" value="My name is naoki. " onClick="addTF(this.value)"><br>
            <input type="button" value="Today, I would like to explain three topic. " onClick="addTF(this.value)"><br>
            <input type="button" value="Please give comennt after my presentation. " onClick="addTF(this.value)"><br>
        </div> --}}
        @csrf
        @method("put")
        <div class="script1">
            <p class="script-item">スクリプト</p>
                <textarea id="text1" name="textbox" cols="100" rows="20"  style="overflow:auto" placeholder="テキストを入力">{{ old('content', $script->content) }}</textarea><br>
                <input type="reset" value="クリア" onclick="return confirm('クリアボタンがクリックされました。本当に入力内容を削除してもよろしいですか？');">
                <input type="submit" value="保存(ダミー)" onclick="return confirm('現在のスクリプト内容を保存してもよろしいですか？');">
        </div>
     </form>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

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
</body>
@endsection