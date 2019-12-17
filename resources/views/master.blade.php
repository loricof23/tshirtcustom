<!doctype html>
<html langv="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
      	<link rel="stylesheet" href="{{asset('css/user.css')}}">
    </head>
    <body>
		<div class="header">
			<span>T-Shirt Customization</span>
		</div>
		<div class="nav">
            <ul>
				<li>
					<a href="/">Home</a>
				</li>
				<li>
					<a href="/create">Create T-Shirt</a>
				</li>
				<li>
					<a href="/about">About</a>
				</li>
				<li>
					<a href="/contact">Contact</a>
				</li>
			</ul>
		</div>
        <div class="image"></div>
        <div class="content">
            @yield('view')
        </div>
		<div class="footer">
			<span>&copy;Copyright</span>
		</div>
	</body>
</html>
