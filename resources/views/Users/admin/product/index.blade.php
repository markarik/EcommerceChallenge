@extends('layout.app2')
@section('content')

<h2>Products</h2>
<table id="users-table" class="table table-hover table-condensed" style="width:80%">  
        <thead>  
            <tr>  
                <th>Id</th>                   
                <th>Name</th>
                <th>Created</th> 
                <th>Updated</th>
                <th>Action</th>  
              </tr>  
        </thead>
        <tbody>
            @if(count($products)>1)
  
              @foreach ($products as $product)
                <tr>
                  <td>{{$product->id}}</td>                    
                  <td>{{$product->name}}</td>
                  <td>{{$product->created_at}}</td>
                  <td>{{$product->updated_at}}</td>
                  <td><a href="/posts/{{$product->id}}">Delete</a></td>                  
                </tr>         
              @endforeach
            @else
              <p>No Category Found</p>
            @endif
        </tbody>
    
      </table>
  
      
    
        
@endsection

@section('js')

      <script>
              $(document).ready( function () {
               $('#users-table').DataTable();
              } );
      </script>
  
@endsection