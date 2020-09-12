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
$src = base_url('assets/img/UT.png');

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
        <tr class="bg-primary">
        <td class="al-c bg-subhead" colspan="8">
            ENGINE
        </td>
    </tr>
    <!-- Engine Speed -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="6"><br><br><br><br><br><br><br><br>Engine Speed
        </td>
        <td colspan="2" class="align-middle">Low Idling, Low
        </td>
        <td class="align-middle text-center al-c" rowspan="6"><br><br><br><br><br><br><br><br>Rpm</td>
        <td colspan="2" class="text-center al-c">625 - 675</td>
        <td class="align-middle text-center al-c">
            $actual[engine_low]
        </td>
        <td class="align-middle text-center al-c">
            $actual[engine_low_remark]
        </td>
    </tr>
    <!-- row 2 -->
    <tr>
        <td colspan="2">Low Idling, Hi
        </td>
        <td class="text-center al-c" colspan="2">970 - 1030</td>
        <td class="align-middle text-center al-c">$actual[engine_hi]
        </td>
        <td class="align-middle text-center al-c">$actual[engine_hi_remark]
        </td>
    </tr>
    <!-- row 3 -->
    <tr>
        <td colspan="2">Power Mode High Idling
        </td>
        <td class="text-center al-c" colspan="2">2300 - 2400</td>
        <td class="align-middle text-center al-c">$actual[engine_power]
        </td>
        <td class="align-middle text-center al-c">$actual[engine_power_remark]
        </td>
    </tr>
    <!-- row 4 -->
    <tr>
        <td colspan="2">Economy Mode High Idling
        </td>
        <td class="text-center al-c" colspan="2">2250 - 2350</td>
        <td class="align-middle text-center al-c">$actual[engine_eco]
        </td>
        <td class="align-middle text-center al-c">$actual[engine_eco_remark]
        </td>
    </tr>
    <!-- row 5 -->
    <tr>
        <td rowspan="2" class="align-middle text-center al-c"><br><br><br>Power Mode T/C Stall
        </td>
        <td class="text-center al-c">High power mode</td>
        <td class="text-center al-c" colspan="2">
            1940-2140 (sn. 4001-4187)<br><br>
            1790-1990 (sn. 4188 - up)
        </td>
        <td class="align-middle text-center al-c">
            <br><br>$actual[engine_power_high]
        </td>
        <td class="align-middle text-center al-c">
        <br><br>$actual[engine_power_high_remark]
        </td>
    </tr>
    <!-- row 6 -->
    <tr>
        <td class="text-center al-c">Economy mode</td>
        <td class="text-center al-c" colspan="2">
            1850-2050 (sn. 4001-4187)<br><br>
            1730-1930 (sn. 4188 - up)
        </td>
        <td class="align-middle text-center al-c">
        <br><br>$actual[engine_power_eco]
        </td>
        <td class="align-middle text-center al-c">
        <br><br>$actual[engine_power_eco_remark]
        </td>
    </tr>
    <!-- Blow-by Press -->
    <!-- row 1 -->
    <tr>
        <td>Blow-by Press</td>
        <td colspan="2">Power Mode T/C Stall</td>
        <td class="align-middle text-center al-c">mmAq</td>
        <td class="al-c">Max. 150</td>
        <td class="al-c">Max. 300</td>
        <td class="align-middle text-center al-c">$actual[blow_power]
        </td>
        <td class="align-middle text-center al-c">$actual[blow_power_remark]
        </td>
    </tr>
    <!-- Lub Oil -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="2"><br><br>Lub Oil Press.</td>
        <td colspan="2">Power mode High Idling</td>
        <td class="align-middle text-center al-c" rowspan="2"><br><br>Kg/cm2</td>
        <td class="al-c">3.0 - 4.0</td>
        <td class="al-c">Min 2.1</td>
        <td class="align-middle text-center al-c">$actual[lub_power]
        </td>
        <td class="align-middle text-center al-c">$actual[lub_power_remark]
        </td>
    </tr>
    <!-- row 2 -->
    <tr>
        <td colspan="2" class="align-middle">Low Idling, Low</td>
        <td class="al-c">Min. 1</td>
        <td class="al-c">Min. 0.7</td>
        <td class="align-middle text-center al-c">$actual[lub_low]
        </td>
        <td class="align-middle text-center al-c">$actual[lub_low_remark]
        </td>
    </tr>
    <!-- Boost Press -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="2"><br><br>Boost Press.</td>
        <td class="align-middle" rowspan="2"><br><br>T/C Stall</td>
        <td>RH</td>
        <td class="align-middle text-center al-c" rowspan="2"><br><br>mmHg</td>
        <td class="align-middle text-center al-c" rowspan="2"><br><br>Min. 950</td>
        <td class="align-middle text-center al-c" rowspan="2"><br><br>Min. 850</td>
        <td class="align-middle text-center al-c">$actual[boost_stall_rh]
        </td>
        <td class="align-middle text-center al-c">$actual[boost_stall_rh_remark]
        </td>
    </tr>
    <tr>
        <td>LH</td>
        <td class="align-middle text-center al-c">$actual[boost_stall_lh]
        </td>
        <td class="align-middle text-center al-c">$actual[boost_stall_lh_remark]
        </td>
    </tr>
    <!-- Exhaust Gas Temp -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="3"><br><br><br>Exhaust Gas Temp.</td>
        <td class="align-middle" colspan="2">Ambient Temp.</td>
        <td class="align-middle text-center al-c" rowspan=" 3"><br><br><br>°C</td>
        <td class="text-center al-c">-</td>
        <td class="text-center al-c">-</td>
        <td class="align-middle text-center al-c">$actual[exhaust_ambient]
        </td>
        <td class="align-middle text-center al-c">$actual[exhaust_ambient_remark]
        </td>
    </tr>
    <!-- row 2 -->
    <tr>
        <td class="align-middle" rowspan="2"><br><br>T/C Stall</td>
        <td>RH</td>
        <td class="align-middle text-center al-c" rowspan="2"><br><br>Max. 650</td>
        <td class="align-middle text-center al-c" rowspan="2"><br><br>Max. 700</td>
        <td class="align-middle text-center al-c">$actual[exhaust_stall_rh]
        </td>
        <td class="align-middle text-center al-c">$actual[exhaust_stall_rh_remark]
        </td>
    </tr>
    <!-- row 3 -->
    <tr>
        <td>LH</td>
        <td class="align-middle text-center al-c">$actual[exhaust_stall_lh]
        </td>
        <td class="align-middle text-center al-c">$actual[exhaust_stall_lh_remark]
        </td>
    </tr>

    <!-- TORQUE CONVERTOR & TRANSMISSION -->
    <tr class="bg-primary">
        <td class="al-c bg-subhead" colspan="8">
            TORQUE CONVERTOR & TRANSMISSION
        </td>
    </tr>
    <!-- Inlet oil pressure -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="2">Inlet oil pressure</td>
        <td colspan="2">High idling</td>
        <td rowspan="9" class="align-middle text-center al-c"><br><br><br><br><br><br><br><br><br><br>Kg/cm2</td>
        <td colspan="2" class="text-center al-c">7 - 9</td>
        <td class="align-middle text-center al-c">$actual[inlet_high]
        </td>
        <td class="align-middle text-center al-c">$actual[inlet_high_remark]
        </td>
    </tr>
    <!-- row 2 -->
    <tr>
        <td colspan="2">Low idling</td>
        <td colspan="2" class="text-center al-c">0.8 - 1.8</td>
        <td class="align-middle text-center al-c">$actual[inlet_low]
        </td>
        <td class="align-middle text-center al-c">$actual[inlet_low_remark]
        </td>
    </tr>
    <!-- Outlet oil pressure -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="2">Outlet oil pressure</td>
        <td colspan="2">High idling</td>
        <td colspan="2" class="text-center al-c">3 - 5</td>
        <td class="align-middle text-center al-c">$actual[outlet_high]
        </td>
        <td class="align-middle text-center al-c">$actual[outlet_high_remark]
        </td>
    </tr>
    <!-- row 2 -->
    <tr>
        <td colspan="2">Low idling</td>
        <td colspan="2" class="text-center al-c">0.5 - 1.5</td>
        <td class="align-middle text-center al-c">$actual[outlet_low]
        </td>
        <td class="align-middle text-center al-c">$actual[outlet_low_remark]
        </td>
    </tr>
    <!-- Lock-up oil pressure -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="2">Lock-up oil pressure</td>
        <td colspan="2">High idling</td>
        <td colspan="2" class="text-center al-c">15.5 - 16.5</td>
        <td class="align-middle text-center al-c">$actual[lock_high]
        </td>
        <td class="align-middle text-center al-c">$actual[lock_high_remark]
        </td>
    </tr>
    <!-- row 2 -->
    <tr>
        <td colspan="2">Low idling</td>
        <td colspan="2" class="text-center al-c">15.5 - 16.5</td>
        <td class="align-middle text-center al-c">$actual[lock_low]
        </td>
        <td class="align-middle text-center al-c">$actual[lock_low_remark]
        </td>
    </tr>
    <!-- Lubricating oil pressure -->
    <!-- row 1 -->
    <tr>
        <td>Lubricating oil pressure</td>
        <td colspan="2"><br><br>Engine full throttle</td>
        <td colspan="2" class="text-center al-c"><br><br>0.75 - 1.75</td>
        <td class="align-middle text-center al-c">
        <br><br>$actual[lubricating_full]
        </td>
        <td class="align-middle text-center al-c">
        <br><br>$actual[lubricating_full_remark]
        </td>
    </tr>
    <!-- Main Relieve Pressure -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="2"><br><br>Main Relieve Pressure</td>
        <td colspan="2">Low Idling, Low T/M in N </td>
        <td colspan="2" class="text-center al-c">32.5 - 36.5</td>
        <td class="align-middle text-center al-c">$actual[main_relieve_low]
        </td>
        <td class="align-middle text-center al-c">$actual[main_relieve_low_remark]
        </td>
    </tr>
    <!-- row 2 -->
    <tr>
        <td colspan="2">Power Mode High Idling, T/M in N </td>
        <td colspan="2" class="text-center al-c"><br><br>37.0 - 41.0</td>
        <td class="align-middle text-center al-c">
        <br><br>$actual[main_relieve_power]
        </td>
        <td class="align-middle text-center al-c">
        <br><br>$actual[main_relieve_power_remark]
        </td>
    </tr>

    <!-- STEERING -->
    <tr class="bg-primary">
        <td class="al-c bg-subhead" colspan="8">
            STEERING
        </td>
    </tr>
    <!-- Steering time, lock to lock -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="2">Steering time, lock to lock</td>
        <td rowspan="2"><br><br>Low idle, Hi</td>
        <td>Right to Left</td>
        <td rowspan="2" class="align-middle text-center al-c"><br><br>Sec.</td>
        <td rowspan="2" class="align-middle text-center al-c"><br><br>Max 4.</td>
        <td rowspan="2" class="align-middle text-center al-c"><br><br>Max 5.</td>
        <td class="align-middle text-center al-c">$actual[steering_time_rl]
        </td>
        <td class="align-middle text-center al-c">$actual[steering_time_rl_remark]
        </td>
    </tr>
    <!-- row 2 -->
    <tr>
        <td>Left to Right</td>
        <td class="align-middle text-center al-c">$actual[steering_time_lr]
        </td>
        <td class="align-middle text-center al-c">$actual[steering_time_lr_remark]
        </td>
    </tr>
    <!-- Steering Relieve Press. -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="2">Steering Relieve Press.</td>
        <td colspan="2">Low idle, Low</td>
        <td rowspan="2" class="align-middle text-center al-c"><br><br>Kg/cm2.</td>
        <td colspan="2" class="text-center al-c">185 - 195</td>
        <td class="align-middle text-center al-c">$actual[steering_relieve_low]
        </td>
        <td class="align-middle text-center al-c">$actual[steering_relieve_low_remark]
        </td>
    </tr>
    <!-- row 2 -->
    <tr>
        <td colspan="2">Power mode high idling </td>
        <td class="text-center al-c">210 - 225</td>
        <td class="text-center al-c">205 - 225</td>
        <td class="align-middle text-center al-c">$actual[steering_relieve_power]
        </td>
        <td class="align-middle text-center al-c">$actual[steering_relieve_power_remark]
        </td>
    </tr>

    <!-- BRAKB -->
    <tr class="bg-primary">
        <td class="al-c bg-subhead" colspan="8">
            BRAKB
        </td>
    </tr>
    <!-- Air Governor Set Press. -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="2"><br><br><br>Air Governor Set Press.</td>
        <td rowspan="2">Eng. High when unloaded</td>
        <td>Cut in</td>
        <td rowspan="2" class="align-middle text-center al-c"><br><br><br>Kg/cm2</td>
        <td colspan="2" class="align-middle text-center al-c">6.7 - 7.3</td>
        <td class="align-middle text-center al-c">$actual[air_gov_cutin]
        </td>
        <td class="align-middle text-center al-c">$actual[air_gov_cutin_remark]
        </td>
    </tr>

    <!-- row 2 -->
    <tr>
        <td><br><br>Cut out</td>
        <td colspan="2" class="align-middle text-center al-c"><br><br>8.0 - 8.6</td>
        <td class="align-middle text-center al-c"><br><br>$actual[air_gov_cutout]
        </td>
        <td class="align-middle text-center al-c"><br><br>$actual[air_gov_cutout_remark]
        </td>
    </tr>
    <!-- Service brake -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="2"><br><br>Service brake</td>
        <td rowspan="8" colspan="2" class="align-middle text-center al-c"><br><br><br><br><br><br><br>Apply brake T/M in D, read engine speed when vehicle starts to move</td>
        <td rowspan="8" class="align-middle text-center al-c"><br><br><br><br><br><br><br><br>Rpm</td>
        <td colspan="2" class="align-middle text-center al-c">Min 2000 (sn 4001-4187)</td>
        <td class="align-middle text-center al-c">$actual[service_brake1]
        </td>
        <td class="align-middle text-center al-c">$actual[service_brake1_remark]
        </td>
    </tr>

    <!-- row 2 -->
    <tr>
        <td colspan="2" class="align-middle text-center al-c">Min 1750 (sn 4188 and up)</td>
        <td class="align-middle text-center al-c">$actual[service_brake2]
        </td>
        <td class="align-middle text-center al-c">$actual[service_brake2_remark]
        </td>
    </tr>

    <!-- Retarder brake -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="2">Retarder brake</td>
        <td colspan="2" class="align-middle text-center al-c">Min 1500 (sn 4001-4187)</td>
        <td class="align-middle text-center al-c">$actual[retarder_brake1]
        </td>
        <td class="align-middle text-center al-c">$actual[retarder_brake1_remark]
        </td>
    </tr>

    <!-- row 2 -->
    <tr>
        <td colspan="2" class="align-middle text-center al-c">Min 1300 (sn 4188 and up)</td>
        <td class="align-middle text-center al-c">$actual[retarder_brake2]
        </td>
        <td class="align-middle text-center al-c">$actual[retarder_brake2_remark]
        </td>
    </tr>

    <!-- Parking brake -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="2"><br><br>Parking brake</td>
        <td colspan="2" class="align-middle text-center al-c">Min 2040 (sn 4001-4187)</td>
        <td class="align-middle text-center al-c">$actual[parking_brake1]
        </td>
        <td class="align-middle text-center al-c">$actual[parking_brake1_remark]
        </td>
    </tr>

    <!-- row 2 -->
    <tr>
        <td colspan="2" class="align-middle text-center al-c">Min 1890 (sn 4188 and up)</td>
        <td class="align-middle text-center al-c">$actual[parking_brake2]
        </td>
        <td class="align-middle text-center al-c">$actual[parking_brake2_remark]
        </td>
    </tr>
    <!-- Emergency brake -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="2">Emergency brake</td>
        <td colspan="2" class="align-middle text-center al-c">Min 2040 (sn 4001-4187)</td>
        <td class="align-middle text-center al-c">$actual[emergency_brake1]
        </td>
        <td class="align-middle text-center al-c">$actual[emergency_brake1_remark]
        </td>
    </tr>

    <!-- row 2 -->
    <tr>
        <td colspan="2" class="align-middle text-center al-c">Min 1890 (sn 4188 and up)</td>
        <td class="align-middle text-center al-c">$actual[emergency_brake2]
        </td>
        <td class="align-middle text-center al-c">$actual[emergency_brake2_remark]
        </td>
    </tr>

    <!-- Front brake (pad thickness) -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="2">Front brake (pad thickness)</td>
        <td colspan="2">Left</td>
        <td rowspan="2" class="align-middle text-center al-c"><br><br><br>mm</td>
        <td rowspan="2" class="align-middle text-center al-c"><br><br><br>19.5</td>
        <td rowspan="2" class="align-middle text-center al-c"><br><br><br>3.0</td>
        <td class="align-middle text-center al-c">$actual[front_brake_left]
        </td>
        <td class="align-middle text-center al-c">$actual[front_brake_left_remark]
        </td>
    </tr>

    <!-- row 2 -->
    <tr>
        <td colspan="2"><br><br>Right</td>
        <td class="align-middle text-center al-c"><br><br>$actual[front_brake_right]
        </td>
        <td class="align-middle text-center al-c"><br><br>$actual[front_brake_right_remark]
        </td>
    </tr>

    <!-- Rear brake (disc wear masurement gauge) -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="2">Rear brake (disc wear masurement gauge)</td>
        <td colspan="2">Left</td>
        <td rowspan="2" class="align-middle text-center al-c"><br><br><br><br>mm</td>
        <td rowspan="2" class="align-middle text-center al-c"><br><br><br><br>+ 8.9</td>
        <td rowspan="2" class="align-middle text-center al-c"><br><br><br><br>Wear limit</td>
        <td class="align-middle text-center al-c">$actual[rear_brake_left]
        </td>
        <td class="align-middle text-center al-c">$actual[rear_brake_left_remark]
        </td>
    </tr>

    <!-- row 2 -->
    <tr>
        <td colspan="2"><br><br><br>Right</td>
        <td class="align-middle text-center al-c"><br><br><br>$actual[rear_brake_right]
        </td>
        <td class="align-middle text-center al-c"><br><br><br>$actual[rear_brake_right_remark]
        </td>
    </tr>

    <!-- HYDRAULIC EQUIPMENT -->
    <tr class="bg-primary">
        <td class="al-c bg-subhead" colspan="8">
            HYDRAULIC EQUIPMENT
        </td>
    </tr>
    <!-- Hyd. Oil Temp -->
    <tr>
        <td class="align-middle">Hyd. Oil Temp</td>
        <td colspan="2"></td>
        <td class="align-middle text-center al-c">° C</td>
        <td colspan="2" class="align-middle text-center al-c">-</td>
        <td class="align-middle text-center al-c">$actual[oil_temp]
        </td>
        <td class="align-middle text-center al-c">$actual[oil_temp_remark]
        </td>
    </tr>

    <!-- Hoist Relieve Press. -->
    <!-- row 1 -->
    <tr>
        <td rowspan="2" class="align-middle">Hoist Relieve Press.</td>
        <td colspan="2">Low Idling Hi</td>
        <td rowspan="2" class="align-middle text-center al-c"><br><br>Kg/cm2</td>
        <td colspan="2" class="align-middle text-center al-c">185 - 195</td>
        <td class="align-middle text-center al-c">$actual[hoist_low]
        </td>
        <td class="align-middle text-center al-c">$actual[hoist_low_remark]
        </td>
    </tr>

    <!-- row 2 -->
    <tr>
        <td colspan="2">Power Mode High Idling</td>
        <td colspan="2" class="align-middle text-center al-c">200 - 215</td>
        <td class="align-middle text-center al-c">$actual[hoist_power]
        </td>
        <td class="align-middle text-center al-c">$actual[hoist_power_remark]
        </td>
    </tr>

    <!-- Raising Speed -->
    <tr>
        <td class="align-middle">Raising Speed</td>
        <td colspan="2">Power Mode High Idling</td>
        <td class="align-middle text-center al-c">Sec.</td>
        <td colspan="2" class="align-middle text-center al-c">11.5 - 14.5</td>
        <td class="align-middle text-center al-c">$actual[raising_speed]
        </td>
        <td class="align-middle text-center al-c">$actual[raising_speed_remark]
        </td>
    </tr>

    <!-- Hyd. Drift -->
    <tr>
        <td class="align-middle"><br><br><br>Hyd. Drift</td>
        <td colspan="2">Set with no. 2 cylinder extended 200 mm, then stop the engine </td>
        <td class="align-middle text-center al-c"><br><br><br>mm /5 min.</td>
        <td class="align-middle text-center al-c"><br><br><br>Max. 85</td>
        <td class="align-middle text-center al-c"><br><br><br>Max. 170</td>
        <td class="align-middle text-center al-c"><br><br><br>$actual[hydrolic_drift]
        </td>
        <td class="align-middle text-center al-c"><br><br><br>$actual[hydrolic_drift_remark]
        </td>
    </tr>

    <!-- SUSPENSION -->
    <tr class="bg-primary">
        <td class="al-c bg-subhead" colspan="8">
            SUSPENSION
        </td>
    </tr>
    <!-- Left Front -->
    <!-- row 1 -->
    <tr>
        <td rowspan="2" class="align-middle"><br><br>Left Front</td>
        <td colspan="2">Suspension cylinder length</td>
        <td class="align-middle text-center al-c">mm</td>
        <td class="align-middle text-center al-c">252 - 272</td>
        <td class="align-middle text-center al-c">242 - 282</td>
        <td class="align-middle text-center al-c">$actual[left_front_suspension]
        </td>
        <td class="align-middle text-center al-c">$actual[left_front_suspension_remark]
        </td>
    </tr>
    <!-- row 2 -->
    <tr>
        <td colspan="2">Oil, gas leakage</td>
        <td class="align-middle text-center al-c">-</td>
        <td colspan="2" class="align-middle text-center al-c">There must be no leakage</td>
        <td class="align-middle text-center al-c">$actual[left_front_oil]
        </td>
        <td class="align-middle text-center al-c">$actual[left_front_oil_remark]
        </td>
    </tr>
    <!-- Right Front -->
    <!-- row 1 -->
    <tr>
        <td rowspan="2" class="align-middle"><br><br>Right Front</td>
        <td colspan="2">Suspension cylinder length</td>
        <td class="align-middle text-center al-c">mm</td>
        <td class="align-middle text-center al-c">252 - 272</td>
        <td class="align-middle text-center al-c">242 - 282</td>
        <td class="align-middle text-center al-c">$actual[right_front_suspension]
        </td>
        <td class="align-middle text-center al-c">$actual[right_front_suspension_remark]
        </td>
    </tr>
    <!-- row 2 -->
    <tr>
        <td colspan="2">Oil, gas leakage</td>
        <td class="align-middle text-center al-c">-</td>
        <td colspan="2" class="align-middle text-center al-c">There must be no leakage</td>
        <td class="align-middle text-center al-c">$actual[right_front_oil]
        </td>
        <td class="align-middle text-center al-c">$actual[right_front_oil_remark]
        </td>
    </tr>
    <!-- Left Rear -->
    <!-- row 1 -->
    <tr>
        <td rowspan="2" class="align-middle"><br><br>Left Rear</td>
        <td colspan="2">Suspension cylinder length</td>
        <td class="align-middle text-center al-c">mm</td>
        <td class="align-middle text-center al-c">230 - 250</td>
        <td class="align-middle text-center al-c">220 - 260</td>
        <td class="align-middle text-center al-c">$actual[left_rear_suspension]
        </td>
        <td class="align-middle text-center al-c">$actual[left_rear_suspension_remark]
        </td>
    </tr>
    <!-- row 2 -->
    <tr>
        <td colspan="2">Oil, gas leakage</td>
        <td class="align-middle text-center al-c">-</td>
        <td colspan="2" class="align-middle text-center al-c">There must be no leakage</td>
        <td class="align-middle text-center al-c">$actual[left_rear_oil]
        </td>
        <td class="align-middle text-center al-c">$actual[left_rear_oil_remark]
        </td>
    </tr>
    <!-- Right Rear -->
    <!-- row 1 -->
    <tr>
        <td rowspan="2" class="align-middle"><br><br>Right Rear</td>
        <td colspan="2">Suspension cylinder length</td>
        <td class="align-middle text-center al-c">mm</td>
        <td class="align-middle text-center al-c">230 - 250</td>
        <td class="align-middle text-center al-c">220 - 260</td>
        <td class="align-middle text-center al-c">$actual[right_rear_suspension]
        </td>
        <td class="align-middle text-center al-c">$actual[right_rear_suspension_remark]
        </td>
    </tr>
    <!-- row 2 -->
    <tr>
        <td colspan="2">Oil, gas leakage</td>
        <td class="align-middle text-center al-c">-</td>
        <td colspan="2" class="align-middle text-center al-c">There must be no leakage</td>
        <td class="align-middle text-center al-c">$actual[right_rear_oil]
        </td>
        <td class="align-middle text-center al-c">$actual[right_rear_oil_remark]
        </td>
    </tr>

    <!-- DIFFERENTIAL & FINAL DRIVE -->
    <tr class="bg-primary">
        <td class="al-c bg-subhead" colspan="8">
            DIFFERENTIAL & FINAL DRIVE
        </td>
    </tr>
    <!-- Diff. Drain Plug -->
    <tr>
        <td class="align-middle">Diff. Drain Plug</td>
        <td class="align-middle text-center al-c" rowspan="3"><br><br><br><br>Visual Check</td>
        <td class="align-middle text-center al-c"><br><br>-</td>
        <td rowspan="3" colspan="3" class="align-middle text-center al-c"><br><br><br><br>No excessive Metalic Powder </td>
        <td class="align-middle text-center al-c"><br><br>$actual[diff_drain]
        </td>
        <td class="align-middle text-center al-c"><br><br>$actual[diff_drain_remark]
        </td>
    </tr>
    <!-- Final Drive Drain Plug -->
    <!-- row 1 -->
    <tr>
        <td rowspan="2" class="align-middle">Final Drive Drain Plug</td>
        <td class="align-middle text-center al-c">L/H</td>
        <td class="align-middle text-center al-c">$actual[final_drive_lh]
        </td>
        <td class="align-middle text-center al-c">$actual[final_drive_lh_remark]
        </td>
    </tr>
    <!-- row 2 -->
    <tr>
        <td class="align-middle text-center al-c">R/H</td>
        <td class="align-middle text-center al-c">$actual[final_drive_rh]
        </td>
        <td class="align-middle text-center al-c">$actual[final_drive_rh_remark]
        </td>
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
        <td><br><br>Logout Switch</td>
        <td colspan="2">Completeness, condition and function</td>
        <td colspan="3"><br><br>Complete and normal function</td>
        <td class="al-c"><br><br>$actual[logout_switch]</td>
        <td class="al-c"><br><br>$actual[logout_switch_remark]</td>
    </tr>
    <!-- PDU -->
    <tr>
        <td><br><br>PDU</td>
        <td colspan="2">Completeness, condition and function</td>
        <td colspan="3"><br><br>Complete and normal function</td>
        <td class="al-c"><br><br>$actual[pdu]</td>
        <td class="al-c"><br><br>$actual[pdu_remark]</td>
    </tr>
    <!-- Autolube -->
    <tr>
        <td><br><br>Autolube</td>
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
        <td><br><br>Backup alarm</td>
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
        <td><br><br>Machine</td>
        <td colspan="2">Cleaness, wear, completeness and condition</td>
        <td colspan="3"><br><br>Complete and normal condition</td>
        <td class="al-c"><br><br>$actual[machine]</td>
        <td class="al-c"><br><br>$actual[machine_remark]</td>
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

// ---------------------------------------------------------

//Close and output PDF document
$name_save = uniqid();
$pdf->Output("$name_save.pdf", 'I');

//============================================================+
// END OF FILE
//============================================================+
