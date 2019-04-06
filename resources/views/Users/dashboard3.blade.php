@extends('layout.app')
@section('content')
<div class="container">
<header>
    @include('assets.navbar')
</header>

<nav>
        @include('assets.navbar2')
</nav>

       
@include('assets.checkout')


    

   <footer>
       @include('assets.footer')
   </footer>
</div>
@endsection