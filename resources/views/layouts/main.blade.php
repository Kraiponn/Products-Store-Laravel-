<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KSDev-Products</title>

    {{--  <link rel="stylesheet" href="{{ asset('css/style.css') }}">  --}}
    {{--  {{ Html::style('css/style.css') }}  --}}
    {{ Html::style('css/bootstrap.min.css') }}
    {{ Html::style('css/alertify.min.css') }}
    {{ Html::style('css/themes/default.min.css') }}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    {{ Html::style('css/style.css') }}
    {{--  {{ Html::style('css/app.css') }}  --}}
    @yield('header')

</head>
<body>
    @include('layouts.header2')
    @yield('content')

    {{ Html::script('js/jquery-3.2.1.min.js') }}
    {{ Html::script('js/popper.min.js') }}
    {{ Html::script('js/bootstrap.min.js') }}
    
    {{ Html::script('js/alertify.min.js') }}
    {{ Html::script('js/sweetalert2.all.js') }}
    @yield('footer')
</body>
</html>