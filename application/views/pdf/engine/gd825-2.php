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
            <td class="al-c bg-subhead" colspan="8">ENGINE</td>
        </tr>
        <!-- Engine Speed -->
        <!-- row 1 -->
        <tr>
            <td rowspan="2">Engine Speed</td>
            <td>Eng. Low</td>
            <td>S6D140E-2</td>
            <td rowspan="2"></td>
            <td class="al-c">600-700</td>
            <td class="al-c">-</td>
            <td class="al-c">$actual[engine_low_speed]</td>
            <td class="al-c">$actual[engine_low_speed_remark]</td>
        </tr>
        <!-- row 2 -->
        <tr>
            <td>Eng. High</td>
            <td></td>
            <td class="al-c" colspan="2">2300-2400</td>
            <td class="al-c">$actual[engine_high_speed]</td>
            <td class="al-c">$actual[engine_high_speed_remark]</td>
        </tr>
        <!-- Blow-by Press -->
        <!-- row 1 -->
        <tr>
            <td>Blow-by Press</td>
            <td>T/C Stall</td>
            <td></td>
            <td class="al-c">mm H2O</td>
            <td class="al-c">Max. 100</td>
            <td class="al-c">Max. 200</td>
            <td class="al-c">$actual[tc_stall_press]</td>
            <td class="al-c">$actual[tc_stall_press_remark]</td>
        </tr>
        <!-- Lub Oil -->
        <!-- row 1 -->
        <tr>
            <td rowspan="2">Lub Oil Press.</td>
            <td>Eng. Low</td>
            <td>S6D140-1</td>
            <td rowspan="2"></td>
            <td class="al-c">Min. 1</td>
            <td class="al-c">Min. 0.7</td>
            <td class="al-c">$actual[engine_low_press]</td>
            <td class="al-c">$actual[engine_low_press_remark]</td>
        </tr>
        <!-- row 2 -->
        <tr>
            <td>Eng. Low</td>
            <td>S6D140E-2</td>
            <td class="al-c">Min. 1.2</td>
            <td class="al-c">Min. 0.7</td>
            <td class="al-c">$actual[engine_low_press2]</td>
            <td class="al-c">$actual[engine_low_press2_remark]</td>
        </tr>
        <!-- Boost Press -->
        <!-- row 1 -->
        <tr>
            <td>Boost Press.</td>
            <td>Eng. Rated</td>
            <td>S6D140E-2</td>
            <td></td>
            <td class="al-c">Min. 590</td>
            <td class="al-c">Min. 500</td>
            <td class="al-c">$actual[engine_rated_press]</td>
            <td class="al-c">$actual[engine_rated_press_remark]</td>
        </tr>
        <!-- Exhaust Gas Temp -->
        <!-- row 1 -->
        <tr>
            <td>Exhaust Gas Temp</td>
            <td><br><br>T/C Stall</td>
            <td><br><br>S6D140E-2</td>
            <td class="al-c"><br><br>°C</td>
            <td class="al-c"><br><br>Min. 700</td>
            <td class="al-c"><br><br>Min. 700</td>
            <td class="al-c"><br><br>$actual[tc_stall_temp]</td>
            <td class="al-c"><br><br>$actual[tc_stall_temp_remark]</td>
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
