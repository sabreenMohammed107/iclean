  
    @extends('pages.layouts.user')
@section('content')
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">
<style>
    body{
  height:200vh;
}

  #myhero.hero-wrap {
  -webkit-background-size: cover !important;
  -moz-background-size: cover !important;
  -o-background-size: cover !important;
  background-size: cover !important;
  }
  </style>
   <!-- <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5"> -->
    
    
    <div  id="myhero" class="hero-wrap js-fullheight " style="background-image: url({{asset('/images/bg_1.jpg')}});no-repeat center center fixed;  background-attachment: fixed;background-size: cover;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="ftco-animate">         

                  <div  class="row align-items-center justify-content-start">
                   <div  class="col-4  col-lg-2">   <img  width="100%" src="{{asset('images/company/logo.png')}}" alt=""></div>
                     <div class="">
                       <h1 class="">  {{__("about.KeepYourLifeClean")}}  </h1>
                       <p><a href="/contact" class="btn btn-primary mr-md-4 py-2 px-5"> {{__("about.Contact")}}  <span
                        class="ion-ios-arrow-forward"></span></a></p>
                     </div>
                   
                  </div>
                
                </div>
            </div>
        </div>
    </div>
  <!-- Products -->
    <section class="ftco-section">
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




      {{-- Prtofoliao  section  --}}

        <!-- Products -->
    <section class="ftco-section bg-light">
        <div class="container">

            <div class="y-us-head text-center">
                <div class="y-us-title mb-5 ">
                    <h2 class="text-center ftco-animate  fadeInUp ftco-animated">  {{__("clean.Our products catalog")}}   </h2>
                    <span class="y-us-title-border"></span>
                </div>
             
               <div class="row justify-content-center">
                <div>
                            
                    <h4 class="col-6 m-auto">
                        
                        {{__("clean.Our products catalog details")}}

                    </h4>
                       
                    <div class="mt-5">
                        <a  href="{{asset('/Protofolio/ProductsPortfolio-Eng..pdf')}}" class="btn btn-secondary  py-3 px-5">  {{__("clean.Get English Version")}}     </a>
                        <a  href="{{asset('/Protofolio/ProductsPortfolio-Arabic.pdf')}}" class="btn btn-secondary py-3 px-5">  {{__("clean.Get Arabic Version")}}    </a>
                    </div>

                </div>
              
               </div>

            </div>

      

        </div>
      </section>

      {{--  end  Protofolia --}}




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
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/AII02rib0a0"
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


 {{--   Random  Product --}}


 <div class="container">
    <div class="row">

        <?php $i=0;  ?>
  @foreach ($random as $item)
  <div class="top-ten section animate">
    <div class="middle">
        <img  src="{{asset('/uploads/product/imagecover/'.$item->image_cover)}}" />
    </div>
       <div class="<?php  if($i%2==0){  echo 'left' ;}  else{ echo 'right' ;} ?> title">
        <div class="content">
        <h2>{{$item->title}}</h2>
            <p>
                {{$item->details}} 
            </p>
            <a href="/product-view/{{$item->id}}" class="btn-primary px-5">more</a>
        </div>
    </div>
    <div class="<?php  if($i%2==1){  echo 'left' ;}  else{ echo 'right' ;} $i++;  ?> tiles">
        <?php
$path=base_path("uploads/product/$item->id"); 
$images=[];
        if(  File::isDirectory($path)){
            $images = File::allFiles(base_path("uploads/product/$item->id"));
        }     
        ?>
        @foreach ($images as $image)
        <img src="{{ asset('/uploads/product/'.$item->id."/". $image->getFilename()) }}" />
        @endforeach
      
    </div>
</div>
  @endforeach
    </div>
</div>

 {{-- end  Random  Product --}}


    <div class="clear-fix"></div>

    <!-- partners -->

    <section class="ftco-section testimony-section ftco-bg-light partners">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section  text-center ftco-animate">
                    <h2 class="text-center ftco-animate fadeInUp ftco-animated"> {{__("clean.Our Happy Partners")}} </h2>
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
        $(document).ready(function() {
            var $sm = 480;
            var $md = 768;

            function resizeThis() {
                $imgH = $('.middle img').width();
                if ($(window).width() >= $sm) {
                    $('.left,.right,.top-ten.section').css('height', $imgH);
                } else {
                    $('.left,.right,.top-ten.section').css('height', 'auto');
                }
            }
            resizeThis();
            $(window).resize(function() {
                resizeThis();
            });


            // owl
 var owl = $('.owl-carousel');
    owl.owlCarousel({
    loop:true,
    autoplay:true,
    autoplayHoverPause:true
});
        });

        $(".top-ten.section").click(function() {
            $(".top-ten.section").removeClass("animate");
            $(this).toggleClass("animate");
        })

        $(window).scroll(function() {

            $('.top-ten.section').each(function() {
                var $elementPos = $(this).offset().top;
                var $scrollPos = $(window).scrollTop();

                var $sectionH = $(this).height();
                var $h = $(window).height();
                var $sectionVert = (($h / 2) - ($sectionH / 4));


                if (($elementPos - $sectionVert) <= $scrollPos && ($elementPos - $sectionVert) + $sectionH > $scrollPos) {
                    $(this).addClass('animate');
                } else {
                    $(this).removeClass('animate');
                }
            });


        });

        $('#modal1').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal1 iframe').attr("src", $("#modal1 iframe").attr("src"));
});
    </script>
        
  
    @endsection


