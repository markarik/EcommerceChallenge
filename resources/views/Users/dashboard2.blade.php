@extends('layout.app')
@section('content')
        @include('assets.navbar')   

        <div>
                @include('assets.navbar2')
        </div>
        <div class="container">
    <div class="row">
        
        <div class="col-md-12 col-lg-12">
            @include('assets.cards')
        </div>
      </div>


    
    </div>
   <footer>
       @include('assets.footer')
   </footer>

@endsection