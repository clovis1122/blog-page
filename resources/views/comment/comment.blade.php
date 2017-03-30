<div class="comments">
    <ul class="list-group">

    @foreach ($comments as $comment)
        <li class=list-group-item>
            <article>
                <strong>{{ htmlspecialchars($post->created_at->diffForHumans()) }}</strong>
                {{ htmlspecialchars($comment->body) }}
            </article>
        </li>
    @endforeach
    </ul>

</div>
