<?php


class Admin extends CI_Controller
{

    public function login()
    {
        session_start();
        $this->load->view('login_page');
        $_SESSION['username'] = 'admin';
    }

    public function login_process()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('Process_model');
        $this->Process_model->administration($username, $password);
    }

    public function logout()
    {
        session_start();
        $_SESSION['username'] = '';
        session_destroy();
        redirect(base_url(), 'refresh');
    }

    public function home()
    {
        $this->load->model('Process_model');
        $posts = $this->Process_model->get_posts();
        $data['posts'] = $posts;
        $this->load->view('admin_page', $data);
    }

    public function create()
    {
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
        $this->load->model('Process_model');
        $this->Process_model->insert_post($resi, $barang, $pengirim, $penerima, $alamat, $status);
        redirect(base_url('Admin/home/#list'), 'refresh');
    }

    public function delete($resi)
    {
        $this->load->model('Process_model');
        $this->Process_model->delete_post($resi);
        redirect(base_url('Admin/home/#list'), 'refresh');
    }

    public function update($resi)
    {
        $this->load->model('Process_model');
        $posts = $this->Process_model->get_postsById($resi);
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
        $this->load->model('Process_model');
        $this->Process_model->update_post($resi, $barang, $pengirim, $penerima, $alamat, $status);
        redirect(base_url('Admin/home/#list'), 'refresh');
    }
}
