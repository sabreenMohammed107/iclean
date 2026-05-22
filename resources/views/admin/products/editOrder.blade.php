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
        <h3 class="card-title">Update Order </h3>
      </div>
      <!-- /.card-header -->


      

  

   

      <!-- form start -->
      <form role="form" method="post"  action="{{ route('updateOrder') }}"     enctype="multipart/form-data" >
      @csrf
      <input type="hidden" name="order_id" value="{{$order->id}}" >
        <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Product name</label>
                    <input type="text" readonly name="product_name" class="form-control" value="{{ $order->product_name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">User name</label>
                    <input readonly type="text" name="user_name" class="form-control" value="{{ $order->user_name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input readonly  type="text" name="phone" class="form-control" value="{{ $order->phone }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">quantity</label>
                    <input readonly type="text" name="qty" class="form-control" value="{{ $order->qty }}">
                  </div>
<div class="form-group">
                    <label for="exampleInputEmail1">Seller Man</label>
                    <input  type="text" name="seller_name" class="form-control" value="{{ $order->seller_name }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Notes</label>
                    <textarea rows="3" cols="5"  name="notes" class="form-control" >{{ $order->notes }}</textarea>
                  </div>
            
            <div class="form-group">

               
                <select class="form-control form-select @error('status_id') is-invalid @enderror" id="status_id" name="status_id"
                    >
                    <option selected="selected" value="">
                     @if( LaravelLocalization::getCurrentLocale() === "en")
                          Select Status
                            @else
                          إختر الحالة
                            @endif
                            </option>
                    @foreach ($statuses as $status)
                        <option value="{{ $status->id }}"
                            {{ $order->status_id == $status->id ? 'selected' : '' }}>@if( LaravelLocalization::getCurrentLocale() === "en")
                            {{$status->title_en ?? ''}}
                            @else
                            {{$status->title_ar ?? ''}}
                            @endif
                        </option>
                    @endforeach

                </select>
             
              @if($errors->has('status_id'))
                <div class="alert alert-warning alert-dismissible mt-3">{{ $errors->first('city_id') }}</div>
                  @endif 
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



