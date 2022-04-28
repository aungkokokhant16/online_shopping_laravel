<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MM-Coder-Shop</title>
    <link rel="stylesheet" href="https://demos.creative-tim.com/argon-dashboard/assets/vendor/nucleo/css/nucleo.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/argon-dashboard/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/argon-dashboard/assets/css/argon.min.css?v=1.2.0">
    <link rel="stylesheet" href="../1-online shop/assets/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">


</head>

<body>
    <!-- Header -->
    <div class="container-fluid" id="header">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand text-white" href="#">MM-Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Your Order</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            User
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if (Auth::check())
                            <a class="dropdown-item" href="#">Welcome {{Auth::user()->name}} !</a>
                            <a  class="dropdown-item" href="{{url('/logout')}}" >Logout</a>
                            @else
                            <a  class="dropdown-item" href="#" >Login</a>
                            <a   class="dropdown-item" href="#">Register</a>

                            @endif



                        </div>
                    </li>




                    <li class="nav-item">
                        <a class="nav-link disabled" href="{{url('/cart')}}" tabindex="-1" aria-disabled="true">
                            Cart
                            <small class="badge badge-danger">{{$cart_count}}</small>
                        </a>
                    </li>
                </ul>
                <form class="form-inline" method="GET" action="{{url('product/search')}}" >
                    <input class="form-control mr-sm-2" name="search"  type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h1>Welcome From MM-Coder Shopping Website</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium
                        sequi voluptas similique sed minima rerum labore reprehenderit, illo
                        recusandae quasi tempore placeat aliquam autem, a soluta nisi totam
                        temporibus dolorem!
                    </p>
                    @if (!Auth::check())
                    <a href="{{url('/register')}}" class="btn btn-outline-primary">SignUp</a>
                    <a href="{{url('/login')}}" class="btn btn-primary">Login</a>

                    @endif
                </div>
                <div class="col-md-6 text-center">
                    <img class=""
                        src="https://wp.xpeedstudio.com/seocify/home-fifteen/wp-content/uploads/sites/27/2020/03/home17-banner-image-min.png"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->
    <div class="container mt-3">
        <div class="row">
            <!-- For Category and Information -->
            <div class="col-md-4">
                @if (Auth::check())
                <div class="card">
                    <div class="card-body">

                        <ul class="list-group">
                            <a href="{{url('/cart')}}">
                                <li class="list-group-item bg-dark text-white">
                                    Cart
                                </li>
                            </a>
                            <a href="{{url('/order/pending')}}">
                                <li class="list-group-item bg-dark text-white">
                                    Your Pending Order List
                                </li>
                            </a>

                            <a href="{{'/order/complete'}}">
                                <li class="list-group-item bg-dark text-white">
                                    Your Complete Order List
                                </li>
                            </a>
                            <a href="{{url('profile')}}">
                                <li class="list-group-item bg-danger text-white">
                                    Your Profile Info
                                </li>
                            </a>
                        </ul>

                    </div>
                </div>
                @endif
                @if (Auth::check())
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item bg-primary text-white">
                                All Category

                            </li>
                            @foreach ($category as $c )
                            <a href="{{url('/product/category/'.$c->slug)}}">
                                <li class="list-group-item">
                                    {{$c->name}}
                                    <span class="badge badge-primary float-right">{{$c->product_count}}</span>
                                </li>
                            </a>
                            @endforeach

                        </ul>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                            @yield('content')



                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <script src="https://demos.creative-tim.com/argon-dashboard/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://demos.creative-tim.com/argon-dashboard/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://demos.creative-tim.com/argon-dashboard/assets/js/argon.min.js?v=1.2.0"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>

</html>
