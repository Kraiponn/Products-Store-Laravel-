@extends('layouts.main') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-1">
            <br>
            <div class="card">
                <div class="card-header">Add Product Item</div>
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
                    <br>
                    {!! Form::open(array('url'=>'products')) !!}
                        {{ Form::token() }}
                        <div class="form-inline">
                            {{--  {{ Form::label('p_name', 'ProductName:') }}  --}}
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-audio-description" aria-hidden="true"></i></span>
                                {{ Form::text('p_name', null, [ 'class' => 'form-control', 'placeholder' => 'Product Name' ]) }} 
                            </div>
                            &nbsp;
                            {{ Form::submit('Add', [ 'class' => 'btn btn-primary' ]) }}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection @section('footer')
<script>

</script>
@endsection