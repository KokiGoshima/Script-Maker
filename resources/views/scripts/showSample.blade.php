@extends('layouts.test')

@section('title')
  参考画面 | Script maker
@endsection

@section("showSampleCss")
<link href="{{asset('/css/showsample.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
@endsection

@section('content')
<div class="tabs">
  <div class="tab-button-outer">
    <ul id="tab-button">
      <li><a href="#tab01">例１</a></li>
      <li><a href="#tab02">例 2</a></li>
      <li><a href="#tab03">例 3</a></li>
      <li><a href="#tab04">例 4</a></li>
      <li><a href="#tab05">例 5</a></li>
    </ul>
  </div>
  <div class="tab-select-outer">
    <select id="tab-select">
      <option value="#tab01">例 1</option>
      <option value="#tab02">例 2</option>
      <option value="#tab03">例 3</option>
      <option value="#tab04">例 4</option>
      <option value="#tab05">例 5</option>
    </select>
  </div>

  <div id="tab01" class="tab-contents">
    <h2>例 1</h2>

			<div class="copy">
				<button class="btn btn-outline-primary" onclick="copy1()"><i class="far fa-copy"></i>全文コピー</button>
		　</div>
	    <span id="example1">1 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 1 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 1 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service
	</div>

  <div id="tab02" class="tab-contents">
    <h2>例 2</h2>
    <div class="copy">
					<button class="btn btn-outline-primary" onclick="copy2()"><i class="far fa-copy"></i>全文コピー</button>
	　</div>
    <span id="example2">2 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 2 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 2 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service
  </span>
  </div>

  <div id="tab03" class="tab-contents">
    <h2>例 3</h2>
    <div class="copy">
				<button class="btn btn-outline-primary" onclick="copy3()"><i class="far fa-copy"></i>全文コピー</button>
	　</div>
    <span id="example3">3  Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 3  Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 3  Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service
  </span>
  </div>

  <div id="tab04" class="tab-contents">
    <h2>例 4</h2>
    <div class="copy">
					<button class="btn btn-outline-primary" onclick="copy4()"><i class="far fa-copy"></i>全文コピー</button>
	　</div>
    <span id="example4">4 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 4 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 4 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service
  </span>
  </div>

  <div id="tab05" class="tab-contents">
    <h2>例 5</h2>
    <div class="copy">
					<button class="btn btn-outline-primary" onclick="copy5()"><i class="far fa-copy"></i>全文コピー</button>
	　</div>
    <span id="example5">5 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 5 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 5 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service
  </span>
  </div>
</div>


	<div  class="return-script">
		<input value="Scriptへ戻る" onclick="history.back();" type="button">
	</div>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('/js/showsample.js')}}"></script>

@endsection

