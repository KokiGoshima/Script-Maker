<!DOCTYPE html>
<html lang="ja">
<head>
  <title>ファイル一覧画面 | Script Maker</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="yourFiles.css"> <!-- 追加 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> <!-- 追加 -->
</head>
{{-- <body> --}}
@extends('layouts.test')

@section('title')
  ファイル一覧画面 | Script Maker
@endsection

@section("indexCss")
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
@endsection

@section('content')
  <section id="wrapper">
    <div>
      <div class="main">
        <div class="left">

          <form action="{{ route('scripts.create') }}" method="POST">
            @csrf
              <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder">
                {{-- <button> --}}
                  <i class="fa aria-hidden"></i><i class="far fa-file-alt" style="padding-top: 15px;"><p class="new-script" style="padding-left: 15px;"><span style="padding-left: 30px;"><button style=" display: block; position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class='new-botton'>{{-- <i class="fas fa-plus-square"></i> --}}</button></span>New</p></i>{{-- <i class="fa fa-check" aria-hidden="true"></i> --}}
                {{-- </button> --}}
              </div>
          </form>

          {{-- @foreach($scripts as $script) --}}
          @foreach($scripts as $script)
            <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder">
              <a href="{{ route('scripts.edit', ['id' => $script->id]) }}">
                <span>{{ $script->title }}</span>
                <p>{{ $script->content }}</p>
               {{--  <i class="fa far fa-file-alt fa-file-alt-script" aria-hidden="true"></i> --}}
              </a>

                  {{--削除ボタンを設ける--}}
              <form action="{{route('scripts.delete',['id' => $script->id]) }}" method="POST" class="d-inline">

                @csrf
                @method('delete')
                <button class="btn btn-outline-danger" onclick="return confirm('選択したスクリプトを削除してもよろしいですか？');"><i class="fas fa-trash-alt"></i></button>
              {{-- outlineって入れると、白抜き、カーソル合わせたら色変わるようになる --}}
              </form>
             </div>
          @endforeach
     </div>
   </div>



    </div>
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script> <!-- 追加 -->
@endsection