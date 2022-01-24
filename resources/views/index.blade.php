<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Onshop</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <img src="{{ asset('img/web.png') }}" alt="Web" width="20" height="20">
        <strong class="ml-1">Onshop</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main role="main">

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

</main>

<footer class="text-muted">
  <div class="container">
    <p class="text-center">&copy; Copyright Onshop E-commerce 2022</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
      
  </body>
</html>
