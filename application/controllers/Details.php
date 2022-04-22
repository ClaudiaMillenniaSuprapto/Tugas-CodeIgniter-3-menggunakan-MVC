<?php

class Details extends CI_Controller
{
    public function index()
    {
        $this->load->view('details');
    }

    public function home($a)
    {
        echo $a;
    }

    public function notFound()
    {
        echo "Halaman Tidak Tersedia!";
    }
}
