
@extends('layouts.test')


@section('title')
  作成画面 | Script Maker
@endsection

@section("editCss")
  <link rel="stylesheet" href="{{asset('/css/edit.css')}}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
@endsection

@section('content')

<body>
{{--  アコーディオン機能 --}}
<div id="container">
  <div id="accordianmenu">
    <ul>
           @foreach ($constructions as $construction) 
            <li class="active">
                <p>{{ $construction->flow }}</p>
            <ul>
            @foreach($construction->situations as $v) 
                 <li><a class="topic current">{{ $v->pattern }}</a></li>
            @endforeach
            </ul>
            </li>
            @endforeach
    </ul>
  </div>







  {{-- フレーズ画面 --}}
  <div id="phrases-box">

    <!-- 挨拶 -->
  <div class="scrollvar topic_item current">

    <p class="situations">{{ $constructions->first()->flow }} > {{ $situations->first()->pattern }}</p>


    @foreach($situations->first()->phrases as $phrase)
      <div class="phrase">
        <div class="phrase-item">
              <button class="phrase-button" type="button" name="phrase" onClick="addTF(this.value)" value="{{ $phrase->englishSentence }}">{{ $phrase->englishSentence }}<br>
                {{ $phrase->japaneseSentence }}</button>
        </div>
      </div>
    @endforeach

  </div>

  
 
    @foreach($constructions as $construction)
      @if ($loop->index === 0)
        <?php $flag = 0; ?>
        @else
        <?php $flag = 1; ?>        
      @endif

    @foreach($construction->situations as $situation)
      @if ($flag === 0  && $loop->index === 0)
        <? continue; ?>
      @endif


    <div class="scrollvar topic_item">

        <p class="situations">{{ $construction->flow }} > {{ $situation->pattern }}</p>

      @foreach($situation->phrases as $phrase)
        <div class="phrase">
          <div class="phrase-item">
                <button class="phrase-button" type="button" name="phrase" onClick="addTF(this.value)" value="{{ $phrase->englishSentence }}">{{ $phrase->englishSentence }}<br>
                  {{ $phrase->japaneseSentence }}</button>
          </div>
        </div>
      @endforeach

    </div>
    @endforeach

  @endforeach



  </div>


  {{-- テキスト画面  --}}
  <div id="script">
        <form name="scriptForm" action = "{{ route('scripts.update', ['id' => $script->id]) }}" method="post" id = "form_{{ $script->id }}" >
          @csrf
          @method("put")
          <div class="script-title">
                <p class="title">スクリプト</p>
                  <div class="button-box">

                  <button type="submit" data-id="{{$script->id}}" class = "save">保存</button>

                      <button type="submit" class="jquery_reset_perfect">クリア</button>
                  </div>
                  <input class="text-title" type="text" name="title" placeholder="タイトルを入力してください" value = "{{ old('title', $script->title) }}">
                  {{-- @if($errors->has('title')) --}}
                  @if($errors->any())
                  <span class = "error" style="color: red;">{{ $errors->first() }}</span>
                  @endif
                  @if(Session::has('message'))
                    <span id = "save" style="color: red;">{{ session('message') }}</span>
                  @endif
                  <textarea id="text1" class="scripttext" name="textbox" placeholder="テキストを入力してください">{{ old('textbox', $script->content) }}</textarea><br>
          </div>
      </form>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src= "{{ asset('/js/edit.js')}}"></script>

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
          });

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
$('.jquery_reset_perfect').on('click', function(e){
  // 「OK」ボタン押下時
  e.preventDefault();
  if (confirm('現在のスクリプト内容を全て削除してもよろしいですか？')) {
    $('.scripttext').val('');
   }
});
</script>

<script>
$(function() {
  $("input:not(.allow_submit)").on("keypress", function(){
    return event.which !== 13;
  });
});
</script>

@endsection