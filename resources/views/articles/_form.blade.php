						<div class="form-group" style="margin-right: 50px;margin-left: 50px;">
							<div class="row">
								<div class="col-12 col-md-6">
									{!! Form::label('title', 'Tiêu đề:',['class'=>'control-label']) !!}
									{!! Form::text('title',null,['id'=>'title','class'=>'form-control','placeholder'=>'...','request'=>'true'])!!}
								</div>
								<div class="col-12 col-md-3" style="margin-top: 36px; margin-left: 0px;">
									{!! Form::date('time', \Carbon\Carbon::now()); ['class'=>'form-control','style'=>'border: solid 2px;']  !!}
								</div>
								
							</div>
							
						</div>
						<div class="form-group" style="margin-right: 50px;margin-left: 50px;">
							{!! Form::label('content', 'Nội dung:',['class'=>'control-label']) !!}
							{!! Form::textarea('content',null,['id'=>'content','class'=>'form-control','placeholder'=>'...','request'=>'true','style'=>'height:500px;'])!!}
						</div>
						
						<div class="form-group" style="margin-left: 42%; width: 10%;">
							{!! Form::submit($button_name,['class'=>'btn btn-primary','style'=>'width: 150px;height:50px;']) !!}
						</div>
