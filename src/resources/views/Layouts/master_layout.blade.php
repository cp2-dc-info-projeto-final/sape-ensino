<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap.css -->
    <link href="{{asset('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" type="text/css" rel="stylesheet">
    
    <title>{{config('app.name')}}</title>


</head>
<body>
    <!-- Includes, Yields, Paginas -->
    <section style="min-height:100%">
        @include('Layouts.navbar_layout')
        @yield('modals')
        @yield('content')












    </section>
    

    <!-------------------------------->
    <!-- Bootstrap.js and jquery.js --> 
    <script src="{{asset('js/feather.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js') }}"></script>  
    <script>
        feather.replace()
    </script>

</body>
</html>