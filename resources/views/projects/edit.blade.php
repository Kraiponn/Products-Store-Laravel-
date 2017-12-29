@extends('layouts.main')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 offset-1">

			<div class="card">
				<div class="card-header">Update project detail</div>
				<div class="card-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!! Form::model($projects, array('url'=>'projects/'.$projects->id, 'method'=>'put')) !!}
                    {{ Form::token() }}

					<div class="formgroup">
                        {{ Form::label('project_name', 'Project Name') }} 
                        {{ Form::text('project_name', null, [ 'class'=>'form-control', 'placeholder'=>'Project-Name' ]) }}
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="form-group">
                                    {{ Form::label('customer', 'Customer') }} 
                                    {{ Form::text('customer', null, [ 'class'=>'form-control', 'placeholder'=>'Customer' ]) }}
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
                                    {{ Form::label('price', 'Price') }} 
                                    {{ Form::text('price', null, [ 'class'=>'form-control', 'placeholder'=>'Price' ]) }}
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="form-group">
                                    {{ Form::label('product_id', 'ProjectType') }} 
                                    {{ Form::select('product_id', App\Products::pluck('p_name', 'id'), null, [ 'class'=>'form-control', 'placeholder'=>'--Select--' ]) }}
								</div>
							</div>
						</div>
                    </div>
                    
                    <div class="form-group">
                        {{ Form::submit('Add', [ 'class'=>'btn btn-primary' ]) }}
                    </div>
					{!! Form::close() !!}

				</div>
			</div>

		</div>
	</div>
</div>
@endsection