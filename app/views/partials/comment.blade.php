<div class="well">
   <a href="{{ route('home.offer', $comment->offer_id) }}">
      {{ $comment->user->username }}
      <span class="label label-success pull-right">{{ trans('general.mark') }}: {{ $comment->mark }}</span>
   </a>
   <div>{{ $comment->webBody() }}</div>
</div>