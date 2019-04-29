@extends('layout.app')
@section('content')

<header>
    @include('assets.navbar')
</header>
<div class="container">
<nav>
        @include('assets.navbar2')
</nav>
       
    @include('Users.Pages.accessories.accessoriescards')    

   <footer>
       @include('assets.footer')
   </footer>
</div>
@endsection