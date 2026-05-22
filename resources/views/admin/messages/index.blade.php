<!-- Stored in resources/views/child.blade.php -->

@extends('admin.layouts.admin')

@section('title', 'Messages')


@section('content')
<style>
    .tooltip-pr {
  max-width: 220px;
  position: relative;
  display: inline-block;
  height: 20px;
  overflow: hidden;
  /*border: 1px solid;*/
}
.tooltip-pr .tooltiptext-pr {
  visibility: hidden;
  background-color: black;
  color: #fff;
  position: absolute;
  left: 0;
  top: 0;
}
.tooltip-pr:hover .tooltiptext-pr {
  visibility: visible;
}
.tooltip-pr:hover {
  overflow: visible;
}
</style>
 <div class="row">
 <div class="col">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>
                    <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  
                     <div class="input-group-append">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 400px;">
              <table  class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;" >
                <thead>
                  <tr>
                    <th  style="width: 50px;">ID</th>
                    <th  style="width: 77px;">subject</th>
                    <th  style="width: 150px;">message</th>
                    <th  style="width: 50px;">email</th>
                    <th style="width: 50px;">phone</th>    
                    <th  style="width: 50px;"> name </th>
                    <th  style="width: 77px;"> created_at </th>
                     <th  style="width: 77px;">Delete</th>
                  </tr>
                </thead>
                <tbody>

                      @foreach ($messages as $item)
                        <tr>
                        <td>  {{$item->id }} </td>
                        <td>  
                        <div class="tooltip-pr">
  {{$item->subject }} 
  <span class="tooltiptext-pr">
    {{$item->subject }} 
  </span>
</div>
                       </td>
                        <td> 
                              <div class="tooltip-pr">
  {{$item->message }}
  <span class="tooltiptext-pr">
   {{$item->message }}
  </span>
</div>
 </td>
                        <td>  {{$item->email }} </td>
                        <td>  {{$item->phone }} </td>
                        <td>  {{$item->name }} </td>
                        <td>  {{$item->created_at }} </td>
                         <td>
           <form action="{{ route('deleteMessage', $item->id) }}" method="POST" onsubmit="return confirmDelete();">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
      </td>    
                      </tr>                       
                      @endforeach
                </tbody>
              </table>


            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>


 </div>
 
 </div>
   



@endsection
@section('scripts')

<script>
     function confirmDelete() {
        return confirm('Are you sure you want to delete this order?');
    }

  </script>
@endsection