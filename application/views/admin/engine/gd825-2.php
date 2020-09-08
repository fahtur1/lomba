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
                                    <input type="text" class="form-control no-border" size="5" value="<?= set_value('engine_low_speed') ?>" name="engine_low_speed">
                                    <?= form_error('engine_low_speed', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" value="<?= set_value('engine_low_speed_remark') ?>" name="engine_low_speed_remark">
                                    <?= form_error('engine_low_speed_remark', '<small class="text-danger">', '</small>') ?>
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
                                    <input type="text" class="form-control no-border" size="5" value="<?= set_value('engine_high_speed') ?>" name="engine_high_speed">
                                    <?= form_error('engine_high_speed', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5" value="<?= set_value('engine_high_speed_remark') ?>" name="engine_high_speed_remark">
                                    <?= form_error('engine_high_speed_remark', '<small class="text-danger">', '</small>') ?>
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
                                    <input type="text" class="form-control no-border" value="<?= set_value('tc_stall_press') ?>" size="5" name="tc_stall_press">
                                    <?= form_error('tc_stall_press', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('tc_stall_press_remark') ?>" size="5" name="tc_stall_press_remark">
                                    <?= form_error('tc_stall_press_remark', '<small class="text-danger">', '</small>') ?>
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
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_low_press') ?>" size="5" name="engine_low_press">
                                    <?= form_error('engine_low_press', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_low_press_remark') ?>" size="5" name="engine_low_press_remark">
                                    <?= form_error('engine_low_press_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle">Eng. Low</td>
                                <td>S6D140E-2</td>
                                <td>Min. 1.2</td>
                                <td>Min. 0.7</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_low_press2') ?>" size="5" name="engine_low_press2">
                                    <?= form_error('engine_low_press2', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_low_press2_remark') ?>" size="5" name="engine_low_press2_remark">
                                    <?= form_error('engine_low_press2_remark', '<small class="text-danger">', '</small>') ?>
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
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_rated_press') ?>" size="5" name="engine_rated_press">
                                    <?= form_error('engine_rated_press', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('engine_rated_press_remark') ?>" size="5" name="engine_rated_press_remark">
                                    <?= form_error('engine_rated_press_remark', '<small class="text-danger">', '</small>') ?>
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
                                    <input type="text" class="form-control no-border" value="<?= set_value('tc_stall_temp') ?>" size="5" name="tc_stall_temp">
                                    <?= form_error('tc_stall_temp', '<small class="text-danger">', '</small>') ?>
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" value="<?= set_value('tc_stall_temp_remark') ?>" size="5" name="tc_stall_temp_remark">
                                    <?= form_error('tc_stall_temp_remark', '<small class="text-danger">', '</small>') ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-warning px-3 py-2 float-right">Update</button>
                </div>
            </div>
        </div>
    </form>
    <!-- <div class="row">
        <div class="col-lg-4">
            <form method="post" action="<?= base_url('admin') ?>/home/create_plan">
                <div class="form-group">
                    <label for="remark" class="font-weight-bold">Engine Speed</label>
                    <div class="row">
                        <div class="col-lg-12 ml-lg-4">
                            <label for="remark">Engine Low</label>
                            <input type="text" class="form-control" id="remark" name="remark">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-icon-split">
                    <span class="text">Submit</span>
                </button>
            </form>
        </div>
    </div> -->
</div>