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
        <div class="title">小学校に英語教育は必要ない</div>
        <span id="english-script1">According to some data, a lot of parents try to make their children learn English as easy as possible. They want their children to become international players. The Japanese government has the same idea. This is a new education system which will start in 2020. Now, in elementary school, English education starts from when students are in fifth grade. From 2020, they will start it when they are in third grade. 

        In my opinion, English education in elementary school is not necessary. There are some reasons, today, I’ll tell you two reasons.

        First of all, whenever you start studying English, actuary, age doesn’t matter. Many people believe that children had better study English as early as possible because they have flexible brains so that they can get knowledge or information easily. However, it is not true. I’ll show you an experiment called BAF project which lasted from 1995 to 2004. The subjects are of different ages who never studied English. They study English for the same hours and take some same tests at each period. How was it? The 8 years old group was the highest? The result is that older groups always get higher grades than younger groups. This experiment shows that age doesn’t matter. The degree of English skill depends on learning time. It’s never too late to start studying English. So that’s one reason.

        Second reason
        Two classes a week are not enough to study English. Students have several different classes every day. Under the only two classes, they easily forget what they learn. Let me give you one example. A girl who has studied English since she was in the first grade of an elementary school. She had 2 English classes a week in an elementary school. What happened to her when she was in junior high school. Actuary, her English grade was better than others. However, the wonderful times didn’t last too long. The gap between her and others was gradually closed. And finally, there were no differences. Studying English at an elementary school is good for nothing. It won’t help with anything. 

        I know English is on its way to becoming the world’s universal language. Japanese children should learn English. This is one reality. But we have another more important reality that we ought to think about. The language is deeply connected to forming a personal identity. Learning a lot of Japanese vocabulary and thinking a lot of things with the vocabulary is very important. If children ignore that process and learn English, they will be like a robot just speak Japanese and English. So I wwant to say is that do not kill your language.</span>
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
        <div class="title">新商品発表</div>
        <span id="english-script2">Good afternoon ladies and gentlemen. Welcome to XXX New product's presentation. On behalf of Company I would like to welcome you here today. It is a great honor to be given this opportunity to present here about our new product. My presentation will take about 30 minutes. Please interrupt if you have any questions. Now, let's begin.
    Everybody, how much do you know about yourselves?  What relates to yourself, you know better than anyone. That's what you think. Then, I'll give you some questions about you. Since you entered your company, how much money have you earned? How much have you paid in taxes? Suppose you want to know exactly, then, how would you proceed? When you want to know about your taxes, you'd go to the tax office. But when you want to know your lifetime earnings, how would you find out? The Ministry of Labo? If you check your taxes, you'd be worried about your future pension. You have to inquire the Japanese pension system. How about the insurance? How bother it is! No way, we don't need to check because the government is managing that very well, maybe. For most people, it comes to this. So what happened? Your pension have disappeared. It's a bit too late to blame it on the government. What's the cause? As I told you, it's a bother. So we have made this product. It is XXX. The interface is simple. Let's use it a little. How much monthly pension shall I receive at 65? You type it as it comes, 65 years old ...pension, for example. Is that what it is? Such a "reasonable" sum. The system is not just about money. The place where I was born. The fact is you can print out at home your certificate of residency. It saves much a lot of money on bureaucracy working hours. You save the money of transportation to the Ward Office.
    So to recap, the YYY is not just a record of the past, but also a potential to chose our future life. It become a road signpost. Well, that’s it from me. Thanks very much. </span>
        <br>
        <div class="japanese-script">
          皆さんこんにちは。弊社YYYの新商品発表会へようこそ。会社を代表して本日皆様を歓迎します。今ここで弊社の新商品の発表の機会を与えられたことは最高の喜びです。プレゼンテーションは30分ほどになる予定です。それでは始めましょう。
          毎日、あなたはあなた自身のことをどれくらい知っているでしょうか。あなたに関わることなら誰よりも知っているだろう。それが今考えていることだと思います。では皆様にいくつか質問をしようと思います。会社に入ってからどれくらい稼いできましたか？その給料に対してどれくらいの税金を今まで払ってきましたか？あなたがこれらのことを知りたいとき、どのようなプロセスを行いますか？税金のことが知りたいから、税務署へ行くでしょう。しかし、あなたが将来どれくらいもらえるのかを知りたいとなった時、どのようにしますか？厚生労働省へ出向きますか？税金のことについて調べていたら、将来の年金についても心配になってくるでしょう。
        </div>
      </div>
    </slide>

    <slide :index="2">
      <div class="example">
        <div class="copy">
          <button class="btn btn-outline-primary" onclick="copy3()"><i class="far fa-copy"></i>全英文コピー</button>
        </div>
        <div class="title">例3</div>
        <span id="english-script3">3 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 1 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 1 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service1 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 1 Good afternoon everyone. Thank you for coming to our presentation. Today, </span>
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
        <span id="english-script4">4 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 1 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 1 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service1 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 1 Good afternoon everyone. Thank you for coming to our presentation. Today, </span>
        <br>
        <div class="japanese-script">
          みなさんこんにちは.......
        </div>
      </div>
    </slide>

    <slide :index="4">
  <div class="example">
    <div class="copy">
      <button class="btn btn-outline-primary"onclick="copy5()"><i class="far fa-copy"></i>全英文コピー</button>
    </div>
    <div class="title">例5</div>
    <span id="english-script5">1 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 1 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 1 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service1 Good afternoon everyone. Thank you for coming to our presentation. Today, we would like to introduce our Web service 1 Good afternoon everyone. Thank you for coming to our presentation. Today, </span>
    <br>
    <div class="japanese-script">
      みなさんこんにちは.......
    </div>
  </div>
</slide>

  </carousel-3d>
</div>

<div class="return-script">
  <input type="button" value="&#xf0e2; Scriptへ戻る" onclick="history.back();" class="fas" >
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

