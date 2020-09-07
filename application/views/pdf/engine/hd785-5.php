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
        <td class="text-white text-center font-weight-bold font-italic" colspan="8">
            ENGINE
        </td>
    </tr>
    <!-- Engine Speed -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="6">
            Engine Speed
        </td>
        <td colspan="2" class="align-middle">
            Low Idling, Low
        </td>
        <td class="align-middle text-center" rowspan="6">Rpm</td>
        <td colspan="2" class="text-center">625 - 675</td>
        <td class="align-middle text-center">
            $actual[engine_low]
        </td>
        <td class="align-middle text-center">
            $actual[engine_low_remark]
        </td>
    </tr>
    <!-- row 2 -->
    <tr>
        <td colspan="2">
            Low Idling, Hi
        </td>
        <td class="text-center" colspan="2">970 - 1030</td>
        <td class="align-middle text-center">
            $actual[engine_hi]
        </td>
        <td class="align-middle text-center">
            $actual[engine_hi_remark]
        </td>
    </tr>
    <!-- row 3 -->
    <tr>
        <td colspan="2">
            Power Mode High Idling
        </td>
        <td class="text-center" colspan="2">2300 - 2400</td>
        <td class="align-middle text-center">
            $actual[engine_power]
        </td>
        <td class="align-middle text-center">
            $actual[engine_power_remark]
        </td>
    </tr>
    <!-- row 4 -->
    <tr>
        <td colspan="2">
            Economy Mode High Idling
        </td>
        <td class="text-center" colspan="2">2250 - 2350</td>
        <td class="align-middle text-center">
            $actual[engine_eco]
        </td>
        <td class="align-middle text-center">
            $actual[engine_eco_remark]
        </td>
    </tr>
    <!-- row 5 -->
    <tr>
        <td rowspan="2" class="align-middle text-center">
            Power Mode T/C Stall
        </td>
        <td class="text-center">High power mode</td>
        <td class="text-center" colspan="2">
            1940-2140 (sn. 4001-4187)<br>
            1790-1990 (sn. 4188 - up)
        </td>
        <td class="align-middle text-center">
            $actual[engine_power_high]
        </td>
        <td class="align-middle text-center">
            $actual[engine_power_high_remark]
        </td>
    </tr>
    <!-- row 6 -->
    <tr>
        <td class="text-center">Economy mode</td>
        <td class="text-center" colspan="2">
            1850-2050 (sn. 4001-4187) <br>
            1730-1930 (sn. 4188 - up)
        </td>
        <td class="align-middle text-center">
            $actual[engine_power_eco]
        </td>
        <td class="align-middle text-center">
            $actual[engine_power_eco_remark]
        </td>
    </tr>
    <!-- Blow-by Press -->
    <!-- row 1 -->
    <tr>
        <td>Blow-by Press</td>
        <td colspan="2">Power Mode T/C Stall</td>
        <td class="align-middle text-center">mmAq</td>
        <td>Max. 150</td>
        <td>Max. 300</td>
        <td class="align-middle text-center">
            $actual[blow_power]
        </td>
        <td class="align-middle text-center">
            $actual[blow_power_remark]
        </td>
    </tr>
    <!-- Lub Oil -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="2">Lub Oil Press.</td>
        <td colspan="2">Power mode High Idling</td>
        <td class="align-middle text-center" rowspan="2">Kg/cm2</td>
        <td>3.0 - 4.0</td>
        <td>Min 2.1</td>
        <td class="align-middle text-center">
            $actual[lub_power]
        </td>
        <td class="align-middle text-center">
            $actual[lub_power_remark]
        </td>
    </tr>
    <!-- row 2 -->
    <tr>
        <td colspan="2" class="align-middle">Low Idling, Low</td>
        <td>Min. 1</td>
        <td>Min. 0.7</td>
        <td class="align-middle text-center">
            $actual[lub_low]
        </td>
        <td class="align-middle text-center">
            $actual[lub_low_remark]
        </td>
    </tr>
    <!-- Boost Press -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="2">Boost Press.</td>
        <td class="align-middle" rowspan="2">T/C Stall</td>
        <td>RH</td>
        <td class="align-middle text-center" rowspan="2">mmHg</td>
        <td class="align-middle text-center" rowspan="2">Min. 950</td>
        <td class="align-middle text-center" rowspan="2">Min. 850</td>
        <td class="align-middle text-center">
            $actual[boost_stall_rh]
        </td>
        <td class="align-middle text-center">
            $actual[boost_stall_rh_remark]
        </td>
    </tr>
    <tr>
        <td>LH</td>
        <td class="align-middle text-center">
            $actual[boost_stall_lh]
        </td>
        <td class="align-middle text-center">
            $actual[boost_stall_lh_remark]
        </td>
    </tr>
    <!-- Exhaust Gas Temp -->
    <!-- row 1 -->
    <tr>
        <td class="align-middle" rowspan="3">Exhaust Gas Temp.</td>
        <td class="align-middle" colspan="2">Ambient Temp.</td>
        <td class="align-middle text-center" rowspan=" 3">°C</td>
        <td class="text-center">-</td>
        <td class="text-center">-</td>
        <td class="align-middle text-center">
            $actual[exhaust_ambient]
        </td>
        <td class="align-middle text-center">
            $actual[exhaust_ambient_remark]
        </td>
    </tr>
    <!-- row 2 -->
    <tr>
        <td class="align-middle" rowspan="2">T/C Stall</td>
        <td>RH</td>
        <td class="align-middle text-center" rowspan="2">Max. 650</td>
        <td class="align-middle text-center" rowspan="2">Max. 700</td>
        <td class="align-middle text-center">
            $actual[exhaust_stall_rh]
        </td>
        <td class="align-middle text-center">
            $actual[exhaust_stall_rh_remark]
        </td>
    </tr>
    <!-- row 3 -->
    <tr>
        <td>LH</td>
        <td class="align-middle text-center">
            $actual[exhaust_stall_lh]
        </td>
        <td class="align-middle text-center">
            $actual[exhaust_stall_lh_remark]
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
