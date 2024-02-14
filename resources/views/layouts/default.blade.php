<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>
    <div class="loader"></div>
   <header>
       @include('includes.header')
   </header>
   <main id="main" data-barba="wrapper">

        <div data-barba="container" data-barba-namespace="home">
            @yield('content')
        </div>
    </main>
   <footer>
       @include('includes.footer')
   </footer>

</body>
</html>
