<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- <link href="<?= base_url('assets') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="<?= base_url('assets') ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="<?= base_url('assets') ?>/vendor/chart.js/Chart.min.js"></script> -->

    <style>
        .table td {
            text-align: center;
            vertical-align: middle;
        }

        .table.ttd .bottom td {
            height: 130px;
            vertical-align: bottom !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <img width="200" src="assets/img/logo.jpeg" alt="">
        </div>

        <form action=" <?= base_url("admin/home/update_plan") ?>" method="post">
            <table width="100%" cellpadding="2" border="1" cellspacing="0" class="table">
                <tr>
                    <td class="font-weight-bold h4 text-center align-middle">QA3</td>
                    <td class="font-weight-bold h4 text-center align-middle" colspan="4">Machine Condition Report</td>
                </tr>
                <tr>
                    <td class="font-weight-bold h4 text-center align-middle" rowspan="3">MCR</td>
                    <td class="font-weight-bold text-center align-middle" rowspan="3">INSPECTOR /LEADER</td>
                    <td>Name</td>
                    <td colspan="2"><?= $pc2000['leader_name'] ?></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td colspan="2"><?= $pc2000['actual_date'] ?> </td>
                </tr>
                <tr>
                    <td>Code Unit</td>
                    <td colspan="2"><?= $pc2000['model_name'] ?> </td>
                </tr>
                <tr>
                    <td class="font-weight-bold h4 text-center align-middle">PC2000-8</td>
                    <td class="font-weight-bold text-center align-middle">Branch / Site</td>
                    <td colspan="3"><?= $pc2000['actual_branch'] ?> </td>
                </tr>
            </table>
            <br>
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0" border="1">
                    <thead>
                        <tr class="text-center">
                            <th>ITEM</th>
                            <th style="width: 30%;" colspan="2">CONDITION</th>
                            <th>UNIT</th>
                            <th style="width: 10%;">STD</th>
                            <th style="width: 10%;">PMS</th>
                            <th>ACTUAL</th>
                            <th>REMARK</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-primary">
                            <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                                ENGINE
                            </td>
                        </tr>
                        <!-- Engine Speed -->
                        <!-- row 1 -->
                        <tr>
                            <td class="align-middle" rowspan="5">
                                Engine Speed (in DH Mode)
                            </td>
                            <td colspan="2" class="align-middle">
                                Engine: Low idle
                            </td>
                            <td class="align-middle text-center" rowspan="5">Rpm</td>
                            <td colspan="2" class="text-center">775 - 875</td>
                            <td class="align-middle text-center">
                                <?= $pc2000['engine_low_idle'] ?>
                            </td>
                            <td class="align-middle text-center">
                                <?= $pc2000['engine_low_idle_remark'] ?>
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td colspan="2">
                                Engine: High idle
                            </td>
                            <td class="text-center" colspan="2">1930 - 2030</td>
                            <td class="align-middle text-center">
                                <?= $pc2000['engine_high_idle'] ?>
                            </td>
                            <td class="align-middle text-center">
                                <?= $pc2000['engine_high_idle_remark'] ?>
                            </td>
                        </tr>
                        <!-- row 3 -->
                        <tr>
                            <td colspan="2">
                                Engine: Full throttle. Boom: raise relieve.
                            </td>
                            <td class="text-center" colspan="2">1680 - 1880</td>
                            <td class="align-middle text-center">
                                <?= $pc2000['engine_full_throttle_raise'] ?>

                            </td>
                            <td class="align-middle text-center">
                                <?= $pc2000['engine_full_throttle_raise_remark'] ?>

                            </td>
                        </tr>
                        <!-- row 4 -->
                        <tr>
                            <td colspan="2">
                                Engine: Full throttle. <br>Boom: raise relieve + Heavy lift : ON.
                            </td>
                            <td class="align-middle text-center" colspan="2">1680 - 1880</td>
                            <td class="align-middle text-center">
                                <?= $pc2000['engine_full_throttle_heavy'] ?>
                            </td>
                            <td class="align-middle text-center">
                                <?= $pc2000['engine_full_throttle_heavy_remark'] ?>
                            </td>
                        </tr>

                        <!-- row 6 -->
                        <tr>
                            <td colspan="2" class="align-middle text-center">
                                Auto decelaration switch: ON. Fuel control dial: Max. <br>Control Valve: neutral
                            </td>
                            <td class="align-middle text-center" colspan="2">1300 - 1500</td>
                            <td class="align-middle text-center">
                                <?= $pc2000['engine_control_valve_neutral'] ?>
                            </td>
                            <td class="align-middle text-center">
                                <?= $pc2000['engine_control_valve_neutral_remark'] ?>
                            </td>
                        </tr>

                        <!-- Blow-by Press -->
                        <!-- row 1 -->
                        <tr>
                            <td>Blow-by Pressure</td>
                            <td colspan="2">At rated horsepower. </td>
                            <td class="align-middle text-center">kPa<br>{mmH2O}</td>
                            <td>Max. 2.94 <br> { Max. 300 }</td>
                            <td>Max. 5.88 <br> { Max. 600 }</td>
                            <td class="align-middle text-center">
                                <?= $pc2000['blow_horsepower'] ?>
                            </td>
                            <td class="align-middle text-center">
                                <?= $pc2000['blow_horsepower_remark'] ?>
                            </td>
                        </tr>
                        <!-- Engine oil -->
                        <!-- row 1 -->
                        <tr>
                            <td class="align-middle" rowspan="2">Engine oil Pressure.</td>
                            <td colspan="2" class="align-middle">Run engine at low idle (SAE30) </td>
                            <td class="align-middle text-center" rowspan="2">Mpa <br> { kg/cm2 }</td>
                            <td class="align-middle text-center">Min 0.08 <br> { Min 0.8 }</td>
                            <td class="align-middle text-center">Min 0.06 <br> { Min 0.06 }</td>
                            <td class="align-middle text-center">
                                <?= $pc2000['oil_run_low_idle'] ?>
                            </td>
                            <td class="align-middle text-center">
                                <?= $pc2000['oil_run_low_idle_remark'] ?>
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td colspan="2" class="align-middle">Run engine at high idle (SAE30)</td>
                            <td class="align-middle text-center">0.29 - 0.44 <br> { 3.0 - 4.5 }</td>
                            <td class="align-middle text-center">Min 0.2 <br> { Min 2.0 }</td>
                            <td class="align-middle text-center">
                                <?= $pc2000['oil_run_high_idle'] ?>
                            </td>
                            <td class="align-middle text-center">
                                <?= $pc2000['oil_run_high_idle_remark'] ?>
                            </td>
                        </tr>
                        <!-- Boost Press -->
                        <!-- row 1 -->
                        <tr>
                            <td>Boost Pressure</td>
                            <td colspan="2">At rated horsepower. </td>
                            <td class="align-middle text-center">kPa<br>{mmHg}</td>
                            <td class="align-middle text-center">Max. 125.7 <br> { Max. 950 }</td>
                            <td class="align-middle text-center">Limit is not set</td>
                            <td class="align-middle text-center">
                                <?= $pc2000['boost_horsepower'] ?>
                            </td>
                            <td class="align-middle text-center">
                                <?= $pc2000['boost_horsepower_remark'] ?>
                            </td>
                        </tr>
                        <!-- Exhaust Temperature -->
                        <!-- row 1 -->
                        <tr>
                            <td class="align-middle" rowspan="2">At all speed range.</td>
                            <td class="align-middle" colspan="2">Ambient Temp.</td>
                            <td class="align-middle text-center" rowspan="2">°C</td>
                            <td class="text-center">Max 700</td>
                            <td class="text-center">Max 750</td>
                            <td class="align-middle text-center">
                                <?= $pc2000['exhaust_speed_range'] ?>
                            </td>
                            <td class="align-middle text-center">
                                <?= $pc2000['exhaust_speed_range_remark'] ?>
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td class="align-middle" colspan="2">Ambient temperature</td>
                            <td class="align-middle text-center">20</td>
                            <td class="align-middle text-center">20</td>
                            <td class="align-middle text-center">
                                <?= $pc2000['exhaust_ambient_temp'] ?>
                            </td>
                            <td class="align-middle text-center">
                                <?= $pc2000['exhaust_ambient_temp_remark'] ?>
                            </td>
                        </tr>
                        <!-- PTO -->
                        <tr class="bg-primary">
                            <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                                PTO
                            </td>
                        </tr>
                        <!-- Visual inspection of strainer -->
                        <tr>
                            <td class="align-middle" colspan="3">Visual inspection of strainer</td>
                            <td class="text-center">-</td>
                            <td class="text-center" colspan="2">Must not clogged with metal dust </td>
                            <td class="align-middle text-center">
                                <?= $pc2000['visual_inspection'] ?>
                            </td>
                            <td class="align-middle text-center">
                                <?= $pc2000['visual_inspection_remark'] ?>
                            </td>
                        </tr>

                        <!-- Check of thermo-label of center bearing -->
                        <tr>
                            <td class="align-middle" colspan="3">Check of thermo-label of center bearing</td>
                            <td class="text-center">°C</td>
                            <td class="text-center" colspan="2">120 °C range must not be black</td>
                            <td class="align-middle text-center">
                                <?= $pc2000['check_of_thermo'] ?>
                            </td>
                            <td class="align-middle text-center">
                                <?= $pc2000['check_of_thermo_remark'] ?>
                            </td>
                        </tr>
                </table>
                <table class="table" id="dataTable" width="100%" cellspacing="0" border="1">
                    <!-- WORK EQUIPMENT SPEED -->
                    <tr class="bg-primary">
                        <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                            WORK EQUIPMENT SPEED
                        </td>
                    </tr>

                    <!-- Boom RAISE -->
                    <tr>
                        <td class="align-middle">Boom RAISE</td>
                        <td class="align-middle" colspan="2" rowspan="9">
                            Run engine at full throttle<br>
                            DH Mode<br>
                            <br>
                            Swing: Measure time for 5 turns after 1 turn <br>
                            Travel: Raise each track and measure 5 turns with no load after 1 turn.
                        </td>
                        <td class="text-center align-middle" rowspan="9">Sec</td>
                        <td class="text-center align-middle">6.7 - 8.3</td>
                        <td class="text-center align-middle">Max. 90</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['boom_raise'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['boom_raise_remark'] ?>
                        </td>
                    </tr>

                    <!-- Boom LOWER -->
                    <tr>
                        <td class="align-middle">Boom LOWER</td>
                        <td class="text-center align-middle">4.8 - 5.8</td>
                        <td class="text-center align-middle">Max. 6.4</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['boom_lower'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['boom_lower_remark'] ?>
                        </td>
                    </tr>

                    <!-- Arm IN -->
                    <tr>
                        <td class="align-middle">Arm IN</td>
                        <td class="text-center align-middle">6.7 - 8.3</td>
                        <td class="text-center align-middle">Max. 90</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['arm_in'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['arm_in_remark'] ?>
                        </td>
                    </tr>

                    <!-- Arm OUT -->
                    <tr>
                        <td class="align-middle">Arm OUT</td>
                        <td class="text-center align-middle">4.7 - 5.7</td>
                        <td class="text-center align-middle">Max. 6.2</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['arm_out'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['arm_out_remark'] ?>
                        </td>
                    </tr>

                    <!-- Bucked CURL -->
                    <tr>
                        <td class="align-middle">Bucked CURL</td>
                        <td class="text-center align-middle">4.5 - 5.5</td>
                        <td class="text-center align-middle">Max. 6.0</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['bucket_curl'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['bucket_curl_remark'] ?>
                        </td>
                    </tr>

                    <!-- Bucked DUMP -->
                    <tr>
                        <td class="align-middle">Bucked DUMP</td>
                        <td class="text-center align-middle">3.5 - 4.3</td>
                        <td class="text-center align-middle">Max. 4.7</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['bucket_dump'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['bucket_dump_remark'] ?>
                        </td>
                    </tr>

                    <!-- Swing 5 turns -->
                    <tr>
                        <td class="align-middle">Swing 5 turns</td>
                        <td class="text-center align-middle">57.5 - 67.5</td>
                        <td class="text-center align-middle">Max. 70.0</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['swing_5_turns'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['swing_5_turns_remark'] ?>
                        </td>
                    </tr>

                    <!-- Drive right track 5 turns -->
                    <tr>
                        <td class="align-middle">Drive right track 5 turns</td>
                        <td class="text-center align-middle">90.5 - 110.5</td>
                        <td class="text-center align-middle">Max. 70.0</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['drive_right_track'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['drive_right_track_remark'] ?>
                        </td>
                    </tr>

                    <!-- Drive left track 5 turns -->
                    <tr>
                        <td class="align-middle">Drive left track 5 turns</td>
                        <td class="text-center align-middle">90.5 - 110.5</td>
                        <td class="text-center align-middle">Max. 70.0</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['drive_left_track'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['drive_left_track_remark'] ?>
                        </td>
                    </tr>

                    <!-- HYDRAULIC DRIFT -->
                    <tr class="bg-primary">
                        <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                            HYDRAULIC DRIFT
                        </td>
                    </tr>

                    <!-- Whole work equipment -->
                    <tr>
                        <td class="align-middle">Whole work equipment</td>
                        <td class="align-middle" rowspan="4">
                            Boom and arm in level, bucket curled, work equipment no load.
                        </td>
                        <td class="text-center align-middle">Hyd drift of bucket tooth tip.</td>
                        <td class="text-center align-middle" rowspan="4">mm/15 min.</td>
                        <td class="text-center align-middle">Max. 650</td>
                        <td class="text-center align-middle">Max. 1000</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['whole_work'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['whole_work_remark'] ?>
                        </td>
                    </tr>
                    <!-- Boom cylinder -->
                    <tr>
                        <td class="align-middle">Boom cylinder</td>
                        <td class="text-center align-middle">Cyl. Retraction.</td>
                        <td class="text-center align-middle">Max. 35</td>
                        <td class="text-center align-middle">Max. 50</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['boom_cylinder'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['boom_cylinder_remark'] ?>
                        </td>
                    </tr>
                    <!-- Arm cylinder -->
                    <tr>
                        <td class="align-middle">Arm cylinder</td>
                        <td class="text-center align-middle">Cyl. Retraction.</td>
                        <td class="text-center align-middle">Max. 70</td>
                        <td class="text-center align-middle">Max. 105</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['arm_cylinder'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['arm_cylinder_remark'] ?>
                        </td>
                    </tr>
                    <!-- Bucket cylinder -->
                    <tr>
                        <td class="align-middle">Bucket cylinder</td>
                        <td class="text-center align-middle">Cyl. Retraction.</td>
                        <td class="text-center align-middle">Max. 15</td>
                        <td class="text-center align-middle">Max. 30</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['bucket_cylinder'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['bucket_cylinder_remark'] ?>
                        </td>
                    </tr>

                    <!-- HYDRAULIC SYSTEM -->
                    <tr class="bg-primary">
                        <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                            HYDRAULIC SYSTEM
                        </td>
                    </tr>

                    <!-- Control pressure -->
                    <tr>
                        <td class="align-middle">Control pressure</td>
                        <td class="align-middle" rowspan="13">
                            Mode : P <br>
                            Engine : Full throttle <br>
                            Fan : 100 % speed mode Auto decelator : OFF
                        </td>
                        <td class="text-center align-middle">Control lever: neutral</td>
                        <td class="text-center align-middle" rowspan="4">Kg/cm2</td>
                        <td class="text-center align-middle">33 - 38</td>
                        <td class="text-center align-middle">31 - 38</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['control_pressure'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['control_pressure_remark'] ?>
                        </td>
                    </tr>

                    <!-- Jet sensor differential -->
                    <!-- row 1 -->
                    <tr>
                        <td class="align-middle" rowspan="3">Jet sensor differential</td>
                        <td class="text-center align-middle">Control lever: neutral</td>
                        <td class="text-center align-middle">Min 13.1</td>
                        <td class="text-center align-middle">Min 13.1</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['jet_control_lever'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['jet_control_lever_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 2 -->
                    <tr>
                        <td class="text-center align-middle">Right travel lever: stroke end. Track: turning with no load.</td>
                        <td class="text-center align-middle">Min 1.7</td>
                        <td class="text-center align-middle">Min 1.7</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['jet_right_travel_lever'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['jet_right_travel_lever_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 3 -->
                    <tr>
                        <td class="text-center align-middle">Left travel lever: stroke end. Track: turning with no load.</td>
                        <td class="text-center align-middle">Min 1.7</td>
                        <td class="text-center align-middle">Min 1.7</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['jet_left_travel_lever'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['jet_left_travel_lever_remark'] ?>
                        </td>
                    </tr>

                    <!-- Pump EPC Current -->
                    <!-- row 1 -->
                    <tr>
                        <td class="align-middle" rowspan="3">Pump EPC Current</td>
                        <td class="text-center align-middle">Control lever: neutral</td>
                        <td class="text-center align-middle" rowspan="3">mA</td>
                        <td class="text-center align-middle">160 - 280</td>
                        <td class="text-center align-middle">160 - 280</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['pump_control_lever'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['pump_control_lever_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 2 -->
                    <tr>
                        <td class="text-center align-middle">Right travel lever: stroke end. Track: turning with no load.</td>
                        <td class="text-center align-middle">P1: 390 - 510<br>P2: 615 - 735</td>
                        <td class="text-center align-middle">P1: 390 - 510<br>P2: 615 - 735</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['pump_right_travel_lever'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['pump_right_travel_lever_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 3 -->
                    <tr>
                        <td class="text-center align-middle">Left travel lever: stroke end. Track: turning with no load.</td>
                        <td class="text-center align-middle">P1: 390 - 510<br>P2: 615 - 735</td>
                        <td class="text-center align-middle">P1: 390 - 510<br>P2: 615 - 735</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['pump_left_travel_lever'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['pump_left_travel_lever_remark'] ?>
                        </td>
                    </tr>

                    <!-- P1F pump pressure -->
                    <!-- row 1 -->
                    <tr>
                        <td class="align-middle" rowspan="6">P1F pump pressure</td>
                        <td class="text-center align-middle">Boom: raise relieve (normal)</td>
                        <td class="text-center align-middle" rowspan="6">Kg/cm2</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1f_boom_raise'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1f_boom_raise_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 2 -->
                    <tr>
                        <td class="text-center align-middle">Boom: raise relieve (heavy lift ON)</td>
                        <td class="text-center align-middle">317 - 337</td>
                        <td class="text-center align-middle">307 - 337</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1f_boom_raise_heavy'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1f_boom_raise_heavy_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 3 -->
                    <tr>
                        <td class="text-center align-middle">Arm: In relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1f_arm_in'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1f_arm_in_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 4 -->
                    <tr>
                        <td class="text-center align-middle">Arm: Out relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1f_arm_out'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1f_arm_out_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 5 -->
                    <tr>
                        <td class="text-center align-middle">Bucket: Curl relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1f_bucket_curl'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1f_bucket_curl_remark'] ?>
                        </td>
                    </tr>
                    <!-- row 6 -->
                    <tr>
                        <td class="text-center align-middle">Swing: Relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1f_swing'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1f_swing_remark'] ?>
                        </td>
                    </tr>

                    <!-- P1R pump pressure -->
                    <!-- row 1 -->
                    <tr>
                        <td class="align-middle" rowspan="5">P1R pump pressure</td>
                        <td class="align-middle" rowspan="18">
                            Mode : P <br>
                            Engine : Full throttle <br>
                            Fan : 100 % speed mode Auto decelator : OFF
                        </td>
                        <td class="text-center align-middle">Boom: raise relieve (normal)</td>
                        <td class="text-center align-middle" rowspan="14">Kg/cm2</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1r_boom_raise'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1r_boom_raise_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 2 -->
                    <tr>
                        <td class="text-center align-middle">Boom: raise relieve (heavy lift ON)</td>
                        <td class="text-center align-middle">317 - 337</td>
                        <td class="text-center align-middle">307 - 337</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1r_boom_raise_heavy'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1r_boom_raise_heavy_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 3 -->
                    <tr>
                        <td class="text-center align-middle">Arm: In relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1r_arm_in'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1r_arm_in_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 4 -->
                    <tr>
                        <td class="text-center align-middle">Arm: Out relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1r_arm_out'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1r_arm_out_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 5 -->
                    <tr>
                        <td class="text-center align-middle">Bucket: Curl relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1r_bucket_curl'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p1r_bucket_curl'] ?>
                        </td>
                    </tr>

                    <!-- P2F pump pressure -->
                    <!-- row 1 -->
                    <tr>
                        <td class="align-middle" rowspan="5">P2F pump pressure</td>
                        <td class="text-center align-middle">Boom: raise relieve (normal)</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p2f_boom_raise'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p2f_boom_raise_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 2 -->
                    <tr>
                        <td class="text-center align-middle">Boom: raise relieve (heavy lift ON)</td>
                        <td class="text-center align-middle">317 - 337</td>
                        <td class="text-center align-middle">307 - 337</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p2f_boom_raise_heavy'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p2f_boom_raise_heavy_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 3 -->
                    <tr>
                        <td class="text-center align-middle">Arm: In relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p2f_arm_in'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p2f_arm_in_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 4 -->
                    <tr>
                        <td class="text-center align-middle">Arm: Out relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p2f_arm_out'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p2f_arm_out_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 5 -->
                    <tr>
                        <td class="text-center align-middle">Bucket: Curl relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p2f_bucket_curl'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p2f_bucket_curl_remark'] ?>
                        </td>
                    </tr>

                    <!-- P2R pump pressure -->
                    <!-- row 1 -->
                    <tr>
                        <td class="align-middle" rowspan="4">P2R pump pressure</td>
                        <td class="text-center align-middle">Boom: raise relieve (heavy lift ON)</td>
                        <td class="text-center align-middle">317 - 337</td>
                        <td class="text-center align-middle">307 - 337</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p2r_boom_raise_heavy'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p2r_boom_raise_heavy_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 2 -->
                    <tr>
                        <td class="text-center align-middle">Arm: In relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p2r_arm_in'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p2r_arm_in_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 3 -->
                    <tr>
                        <td class="text-center align-middle">Arm: Out relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p2r_arm_out'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p2r_arm_out_remark'] ?>
                        </td>
                    </tr>

                    <!-- row 4 -->
                    <tr>
                        <td class="text-center align-middle">Bucket: Curl relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p2r_bucket_curl'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['p2r_bucket_curl_remark'] ?>
                        </td>
                    </tr>

                    <!-- Fan pump EPC (radiator) current -->
                    <tr>
                        <td class="align-middle">Fan pump EPC (radiator) current</td>
                        <td class="text-center align-middle">Control lever: neutral</td>
                        <td class="text-center align-middle" rowspan="2">mA</td>
                        <td class="text-center align-middle">STD: 575-675<br>55⁰ C: 505-605</td>
                        <td class="text-center align-middle">STD: 575-675<br>55⁰ C: 505-605</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['fan_pump_radiator'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['fan_pump_radiator_remark'] ?>
                        </td>
                    </tr>

                    <!-- Fan pump EPC (Oil cooler) current -->
                    <tr>
                        <td class="align-middle">Fan pump EPC (Oil cooler) current</td>
                        <td class="text-center align-middle">Control lever: neutral</td>
                        <td class="text-center align-middle">STD: 600-700<br>55⁰ C: 505-605</td>
                        <td class="text-center align-middle">STD: 600-700<br>55⁰ C: 505-605</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['fan_pump_oil'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['fan_pump_oil_remark'] ?>
                        </td>
                    </tr>

                    <!-- Fan speed (radiator) -->
                    <tr>
                        <td class="align-middle">Fan speed (radiator)</td>
                        <td class="text-center align-middle">Control lever: neutral</td>
                        <td class="text-center align-middle" rowspan="2">Rpm</td>
                        <td class="text-center align-middle">STD: 790-890<br>55⁰ C: 1050-1150</td>
                        <td class="text-center align-middle">STD: 790-890<br>55⁰ C: 1050-1150</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['fan_speed_radiator'] ?>
                        </td>
                        <td>
                            <?= $pc2000['fan_speed_radiator_remark'] ?>
                        </td>
                    </tr>

                    <!-- Fan speed (oil cooler) -->
                    <tr>
                        <td class="align-middle">Fan speed (oil cooler)</td>
                        <td class="text-center align-middle">Control lever: neutral</td>
                        <td class="text-center align-middle">STD: 710-810<br>55⁰ C: 1050-1150</td>
                        <td class="text-center align-middle">STD: 710-810<br>55⁰ C: 1050-1150</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['fan_speed_oil'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['fan_speed_oil_remark'] ?>
                        </td>
                    </tr>

                    <!-- Hydraulic oil temperature -->
                    <tr>
                        <td class="align-middle">Hydraulic oil temperature</td>
                        <td class="text-center align-middle">
                            Mode: P, Engine: Full throttle, Fan: 100 % speed mode
                        </td>
                        <td class="text-center align-middle">Bucket: dump relieve</td>
                        <td class="text-center align-middle">⁰C</td>
                        <td class="text-center align-middle">Max 100 ⁰ C</td>
                        <td class="text-center align-middle">Max 100 ⁰ C</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['hydraulic_oil_temp'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['hydraulic_oil_temp_remark'] ?>
                        </td>
                    </tr>

                    <!-- Visual check of hydraulic tank strainer. -->
                    <tr>
                        <td class="align-middle" colspan="4">Visual check of hydraulic tank strainer.</td>
                        <td class="align-middle" colspan="2">There must not be excessive metal powder or foreignj matter.</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['visual_check_hydraulic'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['visual_check_hydraulic_remark'] ?>
                        </td>
                    </tr>

                    <!-- FINAL DRIVE -->
                    <tr class="bg-primary">
                        <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                            FINAL DRIVE
                        </td>
                    </tr>

                    <!-- Drain Plug -->
                    <tr>
                        <td class="align-middle">Drain Plug</td>
                        <td class="align-middle text-center" rowspan="2" colspan="3">
                            Visual check, ngine stopped
                        </td>
                        <td class="text-center align-middle" colspan="2">No excessive Metalic Powder</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['drive_drain_plug'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['drive_drain_plug_remark'] ?>
                        </td>
                    </tr>

                    <!-- Oil Leak -->
                    <tr>
                        <td class="align-middle">Oil Leak</td>
                        <td class="text-center align-middle" colspan="2">No leaked </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['drive_oil_leak'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['drive_oil_leak_remark'] ?>
                        </td>
                    </tr>

                    <!-- Abnormal Noise -->
                    <tr>
                        <td class="align-middle">Abnormal Noise</td>
                        <td class="text-center align-middle" colspan="3">travel raise and oparated track </td>
                        <td class="text-center align-middle" colspan="2">no abnormal noise</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['drive_abnormal_noise'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['drive_abnormal_noise_remark'] ?>
                        </td>
                    </tr>


                    <!-- SWING MACHINERY -->
                    <tr class="bg-primary">
                        <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                            SWING MACHINERY
                        </td>
                    </tr>

                    <!-- Drain Plug -->
                    <tr>
                        <td class="align-middle">Drain Plug</td>
                        <td class="align-middle text-center" rowspan="2" colspan="3">
                            Visual check, ngine stopped
                        </td>
                        <td class="text-center align-middle" colspan="2">No excessive Metalic Powder</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['swing_drain_plug'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['swing_drain_plug_remark'] ?>
                        </td>
                    </tr>

                    <!-- Oil Leak -->
                    <tr>
                        <td class="align-middle">Oil Leak</td>
                        <td class="text-center align-middle" colspan="2">No leaked </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['swing_oil_leak'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['swing_oil_leak_remark'] ?>
                        </td>
                    </tr>

                    <!-- SWING CRICLE BEARING -->
                    <tr class="bg-primary">
                        <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                            SWING CRICLE BEARING
                        </td>
                    </tr>

                    <!-- Axial play -->
                    <tr>
                        <td class="align-middle">Axial play</td>
                        <td class="align-middle text-center" colspan="2">
                            Play outer circle and inner circle bearing
                        </td>
                        <td class="text-center align-middle">mm</td>
                        <td class="text-center align-middle">0.5 - 1.5</td>
                        <td class="text-center align-middle">2.0</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['axial_play'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['axial_play_remark'] ?>
                        </td>
                    </tr>

                    <!-- ELECTRICAL -->
                    <tr class="bg-primary">
                        <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                            ELECTRICAL
                        </td>
                    </tr>
                    <!-- Instrument panel -->
                    <tr>
                        <td>Instrument panel</td>
                        <td colspan="2">Completeness and function</td>
                        <td colspan="3">Complete and normal function</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['instrument_panel'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['instrument_panel_remark'] ?>
                        </td>
                    </tr>
                    <!-- Starting system -->
                    <tr>
                        <td>Starting system</td>
                        <td colspan="2">Condition and function</td>
                        <td colspan="3">Good installation and normal function</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['starting_system'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['starting_system_remark'] ?>
                        </td>
                    </tr>
                    <!-- Chargin System -->
                    <tr>
                        <td>Chargin System</td>
                        <td colspan="2">Condition and function</td>
                        <td colspan="3">Good installation and normal function</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['charging_system'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['charging_system_remark'] ?>
                        </td>
                    </tr>
                    <!-- Lighting -->
                    <tr>
                        <td>Lighting</td>
                        <td colspan="2">Condition and function</td>
                        <td colspan="3">Complete and normal function</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['lighting'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['lighting_remark'] ?>
                        </td>
                    </tr>
                    <!-- Battery -->
                    <tr>
                        <td>Battery</td>
                        <td colspan="2">Condition, electrolite level, specific grafity and load test. </td>
                        <td colspan="3">Good condition</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['battery'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['battery_remark'] ?>
                        </td>
                    </tr>
                    <!-- Wiring harness -->
                    <tr>
                        <td>Wiring harness</td>
                        <td colspan="2">Condition, connection, clamping</td>
                        <td colspan="3">Good installation and condition</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['wiring_harness'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['wiring_harness_remark'] ?>
                        </td>
                    </tr>
                    <!-- VHMS/Komtrak -->
                    <tr>
                        <td>VHMS/Komtrak</td>
                        <td colspan="2">Condition and function</td>
                        <td colspan="3">Good condition and function</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['vhms_komtrak'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['vhms_komtrak_remark'] ?>
                        </td>
                    </tr>
                    <!-- OPTIONAL EQUIPMENT -->
                    <tr class="bg-primary">
                        <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                            OPTIONAL EQUIPMENT
                        </td>
                    </tr>
                    <!-- Emergency shutdown -->
                    <tr>
                        <td>Emergency shutdown</td>
                        <td colspan="2">Completeness, condition and function</td>
                        <td colspan="3">Complete and normal function</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['emergency_shutdown'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['emergency_shutdown_remark'] ?>
                        </td>
                    </tr>
                    <!-- Logout Switch -->
                    <tr>
                        <td>Logout Switch</td>
                        <td colspan="2">Completeness, condition and function</td>
                        <td colspan="3">Complete and normal function</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['logout_switch'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['logout_switch_remark'] ?>
                        </td>
                    </tr>
                    <!-- PDU -->
                    <tr>
                        <td>PDU</td>
                        <td colspan="2">Completeness, condition and function</td>
                        <td colspan="3">Complete and normal function</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['pdu'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['pdu_remark'] ?>
                        </td>
                    </tr>
                    <!-- Autolube -->
                    <tr>
                        <td>Autolube</td>
                        <td colspan="2">Completeness, condition and function</td>
                        <td colspan="3">Complete and normal function</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['autolube'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['autolube_remark'] ?>
                        </td>
                    </tr>
                    <!-- Fire suppression -->
                    <tr>
                        <td>Fire suppression</td>
                        <td colspan="2">Completeness, condition and function</td>
                        <td colspan="3">Complete and normal function</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['fire_suppression'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['fire_suppression_remark'] ?>
                        </td>
                    </tr>
                    <!-- Fatique warning -->
                    <tr>
                        <td>Fatique warning</td>
                        <td colspan="2">Completeness, condition and function</td>
                        <td colspan="3">Complete and normal function</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['fatique_warning'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['fatique_warning_remark'] ?>
                        </td>
                    </tr>
                    <!-- Backup alarm -->
                    <tr>
                        <td>Backup alarm</td>
                        <td colspan="2">Completeness, condition and function</td>
                        <td colspan="3">Complete and normal function</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['backup_alarm'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['backup_alarm_remark'] ?>
                        </td>
                    </tr>
                    <!-- GENERAL MACHINE CONDITION -->
                    <tr class="bg-primary">
                        <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                            GENERAL MACHINE CONDITION
                        </td>
                    </tr>
                    <!-- Attachment & Frame -->
                    <tr>
                        <td>Attachment & Frame</td>
                        <td colspan="2">Completeness, worn and crack detection</td>
                        <td colspan="3">No crack</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['attachment_frame'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['attachment_frame_remark'] ?>
                        </td>
                    </tr>
                    <!-- Machine -->
                    <tr>
                        <td>Machine</td>
                        <td colspan="2">Cleaness, wear, completeness and condition</td>
                        <td colspan="3">Complete and normal condition</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['machine'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['machine_remark'] ?>
                        </td>
                    </tr>
                    <!-- Undercarriage -->
                    <tr>
                        <td>Undercarriage</td>
                        <td colspan="2">Cleaness, wear, completeness and condition</td>
                        <td colspan="3">Complete and normal condition</td>
                        <td class="align-middle text-center">
                            <?= $pc2000['undercarriage'] ?>
                        </td>
                        <td class="align-middle text-center">
                            <?= $pc2000['undercarriage_remark'] ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <table width="100%" class="table ttd">
                    <tr class="font-weight-bold">
                        <td>Approved by :</td>
                        <td>Acknowledge by:</td>
                        <td>Prepared by:</td>
                    </tr>
                    <tr class="bottom">
                        <td>( UT SDH )</td>
                        <td>( UT Supervisor )</td>
                        <td>( UT Mechanic )</td>
                    </tr>
                </table>
                <a href="javascript:genPDF()">PDF</a> </td>
            </div>
        </form>
    </div>
</body>

</html>