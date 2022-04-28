@extends('user.layout.master')
@section('content')
<div class="container mt-3">
    <div class="row">
        <!-- For Category and Information -->
        {{-- <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item bg-dark text-white">
                            Your Order List
                        </li>
                        <li class="list-group-item bg-danger text-white">
                            Your Profile Info
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item bg-primary text-white">
                            All Category

                        </li>
                        <li class="list-group-item">
                            Man Shirts
                            <span class="badge badge-primary float-right">4</span>
                        </li>
                        <li class="list-group-item">
                            Man Shirts
                            <span class="badge badge-primary float-right">4</span>
                        </li>
                        <li class="list-group-item">
                            Man Shirts
                            <span class="badge badge-primary float-right">4</span>
                        </li>
                        <li class="list-group-item">
                            Man Shirts
                            <span class="badge badge-primary float-right">4</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @include('user.auth.error')


                    <form action="{{url('profile')}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        {{-- @method('POST') --}}
                        @include('inc.error')
                        <div class="form-group">
                            <label for=""> Enter Name</label>
                            <input type="text" value="{{$user->name}}" class="form-control" name="name" id="">
                        </div>
                        <div class="form-group">
                            <label for=""> Enter Email</label>
                            <input type="email"  value="{{$user->email}}}" class="form-control" name="email" id="">
                        </div>
                        {{-- <div class="form-group">
                            <label for=""> Enter Password</label>
                            <input type="password" class="form-control" name="password" id="">
                        </div> --}}
                        <div class="form-group">
                            <label for="">Choose Image</label>
                            <input type="file" name="image" class="form-control" id="">
                            <img src="{{asset($user->image)}}"  style="width: 50px; border-radius:10%" alt="">
                        </div>
                        <input type="submit" value="Update" class="btn btn-primary">
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection


