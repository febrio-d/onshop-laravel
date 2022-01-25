@extends('partials.main')

@section('container')
  <div class="container" style="height: 766px;">
    <div class="row h-100 justify-content-center">
      <div class="col-lg-6 m-auto text-center">
        <h1 class="h1 text-center">Onshop Seller Sign up</h1>
          <form>
            <div class="form-group">
              <label for="name">Store name</label>
              <input type="text" class="form-control" id="name" name="name" autofocus>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="phone">Phone number</label>
              <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary mb-3">Sign up</button>
          </form>
          <p class="text-center">Already have an account? <a href="/sellersignin">Sign in here</a></p>
      </div>
    </div>
  </div>
@endsection