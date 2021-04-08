<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Tracer_model;

class Tracer extends Controller
{
    public function index()
    {
        helper(['form', 'url']);
        $this->Tracer_model = new Tracer_model();
        $data['laporan'] = $this->Tracer_model->get_all_tracer();
        return view('tracer/riwayat_view', $data);
    }

    public function get_by_id(){
        if($this->request->isAJAX()){
            $id_laporan =$this->request->getVar('id_laporan');

            $this->Tracer_model = new Tracer_model();
            $row = $this->Tracer_model->find($id_laporan);
            $data =[
                'id_laporan' => $row['id_laporan'],
                'nrp' => $row['nrp'],
                'gaji_rata2' => $row['gaji_rata2'],
                'instansi_pekerjaan' => $row['instansi_pekerjaan'],

            ];

            echo json_encode($data);
        }

    }

    public function isi()
    {
        return view('tracer/tracer');
    }

    public function store()
    {

        //load helper form and URL
        helper(['form', 'url']);

        //model initialize
        $this->Tracer_model = new Tracer_model();

        //insert data into database
        $data = array(
            'nrp' => "MHS1",
            'instansi_pekerjaan' => $this->request->getPost('instansi_pekerjaan'),
            'jenis_instansi' => $this->request->getPost('jenis_instansi'),
            'kesesuaian_instansi' => $this->request->getPost('kesesuaian_instansi'),
            'pendidikan_minimal' => $this->request->getPost('pendidikan_minimal'),
            'gaji_rata2' => $this->request->getPost('formatter'),
        );

        $insert = $this->Tracer_model->tracer_add($data);
        echo json_encode(array("status" => true));

        //flash message
        session()->setFlashdata('message', 'Data Berhasil Disimpan');

        return redirect()->to(base_url('tracer'));

    }

    public function ajax_edit($id)
    {

        $this->Book_model = new Book_model();

        $data = $this->Book_model->get_by_id($id);

        echo json_encode($data);
    }

    public function book_update()
    {

        helper(['form', 'url']);
        $this->Book_model = new Book_model();

        $data = array(
            'book_isbn' => $this->request->getPost('book_isbn'),
            'book_title' => $this->request->getPost('book_title'),
            'book_author' => $this->request->getPost('book_author'),
            'book_category' => $this->request->getPost('book_category'),
        );
        $this->Book_model->book_update(array('book_id' => $this->request->getPost('book_id')), $data);
        echo json_encode(array("status" => true));
    }

    public function book_delete($id)
    {

        helper(['form', 'url']);
        $this->Book_model = new Book_model();
        $this->Book_model->delete_by_id($id);
        echo json_encode(array("status" => true));
    }

}