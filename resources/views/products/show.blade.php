@extends('layout')

@section ('content')

<div class="col-sm-8">
    <h2>
         {{ $product->name }}
         <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning glyphicon glyphicon-pencil pull-right" style="margin-left:10px;"></a>
         <a href="{{ route('products.index') }}" class="btn btn-info glyphicon glyphicon-arrow-left pull-right" ></a>
    </h2>
    <p>
        {{ $product->short }}
    </p>

        {!! $product->body !!}
</div>

<div class="col-sm-4">
    @include ('products.fragment.aside')
</div>

@endsection