<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    {{--  <link rel ="stylesheet"  href="./bootstrap/dist/css/bootstrap.min.css">  --}}
    <link rel ="stylesheet"  href= "{{asset('bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel ="stylesheet"  href= "{{asset('css/app.css')}}">
    <link rel ="stylesheet"  href= "{{asset('css/style.css')}}">
    <link rel ="stylesheet"  href= "{{asset('font/css/font-awesome.min.css')}}">
    
    
    
    
</head>
<body>
   
   
   

      
   
    
    @yield('createpost')    
    @yield('header')  
    @yield('content')
 
    @include('includes.footer')
         
    
  
<script src="{{asset('js/app.js')}}"></script>
@include('includes.scripts')

</body>
</html>