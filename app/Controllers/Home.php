<?php

namespace App\Controllers;

class Home extends BaseController
{
    
	public function index(){
        $Model_home = new \App\Models\Model_home();

        // $data['sensor_tb'] = $Model_home->view_data()->findAll();
        $data['sensor_tb'] = $Model_home->orderBy('id_tbl', 'DESC')->findAll();
		// $data['sensor_tb'] = $Model_home->view_data();

		$data['last_data'] = $Model_home->get_last_data();
		$data['count_all'] = $Model_home->count_all_data();
		$data['count_all_sar'] = $Model_home->count_all_sar();

        return view('view_home', $data);
		// $this->load->view('view_home',$data);
	}
    // public function __construct(){
	// 	parent::__construct();		
	// 	$this->load->model('Model_home');
    //     $this->load->helper('url');
	// }
}
