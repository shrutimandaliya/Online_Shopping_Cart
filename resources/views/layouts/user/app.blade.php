<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="template-1 template-all">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Abani HTML</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	@include('layouts.user.common.header')
	@yield('style')
</head>


<body class=" cms-index-index cms-abani-home02">
	{{-- <div class="wrapper">
		<noscript>
			<div class="global-site-notice noscript">
				<div class="notice-inner">
					<p> <strong>JavaScript seems to be disabled in your browser.</strong><br /> You must have JavaScript enabled in your browser to utilize the functionality of this website.</p>
				</div>
			</div> 
		</noscript>
		<div class="page">
		</div>
	</div> --}}
{{-- </body> --}}
	{{-- @include('layouts.user.common.header')		
	@yield('styles') --}}

	@include('layouts.user.common.topheader')
	<br>
	<br>
	<br>
	<br>
	<br>
	
	{{-- @include('layouts.user.common.sidebar') --}}
	@yield('content')
	@include('layouts.user.common.footer')
	@include('layouts.user.common.endjs')
	@yield('scripts')

	
</body>
</html>