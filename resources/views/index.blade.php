<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    
</head>
<body>
    <header>
  <!-- Jumbotron -->
  <div class="p-3 text-center bg-white border-bottom">
    <div class="container">
      <div class="row gy-3">
        <!-- Left elements -->
        <div class="col-lg-2 col-sm-4 col-4">
          <a href="https://mdbootstrap.com/" target="_blank" class="float-start">
            <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="35" />
          </a>
        </div>
        <!-- Left elements -->

        <!-- Center elements -->
        <div class="order-lg-last col-lg-5 col-sm-8 col-8">
          <div class="d-flex float-end">
            <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank">
              <i class="fas fa-user-alt m-1 me-md-2"></i>
              <p class="d-none d-md-block mb-0">Sign in</p>
            </a>
            <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank">
              <i class="fas fa-heart m-1 me-md-2"></i>
              <p class="d-none d-md-block mb-0">Wishlist</p>
            </a>
            <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank">
              <i class="fas fa-shopping-cart m-1 me-md-2"></i>
              <p class="d-none d-md-block mb-0">My cart</p>
            </a>
          </div>
        </div>
        <!-- Center elements -->

        <!-- Right elements -->
        <div class="col-lg-5 col-md-12 col-12">
          <div class="input-group float-center">
            <div class="form-outline">
              <input type="search" id="form1" class="form-control" />
              <label class="form-label" for="form1">Search</label>
            </div>
            <button type="button" class="btn btn-primary shadow-0">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
        <!-- Right elements -->
      </div>
    </div>
  </div>
  <!-- Jumbotron -->

  <!-- Heading -->
  <div class="bg-primary">
    <div class="container py-4">
      <!-- Breadcrumb -->
      <nav class="d-flex">
        <h6 class="mb-0">
          <a href="" class="text-white-50">Home</a>
          <span class="text-white-50 mx-2"> > </span>
          <a href="" class="text-white"><u>Shopping cart</u></a>
        </h6>
      </nav>
      <!-- Breadcrumb -->
    </div>
  </div>
  <!-- Heading -->
</header>

<!-- cart + summary -->
<section class="bg-light my-5">
  <div class="container">
    <div class="row">
      <!-- cart -->
      <div class="col-lg-9">
        <div class="card border shadow-0">
          
            </div>
    </div>
  </div>
</section>
<!-- cart + summary -->
<section>
  <div class="container my-5">
    <header class="mb-4">
      <h3>Recommended items</h3>
    </header>
    
    <div class="row">
    @foreach ($products as $product)
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card px-4 border shadow-0 mb-4 mb-lg-0">
          <div class="mask px-2" style="height: 50px;">
            <div class="d-flex justify-content-between">
              <h6><span class="badge bg-danger pt-1 mt-3 ms-2">New</span></h6>
              <a href="#"><i class="fas fa-heart text-primary fa-lg float-end pt-3 m-2"></i></a>
            </div>
          </div>
          <a href="#" class="">
            <img src="/storage/products/img/{{ $product->image }}" class="card-img-top rounded-2" />
            <a class="inner btn btn-sm btn-info" href="{{ route('product.show', $product->id)}}">detail</a>
          </a>
          <div class="card-body d-flex flex-column pt-3 border-top">
            <a href="#" class="nav-link">{{ $product->name }}</a>
            <div class="price-wrap mb-2">
              <strong class="">{{ $product->price_before_tax }}</strong>
              <!-- <del class="">$24.99</del> -->
            </div>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#" class="btn btn-outline-primary w-100"> Add to cart</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      
    </div>   
</section>
    
<!-- Recommended -->

<!-- Footer -->
<footer class="text-center text-lg-start text-muted bg-primary mt-3">
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start pt-4 pb-4">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-12 col-lg-3 col-sm-12 mb-2">
          <!-- Content -->
          <a href="https://mdbootstrap.com/" target="_blank" class="text-white h2">
            MDB
          </a>
          <p class="mt-1 text-white">
            © 2023 Copyright: MDBootstrap.com
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-6 col-sm-4 col-lg-2">
          <!-- Links -->
          <h6 class="text-uppercase text-white fw-bold mb-2">
            Store
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-white-50" href="#">About us</a></li>
            <li><a class="text-white-50" href="#">Find store</a></li>
            <li><a class="text-white-50" href="#">Categories</a></li>
            <li><a class="text-white-50" href="#">Blogs</a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-6 col-sm-4 col-lg-2">
          <!-- Links -->
          <h6 class="text-uppercase text-white fw-bold mb-2">
            Information
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-white-50" href="#">Help center</a></li>
            <li><a class="text-white-50" href="#">Money refund</a></li>
            <li><a class="text-white-50" href="#">Shipping info</a></li>
            <li><a class="text-white-50" href="#">Refunds</a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-6 col-sm-4 col-lg-2">
          <!-- Links -->
          <h6 class="text-uppercase text-white fw-bold mb-2">
            Support
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-white-50" href="#">Help center</a></li>
            <li><a class="text-white-50" href="#">Documents</a></li>
            <li><a class="text-white-50" href="#">Account restore</a></li>
            <li><a class="text-white-50" href="#">My orders</a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-12 col-sm-12 col-lg-3">
          <!-- Links -->
          <h6 class="text-uppercase text-white fw-bold mb-2">Newsletter</h6>
          <p class="text-white">Stay in touch with latest updates about our products and offers</p>
          <div class="input-group mb-3">
            <input type="email" class="form-control border" placeholder="Email" aria-label="Email" aria-describedby="button-addon2" />
            <button class="btn btn-light border shadow-0" type="button" id="button-addon2" data-mdb-ripple-color="dark">
              Join
            </button>
          </div>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <div class="">
    <div class="container">
      <div class="d-flex justify-content-between py-4 border-top">
        <!--- payment --->
        <div>
          <i class="fab fa-lg fa-cc-visa text-white"></i>
          <i class="fab fa-lg fa-cc-amex text-white"></i>
          <i class="fab fa-lg fa-cc-mastercard text-white"></i>
          <i class="fab fa-lg fa-cc-paypal text-white"></i>
        </div>
        <!--- payment --->

        <!--- language selector --->
        <div class="dropdown dropup">
          <a class="dropdown-toggle text-white" href="#" id="Dropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> <i class="flag-united-kingdom flag m-0 me-1"></i>English </a>

          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Dropdown">
            <li>
              <a class="dropdown-item" href="#"><i class="flag-united-kingdom flag"></i>English <i class="fa fa-check text-success ms-2"></i></a>
            </li>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
            </li>
          </ul>
        </div>
        <!--- language selector --->
      </div>
    </div>
  </div>
</footer>
<!-- Footer -->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>

