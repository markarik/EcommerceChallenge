<div class="row">
        @forelse ($products as $product)
    <div class="small-3 columns">
           
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">Add to Cart</a>
            <a href="#"><img src="{{url('Image',$product->image)}}"/></a>
            </div>
            <h5>$19.99</h5>
            <a href="{{url('index')}}">
                <h3>{{$product->name}}</h3>
            </a>
            <p>
              {{$product->description}}
            </p>
        
        </div>
        @empty
            <h3>No item</h3>  
            @endforelse
    </div>   
    {{--  <ul>
                        @if (count($products)>0)
                
                        @foreach ($products as $product)
                    <li>
                    <h4>Name of Product :{{$product->name}}</h4>
                        
                    </li>
                    @endforeach
                    @else
                    <h2>No Products</h2>
                @endif
                </ul> --}}