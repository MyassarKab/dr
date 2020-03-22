@extends('layouts.main')
@section('css')
  <link rel="stylesheet" href="{{asset('main/css/doctor.css')}}">
@endsection
@section('title')
{{__('pages.Our Blog')}}
@endsection
@section('content')
<section class="top-section" >
   <div class="background-heaer">
     <div class="container ">
       <div class="row">
         <div class="col-lg-12 header-top text-center">
           <h1 class="heading wow  bounce">{{__('pages.Our Blog')}}</h1>
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
       <div class="col-md-12" id="results">
         <div class="row grid" >
           @foreach($Post as $item)
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 card grid-item">
      <div class="thumbnail">
        <img src="{{asset($item->image)}}" class="imag-redponsive" alt="{{$item->TextTrans('title')}}">
        <div class="caption">
          <h3 id="thumbnail-label">{{$item->TextTrans('title')}}</h3>
          {{$item->TextTrans('description')}}
          </div>
        <div class="caption card-footer">
          <a href="{{URL('/')}}/our-blog/{{$item->TextTrans('slug')}}">{{__('pages.Read More')}}</a>
        </div>
      </div>
    </div>

    @endforeach



       <!-- </div> -->
     </div>
   </div>
   </div>
 </div>
 </section>

@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.js"></script>
<script type="text/javascript">
// var msnry = new Masonry( '.grid', {
//   // options
// });
$('.grid').masonry({
  itemSelector: '.grid-item',
  columnWidth: '.grid-item',
  percentPosition: true
});

</script>

@endsection
