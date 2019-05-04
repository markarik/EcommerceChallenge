@extends('layout.app2')
@section('content')

<h1>Add Product</h1>

<div class="row">

    <div class="col-md-6 col-md-offset">    
        {{ Form::open(['route' => 'product.create','method'=>'post','files'=>true]) }}

            <div class="form-group">
                {{form::label('name','Name')}}
                {{form::text('name',null,array('class' =>'form-control'))}}
            </div>

            <div class="form-group">
                    {{form::label('description','Description')}}
                    {{form::text('description',null,array('class' =>'form-control'))}}
            </div>

            <div class="form-group">
                    {{form::label('size','Size')}}
                    {{form::select('size',['small'=>'Small','medium'=>'Medium','large'=>'Large'],null,array('class' =>'form-control'))}}
            </div>

            <div class="form-group">
                    {{form::label('image','Image')}}
                    {{form::file('image',null,array('class' =>'form-control'))}}
            </div>
        
         {{ Form::close() }}
    </div>
</div>
    
@endsection

