<?php

class SignUp extends CI_Controller
{
    public function index()
    {
        $this->load->view('signup');
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
