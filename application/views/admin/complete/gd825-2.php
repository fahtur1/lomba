<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">UPDATE <?= $unit ?> / <?= $ps ?></h1>
    </div>

    <form action="<?= base_url("admin/home/update_plan/$unit/$ps/$plan") ?>" method="post">
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
            <!-- <div class="card-header py-3">
            <h6 class="card-title m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div> -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>ITEM</th>
                                <th style="width: 20%;" colspan="2">CONDITION</th>
                                <th>UNIT</th>
                                <th>STD</th>
                                <th>PMS</th>
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
                                <td class="align-middle" rowspan="2">
                                    Engine Speed
                                </td>
                                <td class="align-middle">
                                    Eng. Low
                                </td>
                                <td>S6D140E-2</td>
                                <td class="align-middle text-center" rowspan="2"></td>
                                <td>600-700</td>
                                <td class="text-center">-</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="engine_low_speed">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="engine_low_speed_remark">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>
                                    Eng. High
                                </td>
                                <td></td>
                                <td class="text-center" colspan="2">2300-2400</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="engine_high_speed">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="engine_high_speed_remark">
                                </td>
                            </tr>
                            <!-- Blow-by Press -->
                            <!-- row 1 -->
                            <tr>
                                <td>Blow-by Press</td>
                                <td>T/C Stall</td>
                                <td></td>
                                <td class="align-middle text-center">mm H2O</td>
                                <td>Max. 100</td>
                                <td>Max. 200</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="tc_stall_press">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="tc_stall_press_remark">
                                </td>
                            </tr>
                            <!-- Lub Oil -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Lub Oil Press.</td>
                                <td>Eng. Low</td>
                                <td>S6D140-1</td>
                                <td class="align-middle text-center" rowspan="2"></td>
                                <td>Min. 1</td>
                                <td>Min. 0.7</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="engine_low_press">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="engine_low_press_remark">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle">Eng. Low</td>
                                <td>S6D140E-2</td>
                                <td>Min. 1.2</td>
                                <td>Min. 0.7</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="engine_low_press2">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="engine_low_press2_remark">
                                </td>
                            </tr>
                            <!-- Boost Press -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle">Boost Press.</td>
                                <td class="align-middle">Eng. Rated</td>
                                <td>S6D140E-2</td>
                                <td class="align-middle text-center"></td>
                                <td>Min. 590</td>
                                <td>Min. 500</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="engine_rated_press">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="engine_rated_press_remark">
                                </td>
                            </tr>
                            <!-- Exhaust Gas Temp -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle">Exhaust Gas Temp</td>
                                <td class="align-middle">T/C Stall</td>
                                <td>S6D140E-2</td>
                                <td class="align-middle text-center">°C</td>
                                <td>Min. 700</td>
                                <td>Min. 700</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="tc_stall_temp">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="tc_stall_temp_remark">
                                </td>
                            </tr>

                            <!-- TRANSMISSION & TORQUE CONVERTER -->
                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                                    TRANSMISSION & TORQUE CONVERTER
                                </td>
                            </tr>
                            <!-- Inching Pedal -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="4">Inching Pedal</td>
                                <td>Operating Effect</td>
                                <td>Engine Stop</td>
                                <td class="text-center">Kg</td>
                                <td class="text-center">11-15</td>
                                <td class="text-center">8-18</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="operating_effect">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="operating_effect_remark">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Pedal height.</td>
                                <td>When not operated</td>
                                <td class="text-center">mm</td>
                                <td class="text-center">95-105</td>
                                <td class="text-center">90-110</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="pedal_height">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="pedal_height_remark">
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td>Pedal height.</td>
                                <td>When operated</td>
                                <td class="text-center">mm</td>
                                <td class="text-center">39-47</td>
                                <td class="text-center">39-48</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="pedal_height_operated">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="pedal_height_operated_remark">
                                </td>
                            </tr>
                            <!-- row 4 -->
                            <tr>
                                <td>Pedal travel.</td>
                                <td>up-down movement</td>
                                <td class="text-center">mm</td>
                                <td class="text-center">55-65</td>
                                <td class="text-center">Max. 65</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="pedal_travel">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="pedal_travel_remark">
                                </td>
                            </tr>

                            <!-- T/M Valve Press -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="11">T/M Valve Press</td>
                                <td>Pilot oil Press.</td>
                                <td class="align-middle text-center" rowspan="3">Engine at full throttle Oil Temp 40-60°C</td>
                                <td class="align-middle text-center" rowspan="11">Kg/cm2.</td>
                                <td class="text-center">10 - 12</td>
                                <td class="text-center">-</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="pilot_oil">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="pilot_oil_remark">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Lubricating Oil Press.</td>
                                <td class="text-center">1,0 - 2,5</td>
                                <td class="text-center">-</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="lubricating_oil">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="lubricating_oil_remark">
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td>Main oil press.</td>
                                <td class="align-middle text-center" rowspan="9">31 - 34</td>
                                <td class="text-center">-</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="main_oil">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="main_oil_remark">
                                </td>
                            </tr>
                            <!-- row 4 -->
                            <tr>
                                <td>Clutch F</td>
                                <td class="align-middle text-center" rowspan="8">Mannual Spool Engine at full throttle Oil Temp 40-60°C</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="clutch_f">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="clutch_f_remark">
                                </td>
                            </tr>
                            <!-- row 5 -->
                            <tr>
                                <td>Clutch R</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="clutch_r">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="clutch_r_remark">
                                </td>
                            </tr>
                            <!-- row 6 -->
                            <tr>
                                <td>Clutch High</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="clutch_high">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="clutch_high_remark">
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch Low</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="clutch_low">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="clutch_low_remark">
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch 1</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="clutch_1">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="clutch_1_remark">
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch 2</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="clutch_2">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="clutch_2_remark">
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch 3</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="clutch_3">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="clutch_3_remark">
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch 4</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="clutch_4">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="clutch_4_remark">
                                </td>
                            </tr>
                            <!-- STEERING & BRAKE -->
                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                                    STEERING & BRAKE
                                </td>
                            </tr>
                            <!-- Wheel -->
                            <!-- row 1 -->
                            <tr>
                                <td>Wheel</td>
                                <td>Play of steering wheel</td>
                                <td></td>
                                <td class="align-middle text-center">mm</td>
                                <td>25 - 45</td>
                                <td>Max. 45</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="steering_wheel">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="steering_wheel_remark">
                                </td>
                            </tr>
                            <!-- Wheel -->
                            <!-- row 1 -->
                            <tr>
                                <td>Wheel</td>
                                <td>Operating Effort.</td>
                                <td>Engine at low idling.</td>
                                <td class="text-center">kg.</td>
                                <td>Max. 5</td>
                                <td>Max. 6</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="operating_effort_wheel">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="operating_effort_wheel_remark">
                                </td>
                            </tr>
                            <!-- Steering Pressure. -->
                            <!-- row 1 -->
                            <tr>
                                <td>Steering Pressure.</td>
                                <td>Priority relief valve</td>
                                <td>Engine at full throtte</td>
                                <td class="text-center">Kg/cm2</td>
                                <td>170 - 180</td>
                                <td>165 - 185</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="priority_relief">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="priority_relief_remark">
                                </td>
                            </tr>
                            <!-- Brake Pedal -->
                            <!-- row 1 -->
                            <tr>
                                <td>Brake Pedal</td>
                                <td>Operating Effort.</td>
                                <td>Engine at low idling.</td>
                                <td class="text-center">kg.</td>
                                <td>30 - 34</td>
                                <td>Max. 50</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="operating_effort_brake">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="operating_effort_brake_remark">
                                </td>
                            </tr>
                            <!-- Air Pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td>Air Pressure</td>
                                <td colspan="2">Engine at full throtte</td>
                                <td class="text-center">Kg/cm2</td>
                                <td>4.2 - 9.5</td>
                                <td>Min 3.7</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="engine_full_throtte">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="engine_full_throtte_remark">
                                </td>
                            </tr>
                            <!-- HYDRAULIC -->
                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                                    HYDRAULIC
                                </td>
                            </tr>
                            <!-- Blade Lifting Speed -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Blade Lifting Speed</td>
                                <td>Raise</td>
                                <td class="align-middle text-center" rowspan="17">Engine rated speed.</td>
                                <td class="align-middle text-center" rowspan="8">mm/Sec.</td>
                                <td>115-145</td>
                                <td>115-145</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="raise_speed">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="raise_speed_remark">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Lower</td>
                                <td>115-145</td>
                                <td>115-145</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="lower_speed">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="lower_speed_remark">
                                </td>
                            </tr>
                            <!-- Balde side shift speed, with out move of circle -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Balde side shift speed, <br> with out move of circle</td>
                                <td>Left</td>
                                <td>115-145</td>
                                <td>115-145</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="left_out">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="left_out_remark">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Right</td>
                                <td>115-145</td>
                                <td>115-145</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="right_out">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="right_out_remark">
                                </td>
                            </tr>
                            <!-- Balde side shift speed, compared to circle -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Balde side shift speed, <br> compared to circle</td>
                                <td>Left</td>
                                <td>115-145</td>
                                <td>115-145</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="left_compared">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="left_compared_remark">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Right</td>
                                <td>115-145</td>
                                <td>115-145</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="right_compared">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="right_compared_remark">
                                </td>
                            </tr>
                            <!-- Ripper lifting speed -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Ripper lifting speed</td>
                                <td>Raise</td>
                                <td>85 - 115</td>
                                <td>85 - 115</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="raise_ripper">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="raise_ripper">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Lower</td>
                                <td>85 - 115</td>
                                <td>85 - 115</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="lower_ripper">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="lower_ripper">
                                </td>
                            </tr>
                            <!-- Blade rotation speed -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Blade rotation speed</td>
                                <td>sn. 11001 - 12050</td>
                                <td class="align-middle text-center" rowspan="2">deg/sec</td>
                                <td>8.5 - 9.5</td>
                                <td>8.5 - 9.5</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="rotation_down">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="rotation_down">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>sn. 12051 and up</td>
                                <td>6.5 - 7.5</td>
                                <td>6.5 - 7.5</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="rotation_up">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="rotation_up_remark">
                                </td>
                            </tr>
                            <!-- Hyd. Drift -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="4">Hyd. Drift</td>
                                <td>Extension of Blade Cyl.</td>
                                <td class="align-middle text-center" rowspan="4">mm/min.</td>
                                <td>10</td>
                                <td>10</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="drift_ext_blade">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="drift_ext_blade_remark">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Retraction of Blade Cyl.</td>
                                <td>10</td>
                                <td>10</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="drift_rtn_blade">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="drift_rtn_blade_remark">
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td>Extension of Riper Cyl.</td>
                                <td>20</td>
                                <td>20</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="drift_ext_ripper">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="drift_ext_ripper_remark">
                                </td>
                            </tr>
                            <!-- row 4 -->
                            <tr>
                                <td>Retraction of Riper Cyl.</td>
                                <td>20</td>
                                <td>20</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="drift_rtn_ripper">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="drift_rtn_ripper_remark">
                                </td>
                            </tr>
                            <!-- Hydraulic pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="3">Hydraulic pressure</td>
                                <td>Priority v relieve press.</td>
                                <td class="align-middle text-center" rowspan="3">mm/min.</td>
                                <td>240 - 260</td>
                                <td>235 - 265</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="hydraulic_priority">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="hydraulic_priority_remark">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Control valve RH</td>
                                <td>240 - 260</td>
                                <td>235 - 265</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="hydraulic_valve_rh">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="hydraulic_valve_rh_remark">
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td>Control valve LH</td>
                                <td>240 - 260</td>
                                <td>235 - 265</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="hydraulic_valve_lh">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="hydraulic_valve_lh_remark">
                                </td>
                            </tr>
                            <!-- DIFFERENTIAL / FINAL DRIVE & TANDEM -->
                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                                    DIFFERENTIAL / FINAL DRIVE & TANDEM
                                </td>
                            </tr>
                            <!-- Diff. Drain Plug -->
                            <tr>
                                <td>Diff. Drain Plug</td>
                                <td class="align-middle text-center" rowspan="3">Visual Check</td>
                                <td></td>
                                <td class="align-middle text-center" colspan="3" rowspan="3">No excessive metalic powder</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="diff_drain">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="diff_drain_remark">
                                </td>
                            </tr>
                            <!-- Tandem Drain Plug -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Tandem Drain Plug</td>
                                <td>L/H</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="tandem_drain_lh">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="tandem_drain_lh_remark">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>R/H</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="tandem_drain_rh">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" name="tandem_drain_rh_remark">
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