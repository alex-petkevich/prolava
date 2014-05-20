<a class="image-container" href="{{ route('home.offer', $offer->id) }}">
   <img src="{{{ $offer->image }}}">
</a>
<div class="caption">
   <h3>{{{ $offer->title }}}</h3>
   <hr>
   <p class="description">{{ $offer->webDescription() }}</p>
   <hr>
   <p><span class="label label-important">{{{ $offer->off }}} % off</span></p>
   <p>Location: <a href="{{ route('home.by_city', $offer->city->name) }}">{{{ $offer->city->name }}}</a></p>
   <p>Offer by: <a href="{{ route('home.by_company', $offer->company->title) }}">{{{ $offer->company->title }}}</a></p>
   <p>Expires on: <span class="label label-warning">{{{ $offer->expires }}}</span></p>
   <p>Tags:
      @foreach($offer->tags as $tag)
      <a class="no_decoration" href="{{ route('home.by_tag', $tag->title) }}">
         <span class="badge">{{{$tag->title}}}</span>
      </a>
      @endforeach
   </p>
</div>