<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!($this->session->userdata('role'))) {
            $this->flask('danger', 'Login First!', 'logout');
            redirect('Admin/Auth');
        }

        $this->load->model('Product_Model');
        $this->load->model('Plan_Model');
        $this->load->model('Model_Model');
        $this->load->model('Actual_Plan', 'actual');

        $this->load->model('Column_Model');

        $this->load->model('Pc2000_Model');
        $this->load->model('Hd7857_Model');
        $this->load->model('Hd7855_Model');
        $this->load->model('Gd825_Model');
    }

    public function index()
    {
        redirect('Admin/Home/dashboard');
    }

    public function dashboard()
    {
        $data = [
            'reports' => $this->Model_Model->getModels(),
            'title' => 'Dashboard',
            'results' => [
                'pc2000' => [
                    'actual' => [
                        'ps2' => $this->actual->getActualRow('pc2000-8', 'ps2'),
                        'ps3' => $this->actual->getActualRow('pc2000-8', 'ps3'),
                        'ps4' => $this->actual->getActualRow('pc2000-8', 'ps4'),
                    ],
                    'plan' => [
                        'ps2' => $this->Plan_Model->getPlanRow('PC2000-8', 'ps2'),
                        'ps3' => $this->Plan_Model->getPlanRow('PC2000-8', 'ps3'),
                        'ps4' => $this->Plan_Model->getPlanRow('PC2000-8', 'ps4'),
                    ],
                    'sum_row' => ($this->actual->getSumRow('pc2000-8') + $this->Plan_Model->getRowPlansWithModelName('PC2000-8'))
                ],
                'gd825' => [
                    'actual' => [
                        'ps2' => $this->actual->getActualRow('gd825-2', 'ps2'),
                        'ps3' => $this->actual->getActualRow('gd825-2', 'ps3'),
                        'ps4' => $this->actual->getActualRow('gd825-2', 'ps4'),
                    ],
                    'plan' => [
                        'ps2' => $this->Plan_Model->getPlanRow('GD825-2', 'ps2'),
                        'ps3' => $this->Plan_Model->getPlanRow('GD825-2', 'ps3'),
                        'ps4' => $this->Plan_Model->getPlanRow('GD825-2', 'ps4'),
                    ],
                    'sum_row' => ($this->actual->getSumRow('gd825-2') + $this->Plan_Model->getRowPlansWithModelName('GD825-2'))
                ],
                'hd785' => [
                    'actual' => [
                        'ps2' => $this->actual->getActualRow('hd785-5', 'ps2'),
                        'ps3' => $this->actual->getActualRow('hd785-5', 'ps3'),
                        'ps4' => $this->actual->getActualRow('hd785-5', 'ps4'),
                    ],
                    'plan' => [
                        'ps2' => $this->Plan_Model->getPlanRow('HD785-5', 'ps2'),
                        'ps3' => $this->Plan_Model->getPlanRow('HD785-5', 'ps3'),
                        'ps4' => $this->Plan_Model->getPlanRow('HD785-5', 'ps4'),
                    ],
                    'sum_row' => ($this->actual->getSumRow('hd785-5') + $this->Plan_Model->getRowPlansWithModelName('HD785-5'))
                ],
                'hd787' => [
                    'actual' => [
                        'ps2' => $this->actual->getActualRow('hd785-7', 'ps2'),
                        'ps3' => $this->actual->getActualRow('hd785-7', 'ps3'),
                        'ps4' => $this->actual->getActualRow('hd785-7', 'ps4'),
                    ],
                    'plan' => [
                        'ps2' => $this->Plan_Model->getPlanRow('HD785-7', 'ps2'),
                        'ps3' => $this->Plan_Model->getPlanRow('HD785-7', 'ps3'),
                        'ps4' => $this->Plan_Model->getPlanRow('HD785-7', 'ps4'),
                    ],
                    'sum_row' => ($this->actual->getSumRow('hd785-7') + $this->Plan_Model->getRowPlansWithModelName('HD785-7'))
                ]
            ]
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

            if ($this->Plan_Model->insertPlan($data) > 0) {
                $this->flask('success', 'Plan has been Created!', 'message');
            } else {
                $this->flask('danger', 'Failed to create Plan!', 'message');
            }

            redirect('Admin/Home/planps');
        } else {
            if ($this->session->userdata('role') == 1) {
                $data = [
                    'models' => $this->Model_Model->getModels(),
                    'product' => $this->Product_Model->getProducts(),
                    'title' => 'Create Plan'
                ];

                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar');
                $this->load->view('templates/navbar');
                $this->load->view('admin/create_plan', $data);
                $this->load->view('templates/footer');
            } else {
                redirect('Admin/Home/dashboard');
            }
        }
    }

    public function planps()
    {
        $data = [
            'plans' => $this->Plan_Model->getPlans(),
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
        $this->form_validation->set_rules($name, $name, 'required|trim|greater_than_equal_to[' . $min . ']|less_than_equal_to[' . $max . ']', [
            'greater_than_equal_to' => 'harus ' . $min . '-' . $max,
            'less_than_equal_to' => 'harus ' . $min . '-' . $max,
            'required' => 'harus diisi'
        ]);
    }

    public function min_only_validation($name, $min)
    {
        $this->form_validation->set_rules($name, $name, 'required|trim|greater_than_equal_to[' . $min . ']', [
            'greater_than_equal_to' => 'harus > ' . $min,
            'required' => 'harus diisi'
        ]);
    }

    public function max_only_validation($name, $max)
    {
        $this->form_validation->set_rules($name, $name, 'required|trim|less_than_equal_to[' . $max . ']', [
            'less_than_equal_to' => 'harus < ' . $max,
            'required' => 'harus diisi'
        ]);
    }

    public function required_only_validation($name)
    {
        $this->form_validation->set_rules($name, $name, 'required|trim', [
            'required' => 'harus diisi'
        ]);
    }

    public function gd825_validation($ps)
    {
        $this->required_only_validation('engine_low_speed');

        $this->required_only_validation('engine_high_speed');

        $this->max_only_validation('tc_stall_press', '200');

        $this->min_only_validation('engine_low_press', '0.7');

        $this->min_only_validation('engine_low_press2', '0.7');

        $this->min_only_validation('engine_rated_press', '500');

        $this->required_only_validation('tc_stall_temp');

        if ($ps != 'PS2') :
            $this->required_only_validation('operating_effect');

            $this->required_only_validation('pedal_height');

            $this->required_only_validation('pedal_height_operated');

            $this->required_only_validation('pedal_travel');

            $this->required_only_validation('pilot_oil');

            $this->required_only_validation('lubricating_oil');

            $this->required_only_validation('main_oil');

            $this->required_only_validation('clutch_f');

            $this->required_only_validation('clutch_r');

            $this->required_only_validation('clutch_high');

            $this->required_only_validation('clutch_low');

            $this->required_only_validation('clutch_1');

            $this->required_only_validation('clutch_2');

            $this->required_only_validation('clutch_3');

            $this->required_only_validation('clutch_4');

            $this->required_only_validation('steering_wheel');

            $this->required_only_validation('operating_effort_wheel');

            $this->required_only_validation('priority_relief');

            $this->required_only_validation('operating_effort_brake');

            $this->required_only_validation('engine_full_throtte');

            $this->required_only_validation('raise_speed');

            $this->required_only_validation('lower_speed');

            $this->required_only_validation('left_out');

            $this->required_only_validation('right_out');

            $this->required_only_validation('left_compared');

            $this->required_only_validation('right_compared');

            $this->required_only_validation('lower_ripper');

            $this->required_only_validation('raise_ripper');

            $this->required_only_validation('rotation_down');

            $this->required_only_validation('rotation_up');

            $this->required_only_validation('drift_ext_blade');

            $this->required_only_validation('drift_rtn_blade');

            $this->required_only_validation('drift_ext_ripper');

            $this->required_only_validation('drift_rtn_ripper');

            $this->required_only_validation('hydraulic_priority');

            $this->required_only_validation('hydraulic_valve_rh');

            $this->required_only_validation('hydraulic_valve_lh');

            $this->required_only_validation('diff_drain');

            $this->required_only_validation('tandem_drain_lh');

            $this->required_only_validation('tandem_drain_rh');
        endif;
    }

    public function hd7855_validation($ps)
    {
        $this->actual_validation('engine_low', '625', '675');

        $this->actual_validation('engine_hi', '970', '1030');

        $this->actual_validation('engine_power', '2300', '2400');

        $this->actual_validation('engine_eco', '2250', '2350');

        $this->actual_validation('engine_power_high', '1790', '1990');

        $this->actual_validation('engine_power_eco', '1730', '1930');

        $this->max_only_validation('blow_power', '300');

        $this->min_only_validation('lub_power', '2.1');

        $this->min_only_validation('lub_low', '0.7');

        $this->min_only_validation('boost_stall_rh', '850');

        $this->min_only_validation('boost_stall_lh', '850');

        $this->required_only_validation('exhaust_ambient');

        $this->max_only_validation('exhaust_stall_rh', '700');

        $this->max_only_validation('exhaust_stall_lh', '700');

        if ($ps == 'PS3' || $ps == 'PS4') :
            $this->actual_validation('inlet_high', '7', '9');

            $this->actual_validation('inlet_low', '0.8', '1.8');

            $this->actual_validation('outlet_high', '3', '5');

            $this->actual_validation('outlet_low', '0.5', '1.5');

            $this->actual_validation('lock_high', '15.5', '16.5');

            $this->actual_validation('lock_low', '15.5', '16.5');

            $this->actual_validation('lubricating_full', '0.75', '1.75');

            $this->actual_validation('main_relieve_low', '32.5', '36.5');

            $this->actual_validation('main_relieve_power', '37', '41');

            $this->max_only_validation('steering_time_rl', '5');

            $this->max_only_validation('steering_time_lr', '5');

            $this->actual_validation('steering_relieve_low', '185', '195');

            $this->actual_validation('steering_relieve_power', '205', '225');

            $this->actual_validation('air_gov_cutin', '6.7', '7.3');

            $this->actual_validation('air_gov_cutout', '8', '8.6');

            $this->min_only_validation('service_brake1', '2000');

            $this->min_only_validation('service_brake2', '1750');

            $this->min_only_validation('retarder_brake1', '1500');

            $this->min_only_validation('retarder_brake2', '1300');

            $this->min_only_validation('parking_brake1', '2040');

            $this->min_only_validation('parking_brake2', '1890');

            $this->min_only_validation('emergency_brake1', '2040');

            $this->min_only_validation('emergency_brake2', '1890');

            $this->required_only_validation('front_brake_left');

            $this->required_only_validation('front_brake_right');

            $this->required_only_validation('rear_brake_left');

            $this->required_only_validation('rear_brake_right');

            $this->actual_validation('hoist_low', '185', '195');

            $this->actual_validation('hoist_power', '200', '215');

            $this->actual_validation('raising_speed', '11.5', '14.5');

            $this->min_only_validation('hydrolic_drift', '170');

            $this->actual_validation('left_front_suspension', '242', '282');

            $this->required_only_validation('left_front_oil');

            $this->actual_validation('right_front_suspension', '242', '282');

            $this->required_only_validation('right_front_oil');

            $this->actual_validation('left_rear_suspension', '220', '260');

            $this->required_only_validation('left_rear_oil');

            $this->actual_validation('right_rear_suspension', '220', '260');

            $this->required_only_validation('right_rear_oil');

            $this->required_only_validation('diff_drain');

            $this->required_only_validation('final_drive_lh');

            $this->required_only_validation('final_drive_rh');
        endif;
    }

    public function hd7857_validation($ps)
    {
        $this->required_only_validation('engine_low_idle_low');

        $this->required_only_validation('engine_low_idle_hi');

        $this->required_only_validation('engine_high_idle_power');

        $this->required_only_validation('engine_high_idle_eco');

        $this->required_only_validation('engine_high_idle_rev');

        $this->required_only_validation('engine_high_idle_rev_power');

        $this->required_only_validation('engine_torque_a');

        $this->required_only_validation('engine_torque_b');

        $this->required_only_validation('engine_torque_c');

        $this->required_only_validation('engine_torque_d');

        ###############################################################################

        $this->max_only_validation('blow_power', '5.88');

        $this->min_only_validation('lub_oil_rated', '2');

        $this->min_only_validation('lub_oil_low', '0.7');

        $this->min_only_validation('boost_press_rh', '165.40');

        $this->min_only_validation('boost_press_lh', '0.7');

        $this->required_only_validation('exhaust_ambient');

        $this->required_only_validation('exhaust_speed_rh');

        $this->required_only_validation('exhaust_speed_lh');

        if ($ps == 'PS3' || $ps == 'PS4') :
            $this->required_only_validation('oil_inlet');

            $this->required_only_validation('oil_outlet_on');

            $this->required_only_validation('oil_outlet_off');

            $this->required_only_validation('oil_lockup');

            $this->required_only_validation('oil_main_f1');

            $this->required_only_validation('oil_main_f4');

            $this->required_only_validation('oil_transmission');

            $this->required_only_validation('turn_time_rl');

            $this->required_only_validation('turn_time_lr');

            $this->required_only_validation('steering_low');

            $this->required_only_validation('steering_rated');

            $this->required_only_validation('brake_oil_service');

            $this->required_only_validation('brake_oil_retarder');

            $this->required_only_validation('charge_cutin');

            $this->required_only_validation('charge_cutout');

            $this->required_only_validation('service');

            $this->required_only_validation('retarder');

            $this->required_only_validation('parking');

            $this->required_only_validation('emergency');

            $this->required_only_validation('oil_temp');

            $this->required_only_validation('hoist_relief_rated');

            $this->required_only_validation('hoist_relief_low');

            $this->required_only_validation('dump_epc_high');

            $this->required_only_validation('dump_epc_low');

            $this->required_only_validation('dump_raising_speed');

            $this->required_only_validation('dump_lowering_speed');

            $this->required_only_validation('hyd_drift');

            $this->required_only_validation('left_front_susp');

            $this->required_only_validation('left_front_oil');

            $this->required_only_validation('right_front_susp');

            $this->required_only_validation('right_front_oil');

            $this->required_only_validation('left_rear_susp');

            $this->required_only_validation('left_rear_oil');

            $this->required_only_validation('right_rear_susp');

            $this->required_only_validation('right_rear_oil');

            $this->required_only_validation('diff_drain');

            $this->required_only_validation('final_drive_lh');

            $this->required_only_validation('final_drive_rh');
        endif;
    }

    public function pc2000_validation($ps)
    {
        $this->actual_validation('engine_low_idle', '775', '875');

        $this->actual_validation('engine_high_idle', '1930', '2030');

        $this->actual_validation('engine_full_throttle_raise', '1680', '1880');

        $this->actual_validation('engine_full_throttle_heavy', '1680', '1880');

        $this->actual_validation('engine_control_valve_neutral', '1300', '1500');

        $this->max_only_validation('blow_horsepower', '5.88');

        $this->min_only_validation('oil_run_low_idle', '0.06');

        $this->min_only_validation('oil_run_high_idle', '0.2');

        $this->required_only_validation('boost_horsepower');

        $this->max_only_validation('exhaust_speed_range', '750');

        $this->required_only_validation('exhaust_ambient_temp');

        if ($ps == 'PS3' || $ps == 'PS4') :
            $this->required_only_validation('visual_inspection');

            $this->required_only_validation('check_of_thermo');

            $this->max_only_validation('boom_raise', '90');

            $this->max_only_validation('boom_lower', '6.4');

            $this->max_only_validation('arm_in', '90');

            $this->max_only_validation('arm_out', '6.2');

            $this->max_only_validation('bucket_curl', '6');

            $this->max_only_validation('bucket_dump', '4.7');

            $this->max_only_validation('swing_5_turns', '70');

            $this->max_only_validation('drive_right_track', '70');

            $this->max_only_validation('drive_left_track', '70');

            $this->max_only_validation('whole_work', '1000');

            $this->max_only_validation('boom_cylinder', '50');

            $this->max_only_validation('arm_cylinder', '105');

            $this->max_only_validation('bucket_cylinder', '30');

            $this->actual_validation('control_pressure', '31', '38');

            $this->min_only_validation('jet_control_lever', '13.1');

            $this->min_only_validation('jet_right_travel_lever', '1.7');

            $this->min_only_validation('jet_left_travel_lever', '1.7');

            $this->actual_validation('pump_control_lever', '160', '280');

            $this->actual_validation('pump_right_travel_lever', '390', '510');

            $this->actual_validation('pump_left_travel_lever', '390', '510');

            $this->actual_validation('p1f_boom_raise', '280', '310');

            $this->actual_validation('p1f_boom_raise_heavy', '307', '337');

            $this->actual_validation('p1f_arm_in', '280', '310');

            $this->actual_validation('p1f_arm_out', '280', '310');

            $this->actual_validation('p1f_bucket_curl', '280', '310');

            $this->actual_validation('p1f_swing', '280', '310');

            $this->actual_validation('p1r_boom_raise', '280', '310');

            $this->actual_validation('p1r_boom_raise_heavy', '307', '337');

            $this->actual_validation('p1r_arm_in', '280', '310');

            $this->actual_validation('p1r_arm_out', '280', '310');

            $this->actual_validation('p1r_bucket_curl', '280', '310');

            $this->actual_validation('p2f_boom_raise', '280', '310');

            $this->actual_validation('p2f_boom_raise_heavy', '307', '337');

            $this->actual_validation('p2f_arm_in', '280', '310');

            $this->actual_validation('p2f_arm_out', '280', '310');

            $this->actual_validation('p2f_bucket_curl', '280', '310');

            $this->actual_validation('p2r_boom_raise_heavy', '307', '337');

            $this->actual_validation('p2r_arm_in', '280', '310');

            $this->actual_validation('p2r_arm_out', '280', '310');

            $this->actual_validation('p2r_bucket_curl', '280', '310');

            $this->actual_validation('fan_pump_radiator', '575', '675');

            $this->actual_validation('fan_pump_oil', '600', '700');

            $this->actual_validation('fan_speed_radiator', '790', '890');

            $this->actual_validation('fan_speed_oil', '710', '810');

            $this->max_only_validation('hydraulic_oil_temp', '100');

            $this->required_only_validation('visual_check_hydraulic');

            $this->required_only_validation('drive_drain_plug');

            $this->required_only_validation('drive_oil_leak');

            $this->required_only_validation('drive_abnormal_noise');

            $this->required_only_validation('swing_drain_plug');

            $this->required_only_validation('swing_oil_leak');

            $this->required_only_validation('axial_play');
        endif;
    }

    public function other_validation($check = 0)
    {
        $column_other = $this->Column_Model->getColumn('other_data');
        foreach ($column_other as $column) {
            if (!(substr($column['column'], 0, 2) == 'id')) {
                if ($column['column'] == 'undercarriage') {
                    if ($check != 0) {
                        $this->required_only_validation($column['column']);
                    }
                    break;
                } else {
                    $this->required_only_validation($column['column']);
                }
            }
        }
    }

    public function early_validation()
    {
        $this->required_only_validation('name');
        $this->required_only_validation('date');
        $this->required_only_validation('site');
    }

    public function ppm_report($detail = '')
    {
        $data = [
            'reports' => $this->Model_Model->getModels(),
            'actuals' => [
                'pc2000' => $this->actual->getActualJoin('pc2000-8'),
                'gd825' => $this->actual->getActualJoin('gd825-2'),
                'hd787' => $this->actual->getActualJoin('hd785-7'),
                'hd785' => $this->actual->getActualJoin('hd785-5')
            ],
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
                    $data['detail'] = [
                        "name" => "PC2000-8",
                        'actual' => $this->actual->getActualJoin('pc2000-8'),
                        'image' => 'PC2000-8.png'
                    ];
                    $this->load->view('admin/ppm_report_detail', $data);
                    break;
                case "GD825-2":
                    $data['detail'] = [
                        "name" => "GD825-2",
                        'actual' => $this->actual->getActualJoin('gd825-2'),
                        'image' => 'GD825A-2.png'
                    ];
                    $this->load->view('admin/ppm_report_detail', $data);
                    break;
                case "HD785-7":
                    $data['detail'] = [
                        "name" => "HD785-7",
                        'actual' => $this->actual->getActualJoin('hd785-7'),
                        'image' => 'HD785-7.png'
                    ];
                    $this->load->view('admin/ppm_report_detail', $data);
                    break;
                case "HD785-5":
                    $data['detail'] = [
                        "name" => "HD785-5",
                        'actual' => $this->actual->getActualJoin('hd785-5'),
                        'image' => 'HD785-5.png'
                    ];
                    $this->load->view('admin/ppm_report_detail', $data);
                    break;
                default:
                    show_404();
                    break;
            }
        }
        $this->load->view('templates/footer');
    }

    public function update_plan($unit = '', $ps = '', $plan =  '', $code = '')
    {
        $dataa = [
            'unit' => $unit,
            'code' => $code,
            'ps' => $ps,
            'plan' => $plan,
            'title' => "Update Plan $unit"
        ];

        $id_other = uniqid("oth-");
        $id_actual = uniqid("act-");

        switch ($unit) {
            case "PC2000-8":
                $id_update = uniqid("pc-");

                $this->early_validation();
                $this->pc2000_validation($ps);
                if ($ps != 'PS2')
                    $this->other_validation(1);

                if ($this->form_validation->run() == true) {
                    $data = $this->Column_Model->getColumn('pc2000-8');
                    $column_other = $this->Column_Model->getColumn('other_data');
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
                        'ppm_id' => '1',
                        'id_update' => $id_update
                    ];

                    if ($ps == 'PS2') {
                        if ($this->Pc2000_Model->insertPs2($dataModel, $actual_data)) {
                            if ($this->Plan_Model->updated_plan($plan, ['updated' => 1]) > 0)
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

                        if ($this->Pc2000_Model->insertPs34($dataModel, $actual_data, $other)) {
                            if ($this->Plan_Model->updated_plan($plan, ['updated' => 1]) > 0)
                                $this->flask('success', 'Actual Plan added Succesfuly', 'message');
                        } else {
                            $this->flask('danger', 'Failed to add Actual Plan', 'message');
                        }
                    }

                    redirect('Admin/Home/actualps');
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

                $this->early_validation();
                $this->gd825_validation($ps);
                if ($ps != 'PS2')
                    $this->other_validation(0);

                if ($this->form_validation->run() == true) {
                    $data = $this->Column_Model->getColumn('gd825-2');
                    $column_other = $this->Column_Model->getColumn('other_data');
                    $dataModel = [];

                    // Buat Array Untuk Insert Ke Database
                    foreach ($data as $dataa) {
                        if (!(substr($dataa['column'], 0, 2) == 'id')) {
                            $dataModel[$dataa['column']] = $this->input->post($dataa['column']);
                        }
                    }

                    var_dump($data);
                    die;
                

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
                        'ppm_id' => '2',
                        'id_update' => $id_update
                    ];

                    if ($ps == 'PS2') {
                        if ($this->Gd825_Model->insertPs2($dataModel, $actual_data)) {
                            if ($this->Plan_Model->updated_plan($plan, ['updated' => 1]) > 0)
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

                        if ($this->Gd825_Model->insertPs34($dataModel, $actual_data, $other)) {
                            if ($this->Plan_Model->updated_plan($plan, ['updated' => 1]) > 0)
                                $this->flask('success', 'Actual Plan added Succesfuly', 'message');
                        } else {
                            $this->flask('danger', 'Failed to add Actual Plan', 'message');
                        }
                    }

                    redirect('Admin/Home/actualps');
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

                $this->early_validation();
                $this->hd7855_validation($ps);
                if ($ps != 'PS2')
                    $this->other_validation(0);

                if ($this->form_validation->run() == true) {
                    $data = $this->Column_Model->getColumn('hd785-5');
                    $column_other = $this->Column_Model->getColumn('other_data');
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
                        if ($this->Hd7855_Model->insertPs2($dataModel, $actual_data)) {
                            if ($this->Plan_Model->updated_plan($plan, ['updated' => 1]) > 0)
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

                        if ($this->Hd7855_Model->insertPs34($dataModel, $actual_data, $other)) {
                            if ($this->Plan_Model->updated_plan($plan, ['updated' => 1]) > 0)
                                $this->flask('success', 'Actual Plan added Succesfuly', 'message');
                        } else {
                            $this->flask('danger', 'Failed to add Actual Plan', 'message');
                        }
                    }

                    redirect('Admin/Home/actualps');
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

                $this->early_validation();
                $this->hd7857_validation($ps);
                if ($ps != 'PS2')
                    $this->other_validation(0);

                if ($this->form_validation->run() == true) {
                    $data = $this->Column_Model->getColumn('hd785-7');
                    $column_other = $this->Column_Model->getColumn('other_data');
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
                        'ppm_id' => '4',
                        'id_update' => $id_update
                    ];

                    if ($ps == 'PS2') {
                        if ($this->Hd7857_Model->insertPs2($dataModel, $actual_data)) {
                            if ($this->Plan_Model->updated_plan($plan, ['updated' => 1]) > 0)
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

                        if ($this->Hd7857_Model->insertPs34($dataModel, $actual_data, $other)) {
                            if ($this->Plan_Model->updated_plan($plan, ['updated' => 1]) > 0)
                                $this->flask('success', 'Actual Plan added Succesfuly', 'message');
                        } else {
                            $this->flask('danger', 'Failed to add Actual Plan', 'message');
                        }
                    }

                    redirect('Admin/Home/actualps');
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

    public function export($unit = '', $actual_id = '', $ps)
    {
        $table = strtolower($unit);
        $data['actual'] = $this->actual->getActualJoinById($table, $actual_id, $ps);
        switch ($table) {
            case "pc2000-8":
                if ($ps == "PS2") {
                    $this->load->view('pdf/engine/pc2000-8', $data);
                } else if ($ps == "PS3" || $ps == "PS4") {
                    $this->load->view('pdf/complete/pc2000-8', $data);
                }
                break;
            case "hd785-5":
                if ($ps == "PS2") {
                    $this->load->view('pdf/engine/hd785-5', $data);
                } else if ($ps == "PS3" || $ps == "PS4") {
                    $this->load->view('pdf/complete/hd785-5', $data);
                }
                break;
            case "hd785-7":
                if ($ps == "PS2") {
                    $this->load->view('pdf/engine/hd785-7', $data);
                } else if ($ps == "PS3" || $ps == "PS4") {
                    $this->load->view('pdf/complete/hd785-7', $data);
                }
                break;
            case "gd825-2":
                if ($ps == "PS2") {
                    $this->load->view('pdf/engine/gd825-2', $data);
                } else if ($ps == "PS3" || $ps == "PS4") {
                    $this->load->view('pdf/complete/gd825-2', $data);
                }
                break;
        }
    }
}
