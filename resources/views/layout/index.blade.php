<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Coron - Fashion eCommerce Bootstrap4 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.png">
		
		<!-- all css here -->
       
        <script src="assets\js\vendor\modernizr-2.8.3.min.js"></script>
    </head>
    @include('templates.css')
    <body>
    @include('templates.header')
    @yield('content')
    @include('templates.footer')
    @include('templates.js')
                      
      
		
		<!-- all js here -->
       
    </body>
</html>
