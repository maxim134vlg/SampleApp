<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SampleApp</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('inc.navbar')
	
	<div class="container">
		@if(Request::is('/'))
			@include('inc.showcase')
		@endif
		<div class="row">
			<div class="col-lg-8 col-md-8">
				@include('inc.error_message')
				@yield('content')
			</div>
			<div class="col-lg-4 col-md-4">
				@include('inc.sidebar')
			</div>
		</div>
	</div><!-- container end -->

	<footer id="footer" class="text-center">
		<p>Create by WPmonstR. Copyright &copy; 2017</p>
	</footer>
</body>
</html>