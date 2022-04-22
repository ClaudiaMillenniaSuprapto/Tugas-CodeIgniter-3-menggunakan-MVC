<?php

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
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
