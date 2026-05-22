  @extends('pages.layouts.user')
  <style>
      .navbar-dark .navbar-nav .nav-link {
          color: #0162AF !important
      }

      .ftco-navbar-light .navbar-nav>.nav-item.active>a {
          color: #f3e53d !important;

      }

      nav.navbar {
          box-shadow: 0px 0px 5px -1px grey;
          background-color: #fff !important;
      }
  </style>
  @section('content')
      <!-- Products -->
      <section class="ftco-section bg-light">
          <div class="container">
              <div class="y-us-head text-center">
                  <div class="y-us-title ">
                      <h2 class="text-center ftco-animate fadeInUp ftco-animated">  v{{ $whatIWant }} المنتج</h2>
                      <span class="y-us-title-border"></span>
                  </div>
              </div>

              <div class="row d-flex " style="margin: auto">

                <form method="POST"  action="/orderSave" class="w-100">            
                    @csrf
                    <input type="hidden" name="product_name" value="v{{ $whatIWant }}" >
                    <div class="form-group">
                        <input type="text" name="user_name" style="text-align:right" class="form-control" placeholder="إسم المشتري">
                        
                        @if($errors->has('user_name'))
                        <div style="text-align:right" class="alert alert-warning alert-dismissible mt-3">{{ $errors->first('user_name') }}</div>
                          @endif 

                    </div>
                    <div class="form-group">
                        <input  name="qty" type="number" style="text-align:right" class="form-control" placeholder="الكمية">
                        @if($errors->has('qty'))
                        <div style="text-align:right" class="alert alert-warning alert-dismissible mt-3">{{ $errors->first('qty') }}</div>
                          @endif 
                    </div>
                    <div class="form-group">
                        <input  name="phone" type="text" style="text-align:right" class="form-control" placeholder="رقم الهاتف">
                        @if($errors->has('phone'))
                        <div style="text-align:right" class="alert alert-warning alert-dismissible mt-3">{{ $errors->first('phone') }}</div>
                          @endif 
                    </div>
                    
                    <div class="form-group">

                       
                        <select class="form-control form-select @error('city_id') is-invalid @enderror" style="text-align:right" id="city_id" name="city_id"
                            >
                            <option selected="selected" value="">
                            
                                  إختر المحافظة
                                   
                                    </option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}"
                                    {{ old('city_id') == $city->id ? 'selected' : '' }}>@if( LaravelLocalization::getCurrentLocale() === "en")
                                    {{$city->title_en ?? ''}}
                                    @else
                                    {{$city->title_ar ?? ''}}
                                    @endif
                                </option>
                            @endforeach

                        </select>
                     
                      @if($errors->has('city_id'))
                        <div class="alert alert-warning alert-dismissible mt-3"style="text-align:right" >{{ $errors->first('city_id') }}</div>
                          @endif 
                    </div>
                    </div>
                    <div class="form-group" style="dir:rtl">
                        
                        <button class="btn btn-secondary py-3 px-5" >إستكمال الطلب   </button>
                    </div>
                </form>

          </div>
      </section>

      <!-- End OF partners Section  -->
  @endsection
