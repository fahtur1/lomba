<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function flask($class, $message, $tag)
    {
        $this->session->set_flashdata(
            $tag,
            '<div class="alert alert-' . $class . ' alert-dismissible fade show" role="alert">
                ' . $message . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );
    }

    public function index()
    {
        if ($this->input->post()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->User_model->getUserByEmail($email);

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $this->session->set_userdata('role', $user['role']);
                    $this->flask('success', 'login success!', 'message');
                    redirect('admin/home/dashboard');
                } else {
                    $this->flask('danger', 'wrong password!', 'message');
                    redirect('admin/auth');
                }
            } else {
                $this->flask('danger', 'email not registered!', 'message');
                redirect('admin/auth');
            }
        } else {
            $this->load->view('auth/header');
            $this->load->view('auth/index');
            $this->load->view('auth/footer');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('role');
        $this->flask('success', 'logout success', 'message');
        redirect('admin/auth');
    }

    public function enkripsi($password)
    {
        echo (password_hash($password, PASSWORD_DEFAULT));
    }
}
