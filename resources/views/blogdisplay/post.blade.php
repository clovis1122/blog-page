<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{ $post->id }}">
            {{ htmlspecialchars($post->title) }}
        </a>
    </h2>
    <p class="blog-post-meta">{{ htmlspecialchars($post->created_at->toFormattedDateString()) }}
    by <a href="#">{{ htmlspecialchars($post->user->username) }}</a></p>
    <p>{{ htmlspecialchars($post->entry) }}</p>
</div>
<hr>
<p>

<?php
 $bol = false;
?>

@foreach($post->tags as $tag)

 @if($bol)
  , #{{$tag['name']}}
  @else
  #{{$tag['name']}}
  <?php
 $bol = true;
  ?>
  @endif

@endforeach


</p>
