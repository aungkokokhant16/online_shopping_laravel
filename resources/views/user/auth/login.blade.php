@extends('user.layout.master')
@section('content')
    <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @include('user.auth.error')

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{session()->get('success')}}
                            </div>
                        @endif

                        <form action="{{(url('/login'))}}" method="POST">

                            @csrf
                            {{-- @method('POST') --}}

                            <div class="form-group">
                                <label for=""> Enter Email</label>
                                <input type="text" class="form-control" name="email" id="">
                            </div>
                            <div class="form-group">
                                <label for=""> Enter Password</label>
                                <input type="password" class="form-control" name="password" id="">
                            </div>

                            <input type="submit" value="Login" class="btn btn-primary">
                        </form>




                    </div>
                </div>
            </div>
@endsection
