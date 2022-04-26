@extends('user.layout.master')

@section('content')
<div class="row container">
    <!-- Loop Product -->
    @foreach ($products as $p )
    <div class="col-md-4 p-2">
        <a href="{{url('/product/'.$p->slug)}}">
                <div class="card p-2">
                        <img class="card-img-top"
                                src="{{asset($p->image)}}"
                                alt="">
                        <div class="card-body ">
                                <div class="row ">
                                        <div class="col-md-12 d-flex">
                                                <h4>{{$p->name}}
                                                </h4>
                                        </div>
                                </div>
                                <div class="row d-flex">
                                        <div class="col-md-4">
                                                <a href=""
                                                        class=" d-inline text-danger  bg-white d-flex">{{$p->price}}Ks</a>
                                        </div>
                                        <div class="col-md-4">
                                                <a href=""
                                                        class=" text-warning d-flex justify-content-between">{{$p->category->name}}</a>
                                        </div>
                                </div>
                                <div class="row col-md-12 mt-2">
                                    <a href="{{url('/product/cart/add/'.$p->slug)}}" class="btn btn-sm btn-danger text-white  text-center d-flex ml-auto ">Add To Cart</a>
                                </div>


                        </div>
                </div>
        </a>

</div>
    @endforeach



</div>
<div class="row p-3">
    <div class="col-md-6 offset-3">
            {{$products->links()}}
    </div>
</div>
@endsection
