<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title','EBM')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    @yield('links')

  </head>
    <body>
        <div>
          <header id="header">
            <a class="logo" href="{{ route('home') }}">English Biscuits Manufacturer</a>
          </header>
            @yield('header')

        </div>
        

            @yield('content')

        <footer id="footer">
        <div class="inner">
          <div class="copyright">
            Copyright &copy 2019 English Biscuit Manufacturers (Private) Limited
          </div>
        </div>
      </footer>
    </body>
</html>
