<?php
class Products_model extends CI_Model
{
	// Memasukkan data ke dalam tabel
	public function insert($data) {
		$this->db->insert('tb_products', $data);
	}

	// Menampilkan semua data
	public function get_all_products() {
		return $this->db->get('tb_products')->result_array();
	}

	// Mendapatkan data berdasarkan id
	public function get_product_by_id($id) {
		return $this->db->get_where('tb_products', array('id' => $id))->row_array();
	}
	
	// Update data berdasarkan id
	public function update_product($id, $data) {
		$this->db->where('id', $id);
		$this->db->update('tb_products', $data);
	}

	// Hapus data berdasarkan id
	public function delete_product($id) {
		$this->db->where('id', $id);
		$this->db->delete('tb_products');
	}
}
