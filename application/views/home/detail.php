<div class="container">
    <div>
        <div class="d-flex flex-row">
            <img src="<?= base_url(); ?>assets/images/<?= $data['gambar']; ?>" width="500px" height="500px" class="rounded float-left img-fluid">
            <div>
                <h2>
                    <?= $data['nama_barang']; ?>
                </h2>
                <h4>IDR <?= $data['harga_barang']; ?></h4>
                <p>stock <?= $data['stok_barang']; ?></p>
                <div>
                    <div class="quantity">
                        <input type="number" min="1" max="9" step="1" value="1" name="quantity" id="<?= $data['id_barang']; ?>">
                    </div>
<<<<<<< HEAD
                    <!-- <div class="quantity buttons_added">
                    <input type="button" value="-" class="minus">
                    <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                    <input type="button" value="+" class="plus">
                </div> -->
                    <button type="button" class="btn btn-primary marle">Tambah Keranjang</button>
=======
                    <button type="button" class="add_cart btn btn-primary marle" data-produkid="<?php echo $data['id_barang'];?>" data-produknama="<?php echo $data['nama_barang'];?>" data-produkharga="<?php echo $data['harga_barang']?>">Tambah Keranjang</button>
>>>>>>> 98371ae834773c438cb678693fe2d26398d8cd9e
                </div>
                <hr>
            </div>
        </div>
    </div>

    
    </div>
		<div class="col-md-4">
			<h4>Shopping Cart</h4>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Produk</th>
						<th>Harga</th>
						<th>Qty</th>
						<th>Subtotal</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody id="detail_cart">

				</tbody>
				
			</table>
		</div>
	</div>
</div>

<div class="container martoplus">
    <div class="row row-cols-2">
        <strong>Details</strong>
        <strong>Product Specification</strong>
    </div>
    <div class="row row-cols-2">
        <p class="justify"><?= $data['deskripsi']; ?></p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $data['spesifikasi']; ?></li>

        </ul>
    </div>
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