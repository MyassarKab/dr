@extends('layouts.main')
@section('css')
  <link rel="stylesheet" href="{{asset('main/css/doctor.css')}}">
@endsection
@section('title')
{{$post->TextTrans('titel')}}
@endsection
@section('content')
<section class="top-section" >
   <div class="background-heaer">
     <div class="container ">
       <div class="row">
         <div class="col-lg-12 header-top text-center">
           <h1 class="heading wow  bounce">{{$post->TextTrans('titel')}}</h1>
         </div>
       </div>
     </div>
   </div>

 </section>
 <style media="screen">

   .ajax-loading{
     display: none;
   }
   .comm-margin{
     margin-top: 20px;
     margin-bottom: 20px;
   }
   .load-btn{
      border-color: #70bc4f;
      color: #70bc4f;
   }
   .load-btn:active,.load-btn:focus,.load-btn:hover{
     background:#70bc4f !important;
     border-color: #fff;
   }

#results{
  margin-bottom: 20%;
}
 </style>
 <!-- Portfolio / gallery-->
 <section id="portfolio" style="background-color: #fff;" class="gallery">
   <div class="container clearfix">
     <div class="row">
       <div class="col-md-9 col-md-offset-3" id="results">
         <h1>{{$post->TextTrans('titel')}}</h1>
         <img src="{{asset($post->TextTrans('imgae'))}}" alt="{{$post->TextTrans('titel')}}">
         {!! $item->TextTrans('details')!!}
   </div>
   </div>
 </div>
 </section>

@endsection
@section('js')


@endsection
