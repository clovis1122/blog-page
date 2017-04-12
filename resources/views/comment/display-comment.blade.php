<div class="comments">
    <ul class="list-group">

    @foreach ($post->comments as $comment)
        <li class=list-group-item>

            <article>
                <p><strong>{{ htmlspecialchars($comment->created_at->diffForHumans())}}</strong>
                {{ htmlspecialchars($comment->body) }}
                By <a href="#">{{ htmlspecialchars($comment->user->username) }}</a></p>
            </article>

        </li>
    @endforeach
    </ul>
    @include('error')
</div>



