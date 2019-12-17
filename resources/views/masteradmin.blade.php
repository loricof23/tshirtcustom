<!doctype html>
<html langv="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      	<link rel="stylesheet" href="{{asset('css/admin.css')}}">
    </head>
    <body>
		<div class="header">
			<span>T-Shirt Customization Administrator</span>
		</div>
		<div class="nav">
			<ul>
				<li>
					<a href="/dashboard">Home</a>
				</li>
				<li>
					<a href="/dashboard/products">View Shirt</a>
				</li>
                <li>
                    <a href="/dashboard/history">View History</a>
                </li>
				<li>
					<a href="/dashboard/contact">Contact</a>
				</li>
				<li>
					<a href="/logout">Logout</a>
				</li>
			</ul>
		</div>
        <div class="image"></div>
        <div class="content">
            @yield('admin')
        </div>

		<div class="footer">
			<span>&copy;Copyright</span>
		</div>
	</body>
</html>
