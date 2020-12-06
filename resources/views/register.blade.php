<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="resources/css/style.css">

    <link rel="stylesheet" href="resources/font-awesome-4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Grocery</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff;">
    <div class="container nav-font">
        <div class="d-flex justify-content-start ">
            <a class="navbar-brand" href="#" style="font-size: 32px;">Grocery</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            </button>
        </div> <!-- navbar left side -->
        <div class="d-flex justify-content-start" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 18px;" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 18px;" href="/">Log in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 18px;" href="register.html">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 18px;" href="#">Cart</a>
                </li>
            </ul>
            <form class="form-inline ml-3 my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div> <!-- navbar right side -->
    </div> <!-- container -->
</nav> <!-- Navbar -->
<div class="py-3" style="background-color: #79eb7d;">

</div>
<section class="mt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Repeat Password</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Input your addres">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="inputState">City</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose</option>
                                <option>Almaty</option>
                                <option>Nur-Sultan</option>
                                <option>Kostanay</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div> <!-- col-md-6 -->
        </div> <!-- row -->
    </div> <!-- container -->
</section> <!-- Registration section -->
<footer class="fixed-bottom footeer pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex justify-content-start">
                    <h4>Get Social With Us:</h4>
                    <a href="#"><i class="fa fa-facebook fa-1x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-1x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-1x" aria-hidden="true"></i></a>
                </div>
            </div> <!-- col-md-6 -->
            <div class="col-md-6">
                <div class="d-flex justify-content-end" style="font-size: 18px;">
                    <a class="ref" href="#">Contact Us</a>
                    <a class="ml-3 ref" href="#">FAQ</a>
                </div> <!-- col-md-6 -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    <div class="container-fluid py-3" style="background-color: #79eb7d;">
        <div class="text-center mt-2" style="font-size: 16px;">
            © 2020 - 2021  Grocery
        </div>
    </div> <!-- container-fluid -->
</footer> <!-- footer -->
</body>
</html>
