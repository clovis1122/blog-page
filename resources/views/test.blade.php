  <div class="form-group">
      <ul>
        @foreach($posts as $post)
          <li>{{ var_dump($post)}}</li>
          @endforeach
      </ul>
</div>
