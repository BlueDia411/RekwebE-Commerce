<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <!-- <div class="row mt-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data barang <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div> -->
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>barang/tambah" class="btn btn-primary">Tambah Data barang</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data barang" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar barang</h3>
            <?php if (empty($barang)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data barang Tidak Ditemukan
                </div>
            <?php endif; ?>
            <?php foreach ($barang as $brg) : ?>
                <ul class="list-group">
                    <li class="list-group-item">
                        <?= $brg['nama_barang']; ?>
                        <a href="<?= base_url(); ?>barang/hapus/<?= $brg['id_barang']; ?>" class="badge badge-danger float-right tombol-hapus">hapus</a>
                        <a href="<?= base_url(); ?>barang/ubah/<?= $brg['id_barang']; ?>" class="badge badge-success float-right">ubah</a>
                        <a href="<?= base_url(); ?>barang/detail/<?= $brg['id_barang']; ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>