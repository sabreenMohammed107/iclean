  
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
              
         
          <?php for ($i = 1; $i <= 99; $i++) : ?>
    <div class="box-product bg-white mb-3 px-3  box-shadow col-md-6 col-lg-4 d-flex ftco-animate fadeInUp ftco-animated"  style="border:solid #f8f9fd  3px ">
        <div class="blog-entry align-self-stretch">
            <?php $x= sprintf("V-%02d", $i); ?>
                      <!--{!! QrCode::size(250)->generate( Illuminate\Support\Facades\URL::signedRoute('single-Product').$x); !!} -->

                  {!! QrCode::size(250)->generate( ' https://www.iclean.com.eg/en/single-Product?signature='.$x); !!}

       
            
            <h3 class="heading ">
            </h3>
            <p class="w-100 ">
                <?php echo sprintf("V - %02d", $i); ?>
            </p>
        
          </a>
        </div>
      </div>
      <?php endfor; ?>
    
            </div>
          </section>
    
        
    
    
          <div class="clear-fix"></div>

          <!-- partners -->
      
          <section class="ftco-section testimony-section ftco-bg-light partners">
              <div class="container">
                  <div class="row justify-content-center pb-5 mb-3">
                      <div class="col-md-7 heading-section  text-center ftco-animate">
                          <h2 class="text-center ftco-animate fadeInUp ftco-animated">Our Happy Partners </h2>
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
    
    
    