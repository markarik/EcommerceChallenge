
@extends('layout.app')
@section('content')
    
        <header>
            @include('assets.navbar')
        </header>
    <div class="container">
            <h3>Cart Items</h3>

            <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Size</th>
                        </tr>
                    </thead>
             
                    <tbody>
             
                        @foreach($cartItem as $row)
             
                            <tr>
                               
                            <td>{{$row->name}}</td>
                            <td width="70px">
                            
                                    {{ Form::open(['route'=>['cart.update',$row->rowId],'enctype'=>'multipart/form-data','method'=>'PUT']) }}
                                      <input type="number" name="qty" value="{{$row->qty}}"/>
                                      <input type="submit" class="btn btn-sm btn-default" value="Ok"/>
                                    {{ Form::close() }} 
                            
                            </td>
                            <td>{{$row->price}}</td>
                            <td>{{$row->options->has('size') ? $row->options->size : ''}}</td>                               
                            </tr>
             
                        @endforeach
                            <tr>
                                <td></td>
                                <td>{{Cart::count()}}</td> 
                                <td>{{Cart::total()}}</td> 
                            </tr>
                    </tbody>
                    
                 
             </table>

    </div>
    
   
@endsection