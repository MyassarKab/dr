<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="Myassar Kaboul">
        <meta name='description' itemprop='description' content='Bachir Jumaa Polyclinic  Pediatrics ,Obstetrics & Gynecology and plastic surgery in Sharjah  United Arab Emirates' />
        <meta name='keywords' content='Bachir Jumaa, Polyclinic, Pediatrics ,Obstetrics & Gynecology , plastic surgery,Sharjah,United Arab Emirates,care of children' />
        <meta property='article:published_time' content='2015-01-31T20:30:11-02:00' />
        <meta property='article:section' content='news' />

        <meta property="og:description"content="Bachir Jumaa Polyclinic  Pediatrics ,Obstetrics & Gynecology and plastic surgery in Sharjah  United Arab Emirates" />
        <meta property="og:title"content="Bachir Jumaa Polyclinic" />
        <meta property="og:url"content="http://drbachir.com" />
        <meta property="og:type"content="article" />
        <meta property="og:locale"content="pt-br" />
        <meta property="og:locale:alternate"content="pt-pt" />
        <meta property="og:locale:alternate"content="ar-ae" />
        <meta property="og:site_name"content="drbachir.com" />
        <meta property="og:image"content="{{asset($aboutinfo->image)}}" />
        <meta property="og:image:url"content="{{asset($aboutinfo->image)}}" />

        <meta name="twitter:card"content="Bachir Jumaa Polyclinic  Pediatrics ,Obstetrics & Gynecology and plastic surgery in Sharjah  United Arab Emirates" />
        <meta name="twitter:title"content="Bachir Jumaa Polyclinic" />
        <meta name="twitter:site"content="@drbachir.com" />

    <title> @yield('title') </title>

    <!-- Styles -->
    <!-- Bootstrap and Font Awesome css-->
    <!-- we use cdn but you can also include local files located in css directory fontawesome.min.css-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


    <!-- slider css -->
    <!-- <link rel="stylesheet" href="css/jquery.maximage.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" charset="utf-8" /> -->
    <!-- theme stylesheet-->


      <link rel="stylesheet" href="{{asset('main/css/style.default.css')}}" id="theme-stylesheet">

     <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
     <link rel="stylesheet" href="{{asset('main/css/darkscroll.css')}}" />
    <!-- ekko lightbox-->
    <link rel="stylesheet" href="{{asset('main/css/ekko-lightbox.css')}}">
      <!-- datetimepicker-->
    <link rel="stylesheet" href="{{asset('main/css/bootstrap-datetimepicker.min.css')}}">
    <!-- Custom stylesheet - for your changes-->

    <link rel="stylesheet" href="{{asset('main/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('main/css/newone.css')}}" id="theme-stylesheet">

    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('main/favicon.png')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  @yield('css')
</head>
<body>
  <?php
	$locale = App::getLocale();

	 ?>
   @if($locale=='ar')
   <style media="screen">
   h1,h2,h3,h4,h5,h6{
        letter-spacing: normal;
   }
   #floatLeft{
     float: left;
   }
   #floatright{
     float: right;
   }
   #floatright2{
     float: right;
   }
   body{
     direction: rtl;
   }
   .rtlclass{
     direction: rtl;
   }
   .rtlclass .testimonial .testimonial-profile {
     float: right;
   width: 135px;
   border: 2px solid #fff;
   margin-left: 7%;
}
.rtlclass.testimonial .testimonial-content:before{
right: 0;
}
@media only screen and (max-width: 768px){
  #floatright{
    float: none;
  }
}
@media only screen and (min-width: 768px){
  .navbar-nav>li {
    float: left;
}
.navbar-collapse{
  float: left !important;
}
.navbar-header {
    float: right;
}

.navbar-nav>li {
    float: right;
}
}



   </style>
   @endif
  @yield('slider')
  <!-- navbar-->

 <header class="header">
   <div class="sticky-wrapper">
     <div role="navigation" class="navbar navbar-default">
       <div class="container">
         <div class="navbar-header">
           <button type="button" id="floatLeft" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-btn btn-sm navbar-toggle ">
             <span class="icon-bar">
             </span>
             <span class="icon-bar">
             </span>
             <span class="icon-bar">
             </span>
           </button>
           <a href="{{URL('/')}}" class="navbar-brand scroll-to " id="floatright2">
             <img src="{{asset('main/img/final-loggo2.png')}}" alt='logo' class="img-responsive " id="floatright2">
           </a>
         </div>
         <div id="navigation" class="collapse navbar-collapse navbar-right">
           <ul class="nav navbar-nav">
             <li class=""><a href="{{URL('/')}}#intro">{{__('pages.Home')}}</a></li>
             <li><a href="{{URL('/')}}/about-us">{{__('pages.About')}} </a></li>
             <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">{{__('pages.Clinics')}} <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                       @foreach($clinicList as $item)
                     <li>
                      @if($item->slug_en=='#')
                       <a href="/{{$item->TextTrans('slug')}}">{{__('pages.coming soon')}}</a>
                       @else
                       <a href="/clinic/{{$item->TextTrans('slug')}}">{{$item->TextTrans('name')}}</a>
                       @endif
                     </li>
                     @endforeach

                   </ul>
             </li>
             <li><a href="{{URL('/')}}/our-portfolio">{{__('pages.Portfolio')}}</a></li>
             <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">{{__('pages.Our Doctors')}} <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                       @foreach($doctorList as $item)
                        <li>
                          @if($item->slug_en=='#')
                          <a href="/{{$item->TextTrans('slug')}}">{{$item->TextTrans('name')}}</a>
                          @else
                          <a href="/doctor/{{$item->TextTrans('slug')}}">{{$item->TextTrans('name')}}</a>
                          @endif
                        </li>
                     @endforeach

                   </ul>
             </li>

             <!-- <li><a href="{{URL('/')}}/insurances">{{__('pages.Insurance')}}</a></li> -->
             <li><a href="{{URL('/')}}/contact-us">{{__('pages.Contact')}}</a></li>
             <?php
               $url=url()->full();
               if($locale=='ar')
               {
                 $url = str_replace('/ar', '/en', $url);

               }else{
                 $url = str_replace('/en', '/ar', $url);
               }

               if (Request::segment(2)=='clinic') {
                 if ($locale=='ar') {
                   $url=URL('/').'/en/clinic/'.$clinic->slug_en;
                 } else {
                    $url=URL('/').'/ar/clinic/'.$clinic->slug_ar;
                 }

               }
               if (Request::segment(2)=='doctor') {
                 if ($locale=='ar') {
                   $url=URL('/').'/en/doctor/'.$doctor->slug_en;
                 } else {
                    $url=URL('/').'/ar/doctor/'.$doctor->slug_ar;
                 }

               }
              ?>
             <li> <a href="{{$url}}">{{__('pages.language')}}</a></li>
           </ul>
         </div>
       </div>
     </div>
   </div>
 </header>
 <!-- /.navbar-->


        @yield('content')
        <style media="screen">
        .copyright {
          margin-top: 20px;
          margin-bottom: 20px;
          color: #eeeeee;
          font-style: italic;
        }
        </style>
        <footer style="background-color: #111;" class="section-inverse">
             <div class="container">
               <div class="row copyright">
                 <div class="col-md-12 text-center">
                   <p>All right reserved &copy;
                    <span id="yearDate"></span>
                      Bachir Jumaa polyclinic </p>
                 </div>

               </div>
             </div>
           </footer>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->

    <!-- Javascript files-->
    <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{asset("main/js/jquery-1.11.0.min.js")}} "><\/script>')</script>
    <!-- Bootstrap CDN-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- jQuery Cookie - For Demo Purpose-->
    <script src="{{asset('main/js/jquery.cookie.js')}}"></script>

    <!-- Lightbox-->

    <script src="{{asset('main/js/ekko-lightbox.js')}}"> </script>
    <!-- Sticky + Scroll To scripts for navbar-->
    <script src="{{asset('main/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('main/js/jquery.scrollTo.min.js')}}"></script>
    @yield('jscontact')
    <!-- google maps-->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZKk715C3VacWdM2_IHah8z5CVe0qT7AI"></script> -->

    <!-- to use it on your site, generate your own API key for Google Maps and paste it above -->
    <!-- <script src="{{asset('main/js/gmaps.js')}}"></script> -->
    <!-- main script-->

    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="{{asset('main/js/jquery.spidochetube.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
<script type="text/javascript">
$('ul.nav li.dropdown').hover(function() {
$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>
<script type="text/javascript">
new WOW().init();
</script>
    <script>
    jQuery(function($){
        $('#youtube').spidochetube({
              key         : 'AIzaSyDX3z1NwPiZbZyhkMRCVyMLlWgU6u7KUhk',
              id          : 'PLcfD4HARQRF-3It9R7RXMRfgn6PpagtSy',
            max_results : 8,
            complete: function(){
                // Initialize the scroll plugin after the playlist is ready
              //  $('#spidochetube_list').niceScroll({cursorcolor:'#666', cursorborder:'0px solid #fff',autohidemode:false});
            }
        });
    });
    </script>
    <script type="text/javascript">

     var d = new Date();
     document.getElementById("yearDate").innerHTML = d.getFullYear();

    </script>
<script type="text/javascript">

  $('.carousel').carousel({
interval: 1000 * 20
});
</script>


    <script type="text/javascript">
    $(document).ready(function(){

  $(".filter-button").click(function(){
      var value = $(this).attr('data-filter');

      if(value == "all")
      {
          //$('.filter').removeClass('hidden');
          $('.filter').show('1000');
          $(".filter").children().children().attr("data-gallery","portfolio");
      }
      else
      {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
          // $(".filter").parent();
          $(".filter").not('.'+value).hide('3000');
          $(".filter").not('.'+value).children().children().removeAttr("data-gallery");
          $('.filter').filter('.'+value).show('3000');
            $(".filter").filter('.'+value).children().children().attr("data-gallery","portfolio");

      }
  });

  if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
    </script>
     <script type="text/javascript">
     var $item = $('.carousel .item');
    var $wHeight = $(window).height();
    $item.eq(0).addClass('active');
    $item.height($wHeight);
    $item.addClass('full-screen');

    $('.carousel img').each(function() {
    var $src = $(this).attr('src');
    var $color = $(this).attr('data-color');
    $(this).parent().css({
     'background-image' : 'url(' + $src + ')',
     'background-color' : $color
    });
    $(this).remove();
    });

    $(window).on('resize', function (){
    $wHeight = $(window).height();
    $item.height($wHeight);
    });

    $('.carousel').carousel({
    interval: 6000,
    pause: "false"
    });
     </script>
     <script type="text/javascript">
     $(function() {
      $('.material-card > .mc-btn-action').click(function () {
          var card = $(this).parent('.material-card');
          var icon = $(this).children('i');
          icon.addClass('fa-spin-fast');

          if (card.hasClass('mc-active')) {
              card.removeClass('mc-active');

              window.setTimeout(function() {
                  icon
                      .removeClass('fa-arrow-left')
                      .removeClass('fa-spin-fast')
                      .addClass('fa-bars');

              }, 800);
          } else {
              card.addClass('mc-active');

              window.setTimeout(function() {
                  icon
                      .removeClass('fa-bars')
                      .removeClass('fa-spin-fast')
                      .addClass('fa-arrow-left');

              }, 800);
          }
      });
  });
     </script>
     <!-- datetimepicker -->
     <script src="{{asset('main/js/bootstrap-datetimepicker.min.js')}}"> </script>
     <script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>
<script src="{{ asset('js/sweetalert2.all.js') }}"></script>


<script type="text/javascript">
function restorealert($message){



swal("success", $message, "success");

};

</script>


@yield('js')
<script src="{{asset('main/js/front.js')}}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111890553-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111890553-1');
</script>
</body>
</html>
