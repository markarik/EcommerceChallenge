@extends('layout.app2')


@section('content')


<div class="container">

        <table id="users-table" class="table table-hover table-condensed" style="width:80%">  
          <thead>  
              <tr>  
                  <th>Id</th>                   
                  <th>Name</th>
                  <th>Created</th>                  
              </tr>  
          </thead>
          <tbody>
              @if(count($categories)>1)
    
                @foreach ($categories as $category)
                  <tr>
                    <td>{{$category->id}}</td>                    
                    <td>{{$category->name}}</td>
                    <td>{{$category->created_at}}</td>
                    <td><a href="/posts/{{$category->id}}">View</a></td>                  
                  </tr>         
                @endforeach
              @else
                <p>No Category Found</p>
              @endif
          </tbody>
      
        </table>
    
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add Category
               </button>
      
      </div>        
@endsection
@section('js')

        <script>
                $(document).ready( function () {
                 $('#users-table').DataTable();
                } );
        </script>
    
@endsection


 {{-- modal --}}

          <!-- Button trigger modal -->
         
               
               <!-- Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                       @include('Users.admin.category.categoryform')
                     </div>
                     
                   </div>
                 </div>
               </div>