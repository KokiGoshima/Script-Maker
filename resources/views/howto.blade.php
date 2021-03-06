@extends("layouts.test")

@section("title")
	スクリプトメーカー | Script Maker
@endsection

@section("howtoCss")
<link href="{{asset('/css/howto.css')}}" rel="stylesheet">


@endsection

@section("content")
	 <div class="main-contents">
			   <div class="content">
					   <div class="about-content">
					     <h2>初心者からできる<br>英語プレゼンテーションスクリプト作成</h2>
					   </div>
	  			   <div class="about2-content">
						   <p>英語でのプレゼンテーションも怖くない。<br>Script  Makerでやってみよう。
							 <br> 初心者・ビジネス向け　英語プレゼンテーションスクリプト作成サイト。</p>
					   </div>
	 		   </div>

	  	   <div class="presentationimg">
					  <img src="{{asset('img/presentation.png')}}"  alt="画面説明">
	      </div>
 </div>

	<div class="how-section1">

			  <div class="row">
					 <div class="col-md-6 how-img">
						  <img src="{{asset('img/phrase.png')}}" alt=""/>
					 </div>
					 <div class="col-md-6">
					    <h4 class="subheading">定型表現</h4>
					    <p class="text-muted">トピック別の定型フレーズを厳選。選択項目から好みの表現を選択するだけ。修正が必要な場合は直接入力。</p>
					 </div>
			  </div>

				<div class="row">
					<div class="col-md-6">
						  <h4 class="subheading">完成版テンプレート</h4>
						  <p class="text-muted">プレゼンシーンに応じたスクリプト完成例を用意。完成をイメージしながらスクリプトを作成。</p>
					</div>
					<div class="col-md-6 how-img">
							<img src="{{asset('img/showsample.png')}}"  alt=""/>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 how-img">
							<img src="{{asset('img/yours.png')}}" alt=""/>
					</div>
					<div class="col-md-6">
							<h4 class="subheading">保存機能</h4>
							<p class="text-muted">新規作成・保存・削除も簡単。作成中のスクリプトや作成済みのスクリプトはタイトルをつけて保存し、効率的に管理。</p>
					</div>
				 </div>
	</div>

<!-- bootstrap js -->
<script type="text/javascript" src="js/howto.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection