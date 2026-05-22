<!-- Stored in resources/views/child.blade.php -->

@extends('admin.layouts.admin')

@section('title', 'Products')


@section('content')

 <div class="row">
 <div class="col">


    
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Products</h3>
                    <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <a href="/myadmin/Products/create" class="btn btn-success">New </a>
                     <div class="input-group-append">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="">

              @if (session('success'))

              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                {{ session('success') }}
              </div>
          
              @endif

              
           
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                 
                    <th>image</th>
                    <th> operation </th>
                  </tr>
                </thead>
                <tbody>

                      @foreach ($products as $item)
                        <tr>
                        <td>  {{$item->id }} </td>
                        <td>  {{$item->title }} </td>
                       
                        <td>  
                        <img src="/uploads/product/imagecover/{{$item->image_cover}}" alt="profile Pic" height="100" width="200">
                        </td>
                    <td>   <a class="btn btn-danger"  href="/myadmin/Products/{{$item->id }}"> Delete</a> </td>

                        <td>   <a class="btn btn-primary"  href="/myadmin/Products/{{$item->id }}"  href="">Details </a> </td>

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