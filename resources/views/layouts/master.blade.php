<!DOCTYPE html>
<html>
<head>
	<title>
        @yield('title', 'School')
    </title>

	<meta charset='utf-8'>
    @stack('head')
</head>
<body>

	<header>
    <h1>Language School</h1>
    <img src="/img/phone.jpg" id="imgId" title="Contact Us" alt="Contact Us" />
	</header>

	<section>
		@yield('content')
	</section>

	<footer>
		 Copyright &copy; {{ date('Y') }} All Rights Reserved.
	</footer>


</body>
</html>
