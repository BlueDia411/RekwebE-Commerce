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
<<<<<<< HEAD
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
=======
    <tbody id="detail_cart">
</tbody>

    <td><a class="btn btn-success " href="<?= base_url(); ?>checkout">Checkout</a></td>
>>>>>>> 98371ae834773c438cb678693fe2d26398d8cd9e
  </table>
</div>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.add_cart').click(function(){
			var id_barang    = $(this).data("produkid");
			var nama_barang  = $(this).data("produknama");
			var harga_barang = $(this).data("produkharga");
			var quantity     = $('#' + id_barang).val();

			
			$.ajax({
				url : "<?php echo base_url();?>cart/add_to_cart",
				method : "POST",
				data : {id_barang: id_barang, nama_barang: nama_barang, harga_barang: harga_barang, quantity: quantity},
				success: function(data){
					$('#detail_cart').html(data);
				}
			});
		});

		// Load shopping cart
		$('#detail_cart').load("<?php echo base_url();?>cart/load_cart");

		//Hapus Item Cart
		$(document).on('click','.hapus_cart',function(){
			var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
			$.ajax({
				url : "<?php echo base_url();?>cart/hapus_cart",
				method : "POST",
				data : {row_id : row_id},
				success :function(data){
					$('#detail_cart').html(data);
				}
			});
		});
	});
</script> 