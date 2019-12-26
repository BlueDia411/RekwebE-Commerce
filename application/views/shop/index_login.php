<div>
    <div>
        <div>
            <img src="assets/images/background1.jpeg" class="d-block w-100" alt="...">
        </div>
    </div>
</div>

<div class="container">
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="row">
    <?php foreach ($barang as $brg) : ?>
        <a href="<?= base_url('home_login/detail/'); ?><?= $brg['id_barang']; ?>" class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="<?= base_url('assets/images/'); ?><?= $brg['gambar']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $brg['nama_barang']; ?></h5>
                    <p class="card-text"><?= $brg['harga_barang']; ?></p>
                </div>
            </div>
        </a>
    <?php endforeach; ?>

</div>
</div>