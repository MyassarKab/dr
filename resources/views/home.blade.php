@extends('layouts.main')

@section('title')
{{__('pages.Bachir Jumaa Polyclinic')}}
@endsection
@section('slider')

<section  id="intro"  style="height: 100%;">

     <div id="mycarousel" class="carousel slide" data-ride="carousel"  data-interval="100000" style="top:-150px" >
       <!-- Wrapper for slides -->
           <div class="carousel-inner" role="listbox">
             <!-- item 0  start -->
            <div class="item">
                 <img src="{{asset('main/img/white background.jpg')}}"   alt="white background">

                 <div class="carousel-caption carousel-caption-text wow fadeInDown" style="right:-10%;top:35%;z-index:10000">

               </div>
                 <div class="carousel-caption wow pulse  cor-div" style="left:20%;background-size:100%;top:20%">
                   <img src="{{asset('main/img/final-logo.png')}}" alt="baby">
                 </div>
           <!-- item 0 end  -->
           </div>
       <!-- item 1  start -->
             <div class="item">
                 <img src="{{asset('main/img/2k.jpg')}}" data-color="lightblue" alt="First Image">
                 <div class="carousel-caption carousel-caption-text wow fadeInDown" style="right:-10%;top:35%;z-index:10000">
                     <h1> {{__('pages.first slide f')}} <br> {{__('pages.first slide s')}}</h1>
                     <div class="wrapper-btn">
                      <div class="container-btn">
                        <a href="#appointment" title="book Now"><i class="fa fa-calendar" aria-hidden="true"></i> {{__('pages.Book Now')}}</a>
                      </div>
                     </div>
               </div>

               <div class="carousel-caption wow pulse  cor-div" style="left:20%;background-size:31%;top:44%">
                 <img src="{{asset('main/img/babbysitter-slider-babby.png')}}" alt="baby">
               </div>
               <div class="carousel-caption wow fadeInLeft  cor-div-2 element-animation" style="left:30%">
                 <img src="{{asset('main/img/babbysitter-slider-cloud-3a.png')}}" alt="cloud">

               </div>
               <div class="carousel-caption wow fadeInLeft  cor-div-2 element-animation" style="left:10% ;top: -15%;
           padding: 15%;">
                 <img src="{{asset('main/img/babbysitter-slider-cloud-3a.png')}}" alt="cloud">

               </div>
               <div class="carousel-caption wow fadeInLeft  cor-div-2 element-animation" style="left:50%;top-60%;bottom:80%">
                 <img src="{{asset('main/img/babbysitter-slider-cloud-3a.png')}}" alt="cloud">

               </div>
               <div class="carousel-caption wow fadeInLeft  cor-div-2" style="left:40%;top:37%;bottom:50%;background-size:10%">
                 <img src="{{asset('main/img/babbysitter-slider-butterfly-3.png')}}" alt="butterfly">

               </div>
               <div class="carousel-caption wow fadeInLeft  cor-div-2" style="left:74%;top:20%">
                 <img src="{{asset('main/img/babbysitter-slider-butterfly-2.png')}}" alt="butterfly">

               </div>
               <div class="carousel-caption wow fadeInLeft  element-animationSUN cor-div-2" style="left:16%;top:10%;bottom:80%;background-size:20%;z-index:4">
                 <img src="{{asset('main/img/babbysitter-slider-sun.png')}}" alt="sun">

               </div>
               <div class="carousel-caption wow fadeInLeft cor-div-2 green-back" style="">
                 <img src="{{asset('main/img/babbysitter-slider-ground-3.png')}}" alt="ground">

               </div>
             </div>
       <!-- item 1  end -->
       <!-- item 2  start -->
             <div class="item">
                 <img src="{{asset('main/img/2.jpg')}}" data-color="lightblue" alt="second Image">
                 <div class="carousel-caption wow fadeInDown" style="z-index:11;top: 36%;z-index:10000">
                     <h1>{{__('pages.second slide')}}</h1>
                     <div class="wrapper-btn">
                      <div class="container-btn">
                        <a href="#"  >  {{__('pages.coming soon')}}</a>
                      </div>
                     </div>

               </div>

               <div class="my-p carousel-caption wow fadeInLeft "  >
                 <img src="{{asset('main/img/Plastic-Surgery-Miami.png')}}" alt="Plastic-Surgery">

               </div>
               <div class="my-p2 carousel-caption wow fadeInRight element-animation"  >
                 <img src="{{asset('main/img/lotus-flowers-call-cta-1-tiny.png')}}" alt="lotus-flowers">

               </div>
               <div class="my-p3 carousel-caption wow fadeInRight "  >
                 <img src="{{asset('main/img/face-neck-surgery.png')}}" alt="face-neck-surgery">

               </div>
               <div class="my-p4 carousel-caption wow fadeInLeft element-animation"  style="" >
                 <img src="{{asset('main/img/flower-147139_960_720.png')}}" alt="flower">

               </div>

             </div>

             <!-- item 2  end -->
            <div class="item">
                 <img src="{{asset('main/img/hearts-2501323_960_720.jpg')}}" data-color="firebrick" alt="hearts">
                 <div class="carousel-caption" style="z-index:11;z-index:10000">

                     <h1>{{__('pages.third slide')}}</h1>
                     <div class="wrapper-btn">
                      <div class="container-btn">
                        <a href="#"  > </i> {{__('pages.coming soon')}}</a>
                      </div>
                     </div>
                 </div>
                 <div class="my-p carousel-caption wow fadeInLeft "  >
                   <img src="{{asset('main/img/img_4607qqcopy.fw.png')}}" alt="baby ">

                 </div>
                 <div class="my-p2 carousel-caption wow fadeInRight element-animation"  >
                   <img src="{{asset('main/img/babysh.png')}}" alt="baby shose">

                 </div>
                 <div class="my-p3 carousel-caption wow fadeInRight "  >
                   <img src="{{asset('main/img/surrogacy.png')}}" alt="pregnant woman">

                 </div>
                 <div class="my-p4 carousel-caption wow fadeInLeft element-animation"  style="" >
                   <img src="{{asset('main/img/free-baby-bottle-clipart.png')}}" alt="baby-bottle">

             </div>


           </div>

           <!-- Controls -->
           <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
             <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
           </a>
           <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
             <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
           </a>
         </div>

           </section>
@endsection
@section('content')

<section id="about" class="text" style="background:#fff">
      <!-- background-image: url('img/ein-steig.jpg');  -->
       <?php
	$locale = App::getLocale();

	 ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 @if($locale=='ar') col-sm-offset-1 @endif wow fadeInLeftBig" id="floatright">
            <h2 class="heading">{{__('pages.DR')}}.{{$doctorBachir->TextTrans('name')}}</h2>
            {!!$doctorBachir->TextTrans('description')!!}
            <a href="{{URL('/')}}/doctor/{{$doctorBachir->TextTrans('slug')}}" class="btn btn-success">{{__('pages.Read More')}}</a>
          </div>
          <div class="col-sm-5 @if($locale=='en') col-sm-offset-1 @endif wow fadeInRightBig"  >
            <style media="screen">

            </style>
            <div   class="myadiv"><img src="{{asset( $doctorBachir->image )}}" alt="{{$doctorBachir->TextTrans('name')}}" title="{{$doctorBachir->TextTrans('name')}}" class="img-responsive" style=""></div>
          </div>
        </div>
      </div>
    </section>
    <!-- about end-->
    <!-- Services-->
    <style media="screen">

    </style>
    <section id="services" class="services-section">
      <div class="background-color">


      <div class="container services-container">
        <div class="row services">
          <div class="col-md-12">
            <h2 class="heading wow bounceInDown" style="color:#fff">{{__('pages.Clinics')}}</h2>
            <div class="row">

                @foreach($clinic as $item)
                <div class="col-sm-6 col-md-4 col-xs-12 marginTop wow zoomIn " @if($loop->first) id="floatright"   @endif>
                <div class="blog-card spring-fever" style="background-image:url( {{asset($item->image)}})">
                    <div class="title-content">
                      <h3><a href="{{URL('/')}}/clinic/{{$item->TextTrans('slug')}}" title="{{$item->TextTrans('name')}}">{{$item->TextTrans('name')}}</a></h3>
                      <!-- <div class="intro-card"> <a href="#">Inspiration</a> </div> -->
                    </div>
                    <div class="card-info">
                      {!!$item->TextTrans('description')!!}
                      @if($item->slug_en=='#')
                       @else
                       <a  @if($item->slug_en=='#')href="#"@else  href="{{URL('/')}}/clinic/{{$item->TextTrans('slug')}}" @endif title="{{$item->TextTrans('name')}}">{{__('pages.Read More')}}</span></a>

                       @endif
                    </div>

                    <div class="gradient-overlay"></div>
                    <div class="color-overlay"></div>
                  </div><!-- /.blog-card -->
                  </div>
                  @endforeach


              </div>
            </div>
          </div>
        </div>
      </div>

      </div>
    </section>
    <!-- Services end-->

    <!-- Portfolio / gallery-->
    <section id="portfolio" style="background-color: #fff;" class="gallery">
      <div class="container clearfix">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12 col-lg-12">
                <h2 class="heading wow bounceInDown">{{__('pages.Portfolio')}}</h2>
                <!-- <p class="wow  wow bounceInDown">Put your portfolio or gallery images here for example. Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. </p> -->

                <div align="center" class="text-center portfolio-button">
                    <button class="btn btn-default filter-button wow bounceInDown" data-filter="all">{{__('pages.All')}}</button>
                    @foreach($clinic as $item)
                    <button class="btn btn-default filter-button wow bounceInDown" data-wow-delay=".2s" data-filter="clinic{{$item->id}}">{{$item->TextTrans('name')}}</button>
                    @endforeach
                </div>

              </div>


            </div>
            <?php  $i=0; ?>
              @foreach($gallery->load('clinic') as $item)
                 @if($i==0 || $i%3==0) <div class="row"> @endif
              <div class="col-sm-4 filter clinic{{$item->clinic_id}} wow zoomIn" data-wow-delay=".{{$i}}s" >
                <div class="box"><a href="{{asset($item->image)}}" title="{{$item->clinic->TextTrans('name')}}" data-toggle="lightbox" data-gallery="portfolio" data-title="Portfolio image{{$i+1}}" data-footer="{{$item->clinic->TextTrans('name')}} "><img src="{{asset($item->image)}}" alt="{{$item->clinic->TextTrans('name')}} " class="img-responsive"></a></div>
              </div>
               @if(($i+1)%3==0)  </div> @endif
                 <?php  $i=$i+1; ?>
              @endforeach


          <!-- </div> -->
        </div>
      </div>
    </section>
    <!-- Portfolio / gallery end-->
    <!-- text page-->
    <section id="text"   class="text-page section-inverse liner-background">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 wow fadeInDown">
            <h2 class="heading ">{{__('pages.Our Doctors')}}</h2>
          </div>
          <?php  $i=0; ?>

          @foreach($doctor as $item)

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-delay=".3s" @if($loop->first) id="floatright"   @endif>
              <div class="our-team">
                    <div class="pic">
                        <img src="{{asset($item->image)}} " alt="{{$item->TextTrans('name')}}" title="{{$item->TextTrans('name')}}">
                        <a @if($item->slug_en=='#')href="#"@else  href="{{URL('/')}}/doctor/{{$item->TextTrans('slug')}} @endif" class="read-more" title="{{$item->TextTrans('name')}}">{{__('pages.Read More')}}</a>
                    </div>
                    <div class="team-content">
                        <h3 class="title">{{$item->TextTrans('name')}}</h3>
                        <span class="post">{{$item->TextTrans('sp_name')}}</span>
                   </div>
                </div>
          </div>
          <?php  $i=$i+1; ?>
          @endforeach
        </div>
      </div>
    </section>
    <!-- text page end-->
    <!--Last event  -->
    <section id="event" style="background-color: #fff;" class="text-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading">{{__('pages.Viedos')}}</h2>
          </div>
          <div id="youtube" class="spidochetube"></div>
        </div>
      </div>
    </section>
    <?php
  	$locale = App::getLocale();

  	 ?>
    @if($locale=='ar')
    <style media="screen">
 .testimonial .testimonial-profile {
      float: right;
    width: 135px;
    border: 2px solid #fff;
    margin-left: 7%;
 }
 </style>
    @endif
      <section   >
    <div class="demo">
    <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 wow fadeInDown">
            <h2 class="heading " style="color:#fff">{{__('pages.testimonial')}}</h2>
          </div>
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel" style="direction:ltr">
                  @forelse($testimonial as $item)
                    <div class="testimonial  wow lightSpeedIn rtlclass" style="">
                        <div class="testimonial-profile">
                            <a href="#"><img src="{{asset($item->image)}} " alt="{{$item->TextTrans('name')}}" title="{{$item->TextTrans('name')}}"></a>
                        </div>
                        <div class="testimonial-content ">
                            <h3 class="testimonial-title">{{$item->TextTrans('name')}}</h3>
                            <span class="testimonial-post">{{$item->TextTrans('job')}}</span>
                            <p class="testimonial-description">
                              {!!$item->TextTrans('detalis')!!}
                            </p>
                        </div>
                    </div>

                    @empty
                     <h1>{{__('pages.coming soon')}}</h1>
                     @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
  </section>
    <!--Last event end  -->
    <!-- contact-->
    <section id="appointment" style="background-color: #fff;padding:50px" class="text-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            <h3 class="heading wow bounceInDown">{{__('pages.Make an Appointment')}}</h3>
            <div class="row">
              <div class="col-md-6 wow fadeInLeft">
                <div class="alert print-error-book-msg" style="display:none">

                <ul style="padding-left: 0;"></ul>

              </div>
              <style media="screen">
                  #booknow:active,#booknow:focus{
                    color: #70bc4f;
                    background-color: #fff !important;
                    border-color: #70bc4f !important;
                    }

              </style>
                <form id="appointmentForm"   class="contact-form">

                  <div class="controls">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name">{{__('pages.YourName')}}*</label>
                          <input type="text" name="name" placeholder="{{__('pages.Enter your name')}}" required="required" class="form-control">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="surname">{{__('pages.Your Phone')}} *</label>
                          <input type="text" name="phone" placeholder="{{__('pages.Enter your  phone')}}" required="required" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="surname">{{__('pages.Your Email')}} *</label>
                      <input type="email" name="email" placeholder="{{__('pages.Enter your  email')}}" required="required" class="form-control">
                    </div>
                    <!-- <div class="form-group">
                      <label for="surname">Your Message for us *</label>
                      <textarea rows="4" name="message" placeholder="Enter your message" required="required" class="form-control"></textarea>
                    </div> -->
                    <div class="form-group">
                      <label for="surname">{{__('pages.Choice Departmint')}} *</label>
                    <select class="form-control form-control-lg" name="clinic" id="clinic_select">

                      @foreach($clinic as $item)
                      <option value="{{$item->name_en}}" >{{$item->TextTrans('name')}}</option>

                      @endforeach


                    </select>
                    </div>


                    <div class="form-group">
                      <label for="dtp_input1" class="col-md-12 control-label">{{__('pages.Choice DateTime')}} *</label>
                      <div class="input-group date form_datetime col-md-12" data-date="" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                        <input class="form-control" size="16" type="text" value="" readonly>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                      </div>
                      <input type="hidden" id="dtp_input1" value="" name="date" /><br/>
                    </div>
                    <div class="text-center">
                      <button  type="button" id="booknow" class="btn btn-primary btn-block">{{__('pages.Book Now')}}</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-6 wow fadeInRight" >
                <div class="col-md-11 col-md-offset-1">
                  <h4>{{__('pages.Contact Us')}}:</h4>
                </div>

              <div class="col-md-10 col-md-offset-2">

                <h6 title="address" >{{__('pages.Address')}}</h6>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{$info->TextTrans('address') }} </p>
                <h6 title="phone number">{{__('pages.Phone')}}</h6>
                @foreach($phone as $item)
                <p>{!! $item->icon !!} <span @if($locale=='ar') style="direction: ltr;float:right" @endif ><a href="tel:{{$item->phone}}" title="phone number" @if($locale=='ar') style="float:left" @endif >{{$item->phone}}</a></span>  </p>
                @endforeach
                <h6 title="email" >{{__('pages.Email')}}</h6>
                <p> <i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:{{$info->email}}" title="email">{{$info->email}}</a> </p>
                <p class="social">
                  @foreach($social as $item)
                 <a href="{{$item->link}}" title="{{$item->name}}"  > <img src="{{asset($item->image)}}" alt="{{$item->name}}" class="img-responsive"> </a>
                 @endforeach
                 <!-- <a href="#" title="" class="email"><i class="fa fa-envelope"></i></a> -->
                 </p>
              </div>

                <!-- <p>Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed. </p>
                <p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. </p>
                 -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZKk715C3VacWdM2_IHah8z5CVe0qT7AI"></script>
<script type="text/javascript">
$(document).ready(function(){
     $("#myCarousel").carousel({
         interval : 10000,
         pause: false
     });
});
</script>
<script type="text/javascript">

$(document).ready(function(){
$("#booknow").click(function(e){

e.preventDefault();



var name = $("input[name='name']").val();

var email = $("input[name='email']").val();

var phone = $("input[name='phone']").val();

var clinic = $("#clinic_select").val();

var date = $("input[name='date']").val();

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  $('#booknow').addClass('disabled');
  var newI = $('<i class="fa fa-spinner fa-spin"></i>');
  $('#booknow').append(newI);

console.log(date);
// var message = $("textarea[name='cmessage']").val();


  $.ajax({

      url: '/en/appointment',

      method:'POST',

      data: {name:name, email:email,phone:phone,date:date,clinic:clinic},

      success: function(data) {

          if($.isEmptyObject(data.error)){
            // printSuccessBookMsg (data.success);

         	printSuccessBookMsg ();
              resetForm();
              $('#booknow').removeClass('disabled');
               newI.remove();
               restorealert(data.success);

          }else{

            printErrorBookMsg(data.error);
            $('#booknow').removeClass('disabled');

                 newI.remove();
          }

      }

  });


});

function printErrorBookMsg (msg) {

$(".print-error-book-msg").find("ul").html('');

$(".print-error-book-msg").css('display','block');

$.each( msg, function( key, value ) {

$(".print-error-book-msg").find("ul").append('<li>'+value+'</li>');

});

}
function printSuccessBookMsg () {

$(".print-error-book-msg").find("ul").html('');

$(".print-error-book-msg").css('display','none');



}

function resetForm() {
    document.getElementById("appointmentForm").reset();
}
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1199,1],
        itemsDesktopSmall:[1000,1],
        itemsTablet:[767,1],
        pagination: false,
        navigation:true,
        navigationText:["",""],
        slideSpeed:1000,
        autoPlay:false
    });
});
</script>
<script type="text/javascript">
(function ($) {

  // Add smooth scrolling to all links in navbar
  $(".navbar a, .nav li a, .overlay-detail a").on('click', function(event) {

      var hash = this.hash;
      if( hash ) {
          event.preventDefault();
          $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 4000, function(){
            window.location.hash = hash;
        });
      }

  });
  //
  // jQuery to collapse the navbar on scroll
  // $(window).scroll(function() {
  //     if ($(".navbar-default").offset().top > 50) {
  //         $(".navbar-fixed-top").addClass("top-nav-collapse");
  //     } else {
  //         $(".navbar-fixed-top").removeClass("top-nav-collapse");
  //     }
  // });

})(jQuery);

</script>
@endsection
