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
      <div class="d-flex justify-content-between">
        <!-- Left elements -->
        <div class="">
          <a href="https://mdbootstrap.com/" target="_blank" class="">
            <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="35" />
          </a>
        </div>
        <!-- Left elements -->

        <!-- right elements -->
        <div class="">
          <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="me-1 border rounded py-1 px-3 nav-link" target="_blank"> <i class="fas fa-user-alt me-2"></i>Sign in </a>
        </div>
        <!-- right elements -->
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
          <a href="" class="text-white-50">2. Shopping cart</a>
          <span class="text-white-50 mx-2"> > </span>
          <a href="" class="text-white"><u>3. Order info</u></a>
          <span class="text-white-50 mx-2"> > </span>
          <a href="" class="text-white-50">4. Payment</a>
        </h6>
      </nav>
      <!-- Breadcrumb -->
    </div>
  </div>
  <!-- Heading -->
</header>

<section class="bg-light py-5">
  <div class="container">
    <div class="row">
      <div class="col-xl-8 col-lg-8 mb-4">
        <div class="card mb-4 border shadow-0">
          <div class="p-4 d-flex justify-content-between">
            <div class="">
              <h5>Have an account?</h5>
              <p class="mb-0 text-wrap ">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>
            <div class="d-flex align-items-center justify-content-center flex-column flex-md-row">
              <a href="#" class="btn btn-outline-primary me-0 me-md-2 mb-2 mb-md-0 w-100">Register</a>
              <a href="#" class="btn btn-primary shadow-0 text-nowrap w-100">Sign in</a>
            </div>
          </div>
        </div>

        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif

        <!-- Checkout -->
        <form method="post" action="{{ route('orders') }}">
          @csrf
          <!-- Order items -->
          <input type="hidden" name="product_id" value="{{ $product->id }}" />

        <div class="card shadow-0 border">
          <div class="p-4">
            <h5 class="card-title mb-3">Vos informations</h5>
            <div class="row">
              <div class="col-6 mb-3">
                <p class="mb-0">Prénom</p>
                <div class="form-outline">
                  <input type="text" id="sender_firstname" name="sender_firstname" placeholder="Type here" class="form-control" />
                </div>
              </div>

              <div class="col-6">
                <p class="mb-0">Nom</p>
                <div class="form-outline">
                <input type="text" id="sender_lastname" name="sender_lastname" placeholder="Type here" class="form-control" />
                  </div>
              </div>

              <div class="col-6 mb-3">
                <p class="mb-0">Téléphone</p>
                <div class="form-outline">
                <input type="tel" id="sender_phone" name="sender_phone" value="+229 " class="form-control" />
                  </div>
              </div>

              <div class="col-6 mb-3">
                <p class="mb-0">Email</p>
                <div class="form-outline">
                <input type="email" id="sender_email" name="sender_email" placeholder="example@gmail.com" class="form-control" />
                  </div>
              </div>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
              <label class="form-check-label" for="flexCheckDefault">Tenez moi au courant des nouvelles</label>
            </div>

            <hr class="my-4" />

            <h5 class="card-title mb-3">Destinataire</h5>

            <!-- <div class="row mb-3">
              <div class="col-lg-4 mb-3">-->
                <!-- Default checked radio -->
                <!--<div class="form-check h-100 border rounded-3">
                  <div class="p-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked />
                    <label class="form-check-label" for="flexRadioDefault1">
                      Express delivery <br />
                      <small class="text-muted">3-4 days via Fedex </small>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-3">-->
                <!-- Default radio -->
                <!--<div class="form-check h-100 border rounded-3">
                  <div class="p-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                    <label class="form-check-label" for="flexRadioDefault2">
                      Post office <br />
                      <small class="text-muted">20-30 days via post </small>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-3">-->
                <!-- Default radio -->
                <!--<div class="form-check h-100 border rounded-3">
                  <div class="p-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" />
                    <label class="form-check-label" for="flexRadioDefault3">
                      Self pick-up <br />
                      <small class="text-muted">Come to our shop </small>
                    </label>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="row">
              <div class="col-sm-8 mb-3">
                <p class="mb-0">Nom</p>
                <div class="form-outline">
                  <input type="text" id="recipient" name="recipient" placeholder="Alicia DJOSSOU" class="form-control" />
                </div>
              </div>

              <div class="col-sm-4 mb-3">
                <p class="mb-0">Ville</p>
                <select class="form-select" name="city">
                  <option value="1">Abomey</option>
                  <option value="2">Abomey-Calavi</option>
                  <option value="3">Allada</option>
                  <option value="4">Aplahoué</option>
                  <option value="5">Athiémé</option>
                  <option value="6">Banikoara</option>
                  <option value="7">Bassila</option>
                  <option value="8">Bembèrèkè</option>
                  <option value="9">Bohicon</option>
                  <option value="10">Comè</option>
                  <option value="11">Cotonou</option>
                  <option value="12">Covè</option>
                  <option value="13">Dassa-zoumè</option>
                  <option value="14">Dogbo-tota</option>
                  <option value="15">Djougou</option>
                  <option value="16">Grand-popo</option>
                  <option value="17">Kandi</option>
                  <option value="18">Kérou</option>
                  <option value="19">Kétou</option>
                  <option value="20">Kouandé</option>
                  <option value="21">Lokossa</option>
                  <option value="22">Natitingou</option>
                  <option value="23">N'dali</option>
                  <option value="24">Nikki</option>
                  <option value="25">Malanville</option>
                  <option value="26">Ouidah</option>
                  <option value="27">Parakou</option>
                  <option value="28">Pobè</option>
                  <option value="29">Porto-Novo</option>
                  <option value="30">Savalou</option>
                  <option value="31">Sakété</option>
                  <option value="32">Savè</option>
                  <option value="33">Ségbana</option>
                  <option value="34">Tanguiéta</option>
                  <option value="35">Tchaorou</option>
                </select>
              </div>

              <div class="col-sm-4 mb-3">
                <p class="mb-0">Résidence</p>
                <div class="form-outline">
                  <input type="text" id="recipient_address" name="recipient_address" placeholder="Togoudo maison DJOSSOU" class="form-control" />
                </div>
              </div>

              <div class="col-sm-4 col-6 mb-3">
                <p class="mb-0">Téléphone</p>
                <div class="form-outline">
                  <input type="tel" id="recipient_phone" name="recipient_phone" placeholder="+22967000000" class="form-control" />
                </div>
              </div>

              <div class="col-sm-4 col-6 mb-3">
                <p class="mb-0">Email</p>
                <div class="form-outline">
                  <input type="tel" id="recipient_email" name="recipient_email" placeholder="alicia@gmail.com" class="form-control" />
                </div>
              </div>
            </div>

            <!--<div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" />
              <label class="form-check-label" for="flexCheckDefault1">Save this address</label>
            </div>-->

            <div class="mb-3">
              <p class="mb-0">Message personnel</p>
              <div class="form-outline">
                <textarea class="form-control" id="textAreaExample1" rows="2"></textarea>
              </div>
            </div>

            <div class="float-end">
              <!--<button class="btn btn-light border">Cancel</button>-->
              <a class="inner btn btn-sm btn-info" href="#">Cancel</a>
              <!--<button class="btn btn-success shadow-0 border">Continue</button>-->
              <input type="submit" class="inner btn btn-sm btn-info" value="Continuer">
            </div>
          </div>
        </div>
        <!-- Checkout -->
      </div>
      <div class="col-xl-4 col-lg-4 d-flex justify-content-center justify-content-lg-end">
        <div class="ms-lg-4 mt-4 mt-lg-0" style="max-width: 320px;">
          <h6 class="mb-3">Résumé</h6>
          <div class="d-flex justify-content-between">
            <p class="mb-2">Prix du produit:</p>
            <p class="mb-2">{{ $product->price_before_tax }} F CFA</p>
          </div>
          <!-- <div class="d-flex justify-content-between">
            <p class="mb-2">Discount:</p>
            <p class="mb-2 text-danger">- $60.00</p>
          </div> -->
          <div class="d-flex justify-content-between">
            <p class="mb-2">Livraison:</p>
            <p class="mb-2">1 000 F CFA</p>
          </div>
          <hr />
          <div class="d-flex justify-content-between">
            <p class="mb-2">Prix Total :</p>
            <p class="mb-2 fw-bold">{{ $product->price_before_tax + 1000 }} F CFA</p>
          </div>

          <!-- <div class="input-group mt-3 mb-4">
            <input type="text" class="form-control border" name="" placeholder="Promo code" />
            <button class="btn btn-light text-primary border">Apply</button>
          </div> -->

          <hr />
          <h6 class="text-dark my-4">Article en panier</h6>

          <div class="d-flex align-items-center mb-4">
            <div class="me-3 position-relative">
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill badge-secondary">
                1
              </span>
              <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/7.webp" style="height: 96px; width: 96x;" class="img-sm rounded border" />
            </div>
            <div class="">
              <a href="#" class="nav-link">
                Gaming Headset with Mic <br />
                Darkblue color
              </a>
              <div class="price text-muted">Total: $295.99</div>
            </div>
          </div>

          <div class="d-flex align-items-center mb-4">
            <div class="me-3 position-relative">
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill badge-secondary">
                1
              </span>
              <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/5.webp" style="height: 96px; width: 96x;" class="img-sm rounded border" />
            </div>
            <div class="">
              <a href="#" class="nav-link">
                Apple Watch Series 4 Space <br />
                Large size
              </a>
              <div class="price text-muted">Total: $217.99</div>
            </div>
          </div>

          <div class="d-flex align-items-center mb-4">
            <div class="me-3 position-relative">
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill badge-secondary">
                3
              </span>
              <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/1.webp" style="height: 96px; width: 96x;" class="img-sm rounded border" />
            </div>
            <div class="">
              <a href="#" class="nav-link">GoPro HERO6 4K Action Camera - Black</a>
              <div class="price text-muted">Total: $910.00</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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

          <ul class="dropdown-menu dropdown-menu-endp" aria-labelledby="Dropdown">
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

