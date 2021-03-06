<!DOCTYPE html>
<html lang="ja">
<head>
    <title>@yield("title")</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- css/reset.cscとstyle.cssは触らないように-->
    <link rel="stylesheet" href="{{asset('css/test.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/emblemmatic-s-logo-438.ico') }}">

    @yield("howtoCss")
    @yield("indexCss")
    @yield("editCss")
    @yield("showSampleCss")

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
</head>


<body class="wrapper">
  <!--ヘッダー-->
  <header>
    <nav>

      @guest
        <div class="logo">
        <a href="{{ url('/') }}">Script Maker</a>
        </div>
        <ul class="clearfix">
          <li><a href="{{ route('register') }}" >サインアップ</a></li>
          <li><a href="{{ route('login') }}" >ログイン</a></li>
        </ul>
      @else
        <div class="logo">
        <a href="{{ url('/scripts') }}">Script Maker</a>
        </div>
        <ul class="clearfix icon">
          <li>

            <a class="container" id="logout" href="{{ route('logout') }}" ><i class="fas fa-sign-out-alt"></i><span>ログアウト</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">

              @csrf
            </form>
          </li>
          <li><a class="container my-script" href="{{ route('scripts.index') }}" ><i class="fas fa-folder"></i><span>マイスクリプト</span></a></li>
          <li><a class="container" href="{{ route('scripts.sample') }}" ><i class="fas fa-book-reader"></i><span>完成例一覧</span></a></li>
        </ul>
      @endguest
    </nav>
  </header>

  <!--コンテンツ-->
  <div id="contents">
      @yield('content')
  </div>
</body>

  <!--フッター-->
  <footer>
    <p class="copyright"><small>Copyright (C) 2019 Nohohon All rights reserved</small></p>
  </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/test.js"></script>
</body>
</html>