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
     <td class="align-middle" rowspan="10"><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Engine Speed
     </td>
     <td colspan="2" class="align-middle">Low Idle, Low
     </td>
     <td class="align-middle text-center al-c" rowspan="10"><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Rpm</td>
     <td colspan="2" class="text-center al-c">625 - 675</td>
     <td class="align-middle text-center al-c">$actual[engine_low_idle_low]
     </td>
     <td class="align-middle text-center al-c">$actual[engine_low_idle_low_remark]
     </td>
 </tr>
 <!-- row 2 -->
 <tr>
     <td colspan="2">Low Idle, Hi
     </td>
     <td class="text-center al-c" colspan="2">895 - 995</td>
     <td class="align-middle text-center al-c">$actual[engine_low_idle_hi]
     </td>
     <td class="align-middle text-center al-c">$actual[engine_low_idle_hi_remark]
     </td>
 </tr>
 <!-- row 3 -->
 <tr>
     <td colspan="2">High Idle, Power mode
     </td>
     <td class="text-center al-c" colspan="2">2200 - 2300</td>
     <td class="align-middle text-center al-c">$actual[engine_high_idle_power]
     </td>
     <td class="align-middle text-center al-c">$actual[engine_high_idle_power_remark]
     </td>
 </tr>
 <!-- row 4 -->
 <tr>
     <td colspan="2">High Idle, Economy mode
     </td>
     <td class="text-center al-c" colspan="2">2,050 - 2,150</td>
     <td class="align-middle text-center al-c">$actual[engine_high_idle_eco]
     </td>
     <td class="align-middle text-center al-c">$actual[engine_high_idle_eco_remark]
     </td>
 </tr>
 <!-- row 5 -->
 <tr>
     <td colspan="2">High Idle, Reverse RH
     </td>
     <td class="text-center al-c" colspan="2">2,000 - 2,100</td>
     <td class="align-middle text-center al-c">$actual[engine_high_idle_rev]
     </td>
     <td class="align-middle text-center al-c">$actual[engine_high_idle_rev_remark]
     </td>
 </tr>
 <!-- row 6 -->
 <tr>
     <td colspan="2">High Idle, Reverse RH (Power Mode)
     </td>
     <td class="text-center al-c" colspan="2"><br><br>2,200 - 2,300</td>
     <td class="align-middle text-center al-c"><br><br>$actual[engine_high_idle_rev_power]
     </td>
     <td class="align-middle text-center al-c"><br><br>$actual[engine_high_idle_rev_power_remark]
     </td>
 </tr>
 <!-- row 7 -->
 <tr>
     <td colspan="2">Torque convertor stall, A mode
     </td>
     <td class="text-center al-c" colspan="2"><br><br>1,745 - 1,945 </td>
     <td class="align-middle text-center al-c"><br><br>$actual[engine_torque_a]
     </td>
     <td class="align-middle text-center al-c"><br><br>$actual[engine_torque_a_remark]
     </td>
 </tr>
 <!-- row 8 -->
 <tr>
     <td colspan="2">Torque convertor stall, B mode
     </td>
     <td class="text-center al-c" colspan="2"><br><br>1,680 - 1,880</td>
     <td class="align-middle text-center al-c"><br><br>$actual[engine_torque_b]
     </td>
     <td class="align-middle text-center al-c"><br><br>$actual[engine_torque_b_remark]
     </td>
 </tr>
 <!-- row 9 -->
 <tr>
     <td colspan="2">Torque convertor stall, C mode
     </td>
     <td class="text-center al-c" colspan="2"><br><br>1,630 - 1,830</td>
     <td class="align-middle text-center al-c"><br><br>$actual[engine_torque_c]
     </td>
     <td class="align-middle text-center al-c"><br><br>$actual[engine_torque_c_remark]
     </td>
 </tr>
 <!-- row 10 -->
 <tr>
     <td colspan="2">Torque convertor stall, D mode
     </td>
     <td class="text-center al-c" colspan="2"><br><br>1,595 - 1,795</td>
     <td class="align-middle text-center al-c"><br><br>$actual[engine_torque_d]
     </td>
     <td class="align-middle text-center al-c"><br><br>$actual[engine_torque_d_remark]
     </td>
 </tr>

 <!-- Blow-by Press. -->
 <tr>
     <td class="align-middle">Blow-by Press.
     </td>
     <td colspan="2" class="align-middle"><br><br>Power Mode T/C Stall
     </td>
     <td class="align-middle text-center al-c">kPa<br><br>(mmH2O)</td>
     <td class="text-center al-c">Max. 2,94<br><br>(Max. 300)</td>
     <td class="text-center al-c">Max. 5,88<br><br>(Max. 600)</td>
     <td class="align-middle text-center al-c"><br><br>$actual[blow_power]
     </td>
     <td class="align-middle text-center al-c"><br><br>$actual[blow_power_remark]
     </td>
 </tr>

 <!-- Lub Oil Press -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2"><br><br><br>Lub Oil Press
     </td>
     <td colspan="2" class="align-middle">Engine speed: 1,900 rpm (Rated speed)
     </td>
     <td class="align-middle text-center al-c" rowspan="2"><br><br><br>Kg/cm2</td>
     <td class="text-center al-c"><br><br>3.0 - 4.5</td>
     <td class="text-center al-c"><br><br>Min 2.0</td>
     <td class="align-middle text-center al-c"><br><br>$actual[lub_oil_rated]
     </td>
     <td class="align-middle text-center al-c"><br><br>$actual[lub_oil_rated_remark]
     </td>
 </tr>
 <!-- row 2 -->
 <tr>
     <td colspan="2" class="align-middle">Low Idle
     </td>
     <td class="text-center al-c">Min. 0.8</td>
     <td class="text-center al-c">Min 0.7</td>
     <td class="align-middle text-center al-c">$actual[lub_oil_low]
     </td>
     <td class="align-middle text-center al-c">$actual[lub_oil_low_remark]
     </td>
 </tr>

 <!-- Boost Press. -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2"><br><br><br>Boost Press.
     </td>
     <td class="align-middle" rowspan="2">Engine speed: 1,900 rpm (Rated speed)
     </td>
     <td class="align-middle">RH
     </td>
     <td class="align-middle text-center al-c" rowspan="2"><br><br>kPa<br><br>(mmH2O)</td>
     <td class="text-center al-c align-middle" colspan="2">Min. 165,40 <br><br> (min. 1,250)
     </td>
     <td class="align-middle text-center al-c"><br><br>$actual[boost_press_rh]
     </td>
     <td class="align-middle text-center al-c"><br><br>$actual[boost_press_rh_remark]
     </td>
 </tr>
 <!-- row 2 -->
 <tr>
     <td class="align-middle">LH
     </td>
     <td class="text-center al-c">Min. 0.8</td>
     <td class="text-center al-c">Min 0.7</td>
     <td class="align-middle text-center al-c">$actual[boost_press_lh]
     </td>
     <td class="align-middle text-center al-c">$actual[boost_press_lh_remark]
     </td>
 </tr>

 <!-- Exhaust Gas Temp. -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="3"><br><br>Exhaust Gas<br><br>Temp.
     </td>
     <td class="align-middle" colspan="2">Ambient Temp.
     </td>
     <td class="align-middle text-center al-c" rowspan="3"><br><br><br>°C
     </td>
     <td class="align-middle text-center al-c">20</td>
     <td class="text-center al-c align-middle">-
     </td>
     <td class="align-middle text-center al-c">$actual[exhaust_ambient]
     </td>
     <td class="align-middle text-center al-c">$actual[exhaust_ambient_remark]
     </td>
 </tr>
 <tr>
     <td class="align-middle" rowspan="2">All speed range
     </td>
     <td class="align-middle">RH
     </td>
     <td class="text-center al-c align-middle" rowspan="2"><br><br>Max. 700
     </td>
     <td class="text-center al-c align-middle" rowspan="2"><br><br>Max. 750
     </td>
     <td class="align-middle text-center al-c">$actual[exhaust_speed_rh]
     </td>
     <td class="align-middle text-center al-c">$actual[exhaust_speed_rh_remark]
     </td>
 </tr>
 <!-- row 3 -->
 <tr>
     <td class="align-middle">LH
     </td>
     <td class="align-middle text-center al-c">$actual[exhaust_speed_lh]
     </td>
     <td class="align-middle text-center al-c">$actual[exhaust_speed_lh_remark]
     </td>
 </tr>

 <tr class="bg-primary">
     <td class="al-c bg-subhead" colspan="8">
         TORQUE CONVERTOR & TRANSMISSION
     </td>
 </tr>
 <!-- Oil Pressure -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="7"><br><br><br><br><br><br><br>Oil Pressure
     </td>
     <td colspan="2" class="align-middle">Inlet oil pressure
     </td>
     <td class="align-middle text-center al-c" rowspan="7"><br><br><br><br><br><br><br>Kg/cm2</td>
     <td colspan="2" class="text-center al-c">Max. 8.67</td>
     <td class="align-middle text-center al-c">$actual[oil_inlet]
     </td>
     <td class="align-middle text-center al-c">$actual[oil_inlet_remark]
     </td>
 </tr>

 <!-- row 2 -->
 <tr>
     <td class="align-middle" rowspan="2">Outlet oil pressure
     </td>
     <td class="align-middle">brake is ON
     </td>
     <td colspan="2" class="text-center al-c">4.59 - 5.41 </td>
     <td class="align-middle text-center al-c">$actual[oil_outlet_on]
     </td>
     <td class="align-middle text-center al-c">$actual[oil_outlet_on_remark]
     </td>
 </tr>
 <!-- row 3 -->
 <tr>
     <td class="align-middle">brake is OFF
     </td>
     <td colspan="2" class="text-center al-c">4.59 - 6.01 </td>
     <td class="align-middle text-center al-c">$actual[oil_outlet_off]
     </td>
     <td class="align-middle text-center al-c">$actual[oil_outlet_off_remark]
     </td>
 </tr>

 <!-- row 4 -->
 <tr>
     <td class="align-middle" colspan="2">Lockup operating pressure
     </td>
     <td colspan="2" class="text-center al-c">13.5 - 17.5 </td>
     <td class="align-middle text-center al-c">$actual[oil_lockup]
     </td>
     <td class="align-middle text-center al-c">$actual[oil_lockup_remark]
     </td>
 </tr>

 <!-- row 5 -->
 <tr>
     <td class="align-middle" rowspan="2">Main relief valve
     </td>
     <td class="align-middle">N, F1 - F3
     </td>
     <td colspan="2" class="text-center al-c">34.0 - 38.0</td>
     <td class="align-middle text-center al-c">$actual[oil_main_f1]
     </td>
     <td class="align-middle text-center al-c">$actual[oil_main_f1_remark]
     </td>
 </tr>
 <!-- row 6 -->
 <tr>
     <td class="align-middle">F4 - F7
     </td>
     <td colspan="2" class="text-center al-c">20.0 - 24.0 </td>
     <td class="align-middle text-center al-c">$actual[oil_main_f4]
     </td>
     <td class="align-middle text-center al-c">$actual[oil_main_f4_remark]
     </td>
 </tr>

 <!-- row 7 -->
 <tr>
     <td class="align-middle" colspan="2">Transmission lubricating
     </td>
     <td colspan="2" class="text-center al-c">1.2 - 2.2 </td>
     <td class="align-middle text-center al-c">$actual[oil_transmission]
     </td>
     <td class="align-middle text-center al-c">$actual[oil_transmission_remark]
     </td>
 </tr>
 </tbody>
</table>
EOD;
$rowtbl2 = $style . <<<EOD
<table width="100%" cellpadding="2" border="1">
    <tbody>
 <tr class="bg-primary">
     <td class="al-c bg-subhead" colspan="8">STEERING
     </td>
 </tr>

 <!-- Turn Time -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2"><br><br>Turn Time
     </td>
     <td class="align-middle" rowspan="2">Lock ----> Lock
     </td>
     <td class="align-middle">Right to Left
     </td>
     <td class="align-middle text-center al-c" rowspan="2"><br><br>Sec.
     </td>
     <td rowspan="2" class="text-center al-c align-middle"><br><br>Max. 4</td>
     <td rowspan="2" class="text-center al-c align-middle"><br><br>Max. 5</td>
     <td class="align-middle text-center al-c">$actual[turn_time_rl]
     </td>
     <td class="align-middle text-center al-c">$actual[turn_time_rl_remark]
     </td>
 </tr>
 <!-- row 2 -->
 <tr>
     <td class="align-middle">Left to Right
     </td>
     <td class="align-middle text-center al-c">$actual[turn_time_lr]
     </td>
     <td class="align-middle text-center al-c">$actual[turn_time_lr_remark]
     </td>
 </tr>

 <!-- Steering Relieve press. -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2">Steering Relieve press.
     </td>
     <td class="align-middle" colspan="2">Low idle (650 rpm)
     </td>
     <td class="align-middle text-center al-c" rowspan="2"><br><br>Kg/cm2
     </td>
     <td colspan="2" class="text-center al-c align-middle ">185 - 195</td>
     <td class="align-middle text-center al-c">$actual[steering_low]
     </td>
     <td class="align-middle text-center al-c">$actual[steering_low_remark]
     </td>
 </tr>

 <!-- row 2 -->
 <tr>
     <td class="align-middle" colspan="2">Rated speed (1,900 rpm)
     </td>
     <td colspan="2" class="text-center al-c align-middle ">206 - 215</td>
     <td class="align-middle text-center al-c">$actual[steering_rated]
     </td>
     <td class="align-middle text-center al-c">$actual[steering_rated_remark]
     </td>
 </tr>

 <tr class="bg-primary">
     <td class="al-c bg-subhead" colspan="8">BRAKE
     </td>
 </tr>

 <!-- Brake oil pressure -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2"><br><br>Brake oil pressure
     </td>
     <td class="align-middle">Service brake
     </td>
     <td class="align-middle text-center al-c" rowspan="2">1st oprt after charge accmltr
     </td>
     <td class="align-middle text-center al-c" rowspan="4"><br><br><br><br><br>Kg/cm2.
     </td>
     <td colspan="2" class="text-center al-c align-middle ">93 - 107</td>
     <td class="align-middle text-center al-c">$actual[brake_oil_service]
     </td>
     <td class="align-middle text-center al-c">$actual[brake_oil_service_remark]
     </td>
 </tr>
 <!-- row 2 -->
 <tr>
     <td class="align-middle"><br><br>Retarder
     </td>
     <td colspan="2" class="text-center al-c align-middle "><br><br>59 - 72</td>
     <td class="align-middle text-center al-c"><br><br>$actual[brake_oil_retarder]
     </td>
     <td class="align-middle text-center al-c"><br><br>$actual[brake_oil_retarder_remark]
     </td>
 </tr>

 <!-- Charge valve set pressure -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2">Charge valve set pressure
     </td>
     <td class="align-middle">Cut-in
     </td>
     <td class="align-middle text-center al-c" rowspan="2">Engine full throttle
     </td>
     <td colspan="2" class="text-center al-c align-middle ">120 - 130</td>
     <td class="align-middle text-center al-c">$actual[charge_cutin]
     </td>
     <td class="align-middle text-center al-c">$actual[charge_cutin_remark]
     </td>
 </tr>

 <!-- row 2 -->
 <tr>
     <td class="align-middle">Cut-out
     </td>
     <td colspan="2" class="text-center al-c align-middle ">210 - 220</td>
     <td class="align-middle text-center al-c">$actual[charge_cutout]
     </td>
     <td class="align-middle text-center al-c">$actual[charge_cutout_remark]
     </td>
 </tr>

 <!-- Service -->
 <tr>
     <td class="align-middle">Service
     </td>
     <td class="align-middle" rowspan="4" colspan="2">When brake is applied and engine speed in increased gradually in gear speed F2, machine must not start at speed shown in table.
     </td>
     <td class="align-middle text-center al-c" rowspan="4"><br><br><br><br>Rpm
     </td>
     <td class="text-center al-c align-middle ">1760</td>
     <td class="text-center al-c align-middle ">1570</td>
     <td class="align-middle text-center al-c">$actual[service]
     </td>
     <td class="align-middle text-center al-c">$actual[service_remark]
     </td>
 </tr>

 <!-- Retarder -->
 <tr>
     <td class="align-middle">Retarder
     </td>
     <td class="text-center al-c align-middle ">1345</td>
     <td class="text-center al-c align-middle ">1200</td>
     <td class="align-middle text-center al-c">$actual[retarder]
     </td>
     <td class="align-middle text-center al-c">$actual[retarder_remark]
     </td>
 </tr>

 <!-- Parking -->
 <tr>
     <td class="align-middle">Parking
     </td>
     <td class="text-center al-c align-middle ">1610</td>
     <td class="text-center al-c align-middle ">1610</td>
     <td class="align-middle text-center al-c">$actual[parking]
     </td>
     <td class="align-middle text-center al-c">$actual[parking_remark]
     </td>
 </tr>

 <!-- Emergency -->
 <tr>
     <td class="align-middle">Emergency
     </td>
     <td colspan="2" class="text-center al-c align-middle ">T/C stall speed</td>
     <td class="align-middle text-center al-c">$actual[emergency]
     </td>
     <td class="align-middle text-center al-c">$actual[emergency_remark]
     </td>
 </tr>


 <tr class="bg-primary">
     <td class="al-c bg-subhead" colspan="8">SUSPENSION
     </td>
 </tr>

 <!-- Hyd. Oil Temp. -->
 <tr>
     <td class="align-middle">Hyd. Oil Temp.
     </td>
     <td class="align-middle" colspan="2"><br><br>50 - 80
     </td>
     <td class="align-middle text-center al-c"><br><br>°C
     </td>
     <td colspan="2" class="text-center al-c align-middle "><br><br>-</td>
     <td class="align-middle text-center al-c"><br><br>$actual[oil_temp]
     </td>
     <td class="align-middle text-center al-c"><br><br>$actual[oil_temp_remark]
     </td>
 </tr>

 <!-- Hoist Relief Press. -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2">Hoist Relief Press.
     </td>
     <td class="align-middle" colspan="2">Rated speed (1,900 rpm)
     </td>
     <td class="align-middle text-center al-c" rowspan="4"><br><br><br><br>Kg/cm2
     </td>
     <td colspan="2" class="text-center al-c align-middle ">206 - 215</td>
     <td class="align-middle text-center al-c">$actual[hoist_relief_rated]
     </td>
     <td class="align-middle text-center al-c">$actual[hoist_relief_rated_remark]
     </td>
 </tr>

 <!-- row 2 -->
 <tr>
     <td class="align-middle" colspan="2">Low idle (650 rpm)
     </td>
     <td colspan="2" class="text-center al-c align-middle ">185 - 195</td>
     <td class="align-middle text-center al-c">$actual[hoist_relief_low]
     </td>
     <td class="align-middle text-center al-c">$actual[hoist_relief_low_remark]
     </td>
 </tr>

 <!-- Dump EPC valve basic pressure -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2">Dump EPC valve basic pressure
     </td>
     <td class="align-middle" colspan="2">High idle (2,250 rpm)
     </td>
     <td colspan="2" class="text-center al-c align-middle ">30 - 40</td>
     <td class="align-middle text-center al-c">$actual[dump_epc_high]
     </td>
     <td class="align-middle text-center al-c">$actual[dump_epc_high_remark]
     </td>
 </tr>

 <!-- row 2 -->
 <tr>
     <td class="align-middle" colspan="2"><br><br>Low idle (650 rpm)
     </td>
     <td colspan="2" class="text-center al-c align-middle ">22 - 32</td>
     <td class="align-middle text-center al-c"><br><br>$actual[dump_epc_low]
     </td>
     <td class="align-middle text-center al-c"><br><br>$actual[dump_epc_low_remark]
     </td>
 </tr>

 <!-- Dump raising speed -->
 <tr>
     <td class="align-middle">Dump raising speed
     </td>
     <td class="align-middle" colspan="2"><br><br>Rated speed (1,900 rpm)
     </td>
     <td class="align-middle text-center al-c" rowspan="2"><br><br><br><br>Sec.
     </td>
     <td colspan="2" class="text-center al-c align-middle "><br><br>11.5 - 14.5</td>
     <td class="align-middle text-center al-c"><br><br>$actual[dump_raising_speed]
     </td>
     <td class="align-middle text-center al-c"><br><br>$actual[dump_raising_speed_remark]
     </td>
 </tr>

 <!-- Dump lowering speed -->
 <tr>
     <td class="align-middle">Dump lowering speed
     </td>
     <td class="align-middle" colspan="2"><br><br>Low idle (650 rpm), dump lever float position
     </td>
     <td colspan="2" class="text-center al-c align-middle "><br><br><br>12.5 - 15.5 </td>
     <td class="align-middle text-center al-c"><br><br><br>$actual[dump_lowering_speed]
     </td>
     <td class="align-middle text-center al-c"><br><br><br>$actual[dump_lowering_speed_remark]
     </td>
 </tr>

 <!-- Hyd. Drift -->
 <tr>
     <td class="align-middle"><br><br><br>Hyd. Drift
     </td>
     <td class="align-middle" colspan="2">Set With No. 2 Cylinder Extended 200 mm, Then Stop The Engine !
     </td>
     <td class="align-middle text-center al-c"><br><br><br>mm / 5 min.
     </td>
     <td class="text-center al-c align-middle "><br><br><br>Max. 85</td>
     <td class="text-center al-c align-middle "><br><br><br>Max. 170</td>
     <td class="align-middle text-center al-c"><br><br><br>$actual[hyd_drift]
     </td>
     <td class="align-middle text-center al-c"><br><br><br>$actual[hyd_drift_remark]
     </td>
 </tr>

 <tr class="bg-primary">
     <td class="al-c bg-subhead" colspan="8">HYDRAULIC
     </td>
 </tr>

 <!-- Left front -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2"><br><br>Left front
     </td>
     <td class="align-middle" colspan="2">Suspension cylinder length
     </td>
     <td class="align-middle text-center al-c">mm
     </td>
     <td class="text-center al-c align-middle ">237 - 257</td>
     <td class="text-center al-c align-middle ">227 - 267</td>
     <td class="align-middle text-center al-c">$actual[left_front_susp]
     </td>
     <td class="align-middle text-center al-c">$actual[left_front_susp_remark]
     </td>
 </tr>

 <!-- row 2 -->
 <tr>
     <td class="align-middle" colspan="2">Oil, gas leakage
     </td>
     <td class="align-middle text-center al-c">-
     </td>
     <td colspan="2" class="text-center al-c align-middle ">There must be no leakage</td>
     <td class="align-middle text-center al-c">$actual[left_front_oil]
     </td>
     <td class="align-middle text-center al-c">$actual[left_front_oil_remark]
     </td>
 </tr>

 <!-- Right front -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2"><br><br>Right front
     </td>
     <td class="align-middle" colspan="2">Suspension cylinder length
     </td>
     <td class="align-middle text-center al-c">mm
     </td>
     <td class="text-center al-c align-middle ">237 - 257</td>
     <td class="text-center al-c align-middle ">227 - 267</td>
     <td class="align-middle text-center al-c">$actual[right_front_susp]
     </td>
     <td class="align-middle text-center al-c">$actual[right_front_susp_remark]
     </td>
 </tr>

 <!-- row 2 -->
 <tr>
     <td class="align-middle" colspan="2">Oil, gas leakage
     </td>
     <td class="align-middle text-center al-c">-
     </td>
     <td colspan="2" class="text-center al-c align-middle ">There must be no leakage</td>
     <td class="align-middle text-center al-c">$actual[right_front_oil]
     </td>
     <td class="align-middle text-center al-c">$actual[right_front_oil_remark]
     </td>
 </tr>

 <!-- Left rear -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2"><br><br>Left rear
     </td>
     <td class="align-middle" colspan="2">Suspension cylinder length
     </td>
     <td class="align-middle text-center al-c">mm
     </td>
     <td class="text-center al-c align-middle ">189 - 209</td>
     <td class="text-center al-c align-middle ">179 - 219</td>
     <td class="align-middle text-center al-c">$actual[left_rear_susp]
     </td>
     <td class="align-middle text-center al-c">$actual[left_rear_susp_remark]
     </td>
 </tr>

 <!-- row 2 -->
 <tr>
     <td class="align-middle" colspan="2">Oil, gas leakage
     </td>
     <td class="align-middle text-center al-c">-
     </td>
     <td colspan="2" class="text-center al-c align-middle ">There must be no leakage</td>
     <td class="align-middle text-center al-c">$actual[left_rear_oil]
     </td>
     <td class="align-middle text-center al-c">$actual[left_rear_oil_remark]
     </td>
 </tr>

 <!-- Right rear -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2"><br><br>Right rear
     </td>
     <td class="align-middle" colspan="2">Suspension cylinder length
     </td>
     <td class="align-middle text-center al-c">mm
     </td>
     <td class="text-center al-c align-middle ">189 - 209</td>
     <td class="text-center al-c align-middle ">179 - 219</td>
     <td class="align-middle text-center al-c">$actual[right_rear_susp]
     </td>
     <td class="align-middle text-center al-c">$actual[right_rear_susp_remark]
     </td>
 </tr>

 <!-- row 2 -->
 <tr>
     <td class="align-middle" colspan="2">Oil, gas leakage
     </td>
     <td class="align-middle text-center al-c">-
     </td>
     <td colspan="2" class="text-center al-c align-middle ">There must be no leakage</td>
     <td class="align-middle text-center al-c">$actual[right_rear_oil]
     </td>
     <td class="align-middle text-center al-c">$actual[right_rear_oil_remark]
     </td>
 </tr>

 <!-- DIFFERENTIAL & FINAL DRIVE -->
 <tr class="bg-primary">
     <td class="al-c bg-subhead" colspan="8">DIFFERENTIAL & FINAL DRIVE
     </td>
 </tr>
 <!-- Diff. Drain Plug -->
 <tr>
     <td>Diff. Drain Plug</td>
     <td class="align-middle text-center al-c" rowspan="3"><br><br><br><br>Visual Check</td>
     <td></td>
     <td class="align-middle text-center al-c" colspan="3" rowspan="3"><br><br><br><br>No excessive metalic powder</td>
     <td class="align-middle text-center al-c"><br><br>$actual[diff_drain]
     </td>
     <td class="align-middle text-center al-c"><br><br>$actual[diff_drain_remark]
     </td>
 </tr>
 <!-- Final Drive Drain Plug Check -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2">Final Drive Drain Plug Check</td>
     <td>L/H</td>
     <td class="align-middle text-center al-c">$actual[final_drive_lh]
     </td>
     <td class="align-middle text-center al-c">$actual[final_drive_lh_remark]
     </td>
 </tr>
 <!-- row 2 -->
 <tr>
     <td><br><br>R/H</td>
     <td class="align-middle text-center al-c"><br><br>$actual[final_drive_rh]
     </td>
     <td class="align-middle text-center al-c"><br><br>$actual[final_drive_rh_remark]
     </td>
 </tr>
 </tbody>
 </table>
EOD;
$rowtbl3 = $style . <<<EOD
 <table width="100%" cellpadding="2" border="1">
     <tbody>
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

$pdf->AddPage();
$pdf->writeHTML($rowtbl2, true, false, false, false, '');

$pdf->AddPage();
$pdf->writeHTML($rowtbl3, true, false, false, false, '');

// ---------------------------------------------------------

//Close and output PDF document
$name_save = uniqid();
$pdf->Output("$name_save.pdf", 'I');

//============================================================+
// END OF FILE
//============================================================+
