<?php namespace App\Controllers;

use App\Models\Tracer_model;
use CodeIgniter\Controller;

class Tracer extends Controller
{
    public function index()
    {
        // $model = new User_model();
        // $data['user'] = $model->getUser();
        // echo view('user_view', $data);
         echo view('tracer');
    }

    public function riwayat(){

        $tracerModel = new Tracer_model();

        //pager initialize
        $pager = \Config\Services::pager();

        $data = array(
            'tbl_laporan_tracer' => $tracerModel->paginate(10, 'post'),
            'pager' => $tracerModel->pager
        );

        return view('tracer/riwayat_view', $data);
    }

    public function store(){

        //load helper form and URL
         helper(['form', 'url']);

        //model initialize
        $tracerModel = new Tracer_model();

        //insert data into database
        $tracerModel->insert([
            'nrp' => "MHS1",
            'instansi_pekerjaan' => $this->request->getPost('instansi_pekerjaan'),
            'jenis_instansi' => $this->request->getPost('jenis_instansi'),
            'kesesuaian_instansi' => $this->request->getPost('kesesuaian_instansi'),
            'pendidikan_minimal' => $this->request->getPost('pendidikan_minimal'),
            'gaji_rata2' => $this->request->getPost('formatter'),
        ]);

          //flash message
          session()->setFlashdata('message', 'Data Berhasil Disimpan');

          return redirect()->to(base_url('tracer'));
        
    }
}