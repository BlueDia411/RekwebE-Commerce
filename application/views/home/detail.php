<div class="container">
    <div>
        <div class="d-flex flex-row">
            <img src="<?= base_url(); ?>assets/images/<?= $barang['gambar']; ?>" width="500px" height="500px" class="rounded float-left img-fluid">
            <div>
                <h2>
                    <?= $barang['nama_barang']; ?>
                </h2>
                <h4>IDR <?= $barang['harga_barang']; ?></h4>
                <p>stock <?= $barang['stok_barang']; ?></p>
                <div>
                    <div class="quantity">
                        <input type="number" min="1" max="9" step="1" value="1">
                    </div>
                    <!-- <div class="quantity buttons_added">
                    <input type="button" value="-" class="minus">
                    <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                    <input type="button" value="+" class="plus">
                </div> -->
                    <button type="button" class="btn btn-primary marle">Tambah Keranjang</button>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>

<div class="container martoplus">
    <div class="row row-cols-2">
        <strong>Details</strong>
        <strong>Product Specification</strong>
    </div>
    <div class="row row-cols-2">
        <p class="justify"><?= $barang['deskripsi']; ?></p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $barang['spesifikasi']; ?></li>

        </ul>
    </div>
</div>