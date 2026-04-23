<?php

namespace App\Controllers;

class Monitoring extends BaseController
{
    
	public function index(){
        $Model_monitoring = new \App\Models\Model_monitoring();

        $data['sensor_tb'] = $Model_monitoring->view_data();
        $data['last_record'] = $Model_monitoring->last_record();

		$temp = $Model_monitoring->get_temperature_data();
		$humid = $Model_monitoring->get_humidity_data();
		$water = $Model_monitoring->get_water_data();
        
        // $data['temperature_data'] = array_reverse($temp);
        // $data['temperature_data'] = json_encode(array_column($temp, 'sen_t', 'timetaken'), JSON_NUMERIC_CHECK);
        $data['temperature_data'] = $temp;
        $data['humidity_data'] = $humid;
        $data['water_data'] = $water;

        $data['last_data'] = $Model_monitoring->get_last_data();
        $data['count_all'] = $Model_monitoring->count_all_data();

        return view('view_monitoring', $data);
		// $this->load->view('view_monitoring',$data);
	}

    // ============= for testing in server ================ //
	public function read_sensor(){
        $Model_monitoring = new \App\Models\Model_monitoring();

        $id = $this->request->getGet('id'); //retrieve id
        $hop = $this->request->getGet('hop'); //retrieve hop
        $wake = $this->request->getGet('wake'); //retrieve wake
        $sen_w = $this->request->getGet('sen_w'); //retrieve water level
        $sen_h = $this->request->getGet('sen_h'); //retrieve humidity
        $sen_t = $this->request->getGet('sen_t'); //retrieve temperature

        echo $id;
        echo $hop;
        echo $wake;
        echo $sen_w;
        echo $sen_h;
        echo $sen_t;
        
        $sensor = array(
            'id' => $id,
            'hop' => $hop,
            'wake' => $wake,
            'sen_w' => $sen_w,
            'sen_h' => $sen_h,
            'sen_t' => $sen_t,
        );

        // insert data to table
        $Model_monitoring->insert_sensor_data($sensor);
        // $Model_monitoring->insert_monitoring_data($sensor);
	}
	// ============= end ================ //



	// public function monitoring_chart() {
    //     $data_points = $this->Model_monitoring->view_data();

    //     // Format data for Highcharts: needs separate arrays for labels and values
    //     $labels = array();
    //     $values = array();

    //     foreach ($data_points as $point) {
    //         $labels[] = $point->label;
    //         $values[] = (int)$point->value; // Cast to integer
    //     }

    //     // Pass data to the view as JSON strings
    //     $view_data['chart_labels_json'] = json_encode($labels);
    //     $view_data['chart_values_json'] = json_encode($values, JSON_NUMERIC_CHECK);

    //     $this->load->view('view_monitoring', $view_data);
    // }
}
