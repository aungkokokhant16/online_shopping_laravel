@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-primary">
                    <div class="card-body text-center">
                        <h4 class="text-white">Total User</h4>
                        <b class="rounded-circle btn btn-sm btn-dark text-white">{{$user_count}}</b>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-warning">
                    <div class="card-body text-center">
                        <h4 class="text-white">Pending User</h4>
                        <b class="rounded-circle btn btn-sm btn-dark text-white">{{$pending_count}}</b>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-success">
                    <div class="card-body text-center">
                        <h4 class="text-white">Complete Order</h4>
                        <b class="rounded-circle btn btn-sm btn-dark text-white">{{$complete_count}}</b>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <h4>Latest Order</h4>
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Total Price</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $o )
                    <tr>
                        <td>{{$o->user->name}}</td>
                        <td>{{$o->product->name}}</td>
                        <td>{{$o->qty}}</td>
                        <td>{{$o->qty* $o->product->price}}</td>
                        <td>
                            @if ($o->status == 'pending')
                                <b class="text-warning">Pending</b>
                                @else
                                <b class=" text-success">Complete</b>
                            @endif
                        </td>

                    </tr>
                    @endforeach
                </tbody>
        </div>
    </div>
@endsection
