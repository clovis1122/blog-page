<form class="form" method="POST" action="/registration"> {{ csrf_field() }}
  <div class="form-group">
    <label for="user">User</label>
    <input type="text" class="form-control" name="user" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="title" required>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" required>
  </div>
  <div class="form-group">
    <label for="password_confirmation">Password confirmation</label>
    <input type="password" class="form-control" name="password_confirmation" required>
  </div>
</form>
