<!doctype html>
<html lang='en'>
<head>
	<meta charset="UTF-8">
	<title> Document</title>
	{!! HTML::style("assets/bootstrap/css/bootstrap.min.css") !!}
	{!!Html::style("assets/datatables/jquery.dataTables.css")!!}
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">-->
	<!--{!! HTML::style("{{ elixir('css/all.css') }}") !!}-->

</head>

<body>
	<div class='container'>
			@yield('content')
	</div>
</body>
	{!!Html::script("assets/js/jquery/jquery-1.8.2.min.js")!!}
	{!!Html::script("assets/datatables/jquery.dataTables.js")!!}
	@yield('footer')
</html>