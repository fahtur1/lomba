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
$pdf->SetTitle('TCPDF Example 002');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

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
<table class="table" width="100%" cellpadding="2" border="1">
    <thead>
        <tr class="al-c bg-heading">
            <th><b>ITEM</b></th>
            <th colspan="2"><b>CONDITION</b></th>
            <th><b>UNIT</b></th>
            <th><b>STD</b></th>
            <th><b>PMS</b></th>
            <th><b>ACTUAL</b></th>
            <th><b>REMARK</b></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="al-c bg-subhead" colspan="8"><b><i>ENGINE</i></b></td>
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
            <td class="al-c"></td>
            <td class="al-c"></td>
        </tr>
        <!-- row 2 -->
        <tr>
            <td colspan="2">
                Engine: High idle
            </td>
            <td class="al-c" colspan="2">1930 - 2030</td>
            <td class="al-c"></td>
            <td class="al-c"></td>
        </tr>
        <!-- row 3 -->
        <tr>
            <td colspan="2">
                Engine: Full throttle. Boom: raise relieve.
            </td>
            <td class="al-c" colspan="2">1680 - 1880</td>
            <td class="al-c"></td>
            <td class="al-c"></td>
        </tr>
        <!-- row 4 -->
        <tr>
            <td colspan="2">
                Engine: Full throttle. <br>Boom: raise relieve + Heavy lift : ON.
            </td>
            <td class="al-c" colspan="2">1680 - 1880</td>
            <td class="al-c"></td>
            <td class="al-c"></td>
        </tr>

        <!-- row 6 -->
        <tr>
            <td colspan="2" class="al-c">
                Auto decelaration switch: ON. Fuel control dial: Max. <br>Control Valve: neutral
            </td>
            <td class="al-c" colspan="2">1300 - 1500</td>
            <td class="al-c"></td>
            <td class="al-c"></td>
        </tr>

        <!-- Blow-by Press -->
        <!-- row 1 -->
        <tr>
            <td>Blow-by Pressure</td>
            <td colspan="2">At rated horsepower. </td>
            <td class="al-c">kPa<br>{mmH2O}</td>
            <td>Max. 2.94 <br> { Max. 300 }</td>
            <td>Max. 5.88 <br> { Max. 600 }</td>
            <td class="al-c"></td>
            <td class="al-c"></td>
        </tr>
        <!-- Engine oil -->
        <!-- row 1 -->
        <tr>
            <td class="" rowspan="2">Engine oil Pressure.</td>
            <td colspan="2" class="">Run engine at low idle (SAE30) </td>
            <td class="al-c" rowspan="2">Mpa <br> { kg/cm2 }</td>
            <td class="al-c">Min 0.08 <br> { Min 0.8 }</td>
            <td class="al-c">Min 0.06 <br> { Min 0.06 }</td>
            <td class="al-c"></td>
            <td class="al-c"></td>
        </tr>
        <!-- row 2 -->
        <tr>
            <td colspan="2" class="">Run engine at high idle (SAE30)</td>
            <td class="al-c">0.29 - 0.44 <br> { 3.0 - 4.5 }</td>
            <td class="al-c">Min 0.2 <br> { Min 2.0 }</td>
            <td class="al-c"></td>
            <td class="al-c"></td>
        </tr>
        <!-- Boost Press -->
        <!-- row 1 -->
        <tr>
            <td>Boost Pressure</td>
            <td colspan="2">At rated horsepower. </td>
            <td class="al-c">kPa<br>{mmHg}</td>
            <td class="al-c">Max. 125.7 <br> { Max. 950 }</td>
            <td class="al-c">Limit is not set</td>
            <td class="al-c"></td>
            <td class="al-c"></td>
        </tr>
        <!-- Exhaust Temperature -->
        <!-- row 1 -->
        <tr>
            <td class="" rowspan="2">At all speed range.</td>
            <td class="" colspan="2">Ambient Temp.</td>
            <td class="al-c" rowspan="2">°C</td>
            <td class="al-c">Max 700</td>
            <td class="al-c">Max 750</td>
            <td class="al-c"></td>
            <td class="al-c"></td>
        </tr>
        <!-- row 2 -->
        <tr>
            <td class="" colspan="2">Ambient temperature</td>
            <td class="al-c">20</td>
            <td class="al-c">20</td>
            <td class="al-c"></td>
            <td class="al-c"></td>
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
$pdf->Output('example_002.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+