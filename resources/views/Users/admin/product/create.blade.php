@extends('layout.app2')
@section('content')

<h1>Add Product</h1>

<div class="row">
        {{ Form::open(['route' => 'product.create','method'=>'post','files'=>true]) }}
        //
    {{ Form::close() }}
</div>
    
@endsection

