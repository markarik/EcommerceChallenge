
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
                            <td>{{$row->Qty}}</td>
                            <td>{{$row->Price}}</td>
                            <td>{{$row->options->has('size') ? $row->options->size : ''}}</td>                               
                            </tr>
             
                        @endforeach
             
                    </tbody>
                    
                 
             </table>

    </div>
   
@endsection