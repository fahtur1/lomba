<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

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
                    <td colspan="2">Ardyyy </td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td colspan="2">Ardyyyuyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy </td>
                </tr>
                <tr>
                    <td>Code Unit</td>
                    <td colspan="2">Ardyyy </td>
                </tr>
                <tr>
                    <td class="font-weight-bold h4 text-center align-middle">PC2000-8</td>
                    <td class="font-weight-bold text-center align-middle">Branch / Site</td>
                    <td colspan="3">Tembilahan</td>
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
                                <input type="text" class="form-control no-border" value="<?= set_value('engine_low_idle') ?>" name="engine_low_idle" size="5">
                                <?= form_error('engine_low_idle', '<small class="text-danger">', '</small>') ?>
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" value="<?= set_value('engine_low_idle_remark') ?>" name="engine_low_idle_remark" size="5">
                                <?= form_error('engine_low_idle_remark', '<small class="text-danger">', '</small>') ?>
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td colspan="2">
                                Engine: High idle
                            </td>
                            <td class="text-center" colspan="2">1930 - 2030</td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" value="<?= set_value('engine_high_idle') ?>" name="engine_high_idle" size="5">
                                <?= form_error('engine_high_idle', '<small class="text-danger">', '</small>') ?>
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" value="<?= set_value('engine_high_idle_remark') ?>" name="engine_high_idle_remark" size="5">
                                <?= form_error('engine_high_idle_remark', '<small class="text-danger">', '</small>') ?>
                            </td>
                        </tr>
                        <!-- row 3 -->
                        <tr>
                            <td colspan="2">
                                Engine: Full throttle. Boom: raise relieve.
                            </td>
                            <td class="text-center" colspan="2">1680 - 1880</td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" value="<?= set_value('engine_full_throttle_raise') ?>" name="engine_full_throttle_raise" size="5">
                                <?= form_error('engine_full_throttle_raise', '<small class="text-danger">', '</small>') ?>
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" value="<?= set_value('engine_full_throttle_raise_remark') ?>" name="engine_full_throttle_raise_remark" size="5">
                                <?= form_error('engine_full_throttle_raise_remark', '<small class="text-danger">', '</small>') ?>
                            </td>
                        </tr>
                        <!-- row 4 -->
                        <tr>
                            <td colspan="2">
                                Engine: Full throttle. <br>Boom: raise relieve + Heavy lift : ON.
                            </td>
                            <td class="align-middle text-center" colspan="2">1680 - 1880</td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" value="<?= set_value('engine_full_throttle_heavy') ?>" name="engine_full_throttle_heavy" size="5">
                                <?= form_error('engine_full_throttle_heavy', '<small class="text-danger">', '</small>') ?>
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" value="<?= set_value('engine_full_throttle_heavy_remark') ?>" name="engine_full_throttle_heavy_remark" size="5">
                                <?= form_error('engine_full_throttle_heavy_remark', '<small class="text-danger">', '</small>') ?>
                            </td>
                        </tr>

                        <!-- row 6 -->
                        <tr>
                            <td colspan="2" class="align-middle text-center">
                                Auto decelaration switch: ON. Fuel control dial: Max. <br>Control Valve: neutral
                            </td>
                            <td class="align-middle text-center" colspan="2">1300 - 1500</td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" value="<?= set_value('engine_control_valve_neutral') ?>" name="engine_control_valve_neutral" size="5">
                                <?= form_error('engine_control_valve_neutral', '<small class="text-danger">', '</small>') ?>
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" value="<?= set_value('engine_control_valve_neutral_remark') ?>" name="engine_control_valve_neutral_remark" size="5">
                                <?= form_error('engine_control_valve_neutral_remark', '<small class="text-danger">', '</small>') ?>
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
                                <input type="text" class="form-control no-border" value="<?= set_value('blow_horsepower') ?>" name="blow_horsepower" size="5">
                                <?= form_error('blow_horsepower', '<small class="text-danger">', '</small>') ?>
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" value="<?= set_value('blow_horsepower_remark') ?>" name="blow_horsepower_remark" size="5">
                                <?= form_error('blow_horsepower_remark', '<small class="text-danger">', '</small>') ?>
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
                                <input type="text" class="form-control no-border" value="<?= set_value('oil_run_low_idle') ?>" name="oil_run_low_idle" size="5">
                                <?= form_error('oil_run_low_idle', '<small class="text-danger">', '</small>') ?>
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" value="<?= set_value('oil_run_low_idle_remark') ?>" name="oil_run_low_idle_remark" size="5">
                                <?= form_error('oil_run_low_idle_remark', '<small class="text-danger">', '</small>') ?>
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td colspan="2" class="align-middle">Run engine at high idle (SAE30)</td>
                            <td class="align-middle text-center">0.29 - 0.44 <br> { 3.0 - 4.5 }</td>
                            <td class="align-middle text-center">Min 0.2 <br> { Min 2.0 }</td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" value="<?= set_value('oil_run_high_idle') ?>" name="oil_run_high_idle" size="5">
                                <?= form_error('oil_run_high_idle', '<small class="text-danger">', '</small>') ?>
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" value="<?= set_value('oil_run_high_idle_remark') ?>" name="oil_run_high_idle_remark" size="5">
                                <?= form_error('oil_run_high_idle_remark', '<small class="text-danger">', '</small>') ?>
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
                                <input type="text" class="form-control no-border" value="<?= set_value('boost_horsepower') ?>" name="boost_horsepower" size="5">
                                <?= form_error('boost_horsepower', '<small class="text-danger">', '</small>') ?>
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" value="<?= set_value('boost_horsepower_remark') ?>" name="boost_horsepower_remark" size="5">
                                <?= form_error('boost_horsepower_remark', '<small class="text-danger">', '</small>') ?>
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
                                <input type="text" class="form-control no-border" value="<?= set_value('exhaust_speed_range') ?>" name="exhaust_speed_range" size="5">
                                <?= form_error('exhaust_speed_range', '<small class="text-danger">', '</small>') ?>
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" value="<?= set_value('exhaust_speed_range_remark') ?>" name="exhaust_speed_range_remark" size="5">
                                <?= form_error('exhaust_speed_range_remark', '<small class="text-danger">', '</small>') ?>
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td class="align-middle" colspan="2">Ambient temperature</td>
                            <td class="align-middle text-center">20</td>
                            <td class="align-middle text-center">20</td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" value="<?= set_value('exhaust_ambient_temp') ?>" name="exhaust_ambient_temp" size="5">
                                <?= form_error('exhaust_ambient_temp', '<small class="text-danger">', '</small>') ?>
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" value="<?= set_value('exhaust_ambient_temp_remark') ?>" name="exhaust_ambient_temp_remark" size="5">
                                <?= form_error('exhaust_ambient_temp_remark', '<small class="text-danger">', '</small>') ?>
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
            </div>
        </form>
    </div>
</body>

</html>