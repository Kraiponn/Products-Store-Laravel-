@extends('layouts.main') 
@section('header')
	{{ Html::style('css/metro.min.css') }}
	{{ Html::style('css/metro-icons.min.css') }}
	{{ Html::style('css/metro-colors.min.css') }}
@endsection
@section('content')
<div class="grid">
	<div class="row cells12">
		<div class="cell"></div>
		<div class="cell colspan10">
			<h4>Welcome to Products</h4>
			<a href="{{ url('products/create') }}" class="button rounded primary">
				<span class="mif-plus"></span> Add New</a>
			<hr>
			<div class="input-control text">
				<label>Prepend icon</label>
				<span class="mif-user prepend-icon"></span>
				<input type="text" class="form-control">
			</div>
			<div class="form-control">
				<div class="input-control text" data-role="datepicker">
					<input type="text">
					<button class="button">
						<span class="mif-calendar"></span>
					</button>
				</div>
			</div>
			<div class="form-control">
				<button class="btn btn-primary" onclick="alert()">Show Alert</button>
				<button class="btn btn-success" onclick="showDialog()">Show Alert</button>
				<button class="btn btn-danger" onclick="show()">Show Alert</button>
			</div>

			<div class="form-inline">
				<!-- Tile with zooming -->
				<div class="tile">
					<div class="tile-content zooming">
						<div class="slide">
							<img src="{{ asset('images/dog1.jpg') }}">
						</div>
					</div>
				</div>
				<!-- Tile with zooming out -->
				<div class="tile">
					<div class="tile-content zooming-out">
						<div class="slide">
							<img src="{{ asset('images/dog2.jpg') }}">
						</div>
					</div>
				</div>
			</div>

			<button onclick="metroDialog.open('#dialog')">Show dialog</button>

		</div>
		<div class="cell"></div>
	</div>
</div>


<div data-role="dialog" id="dialog" data-close-button="true">
	<h1>Simple dialog</h1>
	<p>
		Dialog :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style.
	</p>
	<button onclick="metroDialog.open('#dialog2')">Show dialog2</button>
</div>

<div data-role="dialog" id="dialog2" data-close-button="true">
	<h1>Simple dialog #2</h1>
	<p>
		Dialog :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style.
	</p>
</div>
@endsection 
@section('footer')
{{ Html::script('js/metro.min.js') }}
<script>
	function alert() {
        var delay = alertify.get('notifier','delay');
        alertify.set('notifier','delay', 2);
        alertify.set('notifier','position', 'top-right');
        alertify.success('Add new successful.');
        //swal('!Ooop', 'Something went wrong', 'error');
    }

    function showDialog() {
        var delay = alertify.get('notifier','delay');
        alertify.set('notifier','delay', 2);
        alertify.set('notifier','position', 'top-right');
        alertify.success('Add new successful.');
        //alertify.set('notifier','delay', delay);
    }

    function show() {
        var delay = alertify.get('notifier','delay');
        alertify.set('notifier','delay', 2);
        alertify.set('notifier','position', 'top-right');
        alertify.error('Add new successful.');
    }

</script>
@endsection