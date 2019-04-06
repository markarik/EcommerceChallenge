@extends('layout.app')
@section('content')
<header>
    @include('assets.navbar2')
</header>
<div class="container">

    <div class="row">
        <div class=" col-md-3 col-lg-3" style="background-color:yellow;">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <div class="col-md-9 col-lg-9">
            @include('assets.cards')
        </div>
      </div>


    

   <footer>
       @include('assets.footer')
   </footer>
</div>
@endsection