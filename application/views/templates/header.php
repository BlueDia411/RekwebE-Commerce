<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slick.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slick-theme.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

  <title><?= $judul; ?></title>
</head>

<body>
  <nav class="sticky-top navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container ">
      <a class="navbar-brand" href="<?= base_url(); ?>">BECAUSEØMAT</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse pb-sm-0" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link mr-3 " href="<?= base_url(); ?>">Home</a>
          <a class="nav-item nav-link mr-3" href="<?= base_url(); ?>shop">Shop</a>
          <a class="nav-item nav-link mr-3" href="<?= base_url(); ?>service">Customer Service</a>
        </div>
      </div>
      <div class="mr-5">
        <a class="text-decoration-none text-light" href="<?= base_url(); ?>chart">
          <h4><i class="fas fa-shopping-cart"></i></h4>
        </a>
      </div>

      <div class="dropdown mr-5">
        <a class=" text-decoration-none text-light p-2" href="#" id="dropdownMenuLink" data-toggle="dropdown">
          <h4><i class="far fa-user-circle"></i></h4>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a href="#modalLogin" class="dropdown-item" data-toggle="modal">Login</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- modal pup up -->


  <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title  w-100 font-weight-bold" id="exampleModalLabel">Form Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="user">
            <div class="form-group">
              <input type="text" class="form-control form-control-user" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter Email Address...">
            </div>
            <div class="form-group">
              <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox small">
                <input type="checkbox" class="custom-control-input" id="customCheck">
                <label class="custom-control-label" for="customCheck">Remember Me</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
              Login
            </button>
          </form>
        </div>
        <div class="modal-footer">
          <div class="text-center">
            <a class="small" href="forgot-password.html">Forgot Password?</a>
          </div>
          <div class="text-center">
            <a href="#modalRegister" class="small" data-toggle="modal">Create an Account!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal pop up -->

  <!-- modal pop up register -->
  <div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title  w-100 font-weight-bold" id="exampleModalLabel">Form Register</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="user" method="post" action="<?= base_url('home/index'); ?>">
            <div class="form-group">
              <input type="text" class="form-control form-control-user" name="name" id="name" placeholder="Full Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-control-user" name="email" id="email" placeholder="Email Address">
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
              </div>
              <div class="col-sm-6">
                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-user btn-block">
            Register Account
          </button>
        </div>
      </div>
    </div>
  </div>
  <!--  end modal pop up register -->