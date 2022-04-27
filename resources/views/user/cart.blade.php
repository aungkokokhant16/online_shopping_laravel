@extends('user.layout.master')

@section('content')
<h2>Your Cart List</h2>
<table class="table table-striped">
        <thead>
                <tr>

                        <th>Name</th>
                        <th>Image</th>
                        <th>Total</th>
                        <th>Price</th>
                </tr>
        </thead>
        <tbody>
                @foreach ($cart as $c )
                <tr>

                    <td>{{$c->product->name}}</td>
                    <td>
                            <img src="{{asset($c->product->image)}}"
                                    style="width:50px;border-radius:30%"
                                    alt="">
                    </td>
                    <td>{{$c->qty}}</td>
                    <td>
                        {{$c->product->price}}
                    </td>
            </tr>
                @endforeach

        </tbody>
</table>

<a href="" class="btn btn-success">Make Order</a>
@endsection
