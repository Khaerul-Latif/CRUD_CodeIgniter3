<?php
class Product extends CI_Controller {

	// Mengarahkan ke tampilan product_form
	public function create() {
		$this->load->view('product_form');
	}

	// Menangkap data dari form, lalu ke tampilan routes index pada controllers product untuk di save
	public function save() {
		$data = array(
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
					);
		$this->Products_model->insert($data);
		redirect('product');
	}

	// Menampilkan data ke tampilan products_list
	public function index() {
		$data['products'] = $this->Products_model->get_all_products();
		$this->load->view('products_list', $data);
	}

	// Mengangkap data sesuai id dan menampilkan ke product_form
	public function edit($id) {
		$data['product'] = $this->Products_model->get_product_by_id($id);
		$this->load->view('product_form', $data);
	}
	
	// Menangkap data dari form, lalu ke tampilan routes index pada controllers product untuk di update
	public function update($id) {
		$data = array(
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
		);
		$this->Products_model->update_product($id, $data);
		redirect('product');
	}

	// Menghapus data sesuai id, lalu ke tampilan routes index pada controllers product
	public function delete($id) {
		$this->Products_model->delete_product($id);
		redirect('product');
	}
}
