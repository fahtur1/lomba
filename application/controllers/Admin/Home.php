<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
    }

    public function index()
    {
        print('fahtur k&2');
    }

    public function dashboard()
    {
        $this->load->view('templates/sidebar');
        $this->load->view('templates/header');
        $this->load->view('admin/dashboard');
        $this->load->view('templates/footer');
    }

    public function create_plan()
    {
        if ($this->input->post()) {
            $data = [
                'product_id' => uniqid(),
                'product_model' => $this->input->post('unit_model'),
                'product_code' => $this->input->post('unit_code'),
                'product_plandate' => $this->input->post('date'),
                'product_type' => $this->input->post('ps_type'),
                'product_remark' => $this->input->post('remark')
            ];

            $this->Product_model->insertProduct($data);
            redirect('admin/home/planps');
        } else {
            $this->load->view('templates/sidebar');
            $this->load->view('templates/header');
            $this->load->view('admin/create_plan');
            $this->load->view('templates/footer');
        }
    }

    public function planps()
    {
        $data = [
            'products' => $this->Product_model->getProducts()
        ];

        $this->load->view('templates/sidebar');
        $this->load->view('templates/header');
        $this->load->view('admin/plan_ps', $data);
        $this->load->view('templates/footer');
    }

    public function actualps()
    {
        $this->load->view('templates/sidebar');
        $this->load->view('templates/header');
        $this->load->view('admin/actual_ps');
        $this->load->view('templates/footer');
    }

    public function flask($class, $message)
    {
        return
            '<div class="alert alert-' . $class . ' alert-dismissible fade show" role="alert">
            ' . $message . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }

    // public function update_plan()
    // {
    //     $data = [
    //         'product_id' => $this->input->post('id'),
    //         'product_model' => $this->input->post('unit_model'),
    //         'product_code' => $this->input->post('unit_code'),
    //         'product_plandate' => $this->input->post('date'),
    //         'product_type' => $this->input->post('ps_type'),
    //         'product_remark' => $this->input->post('remark')
    //     ];

    //     if ($this->Product_model->updateProduct($data)) {
    //         $this->session->set_flashdata('message', $this->flask('success', 'Data Has Been Update'));
    //     } else {
    //         $this->session->set_flashdata('message', $this->flask('danger', 'Failed to Update Data'));
    //     }

    //     redirect('/admin/home/planps');
    // }

    public function getProductById($id)
    {
        echo json_encode([
            'data' => $this->Product_model->getProductById($id)
        ]);
    }

    public function update_plan($unit)
    {
        if ($this->input->post()) {
        } else {
            $this->load->view('templates/sidebar');
            $this->load->view('templates/header');

            switch ($unit) {
                case "PC2000-8":
                case "HD785-7":
                case "GD825A-2":
                    $this->load->view("admin/update_plan");
                    break;
                case "HD785-7":
                default:
            }
            $this->load->view('templates/footer');
        }
    }
}
