<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $barang['nama_barang']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <img src="<?= base_url('assets/images/') ?><?= $barang['gambar'] ?>" width="300px" height="300px">
                    </h6>
                    <p class="card-text">Tersisa <?= $barang['stok_barang']; ?> buah</p>
                    <p class="card-text">Rp. <?= $barang['harga_barang']; ?></p>
                    <p class="card-text"><?= $barang['deskripsi']; ?></p>
                    <p class="card-text"><?= $barang['spesifikasi']; ?></p>
                    <a href="<?= base_url(); ?>barang" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>