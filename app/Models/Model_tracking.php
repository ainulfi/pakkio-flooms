<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_tracking extends Model
{
    protected $table      = 'enduser_tb';
    protected $primaryKey = 'id_tbl';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'hop', 'msgId', 'dest', 'type', 'msg', 'lat', 'lon', 'time', 'timetaken'];

    public function view_data() {
        return $this->findAll();
        // return $this->db->get('enduser_tb')->result();
    }

    public function insert_tracking_data($tracking) {
        return $this->insert($tracking);
        // return $this->db->insert('enduser_tb', $tracking);
    }

}