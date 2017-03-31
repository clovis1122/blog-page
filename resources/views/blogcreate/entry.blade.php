<form class="form" method="POST" action="/posts"> {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title of the post</label>
    <input type="text" class="form-control" name="title" required>
  </div>
  <div class="form-group">
    <label for="entry">Entry</label>
    <input type="text" class="form-control" name="entry">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-default">Submit</button>
  </div>
</form>
