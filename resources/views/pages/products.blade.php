  
    @extends('pages.layouts.user')
    <style>
        .navbar-dark .navbar-nav .nav-link{
            color: #0162AF !important	
        }
        .ftco-navbar-light .navbar-nav>.nav-item.active>a{
            color: #f3e53d !important;
    
        }
        nav.navbar{
            box-shadow: 0px 0px 5px -1px grey;
        background-color:#fff !important; 
        }
       
    </style>
    @section('content')
       
   
   
      <!-- Products -->
        <section class="ftco-section bg-light">
            <div class="container">
                <div class="y-us-head text-center">
                    <div class="y-us-title ">
                        <h2 class="text-center ftco-animate fadeInUp ftco-animated"> {{__("clean.ICLEAN PRODUCTS")}} </h2>
                        <span class="y-us-title-border"></span>
                    </div>
                </div>
    
              <div class="row d-flex ">
    
    @foreach ($products as $product)
    <div class="box-product bg-white mb-3 px-3  box-shadow col-md-6 col-lg-4 d-flex ftco-animate fadeInUp ftco-animated"  style="border:solid #f8f9fd  3px ">
        <div class="blog-entry align-self-stretch">
         <a href="/product-view/{{$product->id}}" class="block-20 rounded" >
          <img width="100%" src="{{asset('/uploads/product/imagecover/'.$product->image_cover)}}" alt="">
          </a>
          <a href="/product-view/{{$product->id}}">
          <div class="text mt-3 px-4">
              <div class="posted mb-3 d-flex">
                  <div class="desc pl-3 text-center">
                     <span>
                     <b>  {{$product->title}}  </b>
                     </span>
                     
                  </div>
              </div>
            <h3 class="heading ">
            </h3>
            <p class="w-100 ">
                {{$product->details}}
            </p>
          </div>
          </a>
        </div>
      </div>
    @endforeach
    
            </div>
          </section>
    
        
    
    
          <div class="clear-fix"></div>

          <!-- partners -->
      
          <section class="ftco-section testimony-section ftco-bg-light partners">
              <div class="container">
                  <div class="row justify-content-center pb-5 mb-3">
                      <div class="col-md-7 heading-section  text-center ftco-animate">
                          <h2 class="text-center ftco-animate fadeInUp ftco-animated">  {{__("clean.Our Happy Partners")}}  </h2>
                          <span class="y-us-title-border"></span>
                      </div>
                  </div>
                  <div class="row ftco-animate ">
                      <div class="col-md-12">
                          <div class="carousel-testimony owl-carousel ftco-owl">
                              <?php
                              $pathpartners=base_path("/uploads/partners"); 
                              $partners=[];
                                      if(File::isDirectory($pathpartners)){
                                          $partners = File::allFiles(base_path("/uploads/partners/"));
                                      }     
                                      ?>
        @foreach ($partners as $partner)
        <div class="item">
          <img  height="250px"  src="{{ asset('/uploads/partners/'. $partner->getFilename()) }}"  >
          </div>
        @endforeach
                          </div>
                      </div>
                  </div>
              </div>
          </section>
      
          <!-- End OF partners Section  -->
        @endsection
        @section('scripts')
        <script>
           $("a[href='/AllProducts']").parent().siblings().removeClass("active"); 
           $("a[href='/AllProducts']").parent().addClass("active")
        </script>
      @endsection