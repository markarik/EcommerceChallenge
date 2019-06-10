

  <nav class="navbar navbar-expand-md navbar-dark fixed-top  bg-dark">
    <a class="py-2" href="{{url('dashboard')}}">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('dashboard')}}">Home</a>
        </li>       
      </ul>
   
<ul class="list_class">
      <li class="nav-item">       
          <a class="nav-link navbar2_class" href="{{route('cart.index')}}">Cart <span class="badge badge-primary fill">
                  {{Cart::count()}}
             </span> </a>      
      </li>

      <li class="nav-item">
              <a class="nav-link navbar2_class" href="#">Goals</a>
      </li>

      <li class="nav-item">        
              <a class="nav-link navbar2_class" href="#">About</a>                
      </li>

      <li class="nav-item">        
              <a class="nav-link navbar2_class" href="#">Contacts</a>
      </li>

      <li class="nav-item">
              <a class="nav-link navbar2_class" href="#">Achievements</a>                
      </li>
    </ul>
     
    </div>
  </nav>



  
