<div class="container">
  <div class="row">
    <div class="col-sm-8 blog-main">
      @yield('content')
    </div>
    <div class="col-sm-3 offset-sm-1 blog-sidebar">
      @include ('sidebar.sidebarMaster')
    </div>
  </div>
</div>
