@extends('layouts.main') 
@section('content')
<div class="container">
	<br>
	<div class="row">

		<div class="col-md-10 offset-1">
			<div class="card">
				<div class="card-header">
					Products Detail
				</div>
				<div class="card-body">
                    <a href="{{ url('products/create') }}" class="btn btn-primary">
                        <i class="fa fa-plus fg-white" aria-hidden="true"></i> Add New
                    </a> 

					@if (count($products) > 0)
					<table class="table table-bordered" style="margin-top:10px;">
						<thead>
							<tr>
								<th>#</th>
								<th>ProductName</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($products as $item)
							<tr>
								<td>{{ $item->id }}</td>
								<td>{{ $item->p_name }}</td>
								<td>
									<a href="{{ url('products/'.$item->id.'/edit') }}" class="btn btn-success">
										<i class="fa fa-pencil fg-white" aria-hidden="true"></i>
									</a>
									<a href="{{ url('products/delete/'.$item->id) }}" class="btn btn-danger">
										<i class="fa fa-trash-o fg-white" aria-hidden="true"></i>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
                    </table>
                    
                    {!! $products->render() !!}
                    
                    @else 
                        <div class="card-title text-center" style="padding:10px">
                            <div class="alert alert-warning">No products type on table </div>
                        </div>
                    @endif

				</div>
            </div>

		</div>

	</div>
</div>
@endsection 
@section('footer')
    @if (session()->has('status'))
        <script>
            var delay = alertify.get('notifier','delay');
            alertify.set('notifier','delay', 2);
            alertify.set('notifier','position', 'top-right');
            alertify.success('<?php echo session()->get('status'); ?>');
        </script>
    @endif
@endsection