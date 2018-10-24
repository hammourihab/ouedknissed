<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

function view($view, $data = null)
{
    $ci = &get_instance();
    if ($data) {
        $ci->load->view($view, $data);
    } else {
        $ci->load->view($view);
    }
    $ci->load->view('layouts/footer');
}
