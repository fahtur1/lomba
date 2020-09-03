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
                    <label>Plan Date</label>
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
                                <td class="text-center">Min. 0.8</td>
                                <td class="text-center">Min 0.7</td>
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
                        </tbody>
                    </table>
                    <button class="btn btn-warning px-3 py-2 float-right">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>