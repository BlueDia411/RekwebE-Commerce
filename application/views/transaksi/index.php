<div class="container">
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if( $this->session->flashdata('flash') ) : ?>
        <!-- <div class="row mt-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div> -->
    <?php endif; ?>

    

    

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar transaksi</h3>
            <?php if( empty($transaksi) ) : ?>
                <div class="alert alert-danger" role="alert">
                    Data transaksi Tidak Ditemukan
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        
                        <th>Nama Barang</th>
                        <th>Quantity</th>
                        <th>Harga Barang total</th>
                        <th>Kode transaksi</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($transaksi)) : ?>
                        <tr>
                            <td colspan="5">
                                <div class="alert alert-danger" role="alert">
                                    data tidak ditemukan!
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php foreach ($transaksi as $brg) : ?> 
                        <tr>
                            
                            <td><?= $brg['nama_barang']; ?></td>
                            <td><?= $brg['quantity']; ?> buah</td>
                            <td>Rp. <?= number_format($brg['sub_total']); ?></td>
                            <td><?= $brg['kode']; ?> </td>
                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>