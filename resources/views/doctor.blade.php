@extends('layouts.main')
@section('css')
  <link rel="stylesheet" href="{{asset('main/css/doctor.css')}}">
@endsection
@section('title')
{{__('pages.DR')}}.{{$doctor->TextTrans('name')}}
@endsection
@section('content')
<!-- about-->
<section class="top-section">
  <div class="background-heaer">
    <div class="container ">
      <div class="row">
        <div class="col-lg-12 header-top text-center">
          <h1 class="heading wow  bounce">{{__('pages.Our Doctors')}}</h1>
        </div>
      </div>
    </div>
  </div>

</section>
<section id="about" class="text" style="background:#fff">
  <!-- background-image: url('img/ein-steig.jpg');  -->
  <div class="container ">
    <div class="row">
      <!-- <div class="col-lg-12">
        <h2 class="heading wow  bounceInLeft">About Us</h2>
      </div> -->
      <div class="col-md-6 wow fadeInLeft" id="floatright">

        <h4>DR.{{$doctor->TextTrans('name')}}</h4>
        {!!$doctor->TextTrans('detalis')!!}
      <h3 class=" wow fadeInLeft">{{__('pages.Special Interest')}}</h3>
      <div class="wow fadeInLeft">
        {!!$doctor->TextTrans('specialist')!!}
      </div>



      </div>
      <div class="col-md-5 @if($locale=='en') col-sm-offset-1 @endif wow fadeInRight"  >

        <div   class="myadiv"><img src="{{asset($doctor->image)}}" alt="{{$doctor->TextTrans('name')}}" title="{{$doctor->TextTrans('name')}}" class="img-responsive" style=""></div>
      </div>
      <div class="col-lg-12 wow fadeInLeft">
        <div class="wrapper-btn">
         <div class="container-btn ">
           <a href="{{ URL::route('mainPage')}}#appointment" ><i class="fa fa-calendar " aria-hidden="true"></i>{{__('pages.Book Now')}} </a>
         </div>
        </div>
      </div>
    </div>
  </div>

</section>

<section style="margin-top: 60px;">
<div class="container">
<div class="row myrow">
<div class="col-md-12">
   <h3 class="heading wow bounceInLeft">{{__('pages.CERTIFICATE AND AWARDS')}}</h3>
</div>
<div class="row row-margin-bottom">
  <?php $i=0; ?>
  @foreach($doctor->certificate as $item)
<div class="col-md-5   lib-item wow slideInUp" data-category="view" id="floatright">
<div class="lib-panel">
    <div class="row box-shadow">
        <div class="col-md-6" id="floatright">
            <img class="lib-img-show" src="{{asset($item->image)}}">
        </div>
        <div class="col-md-6">
            <div class="lib-row lib-header">
              {{$item->TextTrans('name')}}
                <div class="lib-header-seperator"></div>
            </div>
            <div class="lib-row lib-desc">
              {!!$item->TextTrans('detalis')!!}
             </div>
        </div>
    </div>
</div>
</div>
@if($i==0 || $i%2==0)
<div class="col-md-1"></div>
@endif
<?php $i=$i+1; ?>
@endforeach


</div>
</div>


</div>
</section>



@endsection

@section('js')

@endsection
