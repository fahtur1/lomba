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
    .ft-bold {
        font-weight: bold;
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
    br {
        line-height: 10px;
    }
</style>
EOD;

// src of logo
$src = base_url('assets/img/logo.jpeg');

// header table
$headtbl = $style . <<<EOD
<img src="$src" width="200">
<br><br>
<table border="1" class="table-header">
    <tr>
        <td class="ft-bg al-c"><b>QA3</b></td>
        <td colspan="4" class="ft-bg al-c"><b>Machine Condition Report</b></td>
    </tr>
    <tr>
        <td rowspan="3" class="ft-bg al-c"><b>MCR</b></td>
        <td class="ft-bold" rowspan="3"><br><br><br> INSPECTOR/LEADER</td>
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
        <td class="ft-bold"> Branch/Site</td>
        <td colspan="3" width="60%"> $actual[actual_branch]</td>
    </tr>
</table>
EOD;

// row table
$rowtbl = $style . <<<EOD
<table width="100%" cellpadding="2" border="1">
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
            <td rowspan="5"><br><br><br><br><br><br><br>Engine Speed<br><br>(in DH Mode)</td>
            <td colspan="2">Engine: Low idle</td>
            <td class="al-c" rowspan="5"><br><br><br><br><br><br><br><br>Rpm</td>
            <td colspan="2" class="al-c">775 - 875</td>
            <td class="al-c">$actual[engine_low_idle]</td>
            <td class="al-c">$actual[engine_low_idle_remark]</td>
        </tr>
        <!-- row 2 -->
        <tr>
            <td colspan="2">Engine: High idle</td>
            <td class="al-c" colspan="2">1930 - 2030</td>
            <td class="al-c">$actual[engine_high_idle]</td>
            <td class="al-c">$actual[engine_high_idle_remark]</td>
        </tr>
        <!-- row 3 -->
        <tr>
            <td colspan="2">Engine: Full throttle. Boom: raise relieve</td>
            <td class="al-c" colspan="2"><br><br>1680 - 1880</td>
            <td class="al-c"><br><br>$actual[engine_full_throttle_raise]</td>
            <td class="al-c"><br><br>$actual[engine_full_throttle_raise_remark]</td>
        </tr>
        <!-- row 4 -->
        <tr>
            <td colspan="2">Engine: Full throttle. Boom: raise relieve + Heavy lift : ON</td>
            <td class="al-c" colspan="2"><br><br>1680 - 1880</td>
            <td class="al-c"><br><br>$actual[engine_full_throttle_heavy]</td>
            <td class="al-c"><br><br>$actual[engine_full_throttle_heavy_remark]</td>
        </tr>

        <!-- row 6 -->
        <tr>
            <td colspan="2">Auto decelaration switch: ON. Fuel control dial: Max. Control Valve: neutral</td>
            <td class="al-c" colspan="2"><br><br><br>1300 - 1500</td>
            <td class="al-c"><br><br><br>$actual[engine_control_valve_neutral]</td>
            <td class="al-c"><br><br><br>$actual[engine_control_valve_neutral_remark]</td>
        </tr>

        <!-- Blow-by Press -->
        <!-- row 1 -->
        <tr>
            <td>Blow-by Pressure</td>
            <td colspan="2"><br><br>At rated horsepower. </td>
            <td class="al-c">kPa<br><br>{mmH2O}</td>
            <td class="al-c">Max. 2.94<br><br>{ Max. 300 }</td>
            <td class="al-c">Max. 5.88<br><br>{ Max. 600 }</td>
            <td class="al-c"><br><br>$actual[blow_horsepower]</td>
            <td class="al-c"><br><br>$actual[blow_horsepower_remark]</td>
        </tr>
        <!-- Engine oil -->
        <!-- row 1 -->
        <tr>
            <td rowspan="2">Engine oil Pressure.</td>
            <td colspan="2">Run engine at low idle (SAE30) </td>
            <td class="al-c" rowspan="2"><br><br><br>Mpa<br><br>{ kg/cm2 }</td>
            <td class="al-c">Min 0.08<br><br>{ Min 0.8 }</td>
            <td class="al-c">Min 0.06<br><br>{ Min 0.06 }</td>
            <td class="al-c"><br><br>$actual[oil_run_low_idle]</td>
            <td class="al-c"><br><br>$actual[oil_run_low_idle_remark]</td>
        </tr>
        <!-- row 2 -->
        <tr>
            <td colspan="2">Run engine at high idle (SAE30)</td>
            <td class="al-c">0.29 - 0.44<br><br>{ 3.0 - 4.5 }</td>
            <td class="al-c">Min 0.2<br><br>{ Min 2.0 }</td>
            <td class="al-c"><br><br>$actual[oil_run_high_idle]</td>
            <td class="al-c"><br><br>$actual[oil_run_high_idle_remark]</td>
        </tr>
        <!-- Boost Press -->
        <!-- row 1 -->
        <tr>
            <td>Boost Pressure</td>
            <td colspan="2"><br><br>At rated horsepower. </td>
            <td class="al-c">kPa<br><br>{mmHg}</td>
            <td class="al-c">Max. 125.7<br><br>{ Max. 950 }</td>
            <td class="al-c"><br><br>Limit is not set</td>
            <td class="al-c"><br><br>$actual[boost_horsepower]</td>
            <td class="al-c"><br><br>$actual[boost_horsepower_remark]</td>
        </tr>
        <!-- Exhaust Temperature -->
        <!-- row 1 -->
        <tr>
            <td rowspan="2">At all speed range.</td>
            <td colspan="2">Ambient Temp.</td>
            <td class="al-c" rowspan="2"><br><br>°C</td>
            <td class="al-c">Max 700</td>
            <td class="al-c">Max 750</td>
            <td class="al-c">$actual[exhaust_speed_range]</td>
            <td class="al-c">$actual[exhaust_speed_range_remark]</td>
        </tr>
        <!-- row 2 -->
        <tr>
            <td colspan="2">Ambient temperature</td>
            <td class="al-c">20</td>
            <td class="al-c">20</td>
            <td class="al-c">$actual[exhaust_ambient_temp]</td>
            <td class="al-c">$actual[exhaust_ambient_temp_remark]</td>
        </tr>

        <!-- PTO -->
        <tr>
            <td class="al-c bg-subhead" colspan="8">PTO</td>
        </tr>
        <!-- Visual inspection of strainer -->
        <tr>
            <td colspan="3">Visual inspection of strainer</td>
            <td class="al-c"><br><br>-</td>
            <td colspan="2">Must not clogged with metal dust </td>
            <td class="al-c"><br><br>$actual[visual_inspection]</td>
            <td class="al-c"><br><br>$actual[visual_inspection_remark]</td>
        </tr>

        <!-- Check of thermo-label of center bearing -->
        <tr>
            <td colspan="3">Check of thermo-label of center bearing</td>
            <td class="al-c"><br><br>°C</td>
            <td colspan="2">120 °C range must not be black</td>
            <td class="al-c"><br><br>$actual[check_of_thermo]</td>
            <td class="al-c"><br><br>$actual[check_of_thermo_remark]</td>
        </tr>
        <!-- WORK EQUIPMENT SPEED -->
        <tr><td class="al-c bg-subhead" colspan="8">WORK EQUIPMENT SPEED</td></tr>
        <!-- Boom RAISE -->
        <tr>
            <td>Boom RAISE</td>
            <td class="al-c" colspan="2" rowspan="9"><br><br><br><br><br><br><br><br>Run engine at full throttle<br><br>DH Mode Swing: Measure<br><br>time for 5 turns after 1 turn<br><br>Travel: Raise each track and<br><br>measure 5 turns with no load<br><br>after 1 turn.</td>
            <td class="al-c" rowspan="9"><br><br><br><br><br><br><br><br><br><br><br><br><br>Sec</td>
            <td class="al-c">6.7 - 8.3</td>
            <td class="al-c">Max. 90</td>
            <td class="al-c">$actual[boom_raise]</td>
            <td class="al-c">$actual[boom_raise_remark]</td>
        </tr>
        <!-- Boom LOWER -->
        <tr>
            <td>Boom LOWER</td>
            <td class="al-c"><br><br>4.8 - 5.8</td>
            <td class="al-c"><br><br>Max. 6.4</td>
            <td class="al-c"><br><br>$actual[boom_lower]</td>
            <td class="al-c"><br><br>$actual[boom_lower_remark]</td>
        </tr>
        <!-- Arm IN -->
        <tr>
            <td>Arm IN</td>
            <td class="al-c">6.7 - 8.3</td>
            <td class="al-c">Max. 90</td>
            <td class="al-c">$actual[arm_in]</td>
            <td class="al-c">$actual[arm_in_remark]</td>
        </tr>
        <!-- Arm OUT -->
        <tr>
            <td>Arm OUT</td>
            <td class="al-c">4.7 - 5.7</td>
            <td class="al-c">Max. 6.2</td>
            <td class="al-c">$actual[arm_out]</td>
            <td class="al-c">$actual[arm_out_remark]</td>
        </tr>
        <!-- Bucked CURL -->
        <tr>
            <td>Bucked CURL</td>
            <td class="al-c">4.5 - 5.5</td>
            <td class="al-c">Max. 6.0</td>
            <td class="al-c">$actual[bucket_curl]</td>
            <td class="al-c">$actual[bucket_curl_remark]</td>
        </tr>
        <!-- Bucked DUMP -->
        <tr>
            <td>Bucked DUMP</td>
            <td class="al-c"><br><br>3.5 - 4.3</td>
            <td class="al-c"><br><br>Max. 4.7</td>
            <td class="al-c"><br><br>$actual[bucket_dump]</td>
            <td class="al-c"><br><br>$actual[bucket_dump_remark]</td>
        </tr>
        <!-- Swing 5 turns -->
        <tr>
            <td>Swing 5 turns</td>
            <td class="al-c">57.5 - 67.5</td>
            <td class="al-c">Max. 70.0</td>
            <td class="al-c">$actual[swing_5_turns]</td>
            <td class="al-c">$actual[swing_5_turns_remark]</td>
        </tr>
        <!-- Drive right track 5 turns -->
        <tr>
            <td>Drive right track 5 turns</td>
            <td class="al-c"><br><br>90.5 - 110.5</td>
            <td class="al-c"><br><br>Max. 70.0</td>
            <td class="al-c"><br><br>$actual[drive_right_track]</td>
            <td class="al-c"><br><br>$actual[drive_right_track_remark]</td>
        </tr>
        <!-- Drive left track 5 turns -->
        <tr>
            <td>Drive left track 5 turns</td>
            <td class="al-c"><br><br>90.5 - 110.5</td>
            <td class="al-c"><br><br>Max. 70.0</td>
            <td class="al-c"><br><br>$actual[drive_left_track]</td>
            <td class="al-c"><br><br>$actual[drive_left_track_remark]</td>
        </tr>
        <br><br>
    </tbody>
</table>
EOD;
$rowtbl2 = $style . <<<EOD
<table width="100%" cellpadding="2" border="1">
    <tbody>
        <tr>
            <td class="al-c bg-subhead" colspan="8">HYDRAULIC DRIFT</td>
        </tr>
        <!-- Whole work equipment -->
        <tr>
            <td>Whole work equipment</td>
            <td class="al-c" rowspan="4"><br><br><br>Boom and<br><br>arm in level,<br><br>bucket curled,<br><br>work<br><br>equipment no<br><br>load</td>
            <td>Hyd drift of bucket tooth tip.</td>
            <td class="al-c" rowspan="4"><br><br><br><br><br><br><br>mm/15 min</td>
            <td class="al-c"><br><br><br>Max. 650</td>
            <td class="al-c"><br><br><br>Max. 1000</td>
            <td class="al-c"><br><br><br>$actual[whole_work]</td>
            <td class="al-c"><br><br><br>$actual[whole_work_remark]</td>
        </tr>
        <!-- Boom cylinder -->
        <tr>
            <td>Boom cylinder</td>
            <td>Cyl Retraction</td>
            <td class="al-c">Max. 35</td>
            <td class="al-c">Max. 50</td>
            <td class="al-c">$actual[boom_cylinder]</td>
            <td class="al-c">$actual[boom_cylinder_remark]</td>
        </tr>
        <!-- Arm cylinder -->
        <tr>
            <td>Arm cylinder</td>
            <td>Cyl Retraction</td>
            <td class="al-c">Max. 70</td>
            <td class="al-c">Max. 105</td>
            <td class="al-c">$actual[arm_cylinder]</td>
            <td class="al-c">$actual[arm_cylinder_remark]</td>
        </tr>
        <!-- Bucket cylinder -->
        <tr>
            <td>Bucket cylinder</td>
            <td><br><br>Cyl Retraction</td>
            <td class="al-c"><br><br>Max. 15</td>
            <td class="al-c"><br><br>Max. 30</td>
            <td class="al-c"><br><br>$actual[bucket_cylinder]</td>
            <td class="al-c"><br><br>$actual[bucket_cylinder_remark]</td>
        </tr>
        <!-- HYDRAULIC SYSTEM -->
        <tr>
            <td class="al-c bg-subhead" colspan="8">HYDRAULIC SYSTEM</td>
        </tr>

        <!-- Control pressure -->
        <tr>
            <td>Control pressure</td>
            <td class="al-c" rowspan="13"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Mode : P <br><br>Engine : Full<br><br>throttle Fan :<br><br>100 % speed<br><br>mode Auto<br><br>decelator :<br><br>OFF</td>
            <td>Control lever: neutral</td>
            <td class="al-c" rowspan="4"><br><br><br><br><br><br><br><br><br><br><br><br>Kg/cm2</td>
            <td class="al-c"><br><br>33 - 38</td>
            <td class="al-c"><br><br>31 - 38</td>
            <td class="al-c"><br><br>$actual[control_pressure]</td>
            <td class="al-c"><br><br>$actual[control_pressure_remark]</td>
        </tr>
        <!-- Jet sensor differential -->
        <!-- row 1 -->
        <tr>
            <td rowspan="3">Jet sensor differential</td>
            <td>Control lever: neutral</td>
            <td class="al-c"><br><br>Min 13.1</td>
            <td class="al-c"><br><br>Min 13.1</td>
            <td class="al-c"><br><br>$actual[jet_control_lever]</td>
            <td class="al-c"><br><br>$actual[jet_control_lever_remark]</td>
        </tr>
        <!-- row 2 -->
        <tr>
            <td>Right travel lever: stroke end. Track: turning with no load.</td>
            <td class="al-c"><br><br><br><br>Min 1.7</td>
            <td class="al-c"><br><br><br><br>Min 1.7</td>
            <td class="al-c"><br><br><br><br>$actual[jet_right_travel_lever]</td>
            <td class="al-c"><br><br><br><br>$actual[jet_right_travel_lever_remark]</td>
        </tr>

        <!-- row 3 -->
        <tr>
            <td>Left travel lever: stroke end. Track: turning with no load.</td>
            <td class="al-c"><br><br><br><br>Min 1.7</td>
            <td class="al-c"><br><br><br><br>Min 1.7</td>
            <td class="al-c"><br><br><br><br>$actual[jet_left_travel_lever]</td>
            <td class="al-c"><br><br><br><br>$actual[jet_left_travel_lever_remark]</td>
        </tr>
        <!-- Pump EPC Current -->
        <!-- row 1 -->
        <tr>
            <td rowspan="3">Pump EPC Current</td>
            <td>Control lever: neutral</td>
            <td class="al-c" rowspan="3"><br><br><br><br><br><br><br><br><br><br>mA</td>
            <td class="al-c"><br><br>160 - 280</td>
            <td class="al-c"><br><br>160 - 280</td>
            <td class="al-c"><br><br>$actual[pump_control_lever]</td>
            <td class="al-c"><br><br>$actual[pump_control_lever_remark]</td>
        </tr>
        <!-- row 2 -->
        <tr>
            <td>Right travel lever: stroke end. Track: turning with no load.</td>
            <td><br><br><br>P1: 390 - 510<br><br>P2: 615 - 735</td>
            <td><br><br><br>P1: 390 - 510<br><br>P2: 615 - 735</td>
            <td class="al-c"><br><br><br><br>$actual[pump_right_travel_lever]</td>
            <td class="al-c"><br><br><br><br>$actual[pump_right_travel_lever_remark]</td>
        </tr>
        <!-- row 3 -->
        <tr>
            <td>Left travel lever: stroke end. Track: turning with no load.</td>
            <td class="al-c"><br><br><br>P1: 390 - 510<br><br>P2: 615 - 735</td>
            <td class="al-c"><br><br><br>P1: 390 - 510<br><br>P2: 615 - 735</td>
            <td class="al-c"><br><br><br><br>$actual[pump_left_travel_lever]</td>
            <td class="al-c"><br><br><br><br>$actual[pump_left_travel_lever_remark]</td>
        </tr>
        <!-- P1F pump pressure -->
        <!-- row 1 -->
        <tr>
            <td rowspan="6">P1F pump pressure</td>
            <td>Boom: raise relieve (normal)</td>
            <td class="al-c" rowspan="6"><br><br><br><br><br><br><br><br><br><br><br>Kg/cm2</td>
            <td class="al-c"><br><br>290 - 310</td>
            <td class="al-c"><br><br>280 - 310</td>
            <td class="al-c"><br><br>$actual[p1f_boom_raise]</td>
            <td class="al-c"><br><br>$actual[p1f_boom_raise_remark]</td>
        </tr>

        <!-- row 2 -->
        <tr>
            <td>Boom: raise relieve (heavy lift ON)</td>
            <td class="al-c"><br><br><br>317 - 337</td>
            <td class="al-c"><br><br><br>307 - 337</td>
            <td class="al-c"><br><br><br>$actual[p1f_boom_raise_heavy]</td>
            <td class="al-c"><br><br><br>$actual[p1f_boom_raise_heavy_remark]</td>
        </tr>
        <!-- row 3 -->
        <tr>
            <td>Arm: In relieve</td>
            <td class="al-c">290 - 310</td>
            <td class="al-c">280 - 310</td>
            <td class="al-c">$actual[p1f_arm_in]</td>
            <td class="al-c">$actual[p1f_arm_in_remark]</td>
        </tr>
        <!-- row 4 -->
        <tr>
            <td>Arm: Out relieve</td>
            <td class="al-c"><br><br>290 - 310</td>
            <td class="al-c"><br><br>280 - 310</td>
            <td class="al-c"><br><br>$actual[p1f_arm_out]</td>
            <td class="al-c"><br><br>$actual[p1f_arm_out_remark]</td>
        </tr>
        <!-- row 5 -->
        <tr>
            <td>Bucket: Curl relieve</td>
            <td class="al-c"><br><br>290 - 310</td>
            <td class="al-c"><br><br>280 - 310</td>
            <td class="al-c"><br><br>$actual[p1f_bucket_curl]</td>
            <td class="al-c"><br><br>$actual[p1f_bucket_curl_remark]</td>
        </tr>
        <!-- row 6 -->
        <tr>
            <td>Swing: Relieve</td>
            <td class="al-c"><br><br>290 - 310</td>
            <td class="al-c"><br><br>280 - 310</td>
            <td class="al-c"><br><br>$actual[p1f_swing]</td>
            <td class="al-c"><br><br>$actual[p1f_swing_remark]</td>
        </tr>
        <!-- P1R pump pressure -->
        <!-- row 1 -->
        <tr>
            <td rowspan="5"><br><br><br><br>P1R pump<br><br>pressure</td>
            <td class="al-c" rowspan="18"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Mode : P<br><br>Engine : Full<br><br>throttle Fan :<br><br>100% speed<br><br>mode Auto<br><br>decelator :<br><br>OFF</td>
            <td><br><br><br>Boom: raise<br><br>relieve<br><br>(normal)</td>
            <td class="al-c" rowspan="14"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Kg/cm2</td>
            <td class="al-c"><br><br><br><br><br>290 - 310</td>
            <td class="al-c"><br><br><br><br><br>280 - 310</td>
            <td class="al-c"><br><br><br><br><br>$actual[p1r_boom_raise]</td>
            <td class="al-c"><br><br><br><br><br>$actual[p1r_boom_raise_remark]</td>
        </tr>

        <!-- row 2 -->
        <tr>
            <td>Boom: raise relieve (heavy lift ON)</td>
            <td class="al-c"><br><br><br>317 - 337</td>
            <td class="al-c"><br><br><br>307 - 337</td>
            <td class="al-c"><br><br><br>$actual[p1r_boom_raise_heavy]</td>
            <td class="al-c"><br><br><br>$actual[p1r_boom_raise_heavy_remark]</td>
        </tr>

        <!-- row 3 -->
        <tr>
            <td>Arm: In relieve</td>
            <td class="al-c">290 - 310</td>
            <td class="al-c">280 - 310</td>
            <td class="al-c">$actual[p1r_arm_in]</td>
            <td class="al-c">$actual[p1r_arm_in_remark]</td>
        </tr>
        <!-- row 4 -->
        <tr>
            <td>Arm: Out relieve</td>
            <td class="al-c"><br><br>290 - 310</td>
            <td class="al-c"><br><br>280 - 310</td>
            <td class="al-c"><br><br>$actual[p1r_arm_out]</td>
            <td class="al-c"><br><br>$actual[p1r_arm_out_remark]</td>
        </tr>
        <!-- row 5 -->
        <tr>
            <td>Bucket: Curl relieve</td>
            <td class="al-c"><br><br>290 - 310</td>
            <td class="al-c"><br><br>280 - 310</td>
            <td class="al-c"><br><br>$actual[p1r_bucket_curl]</td>
            <td class="al-c"><br><br>$actual[p1r_bucket_curl_remark]</td>
        </tr>
        <!-- P2F pump pressure -->
        <!-- row 1 -->
        <tr>
            <td rowspan="5">P2F pump pressure</td>
            <td>Boom: raise relieve (normal)</td>
            <td class="al-c"><br><br><br>290 - 310</td>
            <td class="al-c"><br><br><br>280 - 310</td>
            <td class="al-c"><br><br><br>$actual[p2f_boom_raise]</td>
            <td class="al-c"><br><br><br>$actual[p2f_boom_raise_remark]</td>
        </tr>
        <!-- row 2 -->
        <tr>
            <td>Boom: raise relieve (heavy lift ON)</td>
            <td class="al-c"><br><br><br>317 - 337</td>
            <td class="al-c"><br><br><br>307 - 337</td>
            <td class="al-c"><br><br><br>$actual[p2f_boom_raise_heavy]</td>
            <td class="al-c"><br><br><br>$actual[p2f_boom_raise_heavy_remark]</td>
        </tr>

        <!-- row 3 -->
        <tr>
            <td>Arm: In relieve</td>
            <td class="al-c">290 - 310</td>
            <td class="al-c">280 - 310</td>
            <td class="al-c">$actual[p2f_arm_in]</td>
            <td class="al-c">$actual[p2f_arm_in_remark]</td>
        </tr>

        <!-- row 4 -->
        <tr>
            <td>Arm: Out relieve</td>
            <td class="al-c"><br><br>290 - 310</td>
            <td class="al-c"><br><br>280 - 310</td>
            <td class="al-c"><br><br>$actual[p2f_arm_out]</td>
            <td class="al-c"><br><br>$actual[p2f_arm_out_remark]</td>
        </tr>

        <!-- row 5 -->
        <tr>
            <td>Bucket: Curl relieve</td>
            <td class="al-c"><br><br>290 - 310</td>
            <td class="al-c"><br><br>280 - 310</td>
            <td class="al-c"><br><br>$actual[p2f_bucket_curl]</td>
            <td class="al-c"><br><br>$actual[p2f_bucket_curl_remark]</td>
        </tr>

        <!-- P2R pump pressure -->
        <!-- row 1 -->
        <tr>
            <td rowspan="4">P2R pump pressure</td>
            <td>Boom: raise relieve (heavy lift ON)</td>
            <td class="al-c"><br><br><br>317 - 337</td>
            <td class="al-c"><br><br><br>307 - 337</td>
            <td class="al-c"><br><br><br>$actual[p2r_boom_raise_heavy]</td>
            <td class="al-c"><br><br><br>$actual[p2r_boom_raise_heavy_remark]</td>
        </tr>

        <!-- row 2 -->
        <tr>
            <td>Arm: In relieve</td>
            <td class="al-c">290 - 310</td>
            <td class="al-c">280 - 310</td>
            <td class="al-c">$actual[p2r_arm_in]</td>
            <td class="al-c">$actual[p2r_arm_in_remark]</td>
        </tr>

        <!-- row 3 -->
        <tr>
            <td>Arm: Out relieve</td>
            <td class="al-c"><br><br>290 - 310</td>
            <td class="al-c"><br><br>280 - 310</td>
            <td class="al-c"><br><br>$actual[p2r_arm_out]</td>
            <td class="al-c"><br><br>$actual[p2r_arm_out_remark]</td>
        </tr>

        <!-- row 4 -->
        <tr>
            <td>Bucket: Curl relieve</td>
            <td class="al-c"><br><br>290 - 310</td>
            <td class="al-c"><br><br>280 - 310</td>
            <td class="al-c"><br><br>$actual[p2r_bucket_curl]</td>
            <td class="al-c"><br><br>$actual[p2r_bucket_curl_remark]</td>
        </tr>

        <!-- Fan pump EPC (radiator) current -->
        <tr>
            <td>Fan pump EPC (radiator) current</td>
            <td><br><br>Control lever:<br><br>neutral</td>
            <td class="al-c" rowspan="2"><br><br><br><br><br>mA</td>
            <td class="al-c">STD: 575-675<br><br>55°<br><br>C: 505-605</td>
            <td class="al-c">STD: 575-675<br><br>55°<br><br>C: 505-605</td>
            <td class="al-c"><br><br><br>$actual[fan_pump_radiator]</td>
            <td class="al-c"><br><br><br>$actual[fan_pump_radiator_remark]</td>
        </tr>

        <!-- Fan pump EPC (Oil cooler) current -->
        <tr>
            <td>Fan pump EPC (Oil cooler) current</td>
            <td><br><br>Control lever:<br><br>neutral</td>
            <td class="al-c">STD: 600-700<br><br>55°<br><br>C: 505-605</td>
            <td class="al-c">STD: 600-700<br><br>55°<br><br>C: 505-605</td>
            <td class="al-c"><br><br><br>$actual[fan_pump_oil]</td>
            <td class="al-c"><br><br><br>$actual[fan_pump_oil_remark]</td>
        </tr>
        <!-- Fan speed (radiator) -->
        <tr>
            <td>Fan speed (radiator)</td>
            <td>Control lever: neutral</td>
            <td class="al-c" rowspan="2"><br><br><br><br><br>Rpm</td>
            <td class="al-c">STD: 790-890<br><br>55°<br><br>C: 1050-1150</td>
            <td class="al-c">STD: 790-890<br><br>55°<br><br>C: 1050-1150</td>
            <td class="al-c"><br><br><br>$actual[fan_speed_radiator]</td>
            <td class="al-c"><br><br><br>$actual[fan_speed_radiator_remark]</td>
        </tr>
        <!-- Fan speed (oil cooler) -->
        <tr>
            <td>Fan speed (oil cooler)</td>
            <td>Control lever: neutral</td>
            <td class="al-c">STD: 710-810<br><br>55°<br><br>C: 1050-1150</td>
            <td class="al-c">STD: 710-810<br><br>55°<br><br>C: 1050-1150</td>
            <td class="al-c"><br><br><br>$actual[fan_speed_oil]</td>
            <td class="al-c"><br><br><br>$actual[fan_speed_oil_remark]</td>
        </tr>

        <!-- Hydraulic oil temperature -->
        <tr>
            <td><br><br><br>Hydraulic oil<br><br>temperature</td>
            <td>Mode: P, Engine: Full throttle, Fan: 100 % speed mode</td>
            <td><br><br><br>Bucket:<br><br>dump relieve</td>
            <td class="al-c"><br><br><br><br>°C</td>
            <td class="al-c"><br><br><br><br>Max 100°C</td>
            <td class="al-c"><br><br><br><br>Max 100°C</td>
            <td class="al-c"><br><br><br><br>$actual[hydraulic_oil_temp]</td>
            <td class="al-c"><br><br><br><br>$actual[hydraulic_oil_temp_remark]</td>
        </tr>

        <!-- Visual check of hydraulic tank strainer. -->
        <tr>
            <td colspan="4"><br><br><br>Visual check of hydraulic tank strainer.</td>
            <td colspan="2">There must not be excessive metal powder or foreign matter.</td>
            <td class="al-c"><br><br><br>$actual[visual_check_hydraulic]</td>
            <td class="al-c"><br><br><br>$actual[visual_check_hydraulic_remark]</td>
        </tr>

        <!-- FINAL DRIVE -->
        <tr>
            <td class="al-c bg-subhead" colspan="8">
                FINAL DRIVE
            </td>
        </tr>

        <!-- Drain Plug -->
        <tr>
            <td>Drain Plug</td>
            <td class="al-c" rowspan="2" colspan="3"><br><br>Visual check, Engine stopped</td>
            <td colspan="2">No excessive Metalic Powder</td>
            <td class="al-c">$actual[drive_drain_plug]</td>
            <td class="al-c">$actual[drive_drain_plug_remark]</td>
        </tr>
        <!-- Oil Leak -->
        <tr>
            <td>Oil Leak</td>
            <td colspan="2">No leaked </td>
            <td class="al-c">$actual[drive_oil_leak]</td>
            <td class="al-c">$actual[drive_oil_leak_remark]</td>
        </tr>
        <!-- Abnormal Noise -->
        <tr>
            <td>Abnormal Noise</td>
            <td class="al-c" colspan="3"><br><br>travel raise and oparated track </td>
            <td class="al-c" colspan="2"><br><br>no abnormal noise</td>
            <td class="al-c"><br><br>$actual[drive_abnormal_noise]</td>
            <td class="al-c"><br><br>$actual[drive_abnormal_noise_remark]</td>
        </tr>
        <!-- SWING MACHINERY -->
        <tr>
            <td class="al-c bg-subhead" colspan="8">SWING MACHINERY</td>
        </tr>
        <!-- Drain Plug -->
        <tr>
            <td>Drain Plug</td>
            <td class="al-c" rowspan="2" colspan="3"><br><br>Visual check, Engine stopped</td>
            <td colspan="2">No excessive Metalic Powder</td>
            <td class="al-c">$actual[swing_drain_plug]</td>
            <td class="al-c">$actual[swing_drain_plug_remark]</td>
        </tr>
        <!-- Oil Leak -->
        <tr>
            <td>Oil Leak</td>
            <td colspan="2">No leaked </td>
            <td class="al-c">$actual[swing_oil_leak]</td>
            <td class="al-c">$actual[swing_oil_leak_remark]</td>
        </tr>
        <!-- SWING CRICLE BEARING -->
        <tr>
            <td class="al-c bg-subhead" colspan="8">SWING CRICLE BEARING</td>
        </tr>
        <!-- Axial play -->
        <tr>
            <td>Axial play</td>
            <td colspan="2">Play outer circle and inner circle bearing</td>
            <td class="al-c"><br><br>mm</td>
            <td class="al-c"><br><br>0.5 - 1.5</td>
            <td class="al-c"><br><br>2.0</td>
            <td class="al-c"><br><br>$actual[axial_play]</td>
            <td class="al-c"><br><br>$actual[axial_play_remark]</td>
        </tr>
        <!-- ELECTRICAL -->
        <tr>
            <td class="al-c bg-subhead" colspan="8">ELECTRICAL</td>
        </tr>
        <!-- Instrument panel -->
        <tr>
            <td>Instrument panel</td>
            <td colspan="2"><br><br>Completeness and function</td>
            <td colspan="3"><br><br>Complete and normal function</td>
            <td class="al-c"><br><br>$actual[instrument_panel]</td>
            <td class="al-c"><br><br>$actual[instrument_panel_remark]</td>
        </tr>
        <!-- Starting system -->
        <tr>
            <td>Starting system</td>
            <td colspan="2"><br><br>Condition and function</td>
            <td colspan="3"><br><br>Good installation and normal function</td>
            <td class="al-c"><br><br>$actual[starting_system]</td>
            <td class="al-c"><br><br>$actual[starting_system_remark]</td>
        </tr>
        <!-- Chargin System -->
        <tr>
            <td>Charging System</td>
            <td colspan="2"><br><br>Condition and function</td>
            <td colspan="3"><br><br>Good installation and normal function</td>
            <td class="al-c"><br><br>$actual[charging_system]</td>
            <td class="al-c"><br><br>$actual[charging_system_remark]</td>
        </tr>
        <!-- Lighting -->
        <tr>
            <td>Lighting</td>
            <td colspan="2">Condition and function</td>
            <td colspan="3">Complete and normal function</td>
            <td class="al-c">$actual[lighting]</td>
            <td class="al-c">$actual[lighting_remark]</td>
        </tr>
        <!-- Battery -->
        <tr>
            <td><br><br>Battery</td>
            <td colspan="2">Condition, electrolite level, specific grafity and load test. </td>
            <td colspan="3"><br><br>Good condition</td>
            <td class="al-c"><br><br>$actual[battery]</td>
            <td class="al-c"><br><br>$actual[battery_remark]</td>
        </tr>
        <!-- Wiring harness -->
        <tr>
            <td>Wiring harness</td>
            <td colspan="2">Condition, connection, clamping</td>
            <td colspan="3"><br><br>Good installation and condition</td>
            <td class="al-c"><br><br>$actual[wiring_harness]</td>
            <td class="al-c"><br><br>$actual[wiring_harness_remark]</td>
        </tr>
        <!-- VHMS/Komtrak -->
        <tr>
            <td>VHMS/Komtrak</td>
            <td colspan="2"><br><br>Condition and function</td>
            <td colspan="3"><br><br>Good condition and function</td>
            <td class="al-c"><br><br>$actual[vhms_komtrak]</td>
            <td class="al-c"><br><br>$actual[vhms_komtrak_remark]</td>
        </tr>
        <!-- OPTIONAL EQUIPMENT -->
        <tr>
            <td class="al-c bg-subhead" colspan="8">
                OPTIONAL EQUIPMENT
            </td>
        </tr>
        <!-- Emergency shutdown -->
        <tr>
            <td>Emergency shutdown</td>
            <td colspan="2">Completeness, condition and function</td>
            <td colspan="3"><br><br>Complete and normal function</td>
            <td class="al-c"><br><br>$actual[emergency_shutdown]</td>
            <td class="al-c"><br><br>$actual[emergency_shutdown_remark]</td>
        </tr>
        <!-- Logout Switch -->
        <tr>
            <td>Logout Switch</td>
            <td colspan="2">Completeness, condition and function</td>
            <td colspan="3"><br><br>Complete and normal function</td>
            <td class="al-c"><br><br>$actual[logout_switch]</td>
            <td class="al-c"><br><br>$actual[logout_switch_remark]</td>
        </tr>
        <!-- PDU -->
        <tr>
            <td>PDU</td>
            <td colspan="2">Completeness, condition and function</td>
            <td colspan="3"><br><br>Complete and normal function</td>
            <td class="al-c"><br><br>$actual[pdu]</td>
            <td class="al-c"><br><br>$actual[pdu_remark]</td>
        </tr>
        <!-- Autolube -->
        <tr>
            <td>Autolube</td>
            <td colspan="2">Completeness, condition and function</td>
            <td colspan="3"><br><br>Complete and normal function</td>
            <td class="al-c"><br><br>$actual[autolube]</td>
            <td class="al-c"><br><br>$actual[autolube_remark]</td>
        </tr>
        <!-- Fire suppression -->
        <tr>
            <td>Fire suppression</td>
            <td colspan="2">Completeness, condition and function</td>
            <td colspan="3"><br><br>Complete and normal function</td>
            <td class="al-c"><br><br>$actual[fire_suppression]</td>
            <td class="al-c"><br><br>$actual[fire_suppression_remark]</td>
        </tr>
        <!-- Fatique warning -->
        <tr>
            <td>Fatique warning</td>
            <td colspan="2">Completeness, condition and function</td>
            <td colspan="3"><br><br>Complete and normal function</td>
            <td class="al-c"><br><br>$actual[fatique_warning]</td>
            <td class="al-c"><br><br>$actual[fatique_warning_remark]</td>
        </tr>
        <!-- Backup alarm -->
        <tr>
            <td>Backup alarm</td>
            <td colspan="2">Completeness, condition and function</td>
            <td colspan="3"><br><br>Complete and normal function</td>
            <td class="al-c"><br><br>$actual[backup_alarm]</td>
            <td class="al-c"><br><br>$actual[backup_alarm_remark]</td>
        </tr>
        <!-- GENERAL MACHINE CONDITION -->
        <tr>
            <td class="al-c bg-subhead" colspan="8">
                GENERAL MACHINE CONDITION
            </td>
        </tr>
        <!-- Attachment & Frame -->
        <tr>
            <td>Attachment & Frame</td>
            <td colspan="2">Completeness, worn and crack detection</td>
            <td colspan="3"><br><br>No crack</td>
            <td class="al-c"><br><br>$actual[attachment_frame]</td>
            <td class="al-c"><br><br>$actual[attachment_frame_remark]
            </td>
        </tr>
        <!-- Machine -->
        <tr>
            <td>Machine</td>
            <td colspan="2">Cleaness, wear, completeness and condition</td>
            <td colspan="3"><br><br>Complete and normal condition</td>
            <td class="al-c"><br><br>$actual[machine]</td>
            <td class="al-c"><br><br>$actual[machine_remark]</td>
        </tr>
        <!-- Undercarriage -->
        <tr>
            <td>Undercarriage</td>
            <td colspan="2">Cleaness, wear, completeness and condition</td>
            <td colspan="3"><br><br>Complete and normal condition</td>
            <td class="al-c"><br><br>$actual[undercarriage]</td>
            <td class="al-c"><br><br>$actual[undercarriage_remark]</td>
        </tr>
    </tbody>
</table>
<br><br>
<table width="100%">
    <br><br><br>
    <tr class="al-c">
        <td>Approved by :</td>
        <td>Acknowledge by:</td>
        <td>Prepared by:</td>
    </tr>
    <br><br><br><br><br><br><br><br>
    <tr class="al-c">
        <td>( UT SDH )</td>
        <td>( UT Supervisor )</td>
        <td>( UT Mechanic )</td>
    </tr>
</table>
EOD;

$pdf->writeHTML($headtbl, true, false, false, false, '');
$pdf->writeHTML($rowtbl, true, false, false, false, '');

$pdf->AddPage();
$pdf->writeHTML($rowtbl2, true, false, false, false, '');

// ---------------------------------------------------------

//Close and output PDF document
$name_save = uniqid();
$pdf->Output("$name_save.pdf", 'I');

//============================================================+
// END OF FILE
//============================================================+
