<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#avored-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="avored-navbar">
            <ul class="main-navbar navbar-nav mr-auto">
                    <li class="nav-item">        
                             <a class="nav-link navbar2_class" href="https://demo.avored.com/my-account">My Account</a>
                    </li>
                    <li class="nav-item">       
                             <a class="nav-link navbar2_class" href="{{route('cart.index')}}">Cart <span class="badge badge-primary fill">
                                     {{Cart::count()}}
                                </span> </a>      
                    </li>
                    <li class="nav-item">
                            <a class="nav-link navbar2_class" href="{{url('dashboard2')}}">Laptops</a>
                    </li>
                    <li class="nav-item">        
                            <a class="nav-link navbar2_class" href="{{url('accessories')}}">Accessories</a>                
                    </li>
                    <li class="nav-item">        
                            <a class="nav-link navbar2_class" href="{{url('items')}}">Others</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link navbar2_class" href="{{url('checkout')}}">Checkout</a>                
                    </li>
            </ul>
        </div>
    </div>
</nav>

