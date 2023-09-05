<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  @include('templates.admincss')
</head>

<body>
    @include('templates.adminheader')
    
    @yield('admin')
@include('templates.adminjs')
  
</body>

</html>