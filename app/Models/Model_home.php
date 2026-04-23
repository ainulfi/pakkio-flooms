<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_home extends Model
{
    protected $table      = 'sensor_tb';
    protected $primaryKey = 'id_tbl';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'hop', 'wake', 'sen_w', 'sen_h', 'sen_t', 'timetaken'];

    public function view_data() {
        return $this->findAll();
        // return $this->db->get('tb_sensor')->result();
    }

    // for chart
    public function get_temperature_data() {
        return $this->select('sen_t, timetaken')->orderBy('id_tbl', 'DESC')->limit(25)->findAll();
        // return $this->select('sen_t, timetaken')->findAll();

        // $builder = $this->db->table('sensor_tb');
        // $query   = $builder->select('sen_t, timetaken')->get();
    
        // return $query->getResult(); // result() in CI3 becomes getResult() in CI4
    }
    public function get_water_data() {
        return $this->select('sen_w, timetaken')->findAll();
    }
    public function get_humidity_data() {
        return $this->select('sen_h, timetaken')->findAll();
    }

    public function get_last_data(){ //stdObject
        return $this->orderBy('id', 'desc')->first();
    }

    public function count_all_data(){
        return $this->countAllResults();
    }

    public function count_all_sar(){
        $db = \Config\Database::connect();
        $builder = $db->table('enduser_tb');
        
        return $builder->countAllResults();
    }
}