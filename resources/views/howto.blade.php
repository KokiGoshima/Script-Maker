@extends("layouts.test")

@section("title")
	スクリプトメーカー | Script maker
@endsection

@section("howtoCss")
{{-- <link rel="stylesheet" type="text/css" href="howto.css"> --}}
<link href="{{asset('/css/howto.css')}}" rel="stylesheet">
@endsection

@section("content")
	<div class="main-contents">
			<div class="content">
					<div class="about-content">
					　<h2>初心者からできる<br>英語プレゼンテーションスクリプト作成</h2>
					</div>
	  			<div class="about2-content">
						<p>英語でのプレゼンテーションも怖くない。<br>Script Makerでやってみよう。<br>初心者向け英語プレゼンテーション用スクリプト作成サイト。</p>
					</div>
	 		</div>
      <!-- ドラッグ＆ドロップ動作の動画 -->
	  	<div class="video-content">
					<!-- <video src="video1.mov" loop autoplay muted></video> -->
					<img src="{{asset('img/allscriptscreen.png')}}" alt="画面説明">
	 	　 </div>
　</div>

	<div class="how-section1">
		<div class="row">
		<div class="col-md-6 how-img">
		<img src="https://image.ibb.co/dDW27U/Work_Section2_freelance_img1.png" class="rounded-circle img-fluid" alt=""/>
		</div>
		<div class="col-md-6">
		<!-- <h4>定型表現</h4> -->
		      <h4 class="subheading">定型表現</h4>
		<p class="text-muted">トピック別定型フレーズを厳選。選択項目から好みの表現を選択しするだけ。修正が必要な場合は、直接入力。</p>
		</div>
		</div>
		<div class="row">
		<div class="col-md-6">
		<!-- <h4>翻訳</h4> -->
		      <h4 class="subheading">翻訳機能</h4>
		      <p class="text-muted">単語や英文を調べたい時も同一画面で翻訳機能を使用できる。</p>
		</div>
		<div class="col-md-6 how-img">
		<img src="https://image.ibb.co/cHgKnU/Work_Section2_freelance_img2.png" class="rounded-circle img-fluid" alt=""/>
		</div>
		</div>
		<div class="row">
		<div class="col-md-6 how-img">
		<img src="https://image.ibb.co/ctSLu9/Work_Section2_freelance_img3.png" class="rounded-circle img-fluid" alt=""/>
		</div>
		<div class="col-md-6">
		<!-- <h4>完成版テンプレート</h4> -->
		      <h4 class="subheading">完成版テンプレート</h4>
		      <p class="text-muted">プレゼンシーンに応じたテンプレートを数多く用意。完成をイメージしながらスクリプトを作成できる。</p>
		</div>
		</div>
		<div class="row">
		<div class="col-md-6">
		<!-- <h4>保存</h4> -->
		      <h4 class="subheading">保存機能</h4>
		      <p class="text-muted">作成中のスクリプトや作成済みのスクリプトは保存し、効率的に管理。</p>
		</div>
		<div class="col-md-6 how-img">
		<img src="https://image.ibb.co/gQ9iE9/Work_Section2_freelance_img4.png" class="rounded-circle img-fluid" alt=""/>
		</div>
		</div>
		</div>


<!-- bootstrap js -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection