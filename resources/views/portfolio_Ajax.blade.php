
         <?php  $i=0; ?>
           @foreach($gallery as $item)
              @if($i==0 || $i%3==0) <div class="row"> @endif
           <div class="col-sm-4 filter clinic{{$item->clinic_id}} wow zoomIn"  >
             <div class="box"><a href="{{asset($item->image)}}" title="{{$item->clinic->TextTrans('name')}}" data-toggle="lightbox" data-gallery="portfolio" data-title="Portfolio image{{$i+1}}" data-footer="Some footer information"><img src="{{asset($item->image)}}" alt="{{$item->clinic->TextTrans('name')}} " class="img-responsive"></a></div>
           </div>
            @if(($i+1)%3==0)  </div> @endif
              <?php  $i=$i+1; ?>
           @endforeach
