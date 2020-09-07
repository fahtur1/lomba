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
        <tr class="bg-primary">
                                <td class="al-c bg-subhead" colspan="8">
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
                                $actual[engine_low_speed]
                                </td>
                                <td class="align-middle text-center">
                                $actual[engine_low_speed_remark]
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
                                $actual[engine_high_speed]
                                </td>
                                <td class="align-middle text-center">
                                $actual[engine_high_speed_remark]
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
                                $actual[tc_stall_press]
                                </td>
                                <td class="align-middle text-center">
                                $actual[tc_stall_press_remark]
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
                                $actual[engine_low_press]
                                </td>
                                <td class="align-middle text-center">
                                $actual[engine_low_press_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle">Eng. Low</td>
                                <td>S6D140E-2</td>
                                <td>Min. 1.2</td>
                                <td>Min. 0.7</td>
                                <td class="align-middle text-center">
                                $actual[engine_low_press2]
                                </td>
                                <td class="align-middle text-center">
                                $actual[engine_low_press2_remark]
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
                                $actual[engine_rated_press]
                                </td>
                                <td class="align-middle text-center">
                                $actual[engine_rated_press_remark]
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
                                $actual[tc_stall_temp]
                                </td>
                                <td class="align-middle text-center">
                                $actual[tc_stall_temp_remark]
                                </td>
                            </tr>

                            <!-- TRANSMISSION & TORQUE CONVERTER -->
                            <tr class="bg-primary">
                                <td class="al-c bg-subhead" colspan="8">
                                    TRANSMISSION & TORQUE CONVERTER
                                </td>
                            </tr>
                            <!-- Inching Pedal -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="4">Inching Pedal</td>
                                <td>Operating Effect</td>
                                <td>Engine Stop</td>
                                <td class="text-center">Kg</td>
                                <td class="text-center">11-15</td>
                                <td class="text-center">8-18</td>
                                <td class="align-middle text-center">
                                $actual[operating_effect]
                                </td>
                                <td class="align-middle text-center">
                                $actual[operating_effect_remark]
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
                                $actual[pedal_height]
                                </td>
                                <td class="align-middle text-center">
                                $actual[pedal_height_remark]
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
                                $actual[pedal_height_operated]
                                </td>
                                <td class="align-middle text-center">
                                $actual[pedal_height_operated_remark]
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
                                $actual[pedal_travel]
                                </td>
                                <td class="align-middle text-center">
                                $actual[pedal_travel_remark]
                                </td>
                            </tr>

                            <!-- T/M Valve Press -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="11">T/M Valve Press</td>
                                <td>Pilot oil Press.</td>
                                <td class="align-middle text-center" rowspan="3">Engine at full throttle Oil Temp 40-60°C</td>
                                <td class="align-middle text-center" rowspan="11">Kg/cm2.</td>
                                <td class="text-center">10 - 12</td>
                                <td class="text-center">-</td>
                                <td class="align-middle text-center">
                                $actual[pilot_oil]
                                </td>
                                <td class="align-middle text-center">
                                $actual[pilot_oil_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Lubricating Oil Press.</td>
                                <td class="text-center">1,0 - 2,5</td>
                                <td class="text-center">-</td>
                                <td class="align-middle text-center">
                                $actual[lubricating_oil]
                                </td>
                                <td class="align-middle text-center">
                                $actual[lubricating_oil_remark]
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td>Main oil press.</td>
                                <td class="align-middle text-center" rowspan="9">31 - 34</td>
                                <td class="text-center">-</td>
                                <td class="align-middle text-center">
                                $actual[main_oil]
                                </td>
                                <td class="align-middle text-center">
                                $actual[main_oil_remark]
                                </td>
                            </tr>
                            <!-- row 4 -->
                            <tr>
                                <td>Clutch F</td>
                                <td class="align-middle text-center" rowspan="8">Mannual Spool Engine at full throttle Oil Temp 40-60°C</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                $actual[clutch_f]
                                </td>
                                <td class="align-middle text-center">
                                $actual[clutch_f_remark]
                                </td>
                            </tr>
                            <!-- row 5 -->
                            <tr>
                                <td>Clutch R</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                $actual[clutch_r]
                                </td>
                                <td class="align-middle text-center">
                                $actual[clutch_r_remark]
                                </td>
                            </tr>
                            <!-- row 6 -->
                            <tr>
                                <td>Clutch High</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                $actual[clutch_high]
                                </td>
                                <td class="align-middle text-center">
                                $actual[clutch_high_remark]
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch Low</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                $actual[clutch_low]
                                </td>
                                <td class="align-middle text-center">
                                $actual[clutch_low_remark]
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch 1</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                $actual[clutch_1]
                                </td>
                                <td class="align-middle text-center">
                                $actual[clutch_1_remark]
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch 2</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                $actual[clutch_2]
                                </td>
                                <td class="align-middle text-center">
                                $actual[clutch_2_remark]
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch 3</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                $actual[clutch_3]
                                </td>
                                <td class="align-middle text-center">
                                $actual[clutch_3_remark]
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch 4</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                $actual[clutch_4]
                                </td>
                                <td class="align-middle text-center">
                                $actual[clutch_4_remark]
                                </td>
                            </tr>
                            <!-- STEERING & BRAKE -->
                            <tr class="bg-primary">
                                <td class="al-c bg-subhead" colspan="8">
                                    STEERING & BRAKE
                                </td>
                            </tr>
                            <!-- Wheel -->
                            <!-- row 1 -->
                            <tr>
                                <td>Wheel</td>
                                <td>Play of steering wheel</td>
                                <td></td>
                                <td class="align-middle text-center">mm</td>
                                <td>25 - 45</td>
                                <td>Max. 45</td>
                                <td class="align-middle text-center">
                                $actual[steering_wheel]
                                </td>
                                <td class="align-middle text-center">
                                $actual[steering_wheel_remark]
                                </td>
                            </tr>
                            <!-- Wheel -->
                            <!-- row 1 -->
                            <tr>
                                <td>Wheel</td>
                                <td>Operating Effort.</td>
                                <td>Engine at low idling.</td>
                                <td class="text-center">kg.</td>
                                <td>Max. 5</td>
                                <td>Max. 6</td>
                                <td class="align-middle text-center">
                                $actual[operating_effort_wheel]
                                </td>
                                <td class="align-middle text-center">
                                $actual[operating_effort_wheel_remark]
                                </td>
                            </tr>
                            <!-- Steering Pressure. -->
                            <!-- row 1 -->
                            <tr>
                                <td>Steering Pressure.</td>
                                <td>Priority relief valve</td>
                                <td>Engine at full throtte</td>
                                <td class="text-center">Kg/cm2</td>
                                <td>170 - 180</td>
                                <td>165 - 185</td>
                                <td class="align-middle text-center">
                                $actual[priority_relief]
                                </td>
                                <td class="align-middle text-center">
                                $actual[priority_relief_remark]
                                </td>
                            </tr>
                            <!-- Brake Pedal -->
                            <!-- row 1 -->
                            <tr>
                                <td>Brake Pedal</td>
                                <td>Operating Effort.</td>
                                <td>Engine at low idling.</td>
                                <td class="text-center">kg.</td>
                                <td>30 - 34</td>
                                <td>Max. 50</td>
                                <td class="align-middle text-center">
                                $actual[operating_effort_brake]
                                </td>
                                <td class="align-middle text-center">
                                $actual[operating_effort_brake_remark]
                                </td>
                            </tr>
                            <!-- Air Pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td>Air Pressure</td>
                                <td colspan="2">Engine at full throtte</td>
                                <td class="text-center">Kg/cm2</td>
                                <td>4.2 - 9.5</td>
                                <td>Min 3.7</td>
                                <td class="align-middle text-center">
                                $actual[engine_full_throtte]
                                </td>
                                <td class="align-middle text-center">
                                $actual[engine_full_throtte_remark]
                                </td>
                            </tr>
                            <!-- HYDRAULIC -->
                            <tr class="bg-primary">
                                <td class="al-c bg-subhead" colspan="8">
                                    HYDRAULIC
                                </td>
                            </tr>
                            <!-- Blade Lifting Speed -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Blade Lifting Speed</td>
                                <td>Raise</td>
                                <td class="align-middle text-center" rowspan="17">Engine rated speed.</td>
                                <td class="align-middle text-center" rowspan="8">mm/Sec.</td>
                                <td>115-145</td>
                                <td>115-145</td>
                                <td class="align-middle text-center">
                                $actual[raise_speed]
                                </td>
                                <td class="align-middle text-center">
                                $actual[raise_speed_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Lower</td>
                                <td>115-145</td>
                                <td>115-145</td>
                                <td class="align-middle text-center">
                                $actual[lower_speed]
                                </td>
                                <td class="align-middle text-center">
                                $actual[lower_speed_remark]
                                </td>
                            </tr>
                            <!-- Balde side shift speed, with out move of circle -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Balde side shift speed, <br> with out move of circle</td>
                                <td>Left</td>
                                <td>115-145</td>
                                <td>115-145</td>
                                <td class="align-middle text-center">
                                $actual[left_out]
                                </td>
                                <td class="align-middle text-center">
                                $actual[left_out_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Right</td>
                                <td>115-145</td>
                                <td>115-145</td>
                                <td class="align-middle text-center">
                                $actual[right_out]
                                </td>
                                <td class="align-middle text-center">
                                $actual[right_out_remark]
                                </td>
                            </tr>
                            <!-- Balde side shift speed, compared to circle -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Balde side shift speed, <br> compared to circle</td>
                                <td>Left</td>
                                <td>115-145</td>
                                <td>115-145</td>
                                <td class="align-middle text-center">
                                $actual[left_compared]
                                </td>
                                <td class="align-middle text-center">
                                $actual[left_compared_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Right</td>
                                <td>115-145</td>
                                <td>115-145</td>
                                <td class="align-middle text-center">
                                $actual[right_compared]
                                </td>
                                <td class="align-middle text-center">
                                $actual[right_compared_remark]
                                </td>
                            </tr>
                            <!-- Ripper lifting speed -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Ripper lifting speed</td>
                                <td>Raise</td>
                                <td>85 - 115</td>
                                <td>85 - 115</td>
                                <td class="align-middle text-center">
                                $actual[raise_ripper]
                                </td>
                                <td class="align-middle text-center">
                                $actual[raise_ripper_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Lower</td>
                                <td>85 - 115</td>
                                <td>85 - 115</td>
                                <td class="align-middle text-center">
                                $actual[lower_ripper]
                                </td>
                                <td class="align-middle text-center">
                                $actual[lower_ripper_remark]
                                </td>
                            </tr>
                            <!-- Blade rotation speed -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Blade rotation speed</td>
                                <td>sn. 11001 - 12050</td>
                                <td class="align-middle text-center" rowspan="2">deg/sec</td>
                                <td>8.5 - 9.5</td>
                                <td>8.5 - 9.5</td>
                                <td class="align-middle text-center">
                                $actual[rotation_down]
                                </td>
                                <td class="align-middle text-center">
                                $actual[rotation_down_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>sn. 12051 and up</td>
                                <td>6.5 - 7.5</td>
                                <td>6.5 - 7.5</td>
                                <td class="align-middle text-center">
                                $actual[rotation_up]
                                </td>
                                <td class="align-middle text-center">
                                $actual[rotation_up_remark]
                                </td>
                            </tr>
                            <!-- Hyd. Drift -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="4">Hyd. Drift</td>
                                <td>Extension of Blade Cyl.</td>
                                <td class="align-middle text-center" rowspan="4">mm/min.</td>
                                <td>10</td>
                                <td>10</td>
                                <td class="align-middle text-center">
                                $actual[drift_ext_blade]
                                </td>
                                <td class="align-middle text-center">
                                $actual[drift_ext_blade_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Retraction of Blade Cyl.</td>
                                <td>10</td>
                                <td>10</td>
                                <td class="align-middle text-center">
                                $actual[drift_rtn_blade]
                                </td>
                                <td class="align-middle text-center">
                                $actual[drift_rtn_blade_remark]
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td>Extension of Riper Cyl.</td>
                                <td>20</td>
                                <td>20</td>
                                <td class="align-middle text-center">
                                $actual[drift_ext_ripper]
                                </td>
                                <td class="align-middle text-center">
                                $actual[drift_ext_ripper_remark]
                                </td>
                            </tr>
                            <!-- row 4 -->
                            <tr>
                                <td>Retraction of Riper Cyl.</td>
                                <td>20</td>
                                <td>20</td>
                                <td class="align-middle text-center">
                                $actual[drift_rtn_ripper]
                                </td>
                                <td class="align-middle text-center">
                                $actual[drift_rtn_ripper_remark]
                                </td>
                            </tr>
                            <!-- Hydraulic pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="3">Hydraulic pressure</td>
                                <td>Priority v relieve press.</td>
                                <td class="align-middle text-center" rowspan="3">mm/min.</td>
                                <td>240 - 260</td>
                                <td>235 - 265</td>
                                <td class="align-middle text-center">
                                $actual[hydraulic_priority]
                                </td>
                                <td class="align-middle text-center">
                                $actual[hydraulic_priority_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Control valve RH</td>
                                <td>240 - 260</td>
                                <td>235 - 265</td>
                                <td class="align-middle text-center">
                                $actual[hydraulic_valve_rh]
                                </td>
                                <td class="align-middle text-center">
                                $actual[hydraulic_valve_rh_remark]
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td>Control valve LH</td>
                                <td>240 - 260</td>
                                <td>235 - 265</td>
                                <td class="align-middle text-center">
                                $actual[hydraulic_valve_lh]
                                </td>
                                <td class="align-middle text-center">
                                $actual[hydraulic_valve_lh_remark]
                                </td>
                            </tr>
                            <!-- DIFFERENTIAL / FINAL DRIVE & TANDEM -->
                            <tr class="bg-primary">
                                <td class="al-c bg-subhead" colspan="8">
                                    DIFFERENTIAL / FINAL DRIVE & TANDEM
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
                            <!-- Tandem Drain Plug -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Tandem Drain Plug</td>
                                <td>L/H</td>
                                <td class="align-middle text-center">
                                $actual[tandem_drain_lh]
                                </td>
                                <td class="align-middle text-center">
                                $actual[tandem_drain_lh_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>R/H</td>
                                <td class="align-middle text-center">
                                $actual[tandem_drain_rh]
                                </td>
                                <td class="align-middle text-center">
                                $actual[tandem_drain_rh_remark]
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
                    <!-- Undercarriage -->
                    <tr>
                        <td>Undercarriage</td>
                        <td colspan="2">Cleaness, wear, completeness and condition</td>
                        <td colspan="3">Complete and normal condition</td>
                        <td class="align-middle text-center">
                            $actual[undercarriage]
                        </td>
                        <td class="align-middle text-center">
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
