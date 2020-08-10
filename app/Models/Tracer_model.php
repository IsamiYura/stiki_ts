<?php namespace App\Models;

use CodeIgniter\Model;

class Tracer_model extends Model
{
    protected $table = 'tbl_laporan_tracer';

    protected $allowedFields = ['nrp', 'instansi_pekerjaan','jenis_instansi','kesesuaian_instansi','pendidikan_minimal','gaji_rata2'];

}
