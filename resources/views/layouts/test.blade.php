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
        <a href="{{ url('/') }}">Script maker</a>
        </div>
        <ul class="clearfix">
          <li><a href="{{ route('register') }}" >サインアップ</a></li>
          <li><a href="{{ route('login') }}" >ログイン</a></li>
        </ul>
      @else
        <div class="logo">
        <a href="{{ url('/scripts') }}">Script maker</a>
        </div>
        <ul class="clearfix">
          <li><a href="#"><img src="{{asset('img/account.png')}}" alt="account"></a></li>
          <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{-- <a href="{{ route('logout') }}"> --}}
            ログアウト(ダミー)
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
          <li><a href="#" >マイスクリプト</a></li>
          <li><a href="#" >完成例一覧</a></li>
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

</body>
</html>