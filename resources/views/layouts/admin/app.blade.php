<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include('layouts.admin.common.header')		
	@yield('styles')


</head>
<body>
	

	@include('layouts.admin.common.topheader')
	@include('layouts.admin.common.sidebar')
	@yield('content')
	@include('layouts.admin.common.footer')
	@include('layouts.admin.common.endjs')
	@yield('scripts')

	
</body>
</html>
{{-- @include('layouts.admin.common.footer')
@include('layouts.admin.common.endjs')
@yield('scripts') --}}