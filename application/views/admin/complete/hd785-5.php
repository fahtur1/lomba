<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">UPDATE <?= $unit ?> / <?= $ps ?></h1>
    </div>

    <form action="<?= base_url("admin/home/update_plan/$unit/$ps/$plan") ?>" method="post">
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
                    <input type="text" class="form-control" id="codeunit" value="<?= $unit ?>" name="codeunit" disabled>
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
                                <th style="width: 20%;">ITEM</th>
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
                                <td class="align-middle" rowspan="6">
                                    Engine Speed
                                </td>
                                <td colspan="2" class="align-middle">
                                    Low Idling, Low
                                </td>
                                <td class="align-middle text-center" rowspan="6">Rpm</td>
                                <td colspan="2" class="text-center">625 - 675</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_low') ?>" name="engine_low" size="5">
                                    <?= form_error('engine_low', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_low_remark') ?>" name="engine_low_remark" size="5">
                                    <?= form_error('engine_low_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">
                                    Low Idling, Hi
                                </td>
                                <td class="text-center" colspan="2">970 - 1030</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_hi') ?>" name="engine_hi" size="5">
                                    <?= form_error('engine_hi', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_hi_remark') ?>" name="engine_hi_remark" size="5">
                                    <?= form_error('engine_hi_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td colspan="2">
                                    Power Mode High Idling
                                </td>
                                <td class="text-center" colspan="2">2300 - 2400</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_power') ?>" name="engine_power" size="5">
                                    <?= form_error('engine_power', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_power_remark') ?>" name="engine_power_remark" size="5">
                                    <?= form_error('engine_power_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 4 -->
                            <tr>
                                <td colspan="2">
                                    Economy Mode High Idling
                                </td>
                                <td class="text-center" colspan="2">2250 - 2350</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_eco') ?>" name="engine_eco" size="5">
                                    <?= form_error('engine_eco', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_eco_remark') ?>" name="engine_eco_remark" size="5">
                                    <?= form_error('engine_eco_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 5 -->
                            <tr>
                                <td rowspan="2" class="align-middle text-center">
                                    Power Mode T/C Stall
                                </td>
                                <td class="text-center">High power mode</td>
                                <td class="text-center" colspan="2">
                                    1940-2140 (sn. 4001-4187)<br>
                                    1790-1990 (sn. 4188 - up)
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_power_high') ?>" name="engine_power_high" size="5">
                                    <?= form_error('engine_power_high', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_power_high_remark') ?>" name="engine_power_high_remark" size="5">
                                    <?= form_error('engine_power_high_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 6 -->
                            <tr>
                                <td class="text-center">Economy mode</td>
                                <td class="text-center" colspan="2">
                                    1850-2050 (sn. 4001-4187) <br>
                                    1730-1930 (sn. 4188 - up)
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_power_eco') ?>" name="engine_power_eco" size="5">
                                    <?= form_error('engine_power_eco', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_power_eco_remark') ?>" name="engine_power_eco_remark" size="5">
                                    <?= form_error('engine_power_eco_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Blow-by Press -->
                            <!-- row 1 -->
                            <tr>
                                <td>Blow-by Press</td>
                                <td colspan="2">Power Mode T/C Stall</td>
                                <td class="align-middle text-center">mmAq</td>
                                <td>Max. 150</td>
                                <td>Max. 300</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('blow_power') ?>" name="blow_power" size="5">
                                    <?= form_error('blow_power', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('blow_power_remark') ?>" name="blow_power_remark" size="5">
                                    <?= form_error('blow_power_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Lub Oil -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Lub Oil Press.</td>
                                <td colspan="2">Power mode High Idling</td>
                                <td class="align-middle text-center" rowspan="2">Kg/cm2</td>
                                <td>3.0 - 4.0</td>
                                <td>Min 2.1</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('lub_power') ?>" name="lub_power" size="5">
                                    <?= form_error('lub_power', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('lub_power_remark') ?>" name="lub_power_remark" size="5">
                                    <?= form_error('lub_power_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2" class="align-middle">Low Idling, Low</td>
                                <td>Min. 1</td>
                                <td>Min. 0.7</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('lub_low') ?>" name="lub_low" size="5">
                                    <?= form_error('lub_low', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('lub_low_remark') ?>" name="lub_low_remark" size="5">
                                    <?= form_error('lub_low_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Boost Press -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Boost Press.</td>
                                <td class="align-middle" rowspan="2">T/C Stall</td>
                                <td>RH</td>
                                <td class="align-middle text-center" rowspan="2">mmHg</td>
                                <td class="align-middle text-center" rowspan="2">Min. 950</td>
                                <td class="align-middle text-center" rowspan="2">Min. 850</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('boost_stall_rh') ?>" name="boost_stall_rh" size="5">
                                    <?= form_error('boost_stall_rh', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('boost_stall_rh_remark') ?>" name="boost_stall_rh_remark" size="5">
                                    <?= form_error('boost_stall_rh_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <tr>
                                <td>LH</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('boost_stall_lh') ?>" name="boost_stall_lh" size="5">
                                    <?= form_error('boost_stall_lh', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('boost_stall_lh_remark') ?>" name="boost_stall_lh_remark" size="5">
                                    <?= form_error('boost_stall_lh_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Exhaust Gas Temp -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="3">Exhaust Gas Temp.</td>
                                <td class="align-middle" colspan="2">Ambient Temp.</td>
                                <td class="align-middle text-center" rowspan=" 3">°C</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('exhaust_ambient') ?>" name="exhaust_ambient" size="5">
                                    <?= form_error('exhaust_ambient', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('exhaust_ambient_remark') ?>" name="exhaust_ambient_remark" size="5">
                                    <?= form_error('exhaust_ambient_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle" rowspan="2">T/C Stall</td>
                                <td>RH</td>
                                <td class="align-middle text-center" rowspan="2">Max. 650</td>
                                <td class="align-middle text-center" rowspan="2">Max. 700</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('exhaust_stall_rh') ?>" name="exhaust_stall_rh" size="5">
                                    <?= form_error('exhaust_stall_rh', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('exhaust_stall_rh_remark') ?>" name="exhaust_stall_rh_remark" size="5">
                                    <?= form_error('exhaust_stall_rh_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td>LH</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('exhaust_stall_lh') ?>" name="exhaust_stall_lh" size="5">
                                    <?= form_error('exhaust_stall_lh', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('exhaust_stall_lh_remark') ?>" name="exhaust_stall_lh_remark" size="5">
                                    <?= form_error('exhaust_stall_lh_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- TORQUE CONVERTOR & TRANSMISSION -->
                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                                    TORQUE CONVERTOR & TRANSMISSION
                                </td>
                            </tr>
                            <!-- Inlet oil pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Inlet oil pressure</td>
                                <td colspan="2">High idling</td>
                                <td rowspan="9" class="align-middle text-center">Kg/cm2</td>
                                <td colspan="2" class="text-center">7 - 9</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('inlet_high') ?>" name="inlet_high" size="5">
                                    <?= form_error('inlet_high', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('inlet_high_remark') ?>" name="inlet_high_remark" size="5">
                                    <?= form_error('inlet_high_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Low idling</td>
                                <td colspan="2" class="text-center">0.8 - 1.8</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('inlet_low') ?>" name="inlet_low" size="5">
                                    <?= form_error('inlet_low', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('inlet_low_remark') ?>" name="inlet_low_remark" size="5">
                                    <?= form_error('inlet_low_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Outlet oil pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Outlet oil pressure</td>
                                <td colspan="2">High idling</td>
                                <td colspan="2" class="text-center">3 - 5</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('outlet_high') ?>" name="outlet_high" size="5">
                                    <?= form_error('outlet_high', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('outlet_high_remark') ?>" name="outlet_high_remark" size="5">
                                    <?= form_error('outlet_high_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Low idling</td>
                                <td colspan="2" class="text-center">0.5 - 1.5</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('outlet_low') ?>" name="outlet_low" size="5">
                                    <?= form_error('outlet_low', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('outlet_low_remark') ?>" name="outlet_low_remark" size="5">
                                    <?= form_error('outlet_low_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Lock-up oil pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Lock-up oil pressure</td>
                                <td colspan="2">High idling</td>
                                <td colspan="2" class="text-center">15.5 - 16.5</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('lock_high') ?>" name="lock_high" size="5">
                                    <?= form_error('lock_high', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('lock_high_remark') ?>" name="lock_high_remark" size="5">
                                    <?= form_error('lock_high_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Low idling</td>
                                <td colspan="2" class="text-center">15.5 - 16.5</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('lock_low') ?>" name="lock_low" size="5">
                                    <?= form_error('lock_low', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('lock_low_remark') ?>" name="lock_low_remark" size="5">
                                    <?= form_error('lock_low_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Lubricating oil pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td>Lubricating oil pressure</td>
                                <td colspan="2">Engine full throttle</td>
                                <td colspan="2" class="text-center">0.75 - 1.75</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('lubricating_full') ?>" name="lubricating_full" size="5">
                                    <?= form_error('lubricating_full', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('lubricating_full_remark') ?>" name="lubricating_full_remark" size="5">
                                    <?= form_error('lubricating_full_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Main Relieve Pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Main Relieve Pressure</td>
                                <td colspan="2">Low Idling, Low T/M in N </td>
                                <td colspan="2" class="text-center">32.5 - 36.5</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('main_relieve_low') ?>" name="main_relieve_low" size="5">
                                    <?= form_error('main_relieve_low', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('main_relieve_low_remark') ?>" name="main_relieve_low_remark" size="5">
                                    <?= form_error('main_relieve_low_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Power Mode High Idling, T/M in N </td>
                                <td colspan="2" class="text-center">37.0 - 41.0</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('main_relieve_power') ?>" name="main_relieve_power" size="5">
                                    <?= form_error('main_relieve_power', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('main_relieve_power_remark') ?>" name="main_relieve_power_remark" size="5">
                                    <?= form_error('main_relieve_power_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- STEERING -->
                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                                    STEERING
                                </td>
                            </tr>
                            <!-- Steering time, lock to lock -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Steering time, lock to lock</td>
                                <td rowspan="2">Low idle, Hi</td>
                                <td>Right to Left</td>
                                <td rowspan="2" class="align-middle text-center">Sec.</td>
                                <td rowspan="2" class="align-middle text-center">Max 4.</td>
                                <td rowspan="2" class="align-middle text-center">Max 5.</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('steering_time_rl') ?>" name="steering_time_rl" size="5">
                                    <?= form_error('steering_time_rl', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('steering_time_rl_remark') ?>" name="steering_time_rl_remark" size="5">
                                    <?= form_error('steering_time_rl_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Left to Right</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('steering_time_lr') ?>" name="steering_time_lr" size="5">
                                    <?= form_error('steering_time_lr', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('steering_time_lr_remark') ?>" name="steering_time_lr_remark" size="5">
                                    <?= form_error('steering_time_lr_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Steering Relieve Press. -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Steering Relieve Press.</td>
                                <td colspan="2">Low idle, Low</td>
                                <td rowspan="2" class="align-middle text-center">Kg/cm2.</td>
                                <td colspan="2" class="text-center">185 - 195</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('steering_relieve_low') ?>" name="steering_relieve_low" size="5">
                                    <?= form_error('steering_relieve_low', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('steering_relieve_low_remark') ?>" name="steering_relieve_low_remark" size="5">
                                    <?= form_error('steering_relieve_low_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Power mode high idling </td>
                                <td class="text-center">210 - 225</td>
                                <td class="text-center">205 - 225</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('steering_relieve_power') ?>" name="steering_relieve_power" size="5">
                                    <?= form_error('steering_relieve_power', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('steering_relieve_power_remark') ?>" name="steering_relieve_power_remark" size="5">
                                    <?= form_error('steering_relieve_power_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- BRAKB -->
                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                                    BRAKB
                                </td>
                            </tr>
                            <!-- Air Governor Set Press. -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Air Governor Set Press.</td>
                                <td rowspan="2">Eng. High when unloaded</td>
                                <td>Cut in</td>
                                <td rowspan="2" class="align-middle text-center">Kg/cm2</td>
                                <td colspan="2" class="align-middle text-center">6.7 - 7.3</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('air_gov_cutin') ?>" name="air_gov_cutin" size="5">
                                    <?= form_error('air_gov_cutin', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('air_gov_cutin_remark') ?>" name="air_gov_cutin_remark" size="5">
                                    <?= form_error('air_gov_cutin_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td>Cut out</td>
                                <td colspan="2" class="align-middle text-center">8.0 - 8.6</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('air_gov_cutout') ?>" name="air_gov_cutout" size="5">
                                    <?= form_error('air_gov_cutout', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('air_gov_cutout_remark') ?>" name="air_gov_cutout_remark" size="5">
                                    <?= form_error('air_gov_cutout_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Service brake -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Service brake</td>
                                <td rowspan="8" colspan="2" class="align-middle text-center">Apply brake T/M in D, read engine speed when vehicle starts to move</td>
                                <td rowspan="8" class="align-middle text-center">Rpm</td>
                                <td colspan="2" class="align-middle text-center">Min 2000 (sn 4001-4187)</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('service_brake1') ?>" name="service_brake1" size="5">
                                    <?= form_error('service_brake1', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('service_brake1_remark') ?>" name="service_brake1_remark" size="5">
                                    <?= form_error('service_brake1_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td colspan="2" class="align-middle text-center">Min 1750 (sn 4188 and up)</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('service_brake2') ?>" name="service_brake2" size="5">
                                    <?= form_error('service_brake2', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('service_brake2_remark') ?>" name="service_brake2_remark" size="5">
                                    <?= form_error('service_brake2_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Retarder brake -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Retarder brake</td>
                                <td colspan="2" class="align-middle text-center">Min 1500 (sn 4001-4187)</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('retarder_brake1') ?>" name="retarder_brake1" size="5">
                                    <?= form_error('retarder_brake1', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('retarder_brake1_remark') ?>" name="retarder_brake1_remark" size="5">
                                    <?= form_error('retarder_brake1_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td colspan="2" class="align-middle text-center">Min 1300 (sn 4188 and up)</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('retarder_brake2') ?>" name="retarder_brake2" size="5">
                                    <?= form_error('retarder_brake2', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('retarder_brake2_remark') ?>" name="retarder_brake2_remark" size="5">
                                    <?= form_error('retarder_brake2_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Parking brake -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Parking brake</td>
                                <td colspan="2" class="align-middle text-center">Min 2040 (sn 4001-4187)</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('parking_brake1') ?>" name="parking_brake1" size="5">
                                    <?= form_error('parking_brake1', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('parking_brake1_remark') ?>" name="parking_brake1_remark" size="5">
                                    <?= form_error('parking_brake1_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td colspan="2" class="align-middle text-center">Min 1890 (sn 4188 and up)</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('parking_brake2') ?>" name="parking_brake2" size="5">
                                    <?= form_error('parking_brake2', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('parking_brake2_remark') ?>" name="parking_brake2_remark" size="5">
                                    <?= form_error('parking_brake2_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Emergency brake -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Emergency brake</td>
                                <td colspan="2" class="align-middle text-center">Min 2040 (sn 4001-4187)</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('emergency_brake1') ?>" name="emergency_brake1" size="5">
                                    <?= form_error('emergency_brake1', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('emergency_brake1_remark') ?>" name="emergency_brake1_remark" size="5">
                                    <?= form_error('emergency_brake1_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td colspan="2" class="align-middle text-center">Min 1890 (sn 4188 and up)</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('emergency_brake2') ?>" name="emergency_brake2" size="5">
                                    <?= form_error('emergency_brake2', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('emergency_brake2_remark') ?>" name="emergency_brake2_remark" size="5">
                                    <?= form_error('emergency_brake2_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Front brake (pad thickness) -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Front brake (pad thickness)</td>
                                <td colspan="2">Left</td>
                                <td rowspan="2" class="align-middle text-center">mm</td>
                                <td rowspan="2" class="align-middle text-center">19.5</td>
                                <td rowspan="2" class="align-middle text-center">3.0</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('front_brake_left') ?>" name="front_brake_left" size="5">
                                    <?= form_error('front_brake_left', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('front_brake_left_remark') ?>" name="front_brake_left_remark" size="5">
                                    <?= form_error('front_brake_left_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Right</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('front_brake_right') ?>" name="front_brake_right" size="5">
                                    <?= form_error('front_brake_right', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('front_brake_right_remark') ?>" name="front_brake_right_remark" size="5">
                                    <?= form_error('front_brake_right_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Rear brake (disc wear masurement gauge) -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Rear brake (disc wear masurement gauge)</td>
                                <td colspan="2">Left</td>
                                <td rowspan="2" class="align-middle text-center">mm</td>
                                <td rowspan="2" class="align-middle text-center">+ 8.9</td>
                                <td rowspan="2" class="align-middle text-center">Wear limit</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('rear_brake_left') ?>" name="rear_brake_left" size="5">
                                    <?= form_error('rear_brake_left', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('rear_brake_left_remark') ?>" name="rear_brake_left_remark" size="5">
                                    <?= form_error('rear_brake_left_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Right</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('rear_brake_right') ?>" name="rear_brake_right" size="5">
                                    <?= form_error('rear_brake_right', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('rear_brake_right_remark') ?>" name="rear_brake_right_remark" size="5">
                                    <?= form_error('rear_brake_right_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- HYDRAULIC EQUIPMENT -->
                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                                    HYDRAULIC EQUIPMENT
                                </td>
                            </tr>
                            <!-- Hyd. Oil Temp -->
                            <tr>
                                <td class="align-middle">Hyd. Oil Temp</td>
                                <td colspan="2"></td>
                                <td class="align-middle text-center">° C</td>
                                <td colspan="2" class="align-middle text-center">-</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('oil_temp') ?>" name="oil_temp" size="5">
                                    <?= form_error('oil_temp', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('oil_temp_remark') ?>" name="oil_temp_remark" size="5">
                                    <?= form_error('oil_temp_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Hoist Relieve Press. -->
                            <!-- row 1 -->
                            <tr>
                                <td rowspan="2" class="align-middle">Hoist Relieve Press.</td>
                                <td colspan="2">Low Idling Hi</td>
                                <td rowspan="2" class="align-middle text-center">Kg/cm2</td>
                                <td colspan="2" class="align-middle text-center">185 - 195</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('hoist_low') ?>" name="hoist_low" size="5">
                                    <?= form_error('hoist_low', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('hoist_low_remark') ?>" name="hoist_low_remark" size="5">
                                    <?= form_error('hoist_low_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Power Mode High Idling</td>
                                <td colspan="2" class="align-middle text-center">200 - 215</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('hoist_power') ?>" name="hoist_power" size="5">
                                    <?= form_error('hoist_power', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('hoist_power_remark') ?>" name="hoist_power_remark" size="5">
                                    <?= form_error('hoist_power_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Raising Speed -->
                            <tr>
                                <td class="align-middle">Raising Speed</td>
                                <td colspan="2">Power Mode High Idling</td>
                                <td class="align-middle text-center">Sec.</td>
                                <td colspan="2" class="align-middle text-center">11.5 - 14.5</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('raising_speed') ?>" name="raising_speed" size="5">
                                    <?= form_error('raising_speed', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('raising_speed_remark') ?>" name="raising_speed_remark" size="5">
                                    <?= form_error('raising_speed_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- Hyd. Drift -->
                            <tr>
                                <td class="align-middle">Hyd. Drift</td>
                                <td colspan="2">Set with no. 2 cylinder extended 200 mm, then stop the engine </td>
                                <td class="align-middle text-center">mm /5 min.</td>
                                <td class="align-middle text-center">Max. 85</td>
                                <td class="align-middle text-center">Max. 170</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('hydrolic_drift') ?>" name="hydrolic_drift" size="5">
                                    <?= form_error('hydrolic_drift', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('hydrolic_drift_remark') ?>" name="hydrolic_drift_remark" size="5">
                                    <?= form_error('hydrolic_drift_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>

                            <!-- SUSPENSION -->
                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                                    SUSPENSION
                                </td>
                            </tr>
                            <!-- Left Front -->
                            <!-- row 1 -->
                            <tr>
                                <td rowspan="2" class="align-middle">Left Front</td>
                                <td colspan="2">Suspension cylinder length</td>
                                <td class="align-middle text-center">mm</td>
                                <td class="align-middle text-center">252 - 272</td>
                                <td class="align-middle text-center">242 - 282</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('left_front_suspension') ?>" name="left_front_suspension" size="5">
                                    <?= form_error('left_front_suspension', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('left_front_suspension_remark') ?>" name="left_front_suspension_remark" size="5">
                                    <?= form_error('left_front_suspension_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Oil, gas leakage</td>
                                <td class="align-middle text-center">-</td>
                                <td colspan="2" class="align-middle text-center">There must be no leakage</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('left_front_oil') ?>" name="left_front_oil" size="5">
                                    <?= form_error('left_front_oil', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('left_front_oil_remark') ?>" name="left_front_oil_remark" size="5">
                                    <?= form_error('left_front_oil_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Right Front -->
                            <!-- row 1 -->
                            <tr>
                                <td rowspan="2" class="align-middle">Right Front</td>
                                <td colspan="2">Suspension cylinder length</td>
                                <td class="align-middle text-center">mm</td>
                                <td class="align-middle text-center">252 - 272</td>
                                <td class="align-middle text-center">242 - 282</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('right_front_suspension') ?>" name="right_front_suspension" size="5">
                                    <?= form_error('right_front_suspension', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('right_front_suspension_remark') ?>" name="right_front_suspension_remark" size="5">
                                    <?= form_error('right_front_suspension_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Oil, gas leakage</td>
                                <td class="align-middle text-center">-</td>
                                <td colspan="2" class="align-middle text-center">There must be no leakage</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('right_front_oil') ?>" name="right_front_oil" size="5">
                                    <?= form_error('right_front_oil', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('right_front_oil_remark') ?>" name="right_front_oil_remark" size="5">
                                    <?= form_error('right_front_oil_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Left Rear -->
                            <!-- row 1 -->
                            <tr>
                                <td rowspan="2" class="align-middle">Left Rear</td>
                                <td colspan="2">Suspension cylinder length</td>
                                <td class="align-middle text-center">mm</td>
                                <td class="align-middle text-center">230 - 250</td>
                                <td class="align-middle text-center">220 - 260</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('left_rear_suspension') ?>" name="left_rear_suspension" size="5">
                                    <?= form_error('left_rear_suspension', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('left_rear_suspension_remark') ?>" name="left_rear_suspension_remark" size="5">
                                    <?= form_error('left_rear_suspension_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Oil, gas leakage</td>
                                <td class="align-middle text-center">-</td>
                                <td colspan="2" class="align-middle text-center">There must be no leakage</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('left_rear_oil') ?>" name="left_rear_oil" size="5">
                                    <?= form_error('left_rear_oil', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('left_rear_oil_remark') ?>" name="left_rear_oil_remark" size="5">
                                    <?= form_error('left_rear_oil_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Right Rear -->
                            <!-- row 1 -->
                            <tr>
                                <td rowspan="2" class="align-middle">Right Rear</td>
                                <td colspan="2">Suspension cylinder length</td>
                                <td class="align-middle text-center">mm</td>
                                <td class="align-middle text-center">230 - 250</td>
                                <td class="align-middle text-center">220 - 260</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('right_rear_suspension') ?>" name="right_rear_suspension" size="5">
                                    <?= form_error('right_rear_suspension', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('right_rear_suspension_remark') ?>" name="right_rear_suspension_remark" size="5">
                                    <?= form_error('right_rear_suspension_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Oil, gas leakage</td>
                                <td class="align-middle text-center">-</td>
                                <td colspan="2" class="align-middle text-center">There must be no leakage</td>
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
                                <td class="align-middle">Diff. Drain Plug</td>
                                <td class="align-middle text-center" rowspan="3">Visual Check</td>
                                <td class="align-middle text-center">-</td>
                                <td rowspan="3" colspan="3" class="align-middle text-center">No excessive Metalic Powder </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('diff_drain') ?>" name="diff_drain" size="5">
                                    <?= form_error('diff_drain', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('diff_drain_remark') ?>" name="diff_drain_remark" size="5">
                                    <?= form_error('diff_drain_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- Final Drive Drain Plug -->
                            <!-- row 1 -->
                            <tr>
                                <td rowspan="2" class="align-middle">Final Drive Drain Plug</td>
                                <td class="align-middle text-center">L/H</td>
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
                                <td class="align-middle text-center">R/H</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('final_drive_rh') ?>" name="final_drive_rh" size="5">
                                    <?= form_error('final_drive_rh', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('site') ?>" name="final_drive_rh_remark" size="5">
                                    <?= form_error('site', '<small class="text-danger">', '</small>') ?>
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