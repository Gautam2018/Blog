<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xtra Blog</title>
	{{-- <link rel="stylesheet" href="fontawesome/css/all.min.css">  --}}
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> 
    <link href="{{asset('fontawesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/templatemo-xtra-blog.css')}}" rel="stylesheet">

</head>
<body>
	{{-- include header  --}}
    @include('include.header')
    <div class="container-fluid">
        <main class="tm-main">
       
                  @yield('content')
                  
            {{-- include footer--}}
            @include('include.footer')
        </main>
    </div>
    <script type="text/javascript" src="{{asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/templatemo-script.js') }}"></script>
</body>
</html>