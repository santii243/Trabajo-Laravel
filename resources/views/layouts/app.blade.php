<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <!--link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else

                            <li><a href="{{ url('/students') }}" class="btn btn-primary btn-sm btn-flat"><span><b>Students</b></span></a></li>
                            <li><span class="separador">&nbsp;</span></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

<!-- Scripts -->
 

  <script src="//code.jquery.com/jquery-1.12.3.js"></script>

  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>


</body>
</html>

<script>

    $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
        }
    }); 

  $(document).ready(function() {
    $('#proceso').DataTable(
    {
        "searching": true, // Search box and search function will be actived
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "processing": true,  // Show processing 
        "pageLength": 7,    // 5 rows per page
    });
    $('#fuentesvw').DataTable(
    {
        "searching": true, // Search box and search function will be actived
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "processing": true,  // Show processing 
        "pageLength": 7,    // 5 rows per page
    });
    $('#metodosvw').DataTable(
    {
        "searching": true, // Search box and search function will be actived
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "processing": true,  // Show processing 
        "pageLength": 7,    // 5 rows per page
    });
    $('#relacionvw').DataTable(
    {
        "searching": true, // Search box and search function will be actived
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "processing": true,  // Show processing 
        "pageLength": 7,    // 5 rows per page
    });
    $('#serviciovw').DataTable(
    {
        "searching": true, // Search box and search function will be actived
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "processing": true,  // Show processing 
        "pageLength": 6,    // 5 rows per page
    });
    $('#allservices').DataTable(
    {
        "searching": true, // Search box and search function will be actived
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "processing": true,  // Show processing 
        "pageLength": 7,    // 5 rows per page
    });
} );
 </script>
