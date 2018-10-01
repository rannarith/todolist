<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
    
    @yield('content')
    
    <script src="{{ asset('js/app1.js') }}"> </script>
    <script src="{{ asset('js/bootstrap.min.js') }}"> </script>

  </body>
</html>