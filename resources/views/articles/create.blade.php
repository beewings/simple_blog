	@extends ('layouts.master')
	
	@section ('head.title')

	Theem baif vieet

	@stop



@include('partials.navbar')

	@section ('body.content')
		<div class="container" style="background-color: #f8f9fa; padding-top: 10px; margin-top: 90px; width:100%; height: 800px; ">
			
			
			
				<p style="text-align: center; text-transform: uppercase;font-size: 40px;">
					Bài Viết
				</p>
				
			
			
				
				
					@if (count($errors)>0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong>There were some problems with your input. <br> <br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					
					{!! Form::open([
							'route' => ['article.store'],
							'method'=>'POST',
							'class'=>'form-horizontal'

						])
					!!}
						@include('articles._form',['button_name'=>'Tạo'])

					{!! Form::close() !!}
				

						
		</div>
	@stop