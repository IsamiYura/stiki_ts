<?php namespace App\Models;

use CodeIgniter\Model;

class Tracer_model extends Model
{

    protected $table      = 'tbl_laporan_tracer';
    protected $primaryKey = 'id_laporan';

    public function __construct()
    {
        parent::__construct();
        //$this->load->database();
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_laporan_tracer');
    }

    public function get_all_tracer()
    {
        //       $query = $this->db->table('books');
        $query = $this->db->query('select * from tbl_laporan_tracer');
        //      print_r($query->getResult());
        // $query = $this->db->get();
        return $query->getResult();
    }

    public function get_by_nrp($nrp)
    {
        //nrp didapat dari nrp di session
        $query = $this->db->query("select * from tbl_laporan_tracer where nrp ='$nrp'");

        return $query->getResult();
    }

    public function tracer_add($data)
    {

        $query = $this->db->table($this->table)->insert($data);

        return $this->db->insertID();
    }

    public function delete_by_id($id) {
        $this->db->table($this->table)->delete(array('id_laporan' => $id)); 
    }

}