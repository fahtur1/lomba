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
                        </tbody>
                    </table>
                    <button class="btn btn-warning px-3 py-2 float-right">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>