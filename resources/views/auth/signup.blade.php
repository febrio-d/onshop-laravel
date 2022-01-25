@extends('partials.main')

@section('container')
  <div class="container" style="height: 766px;">
    <div class="row h-100 justify-content-center">
      <div class="col-lg-6 m-auto text-center">
        <h1 class="h1 text-center">Onshop Sign up</h1>
          <form action="/signup" method="post">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name">
              @error('name')
                <p class="text-danger text-sm">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username">
              @error('username')
                <p class="text-danger text-sm">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
              @error('email')
                <p class="text-danger text-sm">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="phone">Phone number</label>
              <input type="text" class="form-control" id="phone" name="phone">
              @error('phone')
                <p class="text-danger text-sm">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
              @error('password')
                <p class="text-danger text-sm">{{ $message }}</p>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-3">Sign up</button>
          </form>
          <p class="text-center">Already have an account? <a href="/signin">Sign in here</a></p>
      </div>
    </div>
  </div>
@endsection