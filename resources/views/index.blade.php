@extends('partials.main')

@section('container')
<section class="jumbotron text-center">
    <div class="container">
      <h1>Onshop</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <form>
        <input class="form-control mb-3" type="text" placeholder="Search">
      </form>
      <p>
        <a href="/signin" class="btn btn-primary">Sign in</a>
        <a href="/sellersignin" class="btn btn-secondary">Be a seller</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <form class="form-inline">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preference</label>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
          <option selected>Filter</option>
          <option value="1">Newest</option>
          <option value="2">Least Pricy</option>
          <option value="3">Most Pricy</option>
        </select>
        <button type="submit" class="btn btn-primary my-1">Apply Filter</button>
      </form>
      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="{{ asset('img/product.png') }}" class="card-img-top" width="350" height="175" alt="Product 1">
            <div class="card-body">
              <h5 class="card-title">Product 1</h5>
              <strong class="card-text"><sup>Rp. </sup>50.000</strong>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">More details</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="{{ asset('img/product.png') }}" class="card-img-top" width="350" height="175" alt="Product 2">
            <div class="card-body">
              <h5 class="card-title">Product 2</h5>
              <strong class="card-text"><sup>Rp. </sup>50.000</strong>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">More details</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="{{ asset('img/product.png') }}" class="card-img-top" width="350" height="175" alt="Product 3">
            <div class="card-body">
              <h5 class="card-title">Product 3</h5>
              <strong class="card-text"><sup>Rp. </sup>50.000</strong>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">More details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p class="text-center">
      <a href="#">Back to top</a>
    </p>
  </div>
@endsection