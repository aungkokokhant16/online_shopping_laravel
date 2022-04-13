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

    <div class="container p-3">
        <div class="row">
            <div class="col-md-4 offset-4">
                <div class="card">
                    <div class="card-header">Login To Admin</div>
                    <div class="card-body">

                        <form action="{{url('/admin/login')}}" method="POST">

                            @csrf
                            {{-- @method('POST') --}}
                            @include('inc.error')
                            <div class="form-group">
                                <label for=""> Enter Email</label>
                                <input type="text" class="form-control" name="email" id="">
                            </div>
                            <div class="form-group">
                                <label for=""> Enter Password</label>
                                <input type="text" class="form-control" name="password" id="">
                            </div>
                            <input type="submit" value="Login" class="btn btn-primary">
                        </form>
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
