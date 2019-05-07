@extends('layout.app')
@section('content')
<header>
   {{--  @include('assets.navbar') --}}
</header>
<div class="container">

    @include('assets.couresels')


   {{--  <div class="row">
            @forelse ($products->chunk(4) as $item)

            @foreach ($item as $product)
                
           
                    <div class="small-3 medium-3 large-3 columns">
                        
                            <div class="item-wrapper">
                                <div class="img-wrapper">
                                    <a class="button expanded add-to-cart">Add to Cart</a>
                                <a href="#"><img src="{{url('Image',$product->image)}}"/></a>
                                </div>
                                <h5>                    
                                    ${{$product->price}}
                    
                                </h5>
                                <a href="{{url('index')}}">
                                    <h3>{{$product->name}}</h3>
                                </a>
                                <p>
                                {{$product->description}}
                                </p>
                            </div>
                        
                        </div>
            @endforeach  
            @empty
                <h3>No item</h3> 
               
                @endforelse
        </div>   
 --}}
   <footer>
       @include('assets.footer')
   </footer>
</div>
@endsection