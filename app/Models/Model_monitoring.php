<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_monitoring extends Model
{
    protected $table      = 'sensor_tb';
    protected $primaryKey = 'id_tbl';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'hop', 'wake', 'sen_w', 'sen_h', 'sen_t', 'timetaken'];

     public function view_data() {
        return $this->findAll();
        // return $this->db->get('sensor_tb')->result();
    }

    public function last_record() {
        $last_row = $this->orderBy('id_tbl', 'DESC')->first();
        return $last_row;
        // $last_row = $this->db->select('*')
        //              ->order_by('id', 'DESC')
        //              ->limit(1)
        //              ->get('sensor_tb')
        //              ->row();
    }

    // for testing in my local comp
    // public function insert_data_sensor($sensor) {
    //     return $this->db->insert('tb_sensor', $sensor);
    // }

    // for server
    public function insert_sensor_data($sensor) {
        return $this->insert($sensor);
        // return $this->db->insert('sensor_tb', $sensor);
    }

    // for chart
    public function get_temperature_data() {
        return $this->select('sen_t, timetaken')->findAll();
        // $query = $this->db->select('sen_t, timetaken')->get('sensor_tb');
        // return $query->result();
    }
    public function get_water_data() {
        return $this->select('sen_w, timetaken')->findAll();
        // $query = $this->db->select('sen_w, timetaken')->get('sensor_tb');
        // return $query->result();
    }
    public function get_humidity_data() {
        return $this->select('sen_h, timetaken')->findAll();
        // $query = $this->db->select('sen_h, timetaken')->get('sensor_tb');
        // return $query->result();
    }

    public function get_last_data(){ //stdObject
        return $this->orderBy('id_tbl', 'desc')->first();
        //  $query = $this->db->order_by('id','desc')->limit(1)->get('sensor_tb');
        // return $query->row();
    }

    public function count_all_data(){
        return $this->countAllResults();
        // $count_all= $this->db->where('sen_t','timetaken')->from('sensor_tb')->get()->num_rows(); //count all data temperature
        // $count_all= $this->db->from('sensor_tb')->get();
        // return $count_all->num_rows();
    }
}