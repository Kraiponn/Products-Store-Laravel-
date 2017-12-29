@extends('layouts.main') 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10-offset-1">

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

		</div>
	</div>
</div>
@endsection