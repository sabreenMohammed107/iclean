 
    @extends('pages.layouts.user')



    @section('content')

   <style>
     
       #lightgallery li{
           width: 44%; 
           float: left;
           box-sizing: border-box;
           
       }
      
       
    </style>   

          <!-- Light Gallery 2020  -->
<link rel="stylesheet" href="{{asset('css/lightgallery.min.css')}}">

      <!-- Hero Section  -->

      <section>
      
     
      {{--  Section Video  --}}
      <section class="ftco-section ftco-intro" style="background-image: url({{asset("images/bg_3.jpg")}}); background-position: 50% -144.2px;" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-8 text-center">
    				<h2  class="h1">
                        {{__("clean.Together we will explore new things")}}
                    </h2>
    				<a   data-toggle="modal" data-target="#modal1"  href="" class="icon-video d-flex align-items-center justify-content-center"><span class="fa fa-play"></span></a>
    			</div>
    		</div>
        </div>
    </section>

<div class="container">   
<!-- Grid row -->
<div class="row">
    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-4"> 
      <!--Modal: Name-->
      <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
  
          <!--Content-->
          <div class="modal-content">
  
            <!--Body-->
            <div class="modal-body mb-0 p-0">
              <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$product->VideoUrl}}"
                  allowfullscreen></iframe>
              </div>
            </div>
  
            <!--Footer-->
            <div class="modal-footer justify-content-center">
              <span class="mr-4">Spread the word!</span>
              <a target="_blank" href="https://www.facebook.com/Kitchen.sponge.iClean/" type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            
              <!--Linkedin-->
              <a  href="https://api.whatsapp.com/send?phone=201006069642" method="get" target="_blank" type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-whatsapp"></i></a>
  
              <!--Linkedin-->
              <a  target="_blank" href="https://www.linkedin.com/company/kitchen-sponge-iclean-ليف-غسيل-و-اسفنج-مواعين-آى-كلين" type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>
  
              <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
  
            </div>
  
          </div>
          <!--/.Content-->
  
        </div>
      </div>
      <!--Modal: Name-->
    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
</div>

 {{-- End  Section Video  --}}
    </section>


    <!-- Product  -->
    <section class="ftco-section pt-5 ">
        <div class="container-fluid">
            <h1 class="ml-3 text-secondary text-center display-4 pb-3">
                {{$product->title}}  
            </h1>
                <div class="row d-md-flex">
                     <div class="ftco-animate col-md-6 img about-image fadeInLeft ftco-animated" style="background-image: url({{asset('/uploads/product/imagecover/'.$product->image_cover)}});height:400px;border-radius:.5rem;">
                     </div>
                    <div class="col-md-6 ftco-animate fadeInUp ftco-animated">
                        <div class="row py-md-5">
                            <div class="col-md-12 d-flex align-items-center">
                                <div class="tab-content ftco-animate fadeInUp ftco-animated" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                                        <div>
                                            <h2 class="mb-4 pt-0 product-title"> {{$product->title}} </h2>              
                                           <p>
                                            {{$product->details}}
                                           </p>
                                            <a href="/contact" class="btn btn-secondary w-100 p-3">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </section>

    <!-- Products Gallery  -->
    <section class="py-2">
        <div class="container gallery-container text-center">

            <h1 class="text-capitalize"> {{$product->title}}  </h1>

            <p class="page-description text-center">  <i class="fas fa-caret-down"></i></p>
            <!-- Gallery  -->
            <div class="cont">

                <div class="demo-gallery">
                    <ul id="lightgallery">

                        <?php
                        $path=base_path("/uploads/product/$product->id"); 
                        $images2=[];
                                if(  File::isDirectory($path)){
                                    $images2 = File::allFiles(base_path("/uploads/product/$product->id"));
                                }     
                                ?>



<li   data-src="{{asset('/uploads/product/imagecover/'.$product->image_cover)}}" >
    <a href="">
        <img style="border: solid  #f3e53d;height: 300px"  class="img-responsive " src="{{asset('/uploads/product/imagecover/'.$product->image_cover)}}">              
        <div  class="demo-gallery-poster">
        <img  src="{{asset('images/zoom.png')}}">
        </div>
    </a>
</li>   
            @foreach ($images2 as $image)    
            <li   data-src="{{ asset('/uploads/product/'.$product->id."/". $image->getFilename()) }}" >
                <a href="">
                    <img style="border: solid  #f3e53d;height: 300px"  class="img-responsive " src="{{ asset('/uploads/product/'.$product->id."/". $image->getFilename()) }}">              
                    <div  class="demo-gallery-poster">
                    <img  src="{{asset('images/zoom.png')}}">
                    </div>
                </a>
            </li>   
            @endforeach

                   
                      
                    </ul>
                    <div class="clearfix"></div>

                   
                </div>
            </div>
    </section>


    



    
    @endsection

    @section('scripts')
    <!-- lightgallery -->
<script src="{{asset('js/lightgallery-all.js')}}"></script>
     <script>
        $('#lightgallery').lightGallery({
            pager: true,
            thumbnail:true,
    animateThumb: true,
    showThumbByDefault: true,
   
        });


        $('#modal1').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal1 iframe').attr("src", $("#modal1 iframe").attr("src"));
});

    </script>

        
@endsection