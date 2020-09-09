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
     <td class="align-middle" rowspan="10">
         Engine Speed
     </td>
     <td colspan="2" class="align-middle">
         Low Idle, Low
     </td>
     <td class="align-middle text-center" rowspan="10">Rpm</td>
     <td colspan="2" class="text-center">625 - 675</td>
     <td class="align-middle text-center">
        $actual[engine_low_idle_low]
     </td>
     <td class="align-middle text-center">
        $actual[engine_low_idle_low_remark]
     </td>
 </tr>
 <!-- row 2 -->
 <tr>
     <td colspan="2">
         Low Idle, Hi
     </td>
     <td class="text-center" colspan="2">895 - 995</td>
     <td class="align-middle text-center">
        $actual[engine_low_idle_hi]
     </td>
     <td class="align-middle text-center">
        $actual[engine_low_idle_hi_remark]
     </td>
 </tr>
 <!-- row 3 -->
 <tr>
     <td colspan="2">
         High Idle, Power mode
     </td>
     <td class="text-center" colspan="2">2200 - 2300</td>
     <td class="align-middle text-center">
        $actual[engine_high_idle_power]
     </td>
     <td class="align-middle text-center">
        $actual[engine_high_idle_power_remark]
     </td>
 </tr>
 <!-- row 4 -->
 <tr>
     <td colspan="2">
         High Idle, Economy mode
     </td>
     <td class="text-center" colspan="2">2,050 - 2,150</td>
     <td class="align-middle text-center">
        $actual[engine_high_idle_eco]
     </td>
     <td class="align-middle text-center">
        $actual[engine_high_idle_eco_remark]
     </td>
 </tr>
 <!-- row 5 -->
 <tr>
     <td colspan="2">
         High Idle, Reverse RH
     </td>
     <td class="text-center" colspan="2">2,000 - 2,100</td>
     <td class="align-middle text-center">
        $actual[engine_high_idle_rev]
     </td>
     <td class="align-middle text-center">
        $actual[engine_high_idle_rev_remark]
     </td>
 </tr>
 <!-- row 6 -->
 <tr>
     <td colspan="2">
         High Idle, Reverse RH (Power Mode)
     </td>
     <td class="text-center" colspan="2">2,200 - 2,300</td>
     <td class="align-middle text-center">
        $actual[engine_high_idle_rev_power]
     </td>
     <td class="align-middle text-center">
        $actual[engine_high_idle_rev_power_remark]
     </td>
 </tr>
 <!-- row 7 -->
 <tr>
     <td colspan="2">
         Torque convertor stall, A mode
     </td>
     <td class="text-center" colspan="2">1,745 - 1,945 </td>
     <td class="align-middle text-center">
        $actual[engine_torque_a]
     </td>
     <td class="align-middle text-center">
        $actual[engine_torque_a_remark]
     </td>
 </tr>
 <!-- row 8 -->
 <tr>
     <td colspan="2">
         Torque convertor stall, B mode
     </td>
     <td class="text-center" colspan="2">1,680 - 1,880</td>
     <td class="align-middle text-center">
        $actual[engine_torque_b]
     </td>
     <td class="align-middle text-center">
        $actual[engine_torque_b_remark]
     </td>
 </tr>
 <!-- row 9 -->
 <tr>
     <td colspan="2">
         Torque convertor stall, C mode
     </td>
     <td class="text-center" colspan="2">1,630 - 1,830</td>
     <td class="align-middle text-center">
        $actual[engine_torque_c]
     </td>
     <td class="align-middle text-center">
        $actual[engine_torque_c_remark]
     </td>
 </tr>
 <!-- row 10 -->
 <tr>
     <td colspan="2">
         Torque convertor stall, D mode
     </td>
     <td class="text-center" colspan="2">1,595 - 1,795</td>
     <td class="align-middle text-center">
        $actual[engine_torque_d]
     </td>
     <td class="align-middle text-center">
        $actual[engine_torque_d_remark]
     </td>
 </tr>

 <!-- Blow-by Press. -->
 <tr>
     <td class="align-middle">
         Blow-by Press.
     </td>
     <td colspan="2" class="align-middle">
         Power Mode T/C Stall
     </td>
     <td class="align-middle text-center">kPa<br>(mmH2O)</td>
     <td class="text-center">Max. 2,94<br>(Max. 300)</td>
     <td class="text-center">Max. 5,88<br>(Max. 600)</td>
     <td class="align-middle text-center">
        $actual[blow_power]
     </td>
     <td class="align-middle text-center">
        $actual[blow_power_remark]
     </td>
 </tr>

 <!-- Lub Oil Press -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2">
         Lub Oil Press
     </td>
     <td colspan="2" class="align-middle">
         Engine speed: 1,900 rpm (Rated speed)
     </td>
     <td class="align-middle text-center" rowspan="2">Kg/cm2</td>
     <td class="text-center">3.0 - 4.5</td>
     <td class="text-center">Min 2.0</td>
     <td class="align-middle text-center">
        $actual[lub_oil_rated]
     </td>
     <td class="align-middle text-center">
        $actual[lub_oil_rated_remark]
     </td>
 </tr>
 <!-- row 2 -->
 <tr>
     <td colspan="2" class="align-middle">
         Low Idle
     </td>
     <td class="text-center">Min. 0.8</td>
     <td class="text-center">Min 0.7</td>
     <td class="align-middle text-center">
        $actual[lub_oil_low]
     </td>
     <td class="align-middle text-center">
        $actual[lub_oil_low_remark]
     </td>
 </tr>

 <!-- Boost Press. -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2">
         Boost Press.
     </td>
     <td class="align-middle" rowspan="2">
         Engine speed: 1,900 rpm (Rated speed)
     </td>
     <td class="align-middle">
         RH
     </td>
     <td class="align-middle text-center" rowspan="2">kPa<br>(mmH2O)</td>
     <td class="text-center align-middle" colspan="2">
         Min. 165,40 <br> (min. 1,250)
     </td>
     <td class="align-middle text-center">
        $actual[boost_press_rh]
     </td>
     <td class="align-middle text-center">
        $actual[boost_press_rh_remark]
     </td>
 </tr>
 <!-- row 2 -->
 <tr>
     <td class="align-middle">
         LH
     </td>
     <td class="text-center">Min. 0.8</td>
     <td class="text-center">Min 0.7</td>
     <td class="align-middle text-center">
        $actual[boost_press_lh]
     </td>
     <td class="align-middle text-center">
        $actual[boost_press_lh_remark]
     </td>
 </tr>

 <!-- Exhaust Gas Temp. -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="3">
         Exhaust Gas Temp.
     </td>
     <td class="align-middle" colspan="2">
         Ambient Temp.
     </td>
     <td class="align-middle text-center" rowspan="3">
         °C
     </td>
     <td class="align-middle text-center">20</td>
     <td class="text-center align-middle">
         -
     </td>
     <td class="align-middle text-center">
        $actual[exhaust_ambient]
     </td>
     <td class="align-middle text-center">
        $actual[exhaust_ambient_remark]
     </td>
 </tr>
 <tr>
     <td class="align-middle" rowspan="2">
         All speed range
     </td>
     <td class="align-middle">
         RH
     </td>
     <td class="text-center align-middle" rowspan="2">
         Max. 700
     </td>
     <td class="text-center align-middle" rowspan="2">
         Max. 750
     </td>
     <td class="align-middle text-center">
        $actual[exhaust_speed_rh]
     </td>
     <td class="align-middle text-center">
        $actual[exhaust_speed_rh_remark]
     </td>
 </tr>
 <!-- row 3 -->
 <tr>
     <td class="align-middle">
         LH
     </td>
     <td class="align-middle text-center">
        $actual[exhaust_speed_lh]
     </td>
     <td class="align-middle text-center">
        $actual[exhaust_speed_lh_remark]
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
     <td class="align-middle" rowspan="7">
         Oil Pressure
     </td>
     <td colspan="2" class="align-middle">
         Inlet oil pressure
     </td>
     <td class="align-middle text-center" rowspan="7">Kg/cm2</td>
     <td colspan="2" class="text-center">Max. 8.67</td>
     <td class="align-middle text-center">
        $actual[oil_inlet]
     </td>
     <td class="align-middle text-center">
        $actual[oil_inlet_remark]
     </td>
 </tr>

 <!-- row 2 -->
 <tr>
     <td class="align-middle" rowspan="2">
         Outlet oil pressure
     </td>
     <td class="align-middle">
         brake is ON
     </td>
     <td colspan="2" class="text-center">4.59 - 5.41 </td>
     <td class="align-middle text-center">
        $actual[oil_outlet_on]
     </td>
     <td class="align-middle text-center">
        $actual[oil_outlet_on_remark]
     </td>
 </tr>
 <!-- row 3 -->
 <tr>
     <td class="align-middle">
         brake is OFF
     </td>
     <td colspan="2" class="text-center">4.59 - 6.01 </td>
     <td class="align-middle text-center">
        $actual[oil_outlet_off]
     </td>
     <td class="align-middle text-center">
        $actual[oil_outlet_off_remark]
     </td>
 </tr>

 <!-- row 4 -->
 <tr>
     <td class="align-middle" colspan="2">
         Lockup operating pressure
     </td>
     <td colspan="2" class="text-center">13.5 - 17.5 </td>
     <td class="align-middle text-center">
        $actual[oil_lockup]
     </td>
     <td class="align-middle text-center">
        $actual[oil_lockup_remark]
     </td>
 </tr>

 <!-- row 5 -->
 <tr>
     <td class="align-middle" rowspan="2">
         Main relief valve
     </td>
     <td class="align-middle">
         N, F1 - F3
     </td>
     <td colspan="2" class="text-center">34.0 - 38.0</td>
     <td class="align-middle text-center">
        $actual[oil_main_f1]
     </td>
     <td class="align-middle text-center">
        $actual[oil_main_f1_remark]
     </td>
 </tr>
 <!-- row 6 -->
 <tr>
     <td class="align-middle">
         F4 - F7
     </td>
     <td colspan="2" class="text-center">20.0 - 24.0 </td>
     <td class="align-middle text-center">
        $actual[oil_main_f4]
     </td>
     <td class="align-middle text-center">
        $actual[oil_main_f4_remark]
     </td>
 </tr>

 <!-- row 7 -->
 <tr>
     <td class="align-middle" colspan="2">
         Transmission lubricating
     </td>
     <td colspan="2" class="text-center">1.2 - 2.2 </td>
     <td class="align-middle text-center">
        $actual[oil_transmission]
     </td>
     <td class="align-middle text-center">
        $actual[oil_transmission_remark]
     </td>
 </tr>

 <tr class="bg-primary">
     <td class="al-c bg-subhead" colspan="8">
         STEERING
     </td>
 </tr>

 <!-- Turn Time -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2">
         Turn Time
     </td>
     <td class="align-middle" rowspan="2">
         Lock ----> Lock
     </td>
     <td class="align-middle">
         Right to Left
     </td>
     <td class="align-middle text-center" rowspan="2">
         Sec.
     </td>
     <td rowspan="2" class="text-center align-middle ">Max. 4</td>
     <td rowspan="2" class="text-center align-middle ">Max. 5</td>
     <td class="align-middle text-center">
        $actual[turn_time_rl]
     </td>
     <td class="align-middle text-center">
        $actual[turn_time_rl_remark]
     </td>
 </tr>
 <!-- row 2 -->
 <tr>
     <td class="align-middle">
         Left to Right
     </td>
     <td class="align-middle text-center">
        $actual[turn_time_lr]
     </td>
     <td class="align-middle text-center">
        $actual[turn_time_lr_remark]
     </td>
 </tr>

 <!-- Steering Relieve press. -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2">
         Steering Relieve press.
     </td>
     <td class="align-middle" colspan="2">
         Low idle (650 rpm)
     </td>
     <td class="align-middle text-center" rowspan="2">
         Kg/cm2
     </td>
     <td colspan="2" class="text-center align-middle ">185 - 195</td>
     <td class="align-middle text-center">
        $actual[steering_low]
     </td>
     <td class="align-middle text-center">
        $actual[steering_low_remark]
     </td>
 </tr>

 <!-- row 2 -->
 <tr>
     <td class="align-middle" colspan="2">
         Rated speed (1,900 rpm)
     </td>
     <td colspan="2" class="text-center align-middle ">206 - 215</td>
     <td class="align-middle text-center">
        $actual[steering_rated]
     </td>
     <td class="align-middle text-center">
        $actual[steering_rated_remark]
     </td>
 </tr>

 <tr class="bg-primary">
     <td class="al-c bg-subhead" colspan="8">
         BRAKE
     </td>
 </tr>

 <!-- Brake oil pressure -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2">
         Brake oil pressure
     </td>
     <td class="align-middle">
         Service brake
     </td>
     <td class="align-middle text-center" rowspan="2">
         1st oprt after charge accmltr
     </td>
     <td class="align-middle text-center" rowspan="4">
         Kg/cm2.
     </td>
     <td colspan="2" class="text-center align-middle ">93 - 107</td>
     <td class="align-middle text-center">
        $actual[brake_oil_service]
     </td>
     <td class="align-middle text-center">
        $actual[brake_oil_service_remark]
     </td>
 </tr>
 <!-- row 2 -->
 <tr>
     <td class="align-middle">
         Retarder
     </td>
     <td colspan="2" class="text-center align-middle ">59 - 72</td>
     <td class="align-middle text-center">
        $actual[brake_oil_retarder]
     </td>
     <td class="align-middle text-center">
        $actual[brake_oil_retarder_remark]
     </td>
 </tr>

 <!-- Charge valve set pressure -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2">
         Charge valve set pressure
     </td>
     <td class="align-middle">
         Cut-in
     </td>
     <td class="align-middle text-center" rowspan="2">
         Engine full throttle
     </td>
     <td colspan="2" class="text-center align-middle ">120 - 130</td>
     <td class="align-middle text-center">
        $actual[charge_cutin]
     </td>
     <td class="align-middle text-center">
        $actual[charge_cutin_remark]
     </td>
 </tr>

 <!-- row 2 -->
 <tr>
     <td class="align-middle">
         Cut-out
     </td>
     <td colspan="2" class="text-center align-middle ">210 - 220</td>
     <td class="align-middle text-center">
        $actual[charge_cutout]
     </td>
     <td class="align-middle text-center">
        $actual[charge_cutout_remark]
     </td>
 </tr>

 <!-- Service -->
 <tr>
     <td class="align-middle">
         Service
     </td>
     <td class="align-middle" rowspan="4" colspan="2">
         When brake is applied and engine speed in increased gradually in gear speed F2, machine must not start at speed shown in table.
     </td>
     <td class="align-middle text-center" rowspan="4">
         Rpm
     </td>
     <td class="text-center align-middle ">1760</td>
     <td class="text-center align-middle ">1570</td>
     <td class="align-middle text-center">
        $actual[service]
     </td>
     <td class="align-middle text-center">
        $actual[service_remark]
     </td>
 </tr>

 <!-- Retarder -->
 <tr>
     <td class="align-middle">
         Retarder
     </td>
     <td class="text-center align-middle ">1345</td>
     <td class="text-center align-middle ">1200</td>
     <td class="align-middle text-center">
        $actual[retarder]
     </td>
     <td class="align-middle text-center">
        $actual[retarder_remark]
     </td>
 </tr>

 <!-- Parking -->
 <tr>
     <td class="align-middle">
         Parking
     </td>
     <td class="text-center align-middle ">1610</td>
     <td class="text-center align-middle ">1610</td>
     <td class="align-middle text-center">
        $actual[parking]
     </td>
     <td class="align-middle text-center">
        $actual[parking_remark]
     </td>
 </tr>

 <!-- Emergency -->
 <tr>
     <td class="align-middle">
         Emergency
     </td>
     <td colspan="2" class="text-center align-middle ">T/C stall speed</td>
     <td class="align-middle text-center">
        $actual[emergency]
     </td>
     <td class="align-middle text-center">
        $actual[emergency_remark]
     </td>
 </tr>


 <tr class="bg-primary">
     <td class="al-c bg-subhead" colspan="8">
         SUSPENSION
     </td>
 </tr>

 <!-- Hyd. Oil Temp. -->
 <tr>
     <td class="align-middle">
         Hyd. Oil Temp.
     </td>
     <td class="align-middle" colspan="2">
         50 - 80
     </td>
     <td class="align-middle text-center">
         ° C
     </td>
     <td colspan="2" class="text-center align-middle ">-</td>
     <td class="align-middle text-center">
        $actual[oil_temp]
     </td>
     <td class="align-middle text-center">
        $actual[oil_temp_remark]
     </td>
 </tr>

 <!-- Hoist Relief Press. -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2">
         Hoist Relief Press.
     </td>
     <td class="align-middle" colspan="2">
         Rated speed (1,900 rpm)
     </td>
     <td class="align-middle text-center" rowspan="4">
         Kg/cm2
     </td>
     <td colspan="2" class="text-center align-middle ">206 - 215</td>
     <td class="align-middle text-center">
        $actual[hoist_relief_rated]
     </td>
     <td class="align-middle text-center">
        $actual[hoist_relief_rated_remark]
     </td>
 </tr>

 <!-- row 2 -->
 <tr>
     <td class="align-middle" colspan="2">
         Low idle (650 rpm)
     </td>
     <td colspan="2" class="text-center align-middle ">185 - 195</td>
     <td class="align-middle text-center">
        $actual[hoist_relief_low]
     </td>
     <td class="align-middle text-center">
        $actual[hoist_relief_low_remark]
     </td>
 </tr>

 <!-- Dump EPC valve basic pressure -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2">
         Dump EPC valve basic pressure
     </td>
     <td class="align-middle" colspan="2">
         High idle (2,250 rpm)
     </td>
     <td colspan="2" class="text-center align-middle ">30 - 40</td>
     <td class="align-middle text-center">
        $actual[dump_epc_high]
     </td>
     <td class="align-middle text-center">
        $actual[dump_epc_high_remark]
     </td>
 </tr>

 <!-- row 2 -->
 <tr>
     <td class="align-middle" colspan="2">
         Low idle (650 rpm)
     </td>
     <td colspan="2" class="text-center align-middle ">22 - 32</td>
     <td class="align-middle text-center">
        $actual[dump_epc_low]
     </td>
     <td class="align-middle text-center">
        $actual[dump_epc_low_remark]
     </td>
 </tr>

 <!-- Dump raising speed -->
 <tr>
     <td class="align-middle">
         Dump raising speed
     </td>
     <td class="align-middle" colspan="2">
         Rated speed (1,900 rpm)
     </td>
     <td class="align-middle text-center" rowspan="2">
         Sec.
     </td>
     <td colspan="2" class="text-center align-middle ">11.5 - 14.5</td>
     <td class="align-middle text-center">
        $actual[dump_raising_speed]
     </td>
     <td class="align-middle text-center">
        $actual[dump_raising_speed_remark]
     </td>
 </tr>

 <!-- Dump lowering speed -->
 <tr>
     <td class="align-middle">
         Dump lowering speed
     </td>
     <td class="align-middle" colspan="2">
         Low idle (650 rpm), dump lever float position
     </td>
     <td colspan="2" class="text-center align-middle ">12.5 - 15.5 </td>
     <td class="align-middle text-center">
        $actual[dump_lowering_speed]
     </td>
     <td class="align-middle text-center">
        $actual[dump_lowering_speed_remark]
     </td>
 </tr>

 <!-- Hyd. Drift -->
 <tr>
     <td class="align-middle">
         Hyd. Drift
     </td>
     <td class="align-middle" colspan="2">
         Set With No. 2 Cylinder Extended 200 mm, Then Stop The Engine !
     </td>
     <td class="align-middle text-center">
         mm / 5 min.
     </td>
     <td class="text-center align-middle ">Max. 85</td>
     <td class="text-center align-middle ">Max. 170</td>
     <td class="align-middle text-center">
        $actual[hyd_drift]
     </td>
     <td class="align-middle text-center">
        $actual[hyd_drift_remark]
     </td>
 </tr>

 <tr class="bg-primary">
     <td class="al-c bg-subhead" colspan="8">
         HYDRAULIC
     </td>
 </tr>

 <!-- Left front -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2">
         Left front
     </td>
     <td class="align-middle" colspan="2">
         Suspension cylinder length
     </td>
     <td class="align-middle text-center">
         mm
     </td>
     <td class="text-center align-middle ">237 - 257</td>
     <td class="text-center align-middle ">227 - 267</td>
     <td class="align-middle text-center">
        $actual[left_front_susp]
     </td>
     <td class="align-middle text-center">
        $actual[left_front_susp_remark]
     </td>
 </tr>

 <!-- row 2 -->
 <tr>
     <td class="align-middle" colspan="2">
         Oil, gas leakage
     </td>
     <td class="align-middle text-center">
         -
     </td>
     <td colspan="2" class="text-center align-middle ">There must be no leakage</td>
     <td class="align-middle text-center">
        $actual[left_front_oil]
     </td>
     <td class="align-middle text-center">
        $actual[left_front_oil_remark]
     </td>
 </tr>

 <!-- Right front -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2">
         Right front
     </td>
     <td class="align-middle" colspan="2">
         Suspension cylinder length
     </td>
     <td class="align-middle text-center">
         mm
     </td>
     <td class="text-center align-middle ">237 - 257</td>
     <td class="text-center align-middle ">227 - 267</td>
     <td class="align-middle text-center">
        $actual[right_front_susp]
     </td>
     <td class="align-middle text-center">
        $actual[right_front_susp_remark]
     </td>
 </tr>

 <!-- row 2 -->
 <tr>
     <td class="align-middle" colspan="2">
         Oil, gas leakage
     </td>
     <td class="align-middle text-center">
         -
     </td>
     <td colspan="2" class="text-center align-middle ">There must be no leakage</td>
     <td class="align-middle text-center">
        $actual[right_front_oil]
     </td>
     <td class="align-middle text-center">
        $actual[right_front_oil_remark]
     </td>
 </tr>

 <!-- Left rear -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2">
         Left rear
     </td>
     <td class="align-middle" colspan="2">
         Suspension cylinder length
     </td>
     <td class="align-middle text-center">
         mm
     </td>
     <td class="text-center align-middle ">189 - 209</td>
     <td class="text-center align-middle ">179 - 219</td>
     <td class="align-middle text-center">
        $actual[left_rear_susp]
     </td>
     <td class="align-middle text-center">
        $actual[left_rear_susp_remark]
     </td>
 </tr>

 <!-- row 2 -->
 <tr>
     <td class="align-middle" colspan="2">
         Oil, gas leakage
     </td>
     <td class="align-middle text-center">
         -
     </td>
     <td colspan="2" class="text-center align-middle ">There must be no leakage</td>
     <td class="align-middle text-center">
        $actual[left_rear_oil]
     </td>
     <td class="align-middle text-center">
        $actual[left_rear_oil_remark]
     </td>
 </tr>

 <!-- Right rear -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2">
         Right rear
     </td>
     <td class="align-middle" colspan="2">
         Suspension cylinder length
     </td>
     <td class="align-middle text-center">
         mm
     </td>
     <td class="text-center align-middle ">189 - 209</td>
     <td class="text-center align-middle ">179 - 219</td>
     <td class="align-middle text-center">
        $actual[right_rear_susp]
     </td>
     <td class="align-middle text-center">
        $actual[right_rear_susp_remark]
     </td>
 </tr>

 <!-- row 2 -->
 <tr>
     <td class="align-middle" colspan="2">
         Oil, gas leakage
     </td>
     <td class="align-middle text-center">
         -
     </td>
     <td colspan="2" class="text-center align-middle ">There must be no leakage</td>
     <td class="align-middle text-center">
        $actual[right_rear_oil]
     </td>
     <td class="align-middle text-center">
        $actual[right_rear_oil_remark]
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
     <td>Diff. Drain Plug</td>
     <td class="align-middle text-center" rowspan="3">Visual Check</td>
     <td></td>
     <td class="align-middle text-center" colspan="3" rowspan="3">No excessive metalic powder</td>
     <td class="align-middle text-center">
        $actual[diff_drain]
     </td>
     <td class="align-middle text-center">
        $actual[diff_drain_remark]
     </td>
 </tr>
 <!-- Final Drive Drain Plug Check -->
 <!-- row 1 -->
 <tr>
     <td class="align-middle" rowspan="2">Final Drive Drain Plug Check</td>
     <td>L/H</td>
     <td class="align-middle text-center">
        $actual[final_drive_lh]
     </td>
     <td class="align-middle text-center">
        $actual[final_drive_lh_remark]
     </td>
 </tr>
 <!-- row 2 -->
 <tr>
     <td>R/H</td>
     <td class="align-middle text-center">
        $actual[final_drive_rh]
     </td>
     <td class="align-middle text-center">
        $actual[final_drive_rh_remark]
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
     <td class="align-middle text-center">
         $actual[instrument_panel]
     </td>
     <td class="align-middle text-center">
         $actual[instrument_panel_remark]
     </td>
 </tr>
 <!-- Starting system -->
 <tr>
     <td>Starting system</td>
     <td colspan="2">Condition and function</td>
     <td colspan="3">Good installation and normal function</td>
     <td class="align-middle text-center">
         $actual[starting_system]
     </td>
     <td class="align-middle text-center">
         $actual[starting_system_remark]
     </td>
 </tr>
 <!-- Chargin System -->
 <tr>
     <td>Chargin System</td>
     <td colspan="2">Condition and function</td>
     <td colspan="3">Good installation and normal function</td>
     <td class="align-middle text-center">
         $actual[charging_system]
     </td>
     <td class="align-middle text-center">
         $actual[charging_system_remark]
     </td>
 </tr>
 <!-- Lighting -->
 <tr>
     <td>Lighting</td>
     <td colspan="2">Condition and function</td>
     <td colspan="3">Complete and normal function</td>
     <td class="align-middle text-center">
         $actual[lighting]
     </td>
     <td class="align-middle text-center">
         $actual[lighting_remark]
     </td>
 </tr>
 <!-- Battery -->
 <tr>
     <td>Battery</td>
     <td colspan="2">Condition, electrolite level, specific grafity and load test. </td>
     <td colspan="3">Good condition</td>
     <td class="align-middle text-center">
         $actual[battery]
     </td>
     <td class="align-middle text-center">
         $actual[battery_remark]
     </td>
 </tr>
 <!-- Wiring harness -->
 <tr>
     <td>Wiring harness</td>
     <td colspan="2">Condition, connection, clamping</td>
     <td colspan="3">Good installation and condition</td>
     <td class="align-middle text-center">
         $actual[wiring_harness]
     </td>
     <td class="align-middle text-center">
         $actual[wiring_harness_remark]
     </td>
 </tr>
 <!-- VHMS/Komtrak -->
 <tr>
     <td>VHMS/Komtrak</td>
     <td colspan="2">Condition and function</td>
     <td colspan="3">Good condition and function</td>
     <td class="align-middle text-center">
         $actual[vhms_komtrak]
     </td>
     <td class="align-middle text-center">
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
     <td class="align-middle text-center">
         $actual[emergency_shutdown]
     </td>
     <td class="align-middle text-center">
         $actual[emergency_shutdown_remark]
     </td>
 </tr>
 <!-- Logout Switch -->
 <tr>
     <td>Logout Switch</td>
     <td colspan="2">Completeness, condition and function</td>
     <td colspan="3">Complete and normal function</td>
     <td class="align-middle text-center">
         $actual[logout_switch]
     </td>
     <td class="align-middle text-center">
         $actual[logout_switch_remark]
     </td>
 </tr>
 <!-- PDU -->
 <tr>
     <td>PDU</td>
     <td colspan="2">Completeness, condition and function</td>
     <td colspan="3">Complete and normal function</td>
     <td class="align-middle text-center">
         $actual[pdu]
     </td>
     <td class="align-middle text-center">
         $actual[pdu_remark]
     </td>
 </tr>
 <!-- Autolube -->
 <tr>
     <td>Autolube</td>
     <td colspan="2">Completeness, condition and function</td>
     <td colspan="3">Complete and normal function</td>
     <td class="align-middle text-center">
         $actual[autolube]
     </td>
     <td class="align-middle text-center">
         $actual[autolube_remark]
     </td>
 </tr>
 <!-- Fire suppression -->
 <tr>
     <td>Fire suppression</td>
     <td colspan="2">Completeness, condition and function</td>
     <td colspan="3">Complete and normal function</td>
     <td class="align-middle text-center">
         $actual[fire_suppression]
     </td>
     <td class="align-middle text-center">
         $actual[fire_suppression_remark]
     </td>
 </tr>
 <!-- Fatique warning -->
 <tr>
     <td>Fatique warning</td>
     <td colspan="2">Completeness, condition and function</td>
     <td colspan="3">Complete and normal function</td>
     <td class="align-middle text-center">
         $actual[fatique_warning]
     </td>
     <td class="align-middle text-center">
         $actual[fatique_warning_remark]
     </td>
 </tr>
 <!-- Backup alarm -->
 <tr>
     <td>Backup alarm</td>
     <td colspan="2">Completeness, condition and function</td>
     <td colspan="3">Complete and normal function</td>
     <td class="align-middle text-center">
         $actual[backup_alarm]
     </td>
     <td class="align-middle text-center">
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
     <td class="align-middle text-center">
         $actual[attachment_frame]
     </td>
     <td class="align-middle text-center">
         $actual[attachment_frame_remark]
     </td>
 </tr>
 <!-- Machine -->
 <tr>
     <td>Machine</td>
     <td colspan="2">Cleaness, wear, completeness and condition</td>
     <td colspan="3">Complete and normal condition</td>
     <td class="align-middle text-center">
         $actual[machine]
     </td>
     <td class="align-middle text-center">
         $actual[machine_remark]
     </td>
 </tr>
 </tbody>
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
