<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{$post['id']}}">
            {{ htmlspecialchars($post['title']) }}
        </a>
    </h2>
    <p class="blog-post-meta">{{ htmlspecialchars($post['created_at']->toFormattedDateString()) }} by <a href="#">{{ htmlspecialchars($post['user']) }}</a></p>
    <p>{{ htmlspecialchars($post['entry']) }}</p>
</div>

{{--
    <div class="comments">
    @foreach ($posts['comments'] as $comment)

    <article>
      {{ htmlspecialchars($comment->body)}}
    </article>

    @endforeach
    </div>
--}}
