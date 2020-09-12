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
