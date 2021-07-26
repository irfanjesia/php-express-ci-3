<?php


class paket extends CI_Controller
{

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('welcome');
	}

	public function home()
	{
		$this->load->helper('url');
		$this->load->view('home');
	}

	public function guest()
	{
		$resi = $this->input->post('resi');
		$this->load->helper('url');
		$this->load->model('process');
		$posts = $this->process->get_postsById($resi);
		$data['posts'] = $posts;
		$this->load->view('guest_page', $data);
	}

	public function login()
	{
		session_start();
		$this->load->helper('url');
		$this->load->view('login_page');
		$_SESSION['username'] = 'admin';
	}

	public function login_process()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->helper('url');
		$this->load->model('process');
		$this->process->administration($username, $password);
	}

	public function logout()
	{
		session_start();
		$_SESSION['username'] = '';
		session_destroy();
		$this->load->helper('url');
		redirect(base_url('paket/'), 'refresh');
	}

	public function admin()
	{
		$this->load->helper('url');
		$this->load->model('process');
		$posts = $this->process->get_posts();
		$data['posts'] = $posts;
		$this->load->view('admin_page', $data);
	}

	public function create()
	{
		$this->load->helper('url');
		$this->load->view('create');
	}

	public function create_process()
	{
		$resi = $this->input->post('resi');
		$barang = $this->input->post('barang');
		$pengirim = $this->input->post('pengirim');
		$penerima = $this->input->post('penerima');
		$alamat = $this->input->post('alamat');
		$status = $this->input->post('status');
		$this->load->helper('url');
		$this->load->model('process');
		$this->process->insert_post($resi, $barang, $pengirim, $penerima, $alamat, $status);
		redirect(base_url('paket/admin/#list'), 'refresh');
	}

	public function delete($resi)
	{
		$this->load->helper('url');
		$this->load->model('process');
		$this->process->delete_post($resi);
		redirect(base_url('paket/admin/#list'), 'refresh');
	}

	public function update($resi)
	{
		$this->load->helper('url');
		$this->load->model('process');
		$posts = $this->process->get_postsById($resi);
		$data['posts'] = $posts;
		$this->load->view('update', $data);
	}

	public function update_process($resi)
	{
		$barang = $this->input->post('barang');
		$pengirim = $this->input->post('pengirim');
		$penerima = $this->input->post('penerima');
		$alamat = $this->input->post('alamat');
		$status = $this->input->post('status');
		$this->load->helper('url');
		$this->load->model('process');
		$this->process->update_post($resi, $barang, $pengirim, $penerima, $alamat, $status);
		redirect(base_url('paket/admin/#list'), 'refresh');
	}
}
