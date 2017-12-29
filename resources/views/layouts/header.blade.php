<div class="app-bar">
	<a class="app-bar-element">
		<span id="toggle-tiles-dropdown" class="mif-apps mif-2x"></span>
		<div class="app-bar-drop-container" data-role="dropdown" data-toggle-element="#toggle-tiles-dropdown" data-no-close="false"
		 style="width: 324px;">
			<div class="tile-container bg-white">
				<div class="tile-small bg-cyan">
					<div class="tile-content iconic">
						<span class="icon mif-onedrive"></span>
					</div>
				</div>
				<div class="tile-small bg-yellow">
					<div class="tile-content iconic">
						<span class="icon mif-google"></span>
					</div>
				</div>
				<div class="tile-small bg-red">
					<div class="tile-content iconic">
						<span class="icon mif-facebook"></span>
					</div>
				</div>
				<div class="tile-small bg-green">
					<div class="tile-content iconic">
						<span class="icon mif-twitter"></span>
					</div>
				</div>
			</div>
		</div>
	</a>

	<ul class="app-bar-menu">
		<li>
			<a href="{{ url('/') }}">Home</a>
		</li>
		<li>
			<a href="" class="dropdown-toggle">OS</a>
			<ul class="d-menu" data-role="dropdown">
				<li>
					<a href="{{ url('/ltest') }}">Test Layout</a> 
				</li>
				<li>
					<a href="">Spartan</a>
				</li>
				<li>
					<a href="">Outlook</a>
				</li>
				<li>
					<a href="">Office 2015</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="" class="dropdown-toggle">Other Products</a>
					<ul class="d-menu" data-role="dropdown">
						<li>
							<a href="">Internet Explorer 10</a>
						</li>
						<li>
							<a href="">Skype</a>
						</li>
						<li>
							<a href="">Surface</a>
						</li>
					</ul>
				</li>
			</ul>
		</li>
		<li>
			<a href="{{ url('/products') }}">ProductsType</a>
		</li>
		<li>
			<a href="{{ url('/books') }}">Books</a>
		</li>
	</ul>

	<div class="app-bar-element place-right">
		<a class="dropdown-toggle fg-white">
			<span class="mif-enter"></span> Enter</a>
		<div class="app-bar-drop-container bg-white fg-dark place-right" data-role="dropdown" data-no-close="true">
			<div class="padding20">
				<form>
					<h4 class="text-light">Login to service...</h4>
					<div class="input-control text">
						<span class="mif-user prepend-icon"></span>
						<input type="text">
					</div>
					<div class="input-control text">
						<span class="mif-lock prepend-icon"></span>
						<input type="password">
					</div>
					<label class="input-control checkbox small-check">
						<input type="checkbox">
						<span class="check"></span>
						<span class="caption">Remember me</span>
					</label>
					<div class="form-actions">
						<button class="button">Login</button>
						<button class="button link">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>