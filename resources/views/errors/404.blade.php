@extends('layouts.main')
@section('css')
  <link rel="stylesheet" href="{{asset('main/css/doctor.css')}}">
@endsection
@section('title')
404
@endsection
@section('content')
<section class="top-section">
   <div class="background-heaer">
     <div class="container ">
       <div class="row">
         <div class="col-lg-12 header-top text-center">
           <h1 class="heading wow  bounce">{{__('pages.404')}}</h1>
         </div>
       </div>
     </div>
   </div>

 </section>

 <style media="screen">
   .error-page{
     margin-top: 50px;
     margin-bottom: 50px;
   }
 </style>
 <!-- about-->
 <section id="about" class="text" style="background:#fff">

   <div class="container ">
     <div class="row text-center error-page">

<h1>
{{__('pages.Sorry')}}
</h1>
<h3><a href="{{URL('/')}}">{{__('pages.Home')}}</a></h3>
     </div>
   </div>
 </section>

@endsection
