<!DOCTYPE html>
<html lang="ja">
<head>
  <title>Folder Library concept</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="yourFiles.css"> <!-- 追加 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> <!-- 追加 -->
</head> 
{{-- <body> --}}
@extends('layouts.test')

@section('title')
  ファイル一覧 | Script Maker
@endsection

@section("indexCss")
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
@endsection

@section('content')
  <section id="wrapper">
    <div>
      <h1>Your Script</h1>
      <div class="main">
        <div class="left">

          <form action="{{ route('scripts.create', ['id' => 1]) }}" method="POST">
            @csrf
              <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder">
                {{-- <button> --}}
                  <i class="fa aria-hidden="true"></i><i class="far fa-file-alt"><p class="new-script"><span><button>New</button></span></p></i><i class="fa fa-check" aria-hidden="true"></i>
                {{-- </button> --}}
              </div>
          </form>
  
          {{-- @foreach($scripts as $script) --}}
          @foreach(Auth::user()->scripts as $script)
            <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder">
              <a href="{{ route('scripts.edit', ['id' => $script->id]) }}">
                <p>{{ $script->content }}</p>
                <i class="fa far fa-file-alt fa-file-alt-script" aria-hidden="true"></i>
                <i class="fa fa-check" aria-hidden="true"></i>
              </a>
            </div>
          @endforeach

        </div>
      </div>

      <div class="top-droppable folder-content easeout2 closed" id="folder1-content">
        <div class="close-folder-content"><i class="fa fa-times" aria-hidden="true"></i></div>
        <h2><i class="fa fa-folder" aria-hidden="true"></i><span>Folder 1</span></h2>
      </div>
      <div class="top-droppable folder-content easeout2 closed" id="folder2-content">
        <div class="close-folder-content"><i class="fa fa-times" aria-hidden="true"></i></div>
        <h2><i class="fa fa-folder" aria-hidden="true"></i><span>Folder 2</span></h2>
      </div>
      <div class="top-droppable folder-content easeout2 closed" id="folder3-content">
        <div class="close-folder-content"><i class="fa fa-times" aria-hidden="true"></i></div>
        <h2><i class="fa fa-folder" aria-hidden="true"></i><span>Folder 3</span></h2>
      </div>
      <div class="top-droppable folder-content easeout2 closed" id="folder4-content">
        <div class="close-folder-content"><i class="fa fa-times" aria-hidden="true"></i></div>
        <h2><i class="fa fa-folder" aria-hidden="true"></i><span>Folder 4</span></h2>
      </div>
      <div class="top-droppable folder-content easeout2 closed" id="folder5-content">
        <div class="close-folder-content"><i class="fa fa-times" aria-hidden="true"></i></div>
        <h2><i class="fa fa-folder" aria-hidden="true"></i><span>Folder 5</span></h2>
      </div>

    </div>
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script> <!-- 追加 -->
@endsection