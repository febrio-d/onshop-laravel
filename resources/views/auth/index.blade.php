@extends('partials.main')

@section('container')
  <div class="container" style="height: 766px;">
    <div class="row h-100 justify-content-center">
      <div class="col-lg-6 m-auto text-center">
        <h1 class="h1 text-center">Onshop Sign in</h1>
        @if (session()->has('success'))
          <div class="alert alert-success" role="alert">
            {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
        @endif
        @if (session()->has('error'))
          <div class="alert alert-danger" role="alert">
            {{ session('error') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
        @endif
          <form action="/signin" method="post">
            @csrf
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary mb-3">Sign in</button>
          </form>
          <p class="text-center">Didn't have an account? <a href="/signup">Sign up here</a></p>
      </div>
    </div>
  </div>
@endsection