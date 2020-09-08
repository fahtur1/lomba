<?php
//============================================================+
// File name   : example_002.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 002 for TCPDF class
//               Removing Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Removing Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor($actual['leader_name']);
$pdf->SetTitle('PPM Report');
$pdf->SetSubject('PPM Report');
$pdf->SetKeywords('PPM, PDF, Report');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(8, 10, 8);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 10);

// add a page
$pdf->AddPage();

$pdf->setJPEGQuality(75);

// CSS
$style = <<<EOD
<style>
    .table-header td {
    }
    .ft-bg {
        font-size: 21rem;
    }
    .ft-md {
        font-size: 13rem;
    }
    .al-c {
        text-align: center;
    }
    .bg-heading {
        background-color: #DCE6F1;
    }
    .bg-subhead {
        background-color: #CCFFFF;
        font-weight: bold;
        font-style: italic;
    }
</style>
EOD;

// src of logo
$src = base_url('assets/img/logo.jpeg');

// header table
$headtbl = $style . <<<EOD
<img src="$src" width="200">
<br>
<table border="1" class="table-header">
    <tr>
        <td class="ft-bg al-c"><b>QA3</b></td>
        <td colspan="4" class="ft-bg al-c"><b>Machine Condition Report</b></td>
    </tr>
    <tr>
        <td rowspan="3" class="ft-bg al-c"><b>MCR</b></td>
        <td rowspan="3"><div>&nbsp;</div><b>INSPECTOR / LEADER</b></td>
        <td width="15%" class="align-left"> Name</td>
        <td width="45%"> $actual[leader_name]</td>
    </tr>
    <tr>
        <td width="15%"> Date</td>
        <td width="45%"> $actual[actual_date]</td>
    </tr>
    <tr>
        <td width="15%"> Code Unit</td>
        <td width="45%"> $actual[model_name]</td>
    </tr>
    <tr>
        <td class="al-c ft-md"><b>$actual[model_name]</b></td>
        <td><b> Branch / Site</b></td>
        <td colspan="3" width="60%"> $actual[actual_branch]</td>
    </tr>
</table>
EOD;

// row table
$rowtbl = $style . <<<EOD
<table class="table" width="100%" cellpadding="2" border="1">
    <tbody>
    <tr class="al-c bg-heading">
            <th><b>ITEM</b></th>
            <th colspan="2"><b>CONDITION</b></th>
            <th><b>UNIT</b></th>
            <th><b>STD</b></th>
            <th><b>PMS</b></th>
            <th><b>ACTUAL</b></th>
            <th><b>REMARK</b></th>
        </tr>
        <tr>
            <td class="al-c bg-subhead" colspan="8">ENGINE</td>
        </tr>
        <!-- Engine Speed -->
        <!-- row 1 -->
        <tr>
            <td class="" rowspan="5">
                Engine Speed (in DH Mode)
            </td>
            <td colspan="2" class="">
                Engine: Low idle
            </td>
            <td class="al-c" rowspan="5">Rpm</td>
            <td colspan="2" class="al-c">775 - 875</td>
            <td class="al-c">$actual[engine_low_idle]</td>
            <td class="al-c">$actual[engine_low_idle_remark]</td>
        </tr>
        <!-- row 2 -->
        <tr>
            <td colspan="2">
                Engine: High idle
            </td>
            <td class="al-c" colspan="2">1930 - 2030</td>
            <td class="al-c">$actual[engine_high_idle]</td>
            <td class="al-c">$actual[engine_high_idle_remark]</td>
        </tr>
        <!-- row 3 -->
        <tr>
            <td colspan="2">
                Engine: Full throttle. Boom: raise relieve.
            </td>
            <td class="al-c" colspan="2">1680 - 1880</td>
            <td class="al-c">$actual[engine_full_throttle_raise]</td>
            <td class="al-c">$actual[engine_full_throttle_raise_remark]</td>
        </tr>
        <!-- row 4 -->
        <tr>
            <td colspan="2">
                Engine: Full throttle. <br>Boom: raise relieve + Heavy lift : ON.
            </td>
            <td class="al-c" colspan="2">1680 - 1880</td>
            <td class="al-c">$actual[engine_full_throttle_heavy]</td>
            <td class="al-c">$actual[engine_full_throttle_heavy_remark]</td>
        </tr>

        <!-- row 6 -->
        <tr>
            <td colspan="2" class="al-c">
                Auto decelaration switch: ON. Fuel control dial: Max. <br>Control Valve: neutral
            </td>
            <td class="al-c" colspan="2">1300 - 1500</td>
            <td class="al-c">$actual[engine_control_valve_neutral]</td>
            <td class="al-c">$actual[engine_control_valve_neutral_remark]</td>
        </tr>

        <!-- Blow-by Press -->
        <!-- row 1 -->
        <tr>
            <td>Blow-by Pressure</td>
            <td colspan="2">At rated horsepower. </td>
            <td class="al-c">kPa<br>{mmH2O}</td>
            <td>Max. 2.94 <br> { Max. 300 }</td>
            <td>Max. 5.88 <br> { Max. 600 }</td>
            <td class="al-c">$actual[blow_horsepower]</td>
            <td class="al-c">$actual[blow_horsepower_remark]</td>
        </tr>
        <!-- Engine oil -->
        <!-- row 1 -->
        <tr>
            <td class="" rowspan="2">Engine oil Pressure.</td>
            <td colspan="2" class="">Run engine at low idle (SAE30) </td>
            <td class="al-c" rowspan="2">Mpa <br> { kg/cm2 }</td>
            <td class="al-c">Min 0.08 <br> { Min 0.8 }</td>
            <td class="al-c">Min 0.06 <br> { Min 0.06 }</td>
            <td class="al-c">$actual[oil_run_low_idle]</td>
            <td class="al-c">$actual[oil_run_low_idle_remark]</td>
        </tr>
        <!-- row 2 -->
        <tr>
            <td colspan="2" class="">Run engine at high idle (SAE30)</td>
            <td class="al-c">0.29 - 0.44 <br> { 3.0 - 4.5 }</td>
            <td class="al-c">Min 0.2 <br> { Min 2.0 }</td>
            <td class="al-c">$actual[oil_run_high_idle]</td>
            <td class="al-c">$actual[oil_run_high_idle_remark]</td>
        </tr>
        <!-- Boost Press -->
        <!-- row 1 -->
        <tr>
            <td>Boost Pressure</td>
            <td colspan="2">At rated horsepower. </td>
            <td class="al-c">kPa<br>{mmHg}</td>
            <td class="al-c">Max. 125.7 <br> { Max. 950 }</td>
            <td class="al-c">Limit is not set</td>
            <td class="al-c">$actual[boost_horsepower]</td>
            <td class="al-c">$actual[boost_horsepower_remark]</td>
        </tr>
        <!-- Exhaust Temperature -->
        <!-- row 1 -->
        <tr>
            <td class="" rowspan="2">At all speed range.</td>
            <td class="" colspan="2">Ambient Temp.</td>
            <td class="al-c" rowspan="2">°C</td>
            <td class="al-c">Max 700</td>
            <td class="al-c">Max 750</td>
            <td class="al-c">$actual[exhaust_speed_range]</td>
            <td class="al-c">$actual[exhaust_speed_range_remark]</td>
        </tr>
        <!-- row 2 -->
        <tr>
            <td class="" colspan="2">Ambient temperature</td>
            <td class="al-c">20</td>
            <td class="al-c">20</td>
            <td class="al-c">$actual[exhaust_ambient_temp]</td>
            <td class="al-c">$actual[exhaust_ambient_temp_remark]</td>
        </tr>

        <!-- PTO -->
        <tr class="bg-primary">
            <td class="al-c bg-subhead" colspan="8">PTO</td>
        </tr>
        <!-- Visual inspection of strainer -->
        <tr>
            <td class="align-middle" colspan="3">Visual inspection of strainer</td>
            <td class="text-center">-</td>
            <td class="text-center" colspan="2">Must not clogged with metal dust </td>
            <td class="al-c">
                $actual[visual_inspection]
            </td>
            <td class="al-c">
                $actual[visual_inspection_remark]
            </td>
        </tr>

        <!-- Check of thermo-label of center bearing -->
        <tr>
            <td class="align-middle" colspan="3">Check of thermo-label of center bearing</td>
            <td class="text-center">°C</td>
            <td class="text-center" colspan="2">120 °C range must not be black</td>
            <td class="al-c">
                $actual[check_of_thermo]
            </td>
            <td class="al-c">
                $actual[check_of_thermo_remark]
            </td>
        </tr>
        <!-- WORK EQUIPMENT SPEED -->
                    <tr class="bg-primary">
                        <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                            WORK EQUIPMENT SPEED
                        </td>
                    </tr>

                    <!-- Boom RAISE -->
                    <tr>
                        <td class="align-middle">Boom RAISE</td>
                        <td class="align-middle" colspan="2" rowspan="9">
                            Run engine at full throttle<br>
                            DH Mode<br>
                            <br>
                            Swing: Measure time for 5 turns after 1 turn <br>
                            Travel: Raise each track and measure 5 turns with no load after 1 turn.
                        </td>
                        <td class="text-center align-middle" rowspan="9">Sec</td>
                        <td class="text-center align-middle">6.7 - 8.3</td>
                        <td class="text-center align-middle">Max. 90</td>
                        <td class="al-c">
                            $actual[boom_raise]
                        </td>
                        <td class="al-c">
                            $actual[boom_raise_remark]
                        </td>
                    </tr>

                    <!-- Boom LOWER -->
                    <tr>
                        <td class="align-middle">Boom LOWER</td>
                        <td class="text-center align-middle">4.8 - 5.8</td>
                        <td class="text-center align-middle">Max. 6.4</td>
                        <td class="al-c">
                            $actual[boom_lower]
                        </td>
                        <td class="al-c">
                            $actual[boom_lower_remark]
                        </td>
                    </tr>

                    <!-- Arm IN -->
                    <tr>
                        <td class="align-middle">Arm IN</td>
                        <td class="text-center align-middle">6.7 - 8.3</td>
                        <td class="text-center align-middle">Max. 90</td>
                        <td class="al-c">
                            $actual[arm_in]
                        </td>
                        <td class="al-c">
                            $actual[arm_in_remark]
                        </td>
                    </tr>

                    <!-- Arm OUT -->
                    <tr>
                        <td class="align-middle">Arm OUT</td>
                        <td class="text-center align-middle">4.7 - 5.7</td>
                        <td class="text-center align-middle">Max. 6.2</td>
                        <td class="al-c">
                            $actual[arm_out]
                        </td>
                        <td class="al-c">
                            $actual[arm_out_remark]
                        </td>
                    </tr>

                    <!-- Bucked CURL -->
                    <tr>
                        <td class="align-middle">Bucked CURL</td>
                        <td class="text-center align-middle">4.5 - 5.5</td>
                        <td class="text-center align-middle">Max. 6.0</td>
                        <td class="al-c">
                            $actual[bucket_curl]
                        </td>
                        <td class="al-c">
                            $actual[bucket_curl_remark]
                        </td>
                    </tr>

                    <!-- Bucked DUMP -->
                    <tr>
                        <td class="align-middle">Bucked DUMP</td>
                        <td class="text-center align-middle">3.5 - 4.3</td>
                        <td class="text-center align-middle">Max. 4.7</td>
                        <td class="al-c">
                            $actual[bucket_dump]
                        </td>
                        <td class="al-c">
                            $actual[bucket_dump_remark]
                        </td>
                    </tr>

                    <!-- Swing 5 turns -->
                    <tr>
                        <td class="align-middle">Swing 5 turns</td>
                        <td class="text-center align-middle">57.5 - 67.5</td>
                        <td class="text-center align-middle">Max. 70.0</td>
                        <td class="al-c">
                            $actual[swing_5_turns]
                        </td>
                        <td class="al-c">
                            $actual[swing_5_turns_remark]
                        </td>
                    </tr>

                    <!-- Drive right track 5 turns -->
                    <tr>
                        <td class="align-middle">Drive right track 5 turns</td>
                        <td class="text-center align-middle">90.5 - 110.5</td>
                        <td class="text-center align-middle">Max. 70.0</td>
                        <td class="al-c">
                            $actual[drive_right_track]
                        </td>
                        <td class="al-c">
                            $actual[drive_right_track_remark]
                        </td>
                    </tr>

                    <!-- Drive left track 5 turns -->
                    <tr>
                        <td class="align-middle">Drive left track 5 turns</td>
                        <td class="text-center align-middle">90.5 - 110.5</td>
                        <td class="text-center align-middle">Max. 70.0</td>
                        <td class="al-c">
                            $actual[drive_left_track]
                        </td>
                        <td class="al-c">
                            $actual[drive_left_track_remark]
                        </td>
                    </tr>

                    <tr class="bg-primary">
                        <td class="al-c bg-subhead" colspan="8">HYDRAULIC DRIFT</td>
                    </tr>

                    <!-- Whole work equipment -->
                    <tr>
                        <td class="align-middle">Whole work equipment</td>
                        <td class="align-middle" rowspan="4">
                            Boom and arm in level, bucket curled, work equipment no load.
                        </td>
                        <td class="text-center align-middle">Hyd drift of bucket tooth tip.</td>
                        <td class="text-center align-middle" rowspan="4">mm/15 min.</td>
                        <td class="text-center align-middle">Max. 650</td>
                        <td class="text-center align-middle">Max. 1000</td>
                        <td class="al-c">
                            $actual[whole_work]
                        </td>
                        <td class="al-c">
                            $actual[whole_work_remark]
                        </td>
                    </tr>
                    <!-- Boom cylinder -->
                    <tr>
                        <td class="align-middle">Boom cylinder</td>
                        <td class="text-center align-middle">Cyl. Retraction.</td>
                        <td class="text-center align-middle">Max. 35</td>
                        <td class="text-center align-middle">Max. 50</td>
                        <td class="al-c">
                            $actual[boom_cylinder]
                        </td>
                        <td class="al-c">
                            $actual[boom_cylinder_remark]
                        </td>
                    </tr>
                    <!-- Arm cylinder -->
                    <tr>
                        <td class="align-middle">Arm cylinder</td>
                        <td class="text-center align-middle">Cyl. Retraction.</td>
                        <td class="text-center align-middle">Max. 70</td>
                        <td class="text-center align-middle">Max. 105</td>
                        <td class="al-c">
                            $actual[arm_cylinder]
                        </td>
                        <td class="al-c">
                            $actual[arm_cylinder_remark]
                        </td>
                    </tr>
                    <!-- Bucket cylinder -->
                    <tr>
                        <td class="align-middle">Bucket cylinder</td>
                        <td class="text-center align-middle">Cyl. Retraction.</td>
                        <td class="text-center align-middle">Max. 15</td>
                        <td class="text-center align-middle">Max. 30</td>
                        <td class="al-c">
                            $actual[bucket_cylinder]
                        </td>
                        <td class="al-c">
                            $actual[bucket_cylinder_remark]
                        </td>
                    </tr>

                    <!-- HYDRAULIC SYSTEM -->
                    <tr class="bg-primary">
                        <td class="al-c bg-subhead" colspan="8">
                            HYDRAULIC SYSTEM
                        </td>
                    </tr>

                    <!-- Control pressure -->
                    <tr>
                        <td class="align-middle">Control pressure</td>
                        <td class="align-middle" rowspan="13">
                            Mode : P <br>
                            Engine : Full throttle <br>
                            Fan : 100 % speed mode Auto decelator : OFF
                        </td>
                        <td class="text-center align-middle">Control lever: neutral</td>
                        <td class="text-center align-middle" rowspan="4">Kg/cm2</td>
                        <td class="text-center align-middle">33 - 38</td>
                        <td class="text-center align-middle">31 - 38</td>
                        <td class="al-c">
                            $actual[control_pressure]
                        </td>
                        <td class="al-c">
                            $actual[control_pressure_remark]
                        </td>
                    </tr>

                    <!-- Jet sensor differential -->
                    <!-- row 1 -->
                    <tr>
                        <td class="align-middle" rowspan="3">Jet sensor differential</td>
                        <td class="text-center align-middle">Control lever: neutral</td>
                        <td class="text-center align-middle">Min 13.1</td>
                        <td class="text-center align-middle">Min 13.1</td>
                        <td class="al-c">
                            $actual[jet_control_lever]
                        </td>
                        <td class="al-c">
                            $actual[jet_control_lever_remark]
                        </td>
                    </tr>

                    <!-- row 2 -->
                    <tr>
                        <td class="text-center align-middle">Right travel lever: stroke end. Track: turning with no load.</td>
                        <td class="text-center align-middle">Min 1.7</td>
                        <td class="text-center align-middle">Min 1.7</td>
                        <td class="al-c">
                            $actual[jet_right_travel_lever]
                        </td>
                        <td class="al-c">
                            $actual[jet_right_travel_lever_remark]
                        </td>
                    </tr>

                    <!-- row 3 -->
                    <tr>
                        <td class="text-center align-middle">Left travel lever: stroke end. Track: turning with no load.</td>
                        <td class="text-center align-middle">Min 1.7</td>
                        <td class="text-center align-middle">Min 1.7</td>
                        <td class="al-c">
                            $actual[jet_left_travel_lever]
                        </td>
                        <td class="al-c">
                            $actual[jet_left_travel_lever_remark]
                        </td>
                    </tr>

                    <!-- Pump EPC Current -->
                    <!-- row 1 -->
                    <tr>
                        <td class="align-middle" rowspan="3">Pump EPC Current</td>
                        <td class="text-center align-middle">Control lever: neutral</td>
                        <td class="text-center align-middle" rowspan="3">mA</td>
                        <td class="text-center align-middle">160 - 280</td>
                        <td class="text-center align-middle">160 - 280</td>
                        <td class="al-c">
                            $actual[pump_control_lever]
                        </td>
                        <td class="al-c">
                            $actual[pump_control_lever_remark]
                        </td>
                    </tr>

                    <!-- row 2 -->
                    <tr>
                        <td class="text-center align-middle">Right travel lever: stroke end. Track: turning with no load.</td>
                        <td class="text-center align-middle">P1: 390 - 510<br>P2: 615 - 735</td>
                        <td class="text-center align-middle">P1: 390 - 510<br>P2: 615 - 735</td>
                        <td class="al-c">
                            $actual[pump_right_travel_lever]
                        </td>
                        <td class="al-c">
                            $actual[pump_right_travel_lever_remark]
                        </td>
                    </tr>

                    <!-- row 3 -->
                    <tr>
                        <td class="text-center align-middle">Left travel lever: stroke end. Track: turning with no load.</td>
                        <td class="text-center align-middle">P1: 390 - 510<br>P2: 615 - 735</td>
                        <td class="text-center align-middle">P1: 390 - 510<br>P2: 615 - 735</td>
                        <td class="al-c">
                            $actual[pump_left_travel_lever]
                        </td>
                        <td class="al-c">
                            $actual[pump_left_travel_lever_remark]
                        </td>
                    </tr>

                    <!-- P1F pump pressure -->
                    <!-- row 1 -->
                    <tr>
                        <td class="align-middle" rowspan="6">P1F pump pressure</td>
                        <td class="text-center align-middle">Boom: raise relieve (normal)</td>
                        <td class="text-center align-middle" rowspan="6">Kg/cm2</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="al-c">
                            $actual[p1f_boom_raise]
                        </td>
                        <td class="al-c">
                            $actual[p1f_boom_raise_remark]
                        </td>
                    </tr>

                    <!-- row 2 -->
                    <tr>
                        <td class="text-center align-middle">Boom: raise relieve (heavy lift ON)</td>
                        <td class="text-center align-middle">317 - 337</td>
                        <td class="text-center align-middle">307 - 337</td>
                        <td class="al-c">
                            $actual[p1f_boom_raise_heavy]
                        </td>
                        <td class="al-c">
                            $actual[p1f_boom_raise_heavy_remark]
                        </td>
                    </tr>

                    <!-- row 3 -->
                    <tr>
                        <td class="text-center align-middle">Arm: In relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="al-c">
                            $actual[p1f_arm_in]
                        </td>
                        <td class="al-c">
                            $actual[p1f_arm_in_remark]
                        </td>
                    </tr>

                    <!-- row 4 -->
                    <tr>
                        <td class="text-center align-middle">Arm: Out relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="al-c">
                            $actual[p1f_arm_out]
                        </td>
                        <td class="al-c">
                            $actual[p1f_arm_out_remark]
                        </td>
                    </tr>

                    <!-- row 5 -->
                    <tr>
                        <td class="text-center align-middle">Bucket: Curl relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="al-c">
                            $actual[p1f_bucket_curl]
                        </td>
                        <td class="al-c">
                            $actual[p1f_bucket_curl_remark]
                        </td>
                    </tr>
                    <!-- row 6 -->
                    <tr>
                        <td class="text-center align-middle">Swing: Relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="al-c">
                            $actual[p1f_swing]
                        </td>
                        <td class="al-c">
                            $actual[p1f_swing_remark]
                        </td>
                    </tr>

                    <!-- P1R pump pressure -->
                    <!-- row 1 -->
                    <tr>
                        <td class="align-middle" rowspan="5">P1R pump pressure</td>
                        <td class="align-middle" rowspan="18">
                            Mode : P <br>
                            Engine : Full throttle <br>
                            Fan : 100 % speed mode Auto decelator : OFF
                        </td>
                        <td class="text-center align-middle">Boom: raise relieve (normal)</td>
                        <td class="text-center align-middle" rowspan="14">Kg/cm2</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="al-c">
                            $actual[p1r_boom_raise]
                        </td>
                        <td class="al-c">
                            $actual[p1r_boom_raise_remark]
                        </td>
                    </tr>

                    <!-- row 2 -->
                    <tr>
                        <td class="text-center align-middle">Boom: raise relieve (heavy lift ON)</td>
                        <td class="text-center align-middle">317 - 337</td>
                        <td class="text-center align-middle">307 - 337</td>
                        <td class="al-c">
                            $actual[p1r_boom_raise_heavy]
                        </td>
                        <td class="al-c">
                            $actual[p1r_boom_raise_heavy_remark]
                        </td>
                    </tr>

                    <!-- row 3 -->
                    <tr>
                        <td class="text-center align-middle">Arm: In relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="al-c">
                            $actual[p1r_arm_in]
                        </td>
                        <td class="al-c">
                            $actual[p1r_arm_in_remark]
                        </td>
                    </tr>

                    <!-- row 4 -->
                    <tr>
                        <td class="text-center align-middle">Arm: Out relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="al-c">
                            $actual[p1r_arm_out]
                        </td>
                        <td class="al-c">
                            $actual[p1r_arm_out_remark]
                        </td>
                    </tr>

                    <!-- row 5 -->
                    <tr>
                        <td class="text-center align-middle">Bucket: Curl relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="al-c">
                            $actual[p1r_bucket_curl]
                        </td>
                        <td class="al-c">
                            $actual[p1r_bucket_curl]
                        </td>
                    </tr>

                    <!-- P2F pump pressure -->
                    <!-- row 1 -->
                    <tr>
                        <td class="align-middle" rowspan="5">P2F pump pressure</td>
                        <td class="text-center align-middle">Boom: raise relieve (normal)</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="al-c">
                            $actual[p2f_boom_raise]
                        </td>
                        <td class="al-c">
                            $actual[p2f_boom_raise_remark]
                        </td>
                    </tr>

                    <!-- row 2 -->
                    <tr>
                        <td class="text-center align-middle">Boom: raise relieve (heavy lift ON)</td>
                        <td class="text-center align-middle">317 - 337</td>
                        <td class="text-center align-middle">307 - 337</td>
                        <td class="al-c">
                            $actual[p2f_boom_raise_heavy]
                        </td>
                        <td class="al-c">
                            $actual[p2f_boom_raise_heavy_remark]
                        </td>
                    </tr>

                    <!-- row 3 -->
                    <tr>
                        <td class="text-center align-middle">Arm: In relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="al-c">
                            $actual[p2f_arm_in]
                        </td>
                        <td class="al-c">
                            $actual[p2f_arm_in_remark]
                        </td>
                    </tr>

                    <!-- row 4 -->
                    <tr>
                        <td class="text-center align-middle">Arm: Out relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="al-c">
                            $actual[p2f_arm_out]
                        </td>
                        <td class="al-c">
                            $actual[p2f_arm_out_remark]
                        </td>
                    </tr>

                    <!-- row 5 -->
                    <tr>
                        <td class="text-center align-middle">Bucket: Curl relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="al-c">
                            $actual[p2f_bucket_curl]
                        </td>
                        <td class="al-c">
                            $actual[p2f_bucket_curl_remark]
                        </td>
                    </tr>

                    <!-- P2R pump pressure -->
                    <!-- row 1 -->
                    <tr>
                        <td class="align-middle" rowspan="4">P2R pump pressure</td>
                        <td class="text-center align-middle">Boom: raise relieve (heavy lift ON)</td>
                        <td class="text-center align-middle">317 - 337</td>
                        <td class="text-center align-middle">307 - 337</td>
                        <td class="al-c">
                            $actual[p2r_boom_raise_heavy]
                        </td>
                        <td class="al-c">
                            $actual[p2r_boom_raise_heavy_remark]
                        </td>
                    </tr>

                    <!-- row 2 -->
                    <tr>
                        <td class="text-center align-middle">Arm: In relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="al-c">
                            $actual[p2r_arm_in]
                        </td>
                        <td class="al-c">
                            $actual[p2r_arm_in_remark]
                        </td>
                    </tr>

                    <!-- row 3 -->
                    <tr>
                        <td class="text-center align-middle">Arm: Out relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="al-c">
                            $actual[p2r_arm_out]
                        </td>
                        <td class="al-c">
                            $actual[p2r_arm_out_remark]
                        </td>
                    </tr>

                    <!-- row 4 -->
                    <tr>
                        <td class="text-center align-middle">Bucket: Curl relieve</td>
                        <td class="text-center align-middle">290 - 310</td>
                        <td class="text-center align-middle">280 - 310</td>
                        <td class="al-c">
                            $actual[p2r_bucket_curl]
                        </td>
                        <td class="al-c">
                            $actual[p2r_bucket_curl_remark]
                        </td>
                    </tr>

                    <!-- Fan pump EPC (radiator) current -->
                    <tr>
                        <td class="align-middle">Fan pump EPC (radiator) current</td>
                        <td class="text-center align-middle">Control lever: neutral</td>
                        <td class="text-center align-middle" rowspan="2">mA</td>
                        <td class="text-center align-middle">STD: 575-675<br>55⁰ C: 505-605</td>
                        <td class="text-center align-middle">STD: 575-675<br>55⁰ C: 505-605</td>
                        <td class="al-c">
                            $actual[fan_pump_radiator]
                        </td>
                        <td class="al-c">
                            $actual[fan_pump_radiator_remark]
                        </td>
                    </tr>

                    <!-- Fan pump EPC (Oil cooler) current -->
                    <tr>
                        <td class="align-middle">Fan pump EPC (Oil cooler) current</td>
                        <td class="text-center align-middle">Control lever: neutral</td>
                        <td class="text-center align-middle">STD: 600-700<br>55⁰ C: 505-605</td>
                        <td class="text-center align-middle">STD: 600-700<br>55⁰ C: 505-605</td>
                        <td class="al-c">
                            $actual[fan_pump_oil]
                        </td>
                        <td class="al-c">
                            $actual[fan_pump_oil_remark]
                        </td>
                    </tr>

                    <!-- Fan speed (radiator) -->
                    <tr>
                        <td class="align-middle">Fan speed (radiator)</td>
                        <td class="text-center align-middle">Control lever: neutral</td>
                        <td class="text-center align-middle" rowspan="2">Rpm</td>
                        <td class="text-center align-middle">STD: 790-890<br>55⁰ C: 1050-1150</td>
                        <td class="text-center align-middle">STD: 790-890<br>55⁰ C: 1050-1150</td>
                        <td class="al-c">
                            $actual[fan_speed_radiator]
                        </td>
                        <td class="al-c">
                            $actual[fan_speed_radiator_remark]
                        </td>
                    </tr>

                    <!-- Fan speed (oil cooler) -->
                    <tr>
                        <td class="align-middle">Fan speed (oil cooler)</td>
                        <td class="text-center align-middle">Control lever: neutral</td>
                        <td class="text-center align-middle">STD: 710-810<br>55⁰ C: 1050-1150</td>
                        <td class="text-center align-middle">STD: 710-810<br>55⁰ C: 1050-1150</td>
                        <td class="al-c">
                            $actual[fan_speed_oil]
                        </td>
                        <td class="al-c">
                            $actual[fan_speed_oil_remark]
                        </td>
                    </tr>

                    <!-- Hydraulic oil temperature -->
                    <tr>
                        <td class="align-middle">Hydraulic oil temperature</td>
                        <td class="text-center align-middle">
                            Mode: P, Engine: Full throttle, Fan: 100 % speed mode
                        </td>
                        <td class="text-center align-middle">Bucket: dump relieve</td>
                        <td class="text-center align-middle">⁰C</td>
                        <td class="text-center align-middle">Max 100 ⁰ C</td>
                        <td class="text-center align-middle">Max 100 ⁰ C</td>
                        <td class="al-c">
                            $actual[hydraulic_oil_temp]
                        </td>
                        <td class="al-c">
                            $actual[hydraulic_oil_temp_remark]
                        </td>
                    </tr>

                    <!-- Visual check of hydraulic tank strainer. -->
                    <tr>
                        <td class="align-middle" colspan="4">Visual check of hydraulic tank strainer.</td>
                        <td class="align-middle" colspan="2">There must not be excessive metal powder or foreignj matter.</td>
                        <td class="al-c">
                            $actual[visual_check_hydraulic]
                        </td>
                        <td class="al-c">
                            $actual[visual_check_hydraulic_remark]
                        </td>
                    </tr>

                    <!-- FINAL DRIVE -->
                    <tr class="bg-primary">
                        <td class="al-c bg-subhead" colspan="8">
                            FINAL DRIVE
                        </td>
                    </tr>

                    <!-- Drain Plug -->
                    <tr>
                        <td class="align-middle">Drain Plug</td>
                        <td class="al-c" rowspan="2" colspan="3">
                            Visual check, ngine stopped
                        </td>
                        <td class="text-center align-middle" colspan="2">No excessive Metalic Powder</td>
                        <td class="al-c">
                            $actual[drive_drain_plug]
                        </td>
                        <td class="al-c">
                            $actual[drive_drain_plug_remark]
                        </td>
                    </tr>

                    <!-- Oil Leak -->
                    <tr>
                        <td class="align-middle">Oil Leak</td>
                        <td class="text-center align-middle" colspan="2">No leaked </td>
                        <td class="al-c">
                            $actual[drive_oil_leak]
                        </td>
                        <td class="al-c">
                            $actual[drive_oil_leak_remark]
                        </td>
                    </tr>

                    <!-- Abnormal Noise -->
                    <tr>
                        <td class="align-middle">Abnormal Noise</td>
                        <td class="text-center align-middle" colspan="3">travel raise and oparated track </td>
                        <td class="text-center align-middle" colspan="2">no abnormal noise</td>
                        <td class="al-c">
                            $actual[drive_abnormal_noise]
                        </td>
                        <td class="al-c">
                            $actual[drive_abnormal_noise_remark]
                        </td>
                    </tr>


                    <!-- SWING MACHINERY -->
                    <tr class="bg-primary">
                        <td class="al-c bg-subhead" colspan="8">
                            SWING MACHINERY
                        </td>
                    </tr>

                    <!-- Drain Plug -->
                    <tr>
                        <td class="align-middle">Drain Plug</td>
                        <td class="al-c" rowspan="2" colspan="3">
                            Visual check, ngine stopped
                        </td>
                        <td class="text-center align-middle" colspan="2">No excessive Metalic Powder</td>
                        <td class="al-c">
                            $actual[swing_drain_plug]
                        </td>
                        <td class="al-c">
                            $actual[swing_drain_plug_remark]
                        </td>
                    </tr>

                    <!-- Oil Leak -->
                    <tr>
                        <td class="align-middle">Oil Leak</td>
                        <td class="text-center align-middle" colspan="2">No leaked </td>
                        <td class="al-c">
                            $actual[swing_oil_leak]
                        </td>
                        <td class="al-c">
                            $actual[swing_oil_leak_remark]
                        </td>
                    </tr>

                    <!-- SWING CRICLE BEARING -->
                    <tr class="bg-primary">
                        <td class="text-white text-center font-weight-bold font-italic" colspan="8">
                            SWING CRICLE BEARING
                        </td>
                    </tr>

                    <!-- Axial play -->
                    <tr>
                        <td class="align-middle">Axial play</td>
                        <td class="al-c" colspan="2">
                            Play outer circle and inner circle bearing
                        </td>
                        <td class="text-center align-middle">mm</td>
                        <td class="text-center align-middle">0.5 - 1.5</td>
                        <td class="text-center align-middle">2.0</td>
                        <td class="al-c">
                            $actual[axial_play]
                        </td>
                        <td class="al-c">
                            $actual[axial_play_remark]
                        </td>
                    </tr>

                    <!-- ELECTRICAL -->
                    <tr class="bg-primary">
                        <td class="al-c bg-subhead" colspan="8">
                            ELECTRICAL
                        </td>
                    </tr>
                    <!-- Instrument panel -->
                    <tr>
                        <td>Instrument panel</td>
                        <td colspan="2">Completeness and function</td>
                        <td colspan="3">Complete and normal function</td>
                        <td class="al-c">
                            $actual[instrument_panel]
                        </td>
                        <td class="al-c">
                            $actual[instrument_panel_remark]
                        </td>
                    </tr>
                    <!-- Starting system -->
                    <tr>
                        <td>Starting system</td>
                        <td colspan="2">Condition and function</td>
                        <td colspan="3">Good installation and normal function</td>
                        <td class="al-c">
                            $actual[starting_system]
                        </td>
                        <td class="al-c">
                            $actual[starting_system_remark]
                        </td>
                    </tr>
                    <!-- Chargin System -->
                    <tr>
                        <td>Chargin System</td>
                        <td colspan="2">Condition and function</td>
                        <td colspan="3">Good installation and normal function</td>
                        <td class="al-c">
                            $actual[charging_system]
                        </td>
                        <td class="al-c">
                            $actual[charging_system_remark]
                        </td>
                    </tr>
                    <!-- Lighting -->
                    <tr>
                        <td>Lighting</td>
                        <td colspan="2">Condition and function</td>
                        <td colspan="3">Complete and normal function</td>
                        <td class="al-c">
                            $actual[lighting]
                        </td>
                        <td class="al-c">
                            $actual[lighting_remark]
                        </td>
                    </tr>
                    <!-- Battery -->
                    <tr>
                        <td>Battery</td>
                        <td colspan="2">Condition, electrolite level, specific grafity and load test. </td>
                        <td colspan="3">Good condition</td>
                        <td class="al-c">
                            $actual[battery]
                        </td>
                        <td class="al-c">
                            $actual[battery_remark]
                        </td>
                    </tr>
                    <!-- Wiring harness -->
                    <tr>
                        <td>Wiring harness</td>
                        <td colspan="2">Condition, connection, clamping</td>
                        <td colspan="3">Good installation and condition</td>
                        <td class="al-c">
                            $actual[wiring_harness]
                        </td>
                        <td class="al-c">
                            $actual[wiring_harness_remark]
                        </td>
                    </tr>
                    <!-- VHMS/Komtrak -->
                    <tr>
                        <td>VHMS/Komtrak</td>
                        <td colspan="2">Condition and function</td>
                        <td colspan="3">Good condition and function</td>
                        <td class="al-c">
                            $actual[vhms_komtrak]
                        </td>
                        <td class="al-c">
                            $actual[vhms_komtrak_remark]
                        </td>
                    </tr>
                    <!-- OPTIONAL EQUIPMENT -->
                    <tr class="bg-primary">
                        <td class="al-c bg-subhead" colspan="8">
                            OPTIONAL EQUIPMENT
                        </td>
                    </tr>
                    <!-- Emergency shutdown -->
                    <tr>
                        <td>Emergency shutdown</td>
                        <td colspan="2">Completeness, condition and function</td>
                        <td colspan="3">Complete and normal function</td>
                        <td class="al-c">
                            $actual[emergency_shutdown]
                        </td>
                        <td class="al-c">
                            $actual[emergency_shutdown_remark]
                        </td>
                    </tr>
                    <!-- Logout Switch -->
                    <tr>
                        <td>Logout Switch</td>
                        <td colspan="2">Completeness, condition and function</td>
                        <td colspan="3">Complete and normal function</td>
                        <td class="al-c">
                            $actual[logout_switch]
                        </td>
                        <td class="al-c">
                            $actual[logout_switch_remark]
                        </td>
                    </tr>
                    <!-- PDU -->
                    <tr>
                        <td>PDU</td>
                        <td colspan="2">Completeness, condition and function</td>
                        <td colspan="3">Complete and normal function</td>
                        <td class="al-c">
                            $actual[pdu]
                        </td>
                        <td class="al-c">
                            $actual[pdu_remark]
                        </td>
                    </tr>
                    <!-- Autolube -->
                    <tr>
                        <td>Autolube</td>
                        <td colspan="2">Completeness, condition and function</td>
                        <td colspan="3">Complete and normal function</td>
                        <td class="al-c">
                            $actual[autolube]
                        </td>
                        <td class="al-c">
                            $actual[autolube_remark]
                        </td>
                    </tr>
                    <!-- Fire suppression -->
                    <tr>
                        <td>Fire suppression</td>
                        <td colspan="2">Completeness, condition and function</td>
                        <td colspan="3">Complete and normal function</td>
                        <td class="al-c">
                            $actual[fire_suppression]
                        </td>
                        <td class="al-c">
                            $actual[fire_suppression_remark]
                        </td>
                    </tr>
                    <!-- Fatique warning -->
                    <tr>
                        <td>Fatique warning</td>
                        <td colspan="2">Completeness, condition and function</td>
                        <td colspan="3">Complete and normal function</td>
                        <td class="al-c">
                            $actual[fatique_warning]
                        </td>
                        <td class="al-c">
                            $actual[fatique_warning_remark]
                        </td>
                    </tr>
                    <!-- Backup alarm -->
                    <tr>
                        <td>Backup alarm</td>
                        <td colspan="2">Completeness, condition and function</td>
                        <td colspan="3">Complete and normal function</td>
                        <td class="al-c">
                            $actual[backup_alarm]
                        </td>
                        <td class="al-c">
                            $actual[backup_alarm_remark]
                        </td>
                    </tr>
                    <!-- GENERAL MACHINE CONDITION -->
                    <tr class="bg-primary">
                        <td class="al-c bg-subhead" colspan="8">
                            GENERAL MACHINE CONDITION
                        </td>
                    </tr>
                    <!-- Attachment & Frame -->
                    <tr>
                        <td>Attachment & Frame</td>
                        <td colspan="2">Completeness, worn and crack detection</td>
                        <td colspan="3">No crack</td>
                        <td class="al-c">
                            $actual[attachment_frame]
                        </td>
                        <td class="al-c">
                            $actual[attachment_frame_remark]
                        </td>
                    </tr>
                    <!-- Machine -->
                    <tr>
                        <td>Machine</td>
                        <td colspan="2">Cleaness, wear, completeness and condition</td>
                        <td colspan="3">Complete and normal condition</td>
                        <td class="al-c">
                            $actual[machine]
                        </td>
                        <td class="al-c">
                            $actual[machine_remark]
                        </td>
                    </tr>
                    <!-- Undercarriage -->
                    <tr>
                        <td>Undercarriage</td>
                        <td colspan="2">Cleaness, wear, completeness and condition</td>
                        <td colspan="3">Complete and normal condition</td>
                        <td class="al-c">
                            $actual[undercarriage]
                        </td>
                        <td class="al-c">
                            $actual[undercarriage_remark]
                        </td>
                    </tr>
    </tbody>
</table>
<br>
<table width="100%">
    <br>
    <br>
    <br>
    <tr class="al-c">
        <td>Approved by :</td>
        <td>Acknowledge by:</td>
        <td>Prepared by:</td>
    </tr>
    <br>
    <br>
    <br>
    <br>
    <tr class="al-c">
        <td>( UT SDH )</td>
        <td>( UT Supervisor )</td>
        <td>( UT Mechanic )</td>
    </tr>
</table>
EOD;

$pdf->writeHTML($headtbl, true, false, false, false, '');
$pdf->writeHTML($rowtbl, true, false, false, false, '');

// ---------------------------------------------------------

//Close and output PDF document
$name_save = uniqid();
$pdf->Output("$name_save.pdf", 'I');

//============================================================+
// END OF FILE
//============================================================+
