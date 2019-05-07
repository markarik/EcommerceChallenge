@extends('layout.app2')
@section('content')

<h2>Products</h2>
<ul>
        @if (count($products)>0)

        @foreach ($products as $product)
    <li>
    <h4>Name of Product :{{$product->name}}</h4>
        
    </li>
    @endforeach
    @else
    <h2>No Products</h2>
@endif
</ul>

    

@endsection
