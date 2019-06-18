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
        <div class="title">タイトル</div>
        <span id="english-script1">hello, world</span>
        <br>
        <div class="japanese-script">
          あああああ
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
    Everybody, how much do you know about yourselves?  What relates to yourself, you know better than anyone. That's what you think. Then, I'll give you some questions about you. Since you entered your company, how much money have you earned? How much have you paid in taxes? Suppose you want to know exactly, then, how would you proceed? When you want to know about your taxes, you'd go to the tax office. But when you want to know your lifetime earnings, how would you find out? The Ministry of Labo? If you check your taxes, you'd be worried about your future pension. You have to inquire the Japanese pension system. How about the insurance? How bother it is! No way, we don't need to check because the government is managing that very well, maybe. For most people, it comes to this. So what happened? Your pension have disappeared. It's a bit too late to blame it on the government. What's the cause? As I told you, it's a bother. So we have made this product. It is YYY. The interface is simple. Let's use it a little. How much monthly pension shall I receive at 65? You type it as it comes, 65 years old ...pension, for example. You will find it is such a "reasonable" sum. The system is not just about money. The place where I was born. The fact is you can print out at home your certificate of residency. It saves much a lot of money on bureaucracy working hours. You save the money of transportation to the Ward Office.
    So to recap, the YYY is not just a record of the past, but also a potential to chose our future life. It become a road signpost. Well, that’s it from me. Thank you once again for taking the time to join today’s presentation.. </span>
        <br>
        <div class="japanese-script">
          皆さんこんにちは。弊社YYYの新商品発表会へようこそ。会社を代表して本日皆様を歓迎します。今ここで弊社の新商品の発表の機会を与えられたことは最高の喜びです。プレゼンテーションは30分ほどになる予定です。それでは始めましょう。
          毎日、あなたはあなた自身のことをどれくらい知っているでしょうか。あなたに関わることなら誰よりも知っているだろう。それが今考えていることだと思います。では皆様にいくつか質問をしようと思います。会社に入ってからどれくらい稼いできましたか？その給料に対してどれくらいの税金を今まで払ってきましたか？あなたがこれらのことを知りたいとき、どのようなプロセスを行いますか？税金のことが知りたいから、税務署へ行くでしょう。しかし、あなたが将来どれくらいもらえるのかを知りたいとなった時、どのようにしますか？厚生労働省へ出向きますか？税金のことについて調べていたら、将来の年金についても心配になってくるでしょう。そうなると日本の年金システムについてから知る必要が出てきますね。さらに保険についても知るには？ああもう面倒臭い！もういいや、私たちが確認しなくても、政府がきっと管理してくれているのでしょう。大半の人はこのように考えますね。その結果どうなりましたか？あなたの年金は消え始めました。その時に政府に不平を言ってももう遅いです。何故このような事態を招いたのでしょうか？先ほども述べたように、”面倒臭い”からです。そこで私たちはこの新商品を開発しました。その名もXXXです。画面はいたってシンプルです。少し触ってみましょう。65歳の時点でいくらの年金がもらえるのか気になったとします。思ったままに検索してみましょう。『65歳、年金』と。意外と堅実的な額だと気づくでしょう。このシステムはお金に関してだけではありません。あなたの出身地なども調べられます。実は、役所からもらうような書類を自宅でコピーすることもできます。役所まで行く時間とそれにかかる交通費を大きく節約できますね。
          要点をまとめると、新商品YYYはあなたにまつわる過去のすべてのデータを管理するだけでなく、あなたの今後の未来への選択肢も増やします。きっとあなたの道しるべになることでしょう。これで以上になります。本日はプレゼンテーションにご参加していただきありがとうございました。
        </div>
      </div>
    </slide>

    <slide :index="2">
      <div class="example">
        <div class="copy">
          <button class="btn btn-outline-primary" onclick="copy3()"><i class="far fa-copy"></i>全英文コピー</button>
        </div>
        <div class="title">小学校に英語教育は必要ない</div>
        <span id="english-script3">According to some data, a lot of parents try to make their children learn English as easy as possible. They want their children to become international players. The Japanese government has the same idea. This is a new education system which will start in 2020. Now, in elementary school, English education starts from when students are in fifth grade. From 2020, they will start it when they are in third grade.

        In my opinion, English education in elementary school is not necessary. There are some reasons, today, I’ll tell you two reasons.

        First of all, whenever you start studying English, actuary, age doesn’t matter. Many people believe that children had better study English as early as possible because they have flexible brains so that they can get knowledge or information easily. However, it is not true. I’ll show you an experiment called BAF project which lasted from 1995 to 2004. The subjects are of different ages who never studied English. They study English for the same hours and take some same tests at each period. How was it? The 8 years old group was the highest? The result is that older groups always get higher grades than younger groups. This experiment shows that age doesn’t matter. The degree of English skill depends on learning time. It’s never too late to start studying English. So that’s one reason.

        Second reason
        Two classes a week are not enough to study English. Students have several different classes every day. Under the only two classes, they easily forget what they learn. Let me give you one example. A girl who has studied English since she was in the first grade of an elementary school. She had 2 English classes a week in an elementary school. What happened to her when she was in junior high school. Actuary, her English grade was better than others. However, the wonderful times didn’t last too long. The gap between her and others was gradually closed. And finally, there were no differences. Studying English at an elementary school is good for nothing. It won’t help with anything.

        I know English is on its way to becoming the world’s universal language. Japanese children should learn English. This is one reality. But we have another more important reality that we ought to think about. The language is deeply connected to forming a personal identity. Learning a lot of Japanese vocabulary and thinking a lot of things with the vocabulary is very important. If children ignore that process and learn English, they will be like a robot just speak Japanese and English. So I wwant to say is that do not kill your language.</span>
        <br>
        <div class="japanese-script">
          ある統計によると、たくさんの親が早い時期から子供に英語教育をさせようとしています。彼らは子供を世界で活躍できる人材にしたいと考えています。日本政府も同じ考えを持っています。これは2020年から始まる新しい教育システムです。現在、小学校では英語の授業は小学5年生から始まっています。2020年からは小学3年生から始まる予定です。

          私の意見では、小学校の英語教育は必要ないと考えています。いくつかが理由はありますが、今日は２つご紹介します。

          １つ目は、いつ勉強を始めても年齢は関係ないということです。多くの人が、子供は柔軟な脳を持っているので知識や情報を取得しやすい為、できるだけ早めに英語の勉強を始めた方がいいと考えてます。しかし、それは正しくありません。1995年から2004年まで続いたBAFという実験を紹介します。被験者は年齢が異なる英語を勉強したことがない人です。彼らは同じ時間英語を勉強し、それぞれの期間に同じテストを受けました。いったい誰が一番高い点数をとったと思いますか？8歳のグループですか？結果は、年長グループが常に燃焼グループよ高い点数を取りました。英語の習熟度は勉強時間に比例します。つまり英語の勉強を始めるのに遅すぎることはありません。これが1つ目の理由です。

          ２つ目の理由は、1週間に2つの授業は不十分だからです。生徒は毎日様々な授業があります。結果として学んだことをすぐに忘れてしまいます。１つの例を紹介します。彼女は小学一年生の頃から英語を学んできました。彼女は週2時間の英語の授業がありました。彼女が中学生になった時どうなったでしょうか？実際他の生徒より成績は優秀でした。しかし、そんな素晴らしい時間も長くは続きませんでした。他の生徒との差は次第になくなっていきました。そして、ついにその差はなくなりました。小学校での英語教育は何の意味も為しませんでした。

          英語が世界の共通言語になりつつあるのは知っています。なので日本の子供たちは英語を学ぶ必要があります。これは１つの現実です。しかし私たちは考えなければならない、さらに大切なことがあります。言語はアイデンティティの形成に深く関わっています。日本語を多く学びたくさんのことについて考えることはとても大切なことです。もし子供たちがこの過程を無視し英語を学んでしまったら彼らは日本語と英語を喋るようにプログラムされただけのロボットのようになってしまいます。つまり私の言いたいことは、あなたの言語を殺すなということです。
        </div>
      </div>
    </slide>

    {{-- <slide :index="3">
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
</slide> --}}

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

