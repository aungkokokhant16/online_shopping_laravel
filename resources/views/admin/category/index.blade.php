@extends('admin.layout.master')

@section('content')
<a href="{{route('admin.category.create')}}" class="btn btn-sm btn-primary">Creat Category</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th style="padding-left: 50px">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $c )
            <tr>
                <td>{{$c->name}}</td>
                <td>
                    <a href="{{route('admin.category.edit',$c->id)}}" class="btn btn-sm btn-success ">update</a>
                    <form action="{{route('admin.category.destroy',$c->id)}}" class=" d-inline" id="delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="#" onclick="confirm('delete?')? document.getElementById('delete').submit() : false " class="btn btn-sm btn-danger ">delete</a>
                    </form>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
@endsection
