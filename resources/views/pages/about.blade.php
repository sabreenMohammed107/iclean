  
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
        .bg-service {
            background-size: cover  ; 
            background-position: center center; 
            height: 350px
        }
       
    </style>

    @section('content')

            <!-- Our services  US  -->
    <section class="dark-bg text-white ">
        <div class="y-us-section">
            <div class="container">

                <div class="p-3">
                    <div class="y-us-title ">

                        <h2 class="text-center mb-5 mt-5  ftco-animate"> {{__("about.OurServices")}} 
                            <br>
                            <span class="y-us-title-border"></span>
                        </h2>
                       
                        <div class="row">
                            

                            <div class="col-12 col-md-5 mb-3 bg-service  "  style="background-image: url({{asset('/images/service2.jpg')}}); border: solid #f3e53d 3px">    
                            </div>

                            <div class="col-12 col-md-7   px-5 ">
                                <b>  {!! __("about.about_details") !!}   </b>
                            </div>
                        
                           
                        </div>

                       

                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End  Our services  US  -->
  

     <!-- Why Choose US  -->
    <section class="ftco-section bg-light text-white">
  <div class="container">
    <div class="y-us-head text-center">
        <div class="y-us-title ">
        <h2 class="text-center ftco-animate fadeInUp ftco-animated"> {{__("clean.Why us")}}</h2>
        <span class="y-us-title-border"></span>
        <h4 class="pt-2">
            
            {{__("clean.Why us details")}} 
      </h4>

           
        </div>
    </div>
    <div class="row  justify-content-center">
        <div class="col-md-5  col-sm-6 col-xs-12  ftco-animate">
            <div class="y-us-content">
                <div class="service-3">
                    <div class="service-box">
                        <div class="clearfix">
                            <div class="iconset">
                                <span class="glyphicon glyphicon-cog icon">
                                    <i class="fab fa-airbnb text-dark "></i>
                                </span>
                            </div>
                            <div class="y-us-content">
                                <h4>   {{__("clean.Why us details 1 title")}}  </h4>
                                <h6 class="text-dark" >{{__("clean.Why us details 1")}}</h6>
                          
                            </div>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="clearfix">
                            <div class="iconset">
                                <span class="glyphicon glyphicon-cog icon">
                                    <i class="fab fa-airbnb text-dark"></i>
                                </span>
                            </div>
                            <div class="y-us-content">
                               
                                <h4>   {{__("clean.Why us details 2 title")}}  </h4>
                                <h6 class="text-dark" >{{__("clean.Why us details 2")}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="clearfix">
                            <div class="iconset">
                                <span class="glyphicon glyphicon-cog icon">
                                    <i class="fab fa-airbnb text-dark"></i>
                                </span>
                            </div>
                            <div class="y-us-content">
                                <h4>   {{__("clean.Why us details 3 title")}}  </h4>
                                <h6 class="text-dark" >{{__("clean.Why us details 3")}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-5 col-sm-6 col-xs-12 ftco-animate">
            <div class="y-us-contentbox">
                <div class="service-3">
                    <div class="service-box">
                        <div class="clearfix">
                            <div class="iconset">
                                <span class="glyphicon glyphicon-cog icon">
                                    <i class="fab fa-airbnb text-dark"></i>
                                </span>
                            </div>
                            <div class="y-us-content">
                               
                                <h4>   {{__("clean.Why us details 4 title")}}  </h4>
                                <h6 class="text-dark" >{{__("clean.Why us details 4")}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="clearfix">
                            <div class="iconset">
                                <span class="glyphicon glyphicon-cog icon">
                                    <i class="fab fa-airbnb text-dark"></i>
                                </span>
                            </div>
                            <div class="y-us-content">
                                <h4>   {{__("clean.Why us details 5 title")}}  </h4>
                                <h6 class="text-dark" >{{__("clean.Why us details 5")}}</h6>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
  </div>
    </section>
     <!-- End of Why Choose US  -->
        @endsection
    

        @section('scripts')
        <script>
           $("a[href='/about']").parent().siblings().removeClass("active"); 
           $("a[href='/about']").parent().addClass("active")
        </script>
      @endsection
    