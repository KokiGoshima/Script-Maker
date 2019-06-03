@extends('layouts.test')

@section('title')
  作成画面 | Script Maker
@endsection

@section("editCss")
  <link rel="stylesheet" href="{{asset('/css/edit.css')}}">
@endsection

@section('content')
<div class="text">
    <h2>Test</h2>
    <form name="scriptForm">
        <div class="textcontents">
            <input type="button" value="Thank you for coming my presentetion. " onClick="addTF(this.value)"><br>
            <input type="button" value="My name is naoki. " onClick="addTF(this.value)"><br>
            <input type="button" value="Today, I would like to explain three topic. " onClick="addTF(this.value)"><br>
            <input type="button" value="Please give comennt after my presentation. " onClick="addTF(this.value)"><br>
        </div>
        <div class="script">
            <p>スクリプト</p>
                <input type="reset" value="クリア" onclick="return confirm('クリアボタンがクリックされました。本当に入力内容を削除してもよろしいですか？');">
                <textarea id="text1" name="textbox" cols="100" rows="20"  style="overflow:auto" placeholder="テキストを入力">{{ old('content', $script->content) }}</textarea><br>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

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

@endsection