@extends('layouts.main')
@section('css')
  <link rel="stylesheet" href="{{asset('main/css/clinic.css')}}">
@endsection
@section('title')
{{__('pages.About Us')}}
@endsection
@section('content')
<section class="top-section">
      <div class="background-heaer">
        <div class="container ">
          <div class="row">
            <div class="col-lg-12 header-top text-center">
              <h1 class="heading wow  bounce">{{__('pages.About Us')}}</h1>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section id="about" class="text" style="background:#fff">

      <div class="container ">
        <div class="row">

          <div class="col-md-6 wow fadeInLeft" id="floatright" >

            <h4>DR.{{$about->TextTrans('title')}}</h4>

            {!!$about->TextTrans('details')!!}

          </div>
          <div class="col-md-5 @if($locale=='en') col-sm-offset-1 @endif wow fadeInRight"  >
            <style media="screen">

            </style>
            <div   class="myadiv"><img src="{{asset($about->image)}}" alt="{{$about->TextTrans('title')}}" title="{{$about->TextTrans('title')}}" class="img-responsive" style=""></div>
          </div>
        </div>
      </div>
    </section>

    <style media="screen">


    </style>
    <section class="our">
      <div class="background-our-color ">
        <div class="container padding-container">
          <div class="row">
            <div class="col-lg-4 col-sm-4 background-our wow  zoomIn">

                  <h4 class="heading">{{__('pages.OUR MISSION')}}</h4>
                    {!!$about->TextTrans('mission')!!}


            </div>
            <div class="col-lg-4 col-sm-4 wow fadeInUp text-center">

              <img src="{{asset('main/img/our.png')}}" alt="" style="display:inline-block">
            </div>
            <div class="col-lg-4 col-sm-4 background-our vision wow  zoomIn">
              <h4 class="heading">{{__('pages.OUR VISION')}}</h4>
                {!!$about->TextTrans('vision')!!}
            </div>

          </div>
        </div>
      </div>

    </section>


    <style media="screen">
    .lib-panel {
        margin-bottom: 20Px;
    }
    .lib-panel img {
        width: 100%;
        background-color: transparent;
    }

    .lib-panel .row,
    .lib-panel .col-md-6 {
        padding: 0;
        background-color: #FFFFFF;
    }


    .lib-panel .lib-row {
        padding: 0 20px 0 20px;
    }

    .lib-panel .lib-row.lib-header {
        background-color: #FFFFFF;
        font-size: 20px;
        padding: 10px 20px 0 20px;
    }

    .lib-panel .lib-row.lib-header .lib-header-seperator {
        height: 2px;
        width: 26px;
        background-color: #d9d9d9;
        margin: 7px 0 7px 0;
    }

    .lib-panel .lib-row.lib-desc {
        position: relative;
        height: 100%;
        display: block;
        font-size: 13px;
    }
    .lib-panel .lib-row.lib-desc a{
        position: absolute;
        width: 100%;
        bottom: 10px;
        left: 20px;
    }

    .row-margin-bottom {
        margin-bottom: 20px;
    }

    .box-shadow {
        -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
        box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
    }

    .no-padding {
        padding: 0;
    }

     </style>

     <!-- Portfolio / gallery-->
     <section id="portfolio" style="background-color: #fff;padding-bottom:50px" class="gallery">
       <div class="container clearfix">
         <div class="row">
           <div class="col-md-12">
             <div class="row">
               <div class="col-md-12 col-lg-12">
                 <h4 class="heading wow bounceInLeft">{{__('pages.FACILITIES')}}</h4>


               </div>


             </div>
             <?php  $i=0; ?>
             @foreach($galleryabout as $item)

                @if($i==0 || $i%3==0) <div class="row"> @endif
               <div class="col-sm-4 wow zoomIn" data-wow-delay=".{{$i}}s" id="floatright" >
                 <div class="box"><a href="{{asset($item->image)}}" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="Portfolio image {{$i}}" data-footer=""><img src="{{asset($item->image)}}" alt="" class="img-responsive"  ></a></div>
               </div>

                @if(($i+1)%3==0)  </div> @endif
             <?php  $i=$i+1; ?>
             @endforeach





             </div>

         </div>
       </div>
     </section>

@endsection
