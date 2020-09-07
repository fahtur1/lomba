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
$pdf->SetAuthor('Nicola Asuni');
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
        <td width="45%"> Ardyyy</td>
    </tr>
    <tr>
        <td width="15%"> Date</td>
        <td width="45%"> 07-09-2020</td>
    </tr>
    <tr>
        <td width="15%"> Code Unit</td>
        <td width="45%"> Ardyyy</td>
    </tr>
    <tr>
        <td class="al-c ft-md"><b>PC2000-8</b></td>
        <td><b> Branch / Site</b></td>
        <td colspan="3" width="60%"> Tembilahan</td>
    </tr>
</table>
EOD;

// row table
$rowtbl = $style . <<<EOD
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
                                <?= $pc2000[engine_low_speed] ?>    
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_low_speed_remark] ?>    
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" size="5" value="<?= set_value(engine_high_speed) ?>" name="engine_high_speed">
                                    <?= form_error(engine_high_speed, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" size="5" value="<?= set_value(engine_high_speed_remark) ?>" name="engine_high_speed_remark">
                                    <?= form_error(engine_high_speed_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(tc_stall_press) ?>" size="5" name="tc_stall_press">
                                    <?= form_error(tc_stall_press, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(tc_stall_press_remark) ?>" size="5" name="tc_stall_press_remark">
                                    <?= form_error(tc_stall_press_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(engine_low_press) ?>" size="5" name="engine_low_press">
                                    <?= form_error(engine_low_press, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(engine_low_press_remark) ?>" size="5" name="engine_low_press_remark">
                                    <?= form_error(engine_low_press_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td class="align-middle">Eng. Low</td>
                                <td>S6D140E-2</td>
                                <td>Min. 1.2</td>
                                <td>Min. 0.7</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(engine_low_press2) ?>" size="5" name="engine_low_press2">
                                    <?= form_error(engine_low_press2, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(engine_low_press2_remark) ?>" size="5" name="engine_low_press2_remark">
                                    <?= form_error(engine_low_press2_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(engine_rated_press) ?>" size="5" name="engine_rated_press">
                                    <?= form_error(engine_rated_press, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(engine_rated_press_remark) ?>" size="5" name="engine_rated_press_remark">
                                    <?= form_error(engine_rated_press_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(tc_stall_temp) ?>" size="5" name="tc_stall_temp">
                                    <?= form_error(tc_stall_temp, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(tc_stall_temp_remark) ?>" size="5" name="tc_stall_temp_remark">
                                    <?= form_error(tc_stall_temp_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>

                            <!-- TRANSMISSION & TORQUE CONVERTER -->
                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(operating_effect) ?>" size="5" name="operating_effect">
                                    <?= form_error(operating_effect, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(operating_effect_remark) ?>" size="5" name="operating_effect_remark">
                                    <?= form_error(operating_effect_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(pedal_height) ?>" size="5" name="pedal_height">
                                    <?= form_error(pedal_height, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(pedal_height_remark) ?>" size="5" name="pedal_height_remark">
                                    <?= form_error(pedal_height_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(pedal_height_operated) ?>" size="5" name="pedal_height_operated">
                                    <?= form_error(pedal_height_operated, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(pedal_height_operated_remark) ?>" size="5" name="pedal_height_operated_remark">
                                    <?= form_error(pedal_height_operated_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(pedal_travel) ?>" size="5" name="pedal_travel">
                                    <?= form_error(pedal_travel, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(pedal_travel_remark) ?>" size="5" name="pedal_travel_remark">
                                    <?= form_error(pedal_travel_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(pilot_oil) ?>" size="5" name="pilot_oil">
                                    <?= form_error(pilot_oil, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(pilot_oil_remark) ?>" size="5" name="pilot_oil_remark">
                                    <?= form_error(pilot_oil_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Lubricating Oil Press.</td>
                                <td class="text-center">1,0 - 2,5</td>
                                <td class="text-center">-</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(lubricating_oil) ?>" size="5" name="lubricating_oil">
                                    <?= form_error(lubricating_oil, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(lubricating_oil_remark) ?>" size="5" name="lubricating_oil_remark">
                                    <?= form_error(lubricating_oil_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td>Main oil press.</td>
                                <td class="align-middle text-center" rowspan="9">31 - 34</td>
                                <td class="text-center">-</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(main_oil) ?>" size="5" name="main_oil">
                                    <?= form_error(main_oil, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(main_oil_remark) ?>" size="5" name="main_oil_remark">
                                    <?= form_error(main_oil_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 4 -->
                            <tr>
                                <td>Clutch F</td>
                                <td class="align-middle text-center" rowspan="8">Mannual Spool Engine at full throttle Oil Temp 40-60°C</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(clutch_f) ?>" size="5" name="clutch_f">
                                    <?= form_error(clutch_f, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(clutch_f_remark) ?>" size="5" name="clutch_f_remark">
                                    <?= form_error(clutch_f_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 5 -->
                            <tr>
                                <td>Clutch R</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(clutch_r) ?>" size="5" name="clutch_r">
                                    <?= form_error(clutch_r, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(clutch_r_remark) ?>" size="5" name="clutch_r_remark">
                                    <?= form_error(clutch_r_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 6 -->
                            <tr>
                                <td>Clutch High</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(clutch_high) ?>" size="5" name="clutch_high">
                                    <?= form_error(clutch_high, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(clutch_high_remark) ?>" size="5" name="clutch_high_remark">
                                    <?= form_error(clutch_high_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch Low</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(clutch_low) ?>" size="5" name="clutch_low">
                                    <?= form_error(clutch_low, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(clutch_low_remark) ?>" size="5" name="clutch_low_remark">
                                    <?= form_error(clutch_low_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch 1</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(clutch_1) ?>" size="5" name="clutch_1">
                                    <?= form_error(clutch_1, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(clutch_1_remark) ?>" size="5" name="clutch_1_remark">
                                    <?= form_error(clutch_1_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch 2</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(clutch_2) ?>" size="5" name="clutch_2">
                                    <?= form_error(clutch_2, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(clutch_2_remark) ?>" size="5" name="clutch_2_remark">
                                    <?= form_error(clutch_2_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch 3</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(clutch_3) ?>" size="5" name="clutch_3">
                                    <?= form_error(clutch_3, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(clutch_3_remark) ?>" size="5" name="clutch_3_remark">
                                    <?= form_error(clutch_3_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 7 -->
                            <tr>
                                <td>Clutch 4</td>
                                <td class="text-center"></td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(clutch_4) ?>" size="5" name="clutch_4">
                                    <?= form_error(clutch_4, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(clutch_4_remark) ?>" size="5" name="clutch_4_remark">
                                    <?= form_error(clutch_4_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- STEERING & BRAKE -->
                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(steering_wheel) ?>" size="5" name="steering_wheel">
                                    <?= form_error(steering_wheel, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(steering_wheel_remark) ?>" size="5" name="steering_wheel_remark">
                                    <?= form_error(steering_wheel_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(operating_effort_wheel) ?>" size="5" name="operating_effort_wheel">
                                    <?= form_error(operating_effort_wheel, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(operating_effort_wheel_remark) ?>" size="5" name="operating_effort_wheel_remark">
                                    <?= form_error(operating_effort_wheel_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(priority_relief) ?>" size="5" name="priority_relief">
                                    <?= form_error(priority_relief, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(priority_relief_remark) ?>" size="5" name="priority_relief_remark">
                                    <?= form_error(priority_relief_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(operating_effort_brake) ?>" size="5" name="operating_effort_brake">
                                    <?= form_error(operating_effort_brake, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(operating_effort_brake_remark) ?>" size="5" name="operating_effort_brake_remark">
                                    <?= form_error(operating_effort_brake_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(engine_full_throtte) ?>" size="5" name="engine_full_throtte">
                                    <?= form_error(engine_full_throtte, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(engine_full_throtte_remark) ?>" size="5" name="engine_full_throtte_remark">
                                    <?= form_error(engine_full_throtte_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- HYDRAULIC -->
                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(raise_speed) ?>" size="5" name="raise_speed">
                                    <?= form_error(raise_speed, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(raise_speed_remark) ?>" size="5" name="raise_speed_remark">
                                    <?= form_error(raise_speed_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Lower</td>
                                <td>115-145</td>
                                <td>115-145</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(lower_speed) ?>" size="5" name="lower_speed">
                                    <?= form_error(lower_speed, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(lower_speed_remark) ?>" size="5" name="lower_speed_remark">
                                    <?= form_error(lower_speed_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(left_out) ?>" size="5" name="left_out">
                                    <?= form_error(left_out, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(left_out_remark) ?>" size="5" name="left_out_remark">
                                    <?= form_error(left_out_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Right</td>
                                <td>115-145</td>
                                <td>115-145</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(right_out) ?>" size="5" name="right_out">
                                    <?= form_error(right_out, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(right_out_remark) ?>" size="5" name="right_out_remark">
                                    <?= form_error(right_out_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(left_compared) ?>" size="5" name="left_compared">
                                    <?= form_error(left_compared, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(left_compared_remark) ?>" size="5" name="left_compared_remark">
                                    <?= form_error(left_compared_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Right</td>
                                <td>115-145</td>
                                <td>115-145</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(right_compared) ?>" size="5" name="right_compared">
                                    <?= form_error(right_compared, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(right_compared_remark) ?>" size="5" name="right_compared_remark">
                                    <?= form_error(right_compared_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(raise_ripper) ?>" size="5" name="raise_ripper">
                                    <?= form_error(raise_ripper, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(raise_ripper_remark) ?>" size="5" name="raise_ripper_remark">
                                    <?= form_error(raise_ripper_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Lower</td>
                                <td>85 - 115</td>
                                <td>85 - 115</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(lower_ripper) ?>" size="5" name="lower_ripper">
                                    <?= form_error(lower_ripper, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(lower_ripper_remark) ?>" size="5" name="lower_ripper_remark">
                                    <?= form_error(lower_ripper_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(rotation_down) ?>" size="5" name="rotation_down">
                                    <?= form_error(rotation_down, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(rotation_down_remark) ?>" size="5" name="rotation_down_remark">
                                    <?= form_error(rotation_down_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>sn. 12051 and up</td>
                                <td>6.5 - 7.5</td>
                                <td>6.5 - 7.5</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(rotation_up) ?>" size="5" name="rotation_up">
                                    <?= form_error(rotation_up, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(rotation_up_remark) ?>" size="5" name="rotation_up_remark">
                                    <?= form_error(rotation_up_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(drift_ext_blade) ?>" size="5" name="drift_ext_blade">
                                    <?= form_error(drift_ext_blade, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(drift_ext_blade_remark) ?>" size="5" name="drift_ext_blade_remark">
                                    <?= form_error(drift_ext_blade_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Retraction of Blade Cyl.</td>
                                <td>10</td>
                                <td>10</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(drift_rtn_blade) ?>" size="5" name="drift_rtn_blade">
                                    <?= form_error(drift_rtn_blade, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(drift_rtn_blade_remark) ?>" size="5" name="drift_rtn_blade_remark">
                                    <?= form_error(drift_rtn_blade_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td>Extension of Riper Cyl.</td>
                                <td>20</td>
                                <td>20</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(drift_ext_ripper) ?>" size="5" name="drift_ext_ripper">
                                    <?= form_error(drift_ext_ripper, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(drift_ext_ripper_remark) ?>" size="5" name="drift_ext_ripper_remark">
                                    <?= form_error(drift_ext_ripper_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 4 -->
                            <tr>
                                <td>Retraction of Riper Cyl.</td>
                                <td>20</td>
                                <td>20</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(drift_rtn_ripper) ?>" size="5" name="drift_rtn_ripper">
                                    <?= form_error(drift_rtn_ripper, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(drift_rtn_ripper_remark) ?>" size="5" name="drift_rtn_ripper_remark">
                                    <?= form_error(drift_rtn_ripper_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(hydraulic_priority) ?>" size="5" name="hydraulic_priority">
                                    <?= form_error(hydraulic_priority, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(hydraulic_priority_remark) ?>" size="5" name="hydraulic_priority_remark">
                                    <?= form_error(hydraulic_priority_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>Control valve RH</td>
                                <td>240 - 260</td>
                                <td>235 - 265</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(hydraulic_valve_rh) ?>" size="5" name="hydraulic_valve_rh">
                                    <?= form_error(hydraulic_valve_rh, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(hydraulic_valve_rh_remark) ?>" size="5" name="hydraulic_valve_rh_remark">
                                    <?= form_error(hydraulic_valve_rh_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td>Control valve LH</td>
                                <td>240 - 260</td>
                                <td>235 - 265</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(hydraulic_valve_lh) ?>" size="5" name="hydraulic_valve_lh">
                                    <?= form_error(hydraulic_valve_lh, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(hydraulic_valve_lh_remark) ?>" size="5" name="hydraulic_valve_lh_remark">
                                    <?= form_error(hydraulic_valve_lh_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- DIFFERENTIAL / FINAL DRIVE & TANDEM -->
                            <tr class="bg-primary">
                                <td class="text-white text-center font-weight-bold font-italic" colspan="8">
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(diff_drain) ?>" size="5" name="diff_drain">
                                    <?= form_error(diff_drain, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(diff_drain_remark) ?>" size="5" name="diff_drain_remark">
                                    <?= form_error(diff_drain_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- Tandem Drain Plug -->
                            <!-- row 1 -->
                            <tr>
                                <td class="align-middle" rowspan="2">Tandem Drain Plug</td>
                                <td>L/H</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(tandem_drain_lh) ?>" size="5" name="tandem_drain_lh">
                                    <?= form_error(tandem_drain_lh, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(tandem_drain_lh_remark) ?>" size="5" name="tandem_drain_lh_remark">
                                    <?= form_error(tandem_drain_lh_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>R/H</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(tandem_drain_rh) ?>" size="5" name="tandem_drain_rh">
                                    <?= form_error(tandem_drain_rh, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(tandem_drain_rh_remark) ?>" size="5" name="tandem_drain_rh_remark">
                                    <?= form_error(tandem_drain_rh_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(instrument_panel) ?>" name="instrument_panel" size="5">
                                    <?= form_error(instrument_panel, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(instrument_panel_remark) ?>" name="instrument_panel_remark" size="5">
                                    <?= form_error(instrument_panel_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- Starting system -->
                            <tr>
                                <td>Starting system</td>
                                <td colspan="2">Condition and function</td>
                                <td colspan="3">Good installation and normal function</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(starting_system) ?>" name="starting_system" size="5">
                                    <?= form_error(starting_system, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(starting_system_remark) ?>" name="starting_system_remark" size="5">
                                    <?= form_error(starting_system_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- Chargin System -->
                            <tr>
                                <td>Chargin System</td>
                                <td colspan="2">Condition and function</td>
                                <td colspan="3">Good installation and normal function</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(charging_system) ?>" name="charging_system" size="5">
                                    <?= form_error(charging_system, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(charging_system_remark) ?>" name="charging_system_remark" size="5">
                                    <?= form_error(charging_system_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- Lighting -->
                            <tr>
                                <td>Lighting</td>
                                <td colspan="2">Condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(lighting) ?>" name="lighting" size="5">
                                    <?= form_error(lighting, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(lighting_remark) ?>" name="lighting_remark" size="5">
                                    <?= form_error(lighting_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- Battery -->
                            <tr>
                                <td>Battery</td>
                                <td colspan="2">Condition, electrolite level, specific grafity and load test. </td>
                                <td colspan="3">Good condition</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(battery) ?>" name="battery" size="5">
                                    <?= form_error(battery, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(battery_remark) ?>" name="battery_remark" size="5">
                                    <?= form_error(battery_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- Wiring harness -->
                            <tr>
                                <td>Wiring harness</td>
                                <td colspan="2">Condition, connection, clamping</td>
                                <td colspan="3">Good installation and condition</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(wiring_harness) ?>" name="wiring_harness" size="5">
                                    <?= form_error(wiring_harness, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(wiring_harness_remark) ?>" name="wiring_harness_remark" size="5">
                                    <?= form_error(wiring_harness_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- VHMS/Komtrak -->
                            <tr>
                                <td>VHMS/Komtrak</td>
                                <td colspan="2">Condition and function</td>
                                <td colspan="3">Good condition and function</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(vhms_komtrak) ?>" name="vhms_komtrak" size="5">
                                    <?= form_error(vhms_komtrak, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(vhms_komtrak_remark) ?>" name="vhms_komtrak_remark" size="5">
                                    <?= form_error(vhms_komtrak_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(emergency_shutdown) ?>" name="emergency_shutdown" size="5">
                                    <?= form_error(emergency_shutdown, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(emergency_shutdown_remark) ?>" name="emergency_shutdown_remark" size="5">
                                    <?= form_error(emergency_shutdown_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- Logout Switch -->
                            <tr>
                                <td>Logout Switch</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(logout_switch) ?>" name="logout_switch" size="5">
                                    <?= form_error(logout_switch, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(logout_switch_remark) ?>" name="logout_switch_remark" size="5">
                                    <?= form_error(logout_switch_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- PDU -->
                            <tr>
                                <td>PDU</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(pdu) ?>" name="pdu" size="5">
                                    <?= form_error(pdu, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(pdu_remark) ?>" name="pdu_remark" size="5">
                                    <?= form_error(pdu_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- Autolube -->
                            <tr>
                                <td>Autolube</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(autolube) ?>" name="autolube" size="5">
                                    <?= form_error(autolube, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(autolube_remark) ?>" name="autolube_remark" size="5">
                                    <?= form_error(autolube_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- Fire suppression -->
                            <tr>
                                <td>Fire suppression</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(fire_suppression) ?>" name="fire_suppression" size="5">
                                    <?= form_error(fire_suppression, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(fire_suppression_remark) ?>" name="fire_suppression_remark" size="5">
                                    <?= form_error(fire_suppression_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- Fatique warning -->
                            <tr>
                                <td>Fatique warning</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(fatique_warning) ?>" name="fatique_warning" size="5">
                                    <?= form_error(fatique_warning, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(fatique_warning_remark) ?>" name="fatique_warning_remark" size="5">
                                    <?= form_error(fatique_warning_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- Backup alarm -->
                            <tr>
                                <td>Backup alarm</td>
                                <td colspan="2">Completeness, condition and function</td>
                                <td colspan="3">Complete and normal function</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(backup_alarm) ?>" name="backup_alarm" size="5">
                                    <?= form_error(backup_alarm, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(backup_alarm_remark) ?>" name="backup_alarm_remark" size="5">
                                    <?= form_error(backup_alarm_remark, <small class="text-danger">, </small>) ?>
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
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(attachment_frame) ?>" name="attachment_frame" size="5">
                                    <?= form_error(attachment_frame, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(attachment_frame_remark) ?>" name="attachment_frame_remark" size="5">
                                    <?= form_error(attachment_frame_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                            <!-- Machine -->
                            <tr>
                                <td>Machine</td>
                                <td colspan="2">Cleaness, wear, completeness and condition</td>
                                <td colspan="3">Complete and normal condition</td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(machine) ?>" name="machine" size="5">
                                    <?= form_error(machine, <small class="text-danger">, </small>) ?>
                                </td>
                                <td class="align-middle text-center">
                                <?= $pc2000[engine_high_idle] ?>    
                                <input type="text" class="form-control no-border" value="<?= set_value(machine_remark) ?>" name="machine_remark" size="5">
                                    <?= form_error(machine_remark, <small class="text-danger">, </small>) ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
EOD;

$pdf->writeHTML($headtbl, true, false, false, false, '');
$pdf->writeHTML($rowtbl, true, false, false, false, '');

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_002.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
