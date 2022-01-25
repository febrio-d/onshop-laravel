<div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="/" class="navbar-brand d-flex align-items-center">
        <img src="{{ asset('img/web.png') }}" alt="Web" width="20" height="20">
        <strong class="ml-1">Onshop</strong>
      </a>
      @if (auth()->user())
      <div class="btn-group">
        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown"></button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">{{ auth()->user()->name }}</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Shopping cart</a>
          <a class="dropdown-item" href="#">Edit profile</a>
          <form action="/signout" method="post">
            @csrf
            <button class="dropdown-item" type="submit">Sign out</button>
          </form>
        </div>
      </div>
      @endif
    </div>
</div>