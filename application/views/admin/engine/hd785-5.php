<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">UPDATE HD785-5 / PS2</h1>
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
                            <td class="align-middle" rowspan="6">
                                Engine Speed
                            </td>
                            <td colspan="2" class="align-middle">
                                Low Idling, Low
                            </td>
                            <td class="align-middle text-center" rowspan="6">Rpm</td>
                            <td colspan="2" class="text-center">625 - 675</td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td colspan="2">
                                Low Idling, Hi
                            </td>
                            <td class="text-center" colspan="2">970 - 1030</td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                        </tr>
                        <!-- row 3 -->
                        <tr>
                            <td colspan="2">
                                Power Mode High Idling
                            </td>
                            <td class="text-center" colspan="2">2300 - 2400</td>
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
                                Economy Mode High Idling
                            </td>
                            <td class="text-center" colspan="2">2250 - 2350</td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
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
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
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
                            <td colspan="2">Power Mode T/C Stall</td>
                            <td class="align-middle text-center">mmAq</td>
                            <td>Max. 150</td>
                            <td>Max. 300</td>
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
                            <td class="align-middle" rowspan="2">Lub Oil Press.</td>
                            <td colspan="2">Power mode High Idling</td>
                            <td class="align-middle text-center" rowspan="2">Kg/cm2</td>
                            <td>3.0 - 4.0</td>
                            <td>Min 2.1</td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td colspan="2" class="align-middle">Low Idling, Low</td>
                            <td>Min. 1</td>
                            <td>Min. 0.7</td>
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
                            <td class="align-middle" rowspan="2">Boost Press.</td>
                            <td class="align-middle" rowspan="2">T/C Stall</td>
                            <td>RH</td>
                            <td class="align-middle text-center" rowspan="2">mmHg</td>
                            <td class="align-middle text-center" rowspan="2">Min. 950</td>
                            <td class="align-middle text-center" rowspan="2">Min. 850</td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                        </tr>
                        <tr>
                            <td>LH</td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
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
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td class="align-middle" rowspan="2">T/C Stall</td>
                            <td>RH</td>
                            <td class="align-middle text-center" rowspan="2">Max. 650</td>
                            <td class="align-middle text-center" rowspan="2">Max. 700</td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                            <td class="align-middle text-center">
                                <input type="text" class="form-control no-border" size="5">
                            </td>
                        </tr>
                        <!-- row 3 -->
                        <tr>
                            <td>LH</td>
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
</div>