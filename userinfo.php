<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="userinfo.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Ventura丨User Information Database</title>
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
            <a class="nav-link" href="index.php">Home</a>
          </li>
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
    <br>
    <h3 class="usertitle">ADMIN & USER INFORMATION</h3><br>

    <!-- Show data from venturashop database -->

    <div class="wrapper">
      <center>
        <table class="table table-dark table-hover table-bordered" class=" border=" 1">
          <thead>
            <tr>
              <th>Name &nbsp; &nbsp;</th>
              <th>Username &nbsp; &nbsp;</th>
              <th>Email &nbsp;&nbsp; </th>
              <th>Password &nbsp; &nbsp;</th>
              <th>Delete &nbsp; &nbsp;</th>
            </tr>
          </thead>
          <tbody>

            <!-- Import Database -->

            <?php
            include("config.php");
            $sql = "SELECT * FROM data_user";
            $query = mysqli_query($database, $sql);

            while ($user = mysqli_fetch_array($query)) {
              echo "<tr>";
              echo "<td>" . "&nbsp;" . $user['nama'] . "&nbsp;"."</td>";
              echo "<td>" . "&nbsp;" . $user['username'] . "&nbsp;" ."</td>";
              echo "<td>" . "&nbsp;" . $user['email'] . "&nbsp;" ."</td>";
              echo "<td>" . "&nbsp;" . $user['password'] . "&nbsp;" ."</td>";
              echo "<td>" . "&nbsp;" . "<a href='delete_data.php?delete_id=".$user['nama']."'>Delete</a></td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </center>
    </div>
    <p class="userdesc">All user data was imported from data_user table in venturaproject database <br> User password are encrypted by Bcrypt</p>
    <br>
   
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
              <a class="text-reset">Furniture</a>
            </p>
            <p>
              <a class="text-reset">Technology</a>
            </p>
            <p>
              <a class="text-reset">Fashion</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Developed by :
            </h6>
            <p>
              <a class="text-reset">Haris Saefuloh</a>
            </p>
            <p>
              <a class="text-reset">Muhammad Sakha</a>
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