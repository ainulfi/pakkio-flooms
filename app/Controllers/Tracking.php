<?php

namespace App\Controllers;

class Tracking extends BaseController
{
    
	public function index(){
        $Model_tracking = new \App\Models\Model_tracking();

        $data['enduser_tb'] = $Model_tracking->view_data();

		// $this->load->view('template/view_header');
		// $this->load->view('view_tracking',$data);
		// $this->load->view('template/view_footer');

        return view('view_tracking', $data);
		// $this->load->view('view_tracking',$data);
	}

    // ============= for testing in server ================ //
	public function read_tracking(){
        $Model_tracking = new \App\Models\Model_tracking();

        $id = $this->request->getGet('id'); //retrieve id
        $hop = $this->request->getGet('hop'); //retrieve hop
        $msgId = $this->request->getGet('msgId'); //retrieve wake
        $dest = $this->request->getGet('dest'); //retrieve water level
        $type = $this->request->getGet('type'); //retrieve humidity
        $msg = $this->request->getGet('msg'); //retrieve temperature
        $lat = $this->request->getGet('lat'); //retrieve temperature
        $lon = $this->request->getGet('lon'); //retrieve temperature
        $time = $this->request->getGet('time'); //retrieve temperature

        echo $id;
        echo $hop;
        echo $msgId;
        echo $dest;
        echo $type;
        echo $msg;
        echo $lat;
        echo $lon;
        echo $time;
        
        $tracking = array(
            'id' => $id,
            'hop' => $hop,
            'msgId' => $msgId,
            'dest' => $dest,
            'type' => $type,
            'msg' => $msg,
            'lat' => $lat,
            'lon' => $lon,
            'time' => $time,
        );
        $Model_tracking->insert_tracking_data($tracking);
	}
	// ============= end ================ //
}
