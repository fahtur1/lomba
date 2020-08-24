<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">UPDATE HD785-5 / PS2</h1>
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
                                    <input type="text" class="form-control no-border" name="englllAct" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" name="englllRe" size="5">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">
                                    Low Idling, Hi
                                </td>
                                <td class="text-center" colspan="2">970 - 1030</td>
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Low idling</td>
                                <td colspan="2" class="text-center">0.8 - 1.8</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- Outlet oil pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Outlet oil pressure</td>
                                <td colspan="2">High idling</td>
                                <td colspan="2" class="text-center">3 - 5</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Low idling</td>
                                <td colspan="2" class="text-center">0.5 - 1.5</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- Lock-up oil pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Lock-up oil pressure</td>
                                <td colspan="2">High idling</td>
                                <td colspan="2" class="text-center">15.5 - 16.5</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Low idling</td>
                                <td colspan="2" class="text-center">15.5 - 16.5</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- Lubricating oil pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td>Lubricating oil pressure</td>
                                <td colspan="2">Engine full throttle</td>
                                <td colspan="2" class="text-center">0.75 - 1.75</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- Main Relieve Pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Main Relieve Pressure</td>
                                <td colspan="2">Low Idling, Low T/M in N </td>
                                <td colspan="2" class="text-center">32.5 - 36.5</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Power Mode High Idling, T/M in N </td>
                                <td colspan="2" class="text-center">37.0 - 41.0</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Left to Right</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Power mode high idling </td>
                                <td class="text-center">210 - 225</td>
                                <td class="text-center">205 - 225</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td>Cut out</td>
                                <td colspan="2" class="align-middle text-center">8.0 - 8.6</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td colspan="2" class="align-middle text-center">Min 1750 (sn 4188 and up)</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>

                            <!-- Retarder brake -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Retarder brake</td>
                                <td colspan="2" class="align-middle text-center">Min 1500 (sn 4001-4187)</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td colspan="2" class="align-middle text-center">Min 1300 (sn 4188 and up)</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>

                            <!-- Parking brake -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Parking brake</td>
                                <td colspan="2" class="align-middle text-center">Min 2040 (sn 4001-4187)</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td colspan="2" class="align-middle text-center">Min 1890 (sn 4188 and up)</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- Emergency brake -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Emergency brake</td>
                                <td colspan="2" class="align-middle text-center">Min 2040 (sn 4001-4187)</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td colspan="2" class="align-middle text-center">Min 1890 (sn 4188 and up)</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Right</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Right</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>

                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Power Mode High Idling</td>
                                <td colspan="2" class="align-middle text-center">200 - 215</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>

                            <!-- Raising Speed -->
                            <tr>
                                <td class="align-middle">Raising Speed</td>
                                <td colspan="2">Power Mode High Idling</td>
                                <td class="align-middle text-center">Sec.</td>
                                <td colspan="2" class="align-middle text-center">11.5 - 14.5</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Oil, gas leakage</td>
                                <td class="align-middle text-center">-</td>
                                <td colspan="2" class="align-middle text-center">There must be no leakage</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Oil, gas leakage</td>
                                <td class="align-middle text-center">-</td>
                                <td colspan="2" class="align-middle text-center">There must be no leakage</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Oil, gas leakage</td>
                                <td class="align-middle text-center">-</td>
                                <td colspan="2" class="align-middle text-center">There must be no leakage</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td colspan="2">Oil, gas leakage</td>
                                <td class="align-middle text-center">-</td>
                                <td colspan="2" class="align-middle text-center">There must be no leakage</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- Final Drive Drain Plug -->
                            <!-- row 1 -->
                            <tr>
                                <td rowspan="2" class="align-middle">Final Drive Drain Plug</td>
                                <td class="align-middle text-center">L/H</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle text-center">R/H</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- Starting system -->
                            <tr>
                                <td>Starting system</td>
                                <td colspan="2">Condition and function</td>
                                <td colspan="3">Good installation and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- Chargin System -->
                            <tr>
                                <td>Chargin System</td>
                                <td colspan="2">Condition and function</td>
                                <td colspan="3">Good installation and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- Lighting -->
                            <tr>
                                <td>Lighting</td>
                                <td colspan="2">Condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- Battery -->
                            <tr>
                                <td>Battery</td>
                                <td colspan="2">Condition, electrolite level, specific grafity and load test. </td>
                                <td colspan="3">Good condition</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- Wiring harness -->
                            <tr>
                                <td>Wiring harness</td>
                                <td colspan="2">Condition, connection, clamping</td>
                                <td colspan="3">Good installation and condition</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- VHMS/Komtrak -->
                            <tr>
                                <td>VHMS/Komtrak</td>
                                <td colspan="2">Condition and function</td>
                                <td colspan="3">Good condition and function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- Logout Switch -->
                            <tr>
                                <td>Logout Switch</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- PDU -->
                            <tr>
                                <td>PDU</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- Autolube -->
                            <tr>
                                <td>Autolube</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- Fire suppression -->
                            <tr>
                                <td>Fire suppression</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- Fatique warning -->
                            <tr>
                                <td>Fatique warning</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- Backup alarm -->
                            <tr>
                                <td>Backup alarm</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
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
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                                <td class="align-middle text-center">
                                    <input type="text" class="form-control no-border" size="5">
                                </td>
                            </tr>
                            <!-- Machine -->
                            <tr>
                                <td>Machine</td>
                                <td colspan="2">Clearness</td>
                                <td colspan="3">Complete and normal condition</td>
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