<div class="blog-post">
    <h2 class="blog-post-title">
<a href="/posts/{{$post['id']}}">
  {{ $post['title'] }}
</a>

</h2>
         <p class="blog-post-meta">{{ $post['created_at']->toFormattedDateString() }} by <a href="#">{{ $post['user'] }}</a></p>
         <p>{{ $post['entry'] }}</p>


@if (count($posts) > 1)
    {{ $posts->links() }}
@endif

    <div class="comments">
      @foreach ($posts['comments'] as $comment)

    <article>
      {{$comment->body}
    </article>
    @endforeach
    </div>

</div>
