<div class="comments">
    <ul class="list-group">

    @foreach ($comments as $comment)
        <li class=list-group-item>
            <article>
                <strong>{{ htmlspecialchars($comment->created_at->diffForHumans()) }}</strong>
                {{ htmlspecialchars($comment->body) }}
            </article>
        </li>
    @endforeach
    </ul>
    @include('error')
</div>
