<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">UPDATE PC2000-8 / PS2</h1>
    </div>
    <form action="" method="post">
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
                    <input type="text" class="form-control" id="codeunit" name="codeunit" disabled>
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
                                <td class="align-middle" rowspan="7">
                                    Engine Speed (in DH Mode)
                                </td>
                                <td colspan="2" class="align-middle">
                                    Engine: Low idle
                                </td>
                                <td class="align-middle text-center" rowspan="7">Rpm</td>
                                <td colspan="2" class="text-center">775 - 875</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="englllAct" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="englllRe" size="5">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">
                                    Engine: High idle
                                </td>
                                <td class="text-center" colspan="2">1930 - 2030</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="engllhAct" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="engllhRe" size="5">
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td colspan="2">
                                    Engine: Full throttle. Boom: raise relieve.
                                </td>
                                <td class="text-center" colspan="2">1680 - 1880</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- row 4 -->
                            <tr>
                                <td colspan="2">
                                    Engine: Full throttle.
                                </td>
                                <td class="align-middle text-center" colspan="2" rowspan="2">1680 - 1880</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- row 5 -->
                            <tr>
                                <td colspan="2" class="align-middle text-center">
                                    Boom: raise relieve + Heavy lift : ON.
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- row 6 -->
                            <tr>
                                <td colspan="2" class="align-middle text-center">
                                    Auto decelaration switch: ON. Fuel control dial: Max.
                                </td>
                                <td class="align-middle text-center" colspan="2" rowspan="2">1300 - 1500</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>

                            <!-- row 7 -->
                            <tr>
                                <td colspan="2" class="align-middle text-center">
                                    Control Valve: neutral
                                </td>
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
                                <td>Blow-by Pressure</td>
                                <td colspan="2">At rated horsepower. </td>
                                <td class="align-middle text-center">kPa<br>{mmH2O}</td>
                                <td>Max. 2.94 <br> { Max. 300 }</td>
                                <td>Max. 5.88 <br> { Max. 600 }</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2" class="align-middle">Run engine at high idle (SAE30)</td>
                                <td class="align-middle text-center">0.29 - 0.44 <br> { 3.0 - 4.5 }</td>
                                <td class="align-middle text-center">Min 0.2 <br> { Min 2.0 }</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- Exhaust Temperature -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">At all speed range.</td>
                                <td class="align-middle" colspan="2">Ambient Temp.</td>
                                <td class="align-middle text-center" rowspan=" 3">°C</td>
                                <td class="text-center">Max 700</td>
                                <td class="text-center">Max 750</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle" colspan="2">Ambient temperature</td>
                                <td class="align-middle text-center" rowspan="2">20</td>
                                <td class="align-middle text-center" rowspan="2">20</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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