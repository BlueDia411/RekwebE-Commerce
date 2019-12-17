<div class="jumbotron jumbotron-fluid" style="background-color: ;">
  <div class="container">
    <h1 class="display-4">Shopping Cart</h1>
    <p>BECAUSEOMAT</p>
  </div>
</div>
<div class="container">
  <table class="table mt-11">
    <thead>
      <tr>
        <th scope="col">Barang</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Harga</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><img src="<?= base_url(); ?>assets/images/Karambit-Gamma-Doppler.jpg" alt="..." width="100px" class="rounded"></td>
        <td>Kopi Kapal Api</td>
        <td>Rp. 3000</td>
        <td>2</td>
        <td><button type="button" class="btn btn-danger">Hapus</button></td>
      </tr>
      <tr>
        <td><img src="<?= base_url(); ?>assets/images/Karambit-Gamma-Doppler.jpg" alt="..." width="100px" class="rounded"></td>
        <td>Kopi Kapal Api</td>
        <td>Rp. 3000</td>
        <td>2</td>
        <td><button type="button" class="btn btn-danger">Hapus</button></td>
      </tr>
      <tr>
        <td><img src="<?= base_url(); ?>assets/images/Karambit-Gamma-Doppler.jpg" alt="..." width="100px" class="rounded"></td>
        <td>Kopi Kapal Api</td>
        <td>Rp. 3000</td>
        <td>2</td>
        <td><button type="button" class="btn btn-danger">Hapus</button></td>
      </tr>
      <tr>
        <td></td>
        <td><strong>Jumlah</strong></td>
        <td>Rp. 9000</td>
        <td></td>
        <td><a class="btn btn-success " href="<?= base_url('chart/checkout'); ?>">Checkout</a></td>
      </tr>
    </tbody>
  </table>
</div>