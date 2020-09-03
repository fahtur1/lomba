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
        $this->load->model('Actual_Plan', 'actual');

        $this->load->model('Column_model');

        $this->load->model('Pc2000_model');
        $this->load->model('Hd7857_model');
        $this->load->model('Hd7855_model');
        $this->load->model('Gd825_model');
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
            'title' => 'Actual PS',
            'gd825' => $this->actual->getActualJoin('gd825-2'),
            'hd785' => $this->actual->getActualJoin('hd785-5'),
            'hd787' => $this->actual->getActualJoin('hd785-7'),
            'pc2000' => $this->actual->getActualJoin('pc2000-8'),
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

    public function actual_validation($name, $min, $max)
    {
        $this->form_validation->set_rules($name, $name, 'required|trim|greater_than[' . $min . ']|less_than[' . $max . ']', [
            'greater_than' => 'harus ' . $min . '-' . $max,
            'less_than' => 'harus ' . $min . '-' . $max,
            'required' => 'harus diisi'
        ]);
    }

    public function required_only_validation($name)
    {
        $this->form_validation->set_rules($name, $name, 'required|trim', [
            'required' => 'harus diisi'
        ]);
    }

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

    public function update_plan($unit = '', $ps = '', $plan =  '')
    {
        $dataa = [
            'unit' => $unit,
            'ps' => $ps,
            'plan' => $plan,
            'title' => "Update Plan $unit"
        ];

        $id_other = uniqid("oth-");
        $id_actual = uniqid("act-");

        switch ($unit) {
            case "PC2000-8":
                $id_update = uniqid("pc-");
                if ($this->input->post()) {
                    $data = $this->Column_model->getColumn('pc2000-8');
                    $column_other = $this->Column_model->getColumn('other_data');
                    $dataModel = [];

                    // Buat Array Untuk Insert Ke Database
                    foreach ($data as $dataa) {
                        if (!(substr($dataa['column'], 0, 2) == 'id')) {
                            $dataModel[$dataa['column']] = $this->input->post($dataa['column']);
                            if ($ps == 'PS2' && $dataa['column'] == 'tc_stall_temp') break;
                        }
                    }

                    $dataModel += [
                        'id_update' => $id_update,
                        'id_other' => $id_other
                    ];

                    $actual_data = [
                        'actual_id' => $id_actual,
                        'actual_date' => $this->input->post('date'),
                        'leader_name' => $this->input->post('name'),
                        'actual_branch' => $this->input->post('site'),
                        'plan_id' => $plan,
                        'ppm_id' => '3',
                        'id_update' => $id_update
                    ];

                    if ($ps == 'PS2') {
                        if ($this->Pc2000_model->insertPs2($dataModel, $actual_data)) {
                            $this->flask('success', 'Actual Plan added Succesfuly', 'message');
                        } else {
                            $this->flask('danger', 'Failed to add Actual Plan', 'message');
                        }
                    } elseif ($ps == 'PS3' || $ps == 'PS4') {
                        $other['id_other'] = $id_other;

                        foreach ($column_other as $column) {
                            if (!(substr($column['column'], 0, 2) == 'id')) {
                                $other[$column['column']] = $this->input->post($column['column']);
                            }
                        }

                        if ($this->Pc2000_model->insertPs34($dataModel, $actual_data, $other)) {
                            $this->flask('success', 'Actual Plan added Succesfuly', 'message');
                        } else {
                            $this->flask('danger', 'Failed to add Actual Plan', 'message');
                        }
                    }

                    redirect('admin/home/actualps');
                } else {
                    $this->load->view('templates/sidebar');
                    $this->load->view('templates/navbar', $dataa);
                    $this->load->view('templates/header');

                    if ($ps == 'PS2')
                        $this->load->view("admin/engine/pc2000-8", $dataa);
                    elseif ($ps == 'PS3' || $ps == 'PS4')
                        $this->load->view("admin/complete/pc2000-8", $dataa);

                    $this->load->view('templates/footer');
                }

                break;
            case "GD825-2":
                $id_update = uniqid("gd8-");

                $this->required_only_validation('name');
                $this->required_only_validation('date');
                $this->required_only_validation('site');

                $this->actual_validation('engine_low_speed', '600', '700');
                $this->required_only_validation('engine_low_speed_remark');
                $this->actual_validation('engine_high_speed', '2300', '2400');
                $this->required_only_validation('engine_high_speed_remark');
                $this->actual_validation('tc_stall_press', '2300', '2400'); // range blum
                $this->required_only_validation('tc_stall_press_remark');
                $this->actual_validation('engine_low_press', '2300', '2400'); //range blum
                $this->required_only_validation('engine_low_press_remark');
                $this->actual_validation('engine_low_press2', '2300', '2400'); //range blum
                $this->required_only_validation('engine_low_press2_remark');

                if ($this->form_validation->run() != false) {
                    $data = $this->Column_model->getColumn('gd825-2');
                    $column_other = $this->Column_model->getColumn('other_data');
                    $dataModel = [];
                    // Buat Array Untuk Insert Ke Database
                    foreach ($data as $dataa) {
                        if (!(substr($dataa['column'], 0, 2) == 'id')  && !($dataa['column'] == 'undercarriage')) {
                            $dataModel[$dataa['column']] = $this->input->post($dataa['column']);
                            if ($ps == 'PS2' && $dataa['column'] == 'tc_stall_temp') break;
                        }
                    }

                    $dataModel += [
                        'id_update' => $id_update,
                        'id_other' => $id_other
                    ];

                    $actual_data = [
                        'actual_id' => $id_actual,
                        'actual_date' => $this->input->post('date'),
                        'leader_name' => $this->input->post('name'),
                        'actual_branch' => $this->input->post('site'),
                        'plan_id' => $plan,
                        'ppm_id' => '1',
                        'id_update' => $id_update
                    ];

                    if ($ps == 'PS2') {
                        if ($this->Gd825_model->insertPs2($dataModel, $actual_data)) {
                            $this->flask('success', 'Actual Plan added Succesfuly', 'message');
                        } else {
                            $this->flask('danger', 'Failed to add Actual Plan', 'message');
                        }
                    } elseif ($ps == 'PS3' || $ps == 'PS4') {
                        $other['id_other'] = $id_other;

                        foreach ($column_other as $column) {
                            if (!(substr($column['column'], 0, 2) == 'id')) {
                                $other[$column['column']] = $this->input->post($column['column']);
                            }
                        }

                        if ($this->Gd825_model->insertPs34($dataModel, $actual_data, $other)) {
                            $this->flask('success', 'Actual Plan added Succesfuly', 'message');
                        } else {
                            $this->flask('danger', 'Failed to add Actual Plan', 'message');
                        }
                    }

                    redirect('admin/home/actualps');
                } else {
                    $this->load->view('templates/sidebar');
                    $this->load->view('templates/navbar', $dataa);
                    $this->load->view('templates/header');

                    if ($ps == 'PS2')
                        $this->load->view("admin/engine/gd825-2", $dataa);
                    elseif ($ps == 'PS3' || $ps == 'PS4')
                        $this->load->view("admin/complete/gd825-2", $dataa);


                    $this->load->view('templates/footer');
                }

                break;
            case "HD785-5":
                $id_update = uniqid("hd5-");
                if ($this->input->post()) {
                    $data = $this->Column_model->getColumn('hd785-5');
                    $column_other = $this->Column_model->getColumn('other_data');
                    $dataModel = [];

                    // Buat Array Untuk Insert Ke Database
                    foreach ($data as $dataa) {
                        if (!(substr($dataa['column'], 0, 2) == 'id')  && !($dataa['column'] == 'undercarriage')) {
                            $dataModel[$dataa['column']] = $this->input->post($dataa['column']);
                            if ($ps == 'PS2' && $dataa['column'] == 'tc_stall_temp') break;
                        }
                    }

                    $dataModel += [
                        'id_update' => $id_update,
                        'id_other' => $id_other
                    ];

                    $actual_data = [
                        'actual_id' => $id_actual,
                        'actual_date' => $this->input->post('date'),
                        'leader_name' => $this->input->post('name'),
                        'actual_branch' => $this->input->post('site'),
                        'plan_id' => $plan,
                        'ppm_id' => '3',
                        'id_update' => $id_update
                    ];

                    if ($ps == 'PS2') {
                        if ($this->Hd7855_model->insertPs2($dataModel, $actual_data)) {
                            $this->flask('success', 'Actual Plan added Succesfuly', 'message');
                        } else {
                            $this->flask('danger', 'Failed to add Actual Plan', 'message');
                        }
                    } elseif ($ps == 'PS3' || $ps == 'PS4') {
                        $other['id_other'] = $id_other;

                        foreach ($column_other as $column) {
                            if (!(substr($column['column'], 0, 2) == 'id')) {
                                $other[$column['column']] = $this->input->post($column['column']);
                            }
                        }

                        if ($this->Hd7855_model->insertPs34($dataModel, $actual_data, $other)) {
                            $this->flask('success', 'Actual Plan added Succesfuly', 'message');
                        } else {
                            $this->flask('danger', 'Failed to add Actual Plan', 'message');
                        }
                    }

                    redirect('admin/home/actualps');
                } else {
                    $this->load->view('templates/sidebar');
                    $this->load->view('templates/navbar', $dataa);
                    $this->load->view('templates/header');

                    if ($ps == 'PS2')
                        $this->load->view("admin/engine/hd785-5", $dataa);
                    elseif ($ps == 'PS3' || $ps == 'PS4')
                        $this->load->view("admin/complete/hd785-5", $dataa);

                    $this->load->view('templates/footer');
                }

                break;
            case "HD785-7":
                $id_update = uniqid("hd7-");
                if ($this->input->post()) {
                    $data = $this->Column_model->getColumn('hd785-7');
                    $column_other = $this->Column_model->getColumn('other_data');
                    $dataModel = [];

                    // Buat Array Untuk Insert Ke Database
                    foreach ($data as $dataa) {
                        if (!(substr($dataa['column'], 0, 2) == 'id')) {
                            $dataModel[$dataa['column']] = $this->input->post($dataa['column']);
                            if ($ps == 'PS2' && $dataa['column'] == 'tc_stall_temp') break;
                        }
                    }

                    $dataModel += [
                        'id_update' => $id_update,
                        'id_other' => $id_other
                    ];

                    $actual_data = [
                        'actual_id' => $id_actual,
                        'actual_date' => $this->input->post('date'),
                        'leader_name' => $this->input->post('name'),
                        'actual_branch' => $this->input->post('site'),
                        'plan_id' => $plan,
                        'ppm_id' => '3',
                        'id_update' => $id_update
                    ];

                    if ($ps == 'PS2') {
                        if ($this->Hd7857_model->insertPs2($dataModel, $actual_data)) {
                            $this->flask('success', 'Actual Plan added Succesfuly', 'message');
                        } else {
                            $this->flask('danger', 'Failed to add Actual Plan', 'message');
                        }
                    } elseif ($ps == 'PS3' || $ps == 'PS4') {
                        $other['id_other'] = $id_other;

                        foreach ($column_other as $column) {
                            if (!(substr($column['column'], 0, 2) == 'id') && !($column['column'] == 'undercarriage')) {
                                $other[$column['column']] = $this->input->post($column['column']);
                            }
                        }

                        if ($this->Hd7857_model->insertPs34($dataModel, $actual_data, $other)) {
                            $this->flask('success', 'Actual Plan added Succesfuly', 'message');
                        } else {
                            $this->flask('danger', 'Failed to add Actual Plan', 'message');
                        }
                    }

                    redirect('admin/home/actualps');
                } else {
                    $this->load->view('templates/sidebar');
                    $this->load->view('templates/navbar', $dataa);
                    $this->load->view('templates/header');

                    if ($ps == 'PS2')
                        $this->load->view("admin/engine/hd785-7", $dataa);
                    elseif ($ps == 'PS3' || $ps == 'PS4')
                        $this->load->view("admin/complete/hd785-7", $dataa);

                    $this->load->view('templates/footer');
                }
                break;

            default:

                break;
        }
    }
}
