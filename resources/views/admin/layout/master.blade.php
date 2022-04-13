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
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group">
                            <a>
                                <li class="list-group-item bg-primary text-white">
                                    Admin Management
                                </li>
                            </a>
                            <a href="{{url('/admin')}}">
                                <li class="list-group-item">
                                    Dashboard
                                </li>
                            </a>
                            <a href="{{route('admin.category.index')}}">
                                <li class="list-group-item">
                                    Category
                                </li>
                            </a>
                            <a href="{{route('admin.product.index')}}">
                                <li class="list-group-item">
                                    Product
                                </li>
                            </a>
                            <a href="{{url('admin/order/pending')}}">
                                <li class="list-group-item">
                                    Pending Order
                                </li>
                            </a>
                            <a href="{{url('admin/order/complete')}}">
                                <li class="list-group-item">
                                    Complete Order
                                </li>
                            </a>
                            <a href="{{url('admin/user')}}">
                                <li class="list-group-item">
                                    User List
                                </li>
                            </a>
                            <a href="{{url('admin/logout')}}">
                                <li class="list-group-item">
                                    Logout
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @include('inc.error')
                       @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/argon.min.js')}}"></script>
</body>

</html>
