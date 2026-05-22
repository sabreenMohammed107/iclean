@extends('admin.layouts.admin')



@section('content')

  <!-- fileinput -->
  <link rel="stylesheet" href="{{asset('admin/inputupload/css/fileinput.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/inputupload/themes/explorer/theme.css')}}">
<div class="row">
  <!-- left column -->
  <div class="col-12 m-auto">

    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title"> {{ __("product.add_product")  }} </h3>
      </div>
      <!-- /.card-header -->


      

  

   

      <!-- form start -->
      <form role="form" method="post"  action="{{ route('Products.store') }}"     enctype="multipart/form-data" >
      @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="title_en"> {{ __("product.title_en")  }} </label>
                <input name="title_en" type="text" value="{{old('title_en')}}"  class="form-control" id="title_en" placeholder="{{ __('product.title_en')  }} ">
                   @if($errors->has('title_en'))
                  <div class="alert alert-warning alert-dismissible mt-3">{{ $errors->first('title_en') }}</div>
                    @endif 

              </div>

            </div>
            <div class="col-sm-6">

              <div class="form-group">
                <label for="title_ar"> {{ __("product.title_ar")  }} </label>
                <input name="title_ar"  value="{{old('title_ar')}}" type="text" class="form-control" id="title_ar" placeholder="{{ __('product.title_ar')  }} ">
                @if($errors->has('title_ar'))
                <div class="alert alert-warning alert-dismissible mt-3">{{ $errors->first('title_ar') }}</div>

                  @endif 
              </div>

            </div>
          </div>

          <div class="form-group">
            <label> {{ __("product.details_en")  }} </label>
            <textarea name="details_en" class="form-control" rows="4" placeholder='{{ __("product.details_en")  }}'>
              {{old('details_en')}}
            </textarea>
            @if($errors->has('details_en'))
            <div class="alert alert-warning alert-dismissible mt-3">{{ $errors->first('details_en') }}</div>
            @endif 
          </div>

          <div class="form-group">
            <label> {{ __("product.details_ar")  }} </label>
            <textarea name="details_ar" class="form-control" rows="4" placeholder='{{ __("product.details_ar")  }}'>
        
            {{old('details_ar')}}
            </textarea>
            @if($errors->has('details_ar'))
            <div class="alert alert-warning alert-dismissible mt-3">{{ $errors->first('details_ar') }}</div>
              @endif 
          </div>


          <div class="form-group">
            <label for="image_cover"> {{ __("product.image_cover")  }} </label>
            <div class="input-group">
              <div class="custom-file">
                <input name="image_cover" type="file" class="custom-file-input" id="image_cover">
                <label class="custom-file-label" for="image_cover">{{ __("product.select_file")  }}</label>
              </div>

              @if($errors->has('image_cover'))
              <div class="alert alert-warning alert-dismissible mt-3">{{ $errors->first('image_cover') }}</div>
                @endif 

            </div>
          </div>


          <div class="form-group">
            <div class="file-loading">
              <input id="product_images" type="file" name="product_images[]" multiple class="file">
            </div>
          </div>



        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary btn-block"> {{ __("product.save")  }} </button>
        </div>
      </form>
    </div>
    <!-- /.card -->

  </div>
</div>
@endsection



@section('scripts')

  <!-- fileinput -->
  
<script src="{{asset('admin/inputupload/js/fileinput.min.js')}}" type="text/javascript"></script>

<script <script type="text/javascript">
  $("#product_images").fileinput({
  
    allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
    overwriteInitial: false,
    maxFileSize: 9000,
    maxFilesNum: 10,
    slugCallback: function(filename) {
      return filename.replace('(', '_').replace(']', '_');
    }
  });
</script>

@endsection