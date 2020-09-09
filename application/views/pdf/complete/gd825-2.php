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
                                <td class="align-middle" rowspan="2"><br>Engine Speed</td>
                                <td class="align-middle">Eng. Low
                                </td>
                                <td>S6D140E-2</td>
                                <td class="align-middle text-center al-c" rowspan="2"></td>
                                <td class="al-c">600-700</td>
                                <td class="text-center al-c">-</td>
                                <td class="align-middle text-center al-c">
                                $actual[engine_low_speed]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[engine_low_speed_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Eng. High
                                </td>
                                <td></td>
                                <td class="text-center al-c" colspan="2">2300-2400</td>
                                <td class="align-middle text-center al-c">
                                $actual[engine_high_speed]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[engine_high_speed_remark]
                                </td>
                            </tr>
                            <!-- Blow-by Press -->
                            <!-- row 1 -->
                            <tr>
                                <td>Blow-by Press</td>
                                <td>T/C Stall</td>
                                <td></td>
                                <td class="align-middle text-center al-c">mm H2O</td>
                                <td class="al-c">Max. 100</td>
                                <td class="al-c">Max. 200</td>
                                <td class="align-middle text-center al-c">
                                $actual[tc_stall_press]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[tc_stall_press_remark]
                                </td>
                            </tr>
                            <!-- Lub Oil -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2"><br><br>Lub Oil Press.<br></td>
                                <td>Eng. Low</td>
                                <td>S6D140-1</td>
                                <td class="align-middle text-center al-c" rowspan="2"></td>
                                <td class="al-c">Min. 1</td>
                                <td class="al-c">Min. 0.7</td>
                                <td class="align-middle text-center al-c">
                                $actual[engine_low_press]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[engine_low_press_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle">Eng. Low</td>
                                <td>S6D140E-2</td>
                                <td class="al-c">Min. 1.2</td>
                                <td class="al-c">Min. 0.7</td>
                                <td class="align-middle text-center al-c">
                                $actual[engine_low_press2]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[engine_low_press2_remark]
                                </td>
                            </tr>
                            <!-- Boost Press -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle">Boost Press.</td>
                                <td class="align-middle">Eng. Rated</td>
                                <td>S6D140E-2</td>
                                <td class="align-middle text-center al-c"></td>
                                <td class="al-c">Min. 590</td>
                                <td class="al-c">Min. 500</td>
                                <td class="align-middle text-center al-c">
                                $actual[engine_rated_press]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[engine_rated_press_remark]
                                </td>
                            </tr>
                            <!-- Exhaust Gas Temp -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle"><br>Exhaust Gas Temp<br></td>
                                <td class="align-middle"><br><br>T/C Stall</td>
                                <td><br><br>S6D140E-2</td>
                                <td class="align-middle text-center al-c"><br><br>°C</td>
                                <td class="al-c"><br><br>Min. 700</td>
                                <td class="al-c"><br><br>Min. 700</td>
                                <td class="align-middle text-center al-c">
                                <br><br>
                                $actual[tc_stall_temp]
                                </td>
                                <td class="align-middle text-center al-c">
                                <br><br>
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
                                <td class="align-middle" rowspan="4"><br><br><br><br><br>Inching Pedal</td>
                                <td>Operating Effect</td>
                                <td>Engine Stop</td>
                                <td class="text-center al-c">Kg</td>
                                <td class="text-center al-c">11-15</td>
                                <td class="text-center al-c">8-18</td>
                                <td class="align-middle text-center al-c">
                                $actual[operating_effect]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[operating_effect_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Pedal height.</td>
                                <td>When not operated</td>
                                <td class="text-center al-c">mm</td>
                                <td class="text-center al-c">95-105</td>
                                <td class="text-center al-c">90-110</td>
                                <td class="align-middle text-center al-c">
                                $actual[pedal_height]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[pedal_height_remark]
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td>Pedal height.</td>
                                <td>When operated</td>
                                <td class="text-center al-c">mm</td>
                                <td class="text-center al-c">39-47</td>
                                <td class="text-center al-c">39-48</td>
                                <td class="align-middle text-center al-c">
                                $actual[pedal_height_operated]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[pedal_height_operated_remark]
                                </td>
                            </tr>
                            <!-- row 4 -->
                            <tr>
                                <td>Pedal travel.</td>
                                <td>up-down movement</td>
                                <td class="text-center al-c">mm</td>
                                <td class="text-center al-c">55-65</td>
                                <td class="text-center al-c">Max. 65</td>
                                <td class="align-middle text-center al-c">
                                $actual[pedal_travel]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[pedal_travel_remark]
                                </td>
                            </tr>

                            <!-- T/M Valve Press -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="11"><br><br><br><br><br><br><br>T/M Valve Press</td>
                                <td>Pilot oil Press.</td>
                                <td class="align-middle text-center al-c" rowspan="3">Engine at full throttle Oil Temp 40-60°C</td>
                                <td class="align-middle text-center al-c" rowspan="11"><br><br><br><br><br><br><br>Kg/cm2.</td>
                                <td class="text-center al-c">10 - 12</td>
                                <td class="text-center al-c">-</td>
                                <td class="align-middle text-center al-c">
                                $actual[pilot_oil]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[pilot_oil_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Lubricating Oil Press.</td>
                                <td class="text-center al-c">1,0 - 2,5</td>
                                <td class="text-center al-c">-</td>
                                <td class="align-middle text-center al-c">
                                $actual[lubricating_oil]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[lubricating_oil_remark]
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td>Main oil press.</td>
                                <td class="align-middle text-center al-c" rowspan="9"><br><br><br><br><br><br>31 - 34</td>
                                <td class="text-center al-c">-</td>
                                <td class="align-middle text-center al-c">
                                $actual[main_oil]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[main_oil_remark]
                                </td>
                            </tr>
                            <!-- row 4 -->
                            <tr>
                                <td>Clutch F</td>
                                <td class="align-middle text-center al-c" rowspan="8"><br><br><br>Mannual Spool Engine at full throttle Oil Temp 40-60°C</td>
                                <td class="text-center al-c"></td>
                                <td class="align-middle text-center al-c">
                                $actual[clutch_f]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[clutch_f_remark]
                                </td>
                            </tr>
                            <!-- row 5 -->
                            <tr>
                                <td>Clutch R</td>
                                <td class="text-center al-c"></td>
                                <td class="align-middle text-center al-c">
                                $actual[clutch_r]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[clutch_r_remark]
                                </td>
                            </tr>
                            <!-- row 6 -->
                            <tr>
                                <td>Clutch High</td>
                                <td class="text-center al-c"></td>
                                <td class="align-middle text-center al-c">
                                $actual[clutch_high]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[clutch_high_remark]
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch Low</td>
                                <td class="text-center al-c"></td>
                                <td class="align-middle text-center al-c">
                                $actual[clutch_low]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[clutch_low_remark]
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch 1</td>
                                <td class="text-center al-c"></td>
                                <td class="align-middle text-center al-c">
                                $actual[clutch_1]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[clutch_1_remark]
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch 2</td>
                                <td class="text-center al-c"></td>
                                <td class="align-middle text-center al-c">
                                $actual[clutch_2]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[clutch_2_remark]
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch 3</td>
                                <td class="text-center al-c"></td>
                                <td class="align-middle text-center al-c">
                                $actual[clutch_3]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[clutch_3_remark]
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch 4</td>
                                <td class="text-center al-c"></td>
                                <td class="align-middle text-center al-c">
                                $actual[clutch_4]
                                </td>
                                <td class="align-middle text-center al-c">
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
                                <td><br><br>Wheel<br></td>
                                <td><br>Play of steering wheel</td>
                                <td></td>
                                <td class="align-middle text-center al-c"><br><br>mm<br></td>
                                <td class="al-c"><br><br>25 - 45<br></td>
                                <td class="al-c"><br><br>Max. 45<br></td>
                                <td class="align-middle text-center al-c">
                                <br><br>$actual[steering_wheel]<br>
                                </td>
                                <td class="align-middle text-center al-c">
                                <br><br>$actual[steering_wheel_remark]<br>
                                </td>
                            </tr>
                            <!-- Wheel -->
                            <!-- row 1 -->
                            <tr>
                                <td><br><br>Wheel<br></td>
                                <td>Operating Effort.</td>
                                <td>Engine at low idling.</td>
                                <td class="text-center al-c"><br><br>kg.<br></td>
                                <td class="al-c"><br><br>Max. 5<br></td>
                                <td class="al-c"><br><br>Max. 6<br></td>
                                <td class="align-middle text-center al-c">
                                <br><br>$actual[operating_effort_wheel]<br>
                                </td>
                                <td class="align-middle text-center al-c">
                                <br><br>$actual[operating_effort_wheel_remark]<br>
                                </td>
                            </tr>
                            <!-- Steering Pressure. -->
                            <!-- row 1 -->
                            <tr>
                                <td><br><br>Steering Pressure.<br></td>
                                <td>Priority relief valve</td>
                                <td>Engine at full throtte</td>
                                <td class="text-center al-c"><br><br>Kg/cm2<br></td>
                                <td class="al-c"><br><br>170 - 180<br></td>
                                <td class="al-c"><br><br>165 - 185<br></td>
                                <td class="align-middle text-center al-c">
                                <br><br>$actual[priority_relief]<br>
                                </td>
                                <td class="align-middle text-center al-c">
                                <br><br>$actual[priority_relief_remark]<br>
                                </td>
                            </tr>
                            <!-- Brake Pedal -->
                            <!-- row 1 -->
                            <tr>
                                <td>Brake Pedal</td>
                                <td>Operating Effort.</td>
                                <td>Engine at low idling.</td>
                                <td class="text-center al-c">kg.</td>
                                <td class="al-c">30 - 34</td>
                                <td class="al-c">Max. 50</td>
                                <td class="align-middle text-center al-c">
                                $actual[operating_effort_brake]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[operating_effort_brake_remark]
                                </td>
                            </tr>
                            <!-- Air Pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td>Air Pressure</td>
                                <td colspan="2">Engine at full throtte</td>
                                <td class="text-center al-c">Kg/cm2</td>
                                <td class="al-c">4.2 - 9.5</td>
                                <td class="al-c">Min 3.7</td>
                                <td class="align-middle text-center al-c">
                                $actual[engine_full_throtte]
                                </td>
                                <td class="align-middle text-center al-c">
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
                                <td class="align-middle text-center al-c" rowspan="17"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Engine rated speed.</td>
                                <td class="align-middle text-center al-c" rowspan="8"><br><br><br><br><br><br><br>mm/Sec.</td>
                                <td class="al-c">115-145</td>
                                <td class="al-c">115-145</td>
                                <td class="align-middle text-center al-c">
                                $actual[raise_speed]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[raise_speed_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Lower</td>
                                <td class="al-c">115-145</td>
                                <td class="al-c">115-145</td>
                                <td class="align-middle text-center al-c">
                                $actual[lower_speed]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[lower_speed_remark]
                                </td>
                            </tr>
                            <!-- Balde side shift speed, with out move of circle -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Balde side shift speed, <br> with out move of circle</td>
                                <td>Left</td>
                                <td class="al-c">115-145</td>
                                <td class="al-c">115-145</td>
                                <td class="align-middle text-center al-c">
                                $actual[left_out]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[left_out_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td><br><br>Right</td>
                                <td class="al-c"><br><br>115-145</td>
                                <td class="al-c"><br><br>115-145</td>
                                <td class="align-middle text-center al-c">
                                <br><br>$actual[right_out]
                                </td>
                                <td class="align-middle text-center al-c">
                                <br><br>$actual[right_out_remark]
                                </td>
                            </tr>
                            <!-- Balde side shift speed, compared to circle -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Balde side shift speed, <br> compared to circle</td>
                                <td>Left</td>
                                <td class="al-c">115-145</td>
                                <td class="al-c">115-145</td>
                                <td class="align-middle text-center al-c">
                                $actual[left_compared]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[left_compared_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Right</td>
                                <td class="al-c">115-145</td>
                                <td class="al-c">115-145</td>
                                <td class="align-middle text-center al-c">
                                $actual[right_compared]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[right_compared_remark]
                                </td>
                            </tr>
                            <!-- Ripper lifting speed -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Ripper lifting speed</td>
                                <td>Raise</td>
                                <td class="al-c">85 - 115</td>
                                <td class="al-c">85 - 115</td>
                                <td class="align-middle text-center al-c">
                                $actual[raise_ripper]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[raise_ripper_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Lower</td>
                                <td class="al-c">85 - 115</td>
                                <td class="al-c">85 - 115</td>
                                <td class="align-middle text-center al-c">
                                $actual[lower_ripper]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[lower_ripper_remark]
                                </td>
                            </tr>
                            <!-- Blade rotation speed -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2"><br><br><br>Blade rotation speed</td>
                                <td>sn. 11001 - 12050</td>
                                <td class="align-middle text-center al-c" rowspan="2"><br><br><br>deg/sec</td>
                                <td class="al-c"><br><br>8.5 - 9.5<br></td>
                                <td class="al-c"><br><br>8.5 - 9.5<br></td>
                                <td class="align-middle text-center al-c">
                                <br><br>$actual[rotation_down]
                                </td>
                                <td class="align-middle text-center al-c">
                                <br><br>$actual[rotation_down_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>sn. 12051 and up</td>
                                <td class="al-c"><br><br>6.5 - 7.5<br></td>
                                <td class="al-c"><br><br>6.5 - 7.5<br></td>
                                <td class="align-middle text-center al-c">
                                <br><br>$actual[rotation_up]<br>
                                </td>
                                <td class="align-middle text-center al-c">
                                <br><br>$actual[rotation_up_remark]<br>
                                </td>
                            </tr>
                            <!-- Hyd. Drift -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="4"><br><br><br><br><br>Hyd. Drift</td>
                                <td>Extension of Blade Cyl.</td>
                                <td class="align-middle text-center al-c" rowspan="4"><br><br><br><br><br>mm/min.</td>
                                <td class="al-c">10</td>
                                <td class="al-c">10</td>
                                <td class="align-middle text-center al-c">
                                $actual[drift_ext_blade]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[drift_ext_blade_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Retraction of Blade Cyl.</td>
                                <td class="al-c">10</td>
                                <td class="al-c">10</td>
                                <td class="align-middle text-center al-c">
                                $actual[drift_rtn_blade]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[drift_rtn_blade_remark]
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td>Extension of Riper Cyl.</td>
                                <td class="al-c">20</td>
                                <td class="al-c">20</td>
                                <td class="align-middle text-center al-c">
                                $actual[drift_ext_ripper]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[drift_ext_ripper_remark]
                                </td>
                            </tr>
                            <!-- row 4 -->
                            <tr>
                                <td>Retraction of Riper Cyl.</td>
                                <td class="al-c">20</td>
                                <td class="al-c">20</td>
                                <td class="align-middle text-center al-c">
                                $actual[drift_rtn_ripper]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[drift_rtn_ripper_remark]
                                </td>
                            </tr>
                            <!-- Hydraulic pressure -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="3"><br><br><br>Hydraulic pressure</td>
                                <td>Priority v relieve press.</td>
                                <td class="align-middle text-center al-c" rowspan="3"><br><br><br>mm/min.</td>
                                <td class="al-c">240 - 260</td>
                                <td class="al-c">235 - 265</td>
                                <td class="align-middle text-center al-c">
                                $actual[hydraulic_priority]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[hydraulic_priority_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Control valve RH</td>
                                <td class="al-c">240 - 260</td>
                                <td class="al-c">235 - 265</td>
                                <td class="align-middle text-center al-c">
                                $actual[hydraulic_valve_rh]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[hydraulic_valve_rh_remark]
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td>Control valve LH</td>
                                <td class="al-c">240 - 260</td>
                                <td class="al-c">235 - 265</td>
                                <td class="align-middle text-center al-c">
                                $actual[hydraulic_valve_lh]
                                </td>
                                <td class="align-middle text-center al-c">
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
                                <td class="align-middle text-center al-c" rowspan="3"><br><br><br>Visual Check<br><br></td>
                                <td></td>
                                <td class="align-middle text-center al-c" colspan="3" rowspan="3"><br><br><br>No excessive metalic powder<br><br></td>
                                <td class="align-middle text-center al-c">
                                $actual[diff_drain]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[diff_drain_remark]
                                </td>
                            </tr>
                            <!-- Tandem Drain Plug -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Tandem Drain Plug</td>
                                <td class="al-c">L/H</td>
                                <td class="align-middle text-center al-c">
                                $actual[tandem_drain_lh]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[tandem_drain_lh_remark]
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td class="al-c">R/H</td>
                                <td class="align-middle text-center al-c">
                                $actual[tandem_drain_rh]
                                </td>
                                <td class="align-middle text-center al-c">
                                $actual[tandem_drain_rh_remark]
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
