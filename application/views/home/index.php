<div id="carouselExampleCaptions" class="carousel slide marto" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url();  ?>assets/images/bg1.jpeg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>Best Choice</h5>
        <p>Prasent For your couple.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url();  ?>assets/images/bg2.jpeg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>Best Choice</h5>
        <p>Prasent For your couple.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url();  ?>assets/images/bg3.jpeg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>Best Choice</h5>
        <p>Prasent For your couple.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url();  ?>assets/images/bg4.jpeg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>Best Choice</h5>
        <p>Prasent For your couple.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



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
        <form class="user">
          <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
            </div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
          </div>
          <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
            </div>
            <div class="col-sm-6">
              <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="login.html" class="btn btn-primary btn-user btn-block">
          Register Account
        </a>
      </div>
    </div>
  </div>
</div>
<!--  end modal pop up register -->

<!-- Marketing Best Saller -->
<div class="container padto text-center">
  <strong>HOT ITEMS</strong>
  <div class="row autoplay">

    <div class="col-lg-4">
      <img src="<?= base_url(); ?>assets/images/Karambit.jpg" class="rounded img-thumbnail" alt="">
      <div class="card-header">
        <h5>Ruby Karambit</h5>
      </div>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa aspernatur magnam nobis inventore unde quis harum fuga quasi officiis, beatae ducimus illo, laborum perferendis alias ipsa. Aliquam pariatur rerum officia.</p>
      <p>
        <a class="btn btn-info" href="<?= base_url(); ?>detail" role="button">View Detail</a>
      </p>
    </div>

    <div class="col-lg-4">
      <img src="<?= base_url(); ?>assets/images/Karambit-Case-Hardened.jpg" class="rounded img-thumbnail" alt="">
      <div class="card-header">
        <h5>Case Hardened Karambit</h5>
      </div>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa aspernatur magnam nobis inventore unde quis harum fuga quasi officiis, beatae ducimus illo, laborum perferendis alias ipsa. Aliquam pariatur rerum officia.</p>
      <p>
        <a class="btn btn-info" href="<?= base_url(); ?>detail" role="button">View Detail</a>
      </p>
    </div>

    <div class="col-lg-4">
      <img src="<?= base_url(); ?>assets/images/Karambit-Doppler-Blackpearl.jpg" class="rounded img-thumbnail" alt="">
      <div class="card-header">
        <h5>Doppler Blackpearl Karambit</h5>
      </div>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa aspernatur magnam nobis inventore unde quis harum fuga quasi officiis, beatae ducimus illo, laborum perferendis alias ipsa. Aliquam pariatur rerum officia.</p>
      <p>
        <a class="btn btn-info" href="<?= base_url(); ?>detail" role="button">View Detail</a>
      </p>
    </div>

    <div class="col-lg-4">
      <img src="<?= base_url(); ?>assets/images/Karambit-Gamma-Doppler.jpg" class="rounded img-thumbnail" alt="">
      <div class="card-header">
        <h5>Gamma Doppler Karambit</h5>
      </div>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa aspernatur magnam nobis inventore unde quis harum fuga quasi officiis, beatae ducimus illo, laborum perferendis alias ipsa. Aliquam pariatur rerum officia.</p>
      <p>
        <a class="btn btn-info" href="<?= base_url(); ?>detail" role="button">View Detail</a>
      </p>
    </div>

  </div>
  <hr>
</div>


<!-- Tampilan Daftar Barang -->
<div class="container">
  <strong>New Arrival</strong>
  <div class="row row-cols-1 row-cols-md-3">
    <a href="" class="col mb-4">
      <div class="card h-100">
        <img src="assets/images/france-art.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </a>

    <a href="" class="col mb-4">
      <div class="card h-100">
        <img src="assets/images/france-art.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a short card.</p>
        </div>
      </div>
    </a>

    <a href="" class="col mb-4">
      <div class="card h-100">
        <img src="assets/images/proffesional cuddler.jpg" class="card-img-top" alt="..." style="width: 100%;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    </a>

    <a href="" class="col mb-4">
      <div class="card h-100">
        <img src="assets/images/proffesional cuddler.jpg" class="card-img-top " alt="..." style="width: 100%;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </a>
  </div>
</div>