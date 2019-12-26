<div class="container">
    <h3 class="mt-3">Daftar Barang</h3>
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

    <div class="row mt-2">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>barang/tambah" class="btn btn-primary">Tambah Data barang</a>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-5">
            <form action="<?= base_url('barang'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search keyword.." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md">
            <h5>Total Barang : <?= $total_rows; ?></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Barang</th>
                        <th>Stok Barang</th>
                        <th>Harga Barang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($barang)) : ?>
                        <tr>
                            <td colspan="5">
                                <div class="alert alert-danger" role="alert">
                                    data tidak ditemukan!
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php foreach ($barang as $brg) : ?>
                        <tr>
                            <th><?= ++$start; ?></th>
                            <td><?= $brg['nama_barang']; ?></td>
                            <td><?= $brg['stok_barang']; ?> buah</td>
                            <td>Rp. <?= number_format($brg['harga_barang']); ?></td>
                            <td>
                                <a href="<?= base_url(); ?>barang/detail/<?= $brg['id_barang']; ?>" class="badge badge-primary ">detail</a>
                                <a href="<?= base_url(); ?>barang/ubah/<?= $brg['id_barang']; ?>" class="badge badge-success ">ubah</a>
                                <a href="<?= base_url(); ?>barang/hapus/<?= $brg['id_barang']; ?>" class="badge badge-danger  tombol-hapus">hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>