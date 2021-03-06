<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">


    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
--}}
    <!-- JS, Popper.js, and jQuery -->
    {{--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Grocery</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff;">
    <div class="container nav-font">
        <div class="d-flex justify-content-start ">
            <a class="navbar-brand" href="/" style="font-size: 32px;">Grocery</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            </button>
        </div> <!-- navbar left side -->
        <div class="d-flex justify-content-start" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 18px;" href="/">Home</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 18px;" href="/login">Log in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 18px;" href="/register">Register</a>
                </li>
                @endguest
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 18px;" href="/basket">Cart</a>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                @auth
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 18px;" href="{{ route('admin') }}">Admin Panel</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="font-size: 18px;" href="{{ route('get-logout') }}">Logout</a>
                </li>
                @endauth
            </ul>
        </div> <!-- navbar right side -->
    </div> <!-- container -->
</nav> <!-- Navbar -->
<nav style="background-color: #79eb7d;">
    <div class="container nav-font">
        <div id="navbarNavDropdown">
            <ul class="nav justify-content-between">
                <li class="nav-item">
                    <a class="nav-link my-links" href="#">Prepared Food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link my-links" href="#">Fruit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link my-links" href="#">Vegetables</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link my-links" href="#">Seafood</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link my-links" href="#">Dairy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link my-links" href="#">Bakery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link my-links" href="#">Cheese</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link my-links" href="#">Wines</a>
                </li>
            </ul>
        </div> <!-- navbar content -->
    </div> <!-- container -->
</nav> <!-- Navbar with categories -->

<div class="pb-5">
    @yield('main_content')
</div>


<footer class="footeer container-fluid" style="position: fixed; left: 0; bottom: 0;">
    <div class="container-fluid py-2" style="background-color: #79eb7d;">
        <div class="text-center" style="font-size: 16px;">
            © 2020 - 2021  Grocery
        </div>
    </div> <!-- container-fluid -->
</footer> <!-- footer -->
</body>
</html>
