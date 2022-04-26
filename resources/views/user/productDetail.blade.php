@extends('user.layout.master')
@section('content')

    <div class="row">
            <div class="col-md-12">
                    <h1>{{$product->name}}</h1>
            </div>
    </div>

    <div class="card">
            <div class="card-body">
                    <div class="row">
                            <div class="col-md-4">
                                    <a href=""
                                            class="btn btn-primary rounded">
                                            <i
                                                    class="fas fa-cart-arrow-down"></i>
                                    </a>
                            </div>
                            <div class="col-md-4">
                                    <small>
                                            <i class="fas fa-eye"></i>
                                            {{$product->view_count}}
                                    </small>
                            </div>
                            <div class="col-md-4">
                                    <a href=""
                                            class="badge badge-primary">{{$product->category->name}}</a>
                            </div>
                    </div>
            </div>
    </div>

    <div class="row">
            <div class="col-md-12">
                    <img src="{{asset($product->image)}}" class="w-50" alt="">
            </div>
    </div>

    <div class="row">
            <div class="col-md-12">
                    <p>
                            Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Repellendus, consequuntur?
                            Accusamus modi placeat perferendis vel facere
                            voluptates tenetur ratione dolores culpa, veniam
                            porro delectus neque ab, provident, eveniet qui
                            ipsum?
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Adipisci autem, debitis, enim
                            commodi eius ipsa numquam repudiandae totam
                            dolorem temporibus sint repellat nemo dicta
                            aliquid cumque sapiente quae ad quo.
                    </p>
            </div>
    </div>


@endsection
