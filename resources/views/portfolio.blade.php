@extends('layouts.main')
@section('css')
  <link rel="stylesheet" href="{{asset('main/css/doctor.css')}}">
@endsection
@section('title')
{{__('pages.Our Portfolio')}}
@endsection
@section('content')
<section class="top-section">
   <div class="background-heaer">
     <div class="container ">
       <div class="row">
         <div class="col-lg-12 header-top text-center">
           <h1 class="heading wow  bounce">{{__('pages.Our Portfolio')}}</h1>
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
 </style>
 <!-- Portfolio / gallery-->
 <section id="portfolio" style="background-color: #fff;" class="gallery">
   <div class="container clearfix">
     <div class="row">
       <div class="col-md-12" id="results">
         <div class="row">
           <div class="col-md-12 col-lg-12">
             <h2 class="heading wow bounceInDown">{{__('pages.Portfolio')}}</h2>
             <!-- <p class="wow  wow bounceInDown">Put your portfolio or gallery images here for example. Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. </p> -->

             <div align="center" class="text-center portfolio-button">
                 <button class="btn btn-default filter-button wow bounceInDown" data-filter="all">{{__('pages.All')}}</button>
                 @foreach($clinics as $item)
                 <button class="btn btn-default filter-button wow bounceInDown" data-wow-delay=".2s" data-filter="clinic{{$item->id}}">{{$item->TextTrans('name')}}</button>
                 @endforeach
             </div>

           </div>


         </div>
         <?php  $i=0; ?>
           @foreach($gallery as $item)
              @if($i==0 || $i%3==0) <div class="row"> @endif
           <div class="col-sm-4 filter clinic{{$item->clinic_id}} wow zoomIn"   >
             <div class="box"><a href="{{asset($item->image)}}" title="{{$item->clinic->TextTrans('name')}}" data-toggle="lightbox" data-gallery="portfolio" data-title="Portfolio image{{$i+1}}" data-footer="Some footer information"><img src="{{asset($item->image)}}" alt="{{$item->clinic->TextTrans('name')}} " class="img-responsive"></a></div>
           </div>
            @if(($i+1)%3==0)  </div> @endif
              <?php  $i=$i+1; ?>
           @endforeach


       <!-- </div> -->
     </div>
   </div>
            <div class="ajax-loading"><img src="{{ asset('loading.gif') }}" class="img-responsive" width="30" height="30" /></div>

           <div class="col-md-12 col-sm-12 comm-margin text-center"  >
               <button type="button" name="button" class="btn btn-primary load-btn" id="loadMore">{{__('Load More')}}</button>
           </div>
 </div>
 </section>

@endsection
@section('js')

<script type="text/javascript">
$(document).ready(function() {
var page = 1; //track user scroll as page number, right now page number is 1
//load_more(page); //initial content load

$("#loadMore").click(function(e){
console.log('checkTest');
			e.preventDefault();{ //if user scrolled from top to bottom of the page
			page++; //page number increment
			load_more(page); //load content
	}
});
function load_more(page){
$.ajax(
			{
					url: '?page=' + page,
					type: "get",
					datatype: "html",
					beforeSend: function()
					{
							$('.ajax-loading').show();
					}
			})
			.done(function(data)
			{
					if(data.length == 0){
					console.log(data.length);

							//notify user if nothing to load
							  $('.ajax-loading').html(" ");
							$("#loadMore").hide();
							return;
					}
					$('.ajax-loading').hide(); //hide loading animation once data is received
					$("#results").append(data); //append data into #results element
			})
			.fail(function(jqXHR, ajaxOptions, thrownError)
			{
						alert('No response from server');
			});
}
});
</script>
@endsection
