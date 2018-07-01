@extends ('layouts.master')
@section ('head.title')
	show cac bai viet
@stop
<style>
	img:hover {
		opacity: 0.8;
	}
	img {
		opacity: 1;
	}
</style>
@include('partials.navbar')
@section ('body.content')
	<div class="container" style="background-color: #f8f9fa; padding-top: 10px; margin-top: 90px; width:100%; height: 400px; ">
		<div class="row" style="height: 400px;" >
			<div class="col-sm-4">
				<div class="gallery">
					<img src="/img/ahacf.jpg"  width="350px" height="280px">
				</div>
			</div>	
			<div class="col-sm-8">
				<h2 class="" style="font-variant: small-caps;font-size: 50px; text-align: center;">{{$article->title}}</h2>
				<p style="font-style: normal; font-size: 16px;margin-right: 50px; margin-left: 50px; text-align: justify;
">	Cập nhập ngày:<span> {{ $article->updated_at }} </span></p>
				<p style="font-style: normal; font-size: 16px;margin-right: 50px; margin-left: 50px; text-align: justify;
">{{$article->content}}</p>
				<a href="{{route('article.index',$article->id)}}" class="btn btn-info" style="margin-left: 50px;">Đọc</a>
			</div>
		</div>
	</div>
@stop

