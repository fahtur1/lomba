<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">UPDATE <?= $unit ?> / <?= $ps ?></h1>
    </div>

    <form action="<?= base_url("Admin/Home/update_plan/$unit/$ps/$plan/$code") ?>" method="post">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="inputState">Name</label>
                    <input type="text" class="form-control" value="<?= set_value('name') ?>" id="name" name="name">
                    <?= form_error('name', '<small class="text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label>Actual Date</label>
                    <input type="date" id="date" name="date" value="<?= set_value('date') ?>" max="2050-12-31" min="<?= date('Y-m-d') ?>" class="form-control">
                    <?= form_error('date', '<small class="text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label>Code Unit</label>
                    <input type="text" class="form-control" id="codeunit" value="<?= $code ?>" name="codeunit" disabled>
                </div>
                <div class="form-group">
                    <label>Branch Site</label>
                    <input type="text" class="form-control" value="<?= set_value('site') ?>" id="site" name="site">
                    <?= form_error('site', '<small class="text-danger">', '</small>') ?>
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
                                <td class="align-middle" rowspan="10">
                                    Engine Speed
                                </td>
                                <td colspan="2" class="align-middle">
                                    Low Idle, Low
                                </td>
                                <td class="align-middle text-center" rowspan="10">Rpm</td>
                                <td colspan="2" class="text-center">625 - 675</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_low_idle_low') ?>" name="engine_low_idle_low" size="5">
                                    <?= form_error('engine_low_idle_low', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_low_idle_low_remark') ?>" name="engine_low_idle_low_remark" size="5">
                                    <?= form_error('engine_low_idle_low_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">
                                    Low Idle, Hi
                                </td>
                                <td class="text-center" colspan="2">895 - 995</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_low_idle_hi') ?>" name="engine_low_idle_hi" size="5">
                                    <?= form_error('engine_low_idle_hi', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_low_idle_hi_remark') ?>" name="engine_low_idle_hi_remark" size="5">
                                    <?= form_error('engine_low_idle_hi_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td colspan="2">
                                    High Idle, Power mode
                                </td>
                                <td class="text-center" colspan="2">2200 - 2300</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_high_idle_power') ?>" name="engine_high_idle_power" size="5">
                                    <?= form_error('engine_high_idle_power', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_high_idle_power_remark') ?>" name="engine_high_idle_power_remark" size="5">
                                    <?= form_error('engine_high_idle_power_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 4 -->
                            <tr>
                                <td colspan="2">
                                    High Idle, Economy mode
                                </td>
                                <td class="text-center" colspan="2">2,050 - 2,150</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_high_idle_eco') ?>" name="engine_high_idle_eco" size="5">
                                    <?= form_error('engine_high_idle_eco', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_high_idle_eco_remark') ?>" name="engine_high_idle_eco_remark" size="5">
                                    <?= form_error('engine_high_idle_eco_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 5 -->
                            <tr>
                                <td colspan="2">
                                    High Idle, Reverse RH
                                </td>
                                <td class="text-center" colspan="2">2,000 - 2,100</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_high_idle_rev') ?>" name="engine_high_idle_rev" size="5">
                                    <?= form_error('engine_high_idle_rev', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_high_idle_rev_remark') ?>" name="engine_high_idle_rev_remark" size="5">
                                    <?= form_error('engine_high_idle_rev_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 6 -->
                            <tr>
                                <td colspan="2">
                                    High Idle, Reverse RH (Power Mode)
                                </td>
                                <td class="text-center" colspan="2">2,200 - 2,300</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_high_idle_rev_power') ?>" name="engine_high_idle_rev_power" size="5">
                                    <?= form_error('engine_high_idle_rev_power', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_high_idle_rev_power_remark') ?>" name="engine_high_idle_rev_power_remark" size="5">
                                    <?= form_error('engine_high_idle_rev_power_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td colspan="2">
                                    Torque convertor stall, A mode
                                </td>
                                <td class="text-center" colspan="2">1,745 - 1,945 </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_torque_a') ?>" name="engine_torque_a" size="5">
                                    <?= form_error('engine_torque_a', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_torque_a_remark') ?>" name="engine_torque_a_remark" size="5">
                                    <?= form_error('engine_torque_a_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 8 -->
                            <tr>
                                <td colspan="2">
                                    Torque convertor stall, B mode
                                </td>
                                <td class="text-center" colspan="2">1,680 - 1,880</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_torque_b') ?>" name="engine_torque_b" size="5">
                                    <?= form_error('engine_torque_b', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_torque_b_remark') ?>" name="engine_torque_b_remark" size="5">
                                    <?= form_error('engine_torque_b_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 9 -->
                            <tr>
                                <td colspan="2">
                                    Torque convertor stall, C mode
                                </td>
                                <td class="text-center" colspan="2">1,630 - 1,830</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_torque_c') ?>" name="engine_torque_c" size="5">
                                    <?= form_error('engine_torque_c', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_torque_c_remark') ?>" name="engine_torque_c_remark" size="5">
                                    <?= form_error('engine_torque_c_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 10 -->
                            <tr>
                                <td colspan="2">
                                    Torque convertor stall, D mode
                                </td>
                                <td class="text-center" colspan="2">1,595 - 1,795</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_torque_d') ?>" name="engine_torque_d" size="5">
                                    <?= form_error('engine_torque_d', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_torque_d_remark') ?>" name="engine_torque_d_remark" size="5">
                                    <?= form_error('engine_torque_d_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Blow-by Press. -->
                            <tr>
                                <td class="align-middle">
                                    Blow-by Press.
                                </td>
                                <td colspan="2" class="align-middle">
                                    Power Mode T/C Stall
                                </td>
                                <td class="align-middle text-center">kPa<br>(mmH2O)</td>
                                <td class="text-center">Max. 2,94<br>(Max. 300)</td>
                                <td class="text-center">Max. 5,88<br>(Max. 600)</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('blow_power') ?>" name="blow_power" size="5">
                                    <?= form_error('blow_power', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('blow_power_remark') ?>" name="blow_power_remark" size="5">
                                    <?= form_error('blow_power_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Lub Oil Press -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">
                                    Lub Oil Press
                                </td>
                                <td colspan="2" class="align-middle">
                                    Engine speed: 1,900 rpm (Rated speed)
                                </td>
                                <td class="align-middle text-center" rowspan="2">Kg/cm2</td>
                                <td class="text-center">3.0 - 4.5</td>
                                <td class="text-center">Min 2.0</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('lub_oil_rated') ?>" name="lub_oil_rated" size="5">
                                    <?= form_error('lub_oil_rated', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('lub_oil_rated_remark') ?>" name="lub_oil_rated_remark" size="5">
                                    <?= form_error('lub_oil_rated_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2" class="align-middle">
                                    Low Idle
                                </td>
                                <td class="text-center">Min. 0.8</td>
                                <td class="text-center">Min 0.7</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('lub_oil_low') ?>" name="lub_oil_low" size="5">
                                    <?= form_error('lub_oil_low', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('lub_oil_low_remark') ?>" name="lub_oil_low_remark" size="5">
                                    <?= form_error('lub_oil_low_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Boost Press. -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">
                                    Boost Press.
                                </td>
                                <td class="align-middle" rowspan="2">
                                    Engine speed: 1,900 rpm (Rated speed)
                                </td>
                                <td class="align-middle">
                                    RH
                                </td>
                                <td class="align-middle text-center" rowspan="2">kPa<br>(mmH2O)</td>
                                <td class="text-center align-middle" colspan="2">
                                    Min. 165,40 <br> (min. 1,250)
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('boost_press_rh') ?>" name="boost_press_rh" size="5">
                                    <?= form_error('boost_press_rh', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('boost_press_rh_remark') ?>" name="boost_press_rh_remark" size="5">
                                    <?= form_error('boost_press_rh_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle">
                                    LH
                                </td>
								<td class="text-center align-middle" colspan="2">
									Min. 165,40 <br> (min. 1,250)
								</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('boost_press_lh') ?>" name="boost_press_lh" size="5">
                                    <?= form_error('boost_press_lh', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('boost_press_lh_remark') ?>" name="boost_press_lh_remark" size="5">
                                    <?= form_error('boost_press_lh_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Exhaust Gas Temp. -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="3">
                                    Exhaust Gas Temp.
                                </td>
                                <td class="align-middle" colspan="2">
                                    Ambient Temp.
                                </td>
                                <td class="align-middle text-center" rowspan="3">
                                    °C
                                </td>
                                <td class="align-middle text-center">20</td>
                                <td class="text-center align-middle">
                                    -
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('exhaust_ambient') ?>" name="exhaust_ambient" size="5">
                                    <?= form_error('exhaust_ambient', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('exhaust_ambient_remark') ?>" name="exhaust_ambient_remark" size="5">
                                    <?= form_error('exhaust_ambient_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle" rowspan="2">
                                    All speed range
                                </td>
                                <td class="align-middle">
                                    RH
                                </td>
                                <td class="text-center align-middle" rowspan="2">
                                    Max. 700
                                </td>
                                <td class="text-center align-middle" rowspan="2">
                                    Max. 750
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('exhaust_speed_rh') ?>" name="exhaust_speed_rh" size="5">
                                    <?= form_error('exhaust_speed_rh', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('exhaust_speed_rh_remark') ?>" name="exhaust_speed_rh_remark" size="5">
                                    <?= form_error('exhaust_speed_rh_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td class="align-middle">
                                    LH
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('exhaust_speed_lh') ?>" name="exhaust_speed_lh" size="5">
                                    <?= form_error('exhaust_speed_lh', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('exhaust_speed_lh_remark') ?>" name="exhaust_speed_lh_remark" size="5">
                                    <?= form_error('exhaust_speed_lh_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                                    TORQUE CONVERTOR & TRANSMISSION
                                </td>
                            </tr>
                            <!-- Oil Pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="7">
                                    Oil Pressure
                                </td>
                                <td colspan="2" class="align-middle">
                                    Inlet oil pressure
                                </td>
                                <td class="align-middle text-center" rowspan="7">Kg/cm2</td>
                                <td colspan="2" class="text-center">Max. 8.67</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('oil_inlet') ?>" name="oil_inlet" size="5">
                                    <?= form_error('oil_inlet', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('oil_inlet_remark') ?>" name="oil_inlet_remark" size="5">
                                    <?= form_error('oil_inlet_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle" rowspan="2">
                                    Outlet oil pressure
                                </td>
                                <td class="align-middle">
                                    brake is ON
                                </td>
                                <td colspan="2" class="text-center">4.59 - 5.41 </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('oil_outlet_on') ?>" name="oil_outlet_on" size="5">
                                    <?= form_error('oil_outlet_on', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('oil_outlet_on_remark') ?>" name="oil_outlet_on_remark" size="5">
                                    <?= form_error('oil_outlet_on_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td class="align-middle">
                                    brake is OFF
                                </td>
                                <td colspan="2" class="text-center">4.59 - 6.01 </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('oil_outlet_off') ?>" name="oil_outlet_off" size="5">
                                    <?= form_error('oil_outlet_off', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('oil_outlet_off_remark') ?>" name="oil_outlet_off_remark" size="5">
                                    <?= form_error('oil_outlet_off_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 4 -->
                            <tr>
                                <td class="align-middle" colspan="2">
                                    Lockup operating pressure
                                </td>
                                <td colspan="2" class="text-center">13.5 - 17.5 </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('oil_lockup') ?>" name="oil_lockup" size="5">
                                    <?= form_error('oil_lockup', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('oil_lockup_remark') ?>" name="oil_lockup_remark" size="5">
                                    <?= form_error('oil_lockup_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 5 -->
                            <tr>
                                <td class="align-middle" rowspan="2">
                                    Main relief valve
                                </td>
                                <td class="align-middle">
                                    N, F1 - F3
                                </td>
                                <td colspan="2" class="text-center">34.0 - 38.0</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('oil_main_f1') ?>" name="oil_main_f1" size="5">
                                    <?= form_error('oil_main_f1', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('oil_main_f1_remark') ?>" name="oil_main_f1_remark" size="5">
                                    <?= form_error('oil_main_f1_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 6 -->
                            <tr>
                                <td class="align-middle">
                                    F4 - F7
                                </td>
                                <td colspan="2" class="text-center">20.0 - 24.0 </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('oil_main_f4') ?>" name="oil_main_f4" size="5">
                                    <?= form_error('oil_main_f4', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('oil_main_f4_remark') ?>" name="oil_main_f4_remark" size="5">
                                    <?= form_error('oil_main_f4_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 7 -->
                            <tr>
                                <td class="align-middle" colspan="2">
                                    Transmission lubricating
                                </td>
                                <td colspan="2" class="text-center">1.2 - 2.2 </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('oil_transmission') ?>" name="oil_transmission" size="5">
                                    <?= form_error('oil_transmission', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('oil_transmission_remark') ?>" name="oil_transmission_remark" size="5">
                                    <?= form_error('oil_transmission_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                                    STEERING
                                </td>
                            </tr>

                            <!-- Turn Time -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">
                                    Turn Time
                                </td>
                                <td class="align-middle" rowspan="2">
                                    Lock ----> Lock
                                </td>
                                <td class="align-middle">
                                    Right to Left
                                </td>
                                <td class="align-middle text-center" rowspan="2">
                                    Sec.
                                </td>
                                <td rowspan="2" class="text-center align-middle ">Max. 4</td>
                                <td rowspan="2" class="text-center align-middle ">Max. 5</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('turn_time_rl') ?>" name="turn_time_rl" size="5">
                                    <?= form_error('turn_time_rl', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('turn_time_rl_remark') ?>" name="turn_time_rl_remark" size="5">
                                    <?= form_error('turn_time_rl_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle">
                                    Left to Right
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('turn_time_lr') ?>" name="turn_time_lr" size="5">
                                    <?= form_error('turn_time_lr', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('turn_time_lr_remark') ?>" name="turn_time_lr_remark" size="5">
                                    <?= form_error('turn_time_lr_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Steering Relieve press. -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">
                                    Steering Relieve press.
                                </td>
                                <td class="align-middle" colspan="2">
                                    Low idle (650 rpm)
                                </td>
                                <td class="align-middle text-center" rowspan="2">
                                    Kg/cm2
                                </td>
                                <td colspan="2" class="text-center align-middle ">185 - 195</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('steering_low') ?>" name="steering_low" size="5">
                                    <?= form_error('steering_low', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('steering_low_remark') ?>" name="steering_low_remark" size="5">
                                    <?= form_error('steering_low_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle" colspan="2">
                                    Rated speed (1,900 rpm)
                                </td>
                                <td colspan="2" class="text-center align-middle ">206 - 215</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('steering_rated') ?>" name="steering_rated" size="5">
                                    <?= form_error('steering_rated', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('steering_rated_remark') ?>" name="steering_rated_remark" size="5">
                                    <?= form_error('steering_rated_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                                    BRAKE
                                </td>
                            </tr>

                            <!-- Brake oil pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">
                                    Brake oil pressure
                                </td>
                                <td class="align-middle">
                                    Service brake
                                </td>
                                <td class="align-middle text-center" rowspan="2">
                                    1st oprt after charge accmltr
                                </td>
                                <td class="align-middle text-center" rowspan="4">
                                    Kg/cm2.
                                </td>
                                <td colspan="2" class="text-center align-middle ">93 - 107</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('brake_oil_service') ?>" name="brake_oil_service" size="5">
                                    <?= form_error('brake_oil_service', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('brake_oil_service_remark') ?>" name="brake_oil_service_remark" size="5">
                                    <?= form_error('brake_oil_service_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle">
                                    Retarder
                                </td>
                                <td colspan="2" class="text-center align-middle ">59 - 72</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('brake_oil_retarder') ?>" name="brake_oil_retarder" size="5">
                                    <?= form_error('brake_oil_retarder', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('brake_oil_retarder_remark') ?>" name="brake_oil_retarder_remark" size="5">
                                    <?= form_error('brake_oil_retarder_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Charge valve set pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">
                                    Charge valve set pressure
                                </td>
                                <td class="align-middle">
                                    Cut-in
                                </td>
                                <td class="align-middle text-center" rowspan="2">
                                    Engine full throttle
                                </td>
                                <td colspan="2" class="text-center align-middle ">120 - 130</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('charge_cutin') ?>" name="charge_cutin" size="5">
                                    <?= form_error('charge_cutin', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('charge_cutin_remark') ?>" name="charge_cutin_remark" size="5">
                                    <?= form_error('charge_cutin_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle">
                                    Cut-out
                                </td>
                                <td colspan="2" class="text-center align-middle ">210 - 220</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('charge_cutout') ?>" name="charge_cutout" size="5">
                                    <?= form_error('charge_cutout', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('charge_cutout_remark') ?>" name="charge_cutout_remark" size="5">
                                    <?= form_error('charge_cutout_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Service -->
                            <tr>
                                <td class="align-middle">
                                    Service
                                </td>
                                <td class="align-middle" rowspan="4" colspan="2">
                                    When brake is applied and engine speed in increased gradually in gear speed F2, machine must not start at speed shown in table.
                                </td>
                                <td class="align-middle text-center" rowspan="4">
                                    Rpm
                                </td>
                                <td class="text-center align-middle ">1760</td>
                                <td class="text-center align-middle ">1570</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('service') ?>" name="service" size="5">
                                    <?= form_error('service', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('service_remark') ?>" name="service_remark" size="5">
                                    <?= form_error('service_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Retarder -->
                            <tr>
                                <td class="align-middle">
                                    Retarder
                                </td>
                                <td class="text-center align-middle ">1345</td>
                                <td class="text-center align-middle ">1200</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('retarder') ?>" name="retarder" size="5">
                                    <?= form_error('retarder', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('retarder_remark') ?>" name="retarder_remark" size="5">
                                    <?= form_error('retarder_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Parking -->
                            <tr>
                                <td class="align-middle">
                                    Parking
                                </td>
                                <td class="text-center align-middle ">1610</td>
                                <td class="text-center align-middle ">1610</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('parking') ?>" name="parking" size="5">
                                    <?= form_error('parking', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('parking_remark') ?>" name="parking_remark" size="5">
                                    <?= form_error('parking_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Emergency -->
                            <tr>
                                <td class="align-middle">
                                    Emergency
                                </td>
                                <td colspan="2" class="text-center align-middle ">T/C stall speed</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('emergency') ?>" name="emergency" size="5">
                                    <?= form_error('emergency', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('emergency_remark') ?>" name="emergency_remark" size="5">
                                    <?= form_error('emergency_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>


                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                                    HYDRAULIC
                                </td>
                            </tr>

                            <!-- Hyd. Oil Temp. -->
                            <tr>
                                <td class="align-middle">
                                    Hyd. Oil Temp.
                                </td>
                                <td class="align-middle" colspan="2">
                                    50 - 80
                                </td>
                                <td class="align-middle text-center">
                                    ° C
                                </td>
                                <td colspan="2" class="text-center align-middle ">-</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('oil_temp') ?>" name="oil_temp" size="5">
                                    <?= form_error('oil_temp', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('oil_temp_remark') ?>" name="oil_temp_remark" size="5">
                                    <?= form_error('oil_temp_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Hoist Relief Press. -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">
                                    Hoist Relief Press.
                                </td>
                                <td class="align-middle" colspan="2">
                                    Rated speed (1,900 rpm)
                                </td>
                                <td class="align-middle text-center" rowspan="4">
                                    Kg/cm2
                                </td>
                                <td colspan="2" class="text-center align-middle ">206 - 215</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('hoist_relief_rated') ?>" name="hoist_relief_rated" size="5">
                                    <?= form_error('hoist_relief_rated', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('hoist_relief_rated_remark') ?>" name="hoist_relief_rated_remark" size="5">
                                    <?= form_error('hoist_relief_rated_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle" colspan="2">
                                    Low idle (650 rpm)
                                </td>
                                <td colspan="2" class="text-center align-middle ">185 - 195</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('hoist_relief_low') ?>" name="hoist_relief_low" size="5">
                                    <?= form_error('hoist_relief_low', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('hoist_relief_low_remark') ?>" name="hoist_relief_low_remark" size="5">
                                    <?= form_error('hoist_relief_low_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Dump EPC valve basic pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">
                                    Dump EPC valve basic pressure
                                </td>
                                <td class="align-middle" colspan="2">
                                    High idle (2,250 rpm)
                                </td>
                                <td colspan="2" class="text-center align-middle ">30 - 40</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('dump_epc_high') ?>" name="dump_epc_high" size="5">
                                    <?= form_error('dump_epc_high', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('dump_epc_high_remark') ?>" name="dump_epc_high_remark" size="5">
                                    <?= form_error('dump_epc_high_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle" colspan="2">
                                    Low idle (650 rpm)
                                </td>
                                <td colspan="2" class="text-center align-middle ">22 - 32</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('dump_epc_low') ?>" name="dump_epc_low" size="5">
                                    <?= form_error('dump_epc_low', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('dump_epc_low_remark') ?>" name="dump_epc_low_remark" size="5">
                                    <?= form_error('dump_epc_low_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Dump raising speed -->
                            <tr>
                                <td class="align-middle">
                                    Dump raising speed
                                </td>
                                <td class="align-middle" colspan="2">
                                    Rated speed (1,900 rpm)
                                </td>
                                <td class="align-middle text-center" rowspan="2">
                                    Sec.
                                </td>
                                <td colspan="2" class="text-center align-middle ">11.5 - 14.5</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('dump_raising_speed') ?>" name="dump_raising_speed" size="5">
                                    <?= form_error('dump_raising_speed', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('dump_raising_speed_remark') ?>" name="dump_raising_speed_remark" size="5">
                                    <?= form_error('dump_raising_speed_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Dump lowering speed -->
                            <tr>
                                <td class="align-middle">
                                    Dump lowering speed
                                </td>
                                <td class="align-middle" colspan="2">
                                    Low idle (650 rpm), dump lever float position
                                </td>
                                <td colspan="2" class="text-center align-middle ">12.5 - 15.5 </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('dump_lowering_speed') ?>" name="dump_lowering_speed" size="5">
                                    <?= form_error('dump_lowering_speed', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('dump_lowering_speed_remark') ?>" name="dump_lowering_speed_remark" size="5">
                                    <?= form_error('dump_lowering_speed_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Hyd. Drift -->
                            <tr>
                                <td class="align-middle">
                                    Hyd. Drift
                                </td>
                                <td class="align-middle" colspan="2">
                                    Set With No. 2 Cylinder Extended 200 mm, Then Stop The Engine !
                                </td>
                                <td class="align-middle text-center">
                                    mm / 5 min.
                                </td>
                                <td class="text-center align-middle ">Max. 85</td>
                                <td class="text-center align-middle ">Max. 170</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('hyd_drift') ?>" name="hyd_drift" size="5">
                                    <?= form_error('hyd_drift', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('hyd_drift_remark') ?>" name="hyd_drift_remark" size="5">
                                    <?= form_error('hyd_drift_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                                    SUSPENSION
                                </td>
                            </tr>

                            <!-- Left front -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">
                                    Left front
                                </td>
                                <td class="align-middle" colspan="2">
                                    Suspension cylinder length
                                </td>
                                <td class="align-middle text-center">
                                    mm
                                </td>
                                <td class="text-center align-middle ">237 - 257</td>
                                <td class="text-center align-middle ">227 - 267</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('left_front_susp') ?>" name="left_front_susp" size="5">
                                    <?= form_error('left_front_susp', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('left_front_susp_remark') ?>" name="left_front_susp_remark" size="5">
                                    <?= form_error('left_front_susp_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle" colspan="2">
                                    Oil, gas leakage
                                </td>
                                <td class="align-middle text-center">
                                    -
                                </td>
                                <td colspan="2" class="text-center align-middle ">There must be no leakage</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('left_front_oil') ?>" name="left_front_oil" size="5">
                                    <?= form_error('left_front_oil', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('left_front_oil_remark') ?>" name="left_front_oil_remark" size="5">
                                    <?= form_error('left_front_oil_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Right front -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">
                                    Right front
                                </td>
                                <td class="align-middle" colspan="2">
                                    Suspension cylinder length
                                </td>
                                <td class="align-middle text-center">
                                    mm
                                </td>
                                <td class="text-center align-middle ">237 - 257</td>
                                <td class="text-center align-middle ">227 - 267</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('right_front_susp') ?>" name="right_front_susp" size="5">
                                    <?= form_error('right_front_susp', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('right_front_susp_remark') ?>" name="right_front_susp_remark" size="5">
                                    <?= form_error('right_front_susp_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle" colspan="2">
                                    Oil, gas leakage
                                </td>
                                <td class="align-middle text-center">
                                    -
                                </td>
                                <td colspan="2" class="text-center align-middle ">There must be no leakage</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('right_front_oil') ?>" name="right_front_oil" size="5">
                                    <?= form_error('right_front_oil', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('right_front_oil_remark') ?>" name="right_front_oil_remark" size="5">
                                    <?= form_error('right_front_oil_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Left rear -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">
                                    Left rear
                                </td>
                                <td class="align-middle" colspan="2">
                                    Suspension cylinder length
                                </td>
                                <td class="align-middle text-center">
                                    mm
                                </td>
                                <td class="text-center align-middle ">189 - 209</td>
                                <td class="text-center align-middle ">179 - 219</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('left_rear_susp') ?>" name="left_rear_susp" size="5">
                                    <?= form_error('left_rear_susp', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('left_rear_susp_remark') ?>" name="left_rear_susp_remark" size="5">
                                    <?= form_error('left_rear_susp_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle" colspan="2">
                                    Oil, gas leakage
                                </td>
                                <td class="align-middle text-center">
                                    -
                                </td>
                                <td colspan="2" class="text-center align-middle ">There must be no leakage</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('left_rear_oil') ?>" name="left_rear_oil" size="5">
                                    <?= form_error('left_rear_oil', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('left_rear_oil_remark') ?>" name="left_rear_oil_remark" size="5">
                                    <?= form_error('left_rear_oil_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Right rear -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">
                                    Right rear
                                </td>
                                <td class="align-middle" colspan="2">
                                    Suspension cylinder length
                                </td>
                                <td class="align-middle text-center">
                                    mm
                                </td>
                                <td class="text-center align-middle ">189 - 209</td>
                                <td class="text-center align-middle ">179 - 219</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('right_rear_susp') ?>" name="right_rear_susp" size="5">
                                    <?= form_error('right_rear_susp', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('right_rear_susp_remark') ?>" name="right_rear_susp_remark" size="5">
                                    <?= form_error('right_rear_susp_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle" colspan="2">
                                    Oil, gas leakage
                                </td>
                                <td class="align-middle text-center">
                                    -
                                </td>
                                <td colspan="2" class="text-center align-middle ">There must be no leakage</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('right_rear_oil') ?>" name="right_rear_oil" size="5">
                                    <?= form_error('right_rear_oil', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('right_rear_oil_remark') ?>" name="right_rear_oil_remark" size="5">
                                    <?= form_error('right_rear_oil_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- DIFFERENTIAL & FINAL DRIVE -->
                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                                    DIFFERENTIAL & FINAL DRIVE
                                </td>
                            </tr>
                            <!-- Diff. Drain Plug -->
                            <tr>
                                <td>Diff. Drain Plug</td>
                                <td class="align-middle text-center" rowspan="3">Visual Check</td>
                                <td></td>
                                <td class="align-middle text-center" colspan="3" rowspan="3">No excessive metalic powder</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('diff_drain') ?>" name="diff_drain" size="5">
                                    <?= form_error('diff_drain', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('diff_drain_remark') ?>" name="diff_drain_remark" size="5">
                                    <?= form_error('diff_drain_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Final Drive Drain Plug Check -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Final Drive Drain Plug Check</td>
                                <td>L/H</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('final_drive_lh') ?>" name="final_drive_lh" size="5">
                                    <?= form_error('final_drive_lh', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('final_drive_lh_remark') ?>" name="final_drive_lh_remark" size="5">
                                    <?= form_error('final_drive_lh_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>R/H</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('final_drive_rh') ?>" name="final_drive_rh" size="5">
                                    <?= form_error('final_drive_rh', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('final_drive_rh_remark') ?>" name="final_drive_rh_remark" size="5">
                                    <?= form_error('final_drive_rh_remark', '<small class="text-danger">', '</small>') ?>
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
                                    <input type="text" class="form-control no-border" value="<?= set_value('instrument_panel') ?>" name="instrument_panel" size="5">
                                    <?= form_error('instrument_panel', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('instrument_panel_remark') ?>" name="instrument_panel_remark" size="5">
                                    <?= form_error('instrument_panel_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Starting system -->
                            <tr>
                                <td>Starting system</td>
                                <td colspan="2">Condition and function</td>
                                <td colspan="3">Good installation and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('starting_system') ?>" name="starting_system" size="5">
                                    <?= form_error('starting_system', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('starting_system_remark') ?>" name="starting_system_remark" size="5">
                                    <?= form_error('starting_system_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Chargin System -->
                            <tr>
                                <td>Chargin System</td>
                                <td colspan="2">Condition and function</td>
                                <td colspan="3">Good installation and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('charging_system') ?>" name="charging_system" size="5">
                                    <?= form_error('charging_system', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('charging_system_remark') ?>" name="charging_system_remark" size="5">
                                    <?= form_error('charging_system_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Lighting -->
                            <tr>
                                <td>Lighting</td>
                                <td colspan="2">Condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('lighting') ?>" name="lighting" size="5">
                                    <?= form_error('lighting', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('lighting_remark') ?>" name="lighting_remark" size="5">
                                    <?= form_error('lighting_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Battery -->
                            <tr>
                                <td>Battery</td>
                                <td colspan="2">Condition, electrolite level, specific grafity and load test. </td>
                                <td colspan="3">Good condition</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('battery') ?>" name="battery" size="5">
                                    <?= form_error('battery', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('battery_remark') ?>" name="battery_remark" size="5">
                                    <?= form_error('battery_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Wiring harness -->
                            <tr>
                                <td>Wiring harness</td>
                                <td colspan="2">Condition, connection, clamping</td>
                                <td colspan="3">Good installation and condition</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('wiring_harness') ?>" name="wiring_harness" size="5">
                                    <?= form_error('wiring_harness', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('wiring_harness_remark') ?>" name="wiring_harness_remark" size="5">
                                    <?= form_error('wiring_harness_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- VHMS/Komtrak -->
                            <tr>
                                <td>VHMS/Komtrak</td>
                                <td colspan="2">Condition and function</td>
                                <td colspan="3">Good condition and function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('vhms_komtrak') ?>" name="vhms_komtrak" size="5">
                                    <?= form_error('vhms_komtrak', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('vhms_komtrak_remark') ?>" name="vhms_komtrak_remark" size="5">
                                    <?= form_error('vhms_komtrak_remark', '<small class="text-danger">', '</small>') ?>
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
                                    <input type="text" class="form-control no-border" value="<?= set_value('emergency_shutdown') ?>" name="emergency_shutdown" size="5">
                                    <?= form_error('emergency_shutdown', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('emergency_shutdown_remark') ?>" name="emergency_shutdown_remark" size="5">
                                    <?= form_error('emergency_shutdown_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Logout Switch -->
                            <tr>
                                <td>Logout Switch</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('logout_switch') ?>" name="logout_switch" size="5">
                                    <?= form_error('logout_switch', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('logout_switch_remark') ?>" name="logout_switch_remark" size="5">
                                    <?= form_error('logout_switch_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- PDU -->
                            <tr>
                                <td>PDU</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('pdu') ?>" name="pdu" size="5">
                                    <?= form_error('pdu', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('pdu_remark') ?>" name="pdu_remark" size="5">
                                    <?= form_error('pdu_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Autolube -->
                            <tr>
                                <td>Autolube</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('autolube') ?>" name="autolube" size="5">
                                    <?= form_error('autolube', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('autolube_remark') ?>" name="autolube_remark" size="5">
                                    <?= form_error('autolube_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Fire suppression -->
                            <tr>
                                <td>Fire suppression</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('fire_suppression') ?>" name="fire_suppression" size="5">
                                    <?= form_error('fire_suppression', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('fire_suppression_remark') ?>" name="fire_suppression_remark" size="5">
                                    <?= form_error('fire_suppression_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Fatique warning -->
                            <tr>
                                <td>Fatique warning</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('fatique_warning') ?>" name="fatique_warning" size="5">
                                    <?= form_error('fatique_warning', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('fatique_warning_remark') ?>" name="fatique_warning_remark" size="5">
                                    <?= form_error('fatique_warning_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Backup alarm -->
                            <tr>
                                <td>Backup alarm</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('backup_alarm') ?>" name="backup_alarm" size="5">
                                    <?= form_error('backup_alarm', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('backup_alarm_remark') ?>" name="backup_alarm_remark" size="5">
                                    <?= form_error('backup_alarm_remark', '<small class="text-danger">', '</small>') ?>
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
                                    <input type="text" class="form-control no-border" value="<?= set_value('attachment_frame') ?>" name="attachment_frame" size="5">
                                    <?= form_error('attachment_frame', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('attachment_frame_remark') ?>" name="attachment_frame_remark" size="5">
                                    <?= form_error('attachment_frame_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Machine -->
                            <tr>
                                <td>Machine</td>
                                <td colspan="2">Cleaness, wear, completeness and condition</td>
                                <td colspan="3">Complete and normal condition</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('machine') ?>" name="machine" size="5">
                                    <?= form_error('machine', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('machine_remark') ?>" name="machine_remark" size="5">
                                    <?= form_error('machine_remark', '<small class="text-danger">', '</small>') ?>
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
