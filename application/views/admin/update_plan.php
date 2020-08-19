<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">UPDATE PLAN</h1>
    </div>

    <div class="card shadow mb-4">
        <!-- <div class="card-header py-3">
            <h6 class="card-title m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div> -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ITEM</th>
                            <th colspan="2">CONDITION</th>
                            <th>UNIT</th>
                            <th>STD</th>
                            <th>PMS</th>
                            <th>ACTUAL</th>
                            <th>REMARK</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
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
                            <td class="align-middle" rowspan="3">
                                Engine Speed
                            </td>
                            <td class="align-middle" rowspan="2">
                                Eng. Low
                            </td>
                            <td>S6D140-1</td>
                            <td class="align-middle text-center" rowspan="3">RPM</td>
                            <td>650-680</td>
                            <td class="text-center">-</td>
                            <td class="align-middle text-center" rowspan="2">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center" rowspan="2">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td>S6D140E-2</td>
                            <td>600-700</td>
                            <td class="text-center">-</td>
                        </tr>
                        <!-- row 3 -->
                        <tr>
                            <td>
                                Eng. High
                            </td>
                            <td></td>
                            <td class="text-center" colspan="2">2300-2400</td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
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
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                        </tr>
                        <!-- Lub Oil -->
                        <!-- row 1 -->
                        <tr>
                            <td class="align-middle" rowspan="3">Lub Oil Press</td>
                            <td>Eng. High</td>
                            <td></td>
                            <td class="align-middle text-center" rowspan="3">Kg/cm2.</td>
                            <td>3,0 - 5,0</td>
                            <td>2.0</td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td class="align-middle" rowspan="2">Eng. Low</td>
                            <td>S6D140-1</td>
                            <td>Min. 1</td>
                            <td>Min. 0.7</td>
                            <td class="align-middle text-center" rowspan="2">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center" rowspan="2">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                        </tr>
                        <!-- row 3 -->
                        <tr>
                            <td></td>
                            <td>Min. 1</td>
                            <td>Min. 0.7</td>
                        </tr>
                        <!-- Boost Press -->
                        <!-- row 1 -->
                        <tr>
                            <td class="align-middle" rowspan="2">Boost Press</td>
                            <td class="align-middle" rowspan="2">Eng. Rated</td>
                            <td>S6D140-1</td>
                            <td class="align-middle text-center" rowspan="2">mmHg</td>
                            <td>Min. 405</td>
                            <td>Min. 320</td>
                            <td class="align-middle text-center" rowspan="2">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center" rowspan="2">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td>S6D140E-2</td>
                            <td>Min. 590</td>
                            <td>Min. 300</td>
                        </tr>
                        <!-- Exhaust Gas Temp -->
                        <!-- row 1 -->
                        <tr>
                            <td class="align-middle" rowspan="2">Exhaust Gas Temp</td>
                            <td class="align-middle" rowspan="2">T/C Stall</td>
                            <td>S6D140-1</td>
                            <td class="align-middle text-center" rowspan="2">°C</td>
                            <td>Min. 400</td>
                            <td>Min. 600</td>
                            <td class="align-middle text-center" rowspan="2">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center" rowspan="2">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td>S6D140E-2</td>
                            <td>Min. 700</td>
                            <td>Min. 700</td>
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
                            <td class="align-middle" rowspan="4">Exhaust Gas Temp</td>
                            <td>Operating Effect</td>
                            <td>Engine Stop</td>
                            <td class="text-center">Kg</td>
                            <td class="text-center">11-15</td>
                            <td class="text-center">8-18</td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
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
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
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
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
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
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

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