<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('Pc2000_model');
        $this->load->model('Hd7857_model');
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
                    // Data Post dari Halaman View
                    $data = [
                        'id_update' => $id_update,
                        'engine_low_idle' => $this->input->post('engine_low_idle'),
                        'engine_high_idle' => $this->input->post('engine_high_idle'),
                        'engine_full_throttle_raise' => $this->input->post('engine_full_throttle_raise'),
                        'engine_full_throttle_heavy' => $this->input->post('engine_full_throttle_heavy'),
                        'engine_control_valve_neutral' => $this->input->post('engine_control_valve_neutral'),
                        'blow_horsepower' => $this->input->post('blow_horsepower'),
                        'oil_run_low_idle' => $this->input->post('oil_run_low_idle'),
                        'oil_run_high_idle' => $this->input->post('oil_run_high_idle'),
                        'boost_horsepower' => $this->input->post('boost_horsepower'),
                        'exhaust_speed_range' => $this->input->post('exhaust_speed_range'),
                        'exhaust_ambient_temp' => $this->input->post('exhaust_ambient_temp'),
                        'engine_low_idle_remark' => $this->input->post('engine_low_idle_remark'),
                        'engine_high_idle_remark' => $this->input->post('engine_high_idle_remark'),
                        'engine_full_throttle_raise_remark' => $this->input->post('engine_full_throttle_raise_remark'),
                        'engine_full_throttle_heavy_remark' => $this->input->post('engine_full_throttle_heavy_remark'),
                        'engine_control_valve_neutral_remark' => $this->input->post('engine_control_valve_neutral_remark'),
                        'blow_horsepower_remark' => $this->input->post('blow_horsepower_remark'),
                        'oil_run_low_idle_remark' => $this->input->post('oil_run_low_idle_remark'),
                        'oil_run_high_idle_remark' => $this->input->post('oil_run_high_idle_remark'),
                        'boost_horsepower_remark' => $this->input->post('boost_horsepower_remark'),
                        'exhaust_speed_range_remark' => $this->input->post('exhaust_speed_range_remark'),
                        'exhaust_ambient_temp_remark' => $this->input->post('exhaust_ambient_temp_remark'),
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
                        if ($this->Pc2000_model->insertPs2($data, $actual_data)) {
                            $this->flask('success', 'Actual Plan added Succesfuly', 'message');
                        } else {
                            $this->flask('danger', 'Failed to add Actual Plan', 'message');
                        }
                    } elseif ($ps == 'PS3' || $ps == 'PS4') {
                        $other = [
                            'id_other' => $id_other,
                            'instrument_panel' => $this->input->post('instrument_panel'),
                            'starting_system' => $this->input->post('starting_system'),
                            'charging_system' => $this->input->post('charging_system'),
                            'lighting' => $this->input->post('lighting'),
                            'battery' => $this->input->post('battery'),
                            'wiring_harness' => $this->input->post('wiring_harness'),
                            'vhms_komtrak' => $this->input->post('vhms_komtrak'),
                            'emergency_shutdown' => $this->input->post('emergency_shutdown'),
                            'logout_switch' => $this->input->post('logout_switch'),
                            'pdu' => $this->input->post('pdu'),
                            'autolube' => $this->input->post('autolube'),
                            'fire_suppression' => $this->input->post('fire_suppression'),
                            'fatique_warning' => $this->input->post('fatique_warning'),
                            'backup_alarm' => $this->input->post('backup_alarm'),
                            'attachment_frame' => $this->input->post('attachment_frame'),
                            'machine' => $this->input->post('machine'),
                            'undercarriage' => $this->input->post('undercarriage'),
                            'instrument_panel_remark' => $this->input->post('instrument_panel'),
                            'starting_system_remark' => $this->input->post('starting_system'),
                            'charging_system_remark' => $this->input->post('charging_system'),
                            'lighting_remark' => $this->input->post('lighting'),
                            'battery_remark' => $this->input->post('battery'),
                            'wiring_harness_remark' => $this->input->post('wiring_harness'),
                            'vhms_komtrak_remark' => $this->input->post('vhms_komtrak'),
                            'emergency_shutdown_remark' => $this->input->post('emergency_shutdown'),
                            'logout_switch_remark' => $this->input->post('logout_switch'),
                            'pdu_remark' => $this->input->post('pdu'),
                            'autolube_remark' => $this->input->post('autolube'),
                            'fire_suppression_remark' => $this->input->post('fire_suppression'),
                            'fatique_warning_remark' => $this->input->post('fatique_warning'),
                            'backup_alarm_remark' => $this->input->post('backup_alarm'),
                            'attachment_frame_remark' => $this->input->post('attachment_frame'),
                            'machine_remark' => $this->input->post('machine'),
                            'undercarriage_remark' => $this->input->post('undercarriage'),
                        ];

                        $data += [
                            'visual_inspection' => $this->input->post('visual_inspection'),
                            'check_of_thermo' => $this->input->post('check_of_thermo'),
                            'boom_raise' => $this->input->post('boom_raise'),
                            'boom_lower' => $this->input->post('boom_lower'),
                            'arm_in' => $this->input->post('arm_in'),
                            'arm_out' => $this->input->post('arm_out'),
                            'bucket_curl' => $this->input->post('bucket_curl'),
                            'bucket_dump' => $this->input->post('bucket_dump'),
                            'swing_5_turns' => $this->input->post('swing_5_turns'),
                            'drive_right_track' => $this->input->post('drive_right_track'),
                            'drive_left_track' => $this->input->post('drive_left_track'),
                            'whole_work' => $this->input->post('whole_work'),
                            'boom_cylinder' => $this->input->post('boom_cylinder'),
                            'arm_cylinder' => $this->input->post('arm_cylinder'),
                            'bucket_cylinder' => $this->input->post('bucket_cylinder'),
                            'control_pressure' => $this->input->post('control_pressure'),
                            'jet_control_lever' => $this->input->post('jet_control_lever'),
                            'jet_right_travel_lever' => $this->input->post('jet_right_travel_lever'),
                            'jet_left_travel_lever' => $this->input->post('jet_left_travel_lever'),
                            'pump_control_lever' => $this->input->post('pump_control_lever'),
                            'pump_right_travel_lever' => $this->input->post('pump_right_travel_lever'),
                            'pump_left_travel_lever' => $this->input->post('pump_left_travel_lever'),
                            'p1f_boom_raise' => $this->input->post('p1f_boom_raise'),
                            'p1f_boom_raise_heavy' => $this->input->post('p1f_boom_raise_heavy'),
                            'p1f_arm_in' => $this->input->post('p1f_arm_in'),
                            'p1f_arm_out' => $this->input->post('p1f_arm_out'),
                            'p1f_bucket_curl' => $this->input->post('p1f_bucket_curl'),
                            'p1f_swing' => $this->input->post('p1f_swing'),
                            'p1r_boom_raise' => $this->input->post('p1r_boom_raise'),
                            'p1r_boom_raise_heavy' => $this->input->post('p1r_boom_raise_heavy'),
                            'p1r_arm_in' => $this->input->post('p1r_arm_in'),
                            'p1r_arm_out' => $this->input->post('p1r_arm_out'),
                            'p1r_bucket_curl' => $this->input->post('p1r_bucket_curl'),
                            'p2f_boom_raise' => $this->input->post('p2f_boom_raise'),
                            'p2f_boom_raise_heavy' => $this->input->post('p2f_boom_raise_heavy'),
                            'p2f_arm_in' => $this->input->post('p2f_arm_in'),
                            'p2f_arm_out' => $this->input->post('p2f_arm_out'),
                            'p2f_bucket_curl' => $this->input->post('p2f_bucket_curl'),
                            'p2r_boom_raise_heavy' => $this->input->post('p2r_boom_raise_heavy'),
                            'p2r_arm_in' => $this->input->post('p2r_arm_in'),
                            'p2r_arm_out' => $this->input->post('p2r_arm_out'),
                            'p2r_bucket_curl' => $this->input->post('p2r_bucket_curl'),
                            'fan_pump_radiator' => $this->input->post('fan_pump_radiator'),
                            'fan_pump_oil' => $this->input->post('fan_pump_oil'),
                            'fan_speed_radiator' => $this->input->post('fan_speed_radiator'),
                            'fan_speed_oil' => $this->input->post('fan_speed_oil'),
                            'hydraulic_oil_temp' => $this->input->post('hydraulic_oil_temp'),
                            'visual_check_hydraulic' => $this->input->post('visual_check_hydraulic'),
                            'drive_drain_plug' => $this->input->post('drive_drain_plug'),
                            'drive_oil_leak' => $this->input->post('drive_oil_leak'),
                            'drive_abnormal_noise' => $this->input->post('drive_abnormal_noise'),
                            'swing_drain_plug' => $this->input->post('swing_drain_plug'),
                            'swing_oil_leak' => $this->input->post('swing_oil_leak'),
                            'axial_play' => $this->input->post('axial_play'),
                            // Remark
                            'visual_inspection_remark' => $this->input->post('visual_inspection_remark'),
                            'check_of_thermo_remark' => $this->input->post('check_of_thermo_remark'),
                            'boom_raise_remark' => $this->input->post('boom_raise_remark'),
                            'boom_lower_remark' => $this->input->post('boom_lower_remark'),
                            'arm_in_remark' => $this->input->post('arm_in_remark'),
                            'arm_out_remark' => $this->input->post('arm_out_remark'),
                            'bucket_curl_remark' => $this->input->post('bucket_curl_remark'),
                            'bucket_dump_remark' => $this->input->post('bucket_dump_remark'),
                            'swing_5_turns_remark' => $this->input->post('swing_5_turns_remark'),
                            'drive_right_track_remark' => $this->input->post('drive_right_track_remark'),
                            'drive_left_track_remark' => $this->input->post('drive_left_track_remark'),
                            'whole_work_remark' => $this->input->post('whole_work_remark'),
                            'boom_cylinder_remark' => $this->input->post('boom_cylinder_remark'),
                            'arm_cylinder_remark' => $this->input->post('arm_cylinder_remark'),
                            'bucket_cylinder_remark' => $this->input->post('bucket_cylinder_remark'),
                            'control_pressure_remark' => $this->input->post('control_pressure_remark'),
                            'jet_control_lever_remark' => $this->input->post('jet_control_lever_remark'),
                            'jet_right_travel_lever_remark' => $this->input->post('jet_right_travel_lever_remark'),
                            'jet_left_travel_lever_remark' => $this->input->post('jet_left_travel_lever_remark'),
                            'pump_control_lever_remark' => $this->input->post('pump_control_lever_remark'),
                            'pump_right_travel_lever_remark' => $this->input->post('pump_right_travel_lever_remark'),
                            'pump_left_travel_lever_remark' => $this->input->post('pump_left_travel_lever_remark'),
                            'p1f_boom_raise_remark' => $this->input->post('p1f_boom_raise_remark'),
                            'p1f_boom_raise_heavy_remark' => $this->input->post('p1f_boom_raise_heavy_remark'),
                            'p1f_arm_in_remark' => $this->input->post('p1f_arm_in_remark'),
                            'p1f_arm_out_remark' => $this->input->post('p1f_arm_out_remark'),
                            'p1f_bucket_curl_remark' => $this->input->post('p1f_bucket_curl_remark'),
                            'p1f_swing_remark' => $this->input->post('p1f_swing_remark'),
                            'p1r_boom_raise_remark' => $this->input->post('p1r_boom_raise_remark'),
                            'p1r_boom_raise_heavy_remark' => $this->input->post('p1r_boom_raise_heavy_remark'),
                            'p1r_arm_in_remark' => $this->input->post('p1r_arm_in_remark'),
                            'p1r_arm_out_remark' => $this->input->post('p1r_arm_out_remark'),
                            'p1r_bucket_curl_remark' => $this->input->post('p1r_bucket_curl_remark'),
                            'p2f_boom_raise_remark' => $this->input->post('p2f_boom_raise_remark'),
                            'p2f_boom_raise_heavy_remark' => $this->input->post('p2f_boom_raise_heavy_remark'),
                            'p2f_arm_in_remark' => $this->input->post('p2f_arm_in_remark'),
                            'p2f_arm_out_remark' => $this->input->post('p2f_arm_out_remark'),
                            'p2f_bucket_curl_remark' => $this->input->post('p2f_bucket_curl_remark'),
                            'p2r_boom_raise_heavy_remark' => $this->input->post('p2r_boom_raise_heavy_remark'),
                            'p2r_arm_in_remark' => $this->input->post('p2r_arm_in_remark'),
                            'p2r_arm_out_remark' => $this->input->post('p2r_arm_out_remark'),
                            'p2r_bucket_curl_remark' => $this->input->post('p2r_bucket_curl_remark'),
                            'fan_pump_radiator_remark' => $this->input->post('fan_pump_radiator_remark'),
                            'fan_pump_oil_remark' => $this->input->post('fan_pump_oil_remark'),
                            'fan_speed_radiator_remark' => $this->input->post('fan_speed_radiator_remark'),
                            'fan_speed_oil_remark' => $this->input->post('fan_speed_oil_remark'),
                            'hydraulic_oil_temp_remark' => $this->input->post('hydraulic_oil_temp_remark'),
                            'visual_check_hydraulic_remark' => $this->input->post('visual_check_hydraulic_remark'),
                            'drive_drain_plug_remark' => $this->input->post('drive_drain_plug_remark'),
                            'drive_oil_leak_remark' => $this->input->post('drive_oil_leak_remark'),
                            'drive_abnormal_noise_remark' => $this->input->post('drive_abnormal_noise_remark'),
                            'swing_drain_plug_remark' => $this->input->post('swing_drain_plug_remark'),
                            'swing_oil_leak_remark' => $this->input->post('swing_oil_leak_remark'),
                            'axial_play_remark' => $this->input->post('axial_play_remark'),
                            'id_other' => $id_other
                        ];

                        if ($this->Pc2000_model->insertPs34($data, $actual_data, $other)) {
                            $this->flask('success', 'Actual Plan added Succesfuly', 'message');
                        } else {
                            $this->flask('danger', 'Failed to add Actual Plan', 'message');
                        }
                    }

                    redirect('/admin/home/dashboard');
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
            case "GD825A-2":

                if ($this->input->post()) :

                else :
                    $this->load->view('templates/sidebar');
                    $this->load->view('templates/navbar', $dataa);
                    $this->load->view('templates/header');

                    if ($ps == 'PS2')
                        $this->load->view("admin/engine/gd825-2", $dataa);
                    elseif ($ps == 'PS3' || $ps == 'PS4')
                        $this->load->view("admin/complete/gd825-2", $dataa);


                    $this->load->view('templates/footer');
                endif;

                break;
            case "HD785-5":

                if ($this->input->post()) :

                else :
                    $this->load->view('templates/sidebar');
                    $this->load->view('templates/navbar', $dataa);
                    $this->load->view('templates/header');

                    if ($ps == 'PS2')
                        $this->load->view("admin/engine/hd785-5", $dataa);
                    elseif ($ps == 'PS3' || $ps == 'PS4')
                        $this->load->view("admin/complete/hd785-5", $dataa);

                    $this->load->view('templates/footer');
                endif;

                break;
            case "HD785-7":
                $id_update = uniqid("hd7-");
                if ($this->input->post()) {
                    $data = [
                        'id_update' => $id_update,
                        'engine_low_idle_low' => $this->input->post('engine_low_idle_low'),
                        'engine_low_idle_hi' => $this->input->post('engine_low_idle_hi'),
                        'engine_high_idle_power' => $this->input->post('engine_high_idle_power'),
                        'engine_high_idle_eco' => $this->input->post('engine_high_idle_eco'),
                        'engine_high_idle_rev' => $this->input->post('engine_high_idle_rev'),
                        'engine_high_idle_rev_power' => $this->input->post('engine_high_idle_rev_power'),
                        'engine_torque_a' => $this->input->post('engine_torque_a'),
                        'engine_torque_b' => $this->input->post('engine_torque_b'),
                        'engine_torque_c' => $this->input->post('engine_torque_c'),
                        'engine_torque_d' => $this->input->post('engine_torque_d'),
                        'blow_power' => $this->input->post('blow_power'),
                        'lub_oil_rated' => $this->input->post('lub_oil_rated'),
                        'lub_oil_low' => $this->input->post('lub_oil_low'),
                        'boost_press_rh' => $this->input->post('boost_press_rh'),
                        'boost_press_lh' => $this->input->post('boost_press_lh'),
                        'exhaust_ambient' => $this->input->post('exhaust_ambient'),
                        'exhaust_speed_rh' => $this->input->post('exhaust_speed_rh'),
                        'exhaust_speed_lh' => $this->input->post('exhaust_speed_lh'),
                        // remark
                        'engine_low_idle_low_remark' => $this->input->post('engine_low_idle_low_remark'),
                        'engine_low_idle_hi_remark' => $this->input->post('engine_low_idle_hi_remark'),
                        'engine_high_idle_power_remark' => $this->input->post('engine_high_idle_power_remark'),
                        'engine_high_idle_eco_remark' => $this->input->post('engine_high_idle_eco_remark'),
                        'engine_high_idle_rev_remark' => $this->input->post('engine_high_idle_rev_remark'),
                        'engine_high_idle_rev_power_remark' => $this->input->post('engine_high_idle_rev_power_remark'),
                        'engine_torque_a_remark' => $this->input->post('engine_torque_a_remark'),
                        'engine_torque_b_remark' => $this->input->post('engine_torque_b_remark'),
                        'engine_torque_c_remark' => $this->input->post('engine_torque_c_remark'),
                        'engine_torque_d_remark' => $this->input->post('engine_torque_d_remark'),
                        'blow_power_remark' => $this->input->post('blow_power_remark'),
                        'lub_oil_rated_remark' => $this->input->post('lub_oil_rated_remark'),
                        'lub_oil_low_remark' => $this->input->post('lub_oil_low_remark'),
                        'boost_press_rh_remark' => $this->input->post('boost_press_rh_remark'),
                        'boost_press_lh_remark' => $this->input->post('boost_press_lh_remark'),
                        'exhaust_ambient_remark' => $this->input->post('exhaust_ambient_remark'),
                        'exhaust_speed_rh_remark' => $this->input->post('exhaust_speed_rh_remark'),
                        'exhaust_speed_lh_remark' => $this->input->post('exhaust_speed_lh_remark'),
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
                        if ($this->Hd7857_model->insertPs2($data, $actual_data)) {
                            $this->flask('success', 'Actual Plan added Succesfuly', 'message');
                        } else {
                            $this->flask('danger', 'Failed to add Actual Plan', 'message');
                        }
                    } elseif ($ps == 'PS3' || $ps == 'PS4') {
                        $other = [
                            'id_other' => $id_other,
                            'instrument_panel' => $this->input->post('instrument_panel'),
                            'starting_system' => $this->input->post('starting_system'),
                            'charging_system' => $this->input->post('charging_system'),
                            'lighting' => $this->input->post('lighting'),
                            'battery' => $this->input->post('battery'),
                            'wiring_harness' => $this->input->post('wiring_harness'),
                            'vhms_komtrak' => $this->input->post('vhms_komtrak'),
                            'emergency_shutdown' => $this->input->post('emergency_shutdown'),
                            'logout_switch' => $this->input->post('logout_switch'),
                            'pdu' => $this->input->post('pdu'),
                            'autolube' => $this->input->post('autolube'),
                            'fire_suppression' => $this->input->post('fire_suppression'),
                            'fatique_warning' => $this->input->post('fatique_warning'),
                            'backup_alarm' => $this->input->post('backup_alarm'),
                            'attachment_frame' => $this->input->post('attachment_frame'),
                            'machine' => $this->input->post('machine'),
                            'undercarriage' => $this->input->post('undercarriage'),
                            'instrument_panel_remark' => $this->input->post('instrument_panel'),
                            'starting_system_remark' => $this->input->post('starting_system'),
                            'charging_system_remark' => $this->input->post('charging_system'),
                            'lighting_remark' => $this->input->post('lighting'),
                            'battery_remark' => $this->input->post('battery'),
                            'wiring_harness_remark' => $this->input->post('wiring_harness'),
                            'vhms_komtrak_remark' => $this->input->post('vhms_komtrak'),
                            'emergency_shutdown_remark' => $this->input->post('emergency_shutdown'),
                            'logout_switch_remark' => $this->input->post('logout_switch'),
                            'pdu_remark' => $this->input->post('pdu'),
                            'autolube_remark' => $this->input->post('autolube'),
                            'fire_suppression_remark' => $this->input->post('fire_suppression'),
                            'fatique_warning_remark' => $this->input->post('fatique_warning'),
                            'backup_alarm_remark' => $this->input->post('backup_alarm'),
                            'attachment_frame_remark' => $this->input->post('attachment_frame'),
                            'machine_remark' => $this->input->post('machine_remark'),
                            'undercarriage' => ''
                        ];

                        $data += [
                            'oil_inlet' => $this->input->post('oil_inlet'),
                            'oil_outlet_on' => $this->input->post('oil_outlet_on'),
                            'oil_outlet_off' => $this->input->post('oil_outlet_off'),
                            'oil_lockup' => $this->input->post('oil_lockup'),
                            'oil_main_f1' => $this->input->post('oil_main_f1'),
                            'oil_main_f4' => $this->input->post('oil_main_f4'),
                            'oil_transmission' => $this->input->post('oil_transmission'),
                            'turn_time_rl' => $this->input->post('turn_time_rl'),
                            'turn_time_lr' => $this->input->post('turn_time_lr'),
                            'steering_low' => $this->input->post('steering_low'),
                            'steering_rated' => $this->input->post('steering_rated'),
                            'brake_oil_service' => $this->input->post('brake_oil_service'),
                            'brake_oil_retarder' => $this->input->post('brake_oil_retarder'),
                            'charge_cutin' => $this->input->post('charge_cutin'),
                            'charge_cutout' => $this->input->post('charge_cutout'),
                            'service' => $this->input->post('service'),
                            'retarder' => $this->input->post('retarder'),
                            'parking' => $this->input->post('parking'),
                            'emergency' => $this->input->post('emergency'),
                            'oil_temp' => $this->input->post('oil_temp'),
                            'hoist_relief_rated' => $this->input->post('hoist_relief_rated'),
                            'hoist_relief_low' => $this->input->post('hoist_relief_low'),
                            'dump_epc_high' => $this->input->post('dump_epc_high'),
                            'dump_epc_low' => $this->input->post('dump_epc_low'),
                            'dump_raising_speed' => $this->input->post('dump_raising_speed'),
                            'dump_lowering_speed' => $this->input->post('dump_lowering_speed'),
                            'hyd_drift' => $this->input->post('hyd_drift'),
                            'left_front_susp' => $this->input->post('left_front_susp'),
                            'left_front_oil' => $this->input->post('left_front_oil'),
                            'right_front_susp' => $this->input->post('right_front_susp'),
                            'right_front_oil' => $this->input->post('right_front_oil'),
                            'left_rear_susp' => $this->input->post('left_rear_susp'),
                            'left_rear_oil' => $this->input->post('left_rear_oil'),
                            'right_rear_susp' => $this->input->post('right_rear_susp'),
                            'right_rear_oil' => $this->input->post('right_rear_oil'),
                            'diff_drain' => $this->input->post('diff_drain'),
                            'final_drive_lh' => $this->input->post('final_drive_lh'),
                            'final_drive_rh' => $this->input->post('final_drive_rh'),
                            // remark
                            'oil_inlet_remark' => $this->input->post('oil_inlet_remark'),
                            'oil_outlet_on_remark' => $this->input->post('oil_outlet_on_remark'),
                            'oil_outlet_off_remark' => $this->input->post('oil_outlet_off_remark'),
                            'oil_lockup_remark' => $this->input->post('oil_lockup_remark'),
                            'oil_main_f1_remark' => $this->input->post('oil_main_f1_remark'),
                            'oil_main_f4_remark' => $this->input->post('oil_main_f4_remark'),
                            'oil_transmission_remark' => $this->input->post('oil_transmission_remark'),
                            'turn_time_rl_remark' => $this->input->post('turn_time_rl_remark'),
                            'turn_time_lr_remark' => $this->input->post('turn_time_lr_remark'),
                            'steering_low_remark' => $this->input->post('steering_low_remark'),
                            'steering_rated_remark' => $this->input->post('steering_rated_remark'),
                            'brake_oil_service_remark' => $this->input->post('brake_oil_service_remark'),
                            'brake_oil_retarder_remark' => $this->input->post('brake_oil_retarder_remark'),
                            'charge_cutin_remark' => $this->input->post('charge_cutin_remark'),
                            'charge_cutout_remark' => $this->input->post('charge_cutout_remark'),
                            'service_remark' => $this->input->post('service_remark'),
                            'retarder_remark' => $this->input->post('retarder_remark'),
                            'parking_remark' => $this->input->post('parking_remark'),
                            'emergency_remark' => $this->input->post('emergency_remark'),
                            'oil_temp_remark' => $this->input->post('oil_temp_remark'),
                            'hoist_relief_rated_remark' => $this->input->post('hoist_relief_rated_remark'),
                            'hoist_relief_low_remark' => $this->input->post('hoist_relief_low_remark'),
                            'dump_epc_high_remark' => $this->input->post('dump_epc_high_remark'),
                            'dump_epc_low_remark' => $this->input->post('dump_epc_low_remark'),
                            'dump_raising_speed_remark' => $this->input->post('dump_raising_speed_remark'),
                            'dump_lowering_speed_remark' => $this->input->post('dump_lowering_speed_remark'),
                            'hyd_drift_remark' => $this->input->post('hyd_drift_remark'),
                            'left_front_susp_remark' => $this->input->post('left_front_susp_remark'),
                            'left_front_oil_remark' => $this->input->post('left_front_oil_remark'),
                            'right_front_susp_remark' => $this->input->post('right_front_susp_remark'),
                            'right_front_oil_remark' => $this->input->post('right_front_oil_remark'),
                            'left_rear_susp_remark' => $this->input->post('left_rear_susp_remark'),
                            'left_rear_oil_remark' => $this->input->post('left_rear_oil_remark'),
                            'right_rear_susp_remark' => $this->input->post('right_rear_susp_remark'),
                            'right_rear_oil_remark' => $this->input->post('right_rear_oil_remark'),
                            'diff_drain_remark' => $this->input->post('diff_drain_remark'),
                            'final_drive_lh_remark' => $this->input->post('final_drive_lh_remark'),
                            'final_drive_rh_remark' => $this->input->post('final_drive_rh_remark'),
                            'id_other' => $id_other
                        ];

                        if ($this->Hd7857_model->insertPs34($data, $actual_data, $other)) {
                            $this->flask('success', 'Actual Plan added Succesfuly', 'message');
                        } else {
                            $this->flask('danger', 'Failed to add Actual Plan', 'message');
                        }
                    }
                    redirect('/admin/home/dashboard');
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
