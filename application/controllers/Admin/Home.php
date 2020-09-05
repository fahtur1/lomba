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
            'reports' => $this->Model_model->getModels(),
            'title' => 'Dashboard',
            'results' => [
                'pc2000' => [
                    'actual' => [
                        'ps2' => $this->actual->getActualRow('pc2000-8', 'ps2'),
                        'ps3' => $this->actual->getActualRow('pc2000-8', 'ps3'),
                        'ps4' => $this->actual->getActualRow('pc2000-8', 'ps4'),
                    ],
                    'plan' => [
                        'ps2' => $this->Plan_model->getPlanRow('PC2000-8', 'ps2'),
                        'ps3' => $this->Plan_model->getPlanRow('PC2000-8', 'ps3'),
                        'ps4' => $this->Plan_model->getPlanRow('PC2000-8', 'ps4'),
                    ]
                ],
                'gd825' => [
                    'actual' => [
                        'ps2' => $this->actual->getActualRow('gd825-2', 'ps2'),
                        'ps3' => $this->actual->getActualRow('gd825-2', 'ps3'),
                        'ps4' => $this->actual->getActualRow('gd825-2', 'ps4'),
                    ],
                    'plan' => [
                        'ps2' => $this->Plan_model->getPlanRow('GD825-2', 'ps2'),
                        'ps3' => $this->Plan_model->getPlanRow('GD825-2', 'ps3'),
                        'ps4' => $this->Plan_model->getPlanRow('GD825-2', 'ps4'),
                    ]
                ],
                'hd785' => [
                    'actual' => [
                        'ps2' => $this->actual->getActualRow('hd785-5', 'ps2'),
                        'ps3' => $this->actual->getActualRow('hd785-5', 'ps3'),
                        'ps4' => $this->actual->getActualRow('hd785-5', 'ps4'),
                    ],
                    'plan' => [
                        'ps2' => $this->Plan_model->getPlanRow('HD785-5', 'ps2'),
                        'ps3' => $this->Plan_model->getPlanRow('HD785-5', 'ps3'),
                        'ps4' => $this->Plan_model->getPlanRow('HD785-5', 'ps4'),
                    ]
                ],
                'hd787' => [
                    'actual' => [
                        'ps2' => $this->actual->getActualRow('hd785-7', 'ps2'),
                        'ps3' => $this->actual->getActualRow('hd785-7', 'ps3'),
                        'ps4' => $this->actual->getActualRow('hd785-7', 'ps4'),
                    ],
                    'plan' => [
                        'ps2' => $this->Plan_model->getPlanRow('HD785-7', 'ps2'),
                        'ps3' => $this->Plan_model->getPlanRow('HD785-7', 'ps3'),
                        'ps4' => $this->Plan_model->getPlanRow('HD785-7', 'ps4'),
                    ]
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

    public function min_only_validation($name, $min)
    {
        $this->form_validation->set_rules($name, $name, 'required|trim|greater_than[' . $min . ']', [
            'greater_than' => 'harus > ' . $min,
            'required' => 'harus diisi'
        ]);
    }

    public function max_only_validation($name, $max)
    {
        $this->form_validation->set_rules($name, $name, 'required|trim|less_than[' . $max . ']', [
            'less_than' => 'harus < ' . $max,
            'required' => 'harus diisi'
        ]);
    }

    public function required_only_validation($name)
    {
        $this->form_validation->set_rules($name, $name, 'required|trim', [
            'required' => 'harus diisi'
        ]);
    }

    public function gd825_validation()
    {
        $this->actual_validation('engine_low_speed', '600', '700');
        $this->required_only_validation('engine_low_speed_remark');

        $this->actual_validation('engine_high_speed', '2300', '2400');
        $this->required_only_validation('engine_high_speed_remark');

        $this->max_only_validation('tc_stall_press', '200');
        $this->required_only_validation('tc_stall_press_remark');

        $this->min_only_validation('engine_low_press', '0.7');
        $this->required_only_validation('engine_low_press_remark');

        $this->min_only_validation('engine_low_press2', '0.7');
        $this->required_only_validation('engine_low_press2_remark');

        $this->min_only_validation('engine_rated_press', '500');
        $this->required_only_validation('engine_rated_press_remark');

        $this->min_only_validation('tc_stall_temp', '700');
        $this->required_only_validation('tc_stall_temp_remark');

        $this->actual_validation('operating_effect', '8', '18');
        $this->required_only_validation('operating_effect_remark');

        $this->actual_validation('pedal_height', '90', '110');
        $this->required_only_validation('pedal_height_remark');

        $this->actual_validation('pedal_height_operated', '39', '48');
        $this->required_only_validation('pedal_height_operated_remark');

        $this->max_only_validation('pedal_travel', '65');
        $this->required_only_validation('pedal_travel_remark');

        $this->actual_validation('pilot_oil', '10', '12');
        $this->required_only_validation('pilot_oil_remark');

        $this->actual_validation('lubricating_oil', '1.0', '2.5');
        $this->required_only_validation('lubricating_oil_remark');

        $this->actual_validation('main_oil', '31', '34');
        $this->required_only_validation('main_oil_remark');

        $this->actual_validation('clutch_f', '31', '34');
        $this->required_only_validation('clutch_f_remark');

        $this->actual_validation('clutch_r', '31', '34');
        $this->required_only_validation('clutch_r_remark');

        $this->actual_validation('clutch_high', '31', '34');
        $this->required_only_validation('clutch_high_remark');

        $this->actual_validation('clutch_low', '31', '34');
        $this->required_only_validation('clutch_low_remark');

        $this->actual_validation('clutch_1', '31', '34');
        $this->required_only_validation('clutch_1_remark');

        $this->actual_validation('clutch_2', '31', '34');
        $this->required_only_validation('clutch_2_remark');

        $this->actual_validation('clutch_3', '31', '34');
        $this->required_only_validation('clutch_3_remark');

        $this->actual_validation('clutch_4', '31', '34');
        $this->required_only_validation('clutch_4_remark');

        $this->max_only_validation('steering_wheel', '45');
        $this->required_only_validation('steering_wheel_remark');

        $this->max_only_validation('operating_effort_wheel', '6');
        $this->required_only_validation('operating_effort_wheel_remark');

        $this->actual_validation('priority_relief', '165', '185');
        $this->required_only_validation('priority_relief_remark');

        $this->max_only_validation('operating_effort_brake', '50');
        $this->required_only_validation('operating_effort_brake_remark');

        $this->max_only_validation('engine_full_throtte', '3.7');
        $this->required_only_validation('engine_full_throtte_remark');

        $this->actual_validation('raise_speed', '115', '145');
        $this->required_only_validation('raise_speed_remark');

        $this->actual_validation('lower_speed', '115', '145');
        $this->required_only_validation('lower_speed_remark');

        $this->actual_validation('left_out', '115', '145');
        $this->required_only_validation('left_out_remark');

        $this->actual_validation('right_out', '115', '145');
        $this->required_only_validation('right_out_remark');

        $this->actual_validation('left_compared', '115', '145');
        $this->required_only_validation('left_compared_remark');

        $this->actual_validation('right_compared', '115', '145');
        $this->required_only_validation('right_compared_remark');

        $this->actual_validation('lower_ripper', '85', '115');
        $this->required_only_validation('lower_ripper_remark');

        $this->actual_validation('raise_ripper', '85', '115');
        $this->required_only_validation('raise_ripper_remark');

        $this->actual_validation('rotation_down', '8.5', '9.5');
        $this->required_only_validation('rotation_down_remark');

        $this->actual_validation('rotation_up', '6.5', '7.5');
        $this->required_only_validation('rotation_up_remark');

        $this->required_only_validation('drift_ext_blade');
        $this->required_only_validation('drift_ext_blade_remark');

        $this->required_only_validation('drift_rtn_blade');
        $this->required_only_validation('drift_rtn_blade_remark');

        $this->required_only_validation('drift_ext_ripper');
        $this->required_only_validation('drift_ext_ripper_remark');

        $this->required_only_validation('drift_rtn_ripper');
        $this->required_only_validation('drift_rtn_ripper_remark');

        $this->actual_validation('hydraulic_priority', '235', '265');
        $this->required_only_validation('hydraulic_priority_remark');

        $this->actual_validation('hydraulic_valve_rh', '235', '265');
        $this->required_only_validation('hydraulic_valve_rh_remark');

        $this->actual_validation('hydraulic_valve_lh', '235', '265');
        $this->required_only_validation('hydraulic_valve_lh_remark');

        $this->required_only_validation('diff_drain');
        $this->required_only_validation('diff_drain_remark');

        $this->required_only_validation('tandem_drain_lh');
        $this->required_only_validation('tandem_drain_lh_remark');

        $this->required_only_validation('tandem_drain_rh');
        $this->required_only_validation('tandem_drain_rh_remark');
    }

    public function hd7855_validation()
    {
        $this->actual_validation('engine_low', '625', '675');
        $this->required_only_validation('engine_low_remark');

        $this->actual_validation('engine_hi', '970', '1030');
        $this->required_only_validation('engine_hi_remark');

        $this->actual_validation('engine_power', '2300', '2400');
        $this->required_only_validation('engine_power_remark');

        $this->actual_validation('engine_eco', '2250', '2350');
        $this->required_only_validation('engine_eco_remark');

        $this->actual_validation('engine_power_high', '1790', '1990');
        $this->required_only_validation('engine_power_high_remark');

        $this->actual_validation('engine_power_eco', '1730', '1930');
        $this->required_only_validation('engine_power_eco_remark');

        $this->max_only_validation('blow_power', '300');
        $this->required_only_validation('blow_power_remark');

        $this->min_only_validation('lub_power', '2.1');
        $this->required_only_validation('lub_power_remark');

        $this->min_only_validation('lub_low', '0.7');
        $this->required_only_validation('lub_low_remark');

        $this->min_only_validation('boost_stall_rh', '850');
        $this->required_only_validation('boost_stall_rh_remark');

        $this->min_only_validation('boost_stall_lh', '850');
        $this->required_only_validation('boost_stall_lh_remark');

        $this->required_only_validation('exhaust_ambient');
        $this->required_only_validation('exhaust_ambient_remark');

        $this->max_only_validation('exhaust_stall_rh', '700');
        $this->required_only_validation('exhaust_stall_rh_remark');

        $this->max_only_validation('exhaust_stall_lh', '700');
        $this->required_only_validation('exhaust_stall_lh_remark');

        $this->actual_validation('inlet_high', '7', '9');
        $this->required_only_validation('inlet_high_remark');

        $this->actual_validation('inlet_low', '0.8', '1.8');
        $this->required_only_validation('inlet_low_remark');

        $this->actual_validation('outlet_high', '3', '5');
        $this->required_only_validation('outlet_high_remark');

        $this->actual_validation('outlet_low', '0.5', '1.5');
        $this->required_only_validation('outlet_low_remark');

        $this->actual_validation('lock_high', '15.5', '16.5');
        $this->required_only_validation('lock_high_remark');

        $this->actual_validation('lock_low', '15.5', '16.5');
        $this->required_only_validation('lock_low_remark');

        $this->actual_validation('lubricating_full', '0.75', '1.75');
        $this->required_only_validation('lubricating_full_remark');

        $this->actual_validation('main_relieve_low', '32.5', '36.5');
        $this->required_only_validation('main_relieve_low_remark');

        $this->actual_validation('main_relieve_power', '37', '41');
        $this->required_only_validation('main_relieve_power_remark');

        $this->max_only_validation('steering_time_rl', '5');
        $this->required_only_validation('steering_time_rl_remark');

        $this->max_only_validation('steering_time_lr', '5');
        $this->required_only_validation('steering_time_lr_remark');

        $this->actual_validation('steering_relieve_low', '185', '195');
        $this->required_only_validation('steering_relieve_low_remark');

        $this->actual_validation('steering_relieve_power', '205', '225');
        $this->required_only_validation('steering_relieve_power_remark');

        $this->actual_validation('air_gov_cutin', '6.7', '7.3');
        $this->required_only_validation('air_gov_cutin_remark');

        $this->actual_validation('air_gov_cutout', '8', '8.6');
        $this->required_only_validation('air_gov_cutout_remark');

        $this->min_only_validation('service_brake1', '2000');
        $this->required_only_validation('service_brake1_remark');

        $this->min_only_validation('service_brake2', '1750');
        $this->required_only_validation('service_brake2_remark');

        $this->min_only_validation('retarder_brake1', '1500');
        $this->required_only_validation('retarder_brake1_remark');

        $this->min_only_validation('retarder_brake2', '1300');
        $this->required_only_validation('retarder_brake2_remark');

        $this->min_only_validation('parking_brake1', '2040');
        $this->required_only_validation('parking_brake1_remark');

        $this->min_only_validation('parking_brake2', '1890');
        $this->required_only_validation('parking_brake2_remark');

        $this->min_only_validation('emergency_brake1', '2040');
        $this->required_only_validation('emergency_brake1_remark');

        $this->min_only_validation('emergency_brake2', '1890');
        $this->required_only_validation('emergency_brake2_remark');

        $this->required_only_validation('front_brake_left');
        $this->required_only_validation('front_brake_left_remark');

        $this->required_only_validation('front_brake_right');
        $this->required_only_validation('front_brake_right_remark');

        $this->required_only_validation('rear_brake_left');
        $this->required_only_validation('rear_brake_left_remark');

        $this->required_only_validation('rear_brake_right');
        $this->required_only_validation('rear_brake_right_remark');

        $this->actual_validation('hoist_low', '185', '195');
        $this->required_only_validation('hoist_low_remark');

        $this->actual_validation('hoist_power', '200', '215');
        $this->required_only_validation('hoist_power_remark');

        $this->actual_validation('raising_speed', '11.5', '14.5');
        $this->required_only_validation('raising_speed_remark');

        $this->min_only_validation('hydrolic_drift', '170');
        $this->required_only_validation('hydrolic_drift_remark');

        $this->actual_validation('left_front_suspension', '242', '282');
        $this->required_only_validation('left_front_suspension_remark');

        $this->required_only_validation('left_front_oil');
        $this->required_only_validation('left_front_oil_remark');

        $this->actual_validation('right_front_suspension', '242', '282');
        $this->required_only_validation('right_front_suspension_remark');

        $this->required_only_validation('right_front_oil');
        $this->required_only_validation('right_front_oil_remark');

        $this->actual_validation('left_rear_suspension', '220', '260');
        $this->required_only_validation('left_rear_suspension_remark');

        $this->required_only_validation('left_rear_oil');
        $this->required_only_validation('left_rear_oil_remark');

        $this->actual_validation('right_rear_suspension', '220', '260');
        $this->required_only_validation('right_rear_suspension_remark');

        $this->required_only_validation('right_rear_oil');
        $this->required_only_validation('right_rear_oil_remark');

        $this->required_only_validation('diff_drain');
        $this->required_only_validation('diff_drain_remark');

        $this->required_only_validation('final_drive_lh');
        $this->required_only_validation('final_drive_lh_remark');

        $this->required_only_validation('final_drive_rh');
        $this->required_only_validation('final_drive_rh_remark');
    }

    public function hd7857_validation()
    {
        $this->actual_validation('engine_low_idle_low', '625', '675');
        $this->required_only_validation('engine_low_idle_low_remark');

        $this->actual_validation('engine_low_idle_hi', '895', '995');
        $this->required_only_validation('engine_low_idle_hi_remark');

        $this->actual_validation('engine_high_idle_power', '2300', '2400');
        $this->required_only_validation('engine_high_idle_power_remark');

        $this->actual_validation('engine_high_idle_eco', '2050', '2150');
        $this->required_only_validation('engine_high_idle_eco_remark');

        $this->actual_validation('engine_high_idle_rev', '2000', '2100');
        $this->required_only_validation('engine_high_idle_rev_remark');

        $this->actual_validation('engine_high_idle_rev_power', '2200', '2300');
        $this->required_only_validation('engine_high_idle_rev_power_remark');

        $this->actual_validation('engine_torque_a', '1745', '1945');
        $this->required_only_validation('engine_torque_a_remark');

        $this->actual_validation('engine_torque_b', '1680', '1880');
        $this->required_only_validation('engine_torque_b_remark');

        $this->actual_validation('engine_torque_c', '1630', '1830');
        $this->required_only_validation('engine_torque_c_remark');

        $this->actual_validation('engine_torque_d', '1595', '1795');
        $this->required_only_validation('engine_torque_d_remark');

        $this->max_only_validation('blow_power', '5.88');
        $this->required_only_validation('blow_power_remark');

        $this->min_only_validation('lub_oil_rated', '2');
        $this->required_only_validation('lub_oil_rated_remark');

        $this->min_only_validation('lub_oil_low', '0.7');
        $this->required_only_validation('lub_oil_low_remark');

        $this->min_only_validation('boost_press_rh', '165.40');
        $this->required_only_validation('boost_press_rh_remark');

        $this->min_only_validation('boost_press_lh', '0.7');
        $this->required_only_validation('boost_press_lh_remark');

        $this->required_only_validation('exhaust_ambient');
        $this->required_only_validation('exhaust_ambient_remark');

        $this->max_only_validation('exhaust_speed_rh', '750');
        $this->required_only_validation('exhaust_speed_rh_remark');

        $this->max_only_validation('exhaust_speed_lh', '750');
        $this->required_only_validation('exhaust_speed_lh_remark');

        $this->max_only_validation('oil_inlet', '8.67');
        $this->required_only_validation('oil_inlet_remark');

        $this->actual_validation('oil_outlet_on', '4.59', '5.41');
        $this->required_only_validation('oil_outlet_on_remark');

        $this->actual_validation('oil_outlet_off', '4.59', '6.01');
        $this->required_only_validation('oil_outlet_off_remark');

        $this->actual_validation('oil_lockup', '13.5', '17.5');
        $this->required_only_validation('oil_lockup_remark');

        $this->actual_validation('oil_main_f1', '34', '38');
        $this->required_only_validation('oil_main_f1_remark');

        $this->actual_validation('oil_main_f4', '20', '24');
        $this->required_only_validation('oil_main_f4_remark');

        $this->actual_validation('oil_transmission', '1.2', '2.2');
        $this->required_only_validation('oil_transmission_remark');

        $this->max_only_validation('turn_time_rl', '5');
        $this->required_only_validation('turn_time_rl_remark');

        $this->max_only_validation('turn_time_lr', '5');
        $this->required_only_validation('turn_time_lr_remark');

        $this->actual_validation('steering_low', '185', '195');
        $this->required_only_validation('steering_low_remark');

        $this->actual_validation('steering_rated', '206', '215');
        $this->required_only_validation('steering_rated_remark');

        $this->actual_validation('brake_oil_service', '93', '107');
        $this->required_only_validation('brake_oil_service_remark');

        $this->actual_validation('brake_oil_retarder', '59', '72');
        $this->required_only_validation('brake_oil_retarder_remark');

        $this->actual_validation('charge_cutin', '120', '130');
        $this->required_only_validation('charge_cutin_remark');

        $this->actual_validation('charge_cutout', '210', '220');
        $this->required_only_validation('charge_cutout_remark');

        $this->required_only_validation('service');
        $this->required_only_validation('service_remark');

        $this->required_only_validation('retarder');
        $this->required_only_validation('retarder_remark');

        $this->required_only_validation('parking');
        $this->required_only_validation('parking_remark');

        $this->required_only_validation('emergency');
        $this->required_only_validation('emergency_remark');

        $this->required_only_validation('oil_temp');
        $this->required_only_validation('oil_temp_remark');

        $this->actual_validation('hoist_relief_rated', '206', '215');
        $this->required_only_validation('hoist_relief_rated_remark');

        $this->actual_validation('hoist_relief_low', '185', '195');
        $this->required_only_validation('hoist_relief_low_remark');

        $this->actual_validation('dump_epc_high', '30', '40');
        $this->required_only_validation('dump_epc_high_remark');

        $this->actual_validation('dump_epc_low', '22', '32');
        $this->required_only_validation('dump_epc_low_remark');

        $this->actual_validation('dump_raising_speed', '11.5', '14.5');
        $this->required_only_validation('dump_raising_speed_remark');

        $this->actual_validation('dump_lowering_speed', '12.5', '15.5');
        $this->required_only_validation('dump_lowering_speed_remark');

        $this->max_only_validation('hyd_drift', '170');
        $this->required_only_validation('hyd_drift_remark');

        $this->actual_validation('left_front_susp', '227', '267');
        $this->required_only_validation('left_front_susp_remark');

        $this->required_only_validation('left_front_oil');
        $this->required_only_validation('left_front_oil_remark');

        $this->actual_validation('right_front_susp', '227', '267');
        $this->required_only_validation('right_front_susp_remark');

        $this->required_only_validation('right_front_oil');
        $this->required_only_validation('right_front_oil_remark');

        $this->actual_validation('left_rear_susp', '179', '219');
        $this->required_only_validation('left_rear_susp_remark');

        $this->required_only_validation('left_rear_oil');
        $this->required_only_validation('left_rear_oil_remark');

        $this->actual_validation('right_rear_susp', '179', '219');
        $this->required_only_validation('right_rear_susp_remark');

        $this->required_only_validation('right_rear_oil');
        $this->required_only_validation('right_rear_oil_remark');

        $this->required_only_validation('diff_drain');
        $this->required_only_validation('diff_drain_remark');

        $this->required_only_validation('final_drive_lh');
        $this->required_only_validation('final_drive_lh_remark');

        $this->required_only_validation('final_drive_rh');
        $this->required_only_validation('final_drive_rh_remark');
    }

    public function pc2000_validation()
    {
        $this->actual_validation('engine_low_idle', '775', '875');
        $this->required_only_validation('engine_low_idle_remark');

        $this->actual_validation('engine_high_idle', '1930', '2030');
        $this->required_only_validation('engine_high_idle_remark');

        $this->actual_validation('engine_full_throttle_raise', '1680', '1880');
        $this->required_only_validation('engine_full_throttle_raise_remark');

        $this->actual_validation('engine_full_throttle_heavy', '1680', '1880');
        $this->required_only_validation('engine_full_throttle_heavy_remark');

        $this->actual_validation('engine_control_valve_neutral', '1300', '1500');
        $this->required_only_validation('engine_control_valve_neutral_remark');

        $this->max_only_validation('blow_horsepower', '5.88');
        $this->required_only_validation('blow_horsepower_remark');

        $this->min_only_validation('oil_run_low_idle', '0.06');
        $this->required_only_validation('oil_run_low_idle_remark');

        $this->min_only_validation('oil_run_high_idle', '0.2');
        $this->required_only_validation('oil_run_high_idle_remark');

        $this->required_only_validation('boost_horsepower');
        $this->required_only_validation('boost_horsepower_remark');

        $this->max_only_validation('exhaust_speed_range', '750');
        $this->required_only_validation('exhaust_speed_range_remark');

        $this->required_only_validation('exhaust_ambient_temp');
        $this->required_only_validation('exhaust_ambient_temp_remark');

        $this->required_only_validation('visual_inspection');
        $this->required_only_validation('visual_inspection_remark');

        $this->required_only_validation('check_of_thermo');
        $this->required_only_validation('check_of_thermo_remark');

        $this->max_only_validation('boom_raise', '90');
        $this->required_only_validation('boom_raise_remark');

        $this->max_only_validation('boom_lower', '6.4');
        $this->required_only_validation('boom_lower_remark');

        $this->max_only_validation('arm_in', '90');
        $this->required_only_validation('arm_in_remark');

        $this->max_only_validation('arm_out', '6.2');
        $this->required_only_validation('arm_out_remark');

        $this->max_only_validation('bucket_curl', '6');
        $this->required_only_validation('bucket_curl_remark');

        $this->max_only_validation('bucket_dump', '4.7');
        $this->required_only_validation('bucket_dump_remark');

        $this->max_only_validation('swing_5_turns', '70');
        $this->required_only_validation('swing_5_turns_remark');

        $this->max_only_validation('drive_right_track', '70');
        $this->required_only_validation('drive_right_track_remark');

        $this->max_only_validation('drive_left_track', '70');
        $this->required_only_validation('drive_left_track_remark');

        $this->max_only_validation('whole_work', '1000');
        $this->required_only_validation('whole_work_remark');

        $this->max_only_validation('boom_cylinder', '50');
        $this->required_only_validation('boom_cylinder_remark');

        $this->max_only_validation('arm_cylinder', '105');
        $this->required_only_validation('arm_cylinder_remark');

        $this->max_only_validation('bucket_cylinder', '30');
        $this->required_only_validation('bucket_cylinder_remark');

        $this->actual_validation('control_pressure', '31', '38');
        $this->required_only_validation('control_pressure_remark');

        $this->min_only_validation('jet_control_lever', '13.1');
        $this->required_only_validation('jet_control_lever_remark');

        $this->min_only_validation('jet_right_travel_lever', '1.7');
        $this->required_only_validation('jet_right_travel_lever_remark');

        $this->min_only_validation('jet_left_travel_lever', '1.7');
        $this->required_only_validation('jet_left_travel_lever_remark');

        $this->actual_validation('pump_control_lever', '160', '280');
        $this->required_only_validation('pump_control_lever_remark');

        $this->actual_validation('pump_right_travel_lever', '390', '510');
        $this->required_only_validation('pump_right_travel_lever_remark');

        $this->actual_validation('pump_left_travel_lever', '390', '510');
        $this->required_only_validation('pump_left_travel_lever_remark');

        $this->actual_validation('p1f_boom_raise', '280', '310');
        $this->required_only_validation('p1f_boom_raise_remark');

        $this->actual_validation('p1f_boom_raise_heavy', '307', '337');
        $this->required_only_validation('p1f_boom_raise_heavy_remark');

        $this->actual_validation('p1f_arm_in', '280', '310');
        $this->required_only_validation('p1f_arm_in_remark');

        $this->actual_validation('p1f_arm_out', '280', '310');
        $this->required_only_validation('p1f_arm_out_remark');

        $this->actual_validation('p1f_bucket_curl', '280', '310');
        $this->required_only_validation('p1f_bucket_curl_remark');

        $this->actual_validation('p1f_swing', '280', '310');
        $this->required_only_validation('p1f_swing_remark');

        $this->actual_validation('p1r_boom_raise', '280', '310');
        $this->required_only_validation('p1r_boom_raise_remark');

        $this->actual_validation('p1r_boom_raise_heavy', '307', '337');
        $this->required_only_validation('p1r_boom_raise_heavy_remark');

        $this->actual_validation('p1r_arm_in', '280', '310');
        $this->required_only_validation('p1r_arm_in_remark');

        $this->actual_validation('p1r_arm_out', '280', '310');
        $this->required_only_validation('p1r_arm_out_remark');

        $this->actual_validation('p1r_bucket_curl', '280', '310');
        $this->required_only_validation('p1r_bucket_curl_remark');

        $this->actual_validation('p2f_boom_raise', '280', '310');
        $this->required_only_validation('p2f_boom_raise_remark');

        $this->actual_validation('p2f_boom_raise_heavy', '307', '337');
        $this->required_only_validation('p2f_boom_raise_heavy_remark');

        $this->actual_validation('p2f_arm_in', '280', '310');
        $this->required_only_validation('p2f_arm_in_remark');

        $this->actual_validation('p2f_arm_out', '280', '310');
        $this->required_only_validation('p2f_arm_out_remark');

        $this->actual_validation('p2f_bucket_curl', '280', '310');
        $this->required_only_validation('p2f_bucket_curl_remark');

        $this->actual_validation('p2r_boom_raise_heavy', '307', '337');
        $this->required_only_validation('p2r_boom_raise_heavy_remark');

        $this->actual_validation('p2r_arm_in', '280', '310');
        $this->required_only_validation('p2r_arm_in_remark');

        $this->actual_validation('p2r_arm_out', '280', '310');
        $this->required_only_validation('p2r_arm_out_remark');

        $this->actual_validation('p2r_bucket_curl', '280', '310');
        $this->required_only_validation('p2r_bucket_curl_remark');

        $this->actual_validation('fan_pump_radiator', '575', '675');
        $this->required_only_validation('fan_pump_radiator_remark');

        $this->actual_validation('fan_pump_oil', '600', '700');
        $this->required_only_validation('fan_pump_oil_remark');

        $this->actual_validation('fan_speed_radiator', '790', '890');
        $this->required_only_validation('fan_speed_radiator_remark');

        $this->actual_validation('fan_speed_oil', '710', '810');
        $this->required_only_validation('fan_speed_oil_remark');

        $this->max_only_validation('hydraulic_oil_temp', '100');
        $this->required_only_validation('hydraulic_oil_temp_remark');

        $this->required_only_validation('visual_check_hydraulic');
        $this->required_only_validation('visual_check_hydraulic_remark');

        $this->required_only_validation('drive_drain_plug');
        $this->required_only_validation('drive_drain_plug_remark');

        $this->required_only_validation('drive_oil_leak');
        $this->required_only_validation('drive_oil_leak_remark');

        $this->required_only_validation('drive_abnormal_noise');
        $this->required_only_validation('drive_abnormal_noise_remark');

        $this->required_only_validation('swing_drain_plug');
        $this->required_only_validation('swing_drain_plug_remark');

        $this->required_only_validation('swing_oil_leak');
        $this->required_only_validation('swing_oil_leak_remark');

        $this->required_only_validation('axial_play');
        $this->required_only_validation('axial_play_remark');
    }

    public function other_validation($check = 0)
    {
        $column_other = $this->Column_model->getColumn('other_data');
        foreach ($column_other as $column) {
            if (!(substr($column['column'], 0, 2) == 'id')) {
                if ($column['column'] == 'undercarriage' || $column['column'] == 'undercarriage_remark') {
                    if ($check == 0) {
                        // do nothing
                    } else {
                        $this->required_only_validation($column['column']);
                    }
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
            'reports' => $this->Model_model->getModels(),
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
                        'actual' => $this->actual->getActualJoin('pc2000-8')
                    ];
                    $this->load->view('admin/ppm_report_detail', $data);
                    break;
                case "GD825-2":
                    $data['detail'] = [
                        "name" => "GD825-2",
                        'actual' => $this->actual->getActualJoin('gd825-2')
                    ];
                    $this->load->view('admin/ppm_report_detail', $data);
                    break;
                case "HD785-7":
                    $data['detail'] = [
                        "name" => "HD785-7",
                        'actual' => $this->actual->getActualJoin('hd785-5')
                    ];
                    $this->load->view('admin/ppm_report_detail', $data);
                    break;
                case "HD785-5":
                    $data['detail'] = [
                        "name" => "HD785-5",
                        'actual' => $this->actual->getActualJoin('hd785-7')
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

    public function getDataDummy()
    {
        return $data = [
            [
                "name" => "PC2000-8"
            ],
            [
                "name" => "GD825-2"
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

                $this->early_validation();
                $this->pc2000_validation();
                $this->other_validation(1);

                if ($this->form_validation->run() == true) {
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
                            if ($this->Plan_model->updated_plan($plan, ['updated' => 1]) > 0)
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
                            if ($this->Plan_model->updated_plan($plan, ['updated' => 1]) > 0)
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

                $this->early_validation();
                $this->gd825_validation();
                $this->other_validation(0);

                if ($this->form_validation->run() == true) {
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
                            if ($this->Plan_model->updated_plan($plan, ['updated' => 1]) > 0)
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
                            if ($this->Plan_model->updated_plan($plan, ['updated' => 1]) > 0)
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

                $this->early_validation();
                $this->hd7855_validation();
                $this->other_validation(0);

                if ($this->form_validation->run() == true) {
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
                            if ($this->Plan_model->updated_plan($plan, ['updated' => 1]) > 0)
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
                            if ($this->Plan_model->updated_plan($plan, ['updated' => 1]) > 0)
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

                $this->early_validation();
                $this->hd7857_validation();
                $this->other_validation();

                if ($this->form_validation->run() == true) {
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
                            if ($this->Plan_model->updated_plan($plan, ['updated' => 1]) > 0)
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
                            if ($this->Plan_model->updated_plan($plan, ['updated' => 1]) > 0)
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

    public function export()
    {
        $this->load->library('pdf');
        $this->pdf->generate('pdf/pc2000-8');
    }
}
