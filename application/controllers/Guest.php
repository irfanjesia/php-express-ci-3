<?php


class Guest extends CI_Controller
{

	public function home()
	{
		$this->load->view('home');
	}

	public function cek_resi()
	{
		$resi = $this->input->post('resi');
		$this->load->model('Process_model');
		$posts = $this->Process_model->get_postsById($resi);
		$data['posts'] = $posts;
		$this->load->view('guest_page', $data);
	}
}
