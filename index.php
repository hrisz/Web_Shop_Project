<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Ventura丨Online Shop Website</title>
  <link rel="shortcut icon" href="https://i.ibb.co/VtsdG0x/20221224-123556.png" type="image/x-icon">
</head>

<body>

  <!-- Navbar -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <img class="navbar-brand" src="https://i.ibb.co/N6qsFcf/20221224-123650.png" href="index.php">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="signup.php">Sign up</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Product
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="productinfo.php">List Product</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              User Info
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="userinfo.php">List User</a>
              </li>
          </li>
        </ul>
        </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Background -->

  <div class="bgimg">

    <!-- Promotion Banner -->

    <div class="wrapper">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://img.freepik.com/premium-vector/new-year-2023-promotion-poster-banner-with-gift-box-christmas-element-retail_139523-834.jpg?w=2000" class="d-block w-100" alt="Promotion-1">
          </div>
          <div class="carousel-item">
            <img src="https://apsida.gr/wp-content/uploads/2017/05/APSIDA-PLAISIO-PYLAIASNAFPLIOU-2000X512-FOX-CREATIVE.jpg" class="d-block w-100" alt="Promotion-2">
          </div>
          <div class="carousel-item">
            <img src="https://www.leihzig.de/sites/default/files/kategorien/desktop/29/female-runner-tying-her-shoes-preparing-for-a-run-picture-id680346294.jpg" class="d-block w-100" alt="Promotion-3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Best Offer menu -->
    <h1 class="bestoffer-title">Best Offer!</h1>
    <h1 class="expiredoffer">From : 25 Dec - 30 Dec</h1>

    <div class="container">
      <div class="row text-center mb-3">
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="https://cdn.shopify.com/s/files/1/0062/1169/8777/products/A-0446-GUC-01_grande.jpg?v=1634183141" class="card-img-top" alt="OfferProd_1" />
            <div class="card-body">
              <h5 class="card-title">GUCCI Shoulder Bag</h5>
              <p class="card-text">There are only 2 in this world, Jennie own one of them </p>
              <a href="#" class="btn btn-primary">BUY丨US$1.199</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="https://www.evetech.co.za/repository/components/logitech-g-g502-x-wired-gaming-mouse-main-image-600px-v1.jpg" class="card-img-top" alt="OfferProd_2" />
            <div class="card-body">
              <h5 class="card-title">Logitech Gaming Mouse</h5>
              <p class="card-text">The most suitable mouse for your gaming experience.</p>
              <a href="#" class="btn btn-primary">BUY丨US$28.75</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="https://images.tokopedia.net/img/cache/700/product-1/2019/2/14/4561762/4561762_404f3ca6-fc02-4f3f-857d-6835e63c4f66_600_400.jpg" class="card-img-top" alt="OfferProd_3" />
            <div class="card-body">
              <h5 class="card-title">Cabinet (Premium)</h5>
              <p class="card-text">Premium quality cabinet to make your house looks elegant.</p>
              <a href="#" class="btn btn-primary">BUY丨US$169.50</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="https://cdn06.pramborsfm.com/storage/app/media/Prambors/cropped-images/NIKE%20x%20G-DRAGON-20201109073639.jpg?tr=w-600,f-webp,pr-true" alt="OfferProd_4" />
            <div class="card-body">
              <h5 class="card-title">Nike Air Force 1</h5>
              <p class="card-text">This shoes make you run faster than usain bolt.</p>
              <a href="#" class="btn btn-primary">BUY丨US$83.29</a>
            </div>
          </div>
        </div>
      </div>
    </div><br>
    <div class="container">
      <div class="row text-center mb-3">
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="https://img.tek.id/crop/600x400/content/2022/08/17/53827/monitor-gaming-samsung-odyssey-ark-hadir-dengan-layar-melengkung-55-inci-dan-165-hz-Ap9Y3hp28D.jpg" class="card-img-top" alt="OfferProd_1" />
            <div class="card-body">
              <h5 class="card-title">Samsung Odyssey Ark</h5>
              <p class="card-text">Netflix and chill? Watch movie with good resolution</p>
              <a href="#" class="btn btn-primary">BUY丨US$3.199</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="https://cdn06.pramborsfm.com/storage/app/media/Prambors/cropped-images/Paris%20Saint-Germain-20210112050239.jpg?tr=w-600,f-webp,pr-true" class="card-img-top" alt="OfferProd_2" />
            <div class="card-body">
              <h5 class="card-title">Nike Air Jordan 1</h5>
              <p class="card-text">Air Jordan is a type or brand of basketball shoes produced by Nike.</p>
              <a href="#" class="btn btn-primary">BUY丨US$3.299</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="https://tofarch.com/images/home-office/Home%20Office%20Furniture%201.png" class="card-img-top" alt="OfferProd_3" />
            <div class="card-body">
              <h5 class="card-title">Work Desk (Premium)</h5>
              <p class="card-text">Made with premium quality and high technology</p>
              <a href="#" class="btn btn-primary">BUY丨US$169.50</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="https://jagatplay.com/wp-content/uploads/2013/08/xbox-one-white1-600x400.jpg" alt="OfferProd_4" />
            <div class="card-body">
              <h5 class="card-title">Xbox One</h5>
              <p class="card-text">Gamers? Play with billion players in the world with Xbox!</p>
              <a href="#" class="btn btn-primary">BUY丨US$249,99</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Flash Sale Menu -->

  <div class="bgimg2">

    <h1 class="bestoffer-title">Flash Sale!</h1>
    <h1 class="expiredoffer">From : 1 Jan - 1 Feb</h1>

    <div class="container">
      <div class="row text-center mb-3">
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="https://cdn06.pramborsfm.com/storage/app/media/Prambors/cropped-images/Adidas%20Superstar-20210107081452.jpg?tr=w-600,f-webp,pr-true" class="card-img-top" alt="OfferProd_1" />
            <div class="card-body">
              <h5 class="card-title">Adidas Superstar</h5>
              <p class="card-text">Limited shoes for The Man with 8 bit graphics </p>
              <a href="#" class="btn btn-primary">BUY丨US$736.00</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="https://img.tek.id/crop/600x400/content/2020/06/30/31005/asus-resmi-boyong-zephyrus-g14-harga-mulai-rp18-juta-an-d44QM2IL20.jpg" class="card-img-top" alt="OfferProd_2" />
            <div class="card-body">
              <h5 class="card-title">Asus ROG zephyrus g14</h5>
              <p class="card-text">The most suitable Laptop for your gaming experience.</p>
              <a href="#" class="btn btn-primary">BUY丨US$1153.31</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="https://images-eu.ssl-images-amazon.com/images/I/81XcD1FCBAL._AC_UL600_SR600,400_.jpg" class="card-img-top" alt="OfferProd_3" />
            <div class="card-body">
              <h5 class="card-title">Man United Jersey</h5>
              <p class="card-text">Classic Man united jersey, but man city still better.</p>
              <a href="#" class="btn btn-primary">BUY丨US$169.50</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="https://cdn.shopify.com/s/files/1/1042/1676/products/balenciaga-black-size-large-monogram-hacker-cap-baseball-1118b22-hat-9-1-960-960_grande.jpg?v=1637835461" alt="OfferProd_4" />
            <div class="card-body">
              <h5 class="card-title">Balenciaga Monogram cap</h5>
              <p class="card-text">Infamous cap made by Balenciaga, cool century design</p>
              <a href="#" class="btn btn-primary">BUY丨US$1.242</a>
            </div>
          </div>
        </div>
      </div>
    </div><br>
    <div class="container">
      <div class="row text-center mb-3">
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="https://i.pinimg.com/736x/30/e9/06/30e906e77d26db887f7c96de7061ce60--hermes-belt-mens-belts.jpg" class="card-img-top" alt="OfferProd_1" />
            <div class="card-body">
              <h5 class="card-title">Hermes Belt</h5>
              <p class="card-text">Technically a men's belt but could be unisex! </p>
              <a href="#" class="btn btn-primary">BUY丨US$675.00</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="https://images-eu.ssl-images-amazon.com/images/I/61RoaKls7bL._AC_UL600_SR600,400_.jpg" class="card-img-top" alt="OfferProd_2" />
            <div class="card-body">
              <h5 class="card-title">Puma Tracksuit</h5>
              <p class="card-text">The most popular items ordered as gifts for baby boy.</p>
              <a href="#" class="btn btn-primary">BUY丨US$20.00</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="https://img.tek.id/crop/600x400/content/2022/11/05/56029/apple-iphone-14-pro-max-edisi-terbatas-ini-dihargai-lebih-dari-rp2-miliar-0n40W2dy37.jpg" class="card-img-top" alt="OfferProd_3" />
            <div class="card-body">
              <h5 class="card-title">iPhone 14 (Limited)</h5>
              <p class="card-text">Limited iphone 14 pro max with gold design</p>
              <a href="#" class="btn btn-primary">BUY丨US$128.145,16</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="https://rangeservant.us/wp-content/uploads/2018/08/Range-Clubs-600x400.jpg" alt="OfferProd_4" />
            <div class="card-body">
              <h5 class="card-title">Golf stick</h5>
              <p class="card-text">Infamous golf stick for oldmen and professional</p>
              <a href="#" class="btn btn-primary">BUY丨US$96.11</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="text-center text-lg-start bg-dark text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Ventura Corp.
            </h6>
            <p>
              A corporation working on worldwide shopping, collaboration with alot of famous brands in the world.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Furniture</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Technology</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Fashion</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Developer Tools
            </h6>
            <p>
              <a href="#!" class="text-reset">Add Product</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Edit Product</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Delete Product</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i>Artha Graha Building, South Jakarta</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              user_cs@ventura.com
            </p>
            <p><i class="fas fa-phone me-3"></i> +62 876 112 224</p>
            <p><i class="fas fa-print me-3"></i> +62 853 333 456</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="#">Ventura Project</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</body>

</html>