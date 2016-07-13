<!DOCTYPE html>
<head>
	
	<title>MY PAGE</title>
</head>
<body>

	<h1>Hey this is my page!</h1>

	<p>{{ $var1 }}</p>
	@if($var1 == 'Burger')
		I love eat burger
	@endif

	<p>{{ $var2 }}</p>
	<p>{{ $var3 }}</p>

	<ul>
		@foreach ($orders as $order)
			<li>{{ $order->name }}</li>
		@endforeach	
	</ul>

</body>

</html>  