@if ($errors->any())
    @foreach ($errors->all() as $e )
        <div class="alert alert-danger">
            {{$e}}
        </div>
    @endforeach
@endif


@if (session()->has('danger'))
    <div class="alert alert-danger">
        {{session()->get('danger')}}
    </div>
@endif

