<?php


class Process_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_posts()
	{
		$this->load->database();
		$query = $this->db->get('daftarpaket');
		return $query->result();
	}

	public function get_postsById($resi)
	{
		$this->load->database();
		$query = $this->db->get_where('daftarpaket', array('resi' => $resi));
		if ($query->result() == null) {
			return [null];
		} else {
			return $query->result();
		}
	}

	public function update_post($resi, $barang, $pengirim, $penerima, $alamat, $status)
	{
		$this->load->database();
		$data = array(
			'barang' => $barang,
			'pengirim' => $pengirim,
			'penerima' => $penerima,
			'alamat' => $alamat,
			'status' => $status
		);
		$this->db->where('resi', $resi);
		$this->db->update('daftarpaket', $data);
	}

	public function insert_post($resi, $barang, $pengirim, $penerima, $alamat, $status)
	{
		$this->load->database();
		$data = array(
			'resi' => $resi,
			'barang' => $barang,
			'pengirim' => $pengirim,
			'penerima' => $penerima,
			'alamat' => $alamat,
			'status' => $status
		);
		$this->db->insert('daftarpaket', $data);
	}

	public function delete_post($resi)
	{
		$this->load->database();
		$this->db->delete('daftarpaket', array('resi' => $resi));
	}

	public function administration($username, $password)
	{
		if ($username == 'admin' && $password == 'rahasia') {
			$this->load->model('Process_model');
			$posts = $this->Process_model->get_posts();
			$data['posts'] = $posts;
			redirect(base_url('Admin/home/'), 'refresh');
		} else {
			echo '<script>alert("Login gagal, username atau password salah.")</script>';
			redirect(base_url('Admin/login/'), 'refresh');
		}
	}
}
