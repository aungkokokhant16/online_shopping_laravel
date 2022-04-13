@extends('admin.layout.master')

@section('content')
<a href="{{route('admin.category.index')}}" class="btn btn-sm btn-primary">All Category</a>

<form action="{{route('admin.category.update',$cat->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Enter Name</label>
        <input type="text" name="name" value="{{$cat->name}}" class="form-control" id="">
    </div>
    <input type="submit" name="" value="create" class="btn btn-sm btn-dark">
</form>
@endsection
