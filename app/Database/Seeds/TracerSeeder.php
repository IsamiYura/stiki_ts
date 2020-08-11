<?php

namespace App\Database\Seeds;

class TracerSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
    
        $faker = \Faker\Factory::create('id_ID');



        for ($i = 0; $i < 200; $i++) {

            $nrp = array("MHS1", "MHS2","MHS3", "MHS4", "MHS5", "MHS6", "MHS7", "MHS8", "MHS9", "MHS10");
            $instansi_pekerjaan = array("Teknologi Informasi", "Instansi Pemerintah", "Pendidikan dan Pengajaran", "Wiraswasta / Startup", "Perusahaan Swasta");
            $sesuai = array("Tidak Sesuai", "Sesuai");
            $sekolah = array("SMA Sederajat", "Strata 1", "Strata 2", "Diploma 3", "Diploma 1");

            $data = [
                'nrp' => $nrp[array_rand($nrp)],
                'instansi_pekerjaan' => $faker -> company,
                'jenis_instansi' => $instansi_pekerjaan[array_rand($instansi_pekerjaan)],
                'tanggal_masuk' => $faker -> date($format = 'Y-m-d', $max = '2020-06-01'),
                'kesesuaian_instansi' => $sesuai[array_rand($sesuai)],
                'pendidikan_minimal' => $sekolah[array_rand($sekolah)],
                'gaji_rata2' => $faker->numberBetween(500000,10000000),
            ];
            print_r($data);
            $this->db->table('tbl_laporan_tracer')->insert($data);
        }

    }
}