<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Office Myanmar | @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href={{ asset("vendor/bootstrap/css/bootstrap.min.css") }} rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href={{ asset("css/blog-home.css") }} rel="stylesheet">

    {{--datetime picker--}}
    <link rel="stylesheet" href={{ asset("datetime-picker/jquery-ui.css") }}>

    <script src={{ asset("https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js") }}></script>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Office Myanmar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request :: is('/')? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item {{ Request :: is('about')? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item {{ Request :: is('contact')? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                @if(Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @hasanyrole('developer')
                            <a class="dropdown-item" href="{{ route('manager.dashboard') }}">Developer</a>
                            @endhasanyrole
                            @hasanyrole('admin')
                            <a class="dropdown-item" href="{{ route('manager.dashboard') }}">Admin</a>
                            @endhasanyrole
                            @hasanyrole('officer')
                            <a class="dropdown-item" href="{{ route('manager.dashboard') }}">Officer</a>
                            @endhasanyrole
                            <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                            <a class="dropdown-item" href="{{ route('changePasswordForm') }}">Change Password</a>
                        </div>
                    </li>
                @else
                    <li class="nav-item {{ Request :: is('register')? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item {{ Request :: is('login')? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    @yield('content')
</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; {{ date('Y') }} developed by Kaung San Hein(CS) Phone:09782696857</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src={{ asset("vendor/jquery/jquery.min.js") }}></script>
<script src={{ asset("vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>
<script src={{ asset("datetime-picker/jquery.js") }}></script>
<script src={{ asset("datetime-picker/jquery-ui.js") }}></script>

<script type="text/javascript">
    $(document).ready(function ()
    {
        $('select[name="srs"]').on('change',function(){
            var srsID = $(this).val();
            if(srsID)
            {
                $.ajax({
                    url : 'get/states/' +srsID,
                    type : "GET",
                    dataType : "json",
                    success:function(data)
                    {
                        console.log(data);
                        $('select[name="states_divisions"]').empty();
                        $.each(data, function(key,value){
                            $('select[name="states_divisions"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            }
            else
            {
                $('select[name="states_divisions"]').empty();
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#start_date").datepicker();
        $("#end_date").datepicker();
    });
</script>
</body>

</html>
