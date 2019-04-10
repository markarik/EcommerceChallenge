@extends('layout.app')
@section('content')



  {{--   @include('assets.navbar2') --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light nav_detail">
        <div class="container">
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#avored-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="avored-navbar">
                <ul class="main-navbar navbar-nav mr-auto">
                        <li class="nav-item">        
                                 <a class="nav-link  nav_detail_align" href="#">My Account</a>
                        </li>
                        <li class="nav-item">        
                                 <a class="nav-link  nav_detail_align" href="{{url('cart')}}">Cart <span class="badge badge-primary fill">0</span> </a>      
                        </li>
                        <li class="nav-item">
                                <a class="nav-link  nav_detail_align" href="{{url('dashboard2')}}">Laptops</a>
                        </li>
                        <li class="nav-item">        
                                <a class="nav-link  nav_detail_align" href="{{url('accessories')}}">Accessories</a>                
                        </li>
                        <li class="nav-item">        
                                <a class="nav-link  nav_detail_align" href="{{url('items')}}">Others</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link  nav_detail_align" href="{{url('dashboard3')}}">Checkout</a>                
                        </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container">
<div class="row">
    <div class="small-5 small-offset-1 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a href="#">
                     <img src="/images/1.jpg"/>
                </a>
            </div>
        </div>
    </div>
    <div class="small-6 columns">
        <div class="item-wrapper">
            <h3 class="subheader">
               <span class="price-tag">$20</span> Mc-Mykey Designed Shirt
            </h3>
            <div class="row">
                <div class="large-12 columns">
                    <label>
                        Select Size
                        <select>
                            <option value="small">
                                Small
                            </option>
                            <option value="medium">
                                Medium
                            </option>
                            <option value="large">
                                Large
                            </option>
                           
                        </select>
                    </label>
                    <a href="#" class="button  expanded">Add to Cart</a>
                </div>
            </div>
        <p class="text-left subheader"><small>* Designed by <a href="https://www.youtube.com/webdevmatics">Webdevmatics</a></small></p>

        </div>
    </div>
</div>

</div>
    
@endsection