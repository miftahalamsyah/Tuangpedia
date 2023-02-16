<!doctype html>
<html lang="en">
	<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="icon" type="image/x-icon" href="/img/logotuangpedia.png">

	{{-- bootstrap icon --}}
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	
	{{-- css form masuk --}}
	<link rel="stylesheet" href="/css/masuk.css">

	{{-- css style --}}
	<link rel="stylesheet" href="/css/style.css">

    <title>TuangPedia | {{ $title }}</title>
	</head>
	
	<body>
		@include('partials/navbar')

		<div class="container mt-4">
			@yield('container')
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>

	{{-- footer --}}
	@include('partials/footer')
	
</html>