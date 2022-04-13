@extends('admin.layout.master')

@section('content')
<a href="{{route('admin.product.create')}}" class="btn btn-sm btn-primary">Creat Product</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Category</th>
                <th style="padding-left: 50px">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $c )
            <tr>
                <td>{{$c->name}}</td>
                <td>
                    <img src="{{asset($c->image)}}" style="width: 40px; border-radius:20px "   alt="">
                </td>
                <td>
                    {{$c->category->name}}
                </td>
                <td>
                    <a href="{{route('admin.product.edit',$c->id)}}" class="btn btn-sm btn-success ">update</a>
                    <a href="{{route('admin.product.show',$c->id)}}" class="btn btn-sm btn-dark ">detail</a>
                    <form action="{{route('admin.product.destroy',$c->id)}}" class=" d-inline" id="delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="#" onclick="confirm('delete?')? document.getElementById('delete').submit() : false " class="btn btn-sm btn-danger ">delete</a>
                    </form>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
    {{$products->links()}}
@endsection
