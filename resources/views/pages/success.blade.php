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
    h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:62px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
</style>
@section('content')
    <!-- Products -->
    <section class="ftco-section bg-light">
        <div class="container">
           
   <div class="row d-flex ">
                <div class="card">
                    <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                      <i class="checkmark">✓</i>
                    </div>
                      <!--<h1>{{__("clean.Success")}}</h1> -->
                      <!--<p>{!!__("clean.SuccessText")!!}</p>-->
                       <h1>تم تسجيل الطلب بنجاح </h1> 
                      <p>استقبلنا طلب الشراء وسيتم التواصل مع حضرتك فى أقرب وقت</p>
                      
                    </div>
</div>
        
  </div>    
    </section>

    <!-- End OF partners Section  -->
@endsection
