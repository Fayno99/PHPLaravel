<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sticky Expanding Sidebar Navigation Plugin Example</title>
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquerysctipttop.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ss-menu.css') }}" rel="stylesheet">
    <style>
        body { background: rgb(24, 31, 37); }
        .lead { font-size: 1.5rem; font-weight: 300;  }
        .container { margin: 150px auto; max-width: 960px; }
    </style>
</head>

<body>
<nav class="ss-menu ">
    <ul>
        <li><a href="#2"> <i class="fab fa-laravel"></i> 1</a></li>
        <li><a href="#8"><i class="fas fa-address-book"></i> Contact</a></li>
        <li><a href="#9"><i class="fas fa-sign-in-alt"></i> Sign-in</a></li>
    </ul>
</nav>

<main class="container">
    <h1>ДЗ 26</h1>
    <h2>  @yield('Tittle')</h2>
    <div id="carbon-block" style="margin:0.1rem auto">

          @yield('content')
    </div>
    <h2>  @yield('Tittle2')</h2>
    <div id="carbon-block" style="margin:0.1rem auto">

        @yield('content2')
    </div>
    <h2>  @yield('Tittle3')</h2>
    <div id="carbon-block" style="margin:0.1rem auto">

        @yield('content3')
    </div>
    <h2>  @yield('Tittle4')</h2>
    <div id="carbon-block" style="margin:0.1rem auto">

        @yield('content4')
    </div>
</main>


<script>
    $(document).ready(function(){

        $(".ss-menu").ssMenu();

    });

</script>


</body>
</html>
