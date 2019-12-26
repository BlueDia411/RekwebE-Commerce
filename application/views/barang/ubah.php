<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Barang
                </div>
                <div class="card-body">
                    <form action="<?= base_url() ?>barang/ubah/<?= $barang['id_barang']; ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_barang" value="<?= $barang['id_barang']; ?>">
                        <div class="form-group">
                            <label for="nama_barang">Nama barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $barang['nama_barang']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label><br>
                            <img src="<?= base_url('assets/images/') ?><?= $barang['gambar'] ?>">
                            <input type="file" id="gambar" name="gambar">
                        </div>
                        <div class="form-group">
                            <label for="stok_barang">Stok barang</label>
                            <input type="text" class="form-control" id="stok_barang" name="stok_barang" value="<?= $barang['stok_barang']; ?>">
                            <small class="form-text text-danger"><?= form_error('stok_barang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga_barang">Harga barang</label>
                            <input type="text" class="form-control" id="harga_barang" name="harga_barang" value="<?= $barang['harga_barang']; ?>">
                            <small class="form-text text-danger"><?= form_error('harga_barang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $barang['deskripsi']; ?>">
                            <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="spesifikasi">Spesifikasi</label>
                            <input type="text" class="form-control" id="spesifikasi" name="spesifikasi" value="<?= $barang['spesifikasi']; ?>">
                            <small class="form-text text-danger"><?= form_error('spesifikasi'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>