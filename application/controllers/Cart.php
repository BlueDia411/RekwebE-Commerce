<?php
class Cart extends CI_Controller
{
    
    function __construct(){
		parent::__construct();
		$this->load->model('cart_model');
	}

    public function index($nama = '')
    {
        $data['data']=$this->cart_model->get_all_produk();
        $data['judul'] = 'Detail Barang';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('chart/chart', $data);
    }

    function add_to_cart(){
        // $this->load->library("cart");
        $data = array(
            'id' => $this->input->post('id_barang'),
            'nama' => $this->input->post('nama_barang'),
            'harga' => $this->input->post('harga_barang'),
            'qty' => $this->input->post('quantity'),
        );
        var_dump($data);
        echo "<br>";
        var_dump($this->cart->insert($data));
        die;
        $this->cart->insert($data);
        echo $this->show_cart();
    }

        function show_cart(){ //Fungsi untuk menampilkan Cart
            $this->load->library("cart");
            $output = '';
            $no = 0;
            foreach ($this->cart->contents() as $items) {
                $no++;
                $output .='
                    <tr>
                        <td>'.$items['nama'].'</td>
                        <td>'.number_format($items['harga']).'</td>
                        <td>'.$items['qty'].'</td>
                        <td>'.$items['gambar'].'</td>
                        <td>'.number_format($items['subtotal']).'</td>
                        <td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
                    </tr>
                ';
            }
            $output .= '
                <tr>
                    <th colspan="3">Total</th>
                    <th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
                </tr>
            ';
            return $output;
        }

        function load_cart(){ //load data cart
            echo $this->show_cart();
        }

        function hapus_cart(){ //fungsi untuk menghapus item cart
            $data = array(
                'rowid' => $this->input->post('row_id'), 
                'qty' => 0, 
            );
            $this->cart->update($data);
            echo $this->show_cart();
        }


}
?>