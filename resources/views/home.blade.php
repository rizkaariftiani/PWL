<!DOCTYPE html>
<html>
<head>
	<title>Laravel News</title>
	<link href="https://png.pngtree.com/png-clipart/20200701/original/pngtree-carrot-cute-character-logo-icon-png-image_5430355.jpg" rel="shortcut icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

	<link href="{{ asset('css/blog-home.css') }}" rel="stylesheet">

</head>



<body>
	<div class="card" style="width: 18rem;">
		<div class="card-header">
			Laravel News
		</div>
	</div>

	<br>


	<form class="form-inline" action="/search">
		@csrf
		<label for="keyword">Kata kunci : </label>
		<input type="text" class="form-control" name="keyword">
		<button type="submit" class="btn btn-primary">Search</button>
	</form>


	<div class="container">
		<h2>Daftar Artikel</h2>
		@foreach($artikel as $a)
		<div class="card mb-3">
			<img src="{{ $a->urlToImage}}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">{{ $a->title}}</h5>
				<p class="card-text">{{ $a->description}}</p>
				<p>{{ $a->url}}<p>
				</div>
			</div>
			@endforeach
		</div>


		<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


	</body>
	</html>