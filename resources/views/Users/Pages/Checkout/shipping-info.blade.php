@extends('layout.app')
@section('content')

@include('assets.navbar')  
    @include('assets.navbar2')

   
       
 <div class="row">
   <div class="small-6 small-centered columns">
       <h3>Shipping Info</h3>
      
      {{ Form::open(['route'=>'adress.store','enctype'=>'multipart/form-data','method'=>'POST']) }}
                {!! csrf_field() !!}
                <div class="container-fluid">
                   
                    <div class="row">
                      <div class="col-sm-4">
                            <div class="form-group">
                                    {{ Form::label('addressline', 'Address Line') }}
                         
                                    {{ Form::text('addressline', null, array('class' => 'form-control')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('city', 'City') }}
                                    {{ Form::text('city', null, array('class' => 'form-control')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('state', 'State') }}
                                    {{ Form::text('state', null, array('class' => 'form-control')) }}
                                </div></div>
                      <div class="col-sm-8">
        <div class="form-group">
           {{ Form::label('zip', 'Zip') }}

           {{ Form::text('zip', null, array('class' => 'form-control')) }}
       </div>
       <div class="form-group">
           {{ Form::label('country', 'Country') }}
           {{ Form::text('country', null, array('class' => 'form-control')) }}
       </div>
       <div class="form-group">
           {{ Form::label('phone', 'Phone') }}
           {{ Form::text('phone', null, array('class' => 'form-control')) }}
       </div></div>
                    </div>
                  </div>

       
       
       {{-- {{ Form::submit('Proceed to Payment', array('class' => 'button success')) }} --}}

       {{form::submit('create',array('class' =>'btn btn-secondary'))}}
      {{--  {!! Form::close() !!} --}}
       </div>
</div> 

    
@endsection










