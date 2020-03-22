@extends('layouts.main')
@section('css')
  <link rel="stylesheet" href="{{asset('main/css/doctor.css')}}">
@endsection
@section('title')
{{__('pages.Insurance')}}
@endsection
@section('content')
<section class="top-section">
   <div class="background-heaer">
     <div class="container ">
       <div class="row">
         <div class="col-lg-12 header-top text-center">
           <h1 class="heading wow  bounce">{{__('pages.Insurance')}}</h1>
         </div>
       </div>
     </div>
   </div>

 </section>
 <!-- about-->
 <section id="about" class="text" style="background:#fff">
<style media="screen">

.gallery img{
width: 250px;
height: 130px;
}
#about{
margin-top: 100px;
margin-bottom: 100px;
}
</style>
   <div class="container ">
     <div class="row gallery">

       @forelse($insurance as $item)
         <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 wow zoomIn'>

                 <img class="img-responsive" alt="{{$item->name}}" src="{{asset($item->image)}}" />

         </div>

        @empty
        <h1>Coming Soon</h1>
        @endforelse


     </div>
   </div>
 </section>

@endsection
