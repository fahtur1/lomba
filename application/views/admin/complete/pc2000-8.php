<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">UPDATE <?= $unit ?> / <?= $ps ?></h1>
    </div>
    <form action="<?= base_url("admin/home/update_plan/") . $unit . "/" . $ps . "/" . $plan  ?>" method="post">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="inputState">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label>Plan Date</label>
                    <input type="date" id="date" name="date" max="2050-12-31" min="<?= date('Y-m-d') ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Code Unit</label>
                    <input type="text" class="form-control" id="codeunit" value="<?= $unit ?>" name="codeunit" disabled>
                </div>
                <div class="form-group">
                    <label>Branch Site</label>
                    <input type="text" class="form-control" id="site" name="site">
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                        <tfoot>
                            <tr class="text-center">
                                <th>Unit Model</th>
                                <th colspan="2">CONDITION</th>
                                <th>UNIT</th>
                                <th>STD</th>
                                <th>PMS</th>
                                <th>ACTUAL</th>
                                <th>REMARK</th>
                            </tr>
                        </tfoot>
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
                                    <input type="text" class="form-control no-border" name="engine_low_idle" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="engine_low_idle_remark" size="5">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">
                                    Engine: High idle
                                </td>
                                <td class="text-center" colspan="2">1930 - 2030</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="engine_high_idle" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="engine_high_idle_remark" size="5">
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td colspan="2">
                                    Engine: Full throttle. Boom: raise relieve.
                                </td>
                                <td class="text-center" colspan="2">1680 - 1880</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="engine_full_throttle_raise" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="engine_full_throttle_raise_remark" size="5">
                                </td>
                            </tr>
                            <!-- row 4 -->
                            <tr>
                                <td colspan="2">
                                    Engine: Full throttle. <br>Boom: raise relieve + Heavy lift : ON.
                                </td>
                                <td class="align-middle text-center" colspan="2">1680 - 1880</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="engine_full_throttle_heavy" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="engine_full_throttle_heavy_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 6 -->
                            <tr>
                                <td colspan="2" class="align-middle text-center">
                                    Auto decelaration switch: ON. Fuel control dial: Max. <br>Control Valve: neutral
                                </td>
                                <td class="align-middle text-center" colspan="2">1300 - 1500</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="engine_control_valve_neutral" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="engine_control_valve_neutral_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="blow_horsepower" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="blow_horsepower_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="oil_run_low_idle" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="oil_run_low_idle_remark" size="5">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2" class="align-middle">Run engine at high idle (SAE30)</td>
                                <td class="align-middle text-center">0.29 - 0.44 <br> { 3.0 - 4.5 }</td>
                                <td class="align-middle text-center">Min 0.2 <br> { Min 2.0 }</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="oil_run_high_idle" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="oil_run_high_idle_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="boost_horsepower" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="boost_horsepower_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="exhaust_speed_range" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="exhaust_speed_range_remark" size="5">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle" colspan="2">Ambient temperature</td>
                                <td class="align-middle text-center">20</td>
                                <td class="align-middle text-center">20</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="exhaust_ambient_temp" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="exhaust_ambient_temp_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="visual_inspection" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="visual_inspection_remark" size="5">
                                </td>
                            </tr>

                            <!-- Check of thermo-label of center bearing -->
                            <tr>
                                <td class="align-middle" colspan="3">Check of thermo-label of center bearing</td>
                                <td class="text-center">°C</td>
                                <td class="text-center" colspan="2">120 °C range must not be black</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="check_of_thermo" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="check_of_thermo_remark" size="5">
                                </td>
                            </tr>

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
                                    <input type="text" class="form-control no-border" name="boom_raise" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="boom_raise_remark" size="5">
                                </td>
                            </tr>

                            <!-- Boom LOWER -->
                            <tr>
                                <td class="align-middle">Boom LOWER</td>
                                <td class="text-center align-middle">4.8 - 5.8</td>
                                <td class="text-center align-middle">Max. 6.4</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="boom_lower" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="boom_lower_remark" size="5">
                                </td>
                            </tr>

                            <!-- Arm IN -->
                            <tr>
                                <td class="align-middle">Arm IN</td>
                                <td class="text-center align-middle">6.7 - 8.3</td>
                                <td class="text-center align-middle">Max. 90</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="arm_in" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="arm_in_remark" size="5">
                                </td>
                            </tr>

                            <!-- Arm OUT -->
                            <tr>
                                <td class="align-middle">Arm OUT</td>
                                <td class="text-center align-middle">4.7 - 5.7</td>
                                <td class="text-center align-middle">Max. 6.2</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="arm_out" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="arm_out_remark" size="5">
                                </td>
                            </tr>

                            <!-- Bucked CURL -->
                            <tr>
                                <td class="align-middle">Bucked CURL</td>
                                <td class="text-center align-middle">4.5 - 5.5</td>
                                <td class="text-center align-middle">Max. 6.0</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="bucket_curl" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="bucket_curl_remark" size="5">
                                </td>
                            </tr>

                            <!-- Bucked DUMP -->
                            <tr>
                                <td class="align-middle">Bucked DUMP</td>
                                <td class="text-center align-middle">3.5 - 4.3</td>
                                <td class="text-center align-middle">Max. 4.7</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="bucket_dump" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="bucket_dump_remark" size="5">
                                </td>
                            </tr>

                            <!-- Swing 5 turns -->
                            <tr>
                                <td class="align-middle">Swing 5 turns</td>
                                <td class="text-center align-middle">57.5 - 67.5</td>
                                <td class="text-center align-middle">Max. 70.0</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="swing_5_turns" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="swing_5_turns_remark" size="5">
                                </td>
                            </tr>

                            <!-- Drive right track 5 turns -->
                            <tr>
                                <td class="align-middle">Drive right track 5 turns</td>
                                <td class="text-center align-middle">90.5 - 110.5</td>
                                <td class="text-center align-middle">Max. 70.0</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="drive_right_track" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="drive_right_track_remark" size="5">
                                </td>
                            </tr>

                            <!-- Drive left track 5 turns -->
                            <tr>
                                <td class="align-middle">Drive left track 5 turns</td>
                                <td class="text-center align-middle">90.5 - 110.5</td>
                                <td class="text-center align-middle">Max. 70.0</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="drive_left_track" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="drive_left_track_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="whole_work" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="whole_work_remark" size="5">
                                </td>
                            </tr>
                            <!-- Boom cylinder -->
                            <tr>
                                <td class="align-middle">Boom cylinder</td>
                                <td class="text-center align-middle">Cyl. Retraction.</td>
                                <td class="text-center align-middle">Max. 35</td>
                                <td class="text-center align-middle">Max. 50</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="boom_cylinder" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="boom_cylinder_remark" size="5">
                                </td>
                            </tr>
                            <!-- Arm cylinder -->
                            <tr>
                                <td class="align-middle">Arm cylinder</td>
                                <td class="text-center align-middle">Cyl. Retraction.</td>
                                <td class="text-center align-middle">Max. 70</td>
                                <td class="text-center align-middle">Max. 105</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="arm_cylinder" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="arm_cylinder_remark" size="5">
                                </td>
                            </tr>
                            <!-- Bucket cylinder -->
                            <tr>
                                <td class="align-middle">Bucket cylinder</td>
                                <td class="text-center align-middle">Cyl. Retraction.</td>
                                <td class="text-center align-middle">Max. 15</td>
                                <td class="text-center align-middle">Max. 30</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="bucket_cylinder" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="bucket_cylinder_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="control_pressure" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="control_pressure_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="jet_control_lever" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="jet_control_lever_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td class="text-center align-middle">Right travel lever: stroke end. Track: turning with no load.</td>
                                <td class="text-center align-middle">Min 1.7</td>
                                <td class="text-center align-middle">Min 1.7</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="jet_right_travel_lever" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="jet_right_travel_lever_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 3 -->
                            <tr>
                                <td class="text-center align-middle">Left travel lever: stroke end. Track: turning with no load.</td>
                                <td class="text-center align-middle">Min 1.7</td>
                                <td class="text-center align-middle">Min 1.7</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="jet_left_travel_lever" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="jet_left_travel_lever_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="pump_control_lever" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="pump_control_lever_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td class="text-center align-middle">Right travel lever: stroke end. Track: turning with no load.</td>
                                <td class="text-center align-middle">P1: 390 - 510<br>P2: 615 - 735</td>
                                <td class="text-center align-middle">P1: 390 - 510<br>P2: 615 - 735</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="pump_right_travel_lever" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="pump_right_travel_lever_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 3 -->
                            <tr>
                                <td class="text-center align-middle">Left travel lever: stroke end. Track: turning with no load.</td>
                                <td class="text-center align-middle">P1: 390 - 510<br>P2: 615 - 735</td>
                                <td class="text-center align-middle">P1: 390 - 510<br>P2: 615 - 735</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="pump_left_travel_lever" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="pump_left_travel_lever_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="p1f_boom_raise" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1f_boom_raise_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td class="text-center align-middle">Boom: raise relieve (heavy lift ON)</td>
                                <td class="text-center align-middle">317 - 337</td>
                                <td class="text-center align-middle">307 - 337</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1f_boom_raise_heavy" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1f_boom_raise_heavy_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 3 -->
                            <tr>
                                <td class="text-center align-middle">Arm: In relieve</td>
                                <td class="text-center align-middle">290 - 310</td>
                                <td class="text-center align-middle">280 - 310</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1f_arm_in" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1f_arm_in_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 4 -->
                            <tr>
                                <td class="text-center align-middle">Arm: Out relieve</td>
                                <td class="text-center align-middle">290 - 310</td>
                                <td class="text-center align-middle">280 - 310</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1f_arm_out" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1f_arm_out_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 5 -->
                            <tr>
                                <td class="text-center align-middle">Bucket: Curl relieve</td>
                                <td class="text-center align-middle">290 - 310</td>
                                <td class="text-center align-middle">280 - 310</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1f_bucket_curl" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1f_bucket_curl_remark" size="5">
                                </td>
                            </tr>
                            <!-- row 6 -->
                            <tr>
                                <td class="text-center align-middle">Swing: Relieve</td>
                                <td class="text-center align-middle">290 - 310</td>
                                <td class="text-center align-middle">280 - 310</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1f_swing" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1f_swing_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="p1r_boom_raise" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1r_boom_raise_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td class="text-center align-middle">Boom: raise relieve (heavy lift ON)</td>
                                <td class="text-center align-middle">317 - 337</td>
                                <td class="text-center align-middle">307 - 337</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1r_boom_raise_heavy" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1r_boom_raise_heavy_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 3 -->
                            <tr>
                                <td class="text-center align-middle">Arm: In relieve</td>
                                <td class="text-center align-middle">290 - 310</td>
                                <td class="text-center align-middle">280 - 310</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1r_arm_in" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1r_arm_in_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 4 -->
                            <tr>
                                <td class="text-center align-middle">Arm: Out relieve</td>
                                <td class="text-center align-middle">290 - 310</td>
                                <td class="text-center align-middle">280 - 310</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1r_arm_out" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1r_arm_out_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 5 -->
                            <tr>
                                <td class="text-center align-middle">Bucket: Curl relieve</td>
                                <td class="text-center align-middle">290 - 310</td>
                                <td class="text-center align-middle">280 - 310</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1r_bucket_curl" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p1r_bucket_curl_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="p2f_boom_raise" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p2f_boom_raise_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td class="text-center align-middle">Boom: raise relieve (heavy lift ON)</td>
                                <td class="text-center align-middle">317 - 337</td>
                                <td class="text-center align-middle">307 - 337</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p2f_boom_raise_heavy" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p2f_boom_raise_heavy_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 3 -->
                            <tr>
                                <td class="text-center align-middle">Arm: In relieve</td>
                                <td class="text-center align-middle">290 - 310</td>
                                <td class="text-center align-middle">280 - 310</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p2f_arm_in" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p2f_arm_in_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 4 -->
                            <tr>
                                <td class="text-center align-middle">Arm: Out relieve</td>
                                <td class="text-center align-middle">290 - 310</td>
                                <td class="text-center align-middle">280 - 310</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p2f_arm_out" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p2f_arm_out_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 5 -->
                            <tr>
                                <td class="text-center align-middle">Bucket: Curl relieve</td>
                                <td class="text-center align-middle">290 - 310</td>
                                <td class="text-center align-middle">280 - 310</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p2f_bucket_curl" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p2f_bucket_curl_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="p2r_boom_raise_heavy" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p2r_boom_raise_heavy_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td class="text-center align-middle">Arm: In relieve</td>
                                <td class="text-center align-middle">290 - 310</td>
                                <td class="text-center align-middle">280 - 310</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p2r_arm_in" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p2r_arm_in_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 3 -->
                            <tr>
                                <td class="text-center align-middle">Arm: Out relieve</td>
                                <td class="text-center align-middle">290 - 310</td>
                                <td class="text-center align-middle">280 - 310</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p2r_arm_out" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p2r_arm_out_remark" size="5">
                                </td>
                            </tr>

                            <!-- row 4 -->
                            <tr>
                                <td class="text-center align-middle">Bucket: Curl relieve</td>
                                <td class="text-center align-middle">290 - 310</td>
                                <td class="text-center align-middle">280 - 310</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p2r_bucket_curl" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="p2r_bucket_curl_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="fan_pump_radiator" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="fan_pump_radiator_remark" size="5">
                                </td>
                            </tr>

                            <!-- Fan pump EPC (Oil cooler) current -->
                            <tr>
                                <td class="align-middle">Fan pump EPC (Oil cooler) current</td>
                                <td class="text-center align-middle">Control lever: neutral</td>
                                <td class="text-center align-middle">STD: 600-700<br>55⁰ C: 505-605</td>
                                <td class="text-center align-middle">STD: 600-700<br>55⁰ C: 505-605</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="fan_pump_oil" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="fan_pump_oil_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="fan_speed_radiator" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="fan_speed_radiator_remark" size="5">
                                </td>
                            </tr>

                            <!-- Fan speed (oil cooler) -->
                            <tr>
                                <td class="align-middle">Fan speed (oil cooler)</td>
                                <td class="text-center align-middle">Control lever: neutral</td>
                                <td class="text-center align-middle">STD: 710-810<br>55⁰ C: 1050-1150</td>
                                <td class="text-center align-middle">STD: 710-810<br>55⁰ C: 1050-1150</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="fan_speed_oil" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="fan_speed_oil_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="hydraulic_oil_temp" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="hydraulic_oil_temp_remark" size="5">
                                </td>
                            </tr>

                            <!-- Visual check of hydraulic tank strainer. -->
                            <tr>
                                <td class="align-middle" colspan="4">Visual check of hydraulic tank strainer.</td>
                                <td class="align-middle" colspan="2">There must not be excessive metal powder or foreignj matter.</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="visual_check_hydraulic" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="visual_check_hydraulic_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="drive_drain_plug" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="drive_drain_plug_remark" size="5">
                                </td>
                            </tr>

                            <!-- Oil Leak -->
                            <tr>
                                <td class="align-middle">Oil Leak</td>
                                <td class="text-center align-middle" colspan="2">No leaked </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="drive_oil_leak" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="drive_oil_leak_remark" size="5">
                                </td>
                            </tr>

                            <!-- Abnormal Noise -->
                            <tr>
                                <td class="align-middle">Abnormal Noise</td>
                                <td class="text-center align-middle" colspan="3">travel raise and oparated track </td>
                                <td class="text-center align-middle" colspan="2">no abnormal noise</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="drive_abnormal_noise" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="drive_abnormal_noise_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="swing_drain_plug" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="swing_drain_plug_remark" size="5">
                                </td>
                            </tr>

                            <!-- Oil Leak -->
                            <tr>
                                <td class="align-middle">Oil Leak</td>
                                <td class="text-center align-middle" colspan="2">No leaked </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="swing_oil_leak" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="swing_oil_leak_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="axial_play" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="axial_play_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="instrument_panel" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="instrument_panel_remark" size="5">
                                </td>
                            </tr>
                            <!-- Starting system -->
                            <tr>
                                <td>Starting system</td>
                                <td colspan="2">Condition and function</td>
                                <td colspan="3">Good installation and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="starting_system" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="starting_system_remark" size="5">
                                </td>
                            </tr>
                            <!-- Chargin System -->
                            <tr>
                                <td>Chargin System</td>
                                <td colspan="2">Condition and function</td>
                                <td colspan="3">Good installation and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="charging_system" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="charging_system_remark" size="5">
                                </td>
                            </tr>
                            <!-- Lighting -->
                            <tr>
                                <td>Lighting</td>
                                <td colspan="2">Condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="lighting" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="lighting_remark" size="5">
                                </td>
                            </tr>
                            <!-- Battery -->
                            <tr>
                                <td>Battery</td>
                                <td colspan="2">Condition, electrolite level, specific grafity and load test. </td>
                                <td colspan="3">Good condition</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="battery" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="battery_remark" size="5">
                                </td>
                            </tr>
                            <!-- Wiring harness -->
                            <tr>
                                <td>Wiring harness</td>
                                <td colspan="2">Condition, connection, clamping</td>
                                <td colspan="3">Good installation and condition</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="wiring_harness" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="wiring_harness_remark" size="5">
                                </td>
                            </tr>
                            <!-- VHMS/Komtrak -->
                            <tr>
                                <td>VHMS/Komtrak</td>
                                <td colspan="2">Condition and function</td>
                                <td colspan="3">Good condition and function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="vhms_komtrak" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="vhms_komtrak_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="emergency_shutdown" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="emergency_shutdown_remark" size="5">
                                </td>
                            </tr>
                            <!-- Logout Switch -->
                            <tr>
                                <td>Logout Switch</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="logout_switch" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="logout_switch_remark" size="5">
                                </td>
                            </tr>
                            <!-- PDU -->
                            <tr>
                                <td>PDU</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="pdu" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="pdu_remark" size="5">
                                </td>
                            </tr>
                            <!-- Autolube -->
                            <tr>
                                <td>Autolube</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="autolube" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="autolube_remark" size="5">
                                </td>
                            </tr>
                            <!-- Fire suppression -->
                            <tr>
                                <td>Fire suppression</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="fire_suppression" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="fire_suppression_remark" size="5">
                                </td>
                            </tr>
                            <!-- Fatique warning -->
                            <tr>
                                <td>Fatique warning</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="fatique_warning" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="fatique_warning_remark" size="5">
                                </td>
                            </tr>
                            <!-- Backup alarm -->
                            <tr>
                                <td>Backup alarm</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="backup_alarm" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="backup_alarm_remark" size="5">
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
                                    <input type="text" class="form-control no-border" name="attachment_frame" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="attachment_frame_remark" size="5">
                                </td>
                            </tr>
                            <!-- Machine -->
                            <tr>
                                <td>Machine</td>
                                <td colspan="2">Cleaness, wear, completeness and condition</td>
                                <td colspan="3">Complete and normal condition</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="machine" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="machine_remark" size="5">
                                </td>
                            </tr>
                            <!-- Undercarriage -->
                            <tr>
                                <td>Undercarriage</td>
                                <td colspan="2">Cleaness, wear, completeness and condition</td>
                                <td colspan="3">Complete and normal condition</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="undercarriage" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="undercarriage_remark" size="5">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-warning px-3 py-2 float-right">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>