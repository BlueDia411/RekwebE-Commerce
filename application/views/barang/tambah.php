<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Barang
                </div>
                <div class="card-body">
                    <form action="<?= base_url() ?>barang/tambah" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_barang">Nama</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                            <small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" id="gambar" name="gambar">
                        </div>
                        <div class="form-group">
                            <label for="stok_barang">Stok barang</label>
                            <input type="text" class="form-control" id="stok_barang" name="stok_barang">
                            <small class="form-text text-danger"><?= form_error('stok_barang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga_barang">Harga barang</label>
                            <input type="text" class="form-control" id="harga_barang" name="harga_barang">
                            <small class="form-text text-danger"><?= form_error('harga_barang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                            <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>