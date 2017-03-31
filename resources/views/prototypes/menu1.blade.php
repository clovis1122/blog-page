<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link" href="/">Main page</a>
          <a class="nav-link" href="/create">Create a post!</a>

          @if (! Auth::check())
          <a class="nav-link" href="/login">Sign in</a>
          <a class="nav-link" href="/register">Register</a>

          @else
          <a class="nav-link ml-auto disabled">{{ Auth::user()->username }}</a>
          <a class="nav-link" href="/logout">logout</a>
          @endif

        </nav>
      </div>
</div>
