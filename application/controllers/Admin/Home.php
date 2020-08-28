<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('Plan_model');
        $this->load->model('Model_model');
    }

    public function index()
    {
        print('fahturrrr');
    }

    public function dashboard()
    {
        $data = [
            'reports' => $this->getDataDummy(),
            'title' => 'Dashboard'
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function create_plan()
    {
        if ($this->input->post()) {
            $data = [
                'plan_id' => uniqid(),
                'plan_date' => $this->input->post('date'),
                'ps_type' => $this->input->post('ps_type'),
                'remark' => $this->input->post('remark'),
                'product_id' => $this->input->post('unit_code')
            ];

            if ($this->Plan_model->insertPlan($data) > 0) {
                $this->flask('success', 'Plan has been Created!', 'message');
            } else {
                $this->flask('danger', 'Failed to create Plan!', 'message');
            }

            redirect('admin/home/planps');
        } else {
            $data = [
                'models' => $this->Model_model->getModels(),
                'product' => $this->Product_model->getProducts(),
                'title' => 'Create Plan'
            ];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/navbar');
            $this->load->view('admin/create_plan', $data);
            $this->load->view('templates/footer');
        }
    }

    public function planps()
    {
        $data = [
            'plans' => $this->Plan_model->getPlans(),
            'title' => 'Plan PS'
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar');
        $this->load->view('admin/plan_ps', $data);
        $this->load->view('templates/footer');
    }

    public function actualps()
    {
        $data = [
            'title' => 'Actual PS'
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar');
        $this->load->view('admin/actual_ps');
        $this->load->view('templates/footer');
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

    public function ppm_report($detail = '')
    {
        $data = [
            'reports' => $this->getDataDummy(),
            'title' => 'PPM Report'
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/navbar');

        if (!isset($detail) or empty($detail)) {
            $this->load->view('admin/ppm_report', $data);
        } else {
            switch ($detail) {
                case "PC2000-8":
                    $data['detail'] = ["name" => "PC2000-8"];
                    $this->load->view('admin/ppm_report_detail', $data);
                    break;
                case "GD825A-2":
                    $data['detail'] = ["name" => "GD825A-2"];
                    $this->load->view('admin/ppm_report_detail', $data);
                    break;
                case "HD785-7":
                    $data['detail'] = ["name" => "HD785-7"];
                    $this->load->view('admin/ppm_report_detail', $data);
                    break;
                case "HD785-5":
                    $data['detail'] = ["name" => "HD785-5"];
                    $this->load->view('admin/ppm_report_detail', $data);
                    break;
                default:
                    show_404();
                    break;
            }
        }
        $this->load->view('templates/footer');
    }

    public function getDataDummy()
    {
        return $data = [
            [
                "name" => "PC2000-8"
            ],
            [
                "name" => "GD825A-2"
            ],
            [
                "name" => "HD785-7"
            ],
            [
                "name" => "HD785-5"
            ]
        ];
    }

    // public function getProductById($id)
    // {
    //     echo json_encode([
    //         'data' => $this->Product_model->getProductById($id)
    //     ]);
    // }

<<<<<<< HEAD
    public function update_plan($unit)
=======
    public function update_plan($unit, $ps)
>>>>>>> master
    {
        if ($this->input->post()) {
        } else {
            $this->load->view('templates/sidebar');
            $this->load->view('templates/header');

            switch ($unit) {
                case "PC2000-8":
                case "HD785-5":
                    $this->load->view("admin/update_hd785-5");
                case "GD825A-2":
                    if ($ps == "PS2") {
                        $this->load->view("admin/engine/gd825-2");
                    } else if ($ps == "PS3" || $ps == "PS4") {
                        $this->load->view("admin/complete/gd825-2");
                    }
                    break;
                case "HD785-7":
                default:
            }

            $this->load->view('templates/footer');
        }
    }
}
