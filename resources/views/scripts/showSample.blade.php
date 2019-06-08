@extends('layouts.test')

@section('title')
  参考画面 | Script maker
@endsection

@section("showSampleCss")
<link href="{{asset('/css/showsample.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
@endsection

@section('content')


{{-- スラーダー --}}
  <div id="carousel3d">
  <carousel-3d :perspective="0" :space="200" :display="5" :controls-visible="true" :controls-prev-html="'❬'" :controls-next-html="'❭'" :controls-width="30" :controls-height="60" :clickable="true">

   <slide :index="0">
    <div class="example">
       <div class="copy">
        <button class="btn btn-outline-primary"onclick="copy1()"><i class="far fa-copy"></i>全英文コピー</button>
    　 </div>
          <div class="title">例1</div>
            <span id="english-script1">1 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 1 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 1 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service1 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 1 Good afternoon everyone. Thank you for coming to our presentation. Today, </span>
            <br>
            <div class="japanese-script">
              みなさんこんにちは.......
            </div>
        </div>
    </slide>

    <slide :index="1">
      <div class="example">
       <div class="copy">
        <button class="btn btn-outline-primary" onclick="copy2()"><i class="far fa-copy"></i>全英文コピー</button>
    　 </div>
          <div class="title">例2</div>
            <span id="english-script2">2 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 2 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service2 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service</span>
            <br>
            <div class="japanese-script">
              みなさんこんにちは.......
            </div>
        </div>
    </slide>

    <slide :index="2">
      <div class="example">
       <div class="copy">
        <button class="btn btn-outline-primary" onclick="copy3()"><i class="far fa-copy"></i>全英文コピー</button>
    　 </div>
          <div class="title">例3</div>
            <span id="english-script3">3 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 3 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service3 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service </span>
            <br>
            <div class="japanese-script">
              みなさんこんにちは.......
            </div>
        </div>
      </slide>

    <slide :index="3">
      <div class="example">
       <div class="copy">
        <button class="btn btn-outline-primary" onclick="copy4()"><i class="far fa-copy"></i>全英文コピー</button>
    　 </div>
          <div class="title">例4</div>
            <span id="english-script4">4 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service4 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service  </span>
            <br>
            <div class="japanese-script">
              みなさんこんにちは.......
            </div>
        </div>
    </slide>
  </carousel-3d>
</div>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js'></script><script src='https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js'></script>
<script >new Vue({
  el: '#carousel3d',
  data: {
    slides: 7
  },
  components: {
    'carousel-3d': Carousel3d.Carousel3d,
    'slide': Carousel3d.Slide
  }
})

</script>
<script type="text/javascript" src="{{asset('/js/showsample.js')}}"></script>

@endsection

