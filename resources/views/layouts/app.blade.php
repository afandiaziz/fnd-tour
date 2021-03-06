<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
	<meta name="author" content="AfandiAziz">
   <meta name="description" content="FND Tour - Cari Paket Travel & Umrah Murah dengan kustomisasi dengan pelayanan terbaik">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>@yield('title')</title>
   @stack('prepend-style')
   @include('includes.style')
</head>

<body>
   @include('includes.nav')
   @yield('content')
   @include('includes.footer')
   @include('includes.script')
   @stack('addon-script')
</body>

</html>