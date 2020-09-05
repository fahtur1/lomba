<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class Pdf
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function generate($view, $data = [], $filename = 'PPM Report', $paper = 'A4', $orientation = 'potrait')
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, true);
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        $dompdf->stream("$filename.pdf", ['attachment' => false]);
    }
}
