<?php
  $news = App\newspaper::all();
?>
 <section class="brand-carousel">
        <div class="container">
          <h2>Newspapers</h2>
          <div  class="inner">
            @foreach($news as $new)
            <a style="height: 100px;" class="item img-circle thumb-sm" href="{{url('/jobs/paperjobs')}}/{{$new->id}}">
            <img style="max-width: 100%; max-height: 100%; border-radius: 50%; object-fit: contain;" class="b_img" src="{{URL::to('public/admin/job/upload/Logo')}}/{{$new->paper_logo}}" alt="jQuery"/></a>
            @endforeach 
          </div>
        </div>
      </section>