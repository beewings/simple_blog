<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('head.title')</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	@yield('head.css')
</head>

<body);">
		@yield('body.content')



	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/jquery.min.js"></script>
	@yield('body.js')
</body>
</html>