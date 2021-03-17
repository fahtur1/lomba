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
        <td width="45%"> $actual[product_code]</td>
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
            <td class="al-c">$actual[engine_low_idle]</td>
            <td class="al-c">$actual[engine_low_idle_remark]</td>
        </tr>
        <!-- row 3 -->
        <tr>
            <td colspan="2">Engine: Full throttle. Boom: raise relieve.</td>
            <td class="al-c" colspan="2"><br><br>1680 - 1880</td>
            <td class="al-c"><br><br>$actual[engine_high_idle]</td>
            <td class="al-c"><br><br>$actual[engine_high_idle_remark]</td>
        </tr>
        <!-- row 4 -->
        <tr>
            <td colspan="2">Engine: Full throttle. Boom: raise relieve + Heavy lift : ON</td>
            <td class="al-c" colspan="2"><br><br>1680 - 1880</td>
            <td class="al-c"><br><br>$actual[engine_full_throttle_raise]</td>
            <td class="al-c"><br><br>$actual[engine_full_throttle_raise_remark]</td>
        </tr>
        <!-- row 6 -->
        <tr>
            <td colspan="2">Auto decelaration switch: ON. Fuel control dial: Max. Control Valve: neutral</td>
            <td class="al-c" colspan="2"><br><br><br>1300 - 1500</td>
            <td class="al-c"><br><br><br>$actual[engine_full_throttle_heavy]</td>
            <td class="al-c"><br><br><br>$actual[engine_full_throttle_heavy_remark]</td>
        </tr>
        <!-- Blow-by Press -->
        <!-- row 1 -->
        <tr>
            <td>Blow-by Pressure</td>
            <td colspan="2"><br><br>At rated horsepower. </td>
            <td class="al-c">kPa<br><br>{mmH2O}</td>
            <td class="al-c">Max. 2.94<br><br>{Max. 300}</td>
            <td class="al-c">Max. 5.88<br><br>{Max. 600}</td>
            <td class="al-c"><br><br>$actual[engine_control_valve_neutral]</td>
            <td class="al-c"><br><br>$actual[engine_control_valve_neutral_remark]</td>
        </tr>
        <!-- Engine oil -->
        <!-- row 1 -->
        <tr>
            <td rowspan="2"><br><br><br>Engine oil Pressure.</td>
            <td colspan="2">Run engine at low idle (SAE30) </td>
            <td class="al-c" rowspan="2"><br><br><br>Mpa<br><br>{kg/cm2}</td>
            <td class="al-c">Min 0.08<br><br>{Min 0.8}</td>
            <td class="al-c">Min 0.06<br><br>{Min 0.06}</td>
            <td class="al-c"><br><br>$actual[blow_horsepower]</td>
            <td class="al-c"><br><br>$actual[blow_horsepower_remark]</td>
        </tr>
        <!-- row 2 -->
        <tr>
            <td colspan="2">Run engine at high idle (SAE30)</td>
            <td class="al-c">0.29 - 0.44<br><br>{3.0 - 4.5}</td>
            <td class="al-c">Min 0.2<br><br>{Min 2.0}</td>
            <td class="al-c"><br><br>$actual[oil_run_low_idle]</td>
            <td class="al-c"><br><br>$actual[oil_run_low_idle_remark]</td>
        </tr>
        <!-- Boost Press -->
        <!-- row 1 -->
        <tr>
            <td>Boost Pressure</td>
            <td colspan="2"><br><br>At rated horsepower. </td>
            <td class="al-c">kPa<br><br>{mmHg}</td>
            <td class="al-c">Max. 125.7<br><br>{ Max. 950 }</td>
            <td class="al-c"><br><br>Limit is not set</td>
            <td class="al-c"><br><br>$actual[oil_run_high_idle]</td>
            <td class="al-c"><br><br>$actual[oil_run_high_idle_remark]</td>
        </tr>
        <!-- Exhaust Temperature -->
        <!-- row 1 -->
        <tr>
            <td rowspan="2">At all speed range.</td>
            <td colspan="2">Ambient Temp.</td>
            <td class="al-c" rowspan="2"><br><br>°C</td>
            <td class="al-c">Max 700</td>
            <td class="al-c">Max 750</td>
            <td class="al-c">$actual[boost_horsepower]</td>
            <td class="al-c">$actual[boost_horsepower_remark]</td>
        </tr>
        <!-- row 2 -->
        <tr>
            <td colspan="2">Ambient temperature</td>
            <td class="al-c">20</td>
            <td class="al-c">20</td>
            <td class="al-c">$actual[exhaust_ambient_temp]</td>
            <td class="al-c">$actual[exhaust_ambient_temp_remark]</td>
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
