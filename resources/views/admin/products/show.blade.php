
@extends('admin.layouts.admin')

@section('title', 'Products')


@section('content')


<div class="card card-solid">
    <div class="card-body pb-0">
      <div class="row d-flex align-items-stretch">

        <div class="col-10   m-auto align-items-stretch">
          <div class="card bg-light">
            <div class="card-header text-muted border-bottom-0">
             {{$product->title}}
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-7">
                 
                <h4>   {{$product->details}} </h2>

                </div>
                <div class="col-5 text-center">
                <img src="/uploads/product/imagecover/{{$product->image_cover}}"  alt="" class="img-circle img-fluid">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="text-center">
               
                <form method="POST" action="{{ route('Products.destroy', $product->id) }}">
                  @csrf
                  {{ method_field('DELETE') }}

                  <button class="btn btn-sm btn-danger">
                    <i class="fas fa-trash"></i> Delete 
                  </button>
                  <a href="/myadmin/Products" class="btn btn-sm btn-primary">
                    <i class="fas fa"></i> View All  Products   
                  </a>

                </form>
                

                <form role="form" method="post"  action="{{ route('Products.uploadProductImage') }}"     enctype="multipart/form-data" >
                  @csrf

                  <input type="hidden"  value="{{$product->id}}"  name="id">
                  <div class="input-group p-5">
                    <div class="custom-file">
                      <input   name="image" type="file" class="custom-file-input" id="image">
                      <label class="custom-file-label" for="image">{{ __("product.select_file")  }}</label>
                     
                    </div>
                    <button class="btn btn-warning" > upload one image  </button>

              

                  </div>

                  @if($errors->has('image'))
                  <div class="alert alert-danger alert-dismissible mt-3">{{ $errors->first('image') }}</div>
                    @endif 

              
                </form>

                <form role="form" method="post"  action="{{ route('Products.uploadProductVideo') }}"      >
                  @csrf
                  <input type="hidden"  value="{{$product->id}}"  name="id">
                  <div class="input-group p-2">

                    <input  type="text" value="{{$product->VideoUrl}}" name="VideoUrl"  class="form-control form-control-lg"  placeholder=" Enter Video Url code ">
                    <button class="btn btn-success">  Save url code   </button>
                  </div>
                  @if($errors->has('VideoUrl'))
                  <div class="alert alert-danger alert-dismissible mt-3">{{ $errors->first('VideoUrl') }}</div>
                    @endif 
                </form>


              <?php
              $path=base_path("uploads/product/$product->id"); 
              $images2=[];
                      if(  File::isDirectory($path)){
                          $images2 = File::allFiles(base_path("uploads/product/$product->id"));
                      }     
                      ?>

            @foreach ($images2 as $image)    
            <li>
                <a href="">
                    <div  class="demo-gallery-poster">
                    <img width="100%" src="{{ asset('/uploads/product/'.$product->id."/". $image->getFilename()) }}">
                    </div>
                </a>

              <a href="/deleteProductImage/{{$product->id}}/{{$image->getFilename()}}">  Delete image </a>
            </li>   
            @endforeach


             

              
              </div>
            </div>
          </div>
        </div>
     
      </div>
    </div>


  </div>




@endsection
