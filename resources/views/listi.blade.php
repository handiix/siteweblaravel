<!DOCTYPE HTML>

<html>
	
	<header>
		<title> View listi</title>

	</header>

	<body>
		
	<h1>La liste de contact</h1>

		<ul>
	@foreach($x as $x)
		<li>
			<h3>
				{{ $x -> titre}}
			</h3>
			<p>{{ $x -> discription }}</p>
			<hr>
		</li>
	@endforeach
		</ul>

	</body>




</html>