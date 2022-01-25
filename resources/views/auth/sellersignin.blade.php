@extends('partials.main')

@section('container')
  <div class="container" style="height: 766px;">
    <div class="row h-100 justify-content-center">
      <div class="col-lg-6 m-auto text-center">
        <h1 class="h1 text-center">Onshop Seller Sign in</h1>
          <form>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="email" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary mb-3">Sign in</button>
          </form>
          <p class="text-center">Didn't have an account? <a href="/sellersignup">Sign up here</a></p>
      </div>
    </div>
  </div>
@endsection