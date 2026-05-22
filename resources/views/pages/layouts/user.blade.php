<!DOCTYPE html>
<html lang="en">

<head>
    <title>iClean - Cleaning Company</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="icon" href="{{asset('images/company/logo.png')}}">
   
    {{-- Define keywords for search engines: --}}
    <meta name="keywords" content="شركة الموجات الإيطالية أي كلين iClean 
    ليف غسيل واسفنج مواعين اى كلين 
    اسفنج مواعين موج , اسفنج مواعين اصلي , اسفنج مواعين سعر , اسفنج غسيل المواعين, اسفنج غسيل مواعين , اسفنج غسل مواعين , اسفنج مواعين, اسفنج المواعين , افضل انواع اسفنج المواعين , ليف مواعين , مصنع ليف مواعين , ليف مواعين حديد , ليف مواعين موج , تصنيع اسفنج المواعين , اسفنجة غسيل مواعين , اسفنجة غسيل الأطباق , تصنيع اسفنجة غسيل المواعين , اسفنج صناعي , اسفنج تنظيف الصحون , ليف غسيل مواعين , ليفة اسفنج , ليفة صحون , تصنيع اسفنج , تصنيع الاسفنج , اسفنج مواعين خشن , اسفنج مواعين فيلدا , اسفنج مواعين ملون , افضل اسفنج مواعين  ليف مواعين اسفنج , ليف مواعين سلك , ليفة مواعين اسفنج , اسفنج غسيل الصحون , انواع اسفنج المواعين , اشكال اسفنج المواعين .
    تصنيع و إنتاج وتعبئة ليف و اسفنج و سلك المواعين الاستانلس ستيل و أدوات نظافة المطبخ و المنزل، منتجاتنا (ليف غسيل مواعين المطبخ و أسفنج تنظيف أواني أشكال خاصة متعددة الأغراض، اسفنج تنظيف أواني مدمج بسلك استنالس غير قابل للصدأ، جلاية طبقات فايبر عالية الجودة بكثافات مختلفة ، ليف نايلون أنفد ليف تنظيف أواني مغزول بسلك استانلس غير قابل للصدأ (الليفة السحرية) ، سلك فولاذ مقاوم للصدأ (سلك استانلس) ، سلك معدني ناعم ملفوف ومبطط بالوزن ، لوف حمام طبيعي أطفال وكبار (لوف مصري حموم مع طبقة اسفنج ناعمة، ومنتجات الفنادق) ، فوطة مطبخ غير منسوجة ، فوطة فائقة الامتصاص ضد البكتريا (مصنعة من أجود الخامات السليلوز).
    أسماء العملاء:
    د. ناجى رشدي Master Clean , محمد مختار BEBA – Meroo , أحمد عبد اللطيف السوري اطليانو Italian , مصطفى محاريق Sun Rice , إبراهيم عفيفي تكس House Clean  الملكة , عصام العمدة التركى  , Al Turky الحاج عمرو سالم سوبيا فاستر Faster , حسين نوفل Master One , أيمن الشاهد Diamond , حاتم  دريم مصر Dream Misr , وليد عزب الحياة مودرن , أحمد مختار الهلال – فريد سوبر كلين Super Clean , خليل بشوى كوين , ريكو ميكس RicoMix , أمل فهمى Bianca , أسامة مرتضى MR Cleaner , شاكر ضلام الشريف – وائل الشناوى دهب , 
    ">
    {{-- Define the author of a page: --}}
    <meta name="description" content="شركة الموجات الإيطالية أي كلين iClean 
    ليف غسيل واسفنج مواعين اى كلين 
    اسفنج مواعين موج - اسفنج مواعين اصلي - اسفنج مواعين سعر">
 {{--    Define the author of a page: --}}
    <meta name="author" content="شركة الموجات الإيطالية أي كلين iClean  mohamed ibrahime ">




</head>
<body>
    <div class="wrap">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md d-flex align-items-center">
                   <a href="tel:+20 100  606 9642" class="text-white  px-3"><i class="icon fa fa-phone "></i> +20 100  606 9642</a>  
                   <a class="text-white px-3"><i class="icon fa fa-paper-plane"></i> info@iclean.com.eg  </a>  
                </div>
                <div class="col-12 col-md d-flex justify-content-md-end">
                    <ul class="nav   justify-content-center">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="nav-item mx-2">
                            <a class="text-white"  hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" >      {{ $properties['native'] }} </a>
                        </li>
                        @endforeach
                        
                      </ul>

                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a target="_blank" href="https://www.facebook.com/Kitchen.sponge.iClean/" class="d-flex align-items-center justify-content-center"><span
									class="fab fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="https://api.whatsapp.com/send?phone=201006069642" method="get" target="_blank" class="d-flex align-items-center justify-content-center"><span
									class="fab fa-whatsapp"><i class="sr-only">Whatsapp</i></span></a>
                            <!-- Saud Hover on icons *-->
                            <a target="_blank" href="https://www.instagram.com/kitchen_sponge_iclean/" class="d-flex align-items-center justify-content-center"><span
									class="fab fa-instagram"><i class="sr-only">Instagram</i></span></a>

                                    <a target="_blank" href="https://www.linkedin.com/company/kitchen-sponge-iclean-ليف-غسيل-و-اسفنج-مواعين-آى-كلين" class="d-flex align-items-center justify-content-center"><span
                                        class="fab  fa-linkedin"><i class="sr-only">linkedin</i></span></a>
    
                                   
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <!-- <a class="navbar-brand" href="index.html"><img src="images/logo1.jpg" alt="logo" class="rounded"></a> -->
            <a href="/">
        <img  width="150px" src="{{asset('/images/company/bigtitle.png')}}" alt="" srcset="" class="navbar-brand">
    </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/" class="nav-link"> {{__('clean.Home')}}</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link">{{__('clean.About')}} </a></li>

                    <li class="nav-item"><a href="/AllProducts" class="nav-link">{{__('clean.Products')}} </a></li>
                     <li class="nav-item"><a href="/QrProducts" class="nav-link">QR Codes </a></li>

                    <li class="nav-item"><a href="/contact" class="nav-link">{{__('clean.Contact')}} </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
  @yield("content")
  <footer class="footer ftco-section"  style="background: #20454d">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <h2 class="footer-heading"><span class="span-header" style="color: #0162AF">
                      <a href="/">
                        <img  width="150px" src="{{asset('/images/company/bigtitle.png')}}" alt="" srcset="" class="navbar-brand">
                      </a>
                    </span> </h2>
                    <p class="">  
                          {{__("clean.iCleanexpertDetails")}}
                    </p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                        <li class="ftco-animate "><a target="_blank" href="https://www.facebook.com/Kitchen.sponge.iClean/"><span class="fab fa-facebook-f text-white"></span></a></li>
                        <li class="ftco-animate"><a target="_blank" href="https://www.instagram.com/kitchen_sponge_iclean/"><span class="fab fa-instagram"></span></a></li>
                        <li class="ftco-animate"><a target="_blank" href="https://api.whatsapp.com/send?phone=201006069642"><span class="fab fa-whatsapp">
                            </span></a></li>
                           
                            <li class="ftco-animate"><a target="_blank" href="https://www.linkedin.com/company/kitchen-sponge-iclean-ليف-غسيل-و-اسفنج-مواعين-آى-كلين"><span class="fab fa-linkedin"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <h2 class="footer-heading"> {{__("clean.Our products catalog")}}  </h2>
                    <div class="block-21 mb-4 d-flex">
                        <a  hreflang="en"   class="img mr-4 rounded" style="background-image: url({{asset('images/eclients.jpg')}});"></a>
                        <div class="text">
                            <h3 class="heading">
                            <a href="{{asset('/Protofolio/ProductsPortfolio-Eng..pdf')}}" download>  {{__("clean.Get English Version")}}  </a>
                            </h3>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="img mr-4 rounded" style="background-image: url({{asset('images/arpro.png')}});"></a>
                        <div class="text">
                        <h3 class="heading"><a href="{{asset('/Protofolio/ProductsPortfolio-Arabic.pdf')}}" download>  {{__("clean.Get Arabic Version")}}  </a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
                    <h2 class="footer-heading">  {{__("clean.Quick contact")}} </h2>
                    <ul class="list-unstyled">
                        <li>
                           
                            <p> <a href="tel:+20 100  606 9642">   <span class="icon fa fa-phone"></span> +20 100  606 9642</a></p>

                            <p>
                                <a href="tel:+20 155  033 2200">   <span class="icon fa fa-phone"></span> +20 155  033 2200</a>

                            </p>
                            <p><a href="tel:+20 103  348 2888">   <span class="icon fa fa-phone"></span> +20 103  348 2888</a></p>

                          </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <h2 class="footer-heading"> {{__("clean.Our Office")}} </h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map-marker"></span><span class="text">
                                {{__("clean.Address_details")}}
                                </span>
                            </li>
                                

                           

                              <li>
                                      <a href="mailto:mibrahem@iclean.com.eg">
                                          <span class="icon fa fa-envelope-open"></span>
                                        <span
                                        class="text">mibrahem@iclean.com.eg </span></a>

                                        <a href="mailto:Sales@iclean.com.eg "><span class="icon fa fa-envelope-open"></span><span
                                            class="text">Sales@iclean.com.eg  </span></a>
                                        
                              </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center">

                    <p class="copyright">
                        Copyright &copy; iClean 
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('/js/popper.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('/js/scrollax.min.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>

	      	<!-- السكريبت الخاص بالناف باااار -->
              <script>
                jQuery(function ($) {
                  
                    $(window).on('scroll', function () {
                        if ($(this).scrollTop() >= 200) {
                            $('.navbar').addClass('fixed-top');
                        } else if ($(this).scrollTop() == 0) {
                            $('.navbar').removeClass('fixed-top');
                        }
                    });
        
                    function adjustNav() {
                        var winWidth = $(window).width(),
                            dropdown = $('.dropdown'),
                            dropdownMenu = $('.dropdown-menu');
        
                        if (winWidth >= 768) {
                            dropdown.on('mouseenter', function () {
                                $(this).addClass('show')
                                    .children(dropdownMenu).addClass('show');
                            });
        
                            dropdown.on('mouseleave', function () {
                                $(this).removeClass('show')
                                    .children(dropdownMenu).removeClass('show');
                            });
                        } else {
                            dropdown.off('mouseenter mouseleave');
                        }
                    }
        
                    $(window).on('resize', adjustNav);
        
                    adjustNav();
                });
            </script>

    @yield('scripts')

</body>

</html>
