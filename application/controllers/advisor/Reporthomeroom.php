<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'controllers' . DIRECTORY_SEPARATOR . 'advisor' . DIRECTORY_SEPARATOR . 'BaseController.php';

class Reporthomeroom extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('reporthomeroom_model', 'report_model');
        // $this->load->model('base_homeroom_model');
    }

    public function index()
    {
        $data['leftmenu'] = $this->load->view('advisor/menu', '', true);
        $data['data'] = $this->report_model->index();

        $this->load->view('nav', array('title' => '/ ครูที่ปรึกษา / รายงาน คป 06'));
        $this->load->view('advisor/homeroom/reporthomeroom_index', $data);
        $this->load->view('footer');
    }
    public function report()
    {
        $data = $this->report_model->data();
        
        $this->load->view('advisor/homeroom/reporthomeroom', $data);
    }
}
