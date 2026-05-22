  
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


    <!-- Contact Form  -->

		<section class="ftco-section contact-section ftco-degree-bg">			
			<div class="container " style="box-shadow: 1px 3px 6px gray;border-top:solid #f3e53d 3px !important;">
				<div class="row d-flex mb-5 contact-info">
					<div class="col-md-12 mb-4">
						<h2 class="h4"> {{__("clean.Contact Information")}} </h2>
					</div>
					<div class="w-100"></div>
					<div class="col-md-3">
						<p> <span class="icon fa fa-map-marker"></span> Address  : <br> </span> {{__("clean.Address_details")}}
						</p>
					</div>
					<div class="col-md-3">
						<p><a href="tel:+20 100  606 9642">   <span class="icon fa fa-phone"></span> +20 100  606 9642</a></p>
						<p><a href="tel:+20 155  033 2200">   <span class="icon fa fa-phone"></span> +20 155  033 2200</a></p>
						<p><a href="tel:+20 103  348 2888">   <span class="icon fa fa-phone"></span> +20 103  348 2888</a></p>
						
					</div>
					<div class="col-md-3">
						<p> <a href="#"><i class="far fa-envelope"></i> mibrahem@iclean.com.eg </a></p>

						<p>  <a href="#"><i class="far fa-envelope"></i> Sales@iclean.com.eg 
						</a></p>

					</div>
			
					<div class="col-md-3 contact-free">
						<p><i class="fas fa-caret-left"></i> Please Feel free to contact us!</p>
					</div>
				</div>
				<div class="row block-9">
					<div class="col-md-6 pr-md-5">

                        @if (session('success'))

                        <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h5><i class="icon fas fa-check"></i> Alert!</h5>
                          {{ session('success') }}
                        </div>
                    
                        @endif

                        
                        <form method="POST"  action="/contactSave">            
                            @csrf
							<div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="{{__("clean.name")}}">
                                
                                @if($errors->has('name'))
                                <div class="alert alert-warning alert-dismissible mt-3">{{ $errors->first('name') }}</div>
                                  @endif 

							</div>
							<div class="form-group">
                                <input  name="email" type="text" class="form-control" placeholder="{{__("clean.email")}}">
                                @if($errors->has('email'))
                                <div class="alert alert-warning alert-dismissible mt-3">{{ $errors->first('email') }}</div>
                                  @endif 
                            </div>
                            <div class="form-group">
                                <input  name="phone" type="text" class="form-control" placeholder="{{__("clean.phone")}}">
                                @if($errors->has('phone'))
                                <div class="alert alert-warning alert-dismissible mt-3">{{ $errors->first('phone') }}</div>
                                  @endif 
                            </div>
                            
							<div class="form-group">
                                <input name="subject" type="text" class="form-control" placeholder="{{__("clean.subject")}}">
                                
                                @if($errors->has('subject'))
                                <div class="alert alert-warning alert-dismissible mt-3">{{ $errors->first('subject') }}</div>
                                  @endif 
							</div>
							<div class="form-group">
								<textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="{{__("clean.message")}}"></textarea>
							</div>
							<div class="form-group">
                                
                                <button class="btn btn-secondary py-3 px-5" >{{__("clean.send message")}}    </button>
							</div>
						</form>
	
					</div>
					<div class="col-md-6" id="">
						<style>
							.mapouter {
								position: relative;
								text-align: right;
							}
	
							.gmap_canvas {
								overflow: hidden;
								background: none !important;
								height: 370px;
							}
						</style>
							<div class="mapouter">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3460.9238768226583!2d31.31558931511032!3d29.83761898195793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDUwJzE1LjQiTiAzMcKwMTknMDQuMCJF!5e0!3m2!1sen!2seg!4v1588248396986!5m2!1sen!2seg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</div>
				</div>
			</div>
		</section>
		@endsection
		
		@section('scripts')
        <script>
           $("a[href='/contact']").parent().siblings().removeClass("active"); 
           $("a[href='/contact']").parent().addClass("active")
        </script>
      @endsection
    
    
    