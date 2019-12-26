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
        <a class="btn btn-info" href="<?= base_url('home/detail'); ?>" role="button">View Detail</a>
      </p>
    </div>

    <div class="col-lg-4">
      <img src="<?= base_url(); ?>assets/images/Karambit-Doppler-Blackpearl.jpg" class="rounded img-thumbnail" alt="">
      <div class="card-header">
        <h5>Doppler Blackpearl Karambit</h5>
      </div>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa aspernatur magnam nobis inventore unde quis harum fuga quasi officiis, beatae ducimus illo, laborum perferendis alias ipsa. Aliquam pariatur rerum officia.</p>
      <p>
        <a class="btn btn-info" href="<?= base_url('home/detail'); ?>" role="button">View Detail</a>
      </p>
    </div>

    <div class="col-lg-4">
      <img src="<?= base_url(); ?>assets/images/Karambit-Gamma-Doppler.jpg" class="rounded img-thumbnail" alt="">
      <div class="card-header">
        <h5>Gamma Doppler Karambit</h5>
      </div>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa aspernatur magnam nobis inventore unde quis harum fuga quasi officiis, beatae ducimus illo, laborum perferendis alias ipsa. Aliquam pariatur rerum officia.</p>
      <p>
        <a class="btn btn-info" href="<?= base_url('home/detail'); ?>" role="button">View Detail</a>
      </p>
    </div>

  </div>
  <hr>
</div>
<?= $this->session->userdata('email'); ?>

<!-- Tampilan Daftar Barang -->
<div class="container">
  <strong>New Arrival</strong>
  <div class="row row-cols-1 row-cols-md-3">

    <?php $i = 0 ?>
    <?php foreach ($barang as $brg) : ?>
      <?php if ($i < 4) : ?>
        <a href="<?= base_url(); ?>home/detail/<?= $brg['id_barang']; ?>" class="col mb-4">
          <div class="card h-100">
            <img src="assets/images/<?= $brg['gambar']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $brg['nama_barang']; ?></h5>
              <p class="card-text"><?= $brg['deskripsi'];  ?></p>
            </div>
          </div>
        </a>
        <?php ++$i; ?>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>